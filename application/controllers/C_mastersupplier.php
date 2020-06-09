<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mastersupplier extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mastersupplier');
    }

    public function index()
    {
        $data['row'] = $this->m_mastersupplier->get();
        $this->template->load('template', 'master_supplier/daftar_master_supplier', $data);
    }

    public function tambah()
    {
        $tbl_supplier = new stdClass();
        $tbl_supplier->kode_supplier = null;
        $tbl_supplier->nama_supplier = null;
        $tbl_supplier->alamat = null;
        $tbl_supplier->email = null;
        $tbl_supplier->tlp = null;

        $data = array (
            'page' => 'tambah', 
            'row' => $tbl_supplier,
        );

        $this->template->load('template', 'master_supplier/tambah_master_supplier', $data);
    }

    public function proses() {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['tambah'])) {
            $this->m_mastersupplier->tambah($post);
        } else if(isset($_POST['ubah'])) {
            $this->m_mastersupplier->ubah($post);
        }
        if($this->db->affected_rows() > 0 ) {
          echo "<script>alert('Data berhasil di simpan')</script>";
        }
        echo "<script>window.location='".site_url('C_mastersupplier')."'</script>";
    }   

    public function delete($id) {
        $this->m_mastersupplier->delete($id);
        if($this->db->affected_rows() > 0 ) { 
    echo "<script>alert('Data berhasil di hapus')</script>";
    }
    echo "<script>window.location='".site_url('C_mastersupplier')."'</script>";
    }

    public function edit($id) {
        $this->m_mastersupplier->delete($id);
        if($this->db->affected_rows() > 0 ) { //udah bner db itu jangan di ganti
    echo "<script>alert('Data berhasil di ubah')</script>";
    }
    echo "<script>window.location='".site_url('C_mastersupplier')."'</script>";
    }

    public function ubah($id) {
        $query = $this->m_mastersupplier->get($id);
        if($query->num_rows() > 0) {
            $master_baku = $query->row();
            $data = array(
                'page' => 'ubah',
                'row' => $master_baku
            );
            $this->template->load('template', 'master_supplier/tambah_master_supplier', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan')";
            echo "window.location='".site_url('C_mastersupplier')."'</script>";
        }
    }
}
