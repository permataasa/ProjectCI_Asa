<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_models extends CI_Model {

	public $table = "user";
	//variable global, sudah jadi objek

	public function _construct(){
		parent:: __construct();
	}

	public function GetIdLevel(){
		$this->db->select('idlevel , namalevel')
					->from('level');
		$res = $this->db->get();

		return $res->result();
	}

	public function GetUser($filteruser=array()){
		$this->db->select('*')
			->from($this->table);


		if(count($filteruser)>0)
			$this->db->where($filteruser);

		$res = $this->db->get();
		return $res->result();

	}
}
