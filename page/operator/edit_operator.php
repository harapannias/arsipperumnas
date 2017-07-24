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

    <!-- Page caption -->
    <h4 class="page-caption">Silahkan mengedit data operator.</h4>


    <form class="form-horizontal" role="form">

      <?php
      $sql = "select * from tp_user where id_user='".$id."'";
      // dd($sql);
      if ($result = mysqli_query($link, $sql) or die (mysqli_error($link))) {
        if(mysqli_num_rows($result) > 0){
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            
            <div class="form-group">
              <label class="col-sm-2" for="nama_lengkap">Nama Lengkap</label>
              <div class="col-sm-3">          
                <input type="text" class="form-control" required="true" value="<?= $row['nama']?>" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2" for="username">Username</label>
              <div class="col-sm-4">          
                <input type="text" class="form-control" required="true" value="<?= $row['username']?>" name="username" id="username" placeholder="Username">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2" for="pwd">Password</label>
              <div class="col-sm-4">          
                <input type="password" class="form-control" required="true" value="<?= $row['password']?>" name="password" placeholder="Password">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2" for="pwd">Edit Password</label>
              <div class="col-sm-3">          
                <div class="input-group">
                  <span class="input-group-addon">
                  <label><input id="chkUbahPassword" type="checkbox"></label>
                  </span>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password Baru" disabled="">
                </div>
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
        <?php 
      } 
    }
  }
}
?>
<script>
  $('#chkUbahPassword').change(function() {
    if($('#chkUbahPassword').prop('checked', true)) {
      alert('yes');
    } else {
      alert('no');
    }
  });
</script>