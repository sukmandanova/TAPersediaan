<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_permintaan extends CI_Model {

    public function lihat_data()
    {
        $query = "SELECT * from bahan_baku, permintaan where bahan_baku.kode_barang = permintaan.kode_barang";
        return $this->db->query($query);
    }

     public function delete($id)
    {
        $this->db->where('kode_permintaan', $id);
        $this->db->delete('permintaan');
    }
     public function edit($id)
    {
        $this->db->where('kode_permintaan', $id);
        $this->db->edit('permintaan');
    }

 

    public function tambah($post) {
    $params = [
        'kode_permintaan'   => $post['kode_permintaan'],
        'kode_barang'       => $post['kode_barang'],
        'tanggal_transaksi' => $post['tanggal_transaksi'],
        'tanggal_terbeli'   => $post['tanggal_terbeli'],
        'jumlah_barang'     => $post['jumlah_barang'],
        'status'            => $post['status'],
    ];
    $this->db->insert('permintaan', $params);
    }

    public function ubah($post) {
        $params = [
        'kode_permintaan'   => $post['kode_permintaan'],
        'kode_barang'       => $post['kode_barang'],
        'tanggal_transaksi' => $post['tanggal_transaksi'],
        'tanggal_terbeli'   => $post['tanggal_terbeli'],
        'jumlah_barang'     => $post['jumlah_barang'],
        'status'            => $post['status'],
        ];
        $this->db->where('kode_barang', $post['kode_barang']);
        $this->db->update('permintaan', $params);
    }
}