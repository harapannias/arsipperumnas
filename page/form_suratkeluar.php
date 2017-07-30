<?php
include "config/koneksi.php";
if(isset($_GET['id'])){  
  $id = htmlspecialchars($_GET['id']); ?>
  <div class="container-fluid">
  <h2>Edit Arsip Surat Keluar
    <hr>
  </h2>
  <p align="right"><font color="blue">Home > Arsip Surat Keluar</font> > Edit Arsip</p>
  <p>&nbsp;</p>
  <h4>Silahkan ubah form berikut untuk mengedit arsip surat masuk</h4>
  <p>&nbsp;</p>
  <form class="form-horizontal" role="form">
    <?php
    include "config/koneksi.php";
    $sql = "select * from arsip_suratmasuk where nmr_urut='".$id."'";
    if ($result = mysqli_query($link, $sql)) {
      if(mysqli_num_rows($result) > 0){
        $no = 1; 
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="form-group">
            <label class="col-sm-2" for="email">Nomor Urut</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" required="true" name="nomor_urut" placeholder="ASM001" value="<?= $row['nmr_urut']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Nomor Berkas</label>
            <div class="col-sm-3">          
              <input type="text" class="form-control" required="true" name="nomor_berkas" placeholder="1234.SU/AB/X/2017" value="<?= $row['nomorberkas']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Penerima</label>
            <div class="col-sm-4">          
              <input type="text" class="form-control" required="true" name="penerima" placeholder="penerima" value="<?= $row['penerima']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Tanggal Keluar</label>
            <div class="col-sm-2">          
              <input type="text" class="form-control datepicker" required="true" name="tanggal_Keluar" placeholder="2017-01-30" value="<?= $row['tanggal_Keluar']?>">
            </div>
            <span class="glyphicon glyphicon-calendar kalender"></span>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">No. Surat Masuk</label>
            <div class="col-sm-3">          
              <input type="text" class="form-control" required="true" name="no_suratmasuk" placeholder="Nomor Surat Masuk" value="<?= $row['nmrsurat']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Jenis Surat</label>
            <div class="col-sm-3">          
              <select class="form-control" name="jenis_surat">
                <option <?= setSelectedItem('Belanja Pegawai', $row['jenissurat'])?> class="form-control" required="true">Belanja Pegawai</option>
                <option <?= setSelectedItem('Ajuan Diklat', $row['jenissurat'])?> class="form-control" required="true">Ajuan Diklat</option>
                <option <?= setSelectedItem('Ajuan Mutasi', $row['jenissurat'])?> class="form-control" required="true">Ajuan Mutasi</option>
                <option <?= setSelectedItem('Promisi dan Demosi', $row['jenissurat'])?> class="form-control" required="true">Promosi dan Demosi</option>
                <option <?= setSelectedItem('Permohonan Pensiun', $row['jenissurat'])?> class="form-control" required="true">Permohonan Pensiun</option>
                <option <?= setSelectedItem('Ajuan Kesehatan', $row['jenissurat'])?> class="form-control" required="true">Ajuan Kesehatan</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Perihal</label>
            <div class="col-sm-4">          
              <input type="text" class="form-control" required="true" name="perihal" placeholder="Perihal" value="<?= $row['perihal']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Upload Berkas</label>
            <div class="col-sm-2">          
              <input id="uploadFile" class="form-control" required="true" placeholder="Pilih File..." disabled="disabled" value="<?= $row['lampiran']?>">
            </div>
            <div class="fileUpload btn btn-primary btn-md">
              <span> Browser <input type="file" name="lampiran" id="uploadBtn" style="display: none;"></span>
            </div>
          </div>          
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="?page=daftar_surat_masuk" type="submit" class="btn btn-danger">Batal</a>
          </div>
        </div>
      </form>
      </div>
      <p>&nbsp;</p>
      <?php }}}}else { ?>
      <div class="container-fluid">
      <h2>Tambah Arsip Surat Keluar
        <hr>
      </h2>
      <p align="right"><font color="blue">Home > Arsip Surat Keluar</font> > Tambah Arsip</p>
      <p>&nbsp;</p>
      <h4>Silahkan isi form berikut untuk menambah arsip surat masuk</h4>
      <p>&nbsp;</p>
      <form class="form-horizontal" role="form">
        <div class="form-group">
            <label class="col-sm-2" for="email">Nomor Urut</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" required="true" name="nomor_urut" placeholder="ASM001">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Nomor Berkas</label>
            <div class="col-sm-3">          
              <input type="text" class="form-control" required="true" name="nomor_berkas" placeholder="1234.SU/AB/X/2017">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Penerima</label>
            <div class="col-sm-4">          
              <input type="text" class="form-control" required="true" name="penerima" placeholder="penerima">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Tanggal Keluar</label>
            <div class="col-sm-2">          
              <input type="text" class="form-control datepicker" required="true" name="tanggal_Keluar" placeholder="2017-01-30">
            </div>
            <span class="glyphicon glyphicon-calendar kalender"></span>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">No. Surat Masuk</label>
            <div class="col-sm-3">          
              <input type="text" class="form-control" required="true" name="no_suratmasuk" placeholder="Nomor Surat Masuk">
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
            <label class="col-sm-2" for="pwd">Perihal</label>
            <div class="col-sm-4">          
              <input type="text" class="form-control" required="true" name="perihal" placeholder="Perihal">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Upload Berkas</label>
            <div class="col-sm-2">          
              <input id="uploadFile" class="form-control" required="true" placeholder="Pilih File..." disabled="disabled" >
            </div>
            <div class="fileUpload btn btn-primary btn-md">
              <span> Browser <input type="file" name="lampiran" id="uploadBtn" style="display: none;"></span>
            </div>
          </div>          
        </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="?page=form_suratkeluar" type="submit" class="btn btn-danger">Batal</a>
        </div>
      </div>
    </form>
    <p>&nbsp;</p>
    <?php }?>