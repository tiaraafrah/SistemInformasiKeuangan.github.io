<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lapmasuk_model extends CI_Model{

	public function gettahun(){
		$query = $this->db->query("SELECT YEAR(tgl_pendapatan) AS tahun FROM pendapatan GROUP BY YEAR(tgl_pendapatan) ORDER BY YEAR(tgl_pendapatan) ASC");

		return $query->result();
	}
	public function filterbytanggal($tanggalawal, $tanggalakhir){
		$query = $this->db->query("SELECT * FROM pendapatan where tgl_pendapatan between '$tanggalawal' and '$tanggalakhir' ORDER BY tgl_pendapatan asc");

		return $query->result();
	}
}