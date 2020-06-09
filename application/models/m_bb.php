<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_bb extends CI_Model {

    public function get()
    {
        $this->db->from('tbl_bb');
        $query = $this->db->get();
        return $query;
    }
    public function tambah() {

        
    }
}