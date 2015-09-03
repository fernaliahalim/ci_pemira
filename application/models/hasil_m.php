<?PHP
	/**
	* 
	*/
	class Hasil_m extends CI_Model
	{
		
		public function lihat(){
			$query="SELECT c.nama_cabem,c.nama_cawabem, c.id_calon, count(v.id_calon) as jumlah
				FROM tbl_calon as c LEFT JOIN tbl_vote as v
				on c.id_calon=v.id_calon
				GROUP BY c.id_calon";

			return $this->db->query($query);
		}

		public function lihat_vote(){
			$query="SELECT c.nama_cabem,c.nama_cawabem, c.id_calon, count(v.id_calon) as jumlah
				FROM tbl_calon as c LEFT JOIN tbl_vote as v
				on c.id_calon=v.id_calon
				GROUP BY c.id_calon";

			return $this->db->query($query);
		}

		public function vote_inf(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='INF'";

			return $this->db->query($query);
		}

		public function vote_kmn(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='KMN'";

			return $this->db->query($query);
		}

		public function vote_ekw(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='EKW'";

			return $this->db->query($query);
		}

		public function vote_tek(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='TEK'";

			return $this->db->query($query);
		}

		public function vote_jmp(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='JMP'";

			return $this->db->query($query);
		}

		public function vote_gzi(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='GZI'";

			return $this->db->query($query);
		}

		public function vote_tib(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='TIB'";

			return $this->db->query($query);
		}

		public function vote_ikn(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='IKN'";

			return $this->db->query($query);
		}

		public function vote_tnk(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='TNK'";

			return $this->db->query($query);
		}

		public function vote_mab(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='MAB'";

			return $this->db->query($query);
		}

		public function vote_mni(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='MNI'";

			return $this->db->query($query);
		}

		public function vote_kim(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='KIM'";

			return $this->db->query($query);
		}

		public function vote_lnk(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='LNK'";

			return $this->db->query($query);
		}

		public function vote_akn(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='AKN'";

			return $this->db->query($query);
		}

		public function vote_pvt(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='PVT'";

			return $this->db->query($query);
		}

		public function vote_ppp(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='PPP'";

			return $this->db->query($query);
		}

		public function vote_tmp(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='TMP'";

			return $this->db->query($query);
		}

		public function vote_pks(){
			$query="SELECT DISTINCT u.nim, u.nama, u.pk, count(*) as jumlah
					FROM tbl_user as u INNER JOIN tbl_vote as v
					on v.nim = u.nim
					GROUP BY substr(u.nim,3,1)
					HAVING u.pk='PKS'";

			return $this->db->query($query);
		}
	}
?>