<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lapkeluar_model extends CI_Model{

	public function gettahun(){
		$query = $this->db->query("SELECT YEAR(tgl_pengeluaran) AS tahun FROM pengeluaran GROUP BY YEAR(tgl_pengeluaran) ORDER BY YEAR(tgl_pengeluaran) ASC");

		return $query->result();
	}
	public function filterbytanggal($tanggalawal, $tanggalakhir){
		$query = $this->db->query("SELECT * FROM pengeluaran where tgl_pengeluaran between '$tanggalawal' and '$tanggalakhir' ORDER BY tgl_pengeluaran asc");

		return $query->result();
	}
}