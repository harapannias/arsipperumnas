<?php

if(isset($_GET['token'])) {
	$id_user = buka(e($_GET['token']));
	$rows = execSelectQuery("select * from tp_user where id_user = '".$id_user."' limit 0,1");
	$row = array_shift($rows);
	?>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Profil "<?= getAuth('id_user')['nama'] ?>"</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-3 text-center">
					<form id="frmUploadAvatar" action="index.php?page=simpan_profil&ref=update_profil" method="post" enctype="multipart/form-data">
						<img src="<?= getAvatar($row['avatar']) ?>" class="img img-circle" style="opacity: 1; width: 200px; height: 200px; border: 2px solid #ccc;">
						<p></p>
						<input type="text" name="nama" class="form-control text-center" disabled value="<?= $row['avatar'] ?>" placeholder="Avatar">
						<p></p>
						<a href="#" class="btn btn-success btn-xs" onclick="event.preventDefault(); $('#avatarPicker').click()">Ganti foto</a>
						<input type="file" name="fileToUpload" id="avatarPicker" style="display: none">
						<input type="hidden" name="avatarPost" value="true" style="display: none">
						<input type="hidden" name="idUserOld" value="<?= $row['id_user'] ?>" style="display: none">
					</form>
				</div>
				<div class="col-lg-9">
					<form action="index.php?page=simpan_profil&ref=edit" method="post">
						<table class="table">
							<thead>
								<tr>
									<td style="width: 200px;">Nama:</td>
									<td>
										<div class="col-lg-6">
											<input type="text" name="nama" class="form-control" value="<?= $row['nama']?>">
										</div>
									</td>
								</tr>
								<tr>
									<td>Tanggal Lahir:</td>
									<td>
										<div class="col-lg-6">
											<input type="text" name="tanggal_lahir" class="form-control datepicker" value="<?= empty($row['tanggal_lahir']) ? '' : date('d-m-Y', strtotime($row['tanggal_lahir'])) ?>" placeholder="Tanggal Lahir">
										</div>
									</td>
								</tr>
								<tr>
									<td>Jenis Kelamin:</td>
									<td>
										<div class="col-lg-6">
											<select name="jenis_kelamin" class="form-control">
												<option value="">-Pilih-</option>
												<option value="L" <?= setSelectedItem('L', $row['jenis_kelamin']) ?>>Laki-laki</option>
												<option value="P" <?= setSelectedItem('P', $row['jenis_kelamin']) ?>>Perempuan</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td>Bidang Pekerjaan:</td>
									<td>
										<div class="col-lg-6">
											<input type="text" name="bidang_pekerjaan" class="form-control" value="<?= $row['bidang_pekerjaan'] ?>" placeholder="Bidang Pekerjaan">
										</div>
									</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Alamat:</td>
									<td>
										<div class="col-lg-10">
											<input type="text" name="alamat" class="form-control" value="<?= $row['alamat'] ?>" placeholder="Alamat">
										</div>
									</td>
								</tr>
								<tr>
									<td>Email:</td>
									<td>
										<div class="col-lg-6">
											<input type="text" name="email" class="form-control" value="<?= $row['email'] ?>" placeholder="Email">
										</div>
									</td>
								</tr>
								<tr>
									<td>Nomor HP</td>
									<td>
										<div class="col-lg-6">
											<input type="text" name="nomor_hp" class="form-control" value="<?= $row['nomor_hp'] ?>" placeholder="Nomor Hp">
										</div>
									</td>
								</tr>
								<tr>
									<td>Tanggal tardaftar:</td>
									<td>
										<div class="col-lg-6">
											<?= date('d-m-Y H:i:s', strtotime($row['wk_rekam'])) ?>
										</div>
									</td>
								</tr>
								<tr>
									<td></td>
									<td>
										<div class="col-lg-6">
											<input type="hidden" name="idUserOld" value="<?= $row['id_user'] ?>" style="display: none">
											<button class="btn btn-success" type="submit">Simpan profil</button>
											<a href="index.php?page=home" class="btn btn-danger">Kembali</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
}

$_SESSION['edit_profil'] = '
$("#avatarPicker").change(function() {
	$("#frmUploadAvatar").submit();
});';
