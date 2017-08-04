<?php
include "config/koneksi.php";
if(isset($_GET['id'])){  
  $id = htmlspecialchars($_GET['id']); ?>
  <div class="container-fluid">
  <h2>Edit Arsip Surat Masuk
    <hr>
  </h2>
  <p align="right"><font color="blue">Home > Arsip Surat Masuk</font> > Edit Arsip</p>
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
            <label class="col-sm-2" for="pwd">Pengirim</label>
            <div class="col-sm-4">          
              <input type="text" class="form-control" required="true" name="pengirim" placeholder="Pengirim" value="<?= $row['pengirim']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Tanggal Masuk</label>
            <div class="col-sm-2">          
              <input type="text" class="form-control datepicker" required="true" name="tanggal_masuk" placeholder="30-01-2017" value="<?= $row['tglmasuk']?>">
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
                <option <?= setSelectedItem('Memo Dinas', $row['jenissurat'])?> class="form-control" required="true">Memo Dinas</option>
                <option <?= setSelectedItem('Laporan Absensi', $row['jenissurat'])?> class="form-control" required="true">Laporan Absensi</option>
                <option <?= setSelectedItem('Pengajuan Diklat', $row['jenissurat'])?> class="form-control" required="true">Pengajuan Diklat</option>
                <option <?= setSelectedItem('Ajuan Uang Makan', $row['jenissurat'])?> class="form-control" required="true">Ajuan Uang Makan</option>
                <option <?= setSelectedItem('Transportasi dan Gaji', $row['jenissurat'])?> class="form-control" required="true">Transportasi dan Gaji</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Perihal</label>
            <div class="col-sm-4">          
              <input type="text" class="form-control" required="true" name="perihal" placeholder="Jenis Surat" value="<?= $row['perihal']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="pwd">Disposisi</label>
            <div class="col-sm-2">          
              <select class="form-control" required="true" name="jenis_surat">
                <option <?= setSelectedItem('Ya', $row['disposisi'])?> class="form-control" required="true">Ya</option>
                <option <?= setSelectedItem('Tidak', $row['disposisi'])?> class="form-control" required="true">Tidak</option>
              </select>
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
      <h2>Tambah Arsip Surat Masuk
        <hr>
      </h2>
      <p align="right"><font color="blue">Home > Arsip Surat Masuk</font> > Tambah Arsip</p>
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
          <label class="col-sm-2" for="pwd">Pengirim</label>
          <div class="col-sm-4">          
            <input type="text" class="form-control" required="true" name="pengirim" placeholder="Pengirim">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2" for="pwd">Tanggal Masuk</label>
          <div class="col-sm-2">          
            <input type="text" class="form-control datepicker" name="tanggal_masuk" placeholder="30-01-2017">
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
          <label class="col-sm-2" for="pwd">Perihal</label>
          <div class="col-sm-4">          
            <input type="text" class="form-control" required="true" name="perihal" placeholder="Perihal">
          </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2" for="pwd">Disposisi</label>
            <div class="col-sm-2">          
              <select class="form-control" required="true" name="jenis_surat">
                <option class="form-control" required="true">Ya</option>
                <option class="form-control" required="true">Tidak</option>
              </select>
            </div>
          </div>
        <div class="form-group">
          <label class="col-sm-2" for="pwd">Upload Berkas</label>
          <div class="col-sm-2">          
            <input id="uploadFile" class="form-control" required="true" placeholder="Pilih File..." disabled>
          </div>
          <div class="fileUpload btn btn-primary">
            <span> Browser </span><input type="file" name="lampiran" id="uploadBtn" style="display: none;">
          </div>
        </div>          
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="?page=form_suratmasuk" type="submit" class="btn btn-danger">Batal</a>
        </div>
      </div>
    </form>
    <p>&nbsp;</p>
    <?php }?>