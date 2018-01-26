<?php

class Signup extends CI_Controller
{
  public function register()
  {

    define('IN_PHPBB', true);
    $phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '/var/www/html/forum/';
    $phpEx = substr(strrchr(__FILE__, '.'), 1);
    include($phpbb_root_path . 'common.' . $phpEx);
    include($phpbb_root_path . 'includes/functions_user.' . $phpEx);

    $data['title'] = 'Login';

    $this->load->view('templates/header');
    $this->load->view('pages/register',$data);
    $this->load->view('templates/footer');
  }
}
