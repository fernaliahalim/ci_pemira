<?PHP
	/**
	* 
	*/
	class Jadwal extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();

			//model
			$this->load->model('jadwal_m');
			$this->load->model('jadwal_m');
		}

		public function index(){
			$this->load->view('jadwal_v');
		}

		public function insert(){
			$tgl_mulai = $this->input->post('tgl_mulai');
			$tgl_akhir = $this->input->post('tgl_akhir');

			$hasil = $this->jadwal_m->insert($tgl_mulai,$tgl_akhir);
			if($hasil){
				redirect('jadwal');
			}
			else{
				redirect('jadwal');
			}
		}

		public function update(){
			$tgl_mulai = $this->input->post('tgl_mulai');
			$tgl_akhir = $this->input->post('tgl_akhir');

			//echo $tgl_mulai;
			//echo $tgl_akhir;
			$hasil = $this->jadwal_m->ubah($tgl_mulai,$tgl_akhir);
			if($hasil){
				redirect('jadwal');
			}
			else{
				redirect('jadwal');
			}
		}
	}
?>