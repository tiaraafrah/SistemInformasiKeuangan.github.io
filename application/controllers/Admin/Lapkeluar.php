<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lapkeluar extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Lapkeluar_model');
	}

	public function index(){
		$data['tahun'] = $this->Lapkeluar_model->gettahun();

		$this->load->view('admin/laporan/lapkeluar_view', $data);
	}

	function filter(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$nilaifilter = $this->input->post('nilaifilter');

		if($nilaifilter == 1){
			$data['title'] = "Laporan Pendapatan By Tanggal";
			$data['subtitle'] = "Dari tanggal : ".$tanggalawal.' sampai tanggal : '.$tanggalakhir;
			$data['datafilter'] = $this->Lapkeluar_model->filterbytanggal($tanggalawal, $tanggalakhir);

			$this->load->view('admin/laporan/print_keluar', $data);
		}
	}
}