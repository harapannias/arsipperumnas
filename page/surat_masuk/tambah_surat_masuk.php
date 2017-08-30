<?php
include "config/koneksi.php";
?>

<div class="container-fluid">
  <h2>Tambah Arsip Surat Masuk<hr></h2>

  <ul class="breadcrumb">
    <li><a href="?page=home">Home</a></li>
    <li><a href="?page=daftar_surat_masuk">Arsip Surat Masuk</a></li>
    <li>Tambah Arsip</li>
  </ul>

  <p>&nbsp;</p>
  <h4>Silahkan isi form berikut untuk menambah arsip surat masuk</h4>
  <p>&nbsp;</p>

  <form class="form-horizontal" role="form" action="index.php?page=simpan_surat_masuk&ref=tambah" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
      <label class="col-sm-2" for="nomor_urut">Nomor Urut</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" required="true" name="nomor_urut" id="nomor_urut" placeholder="Nomor Urut">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2" for="nomor_berkas">Nomor Berkas</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" required="true" name="nomor_berkas" id="nomor_berkas" placeholder="Nomor Berkas">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2" for="pengirim">Pengirim</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" required="true" name="pengirim" id="pengirim" placeholder="Pengirim">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2" for="tanggal_masuk">Tanggal Masuk</label>
      <div class="col-sm-3">          
        <input type="text" class="form-control datepicker" name="tanggal_masuk" id="tanggal_masuk" placeholder="dd/mm/yyyy">
      </div>
      <span class="glyphicon glyphicon-calendar kalender"></span>
    </div>
    <div class="form-group">
      <label class="col-sm-2" for="no_suratmasuk">No. Surat Masuk</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" required="true" name="no_suratmasuk" id="no_suratmasuk" placeholder="Nomor Surat Masuk">
      </div>
    </div>
    <div class="form-group ">
      <label class="col-sm-2" for="jenis_surat">Jenis Surat</label>
      <div class="col-sm-3">          
        <select class="form-control" required="true" name="jenis_surat_masuk" id="jenis_surat_masuk">
          <option value="">-Pilih-</option>
          <?php foreach (execSelectQuery("select * from tr_jenis_surat_masuk order by id_jenis_surat_masuk asc") as $i => $row) { ?>
          <option class="jenis_surat" value="<?= $row['id_jenis_surat_masuk']?>"><?= $row['jenis']?></option>
          <?php } ?>
          <option class="lain_jenis_surat">Lainnya</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2" for="perihal">Perihal Surat</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" required="true" name="perihal" id="perihal" placeholder="Perihal Surat">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2" for="disposisi">Disposisi</label>
      <div class="col-sm-3">          
        <select class="form-control" required="true" name="disposisi" id="disposisi">
          <option value="">-Pilih-</option>
          <option value="1">Ya</option>
          <option value="0">Tidak</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2" for="fileToUpload">Upload Berkas</label>
      <div class="col-sm-2">
        <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
    </div>          
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="btnSimpan" value="simpan_surat_masuk">Simpan</button>
        <a href="?page=daftar_surat_masuk" class="btn btn-danger">Batal</a>
      </div>
    </div>
  </form>
</div>
<p>&nbsp;</p>