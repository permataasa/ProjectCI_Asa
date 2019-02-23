<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index(){
        // echo "tes aja ini";
        $this->load->model('User_models','usmod');
        // data['level'] =
        $data = $this->usmod->GetIdLevel();
        // $data['datauser'] = array(
        // 	'idlevel' => $data[0]->idlevel,
        // 	'namalevel' => $data[0]->namalevel
        // 	);
        foreach ($data as $key => $value) {
        	$data_user[$key] = $value->namalevel;
        }
        $data['user'] = $data_user;
        $data['page'] = "User/form";
        $this->load->view('main',$data);

    }

}
?>