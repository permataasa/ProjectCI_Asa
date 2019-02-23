<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {
    var $table = "pelanggan";

    function add($data){
        $this->db->insert($this->table,$data);

        if($this->db->affected_rows()>0){
            redirect('Pelanggan/index');
        }

    }
    
    public function get_pelanggan(){
        $this->db->select('*')
                    ->from('pelanggan');
        $res = $this->db->get();

        return $res->result();
    }

    public function deleteplg($kodeplg){
        $this->db->where('id_pelanggan', $kodeplg);
        $this->db->delete('pelanggan');

        if($this->db->affected_rows()>0) {
            redirect('pelanggan/show_list_pelanggan');
        }
    }

    public function updateplg($id_pelanggan,$data)
    {
        $this->db->where('id_pelanggan',$id_pelanggan);
        $this->db->update($this->table,$data);
        // echo $this->db->last_query();die();
        if ($this->db->affected_rows()>0) {
            redirect('Pelanggan/show_list_pelanggan');
        }
    }

    public function GetPelangganDetail($id_pelanggan)
    {
        $this->db->select('*')
                ->from('pelanggan');
        $this->db->where('id_pelanggan',$id_pelanggan);
        $res = $this->db->get();

        return $res->result();
    }
}
?>