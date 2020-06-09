<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_bahan_baku extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_bahan_baku');
	}

	public function index()
	{
		$data['row'] = $this->m_bahan_baku->get();
		$this->template->load('template', 'bahan_baku/daftar_bahan_baku', $data);
	}

	public function tambah()
	{
		$bahan_baku = new stdClass();
        $bahan_baku->kode_barang = null;
        $bahan_baku->nama_barang = null;
        $bahan_baku->stok_barang = null;
        $bahan_baku->tanggal = null;
        $bahan_baku->harga_perunit = null;
        $bahan_baku->jumlah_barang = null;


        $data = array (
            'page' => 'tambah', 
            'row' => $bahan_baku,
        );

		$this->template->load('template', 'bahan_baku/tambah_bahan_baku', $data);
	}

	public function proses() {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['tambah'])) {
            $this->m_bahan_baku->tambah($post);
        } else if(isset($_POST['ubah'])) {
            $this->m_bahan_baku->ubah($post);
        }
        if($this->db->affected_rows() > 0 ) {
          echo "<script>alert('Data berhasil di simpan')</script>";
        }
        echo "<script>window.location='".site_url('C_bahan_baku')."'</script>";
    }	

	public function delete($id) {
        $this->m_bahan_baku->delete($id);
        if($this->db->affected_rows() > 0 ) { 
   	echo "<script>alert('Data berhasil di hapus')</script>";
  	}
  	echo "<script>window.location='".site_url('C_bahan_baku')."'</script>";
    }

    public function edit($id) {
        $this->m_bahan_baku->delete($id);
        if($this->db->affected_rows() > 0 ) { //udah bner db itu jangan di ganti
   	echo "<script>alert('Data berhasil di ubah')</script>";
  	}
  	echo "<script>window.location='".site_url('C_bahan_baku')."'</script>";
    }

    public function ubah($id) {
        $query = $this->m_bahan_baku->get($id);
        if($query->num_rows() > 0) {
            $bahan_baku = $query->row();
            $data = array(
                'page' => 'ubah',
                'row' => $bahan_baku
            );
            $this->template->load('template', 'bahan_baku/tambah_bahan_baku', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan')";
            echo "window.location='".site_url('C_bahan_baku')."'</script>";
        }
    }
}
