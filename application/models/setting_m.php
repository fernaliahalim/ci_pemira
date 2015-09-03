<?PHP
	/**
	* 
	*/
	class Setting_m extends CI_Model
	{
		
		public function enable(){
			$sql = "UPDATE tbl_setting SET time_vote=1 WHERE id=1";

			return $this->db->query($sql);
		}

		public function disable(){
			$sql = "UPDATE tbl_setting SET time_vote=0 WHERE id=1";

			return $this->db->query($sql);
		}
	}
?>