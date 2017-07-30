<div class="table-responsiv">
	<h2>Data Operator
		<hr>
	</h2>
	<ul class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li>Data Operator</li>
	</ul>

	<p>&nbsp;</p>
	<h4>Berikut daftar operator yang telah terdaftar</h4>
	<p>&nbsp;</p>
	<div style="overflow-x: auto;">
		<table class="table table-striped table-hover" width="">
			<tr>
				<th width="5%">No.</th>
				<th>Kode Operator</th>
				<th>Nama Lengkap</th>
				<th>Username</th>
				<th>Level</th>
				<th>Status</th>
				<th width="15%">Action</th>
			</tr>
			<?php
			include "config/koneksi.php";
			$sql = "select * from tp_user";
			$data = execSelectQuery($sql);
			if(count($data) > 0) {
				foreach ($data as $i => $row) {
					?>
					<tr>
						<td><?= ($i +1) ?></td>
						<td><?= $row['kode_operator']?></td>
						<td><?= $row['nama']?></td>
						<td><?= $row['username']?></td>
						<td><?= getLevelOperator($row['level'])?></td>
						<td><?= getStatus($row['status'])?></td>
						<td>
							<a href="?page=edit_operator&id=<?= $row['id_user']?>" class="btn btn-success btn-xs"> Edit </a>
						</td>
					</tr>
					<?php
				}
			}else{
				?>
				<tr>
					<td colspan="7" class="text-center">Tidak ada data</td>
				</tr>
				<?php
			}
			mysqli_close($link);
			?>
		</table>
	</div>
</div>