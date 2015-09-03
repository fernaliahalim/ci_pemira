<?PHP
	class Manipulasi_vote extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			//ini buat masukin model manipulasi user yang isinya query
			$this->load->model('manipulasi_vote_m');
			$this->load->model('jadwal_m');
		}
		
		public function index(){
			$this->load->view('manipulasi_vote_v');
		}
		
		/*public function insert()
		{
			$id_vote = $this->input->post('id_vote');
			$time_vote = $this->input->post('time_vote');
			$nim = $this->input->post('nim');
			$id_calon = $this->input->post('id_calon');
			
			
			$hasil = $this->manipulasi_vote_m->insert($id_vote,$time_vote,$nim,$id_calon);
			
			if($hasil){
				redirect('manipulasi_vote');
			}
			else{
				echo "Gagal";
			}
		}
		public function delete()
		{
			$nim = $this ->uri->segment(3);
			
			$hasil = $this->manipulasi_vote_m->delete($id_vote);
			
			if($hasil){
				redirect('manipulasi_vote');
			}
			else{
				echo "Gagal";
			}
		}*/
		public function delete_all()
		{
			$id_vote = $this->input->post('id_vote');
			$time_vote = $this->input->post('time_vote');
			$nim = $this->input->post('nim');
			$id_calon = $this->input->post('id_calon');
			
			$hasil = $this->manipulasi_vote_m->delete_all();
			
			if($hasil){
				redirect('manipulasi_vote');
			}
			else{
				echo "Gagal";
			}
		}
		/*public function update()
		{
			
			$id_vote = $this->input->post('id_vote');
			$time_vote = $this->input->post('time_vote');
			$nim = $this->input->post('nim');
			$id_calon = $this->input->post('id_calon');
			
			$hasil = $this->manipulasi_vote_m->update($id_vote,$time_vote,$nim,$id_calon);
			
			if($hasil){
				redirect('manipulasi_vote');
			}
			else{
				echo "Gagal";
			}
		}*/
	}
?>