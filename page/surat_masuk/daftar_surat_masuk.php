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
				<th style="vertical-align: middle;" width="5%">No.</th>
				<th style="vertical-align: middle;">Nomor Urut</th>
				<th style="vertical-align: middle;" width="15%">Nomor Berkas</th>
				<th style="vertical-align: middle;" width="15%">Pengirim</th>
				<th style="vertical-align: middle;">Tanggal Masuk</th>
				<th style="vertical-align: middle;">Nomor Surat Masuk</th>
				<th style="vertical-align: middle;">Jenis Surat</th>
				<th style="vertical-align: middle;">Perihal</th>
				<th style="vertical-align: middle;" class="text-center" width="5%">Disposisi</th>
				<th style="vertical-align: middle;" class="text-center" width="5%">Preview Berkas</th>
				<th style="vertical-align: middle;" class="text-center" width="5%">Action</th>
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
						<td><div style="width: 80px" class="text-center"><?= $row['nomor_urut']?></div></td>
						<td><div style="width: 120px" class="text-center"><?= $row['nomor_berkas']?></div></td>
						<td><div style="width: 200px" class="text-left"><?= $row['pengirim']?></div></td>
						<td><div style="width: 100px" class="text-left"><?= date('d-m-Y', strtotime($row['tanggal_masuk'])) ?></div></td>
						<td><div style="width: 100px" class="text-left"><?= $row['nomor_surat_masuk']?></div></td>
						<td><div style="width: 100px" class="text-left"><?= getJenisSurat($row['id_jenis_surat'])?></div></td>
						<td><div style="width: 300px" class="text-left"><?= $row['perihal']?></div></td>
						<td><div style="width: 80px" class="text-center"><?= getDisposisi($row['disposisi'])?></div></td>
						<td><div style="width: 150px" class="text-center">Preview</div></td>
						<td class="text-center">
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
		<div class="col-md-4" style="margin-top: 40px;">Menampilkan <?=count($data)?> Dari <?=count($data)?> surat</div>
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