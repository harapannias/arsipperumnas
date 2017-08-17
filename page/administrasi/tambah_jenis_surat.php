<?php

// import koneksi ke database
include "config/koneksi.php";
?>
<div class="container-fluid">
  <h2>Tambah Jenis Surat <hr></h2>

  <ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Data Operator</a></li>
    <li>Tambah Data Operator</li>
  </ul>

  <p>&nbsp;</p>
  <h4>Silahkan isi form berikut untuk menambah data operator</h4>
  <p>&nbsp;</p>
  <form class="form-horizontal" role="form" action="?page=simpan_operator&ref=tambah" method="post">
    
    <div class="form-group">
      <label class="col-sm-3" for="nama_operator">Nama Operator</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" required="true" name="nama_operator" id="nama_operator" placeholder="Nama Operator">
      </div>
    </div>

    <div class="form-group">
    <label class="col-sm-3" for="level_operator">Level Operator</label>
      <div class="col-sm-3">          
        <select class="form-control" required="true" name="level_operator" id="level_operator">
          <option class="form-control" value="">-Pilih-</option>
          <option class="form-control" value="1">Administrator</option>
          <option class="form-control" value="2">Operator Biasa</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3" for="username">Username</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" required="true" name="username" id="username" placeholder="Username">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3" for="password">Password</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" required="true" name="password" id="password" placeholder="Password">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-10">
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="?page=tambah_operator" type="submit" class="btn btn-danger">Batal</a>
      </div>
    </div>
  </form>
</div>