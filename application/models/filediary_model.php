<?php
  class Filediary_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all filediary from db
    public function get_all_filediary(){
      $this->db->order_by('added_at', 'DESC');
      $query = $this->db->get('filediary');
      return $query->result_array();
    }

    // create filediary
    public function create_filediary(){
      $data = array(
        'title' => $this->input->post('title'),
        'previous' => $this->input->post('previous')
      );
      $this->db->set('added_at', 'NOW()', FALSE);

      return $this->db->insert('filediary', $data);
    }

    // get filediary by ID
    public function get_filediary_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('filediary');
            return $query->result_array();
        }
      $query = $this->db->get_where('filediary', array('id' => $id));
      return $query->row_array();
    }

    // update filediary
    public function update_filediary(){
      $data = array(
        'title' => $this->input->post('title'),
        'previous' => $this->input->post('previous')
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('filediary', $data);
    }

    // delete diary
    public function delete_filediary($id){
      $this->db->where('id', $id);
      $this->db->delete('filediary');
    }

  }
