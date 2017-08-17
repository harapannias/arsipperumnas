<div class="table-responsiv">
	<h2>Jenis Surat keluar<hr></h2>
	<ul class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li>Jenis Surat Keluar</li>
	</ul>

	<p>&nbsp;</p>
	<h4>Berikut daftar jenis surat keluar yang telah terdaftar dalam sistem.</h4>
	<p>&nbsp;</p>
	<div class="text-right">
	<a href="?page=tambah_jenis_surat_keluar" class="btn btn-primary btn-md">Tambah Jenis Surat Keluar</a>
	</div>
	<br>
	<div style="overflow-x: auto;">
		<table class="table table-striped table-hover" width="">
			<tr>
				<th width="5%">No.</th>
				<th>Jenis Surat</th>
				<th>Keterangan</th>
				<th>Status</th>
				<th width="15%">Action</th>
			</tr>
			<?php
			include "config/koneksi.php";
			$sql = "select * from tr_jenis_surat";
			$data = execSelectQuery($sql);
			if(count($data) > 0) {
				foreach ($data as $i => $row) {
					?>
					<tr>
						<td><?= ($i +1) ?>.</td>
						<td><?= $row['jenis']?></td>
						<td><?= empty($row['keterangan']) ? '-' : $row['keterangan']?></td>
						<td><?= getStatus($row['status'])?></td>
						<td>
							<a href="?page=edit_operator&id=<?= $row['id_jenis_surat']?>" class="btn btn-success btn-xs"> Edit </a>
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