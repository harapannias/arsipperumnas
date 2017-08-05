<div class="table-responsiv">
	<h2>Daftar Arsip Surat Masuk<hr></h2>

	<ul class="breadcrumb">
		<li><a href="?page=home">Home</a></li>
		<li>Arsip Surat Masuk</li>
	</ul>

	<p>&nbsp;</p>
	<h4>Berikut daftar surat masuk yang sudah masuk kedalam sistem</h4>
	<p>&nbsp;</p>
	<form class="form-horizontal" role="form">
		<div class="form-group">
			<label class="col-sm-2" for="email">Nomor Surat</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" required="true" name="nomor_urut" placeholder="Nomor Surat">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2" for="pwd">Jenis Surat</label>
			<div class="col-sm-3">          
				<select class="form-control" required="true" name="jenis_surat">
					<option value="">-Pilih-</option>
					<?php foreach (execSelectQuery("select * from tr_jenis_surat order by id_jenis_surat asc") as $i => $row) { ?>
					<option value="<?= $row['id_jenis_surat']?>"><?= $row['jenis']?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success">Filter Surat</button>
			</div>
		</div>
	</form>
	<p>&nbsp;</p>
	<div style="overflow-x: auto;">
		<table class="table table-striped table-hover" width="">
			<tr>
				<th width="5%">No.</th>
				<th>Nomor Urut</th>
				<th width="15%">Nomor Berkas</th>
				<th width="15%">Pengirim</th>
				<th>Tanggal Masuk</th>
				<th>Nomor Surat Masuk</th>
				<th>Jenis Surat</th>
				<th>Perihal</th>
				<th width="5%">Disposisi</th>
				<th width="5%">Preview Berkas</th>
				<th width="5%">Action</th>
			</tr>
			<?php
			include "config/koneksi.php";
			$sql = "select * from tp_arsip_surat_masuk";
			$data = execSelectQuery($sql);

			if (count($data) > 0) {
				foreach ($data as $i => $row) {
					?>
					<tr>
						<td><?= ($i + 1) ?>.</td>
						<td><?= $row['nomor_urut']?></td>
						<td><?= $row['nomor_berkas']?></td>
						<td><?= $row['pengirim']?></td>
						<td><?= date('d-m-Y', strtotime($row['tanggal_masuk'])) ?></td>
						<td><?= $row['nomor_surat_masuk']?></td>
						<td><?= $row['id_jenis_surat']?></td>
						<td><?= $row['perihal']?></td>
						<td align="center"><?= $row['disposisi']?></td>
						<td>Preview</td>
						<td>
							<a href="?page=form_suratmasuk&id=<?= $row['id_arsip_surat_masuk']?>" class="btn btn-success btn-xs">Edit</a>
						</td>
					</tr>
					<?php
				}
			}else{
				?>
				<tr>
					<td colspan="11" class="text-center">Tidak ada data</td>
				</tr>
				<?php
			}
			mysqli_close($link);
			?>

		</table>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4" style="margin-top: 40px;">Menampilkan 5 Dari 15 surat</div>
		<div class="col-md-8" align="right">
			<ul class="pagination">
				<li><a href="#">Previous</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">Next</a></li>
			</ul>
		</div>
	</div>
</div>