<?php
  class Department_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all Department from db
    public function get_all_department(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('departments');
      return $query->result_array();
    }

    // create Department
    public function create_department(){
      $data = array(
        'name' => $this->input->post('name')
      );

      return $this->db->insert('name', $data);
    }

    // get Department by ID
    public function get_department_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('name');
            return $query->result_array();
        }
      $query = $this->db->get_where('name', array('id' => $id));
      return $query->row_array();
    }

    // update Department
    public function update_department(){
      $data = array(
        'name' => $this->input->post('name'),
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('name', $data);
    }

    // delete Department
    public function delete_department($id){
      $this->db->where('id', $id);
      $this->db->delete('name');
    }

  }
