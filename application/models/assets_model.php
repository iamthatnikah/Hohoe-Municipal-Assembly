<?php
  class Assets_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all Asset from db
    public function get_all_asset(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('assets');
      return $query->result_array();
    }

    // create Asset
    public function create_asset(){
      $data = array(
        'name' => $this->input->post('name')
      );

      return $this->db->insert('name', $data);
    }

    // get Asset by ID
    public function get_asset_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('name');
            return $query->result_array();
        }
      $query = $this->db->get_where('name', array('id' => $id));
      return $query->row_array();
    }

    // update Asset
    public function update_asset(){
      $data = array(
        'name' => $this->input->post('name'),
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('name', $data);
    }

    // delete Asset
    public function delete_asset($id){
      $this->db->where('id', $id);
      $this->db->delete('name');
    }

  }
