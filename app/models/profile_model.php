<?php
  class Profile_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all filelist from db
    public function get_all_filelist(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('filelist');
      return $query->result_array();
    }

    // create filelist
    public function create_filelist(){
      $data = array(
        'function' => $this->input->post('function'),
        'activity' => $this->input->post('activity'),
        'transaction' => $this->input->post('transaction'),
        'reference' => $this->input->post('reference')
      );

      return $this->db->insert('filelist', $data);
    }

    // get filelist by ID
    public function get_filelist_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('filelist');
            return $query->result_array();
        }
      $query = $this->db->get_where('filelist', array('id' => $id));
      return $query->row_array();
    }

    // update filelist
    public function update_filelist(){
      $data = array(
        'function' => $this->input->post('function'),
        'activity' => $this->input->post('activity'),
        'transaction' => $this->input->post('transaction'),
        'reference' => $this->input->post('reference')
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('filelist', $data);
    }

    // delete department
    public function delete_filelist($id){
      $this->db->where('id', $id);
      $this->db->delete('filelist');
    }

  }
