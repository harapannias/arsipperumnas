<div class="isi-container">
	<h2>Data Operator Kelurahan
		<hr>
	</h2>
	<p style="text-align: right;">
		<a href="?page=tambah_data_operator" class="btn btn-success">Tambah Operator</a>
	</p>
	<table class="table-hover">
		<tr>
			<th width="20px">No.</th>
			<th>Nama Operator</th>
			<th>Username</th>
			<th>Tgl Diangkat</th>
			<th width="90px">Action</th>
		</tr>
		<?php
		include "config/koneksi.php";
		$sql = "select * from tb_user";
		if ($result = mysqli_query($link, $sql)) {
			if(mysqli_num_rows($result) > 0){
				$no = 1; 
				while ($row = mysqli_fetch_assoc($result)) {
					?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $row['nama']?></td>
						<td><?= $row['username']?></td>
						<td><?= $row['wk_rekam']?></td>
						<td>
							<a href="?page=edit_data_operator&id=<?= $row['id_user']?>" class="btn btn-success btn-xs">Edit</a>
							<a href="?page=hapus_data_operator&id=<?= $row['id_user']?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin menghapus data?')">Hapus</a>
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