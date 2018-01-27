<?php

class Tournaments_model extends CI_Model
{

  public function __construct()
    {
      $this->load->database();
    }

  public function tournaments_leader($grade)
  {
    $this->db->select('*');
    $this->db->order_by($grade, "desc");
    $this->db->from('tstats');
    $this->db->join('phpbb_users',"tstats.user_id = phpbb_users.user_id");
    $query = $this->db->get();
    return $query->row();
  }
}
