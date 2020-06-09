<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_permintaan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['m_permintaan','m_bahan_baku']);

    }

    public function index()
    {
        $data['row'] = $this->m_permintaan->lihat_data();
        $this->template->load('template', 'permintaan/daftar_permintaan', $data);
    }

    public function tambah()
    {
        $Permintaan = new stdClass();
        $Permintaan->kode_permintaan = null;
        $Permintaan->kode_barang = null;
        $Permintaan->tanggal_transaksi = null;
        $Permintaan->tanggal_terbeli = null;
        $Permintaan->jumlah_barang = null;
        $Permintaan->status = null;

        $data = array (
            'page' => 'tambah', 
            'row' => $Permintaan,
        );
        $data['bahan_baku'] = $this->m_bahan_baku->panggilbb()->result();
        $this->template->load('template', 'permintaan/tambah_permintaan', $data);  
        
        
    }

    public function proses() {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['tambah'])) {
            $this->m_permintaan->tambah($post);
        } else if(isset($_POST['ubah'])) {
            $this->m_permintaan->ubah($post);
        }
        if($this->db->affected_rows() > 0 ) {
          echo "<script>alert('Data berhasil di simpan')</script>";
        }
        echo "<script>window.location='".site_url('C_permintaan')."'</script>";
    }   

    public function delete($id) {
        $this->m_permintaan->delete($id);
        if($this->db->affected_rows() > 0 ) { 
    echo "<script>alert('Data berhasil di hapus')</script>";
    }
    echo "<script>window.location='".site_url('C_permintaan')."'</script>";
    }

    public function edit($id) {
        $this->m_permintaan->delete($id);
        if($this->db->affected_rows() > 0 ) { 
    echo "<script>alert('Data berhasil di ubah')</script>";
    }
    echo "<script>window.location='".site_url('C_permintaan')."'</script>";
    }

    public function ubah($id) {
        $query = $this->m_permintaan->lihat_data($id);
        if($query->num_rows() > 0) {
            $permintaan = $query->row();
            $data = array(
                'page' => 'ubah',
                'row' => $permintaan
            );
            $data['bahan_baku'] = $this->m_bahan_baku->panggilbb()->result();
            $this->template->load('template', 'permintaan/tambah_permintaan', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan')";
            echo "window.location='".site_url('C_permintaan')."'</script>";
        }
    }
}
