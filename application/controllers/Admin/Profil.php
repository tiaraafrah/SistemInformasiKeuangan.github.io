<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("profil_model");
		$this->load->library('form_validation');
		$this->load->model("user_model");
	if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		$data["users"] = $this->profil_model->getAll(); //ambil data dari model
		$this->load->view("admin/profil/list", $data); //kirim data ke view
	}

	public function edit($id = null) //berikan null agar mudah dicek
	{
		if (!isset($id)) redirect('admin/profil'); //redirect jika tidak ada $id
		$profil = $this->profil_model; 
		$validation = $this->form_validation; 
		$validation->set_rules($profil->rules()); 

		if ($validation->run()) { 
			$profil->update(); 
			$this->session->set_flashdata('success', 'Data Berhasil di Update'); 
			redirect('admin/profil'); 
		}
		$data["profil"] = $profil->getById($id); //menampilkan data untuk ditampilkan pada form
		if (!$data["profil"]) show_404(); //jika tidak ada data
		$this->load->view("admin/profil/edit_form", $data); //menampilkan form edit
	}
}
