<div class="table-responsiv">
	<h2>Data Operator
  <hr>
	</h2>
  <p align="right"><font color="blue">Home</font> > Data Operator</p>
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
			<th>status</th>
			<th width="15%">Action</th>
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
            <td><?= $row['kode_operator']?></td>
						<td><?= $row['nama']?></td>
						<td><?= $row['username']?></td>
						<td><?= $row['status']?></td>
						<td>
							<a href="?pageb=tambah_operator&id=<?= $row['kode_operator']?>" class="btn btn-success btn-xs">Edit</a>
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