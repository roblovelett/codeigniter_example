<?php
class Comments_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }
        public function get_comments($id = FALSE) {
            if ($id === FALSE) {
                $query = $this->db->get('comments');
                return $query->result_array();
            }
            $query = $this->db->get_where('comments', array('id' => $id));
            return $query->row_array();
        }
        public function set_comments() {
            $data = array('comment' => $this->input->post('input-comment-text'));
            return $this->db->insert('comments', $data);
        }
}