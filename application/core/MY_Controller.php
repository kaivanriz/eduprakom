<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
}


class Backend extends MY_Controller
{
	public $data=array();
	public function __construct()
	{
		parent::__construct();
		// $this->load->database();
    $this->load->library('template');
		$this->data['title']="Admin";
		// if (!$this->session->logged_in)
		// redirect('login');
  }

}
