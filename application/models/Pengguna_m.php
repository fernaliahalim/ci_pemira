<?php
class Pengguna_m extends CI_Model{
	private $username;
	private $password;
	
	public function setUsername($user) {
		$this->username = $user;
	}
	
	public function setPassword($pass) {
		$this->password = $pass;
	}
	public function getUsername(){
		return $this->username;	
	}
	public function getPassword(){
		return $this->password;	
	}

	public function view() {
		$query = "SELECT * From tbl_user WHERE nim = ".$this->getUsername()." AND password = ".$this->getPassword();
		
		return $this->db->query($query);
	}

	public function view_user($nim){
		$query = "SELECT * FROM tbl_user WHERE nim='".$nim."'";

		return $this->db->query($query);
	}

	public function view_pk($nim){
		$subnim = substr($nim,2,1);
		$query = "SELECT * FROM tbl_pk WHERE simbol_pk='".$subnim."'";

		return $this->db->query($query);
	}

	public function validasi($nim,$nama,$password,$pk){
		$query = "UPDATE tbl_user SET nama='".$nama."',
					pk='".$pk."',
					password='".md5($password)."',
					flag='signup' 
					WHERE nim='".$nim."'";

		return $this->db->query($query);
		/*$data = $this->view_user($nim);
		foreach($data->result as $row):
			$nim_db = $row->nim;
			$nama_db = $row->nama;
		endforeach;

		if($nim == $nim_db){
			if($nama == $nama_db){
				$hasil = $this->view_pk($nim);

				foreach($hasil->result as $baris):
					$kdpk = $baris->kode_pk;
				endforeach;

				$query = "UPDATE tbl_user SET nama='".$nama."',
							pk='".$kdpk."',
							password='".md5($password)."'
							WHERE nim='".$nim."'";

				return $this->db->query($query);
			}
			else{
				redirect('buat_akun');
			}
		}
		else{
			redirect('buat_akun');
		}*/
	}
}

?>