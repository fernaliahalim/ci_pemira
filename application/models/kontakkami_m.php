<?PHP
	/**
	* 
	*/
	class Kontakkami_m extends CI_Model
	{
		
		public function tambah($nama, $email, $pesan){
			$query = "INSERT INTO tbl_kontakkami(nama,email,pesan) 
						VALUES('".$nama."','".$email."','".$pesan."')";
			return $this->db->query($query);
		}
	}
?>