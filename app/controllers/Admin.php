
<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class Admin extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            $this->load->model('Admin_photos_model');
            $this->load->model('Admin_videos_model');
            $this->load->helper(['url','html','form','url_helper']);
            $this->load->library(['form_validation','session']);
        }
        // Homepage (landing page)
        // =========================================
        public function index() {
            // homepage of admin interface
        }

        // Photos (list, upload, edit, delete)
        // =========================================
        public function photo_index() {
            $data = ['photos' => $this->Admin_photos_model->all()];
            $this->load->view('admin/photos/index', $data);
        }
        public function photo_upload() {

            $rules = [
                [
                    'field' => 'caption',
                    'label' => 'Caption'
                ],[
                    'field' => 'description',
                    'label' => 'Description'
                ],[
                    'field' => 'series',
                    'label' => 'Series',
                    'rules' => 'required'
                ]
            ];

            $this->form_validation->set_rules($rules);
            
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/photos/upload');
            } else {
                $series = str_replace(' ', '', strtolower($_POST['series']));
                $caption = $_POST['caption'];
                $description = $_POST['description'];
                $upload_path = './img/photos/'.$series.'/';
                $num = 1; // init uploaded file num in series
                $message = "Uploading image.<br />";

                if (!file_exists($upload_path)) { //check if series dir exists
                    mkdir($upload_path, 0777, true); // create dir if !exist
                    $message .= "Created directory ".$upload_path.".<br />";
                    $message .= "Added photo number ".$num." to ".$upload_path.".<br />";
                } else {
                    $num = $num + $this->db->where('series', $series)->count_all_results('photos');
                    $message .= "Added photo number ".$num." to ".$upload_path.".<br />";
                };

                $config = [
                    'upload_path'   => $upload_path,
                    'allowed_types' => 'gif|jpg|jpeg|png'
                ];

                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload()) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/photos/upload', $error);
                } else {
                    $file = $this->upload->data();    
                    $filename = $file['file_name'];
                    $file_raw_name = $file['raw_name'];                    
                    $file_ext = $file['file_ext'];
                    $file_width = $file['image_width'];
                    $file_height = $file['image_height'];
                    $file_uploaded = $upload_path.$filename;
                    
                    $data = [
                        'name'          => $file_raw_name,
                        'filetype'      => $file_ext,
                        'series'        => $series,
                        'num'           => $num,
                        'caption'       => $caption,
                        'description'   => $description
                    ];
                    
                    $this->Admin_photos_model->upload($data);

                    $this->load->library('image_moo'); //create thumbnail, upload
                    
                    // messages generating thumbs
                    $filename_thumb_lg = $file_raw_name."_thumb_lg".$file_ext;
                    $filename_thumb_med = $file_raw_name."_thumb_med".$file_ext;
                    $filename_thumb_sm = $file_raw_name."_thumb_sm".$file_ext;
                    $message_thumb_lg = "Added ".$filename_thumb_lg." to ".$upload_path.".<br />";
                    $message_thumb_med = "Added ".$filename_thumb_med." to ".$upload_path.".<br />";
                    $message_thumb_sm = "Added ".$filename_thumb_sm." to ".$upload_path.".<br />";

                    if ($file_width >= 1024) {
                        $this->image_moo->load($file_uploaded)
                            ->resize_crop(1024,720) ->save_pa('', '_thumb_lg', TRUE)
                            ->resize_crop(640,450)  ->save_pa('', '_thumb_med', TRUE)
                            ->resize_crop(450,316)  ->save_pa('', '_thumb_sm', TRUE);
                        $message .= $message_thumb_lg.$message_thumb_med.$message_thumb_sm;   
                    } else if ($file_width >= 640) {
                        $this->image_moo->load($file_uploaded)
                            ->resize_crop(640,450)  ->save_pa('', '_thumb_med', TRUE)
                            ->resize_crop(450,316)  ->save_pa('', '_thumb_sm', TRUE);
                        $message .= $message_thumb_med.$message_thumb_sm;
                    } else if ($file_width >= 450 || $file_width < 450) {
                        $this->image_moo->load($file_uploaded)
                            ->resize_crop(450,316)  ->save_pa('', '_thumb_sm', TRUE);
                        $message .= $message_thumb_sm;
                    } else if ($this->image_moo->error) {
                        $message .= $this->image_moo->display_errors();
                    } else {
                        $message .= "Unable to generate thumbnails.<br />";
                    };

                    $this->session->set_flashdata('message', $message);
                    redirect('admin/photos');
                };
            };
        }
        /*
        public function photo_edit($id) {
            $this->Admin_photos_model->delete($id);
            $this->session->set_flashdata('message','Image has been deleted..');
            redirect('admin/photos');
        }
        */
        /*
        public function photo_delete($id) {
            $this->Admin_photos_model->delete($id);
            $this->session->set_flashdata('message','Image has been deleted..');
            redirect('admin/photos');
        }
        */
        /* Videos (List, Upload, Edit, Delete)
        /* ======================================================= */
        public function video_index() {
            $data = ['videos' => $this->Admin_videos_model->all()];
            $this->load->view('admin/videos/index', $data);
        }
        public function video_create() {
            
            $rules = [
                [
                    'field' => 'title',
                    'label' => 'Title',
                    'rules' => 'required'
                ],[
                    'field' => 'url',
                    'label' => 'URL',
                    'rules' => 'required'
                ],[
                    'field' => 'summary',
                    'label' => 'Summary',
                    'rules' => 'required'
                ]
            ];

            $this->form_validation->set_rules($rules);
            
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/videos/create');
            } else {
                $title = $_POST['title'];
                $url = $_POST['url'];
                $summary = $_POST['summary'];
                $upload_path = './img/video_thumbs/';
                $message = "Uploading thumbnail.<br />";

                $config = [
                    'upload_path'   => $upload_path,
                    'allowed_types' => 'gif|jpg|jpeg|png'
                ];

                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload()) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/videos/create', $error);
                } else {
                    $file = $this->upload->data();    
                    $filename = $file['file_name'];
                    $file_raw_name = $file['raw_name'];                    
                    $file_ext = $file['file_ext'];
                    $file_width = $file['image_width'];
                    $file_height = $file['image_height'];
                    $file_uploaded = $upload_path.$filename;
                    
                    $data = [
                        'thumbnail'         => $file_raw_name,
                        'url'               => $url,
                        'title'             => $title,
                        'summary'           => $summary,
                        'thumb_filetype'    => $file_ext
                    ];
                    
                    $this->Admin_videos_model->create($data);

                    $this->load->library('image_moo'); //create thumbnail, upload
                    
                    // messages generating thumbs
                    $filename_thumb_lg = $file_raw_name."_thumb_lg".$file_ext;
                    $filename_thumb_med = $file_raw_name."_thumb_med".$file_ext;
                    $filename_thumb_sm = $file_raw_name."_thumb_sm".$file_ext;
                    $message_thumb_lg = "Added ".$filename_thumb_lg." to ".$upload_path.".<br />";
                    $message_thumb_med = "Added ".$filename_thumb_med." to ".$upload_path.".<br />";
                    $message_thumb_sm = "Added ".$filename_thumb_sm." to ".$upload_path.".<br />";

                    if ($file_width >= 1024) {
                        $this->image_moo->load($file_uploaded)
                            ->resize_crop(1024,740) ->save_pa('', '_thumb_lg', TRUE)
                            ->resize_crop(640,376)  ->save_pa('', '_thumb_med', TRUE)
                            ->resize_crop(450,260)  ->save_pa('', '_thumb_sm', TRUE);
                        $message .= $message_thumb_lg.$message_thumb_med.$message_thumb_sm;   
                    } else if ($file_width >= 640) {
                        $this->image_moo->load($file_uploaded)
                            ->resize_crop(640,376)  ->save_pa('', '_thumb_med', TRUE)
                            ->resize_crop(450,260)  ->save_pa('', '_thumb_sm', TRUE);
                        $message .= $message_thumb_med.$message_thumb_sm;
                    } else if ($file_width >= 450 || $file_width < 450) {
                        $this->image_moo->load($file_uploaded)
                            ->resize_crop(450,260)  ->save_pa('', '_thumb_sm', TRUE);
                        $message .= $message_thumb_sm;
                    } else if ($this->image_moo->error) {
                        $message .= $this->image_moo->display_errors();
                    } else {
                        $message .= "Unable to generate thumbnails.<br />";
                    };

                    if (is_readable($file_uploaded)) {
                        unlink($file_uploaded);
                        $message .= "Removed initial image ".$filename."<br />";
                    } else {
                        $message .= "Unable to delete initial image ".$filename."<br />";
                    };

                    $this->session->set_flashdata('message', $message);
                    redirect('admin/videos');
                };
            };
        }
        /*
        public function video_edit() {
            //
        }
        */
        /*
        public function video_delete() {
            //
        }
        */
    }