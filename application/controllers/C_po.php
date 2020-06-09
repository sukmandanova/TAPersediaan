<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_po extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(['m_po','m_bahan_baku']);
	}

	public function index()
	{
		 $data['row'] = $this->m_po->lihat_data();
		$this->template->load('template', 'po/daftar_po', $data);
	}

	public function tambah()
	{
		$purchase_order = new stdClass();
        $purchase_order->kode_po = null;
        $purchase_order->kode_barang= null;
        $purchase_order->jumlah_barang = null;
        $purchase_order->harga_perunit = null;
        $purchase_order->tanggal = null;
        $purchase_order->kode_supplier = null;
        $purchase_order->status = null;


        $data = array (
            'page' => 'tambah', 
            'row' => $purchase_order,
        );
        $data['bahan_baku'] = $this->m_bahan_baku->panggilbb()->result();
        $data['tbl_supplier'] = $this->m_bahan_baku->panggilsupplier()->result();
		$this->template->load('template', 'po/tambah_po', $data);
	}

	public function proses() {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['tambah'])) {
            $this->m_po->tambah($post);
        } else if(isset($_POST['ubah'])) {
            $this->m_po->ubah($post);
        }
        if($this->db->affected_rows() > 0 ) {
          echo "<script>alert('Data berhasil di simpan')</script>";
        }
        echo "<script>window.location='".site_url('C_po')."'</script>";
    }	

	public function delete($id) {
        $this->m_po->delete($id);
        if($this->db->affected_rows() > 0 ) { 
   	echo "<script>alert('Data berhasil di hapus')</script>";
  	}
  	echo "<script>window.location='".site_url('C_po')."'</script>";
    }

    public function edit($id) {
        $this->m_po->delete($id);
        if($this->db->affected_rows() > 0 ) { //udah bner db itu jangan di ganti
   	echo "<script>alert('Data berhasil di ubah')</script>";
  	}
  	echo "<script>window.location='".site_url('C_po')."'</script>";
    }

    public function ubah($id) {
        $query = $this->m_po->lihat_data($id);
        if($query->num_rows() > 0) {
            $purchase_order = $query->row();
            $data = array(
                'page' => 'ubah',
                'row' => $purchase_order
            );
            $data['bahan_baku'] = $this->m_bahan_baku->panggilbb()->result();
            $data['tbl_supplier'] = $this->m_bahan_baku->panggilsupplier()->result();
            $this->template->load('template', 'po/tambah_po', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan')";
            echo "window.location='".site_url('C_po')."'</script>";
        }
    }
}
