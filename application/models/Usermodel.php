<?php
    class Usermodel extends CI_Model{

        public function create($formarray)
        {
            $this->db->insert('users',$formarray);  
        }
        public function getall()
        {
            return $users=$this->db->get('users')->result_array();  //to select data from users table
        }
        public function getUser($userId)
        {
            $this->db->where('user_id',$userId);
            return $user=$this->db->get('users')->row_array();  //to get single user record
        }
        public function updateUser($userId,$formarray)
        {
            $this->db->where('user_id',$userId);
            $this->db->update('users',$formarray);      //update user 

        }
        public function deleteUser($userId)
        {
            $this->db->where('user_id',$userId);
            $this->db->delete('users');
        }
    }

?>
