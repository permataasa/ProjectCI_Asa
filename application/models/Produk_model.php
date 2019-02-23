<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {
    var $table = "poduk";

    function add($data){
        $this->db->insert($this->table,$data);

		if($this->db->affected_rows()>0){
            redirect('Produk/index');
        }

    }
    
    public function get_produk(){
        $this->db->select('*')
                    ->from('poduk');
        $res = $this->db->get();

        return $res->result();
    	}
    

	public function deleteprd($kodeprd){
	        $this->db->where('id_produk', $kodeprd);
	        $this->db->delete('poduk');

	        if($this->db->affected_rows()>0) {
	            redirect('Produk/show_list_produk');
	        }
	    }

	}
?>