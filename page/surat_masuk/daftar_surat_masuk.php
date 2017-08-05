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
			<div class="col-sm-2">
				<input type="text" class="form-control" required="true" name="nomor_urut" placeholder="ASM001">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2" for="pwd">Jenis Surat</label>
			<div class="col-sm-3">          
            <select class="form-control" required="true" name="jenis_surat">
              <option class="form-control" required="true">Memo Dinas</option>
              <option class="form-control" required="true">Laporan Absensi</option>
              <option class="form-control" required="true">Pengajuan Diklat</option>
              <option class="form-control" required="true">Ajuan Uang Makan</option>
              <option class="form-control" required="true">Transportasi dan Gaji</option>
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
		<table class="table table-striped" width="">
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
			$sql = "select * from arsip_suratmasuk";
			if ($result = mysqli_query($link, $sql)) {
				if(mysqli_num_rows($result) > 0){
					$no = 1; 
					while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $row['nmr_urut']?></td>
							<td><?= $row['nomorberkas']?></td>
							<td><?= $row['pengirim']?></td>
							<td><?= $row['tglmasuk']?></td>
							<td><?= $row['nmrsurat']?></td>
							<td><?= $row['jenissurat']?></td>
							<td><?= $row['perihal']?></td>
							<td align="center"><?= $row['disposisi']?></td>
							<td>Preview</td>
							<td>
								<a href="?page=form_suratmasuk&id=<?= $row['nmr_urut']?>" class="btn btn-success btn-xs">Edit</a>
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