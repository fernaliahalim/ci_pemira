<?PHP
	class Manipulasi_pk extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			//ini buat masukin model manipulasi user yang isinya query
			$this->load->model('manipulasi_pk_m');
			$this->load->model('jadwal_m');
		}
		
		public function index(){
			$this->load->view('manipulasi_pk_v');
		}
		
		public function insert()
		{
			$kode_pk = $this->input->post('kode_pk');
			$simbol_pk = $this->input->post('simbol_pk');
			$nama_pk = $this->input->post('nama_pk');
			
			
			$hasil = $this->manipulasi_pk_m->insert($kode_pk,$simbol_pk,$nama_pk);
			
			if($hasil){
				redirect('manipulasi_pk');
			}
			else{
				echo "Gagal";
			}
		}
		public function delete()
		{
			$kode_pk = $this ->uri->segment(3);
			
			$hasil = $this->manipulasi_pk_m->delete($kode_pk);
			
			if($hasil){
				redirect('manipulasi_pk');
			}
			else{
				echo "Gagal";
			}
		}
		public function delete_all()
		{
			$kode_pk = $this->input->post('kode_pk');
			$simbol_pk = $this->input->post('simbol_pk');
			$nama_pk = $this->input->post('nama_pk');
			
			
			$hasil = $this->manipulasi_pk_m->delete_all();
			
			if($hasil){
				redirect('manipulasi_pk');
			}
			else{
				echo "Gagal";
			}
		}
		public function update()
		{
			
			$kode_pk = $this->input->post('kode_pk');
			$simbol_pk = $this->input->post('simbol_pk');
			$nama_pk = $this->input->post('nama_pk');
			
			$hasil = $this->manipulasi_pk_m->update($kode_pk,$simbol_pk,$nama_pk);
			
			if($hasil){
				redirect('manipulasi_pk');
			}
			else{
				echo "Gagal";
			}
		}
	}
?>