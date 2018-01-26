<?php

class Home_model extends CI_Model
{

  public function __construct()
    {
      $this->load->database();
    }

    public function player_number_online()
    {

      $query = $this->db->get('usersonline');
      return $query->num_rows();
    }

    public function players_online()
    {

      $query = $this->db->select('*');
      $this->db->from('usersonline');
      $this->db->join('phpbb_users','usersonline.user_id = phpbb_users.user_id');
      $query = $this->db->get();
      return $query;
    }

    public function players_online_in($mode)
    {

      $query = $this->db->get_where('usersonline', array('mode' => $mode));
      return $query->num_rows();
    }


    public function mode_players_rank($mode,$rank)
    {

      $this->db->select('*');
      $this->db->order_by("rank", "desc");
      $this->db->from($mode);
      $this->db->limit(1,$rank);
      $this->db->join('phpbb_users',"$mode.user_id = phpbb_users.user_id");
      $query = $this->db->get();
      return $query->row()->username;

    }

    public function mode_players_time($mode,$rank)
    {

      $this->db->select('*');

      if ($mode == "survivor") {
        $this->db->order_by("time", "desc");
      }else {
        $this->db->order_by("time", "asc");
      }

      $this->db->from($mode);
      $this->db->limit(1,$rank);
      $this->db->join('phpbb_users',"$mode.user_id = phpbb_users.user_id");
      $query = $this->db->get();
      return $query->row()->username;

    }
}
