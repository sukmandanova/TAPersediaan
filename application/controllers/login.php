<?php
defined('BASEPATH') Or exit('No direct script allowed');

class login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->library('form_validation');
	}
	
	function index(){
		$this->load->view('form_login');
	}
	
	function cek_login(){
		$this->form_validation->set_rules('username', 'username','required');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('form_login');
		} else {
				
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$nama_divisi=$this->db->get_where('login',array('username'=>$username))->row_array();
				$where = array(
				'username' => $username,
				'password' => MD5($password),	
				);
				
				$cek = $this->login_model->data_login("login", $where)->num_rows();
				if ($cek > 0 ) {
					$data_session = array(
					'nama' => $username,
					'status' => "login",
					'nama_divisi' => $nama_divisi,
					);
					$this->session->set_userdata($data_session);
					redirect(base_url(""));
				} else {
					$this->session->set_flashdata('pesan', '<br>Username atau Password salah.');
					redirect(base_url("login"));
				}
			}
		}
		
		function logout(){
			$this->session->sess_destroy();
			redirect(base_url("login"));
		}
	
	}