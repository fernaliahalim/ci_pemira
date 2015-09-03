	<center><h1 style="text-align:center;margin:10px;">Perhitungan Suara PEMIRA 2014</h1></center>
	<br/>
	<br/>
	<br/>
	<br/>
	<body>
		<table border= "1" cellpadding="10px">
			<thead>
			<tr style="background-color:#CCCCCC; text-align:center;">
				<th>CABEM & CAWABEM</th>
				<th>Jumlah Suara</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$query = $this->hasil_m->lihat_vote();
				foreach($query->result() as $row) :
			?>
				<tr>
					<td>
						<?php echo $row->nama_cabem;?> 
						& 
						<?php echo $row->nama_cawabem;?> 	
					</td>
					<td>
						<?php echo $row->jumlah;?>	
					</td>
				</tr>
			<?php
			endforeach;
			?>
			</tbody>
		</table>
	</body>
