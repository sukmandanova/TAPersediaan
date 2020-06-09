<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ma extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_ma');
	}

	public function index()
	{
		$data['row'] = $this->m_ma->get();
		$this->template->load('template', 'moving_average/daftar_ma', $data);
	}

	public function tambah()
	{
		$moving_average = new stdClass();
        $moving_average->bulan = null;
        $moving_average->ma = null;

        $data = array (
            'page' => 'tambah', 
            'row' => $moving_average,
        );

		$this->template->load('template', 'moving_average/tambah_ma', $data);
	}

	public function proses() {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['tambah'])) {
            $this->m_ma->tambah($post);
        } else if(isset($_POST['ubah'])) {
            $this->m_ma->ubah($post);
        }
        if($this->db->affected_rows() > 0 ) {
          echo "<script>alert('Data berhasil di simpan')</script>";
        }
        echo "<script>window.location='".site_url('C_ma')."'</script>";
    }	

	public function delete($id) {
        $this->m_ma->delete($id);
        if($this->db->affected_rows() > 0 ) { 
   	echo "<script>alert('Data berhasil di hapus')</script>";
  	}
  	echo "<script>window.location='".site_url('C_ma')."'</script>";
    }

    public function edit($id) {
        $this->m_ma->delete($id);
        if($this->db->affected_rows() > 0 ) { //udah bner db itu jangan di ganti
   	echo "<script>alert('Data berhasil di ubah')</script>";
  	}
  	echo "<script>window.location='".site_url('C_ma')."'</script>";
    }

    public function ubah($id) {
        $query = $this->m_ma->get($id);
        if($query->num_rows() > 0) {
            $moving_average = $query->row();
            $data = array(
                'page' => 'ubah',
                'row' => $moving_average
            );
            $this->template->load('template', 'moving_average/tambah_ma', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan')";
            echo "window.location='".site_url('C_ma')."'</script>";
        }
    }
}