<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Penawaran extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['m_Penawaran','m_mastersupplier']);

    }

    public function index()
    {
        $data['row'] = $this->m_Penawaran->lihat_data();
        $this->template->load('template', 'penawaran/daftar_penawaran', $data);
    }

    public function tambah()
    {
        $penawaran = new stdClass();
        $penawaran->kode_penawaran = null;
        $penawaran->kode_supplier = null;
        $penawaran->nama_barang = null;
        $penawaran->tanggal = null;
        $penawaran->jumlah_barang = null;
        $penawaran->harga_perunit = null;
        $penawaran->status = null;

        $data = array (
            'page' => 'tambah', 
            'row' => $penawaran,
        );
        $data['tbl_supplier'] = $this->m_mastersupplier->panggilbb()->result();
        $this->template->load('template', 'penawaran/tambah_penawaran', $data);  
        
        
    }

    public function proses() {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['tambah'])) {
            $this->m_Penawaran->tambah($post);
        } else if(isset($_POST['ubah'])) {
            $this->m_Penawaran->ubah($post);
        }
        if($this->db->affected_rows() > 0 ) {
          echo "<script>alert('Data berhasil di simpan')</script>";
        }
        echo "<script>window.location='".site_url('C_Penawaran')."'</script>";
    }   

    public function delete($id) {
        $this->m_Penawaran->delete($id);
        if($this->db->affected_rows() > 0 ) { 
    echo "<script>alert('Data berhasil di hapus')</script>";
    }
    echo "<script>window.location='".site_url('C_Penawaran')."'</script>";
    }

    public function edit($id) {
        $this->m_Penawaran->delete($id);
        if($this->db->affected_rows() > 0 ) { 
    echo "<script>alert('Data berhasil di ubah')</script>";
    }
    echo "<script>window.location='".site_url('C_Penawaran')."'</script>";
    }

    public function ubah($id) {
        $query = $this->m_Penawaran->lihat_data($id);
        if($query->num_rows() > 0) {
            $penawaran = $query->row();
            $data = array(
                'page' => 'ubah',
                'row' => $penawaran
            );
            $data['tbl_supplier'] = $this->m_mastersupplier->panggilbb()->result();
            $this->template->load('template', 'penawaran/tambah_penawaran', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan')";
            echo "window.location='".site_url('C_Penawaran')."'</script>";
        }
    }
}