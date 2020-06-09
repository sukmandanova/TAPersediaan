<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pr extends CI_Controller {
	function __construct() {
        parent::__construct();
		$this->load->model('m_pr');
        $this->load->library('pdf');
    }

	public function index()
	{
		 $data['row'] = $this->m_pr->lihat_data();	
		$this->template->load('template', 'laporan_pr',$data);
	}
	public function cetak($id)
	{
		$pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'Purchase Requisition',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'PT Cikarang Perkasa Manufacturing',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);

        $row = $this->db->query("select * from purchase_requisition a, bahan_baku b where a.kode_barang = b.kode_barang and a.kode_pr='$id'")->row();
        
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,10,'Kode PR',1,0);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(40,10,$row->kode_pr,1,1);
        
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,10,'Tanggal',1,0);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(40,10,$row->tanggal,1,1);
        
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,10,'Nama Barang',1,0);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(40,10,$row->nama_barang,1,1);
        
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,10,'Jumlah Barang',1,0);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(40,10,$row->jumlah_barang,1,1);
        
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,10,'Harga Per Unit',1,0);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(40,10,$row->harga_perunit,1,1);
        
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,10,'Total Harga',1,0);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(40,10,$row->total_harga,1,1);
       
        $pdf->Output();
	}
}
