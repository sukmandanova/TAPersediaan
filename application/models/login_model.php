<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {
	
	function data_login($table,$where) {
		return $this->db->get_where($table, $where);
	}
}