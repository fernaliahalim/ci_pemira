<?PHP
	/**
	* 
	*/
	class Calon_m extends CI_Model
	{
		
		public function lihat_calon(){
			$query = "SELECT * FROM tbl_calon";

			return $this->db->query($query);
		}

		public function id_vote(){
			
			$this->load->database('db_pemira');
			
			$temp = $this->db->get('tbl_vote');
			
			foreach($temp->result() as $row){
				$idk = $row->id_vote;
				}
			$idk1 = substr($idk,1,3);
			
			$temp1 = $idk1+1;
			
			if($temp1 > 99){
				return $this->id_ds="V".$temp1;
				}
			else if($temp1 >9){
				return $this->id_ds="V0".$temp1;
				}
			else{
				return $this->id_ds="V00".$temp1;
				}
			}

			public function id_cabem_cawabem(){
			
			$this->load->database('db_pemira');
			
			$temp = $this->db->get('tbl_calon');
			
			foreach($temp->result() as $row){
				$idk = $row->id_calon;
				}
			$idk1 = substr($idk,1,3);
			
			$temp1 = $idk1+1;
			
			if($temp1 > 99){
				return $this->id_ds="C".$temp1;
				}
			else if($temp1 >9){
				return $this->id_ds="C0".$temp1;
				}
			else{
				return $this->id_ds="C00".$temp1;
				}
			}

		public function tambah_vote($time_vote,$id,$nim){
			$query = "INSERT INTO tbl_vote(id_vote,time_vote,nim,id_calon)
						VALUES('".$this->id_vote()."','".$time_vote."','".$nim."','".$id."')";

			return $this->db->query($query);
		}

		public function tambah_calon($nim_cabem,$nama_cabem,$nim_cawabem,$nama_cawabem,$img_url){
			$query = "INSERT INTO tbl_calon(id_calon,nim_cabem,nama_cabem,nim_cawabem,nama_cawabem,img_url)
						VALUES('".$this->id_cabem_cawabem()."','".$nim_cabem."','".$nama_cabem."',
								'".$nim_cawabem."','".$nama_cawabem."','".$img_url."')";
			
			return $this->db->query($query);
		}

		public function ubah_calon($id_calon,$nim_cabem,$nama_cabem,$nim_cawabem,$nama_cawabem,$img_url){
			$query = "UPDATE tbl_calon SET nim_cabem='".$nim_cabem."',
						nama_cabem='".$nama_cabem."',
						nim_cawabem='".$nim_cawabem."',
						nama_cawabem='".$nama_cawabem."',
						img_url='".$img_url."' 
						WHERE id_calon='".$id_calon."'";

			return $this->db->query($query);
		}

		public function ubah_calon2($id_calon,$nim_cabem,$nama_cabem,$nim_cawabem,$nama_cawabem){
			$query = "UPDATE tbl_calon SET nim_cabem='".$nim_cabem."',
						nama_cabem='".$nama_cabem."',
						nim_cawabem='".$nim_cawabem."',
						nama_cawabem='".$nama_cawabem."'  
						WHERE id_calon='".$id_calon."'";

			return $this->db->query($query);
		}

		public function hapus_calon($id){
			$query = "DELETE FROM tbl_calon WHERE id_calon='".$id."'";

			return $this->db->query($query);
		}

		public function hapus_calon_semua(){
			$query = "DELETE FROM tbl_calon";

			return $this->db->query($query);
		}
	}
?>