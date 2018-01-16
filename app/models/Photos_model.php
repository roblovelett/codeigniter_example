<?php
    class Photos_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }
        public function get_photos() {
            $query = $this->db->get('photos');
            return $query->result_array();
        }
        public function get_series($series = FALSE) {
            $query = $this->db->get_where('photos', array('series' => $series));
            return $query->result_array();
        }
        public function get_num($series = FALSE, $num = FALSE) {
            $query = $this->db->where('series', $series)->where('num', $num)->get('photos');
            return $query->result_array();
        }
    }