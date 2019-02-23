<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {


	public function index(){
        // echo "tes aja ini";
        $data['page'] = "produk/form";
        $this->load->view('main',$data);

    }

    public function submit(){
        $this->load->model('Produk_model');
        $this->load->helper('autoid_helper');
        $table = 'poduk';
        $fields = 'id_produk';
        $inisial = 'PRK';
        $id_produk = $this->input->post('id_produk');

        if ($id_produk == '') {
            $id_prk = get_id($fields, $table, $inisial);
            $produk = array(
                'id_produk' => $id_prk,
                'namaprd' => $this->input->post('namaprd'),
                'harga' => $this->input->post('harga'),
                'satuan' => $this->input->post('satuan'),
                'img' => $this->input->post('img'),
                'deskripsi' => $this->input->post('deskripsi')
                );

            $this->Produk_model->add($produk);
        }else{
            $data = array(
                'namaprd' => $this->input->post('namaprd'),
                'harga' => $this->input->post('harga'),
                'satuan' => $this->input->post('satuan'),
                'img' => $this->input->post('img'),
                'deskripsi' => $this->input->post('deskripsi')
            );
            $this->Produk_model->updateprk($id_produk,$data);
        }
    }

    public function show_list_produk(){
        $data['page'] = "produk/List_Produk";
        $this->load->model('Produk_model');
        $data["produk"] = $this->Produk_model->get_produk();
        $this->load->view('main', $data);
    }

    public function delete_produk(){
        $this->load->model('Produk_model');
        $idprd = $this->uri->segment(3);
        $this->Produk_model->deleteprd($idprd);
        // echo $kodeplg;
        // echo $this->uri->segment(5);
        // var_dump($data);
    }
}
?>