<?php
  class Department_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Function To Get All Department From DB
    public function get_all_departments(){
      $this->db->order_by('id', 'ASC');
      $query = $this->db->get('departments');
      return $query->result_array();
    }

    // Function To Add / Create Department From DB
    public function add_department(){
      $data = array(
        'department_name' => $this->input->post('department_name'),
        'office' => $this->input->post('office'),
        'inter_exten' => $this->input->post('inter_exten'),
        'hod' => $this->input->post('hod')
      );

      return $this->db->insert('departments', $data);
    }

    // Function To Get Department By ID From DB
    public function get_department_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('departments');
            return $query->result_array();
        }
      $query = $this->db->get_where('departments', array('id' => $id));
      return $query->row_array();
    }

    // Function To Update Department In DB
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

    // Function To Delete Department From DB
    public function delete_department($id){
      $this->db->where('id', $id);
      $this->db->delete('departments');
    }

  }
