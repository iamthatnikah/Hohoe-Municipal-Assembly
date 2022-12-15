<?php
  class mail_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all mail from db
    public function get_all_mail(){
      $this->db->order_by('added_at', 'DESC');
      $query = $this->db->get('mails');
      return $query->result_array();
    }

    // create mail
    public function create_mail(){
      $data = array(
        'dol' => $this->input->post('dol'),
        'date_received' => $this->input->post('date_received'),
        'received' => $this->input->post('received'),
        'inst_ref' => $this->input->post('inst_ref'),
        'subject' => $this->input->post('subject'),
        'reg_no' => $this->input->post('reg_no')
      );
      $this->db->set('added_at', 'NOW()', FALSE);

      return $this->db->insert('mails', $data);
    }

    // get mail by ID
    public function get_mail_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('mails');
            return $query->result_array();
        }
      $query = $this->db->get_where('mails', array('id' => $id));
      return $query->row_array();
    }

    // update mail
    public function update_mail($post_image){
      $data = array(
        'dol' => $this->input->post('dol'),
        'date_received' => $this->input->post('date_received'),
        'received' => $this->input->post('received'),
        'inst_ref' => $this->input->post('inst_ref'),
        'subject' => $this->input->post('subject'),
        'office' => $this->input->post('office'),
        'file_ref' => $this->input->post('file_ref'),
        'folio' => $this->input->post('folio'),
        'reg_no' => $this->input->post('reg_no'),
        'post_image' => $post_image
      );

      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('mails', $data);
    }

     // remove scan
    public function remove_scan($id){

      $data = array(
        'post_image' => null
      );
      $this->db->where('id', $id);
      return $this->db->update('mails', $data);
    }

    // delete mail
    public function delete_mail($id){
      $this->db->where('id', $id);
      $this->db->delete('mail');
    }

  }
