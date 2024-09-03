<?php
  class mis_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Count all HHMA Desktops from db
    // public function count_all_hhma_desktops(){
    //   $query = $this->db->count_all_results('desktops');
    //   return $query->num_rows();
    // }

    // Get all HHMA Desktops from db
    public function get_all_hhma_desktops(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('desktops');
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
      return $this->db->insert('desktops', $data);
    }


    // get hhma_desktops by ID
    public function get_desktop_id($id = FALSE){
      if($id === FALSE){
          $query = $this->db->get('desktop');
          return $query->result_array();
      }
    $query = $this->db->get_where('desktops', array('id' => $id));
    return $query->row_array();
  }

  // update hhma_desktops
  public function update_desktop(){
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
    $this->db->where('id', $this->input->post('id'));
   return $this->db->update('desktops', $data);
  }

  // delete hhma_desktops
  public function delete_hhma_desktop($id){
    $this->db->where('id', $id);
    $this->db->delete('desktops');
  }



    // Get all HHMA Laptops from db
    public function get_all_hhma_laptops(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('laptops');
      return $query->result_array();
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
        'hdd_capacity' => $this->input->post('hdd_capacity')
      );
      return $this->db->insert('laptops', $data);
    }

    // get hhma_laptops by ID
    public function get_laptop_id($id = FALSE){
      if($id === FALSE){
          $query = $this->db->get('laptops');
          return $query->result_array();
      }
    $query = $this->db->get_where('laptops', array('id' => $id));
    return $query->row_array();
  }

  // update hhma_laptops
  public function update_laptop(){
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
      'hdd_capacity' => $this->input->post('hdd_capacity')
    );
    $this->db->where('id', $this->input->post('id'));
   return $this->db->update('laptops', $data);
  }

  // delete hhma_laptops
  public function delete_hhma_laptop($id){
    $this->db->where('id', $id);
    $this->db->delete('laptops');
  }


    // Get all HHMA Printers from db
    public function get_all_hhma_printers(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('printers');
      return $query->result_array();
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

    return $this->db->insert('printers', $data);
  }

  // get hhma_printers by ID
  public function get_printer_id($id = FALSE){
    if($id === FALSE){
        $query = $this->db->get('printer');
        return $query->result_array();
    }
  $query = $this->db->get_where('printers', array('id' => $id));
  return $query->row_array();
}

  // update hhma_Printer
  public function update_pinter(){
    $data = array(
      'owner' => $this->input->post('owner'),
      'department' => $this->input->post('department'),
      'printer_manufacturer' => $this->input->post('printer_manufacturer'),
      'cartridge_installed' => $this->input->post('cartridge_installed'),
      'printer_model' => $this->input->post('printer_model'),
      'date_purchased' => $this->input->post('date_purchased')
    );
    $this->db->where('id', $this->input->post('id'));
   return $this->db->update('printers', $data);
  }

      // delete hhma_printers
  public function delete_hhma_printer($id){
    $this->db->where('id', $id);
    $this->db->delete('printers');
  }

}
