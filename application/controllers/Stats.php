<?php

class Stats extends CI_Controller
{

public function gstats()

{
  return $this->stats_model->gstats();
}

  public function view()

  {

    $data['user_stats'] = $this->gstats();
    $this->load->view('templates/header');
    $this->load->view('pages/stats',$data);
    $this->load->view('templates/footer');
  }

}
