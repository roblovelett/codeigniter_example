<?php
    class Admin_videos_model extends CI_Model {
        public function __construct(){
            $this->load->database();
        }
        public function all() {
           $result = $this->db->get('videos');
           return $result;
        }
        public function find($id) {
           $row = $this->db->where('id',$id)->limit(1)->get('videos');
           return $row;
        }
        public function create($data) {
            try {
                $this->db->insert('videos', $data);
                return true;
           } catch (Exception $e) {
                echo $e->getMessage();
           };
        }
        public function delete($id) {
            try {
               $this->db->where('id',$id)->delete('videos');
               return true;
            } catch (Exception $e) {
              echo $e->getMessage();
            };
        }
    }