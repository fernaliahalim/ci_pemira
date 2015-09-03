<?PHP
	session_start();
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
            	<h3 class="panel-title">Panel Operator</h3>
            </div>
            <div class="pull-right">
            </div>
            <div class="clearfix"></div>
        </div>
        
        <?PHP
			}
		?>
		        <?PHP
                    if($this->session->userdata('status')==0){
                ?>
                <form action="setting/enable_vote">
                    <button class="btn btn-danger btn-sm " title="Enable Vote">
                        <i class="glyphicon glyphicon-log-in"></i> Enable Vote
                    </button>
                </form>
                <br/>
                <form action="setting/disable_vote">
                    <button class="btn btn-primary btn-sm " title="Disable Vote">
                        <i class="glyphicon glyphicon-log-in"></i> Disable Vote
                    </button>
                </form>
                <?PHP
                    }
                    else{
                ?>
                <form action="setting/enable_vote">
                    <button class="btn btn-danger btn-sm " title="Enable Vote" disabled>
                        <i class="glyphicon glyphicon-log-in"></i> Enable Vote
                    </button>
                </form>
                <br/>
                <form action="setting/disable_vote">
                    <button class="btn btn-primary btn-sm " title="Disable Vote" disabled>
                        <i class="glyphicon glyphicon-log-in"></i> Disable Vote
                    </button>
                </form>
                <?PHP
                    }
                ?>
    </div>
</div>

<?PHP
    $this->load->view('footer_vv');
	}
}
?>
