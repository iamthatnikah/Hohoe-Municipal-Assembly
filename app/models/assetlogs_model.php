<?php
  class assetlogs_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all dispatch from db
    public function get_all_dispatch(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('dispatch');
      return $query->result_array();
    }

    // create dispatch
    public function create_dispatch(){
      $data = array(
        'reg_no' => $this->input->post('reg_no'),
        'drp' => date('d-m-y h:m:s'),
        'date_dispatch' => date('d-m-y h:m:s'),
        'subject' => $this->input->post('subject'),
        'whom_sent' => $this->input->post('whom_sent'),
        'ref_no' => $this->input->post('ref_no'),
        'folio' => $this->input->post('folio'),
        'addressee' => $this->input->post('addressee'),
        'added_at' => date('d-m-y h:m:s'),
        'mod' => $this->input->post('mod')
      );

      return $this->db->insert('dispatch', $data);
    }

    // get dispatch by ID
    public function get_dispatch_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('dispatch');
            return $query->result_array();
        }
      $query = $this->db->get_where('dispatch', array('id' => $id));
      return $query->row_array();
    }

    // update dispatch
    public function update_dispatch(){
      $data = array(
        'reg_no' => $this->input->post('reg_no'),
        'drp' => $this->input->post('drp'),
        'date_dispatch' => $this->input->post('date_dispatch'),
        'subject' => $this->input->post('subject'),
        'whom_sent' => $this->input->post('whom_sent'),
        'ref_no' => $this->input->post('ref_no'),
        'folio' => $this->input->post('folio'),
        'addressee' => $this->input->post('addressee'),
        'added_at' => $this->input->post('added_at'),
        'mod' => $this->input->post('mod')
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('dispatch', $data);
    }

    // delete dispatch
    public function delete_dispatch($id){
      $this->db->where('id', $id);
      $this->db->delete('dispatch');
    }

  }
