<?php
  class staff_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all Permanent Staff from db
    public function get_all_perm_staff(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('permanent_staff');
      return $query->result_array();
    }

    // Get all Temporal Staff from db
    public function get_all_temp_staff(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('igf_staff');
      return $query->result_array();
    }

    // Add Permanent staff
    public function add_perm_staff(){
      $data = array(
        'staff_id' => $this->input->post('staff_id'),
        'first_name' => $this->input->post('first_name'),
        'middle_name' => $this->input->post('middle_name'),
        'last_name' => $this->input->post('last_name'),
        'official_email' => $this->input->post('official_email'),
        'department' => $this->input->post('department'),
        'personal_email' => $this->input->post('personal_email'),
        'grade' => $this->input->post('grade'),
        'class' => $this->input->post('class'),
        'date_of_birth' => $this->input->post('date_of_birth'),
        'date_first_appointment' => $this->input->post('date_first_appointment'),
        'date_last_promotion' => $this->input->post('date_last_promotion'),
        'salary_level' => $this->input->post('salary_level'),
        'ssn' => $this->input->post('ssn'),
        'gender' => $this->input->post('gender'),
        'tel' => $this->input->post('tel'),
        'mobile' => $this->input->post('mobile'),
        'department' => $this->input->post('department')
        
      );

      return $this->db->insert('permanent_staff', $data);
    }

     // Add Temporal staff
    public function add_temp_staff(){
      $data = array(
        'first_name' => $this->input->post('first_name'),
        'middle_name' => $this->input->post('middle_name'),
        'last_name' => $this->input->post('last_name'),
        'date_of_birth' => $this->input->post('date_of_birth'),
        'date_first_appointment' => $this->input->post('date_first_appointment'),
        'gender' => $this->input->post('gender'),
        'class' => $this->input->post('class'),
        'personal_email' => $this->input->post('personal_email'),
        'tel' => $this->input->post('tel'),
        'mobile' => $this->input->post('mobile'),
        'department' => $this->input->post('department'),
        'grade' => $this->input->post('grade'),
        'ssn' => $this->input->post('ssn')
      );

      return $this->db->insert('igf_staff', $data);
    }

    // get staff by ID
    public function get_staff_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('staff');
            return $query->result_array();
        }
      $query = $this->db->get_where('permanent_staff', array('id' => $id));
      return $query->row_array();
    }

    // update staff
    public function update_staff(){
      $data = array(
        'firstname' => $this->input->post('firstname'),
        'middlename' => $this->input->post('middlename'),
        'lastname' => $this->input->post('lastname'),
        'email' => $this->input->post('email'),
        'department' => $this->input->post('department'),
        'role' => $this->input->post('role'),
        'status' => $this->input->post('status')
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('staff', $data);
    }

    // delete staff
    public function delete_staff($id){
      $this->db->where('id', $id);
      $this->db->delete('permanent_staff');
    }

  }
