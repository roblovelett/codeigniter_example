<?php
    class Photos extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('photos_model');
            $this->load->helper('url_helper');
            $this->load->library('image_lib'); // needed for thumbnail creation
            $this->load->helper('html'); // needed for header
            $this->load->helper('url'); // needed for footer
        }
        public function index() {
            $data['photos'] = $this->photos_model->get_photos();
            $data['title'] = 'Photos';
            $this->load->view('templates/header', $data);
            $this->load->view('photos/view', $data);
            $this->load->view('templates/footer');
        }
        public function view_series($series = NULL) {
            $data['photos'] = $this->photos_model->get_series($series);
            if (empty($data['photos'])) {
                show_404();
            };
            $data['title'] = 'Photos - '.$series.' Series';
            $this->load->view('templates/header', $data);
            $this->load->view('photos/view', $data);
            $this->load->view('templates/footer');
        }
        public function view_num($series = NULL, $num = NULL) {
            $data['photos'] = $this->photos_model->get_num($series, $num);
            if (empty($data['photos'])) {
                show_404();
            };
            $data['title'] = 'Photo - '.$series.' Series - '.$num;
            $this->load->view('templates/header', $data);
            $this->load->view('photos/view', $data);
            $this->load->view('templates/footer');
        }
    }