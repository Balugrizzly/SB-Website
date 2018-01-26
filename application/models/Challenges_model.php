<?php

class Challenges_model extends CI_Model
{

  public function __construct()
    {
      $this->load->database();
    }

    public function challenges_ranking_time($mode)
    {

      $this->db->select('*');
      if ($mode == "survivor") {
        $this->db->order_by("time", "desc");
      }else {
        $this->db->order_by("time", "asc");
      }
      $this->db->from($mode);
      $this->db->join('phpbb_users',"$mode.user_id = phpbb_users.user_id");
      $query = $this->db->get();
      return $query;

    }

    public function challenges_ranking_rank($mode)
    {

      $this->db->select('*');
      $this->db->order_by("rank", "desc");
      $this->db->from($mode);
      $this->db->join('phpbb_users',"$mode.user_id = phpbb_users.user_id");
      $query = $this->db->get();
      return $query;

    }
}
