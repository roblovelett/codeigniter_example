<?php
    class Comments extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('comments_model');
            $this->load->helper('url_helper');
            $this->load->helper('html'); // needed for header
            $this->load->helper('url'); // needed for footer
        }
        public function index() {
            $data['comments'] = $this->comments_model->get_comments();
            $data['title'] = 'Comments';
            $this->load->view('templates/header', $data);
            $this->load->view('comments/index', $data);
            $this->load->view('templates/footer');
        }
        public function view($id = NULL) {
            $data['comment'] = $this->comments_model->get_comments($id);
            if (empty($data['comment'])) {
                show_404();
            };
            $data['title'] = 'Comment';
            $this->load->view('templates/header', $data);
            $this->load->view('comments/view', $data);
            $this->load->view('templates/footer');
        }
        public function create() {   
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['title'] = 'Submit comment.';
            $this->form_validation->set_rules('input-comment-text', 'Comment', 'required');
            //$this->form_validation->set_rules('text', 'Text', 'required');
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('comments/create');
                $this->load->view('templates/footer');
            } else {
                $data['title'] = 'Submitted comment.';
                $this->comments_model->set_comments();
                $this->load->view('templates/header', $data);
                $this->load->view('comments/success');
                $this->load->view('templates/footer');
            };
        }
    }