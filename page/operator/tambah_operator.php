<?php

// import koneksi ke database
include "config/koneksi.php";

// mengecek halaman, apakah halaman edit data operator?
// Edit operator ditandai dengan adanya nilai variabel $_GET['id']
if(isset($_GET['id'])){  

  // Membaca semua karakter dari variabel id
  $id = htmlspecialchars($_GET['id']); ?>

  <!-- Tampilan halaman Edit Data Operator -->
  <div class="container-fluid">
    <!-- Judul Halaman -->
    <h2>Edit Operator<hr></h2>

    <!-- Breadcrumb : penanda halaman -->
    <ul class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Data Operator</a></li>
      <li>Edit Data Operator</li>
    </ul>

    <h4>Silahkan Ubah form berikut untuk mengedit data operator</h4>
    <form class="form-horizontal" role="form">
      <?php
      include "config/koneksi.php";
      $sql = "select * from tb_user where kode_operator='".$id."'";
      if ($result = mysqli_query($link, $sql)) {
        if(mysqli_num_rows($result) > 0){
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="form-group">
              <label class="col-sm-2" for="email">Kode Operator</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" required="true" value="<?= $row['kode_operator']?>" name="kode_operator" placeholder="OP001">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2" for="pwd">Nama Lengkap</label>
              <div class="col-sm-6">          
                <input type="text" class="form-control" required="true" value="<?= $row['nama']?>" name="nama" placeholder="Jhon Doe">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2" for="pwd">Username</label>
              <div class="col-sm-4">          
                <input type="text" class="form-control" required="true" value="<?= $row['username']?>" name="username" placeholder="Username">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2" for="pwd">Password</label>
              <div class="col-sm-4">          
                <input type="password" class="form-control" required="true" value="<?= $row['password']?>" name="password" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2" for="pwd">Status</label>
              <div class="col-sm-2">          
                <select class="form-control" required="true" name="status">
                  <option <?= setSelectedItem('Aktif', $row['status'])?> class="form-control" required="true">Aktif</option>
                  <option <?= setSelectedItem('Tidak Aktif', $row['status'])?>class="form-control" required="true">Tidak Aktif</option>
                </select>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Edit</button>
                <a href="?pageb=user_operator" type="submit" class="btn btn-danger">Batal</a>
              </div>
            </div>
          </form>
        </div>
        <?php }}}} else { ?><div class="container-fluid">
        <h2>Tambah Operator
          <hr>
        </h2>
        <ul class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Data Operator</a></li>
          <li>Tambah Data Operator</li>
        </ul>

        <p>&nbsp;</p>
        <h4>Silahkan isi form berikut untuk menambah data operator</h4>
        <p>&nbsp;</p>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-sm-2" for="email">Kode Operator</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" required="true" name="kode_operator" placeholder="OP001">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Nama Lengkap</label>
            <div class="col-sm-6">          
              <input type="text" class="form-control" required="true" name="nama" placeholder="Jhon Doe">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Username</label>
            <div class="col-sm-4">          
              <input type="text" class="form-control" required="true" name="username" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Password</label>
            <div class="col-sm-4">          
              <input type="password" class="form-control" required="true" name="password" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Status</label>
            <div class="col-sm-2">          
              <select class="form-control" required="true" name="status">
                <option class="form-control" required="true">Aktif</option>
                <option class="form-control" required="true">Tidak Aktif</option>
              </select>
            </div>
          </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Simpan</button>
              <a href="?pageb=tambah_operator" type="submit" class="btn btn-danger">Batal</a>
            </div>
          </div>
        </form>
      </div>
      <?php } ?>