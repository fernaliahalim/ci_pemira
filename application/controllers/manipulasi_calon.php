<?PHP
	/**
	* 
	*/
	class Manipulasi_calon extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();

			$this->load->model('calon_m');
			$this->load->model('jadwal_m');
		}

		public function index(){
			$this->load->view('manipulasi_calon_v');
		}

		public function insert(){

			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']    = '10000000';
			$config['max_width']  = '9999';
			$config['max_height']  = '9999';

			//$id_calon = $this->input->post('id_calon');
			$nim_cabem = $this->input->post('nim_cabem');
			$nama_cabem = $this->input->post('nama_cabem');
			$nim_cawabem = $this->input->post('nim_cawabem');
			$nama_cawabem = $this->input->post('nama_cawabem');
			$img_url = $this->input->post('userfile');

			$this->load->library('upload',$config);
				if ($this->upload->do_upload())
				{
					$temp = $this->upload->data();
	            	$foto = $temp['file_name'];
	         

	        $foto_url = "assets/img/".$foto;

			$hasil = $this->calon_m->tambah_calon($nim_cabem,$nama_cabem,$nim_cawabem,$nama_cawabem,$foto_url);
			
			if($hasil){
				redirect('manipulasi_calon');
			}
			else{
				redirect('manipulasi_calon/index/gagal_tambah');
			}
		}
		else{
				redirect('manipulasi_calon/index/gagal_tambah');
		}
		}

		public function update(){
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']    = '10000000';
			$config['max_width']  = '9999';
			$config['max_height']  = '9999';

			$id_calon = $this->input->post('id_calon_tmp');
			$nim_cabem = $this->input->post('nim_cabem');
			$nama_cabem = $this->input->post('nama_cabem');
			$nim_cawabem = $this->input->post('nim_cawabem');
			$nama_cawabem = $this->input->post('nama_cawabem');
			$img_url = $this->input->post('userfile');

			/*echo $id_calon;
			echo $nim_cabem;
			echo $nama_cabem;
			echo $nim_cawabem;
			echo $nama_cawabem;
			echo $img_url;*/

		$this->load->library('upload',$config);
		if ($this->upload->do_upload())
			{
			$temp = $this->upload->data();
	        $foto = $temp['file_name'];
	         

	        $foto_url = "assets/img/".$foto;

			$hasil = $this->calon_m->ubah_calon($id_calon,$nim_cabem,$nama_cabem,$nim_cawabem,$nama_cawabem,$foto_url);
			
			if($hasil){
				redirect('manipulasi_calon');
			}
			else{
				redirect('manipulasi_calon/index/gagal_tambah');
			}
		}
		else{
			
			$hasil = $this->calon_m->ubah_calon2($id_calon,$nim_cabem,$nama_cabem,$nim_cawabem,$nama_cawabem);
			
			if($hasil){
				redirect('manipulasi_calon');
			}
			else{
				redirect('manipulasi_calon/index/gagal_tambah');
			}
		}
		}

		public function delete(){
			$id = $this->uri->segment(3);

			$hasil = $this->calon_m->hapus_calon($id);

			if($hasil){
				redirect('manipulasi_calon');
			}
			else{
				redirect('manipulasi_calon/index/gagal_tambah');
			}
		}

		public function delete_all(){
			$hasil = $this->calon_m->hapus_calon_semua();

			if($hasil){
				redirect('manipulasi_calon');
			}
			else{
				redirect('manipulasi_calon/index/gagal_tambah');
			}
		}
}
?>