<?php

// import koneksi ke database
include "config/koneksi.php";
?>
<div class="container-fluid">
  <h2>Tambah Jenis Surat Masuk<hr></h2>

  <ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li> <a href="?page=jenis_surat_masuk">Jenis Surat Masuk</a></li>
    <li>Tambah Jenis Surat Masuk</li>
  </ul>

  <p>&nbsp;</p>
  <h4>Silahkan isi form berikut untuk menambah data jenis surat masuk</h4>
  <p>&nbsp;</p>
  <form class="form-horizontal" role="form" action="?page=simpan_operator&ref=tambah" method="post">
    
    <div class="form-group">
      <label class="col-sm-3" for="jenis_surat">Jenis Surat</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" required="true" name="jenis_surat" id="jenis_surat" placeholder="Jenis Surat">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3" for="keterangan">Keterangan</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" required="true" name="keterangan" id="keterangan" placeholder="Keterangan">
      </div>
    </div>
    
    <div class="form-group">
    <label class="col-sm-3" for="status">Status</label>
      <div class="col-sm-3">          
        <select class="form-control" required="true" name="status" id="status">
          <option class="form-control" value="">-Pilih-</option>
          <option class="form-control" value="1">Aktif</option>
          <option class="form-control" value="2">Tidak Aktif</option>
        </select>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-10">
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="?page=jenis_surat_masuk" type="submit" class="btn btn-danger">Batal</a>
      </div>
    </div>
  </form>
</div>