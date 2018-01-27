<?php

class Tournaments extends CI_Controller
{
  public function tournaments_leader($grade)
  {
    return $this->tournaments_model->tournaments_leader($grade);
  }



  public function view()
  {

    $data['leaderA'] = $this->tournaments_leader('gradeA');
    $data['leaderB'] = $this->tournaments_leader('gradeB');
    $data['leaderC'] = $this->tournaments_leader('gradeC');
    $data['leaderD'] = $this->tournaments_leader('gradeD');


    $this->load->view('templates/header');
    $this->load->view('pages/tournaments',$data);
    $this->load->view('templates/footer');

  }
}
