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
            	<h3 class="panel-title">Data Kontak</h3>
            </div>
            <div class="pull-right">
            	<?PHP
					if($this->session->userdata('username') AND ($this->session->userdata('time_vote')==0))
					{
						if($tgl<=0){
				?>
				<button class="btn btn-danger btn-sm delete_all" title="Hapus Semua" data-toggle="modal" data-target="#modal_konfirmasi">
                    <i class="glyphicon glyphicon-trash"></i> Hapus Semua
                </button>
                <?php
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
					<th>Nama</th>
					<th>Email</th>
					<th>Pesan</th>
					
				</tr>
			</thead>
            <tbody>
				
				<?PHP
					//$this->load->model('manipulasi_vote_m');
					$query = $this->manipulasi_kontak_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->nama; ?>
						<input type="hidden" id="nama_<?PHP echo $row->nama; ?>" value="<?PHP echo $row->email; ?>">
						<input type="hidden" id="pk_<?PHP echo $row->nama; ?>" value="<?PHP echo $row->pesan; ?>">
						
					</td>
					<td><?PHP echo $row->email; ?></td>
					<td><?PHP echo $row->pesan; ?></td>
					
				</tr>
				
				<?PHP
					endforeach;
				?>
				
			</tbody>
        </table>
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
			
			$('#delete_all').show();
		});
		
		
		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_kontak/delete_all';
		});
		
		$('.table').dataTable();
	});
</script>