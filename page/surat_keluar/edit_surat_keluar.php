<?php
include "config/koneksi.php";
if(!isset($_GET['token'])) {
    redirect("index.php?page=daftar_surat_keluar");
} else {
  $id = buka(htmlspecialchars(e($_GET['token'])));
   $data = execSelectQuery("select * from tp_arsip_surat_keluar where id_arsip_surat_keluar = $id limit 0,1");
    $row = array_shift($data);
?>

<div class="container-fluid">
  <h2>Edit Arsip Surat Keluar<hr></h2>

  <ul class="breadcrumb">
    <li><a href="?page=home">Home</a></li>
    <li><a href="?page=daftar_surat_keluar">Arsip Surat Keluar</a></li>
    <li>Edit Arsip</li>
  </ul>

  <p>&nbsp;</p>
  <h4>Silahkan mengubah arsip surat keluar melalui form di bawah ini.</h4>
  <p>&nbsp;</p>

  <form class="form-horizontal" role="form" action="index.php?page=simpan_surat_keluar&ref=edit" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
      <label class="col-sm-2" for="nomor_urut">Nomor Urut</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" required="true" name="nomor_urut" id="nomor_urut" placeholder="Nomor Urut" value="<?= $row['nomor_urut']?>">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2" for="nomor_berkas">Nomor Berkas</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" required="true" name="nomor_berkas" id="nomor_berkas" placeholder="Nomor Berkas" value="<?= $row['nomor_berkas']?>">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2" for="penerima">Penerima</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" required="true" name="penerima" id="penerima" placeholder="Penerima" value="<?= $row['penerima']?>">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2" for="tanggal_keluar">Tanggal Keluar</label>
      <div class="col-sm-3">          
        <input type="text" class="form-control datepicker" name="tanggal_keluar" id="tanggal_keluar" placeholder="dd/mm/yyyy"  value="<?= date('d/m/Y', strtotime($row['tanggal_keluar']))?>">
      </div>
      <span class="glyphicon glyphicon-calendar kalender"></span>
    </div>
    <div class="form-group">
      <label class="col-sm-2" for="no_suratkeluar">No. Surat Keluar</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" required="true" name="no_suratkeluar" id="no_suratkeluar" placeholder="Nomor Surat Keluar" value="<?= $row['nomor_surat_keluar']?>">
      </div>
    </div>
    <div class="form-group ">
      <label class="col-sm-2" for="jenis_surat">Jenis Surat</label>
      <div class="col-sm-3">          
        <select class="form-control" required="true" name="jenis_surat" id="jenis_surat">
          <option value="">-Pilih-</option>
          <?php foreach (execSelectQuery("select * from tr_jenis_surat_keluar order by id_jenis_surat_keluar asc") as $i => $rows) { ?>
          <option <?= setSelectedItem($row['id_jenis_surat_keluar'], $rows['id_jenis_surat_keluar']) ?> class="jenis_surat" value="<?= $rows['id_jenis_surat_keluar']?>"><?= $rows['jenis']?></option>
          <?php } ?>
          <option class="lain_jenis_surat">Lainnya</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2" for="perihal">Perihal Surat</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" required="true" name="perihal" id="perihal" placeholder="Perihal Surat" value="<?= $row['perihal']?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2" for="fileToUpload">Upload Berkas</label>
      <div class="col-sm-5">
      <?php
            if(!file_exists($row['path_berkas'])) {
              echo "Berkas tidak ditemukan.";
            } else {
              echo "<a href=\"".$row['path_berkas']."\" target='_blank'>Download berkas</a>";    
            }
          ?>
          <p></p>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="hidden" name="oldFileUpload" value="<?= $row['path_berkas']?>">
        <input type="hidden" name="oldIdArsip" value="<?= $row['id_arsip_surat_keluar']?>">
      </div>
    </div>          
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="btnSimpan" value="simpan_surat_keluar">Simpan perubahan</button>
        <a href="?page=daftar_surat_keluar" class="btn btn-danger">Batal</a>
      </div>
    </div>
  </form>
</div>
<p>&nbsp;</p>
<?php }