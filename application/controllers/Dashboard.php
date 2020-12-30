<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
  	{
    	parent::__construct();
    	
    	if($this->session->userdata('iduser')=='')
    		redirect('login/logout');
  	}

	function index(){
		$data['page'] = "dashboard/welcome";
		$this->load->view('main',$data);
	}
}
