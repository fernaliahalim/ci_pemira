<?PHP
	class Manipulasi_pk_m extends CI_Model{
		public function view(){
			$query = "SELECT * FROM tbl_pk";
			
			return $this->db->query($query);
		}
		
		public function insert($kode_pk,$simbol_pk,$nama_pk){
			$query = "INSERT INTO tbl_pk(kode_pk,simbol_pk,nama_pk)
						VALUES('".$kode_pk."','".$simbol_pk."','".$nama_pk."')";
						
			return $this->db->query($query);
		}
		public function delete($kode_pk)
		{
			$query = "delete from tbl_pk where kode_pk = '".$kode_pk."'";
			return $this->db->query($query);
		}
		public function delete_all()
		{
			$query = "delete from tbl_pk";
			return $this->db->query($query);
		}
		public function update($kode_pk,$simbol_pk,$nama_pk)
		{
			$query = "update tbl_pk set simbol_pk = '".$simbol_pk."',
			nama_pk = '".$nama_pk."'
			where kode_pk = '".$kode_pk."'
			";
			return $this->db->query($query);
		}
	}
?>