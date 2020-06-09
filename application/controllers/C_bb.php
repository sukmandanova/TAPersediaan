<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_bb extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model(['m_bb','m_ma']);
    }

    public function index()
    {

        $data['row'] = $this->m_bb->get();
        $this->template->load('template','transaksi_bb/lihat_data', $data);
    }

    public function tambah()
    {
		
        if(isset($_POST['upload'])) {
            //$data['row'] = $this->m_bb->tambah();
			$config = array(
				'upload_path'   => FCPATH.'upload/',
				'allowed_types' => 'xls|csv|xlsx' 
			);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
			echo APPPATH."libraries/excel_reader2.php";
            $data = $this->upload->data();
            @chmod($data['full_path'], 0777);
           //$this->load->library('Spreadsheet_Excel_Reader');
            //$this->spreadsheet_excel_reader->setOutputEncoding('CP1251');

            //$this->spreadsheet_excel_reader->read($data['full_path']);
            //$sheets = $this->spreadsheet_excel_reader->sheets[0]; 
            include_once ( APPPATH."libraries/excel_reader2.php");
			$data = new Spreadsheet_Excel_Reader($data['full_path']);
            error_reporting(0);
            $data_excel = array();
            for ($i = 2; $i <= ($data->rowcount($sheet_index=0)); $i++) {
                if ($data->val($i, 1) == '') break;
                $data_excel[$i - 1]['kode_bb']    = NULL;
                
                $data_excel[$i - 1]['bulan']   =  $data->val($i, 1);
                $data_excel[$i - 1]['po']   =  $data->val($i, 2);
                $tgl = explode("/",  $data->val($i, 3));
                $dtgl = $tgl[2].$tgl[1].$tgl[0];
                $data_excel[$i - 1]['tanggal']    =$dtgl; //$dtgl;
                $data_excel[$i - 1]['item']   =  $data->val($i, 4);
                $data_excel[$i - 1]['qty'] =  $data->val($i, 5);
                $data_excel[$i - 1]['price'] =  $data->val($i, 6);
            

                // $data_excel[$i - 1]['name']    = $sheets['cells'][$i][1]+'$r';
                // $data_excel[$i - 1]['phone']   = $sheets['cells'][$i][2];
                // $data_excel[$i - 1]['address'] = $sheets['cells'][$i][3]; ini name, phone, address diganti sama kolom yang ada ditabel absen di database
                $r++;
            }
			
            echo "<script>console.log('".$dtgl."')</script>";
            $this->db->insert_batch('tbl_bb', $data_excel);//

            // @unlink($data['full_path']);
            //redirect('excel-import');
        }
        }
		
            echo "<script>window.location='".site_url('C_bb')."'</script>";
    }

    public function cma()
    {
       $ma = new stdclass();
       $ma->bulan = null;

       $data = array(
            'page' => 'tambah',
            'row' => $ma
       );
       $this->template->load('template', 'moving_average/tambah_ma', $data);
    }

    public function rumus()
    {
        $bulan = $this->input->post('bulan');
        $params = $this->m_ma->proses($bulan)->result();
        $jumlah = 0;
        foreach ($params as $row) {
            $qty = $row->qty;
            $jumlah = $jumlah + $qty;
        }

        $hasil = $jumlah / 3;
        // echo $hasil;
        $data['row'] = $hasil;
        $this->template->load("template", 'moving_average/hasil', $data);

    }
}