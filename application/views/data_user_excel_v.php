<?php
	header('Content-type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename="Data Mahasiswa.xls"');
?>
		<table class="table table-responsive">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>PK</th>
					<th>Password</th>
					<th>Priviledge</th>
					
				</tr>
			</thead>
            <tbody>
				
				<?PHP
					$query = $this->manipulasi_user_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td><?PHP echo $row->nim; ?></td>
					<td><?PHP echo $row->nama; ?></td>
					<td><?PHP echo $row->pk; ?></td>
					<td><?PHP echo $row->password; ?></td>
					<td><?PHP echo $row->priviledge; ?></td>
					
				</tr>
                 <?php endforeach;?>
			</tbody>
        </table>
       