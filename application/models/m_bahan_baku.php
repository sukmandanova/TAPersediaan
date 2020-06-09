<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_bahan_baku extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('bahan_baku');
		if($id != null) {
			$this->db->where('kode_barang', $id);
		}
		$query = $this->db->get();
		return $query;
	}

    public function panggilbb()
    {
        return $this->db->get('bahan_baku');
    }
    public function panggilsupplier()
    {
        return $this->db->get('tbl_supplier');
    }

	 public function delete($id)
	{
		$this->db->where('kode_barang', $id);
		$this->db->delete('bahan_baku');
    }
     public function edit($id)
	{
		$this->db->where('kode_barang', $id);
		$this->db->edit('bahan_baku');
    }

    public function tambah($post) {
   // $EOQ = (sqrt (2 * $post['jumlah_kebutuhan'] * $post['biaya_pemesanan'] / $post['biaya_penyimpanan']));
    //$total_biayaps = ($post['jumlah_kebutuhan'] * $post['biaya_pemesanan'] / $EOQ) + ($EOQ * $post['biaya_penyimpanan'] / 2);
    $params = [
        'kode_barang'       => $post['kode_barang'],
        'nama_barang'       => $post['nama_barang'],
        'tanggal'           => $post['tanggal'],
        'stok_barang'       => $post['stok_barang'],
        //'EOQ'               => $EOQ,
       // 'frekuensi_pemesanan'=> $post['jumlah_kebutuhan'] / $EOQ,
       // 'total_biayaps'     => $total_biayaps,
        'jumlah_barang'     => $post['jumlah_barang'],
        'harga_perunit'     => $post['harga_perunit'],
        'total_harga'       => $post['jumlah_barang'] * $post['harga_perunit']    
    ];
    $this->db->insert('bahan_baku',$params);
    }

    public function ubah($post) {
    $params = [
        'kode_barang'       => $post['kode_barang'],
        'nama_barang'       => $post['nama_barang'],
        'tanggal'           => $post['tanggal'],
        'stok_barang'       => $post['stok_barang'],
        'jumlah_barang'     => $post['jumlah_barang'],
        'harga_perunit'     => $post['harga_perunit'],
        'total_harga'       => $post['jumlah_barang'] * $post['harga_perunit'] 
        ];
        $this->db->where('kode_barang', $post['kode_barang']);
        $this->db->update('bahan_baku', $params);
    }
}