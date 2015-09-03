<?PHP
	session_start();
	$tgl = $this->session->userdata('waktu_vote');
	if($this->session->userdata('username')){
		if($this->session->userdata('status')==1 or $this->session->userdata('status')==0){
	$this->load->view('header_vv');
?>

<div class="container">
	
	<div class="panel panel-default">
        
        <?PHP
			if($this->session->userdata('username'))
			{
		?>
        
    	<div class="panel-heading">
        	<div class="pull-left">
            	<h3 class="panel-title">Data Program Keahlian</h3>
            </div>
            <div class="pull-right">
            	<?PHP
            	if($this->session->userdata('username') AND ($this->session->userdata('time_vote')==0)){
            		if($tgl<=0){
                ?>
                <button class="btn btn-primary btn-sm add" title="Tambah" data-toggle="modal" data-target="#modal_program_keahlian">
                    <i class="glyphicon glyphicon-plus"></i> Tambah
                </button>
                <button class="btn btn-danger btn-sm delete_all" title="Hapus Semua" data-toggle="modal" data-target="#modal_konfirmasi">
                    <i class="glyphicon glyphicon-trash"></i> Hapus Semua
                </button>
                <?PHP
	                }
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
					<th>Kode Program Keahlian</th>
					<th>Simbol Program Keahlian</th>
					<th>Nama Program Keahlian</th>
					
					<?PHP
						if($this->session->userdata('username') AND ($this->session->userdata('time_vote')==0))
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
					//$this->load->model('manipulasi_pk_m');
					$query = $this->manipulasi_pk_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->kode_pk; ?>
						<input type="hidden" id="nama_<?PHP echo $row->kode_pk; ?>" value="<?PHP echo $row->simbol_pk; ?>">
						<input type="hidden" id="pk_<?PHP echo $row->kode_pk; ?>" value="<?PHP echo $row->nama_pk; ?>">
					</td>
					<td><?PHP echo $row->simbol_pk; ?></td>
					<td><?PHP echo $row->nama_pk; ?></td>
					
					<?PHP
						if($this->session->userdata('username') AND ($this->session->userdata('time_vote')==0))
						{
							if($tgl<=0){
					?>
					
					<td>
						<button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_program_keahlian" id="edit_<?PHP echo $row->kode_pk; ?>">
							<i class="glyphicon glyphicon-edit"></i> Ubah
						</button>
						<button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="delete_<?PHP echo $row->kode_pk; ?>">
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
            	<form method="post" id="form_program_keahlian" style="text-align:left;">
                	<div class="form-group">
                    	<label>Kode Program Keahlian</label>
                        <input type="text" class="form-control" name="kode_pk" id="kode_pk" placeholder="Kode Program Keahlian" required>
						<input type="hidden" name="kode_pk_tmp" id="kode_pk_tmp">
                    </div>
                    <div class="form-group">
                    	<label>Simbol Program Keahlian</label>
                        <input type="text" class="form-control" name="simbol_pk" id="simbol_pk" placeholder="Simbol Program Keahlian" required>
                    </div>
					<div class="form-group">
                    	<label>Nama Program Keahlian</label>
                        <input type="text" class="form-control" name="nama_pk" id="nama_pk" placeholder="Nama Program Keahlian" required>
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

<?PHP
    $this->load->view('footer_vv');
	}
}
?>


<script type="text/javascript">
	$(document).ready(function() {
		$('.add').click(function() {
			$('#kode_pk').val('');
			$('#simbol_pk').val('');
			$('#nama_pk').val('');
			
			
			$('#kode_pk').attr('disabled', false);
			
			$('#save').show();
			$('#update').hide();
			
			$('#form_program_keahlian').attr('action', '<?PHP echo site_url(); ?>manipulasi_pk/insert');
		});
		
		$('.edit').click(function() {
			var id = this.id.substr(5);
			
			$('#kode_pk').val(id);
			$('#kode_pk_tmp').val(id);
			$('#simbol_pk').val($('#nama_' + id).val());
			$('#nama_pk').val($('#pk_' + id).val());
			
			$('#kode_pk_tmp').attr('disabled', true);
			
			$('#save').hide();
			$('#update').show();
			
			$('#form_program_keahlian').attr('action', '<?PHP echo site_url(); ?>manipulasi_pk/update');
		});
		
		$('.delete').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus data ?');
			
			$('#delete').show();
			$('#delete_all').hide();
			
			var id = this.id.substr(7);
			
			$('#kode_pk').val(id);
		});
		
		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');
			
			$('#delete').hide();
			$('#delete_all').show();
		});
		
		$('#delete').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_pk/delete/' + $('#kode_pk').val();
		});
		
		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_pk/delete_all';
		});
		
		$('.table').dataTable();
	});
</script>