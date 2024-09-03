<?php
  class user_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all user from db
    public function get_all_user(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('user');
      return $query->result_array();
    }

    // create user
    public function create_user(){
      $data = array(
        'firstname' => $this->input->post('firstname'),
        'lastname' => $this->input->post('lastname'),
        'email' => $this->input->post('email'),
        'department' => $this->input->post('department'),
        'role' => $this->input->post('role'),
        'status' => $this->input->post('status')
        
      );

      return $this->db->insert('user', $data);
    }

    // get user by ID
    public function get_user_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('user');
            return $query->result_array();
        }
      $query = $this->db->get_where('user', array('id' => $id));
      return $query->row_array();
    }

    // update user
    public function update_user(){
      $data = array(
        'firstname' => $this->input->post('firstname'),
        'lastname' => $this->input->post('lastname'),
        'email' => $this->input->post('email'),
        'department' => $this->input->post('department'),
        'role' => $this->input->post('role'),
        'status' => $this->input->post('status')
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('user', $data);
    }

    // delete user
    public function delete_user($id){
      $this->db->where('id', $id);
      $this->db->delete('user');
    }

  }
