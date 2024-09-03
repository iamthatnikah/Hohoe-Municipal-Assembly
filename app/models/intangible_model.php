<?php
  class intangible_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all tangible_assets from db
    public function get_all_intangible_assets(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('intangible_assets');
      return $query->result_array();
    }

    // create tangible_assets
    public function create_intangible_asset(){
      $data = array(
        'sent_to' => $this->input->post('sent_to'),
        'dot' => date('d-m-y h:m:s'),
        'ref_no' => $this->input->post('ref_no'),
        'remarks' => $this->input->post('remarks')
        
      );

      return $this->db->insert('intangible_asset', $data);
    }

    // get tangible_assets by ID
    public function get_intangible_asset_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('intangible_asset');
            return $query->result_array();
        }
      $query = $this->db->get_where('intangible_asset', array('id' => $id));
      return $query->row_array();
    }

    // update tangible_assets
    public function update_intangible_asset(){
      $data = array(
        'sent_to' => $this->input->post('sent_to'),
        'return_date' => date('d-m-y h:m:s'),
        'ref_no' => $this->input->post('ref_no'),
        'remarks' => $this->input->post('remarks')
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('intangible_asset', $data);
    }

    // delete tangible_assets
    public function delete_intangible_asset($id){
      $this->db->where('id', $id);
      $this->db->delete('intangible_asset');
    }

  }
