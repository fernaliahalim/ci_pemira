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
            	<h3 class="panel-title">Data Mahasiswa</h3>
            </div>
            <div class="pull-right">
            	<?PHP
            		if($this->session->userdata('time_vote')==0 and $tgl<=0){
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
                <!--<button class="btn btn-default btn-sm excel" title="Hapus Semua" data-toggle="modal">
                    <i class="glyphicon glyphicon-export"></i> Export Excel
                </button>-->
            </div>
            <div class="clearfix"></div>
        </div>
        
        <?PHP
			}
		?>
		
        <table class="table table-responsive">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>PK</th>
					<th>Password</th>
					<th>Priviledge</th>
					
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
					//$this->load->model('program_keahlian_m');
					$query = $this->manipulasi_user_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->nim; ?>
						<input type="hidden" id="nama_<?PHP echo $row->nim; ?>" value="<?PHP echo $row->nama; ?>">
						<input type="hidden" id="pk_<?PHP echo $row->nim; ?>" value="<?PHP echo $row->pk; ?>">
						<input type="hidden" id="password_<?PHP echo $row->nim; ?>" value="<?PHP echo $row->password; ?>">
						<input type="hidden" id="priviledge_<?PHP echo $row->nim; ?>" value="<?PHP echo $row->priviledge; ?>">
					</td>
					<td><?PHP echo $row->nama; ?></td>
					<td><?PHP echo $row->pk; ?></td>
					<td><?PHP echo $row->password; ?></td>
					<td><?PHP echo $row->priviledge; ?></td>
					
					<?PHP
						if($this->session->userdata('username') AND ($this->session->userdata('time_vote')==0))
						{
							if($tgl<=0){
					?>
					
					<td>
						<button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_program_keahlian" id="edit_<?PHP echo $row->nim; ?>">
							<i class="glyphicon glyphicon-edit"></i> Ubah
						</button>
						<button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="delete_<?PHP echo $row->nim; ?>">
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
            	<h4 class="modal-title">Form Mahasiswa</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_program_keahlian" style="text-align:left;">
                	<div class="form-group">
                    	<label>NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM" required>
						<input type="hidden" name="nim_tmp" id="nim_tmp">
                    </div>
                    <div class="form-group">
                    	<label>Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                    </div>
					<!--<div class="form-group">
                    	<label>Program Keahlian</label>
                    	<select class="form-control" name="pk" id="pk" placeholder="Program Keahlian" width="600px" maxlength="50">
                    	<option value="">---Pilih Program Keahlian---</option>
                    	<?PHP
                    		//$query = $this->manipulasi_pk_m->view();

                    		//foreach($query->result() as $row) :
                    	?>
                    		<option value="<?php //echo $row->kode_pk ?>"><?php e//cho $row->nama_pk ?></option>
                    	<?PHP
                    		//endforeach;
                    	?>
                    	</select>-->
                        <!--<input type="text" class="form-control" name="pk" id="pk" placeholder="Program Keahlian" required>-->
                    <!--</div>-->
					<div class="form-group">
                    	<label id="lbl_id">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
					<div class="form-group">
                    	<label>Priviledge</label>
                        <input type="text" class="form-control" name="priviledge" id="priviledge" placeholder="Priviledge" required>
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
			$('#nim').val('');
			$('#nama').val('');
			//$('#pk').val('');
			//$('#password').val('');
			$('#priviledge').val('');
			
			$('#nim').attr('disabled', false);
			
			$('#save').show();
			$('#update').hide();

			$('#password').hide();
			$('#lbl_id').hide();
			
			$('#form_program_keahlian').attr('action', '<?PHP echo site_url(); ?>manipulasi_user/insert');
		});
		
		$('.edit').click(function() {
			var id = this.id.substr(5);
			
			$('#nim').val(id);
			$('#nim_tmp').val(id);
			$('#nama').val($('#nama_' + id).val());
			$('#pk').val($('#pk_' + id).val());
			//$('#password').val($('#password_' + id).val());
			$('#priviledge').val($('#priviledge_' + id).val());
			
			$('#nim_tmp').attr('disabled', true);
			
			$('#save').hide();
			$('#update').show();
			
			$('#form_program_keahlian').attr('action', '<?PHP echo site_url(); ?>manipulasi_user/update');
		});
		
		$('.delete').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus data ?');
			
			$('#delete').show();
			$('#delete_all').hide();
			
			var id = this.id.substr(7);
			
			$('#nim').val(id);
		});
		
		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');
			
			$('#delete').hide();
			$('#delete_all').show();
		});
		
		$('#delete').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_user/delete/' + $('#nim').val();
		});
		
		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_user/delete_all';
		});

		$('#excel').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_user/excel';
		});
		
		$('.table').dataTable();
	});
</script>