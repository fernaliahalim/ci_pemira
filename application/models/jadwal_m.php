<?PHP
	/**
	* 
	*/
	class Jadwal_m extends CI_Model
	{
		public function view(){
			$sql = "SELECT * FROM tbl_jadwal";

			return $this->db->query($sql);
		}

		public function insert($tgl_mulai,$tgl_akhir){
			$sql = "INSERT INTO tbl_jadwal(".$tgl_mulai."','".$tgl_akhir."')";

			return $this->db->query($sql);
		}

		public function lihat(){
			$query = "SELECT * FROM tbl_setting";

			return $this->db->query($query);
		}

		public function jadwal(){
			$query = "SELECT DATEDIFF(tgl_akhir,NOW()) as jumlah FROM tbl_jadwal";

			return $this->db->query($query);
		}

		public function ubah($mulai,$akhir){
			$query = "UPDATE tbl_jadwal SET tgl_mulai='".$mulai."',
						tgl_akhir='".$akhir."'";

			return $this->db->query($query);
		}
	}
?>