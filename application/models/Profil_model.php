<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model
{
	private $_table = "users"; //nama tabel
// nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
	public $user_id;
	public $username;
	public $email;
	public $nama_lengkap;
	public $password;
	public $role;

	public function rules() //Pada Rules, kita memberikan aturan untuk wajib mengisi (required)
	{
		return[
			['field' => 'nama_lengkap',
			'label' => 'Username',
			'rules' => 'required'],
			
			['field' => 'email',
			'label' => 'Password',
			'rules' => 'required']
		];
	}
//method get() dan getAll(). Kedua method ini akan kita gunakan untuk mengambil data dari database
	public function getAll()
	{
		return $this->db->get($this->_table)->result();
		//ini sama artinya seperti: //SELECT * FROM users	
	}
	public function getById($id)
	{
		return $this->db->get_where($this->_table,["user_id" => $id])-> row();
		//ini sama artinya seperti: //SELECT * FROM users WHERE user_id=$id
	}

	public function save()
	{
		$post = $this->input->post(); //ambil data dari form
		$this->user_id = $post["user_id"]; //isi field otomatis
		$this->username = $post["username"]; //isi field
		$this->email = $post["email"]; //isi field
		$this->nama_lengkap = $post["nama_lengkap"]; //isi field
		$this->password = $post["password"];
		$this->role = $post["role"]; //isi field
		return $this->db->insert($this->_table, $this); //simpan ke database
	}

	public function update()
	{
		$post = $this->input->post(); 
		$this->user_id = $post["id"]; 
		$this->username = $post["username"]; 
		$this->email = $post["email"]; 
		$this->nama_lengkap = $post["nama_lengkap"]; 
		$this->password = $post["password"];
		$this->role = $post["role"];
		return $this->db->update($this->_table, $this, array('user_id'
		=> $post['id']));
	}
}