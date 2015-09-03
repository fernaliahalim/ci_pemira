<?PHP
	class Manipulasi_user extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			//ini buat masukin model manipulasi user yang isinya query
			$this->load->model('manipulasi_user_m');
			$this->load->model('manipulasi_pk_m');
			$this->load->model('Pengguna_m');
			$this->load->model('jadwal_m');
		}
		
		public function index(){
			$this->load->view('manipulasi_user_v');
		}
		
		public function insert()
		{
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			//$pk = $this->input->post('pk');
			$password = '123456';
			$priviledge = $this->input->post('priviledge');
			
			$hasil = $this->Pengguna_m->view_pk($nim);

			foreach($hasil->result() as $row):
				$kdpk = $row->kode_pk;
			endforeach; 

			$hasil = $this->manipulasi_user_m->insert($nim,$nama,$kdpk,$password,$priviledge);
			
			if($hasil){
				redirect('manipulasi_user');
			}
			else{
				echo "Gagal";
			}
		}
		public function delete()
		{
			$nim = $this ->uri->segment(3);
			
			$hasil = $this->manipulasi_user_m->delete($nim);
			
			if($hasil){
				redirect('manipulasi_user');
			}
			else{
				echo "Gagal";
			}
		}
		public function delete_all()
		{
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$pk = $this->input->post('pk');
			$password = $this->input->post('password');
			$priviledge = $this->input->post('priviledge');
			
			$hasil = $this->manipulasi_user_m->delete_all();
			
			if($hasil){
				redirect('manipulasi_user');
			}
			else{
				echo "Gagal";
			}
		}
		public function update()
		{
			
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			//$pk = $this->input->post('pk');
			$password = $this->input->post('password');
			$priviledge = $this->input->post('priviledge');
			
			$hasil = $this->manipulasi_user_m->update($nim,$nama,$password,$priviledge);
			
			if($hasil){
				redirect('manipulasi_user');
			}
			else{
				echo "Gagal";
			}
		}

		public function excel(){
			$this->load->view('data_user_excel_v');
		}
	}
?>