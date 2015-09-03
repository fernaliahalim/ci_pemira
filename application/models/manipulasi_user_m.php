<?PHP
	class Manipulasi_user_m extends CI_Model{
		public function view(){
			$query = "SELECT * FROM tbl_user";
			
			return $this->db->query($query);
		}
		
		public function insert($nim,$nama,$pk,$password,$priviledge){
			$query = "INSERT INTO tbl_user(nim,nama,pk,password,priviledge)
						VALUES('".$nim."','".$nama."','".$pk."','".$password."',".$priviledge.")";
						
			return $this->db->query($query);
		}
		public function delete($nim)
		{
			$query = "delete from tbl_user where nim = '".$nim."'";
			return $this->db->query($query);
		}
		public function delete_all()
		{
			$query = "delete from tbl_user";
			return $this->db->query($query);
		}
		public function update($nim,$nama,$password,$priviledge)
		{
			$query = "update tbl_user set nama = '".$nama."',
			password = '".$password."',
			priviledge = '".$priviledge."'
			where nim = '".$nim."'
			";
			return $this->db->query($query);
		}
	}
?>