<?php
  class Sms_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all Sms from db
    public function get_all_sms(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('sms');
      return $query->result_array();
    }

    // create Sms
    public function create_sms(){
      $data = array(
        'name' => $this->input->post('name')
      );

      return $this->db->insert('name', $data);
    }

    // get Sms by ID
    public function get_sms_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('name');
            return $query->result_array();
        }
      $query = $this->db->get_where('name', array('id' => $id));
      return $query->row_array();
    }

    // update Sms
    public function update_sms(){
      $data = array(
        'name' => $this->input->post('name'),
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('name', $data);
    }

    // delete Sms
    public function delete_sms($id){
      $this->db->where('id', $id);
      $this->db->delete('name');
    }

  }
