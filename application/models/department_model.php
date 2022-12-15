<?php
  class Department_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all department from db
    public function get_all_departments(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('departments');
      return $query->result_array();
    }

    // create department
    public function add_department(){
      $data = array(
        'department_name' => $this->input->post('department_name'),
        'office' => $this->input->post('office'),
        'inter_exten' => $this->input->post('inter_exten'),
        'hod' => $this->input->post('hod')
      );

      return $this->db->insert('departments', $data);
    }

    // get department by ID
    public function get_department_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('departments');
            return $query->result_array();
        }
      $query = $this->db->get_where('departments', array('id' => $id));
      return $query->row_array();
    }

    // update department
    public function update_department(){
      $data = array(
        'department_name' => $this->input->post('department_name'),
        'office' => $this->input->post('office'),
        'inter_exten' => $this->input->post('inter_exten'),
        'hod' => $this->input->post('hod')
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('departments', $data);
    }

    // delete department
    public function delete_department($id){
      $this->db->where('id', $id);
      $this->db->delete('department');
    }

  }
