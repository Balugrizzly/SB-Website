<?php

class Home extends CI_Controller
{

  public function player_number_online()
  {
    return $this->home_model->player_number_online();
  }

  public function players_online()
  {
    return $this->home_model->players_online();
  }

  public function players_online_in($mode)
  {
    return $this->home_model->players_online_in($mode);
  }


  public function mode_players_time($mode,$rank)
  {
    return $this->home_model->mode_players_time($mode,$rank);
  }

  public function mode_players_rank($mode,$rank)
  {
    return $this->home_model->mode_players_rank($mode,$rank);
  }

  public function view()
  {

    $data['player_number_online'] = $this->player_number_online();
    $data['players_online'] = $this->players_online();

    $data['number_of_players_in_ffa'] = $this->players_online_in(1);
    $data['number_of_players_in_challanges'] = $this->players_online_in("challenges");
    $data['number_of_players_in_lobby'] = $this->players_online_in("lobby");
    $data['number_of_players_in_1v1'] = $this->players_online_in(5);

    $data['race_mode_rank_1'] = $this->mode_players_time("race",0);
    $data['race_mode_rank_2'] = $this->mode_players_time("race",1);
    $data['race_mode_rank_3'] = $this->mode_players_time("race",2);

    $data['cheese_mode_rank_1'] = $this->mode_players_time("cheese",0);
    $data['cheese_mode_rank_2'] = $this->mode_players_time("cheese",1);
    $data['cheese_mode_rank_3'] = $this->mode_players_time("cheese",2);

    $data['survivor_mode_rank_1'] = $this->mode_players_time("survivor",0);
    $data['survivor_mode_rank_2'] = $this->mode_players_time("survivor",1);
    $data['survivor_mode_rank_3'] = $this->mode_players_time("survivor",2);

    $data['ffa_mode_rank_1'] = $this->mode_players_rank("ffa",0);
    $data['ffa_mode_rank_2'] = $this->mode_players_rank("ffa",1);
    $data['ffa_mode_rank_3'] = $this->mode_players_rank("ffa",2);

    $data['onev1_mode_rank_1'] = $this->mode_players_rank("1v1",0);
    $data['onev1_mode_rank_2'] = $this->mode_players_rank("1v1",1);
    $data['onev1_mode_rank_3'] = $this->mode_players_rank("1v1",2);



    $this->load->view('templates/header');
    $this->load->view('pages/home', $data);
    $this->load->view('templates/footer');
  }
}
