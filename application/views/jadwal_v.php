<?PHP
	session_start();
	if($this->session->userdata('username')){
		if($this->session->userdata('status')==1 or $this->session->userdata('status')==0){
	$this->load->view('header_vv');
?>

<div class="container">
	
	<div class="panel panel-default">
        
        <?PHP
			if($this->session->userdata('username') and $this->session->userdata('status')==0)
			{
		?>
        
    	<div class="panel-heading">
        	<div class="pull-left">
            	<h3 class="panel-title">Data Jadwal PEMIRA</h3>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <?PHP
			}
		?>
		
        <table class="table table-responsive">
			<thead>
				<tr>
					<th>Tanggal Mulai</th>
					<th>Tanggal Akhir</th>
					
					<?PHP
						if($this->session->userdata('username') and $this->session->userdata('status')==0)
						{
					?>
					
					<th>Modifikasi</th>
					
					<?PHP
						}
					?>
					
				</tr>
			</thead>
            <tbody>
				
				<?PHP
					//$this->load->model('manipulasi_pk_m');
					$query = $this->jadwal_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->tgl_mulai; ?>
						<input type="hidden" id="mulai_<?PHP echo $row->tgl_mulai; ?>" value="<?PHP echo $row->tgl_mulai; ?>">
						
					</td>
					<td>
						<?PHP echo $row->tgl_akhir; ?>
						<input type="hidden" id="akhir_<?PHP echo $row->tgl_mulai; ?>" value="<?PHP echo $row->tgl_akhir; ?>">
					</td>
					<?PHP
						if($this->session->userdata('username') and $this->session->userdata('status')==0)
						{
					?>
					
					<td>
						<button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_program_keahlian" id="edit_<?PHP echo $row->tgl_mulai; ?>">
							<i class="glyphicon glyphicon-edit"></i> Ubah
						</button>
					</td>
					
					<?PHP
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
            	<h4 class="modal-title">Form Jadwal PEMIRA</h4>
            </div>
            <div class="modal-body">
            	<?PHP
					$sql = $this->jadwal_m->view();
					
					foreach($sql->result() as $baris) :
				?>
            	<form method="post" id="form_program_keahlian" style="text-align:left;">
                	<div class="form-group">
                    	<label>Tanggal Mulai</label>
                        <input type="text" class="form-control" name="tgl_mulai" id="tgl_mulai" placeholder="<?PHP echo $baris->tgl_mulai; ?>" required>
                    </div>
                    <div class="form-group">
                    	<label>Tanggal Akhir</label>
                        <input type="text" class="form-control" name="tgl_akhir" id="tgl_akhir" placeholder="<?PHP echo $baris->tgl_akhir; ?>" required>
                    </div>
                </form>
                <?PHP
					endforeach;
				?>
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
			$('#tgl_mulai').val('');
			$('#tgl_akhir').val('');
			
			//$('#kode_pk').attr('disabled', false);
			
			$('#save').show();
			$('#update').hide();
			
			$('#form_program_keahlian').attr('action', '<?PHP echo site_url(); ?>Jadwal/insert');
		});
		
		$('.edit').click(function() {
			var id = this.id.substr(5);
			
			$('#tgl_mulai').val($('#mulai_' + id).val());
			$('#tgl_akhir').val($('#akhir_' + id).val());
			
			
			$('#save').hide();
			$('#update').show();
			
			$('#form_program_keahlian').attr('action', '<?PHP echo site_url(); ?>jadwal/update');
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