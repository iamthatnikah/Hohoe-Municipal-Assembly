<?php
  class tangible_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all tangible_assets from db
    public function get_all_tangible_assets(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('tangible_assets');
      return $query->result_array();
    }

    // create tangible_assets
    public function create_tangible_asset(){
      $data = array(
        'name' => $this->input->post('name'),
        'asset_type' => $this->input->post('asset_type'),
        'depreciate' => $this->input->post('depreciate'),
        'category' => $this->input->post('category'),
        'unit' => $this->input->post('unit'),
        'location_code' => $this->input->post('location_code'),
        'date_place_in_service' => date('d-m-y h:m:s'),
        'cost' => $this->input->post('cost'),
        'usage_type' => $this->input->post('usage_type'),
        'registration_no' => $this->input->post('registration_no'),
        'acc_cost_center' => $this->input->post('acc_cost_center'),
        'cost_center_using_asset' => $this->input->post('cost_center_using_asset'),
        'staff_id' => $this->input->post('staff_id'),
        'staff_fullname' => $this->input->post('staff_fullname'),
        'grade' => $this->input->post('grade'),
        'method_of_aquisition' => $this->input->post('method_of_aquisition'),
        'dept/unit' => $this->input->post('dept/unit'),
        'current_status' => $this->input->post('current_status'),
        'investment_property' => $this->input->post('investment_property'),
        'condition' => $this->input->post('condition'),
        'added_at' => date('d-m-y h:m:s')
        
      );

      return $this->db->insert('tangible_assets', $data);
    }

    // get tangible_assets by ID
    public function get_tangible_asset_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('tangible_asset');
            return $query->result_array();
        }
      $query = $this->db->get_where('tangible_asset', array('id' => $id));
      return $query->row_array();
    }

    // update tangible_assets
    public function update_tangible_asset(){
      $data = array(
        'sent_to' => $this->input->post('sent_to'),
        'return_date' => date('d-m-y h:m:s'),
        'ref_no' => $this->input->post('ref_no'),
        'remarks' => $this->input->post('remarks')
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('tangible_asset', $data);
    }

    // delete tangible_assets
    public function delete_tangible_asset($id){
      $this->db->where('id', $id);
      $this->db->delete('tangible_asset');
    }

  }
