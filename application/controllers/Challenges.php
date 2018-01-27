<?php

class Challenges extends CI_Controller
{

  public function challenges_ranking_time($mode)
  {
    return $this->challenges_model->challenges_ranking_time($mode);
  }

  public function challenges_ranking_rank($mode)
  {
    return $this->challenges_model->challenges_ranking_rank($mode);
  }


  public function race()
  {

    $data['users_ranking_race'] = $this->challenges_ranking_time('Race');
    $data['rank'] = 0;


    $this->load->view('templates/header');
    $this->load->view('templates/challenges');
    $this->load->view('challenges/race',$data);
    $this->load->view('templates/footer');

  }

  public function cheese()
  {
    $data['users_ranking_cheese'] = $this->challenges_ranking_time('Cheese');
    $data['rank'] = 0;

    $this->load->view('templates/header');
    $this->load->view('templates/challenges');
    $this->load->view('challenges/cheese',$data);
    $this->load->view('templates/footer');

  }

  public function survivor()
  {

    $data['users_ranking_survivor'] = $this->challenges_ranking_time('Survivor');
    $data['rank'] = 0;


    $this->load->view('templates/header');
    $this->load->view('templates/challenges');
    $this->load->view('challenges/survivor',$data);
    $this->load->view('templates/footer');

  }

  public function cheese30()
  {

    $data['users_ranking_cheese30'] = $this->challenges_ranking_time('Cheese_30L');
    $data['rank'] = 0;

    $this->load->view('templates/header');
    $this->load->view('templates/challenges');
    $this->load->view('challenges/cheese30',$data);
    $this->load->view('templates/footer');

  }

}
