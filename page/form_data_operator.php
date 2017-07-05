<?php if(isset($_GET['id'])){ ?>
	<div class="table-container">
		<div class="form-kelurahan">
			<div class="form-caption-header">Edit data operator kelurahan</div>
			<?php 
			if(isset($_GET['error'])){
				switch ($_GET['error']) {
					case 2:
					echo '<div class="error"><i>Luas Wilayah tidak boleh kosong.</i></div>';
					break;
					case 3:
					echo '<div class="error"><i>Jumlah Penduduk tidak boleh kosong.</i></div>';
					break;
				}
			}
			include "config/koneksi.php";
			$id = htmlspecialchars($_GET['id']);
			
			$sql = "select * from tb_user where id_user = '".$id."'";
			$result = mysqli_query($link, $sql);
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				?>
				<form action="proses/update_data_operator.php" method="post">
					<div class="form-group">
						<label class="form-caption">Nama Operator *</label>
						<input type="text" class="form-control" name="nama_operator" autocomplete="false" value="<?= $row['nama']?>">
					</div>
					<div class="form-group">
						<label class="form-caption">Username *</label>
						<input type="txt" class="form-control" name="username" autocomplete="false" value="<?= $row['username']?>">
					</div>
					<div class="form-group">
						<label class="form-caption">Password *</label>
						<input type="password" class="form-control" name="password" autocomplete="false" value="<?= $row['password']?>">
					</div>
					<div class="form-group">
						<label class="form-caption">Keterangan</label>
						<textarea class="form-control" name="keterangan"><?= $row['username']?></textarea>
					</div>
					<div class="form-group">
						<label class="form-caption">&nbsp;</label>
						<div class="form-control">
							<input type="hidden" name="id_user" value="<?= $row['id_user']?>">
							<a href="?page=data_kelurahan" class="btn btn-danger">Batal</a>
							<button type="submit" class="btn btn-success">Simpan</button>
						</div>
					</div>
				</form>
				<?php } ?>
			</div>
		</div>
		<?php
	}else{
		?>
		<div class="table-container">
			<div class="form-kelurahan">
				<div class="form-caption-header">Tambah data operator kelurahan</div>
				<?php 
				if(isset($_GET['error'])){
					switch ($_GET['error']) {
						case 2:
						echo '<div class="error"><i>Luas Wilayah tidak boleh kosong.</i></div>';
						break;
						case 3:
						echo '<div class="error"><i>Jumlah Penduduk tidak boleh kosong.</i></div>';
						break;
					}
				}
				?>

				<form action="proses/simpan_operator.php" method="post">
					<div class="form-group">
						<label class="form-caption">Nama Operator *</label>
						<input type="text" class="form-control" name="nama_operator" autocomplete="false">
					</div>
					<div class="form-group">
						<label class="form-caption">Username *</label>
						<input type="txt" class="form-control" name="username" autocomplete="false">
					</div>
					<div class="form-group">
						<label class="form-caption">Password *</label>
						<input type="password" class="form-control" name="password" autocomplete="false">
					</div>
					<div class="form-group">
						<label class="form-caption">Keterangan</label>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
					<div class="form-group">
						<label class="form-caption">&nbsp;</label>
						<div class="form-control">
							<a href="?page=data_kelurahan" class="btn btn-danger">Batal</a>
							<button type="submit" class="btn btn-success">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php 
	} 
	?>