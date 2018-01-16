<?php
    class Admin_photos_model extends CI_Model {
        public function __construct(){
            $this->load->database();
        }
        public function all() {
           $result = $this->db->get('photos');
           return $result;
        }
        public function find($id) {
           $row = $this->db->where('id',$id)->limit(1)->get('photos');
           return $row;
        }
        public function upload($data) {
            try {
                $this->db->insert('photos', $data);
                return true;
           } catch (Exception $e) {
                echo $e->getMessage();
           };
        }
        public function delete($id) {
            try {
               $this->db->where('id',$id)->delete('photos');
               return true;
            } catch (Exception $e) {
              echo $e->getMessage();
            };
        }
    }