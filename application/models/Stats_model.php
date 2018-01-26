<?php

class Stats_model extends CI_Model
{

  public function __construct()
    {
      $this->load->database();
    }

  public function gstats()
  {
    $this->db->select('*');
    $this->db->order_by("played", "desc");
    $this->db->from('gstats');
    $this->db->join('phpbb_users',"gstats.user_id = phpbb_users.user_id");
    $query = $this->db->get();
    return $query;
  }
}
