<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_pr extends CI_Model {

    public function lihat_data()
    {
        $query = "SELECT * from bahan_baku, purchase_requisition where bahan_baku.kode_barang = purchase_requisition.kode_barang";
        return $this->db->query($query);
    }

    public function konfirm($id = null)
    {
        // $query="select * from purchase_requisition where status='Belum Konfirmasi'";
        $params = $this->db->query("SELECT * FROM bahan_baku, purchase_requisition where purchase_requisition.status='Belum Konfirmasi' and bahan_baku.kode_barang = purchase_requisition.kode_barang");
        return $params;
    }
    
    function ubah_status($kode_pr){
        //$this->db->insert('tb_pr',$data);
            $data       = array('status' => 'Konfirmasi');
            $this->db->where('kode_pr', $kode_pr);
            $this->db->update('purchase_requisition',$data);
    }

     public function delete($id)
    {
        $this->db->where('kode_pr', $id);
        $this->db->delete('purchase_requisition');
    }
     public function edit($id)
    {
        $this->db->where('kode_pr', $id);
        $this->db->edit('purchase_requisition');
    }


    public function tambah($post) {
    $params = [
        'kode_pr'     => $post['kode_pr'],
        'kode_barang' => $post['kode_barang'],
        'tanggal'     => $post['tanggal'],
		'status'      => $post['status'],
    ];
    $this->db->insert('purchase_requisition', $params);
    }

    public function ubah($post) {
        $params = [
        'kode_pr'     => $post['kode_pr'],
        'kode_barang' => $post['kode_barang'],
        'tanggal'     => $post['tanggal'],
        'status'      => $post['status'],
        ];
        $this->db->where('kode_pr', $post['kode_pr']);
        $this->db->update('purchase_requisition', $params);
    }

    public function tolak($id) {
        $this->db->query("UPDATE purchase_requisition SET status = 'Tertolak' where kode_pr = '$id'");
}
    public function terima($id) {
        $this->db->query("UPDATE purchase_requisition SET status = 'Terima' where kode_pr = '$id'");
    }
}