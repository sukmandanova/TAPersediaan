<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pr extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['m_pr','m_bahan_baku']);
    }

    public function index()
    {
        $data['row'] = $this->m_pr->lihat_data();
        $this->template->load('template', 'pr/daftar_pr', $data);
    }

    public function konfirm()
    {
        $data['row'] = $this->m_pr->konfirm();
        $this->template->load('template', 'pr/konfir_pr', $data);
    }


      function cetak_pr()
    {
      $kode_Pr =$this->uri->segment(3);
      $data['recode']= $this->m_pr->cetak_pr($kode_Pr)->result();
      $data['record2']= $this->m_pr->cetak_pr($kode_Pr)->row_array();
      $data['kode_pr'] = $this->m_pr->kode();
      $this->load->load->view('pr/cetak_pr',$data);
      //$this template->publish();
    }

    public function tambah()
    {
        $purchase_requisition = new stdClass();
        $purchase_requisition->kode_pr = null;
        $purchase_requisition->kode_barang = null;
        $purchase_requisition->jumlah_barang = null;
        $purchase_requisition->harga_perunit = null;
        $purchase_requisition->tanggal = null;
		$purchase_requisition->status= null;

        $data = array (
            'page' => 'tambah', 
            'row' => $purchase_requisition,
        );
        $data['bahan_baku'] = $this->m_bahan_baku->panggilbb()->result();
        $this->template->load('template', 'pr/tambah_pr', $data);
    }

    public function proses() {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['tambah'])) {
            $this->m_pr->tambah($post);
        } else if(isset($_POST['ubah'])) {
            $this->m_pr->ubah($post);
        }
        if($this->db->affected_rows() > 0 ) {
          echo "<script>alert('Data berhasil di simpan')</script>";
        }
        echo "<script>window.location='".site_url('C_pr')."'</script>";
    }   

    public function delete($id) {
        $this->m_pr->delete($id);
        if($this->db->affected_rows() > 0 ) { 
    echo "<script>alert('Data berhasil di hapus')</script>";
    }
    echo "<script>window.location='".site_url('C_pr')."'</script>";
    }

    public function edit($id) {
        $this->m_pr->delete($id);
        if($this->db->affected_rows() > 0 ) { //udah bner db itu jangan di ganti
    echo "<script>alert('Data berhasil di ubah')</script>";
    }
    echo "<script>window.location='".site_url('C_pr')."'</script>";
    }

    public function ubah($id) {
        $query = $this->m_pr->lihat_data($id);
        if($query->num_rows() > 0) {
            $purchase_order = $query->row();
            $data = array(
                'page' => 'ubah',
                'row' => $purchase_order
            );
            $this->template->load('template', 'pr/tambah_pr', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan')";
            echo "window.location='".site_url('C_pr')."'</script>";
        }
    }

    public function tolak($id) {
        $this->m_pr->tolak($id);
        $data['row'] = $this->m_pr->konfirm();
        $this->template->load('template', 'pr/konfir_pr', $data);
}
        public function terima($id) {
        $this->m_pr->terima($id);
        $data['row'] = $this->m_pr->konfirm();
        $this->template->load('template', 'pr/konfir_pr', $data);
    }
}
