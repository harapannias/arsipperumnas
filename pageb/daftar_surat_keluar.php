<div class="container-fluid">
	<h2>Daftar Arsip Surat Keluar
		<hr>
	</h2>
	<p align="right"><font color="blue">Home</font> > Arsip Surat Keluar</p>
	<p>&nbsp;</p>
	<h4>Berikut daftar surat Keluar yang sudah masuk kedalam sistem</h4>
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
				<select class="form-control" name="jenis_surat">
					<option class="form-control" required="true">Belanja Pegawai</option>
					<option class="form-control" required="true">Ajuan Diklat</option>
					<option class="form-control" required="true">Ajuan Mutasi</option>
					<option class="form-control" required="true">Promosi dan Demosi</option>
					<option class="form-control" required="true">Permohonan Pensiun</option>
					<option class="form-control" required="true">Ajuan Kesehatan</option>
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
				<th width="15%">Penerima</th>
				<th>Tanggal Keluar</th>
				<th>Nomor Surat keluar</th>
				<th>Jenis Surat</th>
				<th>Perihal</th>
				<th width="5%">Preview Berkas</th>
				<th width="5%">Action</th>
			</tr>
			<tr>
				<td>1</td>
				<td>ASM002</td>
				<td>120/SU-BP/V/2017</td>
				<td>Berkat Jaya Harefa</td>
				<td>2017-07-18</td>
				<td>01</td>
				<td>Memo Dinas</td>
				<td>Melamar Pekerjaan</td>
				<td>Preview</td>
				<td>
					<a href="?pageb=form_suratmasuk&id=ASM002" class="btn btn-success btn-xs">Edit</a>
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>ASM003</td>
				<td>120/SU-BP/V/2017</td>
				<td>Gido</td>
				<td>2017-07-18</td>
				<td>01</td>
				<td>Memo Dinas</td>
				<td>Melamar Pekerjaan</td>
				<td>Preview</td>
				<td>
					<a href="?pageb=form_suratmasuk&id=ASM003" class="btn btn-success btn-xs">Edit</a>
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td>ASM001</td>
				<td>120/SU-BP/V/2017</td>
				<td>Otoni</td>
				<td>2017-07-18</td>
				<td>01</td>
				<td>Memo Dinas</td>
				<td>Melamar Pekerjaan</td>
				<td>Preview</td>
				<td>
					<a href="?pageb=form_suratmasuk&id=ASM001" class="btn btn-success btn-xs">Edit</a>
				</td>
			</tr>
			<tr>
				<td>4</td>
				<td>ASM004</td>
				<td>120/SU-BP/V/2017</td>
				<td>Barani Harefa</td>
				<td>2017-07-18</td>
				<td>01</td>
				<td>Laporan Absensi</td>
				<td>Melamar Pekerjaan</td>
				<td>Preview</td>
				<td>
					<a href="?pageb=form_suratmasuk&id=ASM004" class="btn btn-success btn-xs">Edit</a>
				</td>
			</tr>
			<tr>
				<td>5</td>
				<td>ASM004</td>
				<td>120/SU-BP/V/2017</td>
				<td>Barani Harefa</td>
				<td>2017-07-18</td>
				<td>01</td>
				<td>Laporan Absensi</td>
				<td>Melamar Pekerjaan</td>
				<td>Preview</td>
				<td>
					<a href="?pageb=form_suratmasuk&id=ASM004" class="btn btn-success btn-xs">Edit</a>
				</td>
			</tr>

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
				