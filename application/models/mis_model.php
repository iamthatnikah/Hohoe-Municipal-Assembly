<?php
  class mis_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all HHMA Desktops from db
    public function get_all_hhma_desktops(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('hhma_desktops');
      return $query->result_array();
    }

    // Get all HHMA Laptops from db
    public function get_all_hhma_laptops(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('hhma_laptops');
      return $query->result_array();
    }

    // Get all HHMA Printers from db
    public function get_all_hhma_printers(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('hhma_printers');
      return $query->result_array();
    }

    // create hhma_desktops
    public function add_desktop(){
      $data = array(
        'computer_location' => $this->input->post('computer_location'),
        'owner' => $this->input->post('owner'),
        'department' => $this->input->post('department'),
        'admin_acc_name' => $this->input->post('admin_acc_name'),
        'password' => $this->input->post('password'),
        'processor' => $this->input->post('processor'),
        'os_edition' => $this->input->post('os_edition'),
        'system_rating' => $this->input->post('system_rating'),
        'installed_memory' => $this->input->post('installed_memory'),
        'processor_speed' => $this->input->post('processor_speed'),
        'system_type' => $this->input->post('system_type'),
        'computer_name' => $this->input->post('computer_name'),
        'workgroup' => $this->input->post('workgroup'),
        'product_id' => $this->input->post('product_id'),
        'date_purchased' => $this->input->post('date_purchased'),
        'update_schedule' => $this->input->post('update_schedule'),
        'user_acc' => $this->input->post('user_acc'),
        'system_manufacturer' => $this->input->post('system_manufacturer'),
        'system_model' => $this->input->post('system_model'),
        'office_version' => $this->input->post('office_version'),
        'antivirus' => $this->input->post('antivirus'),
        'browsers' => $this->input->post('browsers'),
        'hdd_capacity' => $this->input->post('hdd_capacity'),
        'monitor_brand' => $this->input->post('monitor_brand'),
        'monitor_model' => $this->input->post('monitor_model')
   
      );

      return $this->db->insert('hhma_desktops', $data);
    }

    // Add HHMA_Laptops
    public function add_laptop(){
      $data = array(
        'computer_location' => $this->input->post('computer_location'),
        'owner' => $this->input->post('owner'),
        'department' => $this->input->post('department'),
        'admin_acc_name' => $this->input->post('admin_acc_name'),
        'password' => $this->input->post('password'),
        'processor' => $this->input->post('processor'),
        'os_edition' => $this->input->post('os_edition'),
        'system_rating' => $this->input->post('system_rating'),
        'installed_memory' => $this->input->post('installed_memory'),
        'processor_speed' => $this->input->post('processor_speed'),
        'system_type' => $this->input->post('system_type'),
        'computer_name' => $this->input->post('computer_name'),
        'workgroup' => $this->input->post('workgroup'),
        'product_id' => $this->input->post('product_id'),
        'date_purchased' => $this->input->post('date_purchased'),
        'update_schedule' => $this->input->post('update_schedule'),
        'user_acc' => $this->input->post('user_acc'),
        'system_manufacturer' => $this->input->post('system_manufacturer'),
        'system_model' => $this->input->post('system_model'),
        'office_version' => $this->input->post('office_version'),
        'antivirus' => $this->input->post('antivirus'),
        'browsers' => $this->input->post('browsers'),
        'hdd_capacity' => $this->input->post('hdd_capacity'),
        'monitor_brand' => $this->input->post('monitor_brand'),
        'monitor_model' => $this->input->post('monitor_model')
   
      );

      return $this->db->insert('hhma_laptops', $data);
    }


    // Add HHMA_Printers
    public function add_printer(){
      $data = array(
        'owner' => $this->input->post('owner'),
        'department' => $this->input->post('department'),
        'printer_manufacturer' => $this->input->post('printer_manufacturer'),
        'cartridge_installed' => $this->input->post('cartridge_installed'),
        'printer_model' => $this->input->post('printer_model'),
        'date_purchased' => $this->input->post('date_purchased')
   
      );

      return $this->db->insert('hhma_printers', $data);
    }

    // get hhma_desktops by ID
    public function get_desktop_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('laptop');
            return $query->result_array();
        }
      $query = $this->db->get_where('laptop', array('id' => $id));
      return $query->row_array();
    }

    // update hhma_desktops
    public function update_desktop(){
      $data = array(
        'sent_to' => $this->input->post('sent_to'),
        'return_date' => date('d-m-y h:m:s'),
        'ref_no' => $this->input->post('ref_no'),
        'remarks' => $this->input->post('remarks')
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('hhma_desktops', $data);
    }

    // delete hhma_desktops
    public function delete_hhma_desktops($id){
      $this->db->where('id', $id);
      $this->db->delete('hhma_desktops');
    }

  }
