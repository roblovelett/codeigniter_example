<?php
    class Pages extends CI_Controller {
        public function __construct() {
            parent::__construct();
            //this->load->model('comments_model');
            //$this->load->helper('url_helper');
            $this->load->helper('html'); // needed for header
            $this->load->library('markdown'); // needed for markdown parsing to html
            $this->load->helper('url'); // needed for footer
        }
        public function view($page = 'home') {
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();   // Whoops, we don't have a page for that!
            };
            
            $data = [
                'title'   => 'Over The Lege - '.ucfirst($page),
                'md_url'  => './md/home.md'
            ];
            
            $this->load->helper('form'); // needed for comment box
            $this->load->library('form_validation'); // needed for comment box
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
        }
    }