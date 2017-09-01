<?php

if(isset($_GET['token'])) {
	$id_user = buka(e($_GET['token']));
	$rows = execSelectQuery("select * from tp_user where id_user = '".$id_user."' limit 0,1");
	$row = array_shift($rows);
	?>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Profil "<?= $row['nama'] ?>"</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<?php 
				//dd($id_user); 
				?>
				<div class="col-lg-3 text-center">
					<img src="<?= getAvatar($row['avatar']) ?>" class="img img-circle" style="opacity: 1; width: 200px; height: 200px; border: 2px solid #ccc;">
					<!-- <p></p>
					<a href="#" class="btn btn-success btn-xs">Upload</a> -->
				</div>
				<div class="col-lg-9">
					<table class="table">
						<thead>
							<tr>
								<td style="width: 200px;">Nama:</td>
								<td><?= $row['nama']?></td>
							</tr>
							<tr>
								<td>Tanggal Lahir:</td>
								<td><?= empty($row['tanggal_lahir']) ? '' : date('d-m-Y', strtotime($row['tanggal_lahir'])) ?></td>
							</tr>
							<tr>
								<td>Jenis Kelamin:</td>
								<td><?= getJenisKelamin($row['jenis_kelamin']) ?></td>
							</tr>
							<tr>
								<td>Bidang Pekerjaan:</td>
								<td><?= $row['bidang_pekerjaan']?></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Alamat:</td>
								<td><?= $row['alamat'] ?></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td><?= $row['email'] ?></td>
							</tr>
							<tr>
								<td>Nomor HP</td>
								<td><?= $row['nomor_hp'] ?></td>
							</tr>
							<tr>
								<td>Tanggal tardaftar:</td>
								<td><?= date('d-m-Y H:i:s', strtotime($row['wk_rekam'])) ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<a href="index.php?page=edit_profil&token=<?= kunci($row['id_user']) ?>" class="btn btn-success btn-md pull-right">Edit profil</a>
			<a href="index.php?page=home" class="btn btn-primary">Kembali ke home</a>
		</div>
	</div>
	<?php
}