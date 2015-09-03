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
            	<h3 class="panel-title">Data <I>Voting</I></h3>
            </div>
            <div class="pull-right">
            	<?PHP
            		if($this->session->userdata('time_vote')==0 and $tgl<=0){
            	?>
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
					<th>ID Vote</th>
					<th>Time Vote</th>
					<th>NIM</th>
					<th>ID Calon</th>
					
				</tr>
			</thead>
            <tbody>
				
				<?PHP
					//$this->load->model('manipulasi_vote_m');
					$query = $this->manipulasi_vote_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->id_vote; ?>
						<input type="hidden" id="nama_<?PHP echo $row->id_vote; ?>" value="<?PHP echo $row->time_vote; ?>">
						<input type="hidden" id="pk_<?PHP echo $row->id_vote; ?>" value="<?PHP echo $row->nim; ?>">
						<input type="hidden" id="password_<?PHP echo $row->id_vote; ?>" value="<?PHP echo $row->id_calon; ?>">
					</td>
					<td><?PHP echo $row->time_vote; ?></td>
					<td><?PHP echo $row->nim; ?></td>
					<td><?PHP echo $row->id_calon; ?></td>

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
            	<h4 class="modal-title">Form Voting</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_program_keahlian" style="text-align:left;">
                	<div class="form-group">
                    	<label>ID Vote</label>
                        <input type="text" class="form-control" name="id_vote" id="id_vote" placeholder="ID Vote" required>
						<input type="hidden" name="id_vote_tmp" id="id_vote_tmp">
                    </div>
                    <div class="form-group">
                    	<label>Time Vote</label>
                        <input type="text" class="form-control" name="time_vote" id="time_vote" placeholder="Time Vote" required>
                    </div>
					<div class="form-group">
                    	<label>NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM" required>
                    </div>
					<div class="form-group">
                    	<label>ID Calon</label>
                        <input type="text" class="form-control" name="id_calon" id="id_calon" placeholder="ID Calon" required>
                    </div>
                </form>
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
		
		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');
			
			//$('#delete').hide();
			$('#delete_all').show();
		});

		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_vote/delete_all';
		});
		
		$('.table').dataTable();
	});
</script>