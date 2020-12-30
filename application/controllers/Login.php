<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function index(){
		$this->load->helper('form');
		$this->load->view('Login/form');

		if($_POST)

			// mengecek punya parameter dari form
			$this->cekLogin();

		$this->load->view('Login/form');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	private function cekLogin(){
		$this->load->model('User_models');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$res = $this->User_models->GetUser(
			array('iduser'=>$username,'password'=>$password)

		);

		if(count($res)>0){
			if($res[0]->status ==0){
				$this->session->set_flashdata('message','username'.$username.' is non aktif');	
				
			}else{
				$sessData = json_decode(json_encode(current($res)),true);
				$this->session->set_userdata($sessData);
				redirect('dashboard');
			}

		}else
			$this->session->set_flashdata('message','username'.$username.' tidak ditemukan/tidak sesuai');
		// if(count($res)>0){
		// 	$sessData = json_decode(json_encode(current($res)),true);
		// 	// $sessData = json_decode(current($res)); 

		// 	// echo "/pre>", print_r(current($res),"</pre>"; 
		// 	$this->session->set_userdata($sessData);
		// 	redirect('dashboard');
		// }
		// else{
		// 	echo "gagal";
		// }
		// echo "/pre>", print_r($res),"</pre>";

	}

	private function ceklogin2(){
		$this->load->model('User_model');
		$uername = $this->input->post('username');
		$password = $this->input->post('password');

		$res = $this->User_model->get(
				array(
					'iduser'=>$uername,
					'password'=>$password)
				); 
		

		

		if(count($res)>0){
			if($res[0]->status ==0){
				$this->session->set_flashdata('message','Usersername '.$uername.' is non aktif');	
				
			}else{
				$sessData = json_decode(json_encode(current($res)),true);
				$this->session->set_userdata($sessData);
				redirect('dashboard');
			}

		}else
			$this->session->set_flashdata('message','Username '.$uername.' tidak ditemukan/tidak sesuai');

	}






}

