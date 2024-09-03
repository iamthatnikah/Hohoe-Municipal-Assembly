<?php
  class login_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all mail from db
    public function get_all_users(){
      $this->db->order_by('registed_date', 'DESC');
      $query = $this->db->get('users');
      return $query->result_array();
    }


  }
