<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {


	public function index(){
        // echo "tes aja ini";
        $data['page'] = "pelanggan/form";
        $this->load->view('main',$data);

    }

    public function submit(){
        $this->load->model('Pelanggan_model');
        $this->load->helper('autoid_helper');
        $table = 'pelanggan';
        $fields = 'id_pelanggan';
        $inisial = 'PLG';
        $id_pelanggan = $this->input->post('id_pelanggan');

        if ($id_pelanggan == '') {
            $id_pel = get_id($fields, $table, $inisial);
            $pelanggan = array(
                'id_pelanggan' => $id_pel,
                'namaplg' => $this->input->post('namaplg'),
                'email' => $this->input->post('email'),
                'telepon' => $this->input->post('telepon'),
                'alamat' => $this->input->post('alamat'), 
                );
            // $pelanggan = $this->input->POST();
            // $pelanggan['id_pelanggan'] = get_id($fields, $table, $inisial);
            $this->Pelanggan_model->add($pelanggan);
        }else{
            $data = array(
                'namaplg' => $this->input->post('namaplg'),
                'email' => $this->input->post('email'),
                'telepon' => $this->input->post('telepon'),
                'alamat' => $this->input->post('alamat'),
            );
            $this->Pelanggan_model->updateplg($id_pelanggan,$data);
        }
    }

    public function tes(){
        $this->load->helper('autoid_helper');
        echo get_id("id_pelanggan", "pelanggan", "PLG");
    }

    public function show_list_pelanggan(){
        $data['page'] = "pelanggan/List_Pelanggan";
        $this->load->model('Pelanggan_model');
        $data["pelanggan"] = $this->Pelanggan_model->get_pelanggan();
        $this->load->view('main', $data);
    }

    public function delete_pelanggan(){
        $this->load->model('Pelanggan_model');
        $kodeplg = $this->uri->segment(3);
        $this->Pelanggan_model->deleteplg($kodeplg);
        // echo $kodeplg;
        // echo $this->uri->segment(5);
        // var_dump($data);
    }
    public function edit_pelanggan()
    {
        $id_pelanggan = $this->uri->segment(3);
        $this->load->model('Pelanggan_model');
        $data["data_pelanggan"] = $this->Pelanggan_model->GetPelangganDetail($id_pelanggan);
        $data['page'] = "pelanggan/form";
        $this->load->view('main',$data);
    }
}
?>