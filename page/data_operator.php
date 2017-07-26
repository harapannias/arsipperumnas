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
		<table class="table table-striped" width="">
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
			if ($result = mysqli_query($link, $sql)) {
				if(mysqli_num_rows($result) > 0){
					$no = 1; 
					while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $row['kode_operator']?></td>
							<td><?= $row['nama']?></td>
							<td><?= $row['username']?></td>
							<td><?= $row['level']?></td>
							<td><?= $row['status']?></td>
							<td>
								<a href="?page=edit_operator&id=<?= $row['id_user']?>" class="btn btn-success btn-xs">Edit</a>
							</td>
						</tr>
						<?php
						$no++;
					}
				}else{
					?>
					<tr>
						<td colspan="6">Tidak ada data</td>
					</tr>
					<?php
				}
			}else{
				echo "Terjadi kelasalahan saat mengambil data kelurahan di database. " . mysqli_error($link);
			}
			mysqli_close($link);
			?>

		</table>
	</div>
</div>