<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_ma extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('moving_average');
		$query = $this->db->get();
		return $query;
	}

    public function panggilbb()
    {
        return $this->db->get('moving_average');
    }

	 public function delete($id)
	{
		$this->db->where('periode_1', $id);
		$this->db->delete('moving_average');
    }
     public function edit($id)
	{
		$this->db->where('periode_1', $id);
		$this->db->edit('moving_average');
    }

    public function tambah($post) {
    $params = [
        'periode_1'       => $post['periode_1'],
        'periode_2'       => $post['periode_2'],
        'periode_3'           => $post['periode_3'],
        'ma'     => $post['periode_1'] + $post['periode_2'] + $post['periode_3'] / 3,  
    ];
    $this->db->insert('moving_average',$params);
    }

    public function ubah($post) {
    $params = [
       'periode_1'       => $post['periode_1'],
        'periode_2'       => $post['periode_2'],
        'periode_3'           => $post['periode_3'],
        'ma'     => $post['periode_1'] + $post['periode_2'] + $post['periode_3'] / 3, 
        ];
        $this->db->where('periode_1', $post['periode_1']);
        $this->db->update('moving_average', $params);
    }

    public function proses($bulan)
    {

        if($bulan == 1)
        {
            $query = $this->db->query("SELECT qty FROM tbl_bb WHERE bulan = 12 or bulan = 11 or bulan = 10 ");
            return $query;
        } elseif($bulan == 2)
        {
            $query = $this->db->query("SELECT qty FROM tbl_bb WHERE bulan = 1 or bulan = 12 or bulan = 11 ");
            return $query;
        } elseif ($bulan == 3) {
            $query = $this->db->query("SELECT qty FROM tbl_bb WHERE bulan = 2 or bulan = 1 or bulan = 12 ");
            return $query;
        }else{
        $a = $bulan - 1;
        $b = $bulan - 2;
        $c = $bulan - 3;

        $query = $this->db->query("SELECT qty FROM tbl_bb WHERE bulan = '$a' or bulan = '$b' or bulan = '$c' ");
        return $query;
        }
        
    }
}