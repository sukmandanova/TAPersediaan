<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_Penawaran extends CI_Model {

	public function lihat_data()
    {
        $query = "SELECT * from tbl_supplier, penawaran where tbl_supplier.kode_supplier = penawaran.kode_supplier";
        return $this->db->query($query);
    }

	 public function delete($id)
	{
		$this->db->where('kode_penawaran', $id);
		$this->db->delete('penawaran');
    }
     public function edit($id)
	{
		$this->db->where('kode_penawaran', $id);
		$this->db->edit('penawaran');
    }

    public function tambah($post) {
    $params = [
        'kode_penawaran'=> $post['kode_penawaran'],
        'kode_supplier' => $post['kode_supplier'],
        'nama_barang'   => $post['nama_barang'],
        'tanggal'       => $post['tanggal'],
        'jumlah_barang' => $post['jumlah_barang'],
        'harga_perunit' => $post['harga_perunit'],
        'status'        => $post['status']
    ];
    $this->db->insert('penawaran', $params);
    }

    public function ubah($post) {
        $params = [
        'kode_penawaran'=> $post['kode_penawaran'],
        'kode_supplier' => $post['kode_supplier'],
        'nama_barang'   => $post['nama_barang'],
        'tanggal'       => $post['tanggal'],
        'jumlah_barang' => $post['jumlah_barang'],
        'harga_perunit' => $post['harga_perunit'],
        'status'        => $post['status'],
    ];
        $this->db->where('kode_supplier', $post['kode_supplier']);
        $this->db->update('penawaran', $params);
    }
}