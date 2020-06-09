<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_po extends CI_Model {

	 public function lihat_data()
    {
        $query = "SELECT * from bahan_baku,tbl_supplier, purchase_order where bahan_baku.kode_barang = purchase_order.kode_barang and tbl_supplier.kode_supplier=purchase_order.kode_supplier";
        return $this->db->query($query);
    }

	 public function delete($id)
	{
		$this->db->where('kode_po', $id);
		$this->db->delete('purchase_order');
    }
     public function edit($id)
	{
		$this->db->where('kode_po', $id);
		$this->db->edit('purchase_order');
    }

    public function tambah($post) {
    $params = [
        'kode_po'=> $post['kode_po'],
        'kode_barang'=> $post['kode_barang'],
        'tanggal'=> $post['tanggal'],
        'kode_supplier'=> $post['kode_supplier'],
        'status'=> $post['status']

    ];
    $this->db->insert('purchase_order', $params);
    }

    public function ubah($post) {
        $params = [
        'kode_po'=> $post['kode_po'],
        'kode_barang'=> $post['kode_barang'],
        'tanggal'=> $post['tanggal'],
        'kode_supplier'=> $post['kode_supplier'],
        'status'=> $post['status']
        ];
        $this->db->where('kode_po', $post['kode_po']);
        $this->db->update('purchase_order', $params);
    }
}