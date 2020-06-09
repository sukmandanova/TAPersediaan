<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_mastersupplier extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('tbl_supplier');
        if($id != null) {
            $this->db->where('kode_supplier', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function panggilbb()
    {
        return $this->db->get('tbl_supplier');
    }

     public function delete($id)
    {
        $this->db->where('kode_supplier', $id);
        $this->db->delete('tbl_supplier');
    }
     public function edit($id)
    {
        $this->db->where('kode_supplier', $id);
        $this->db->edit('tbl_supplier');
    }

    public function tambah($post) {
    $params = [
        'kode_supplier'=> $post['kode_supplier'],
        'nama_supplier'=> $post['nama_supplier'],
        'alamat'=> $post['alamat'],
        'email'=> $post['email'],
        'tlp'=> $post['tlp'],
    ];
    $this->db->insert('tbl_supplier', $params);
    }

    public function ubah($post) {
        $params = [
        'kode_supplier'=> $post['kode_supplier'],
        'nama_supplier'=> $post['nama_supplier'],
        'alamat'=> $post['alamat'],
        'email'=> $post['email'],
        'tlp'=> $post['tlp'],
        ];
        $this->db->where('kode_supplier', $post['kode_supplier']);
        $this->db->update('tbl_supplier', $params);
    }
}