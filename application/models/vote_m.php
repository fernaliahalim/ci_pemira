<?PHP
	/**
	* 
	*/
	class Vote_m extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function cek_vote($nim){
			//echo $nim;
			$query = "SELECT * FROM tbl_vote WHERE nim='".$nim."'";

			return $this->db->query($query);
		}

		public function lihat_vote(){
			$query="SELECT DISTINCT c.nama_cabem,c.nama_cawabem, c.id_calon, count(v.id_calon) as jumlah
				FROM tbl_calon as c LEFT JOIN tbl_vote as v
				on c.id_calon=v.id_calon
				GROUP BY c.id_calon";

			return $this->db->query($query);
		}
	}
?>