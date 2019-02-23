<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zero extends CI_Controller {


	public function index(){
        // echo "tes aja ini";
        $data['page'] = "zero/uzero";
        $this->load->view('main',$data);

    }
}
?>