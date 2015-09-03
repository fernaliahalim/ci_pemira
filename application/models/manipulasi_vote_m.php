<?PHP
	class Manipulasi_vote_m extends CI_Model{
		public function view(){
			$query = "SELECT * FROM tbl_vote";
			
			return $this->db->query($query);
		}
		
		/*public function insert($id_vote,$time_vote,$nim,$id_calon){
			$query = "INSERT INTO tbl_vote(id_vote,time_vote,nim,id_calon)
						VALUES('".$id_vote."','".$time_vote."','".$nim."','".$id_calon."')";
						
			return $this->db->query($query);
		}
		public function delete($id_vote)
		{
			$query = "delete from tbl_vote where id_vote = '".$id_vote."'";
			return $this->db->query($query);
		}*/
		public function delete_all()
		{
			$query = "delete from tbl_vote";
			return $this->db->query($query);
		}
		/*public function update($id_vote,$time_vote,$nim,$id_calon)
		{
			$query = "update tbl_vote set time_vote = '".$time_vote."',
			nim = '".$nim."',
			id_calon = '".$id_calon."'
			where id_vote = '".$id_vote."'
			";
			return $this->db->query($query);
		}*/
	}
?>