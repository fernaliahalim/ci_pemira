	<center><h1 style="text-align:center;margin:10px;">Perhitungan Suara PEMIRA 2014</h1></center>
	<center><h3 style="text-align:center;margin:10px;">Program Keahlian Teknik Komputer</h3></center>
	<br/>
	<br/>
	<br/>
	<br/>
	<body>
		<table border= "1" cellpadding="10px">
			<thead>
			<tr style="background-color:#CCCCCC; text-align:center;">
				<th>PK</th>
				<th>Jumlah Suara</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$query = $this->hasil_m->vote_tek();
				foreach($query->result() as $row) :
			?>
				<tr>
					<td>
						TEK
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
