<?PHP
	session_start();

	$tgl = $this->session->userdata('waktu_vote');

	if($this->session->userdata('username')){
		if($this->session->userdata('status')==1 or $this->session->userdata('status')==0){
			$this->load->view('header_vv');
?>
<div class="container">
    <?PHP
		if($this->uri->segment(3) == 'gagal_tambah')
		{
	?>
	
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		Data gagal disimpan
	</div>
	
	<?PHP
		}
	?>
	
	<div class="panel panel-default">
        
        <?PHP
			if(($this->session->userdata('username')))
			{
		?>
        
        <div class="panel-heading">
        	<div class="pull-left">
            	<h3 class="panel-title">Data CABEM dan CAWABEM</h3>
            </div>
            <div class="pull-right">
            	<?PHP
            		if(($this->session->userdata('time_vote')==0) and $tgl<=0){
            	?>
                <button class="btn btn-primary btn-sm add" title="Tambah" data-toggle="modal" data-target="#modal_program_keahlian">
                    <i class="glyphicon glyphicon-plus"></i> Tambah
                </button>
                <button class="btn btn-danger btn-sm delete_all" title="Hapus Semua" data-toggle="modal" data-target="#modal_konfirmasi">
                    <i class="glyphicon glyphicon-trash"></i> Hapus Semua
                </button>
                <?PHP
	                }
                ?>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <?PHP
			}
		?>
		
        <table class="table table-responsive">
			<thead>
				<tr>
					<th>ID Calon</th>
					<th>NIM CABEM</th>
					<th>Nama CABEM</th>
					<th>NIM CAWABEM</th>
					<th>Nama CAWABEM</th>
					<th>img_url</th>
					
					<?PHP
						if($this->session->userdata('username') and ($this->session->userdata('time_vote')==0))
						{
							if($tgl<=0){
					?>
					
					<th>Modifikasi</th>
					
					<?PHP
						}
					}
					?>
					
				</tr>
			</thead>
            <tbody>
				
				<?PHP
					$query = $this->calon_m->lihat_calon();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->id_calon; ?>
						<input type="hidden" id="nim_cabem_<?PHP echo $row->id_calon; ?>" value="<?PHP echo $row->nim_cabem; ?>">
						<input type="hidden" id="nama_cabem_<?PHP echo $row->id_calon; ?>" value="<?PHP echo $row->nama_cabem; ?>">
						<input type="hidden" id="nim_cawabem_<?PHP echo $row->id_calon; ?>" value="<?PHP echo $row->nim_cawabem; ?>">
						<input type="hidden" id="nama_cawabem_<?PHP echo $row->id_calon; ?>" value="<?PHP echo $row->nama_cawabem; ?>">
						<input type="hidden" id="img_url_<?PHP echo $row->id_calon; ?>" value="<?PHP echo $row->img_url; ?>">
					</td>
					<td><?PHP echo $row->nim_cabem; ?></td>
					<td><?PHP echo $row->nama_cabem; ?></td>
					<td><?PHP echo $row->nim_cawabem; ?></td>
					<td><?PHP echo $row->nama_cawabem; ?></td>
					<td><?PHP echo $row->img_url; ?></td>
					<?PHP
						if($this->session->userdata('username'))
						{
							if($this->session->userdata('time_vote')==0 and $tgl<=0 ){
					?>
					
					<td>
						<button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_program_keahlian" id="edit_<?PHP echo $row->id_calon; ?>">
							<i class="glyphicon glyphicon-edit"></i> Ubah
						</button>
						<button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="delete_<?PHP echo $row->id_calon; ?>">
							<i class="glyphicon glyphicon-trash"></i> Hapus
						</button>
					</td>
					
					<?PHP
						}
					}
					?>
					
				</tr>
				
				<?PHP
					endforeach;
				?>
				
			</tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="modal_program_keahlian">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">Form Program Keahlian</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_program_keahlian" style="text-align:left;" enctype="multipart/form-data">
                	<div class="form-group">
                    	<label id="lbl_id">ID Calon</label>
                        <input type="text" class="form-control" name="id_calon" id="id_calon" placeholder="ID Calon">
						<input type="hidden" name="id_calon_tmp" id="id_calon_tmp">
						<div id="display" style="text-align:left; padding-left:110px;"></div>
                    </div>
                    <div class="form-group">
                    	<label>NIM CABEM</label>
                        <input type="text" class="form-control" name="nim_cabem" id="nim_cabem" placeholder="NIM CABEM" required>
                    </div>
                    <div class="form-group">
                    	<label>Nama CABEM</label>
                        <input type="text" class="form-control" name="nama_cabem" id="nama_cabem" placeholder="Nama CABEM" required>
                    </div>
                    <div class="form-group">
                    	<label>NIM CAWABEM</label>
                        <input type="text" class="form-control" name="nim_cawabem" id="nim_cawabem" placeholder="NIM CAWABEM" required>
                    </div>
                    <div class="form-group">
                    	<label>Nama CAWABEM</label>
                        <input type="text" class="form-control" name="nama_cawabem" id="nama_cawabem" placeholder="Nama CAWABEM" required>
                    </div>
                    <div class="form-group">
                    	<label>IMG URL</label>
                        <input type="file" class="form-control" name="userfile" id="userfile" placeholder="foto" >
                    </div>

                </form>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-sm" type="submit" form="form_program_keahlian" id="save">
                	Simpan
                </button>
				<button class="btn btn-primary btn-sm" type="submit" form="form_program_keahlian" id="update">
                	Perbaharui
                </button>
            	<button class="btn btn-default btn-sm" data-dismiss="modal">
                	Batal
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_konfirmasi">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
            	<p id="confirm_str">Apakah Anda yakin akan menghapus data ?</p>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-sm" id="delete_all">
                	Ok
                </button>
				<button class="btn btn-primary btn-sm" id="delete">
                	Ok
                </button>
            	<button class="btn btn-default btn-sm" data-dismiss="modal">
                	Batal
                </button>
            </div>
        </div>
    </div>
</div>


<div class="clear"></div>

<?PHP
    $this->load->view('footer_vv');
	}
}
?>

<script type="text/javascript">
	$(document).ready(function() {
		$('.add').click(function() {
			$('#id_calon').val('');
			$('#nim_cabem').val('');
			$('#nama_cabem').val('');
			$('#nim_cawabem').val('');
			$('#nama_cawabem').val('');
			$('#userfile').val('');
			
			$('#id_program_keahlian').attr('disabled', false);
			
			$('#save').show();
			$('#update').hide();

			$('#lbl_id').hide();
			$('#id_calon').hide();
			
			$('#form_program_keahlian').attr('action', '<?PHP echo site_url(); ?>manipulasi_calon/insert');
		});
		
		$('.edit').click(function() {
			var id = this.id.substr(5);
			
			$('#id_calon').val(id);
			$('#id_calon_tmp').val(id);
			$('#nim_cabem').val($('#nim_cabem_' + id).val());
			$('#nama_cabem').val($('#nama_cabem_' + id).val());
			$('#nim_cawabem').val($('#nim_cawabem_' + id).val());
			$('#nama_cawabem').val($('#nama_cawabem_' + id).val());
			$('#userfile').val('');
			
			$('#id_calon').attr('disabled', true);
			
			$('#save').hide();
			$('#update').show();
			
			$('#form_program_keahlian').attr('action', '<?PHP echo site_url(); ?>manipulasi_calon/update');
		});
		
		$('.delete').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus data ?');
			
			$('#delete').show();
			$('#delete_all').hide();
			
			var id = this.id.substr(7);
			
			$('#id_calon').val(id);
		});
		
		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');
			
			$('#delete').hide();
			$('#delete_all').show();
		});
		
		$('#delete').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_calon/delete/' + $('#id_calon').val();
		});
		
		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>pk/delete_all';
		});
		
		$('.excel').click(function(){
			window.location = '<?PHP echo site_url(); ?>pk/excel';
		});
		
		$('.pdf').click(function(){
			window.location = '<?PHP echo site_url(); ?>pk/pdf';
		});
		
		$('.chart').click(function(){
			window.location = '<?PHP echo site_url(); ?>pk/chart';
		});
		
		$('.table').dataTable();
	});
</script>

<script type="text/javascript">
        function waktu(){
            var date = new Date();
            var tanggal = date.getDate();
            tanggal = tanggal < 10 ? "0" + tanggal : tanggal;
            var tahun = date.getFullYear();
            var jam = date.getHours();
            jam = jam < 10 ? "0" + jam : jam;
            var menit = date.getMinutes();
            menit = menit < 10 ? "0" + menit : menit;
            var detik = date.getSeconds();
            detik = detik < 10 ? "0" + detik : detik;

            var display = "<input type='hidden' value='";
            display+=tahun+"-"+date.getMonth()+"-"+tanggal+"'";
            display+="name='time_vote'/>";
            window.document.getElementById("display").innerHTML=display;
            setTimeout("waktu();",1000);
        }
        waktu();
    </script>
