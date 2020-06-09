<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once('phpexcel.php');

class Excel extends phpexcel{

	public function __construct()
	{
		parent::__construct();
	}
}

?>