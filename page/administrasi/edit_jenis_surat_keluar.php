<?php
include "config/koneksi.php";
if(!isset($_GET['token'])) {
    redirect("index.php?page=jenis_surat_keluar");
} else {
  $id = buka(htmlspecialchars(e($_GET['token'])));
   $data = execSelectQuery("select * from tr_jenis_surat_keluar where id_jenis_surat_keluar = $id limit 0,1");
    $row = array_shift($data);
?>
<div class="container-fluid">
  <h2>Edit Jenis Surat keluar<hr></h2>

  <ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li> <a href="?page=jenis_surat_keluar">Jenis Surat keluar</a></li>
    <li>Edit Jenis Surat keluar</li>
  </ul>

  <p>&nbsp;</p>
  <h4>Silahkan mengubah data pada form berikut</h4>
  <p>&nbsp;</p>
  <form class="form-horizontal" role="form" action="?page=simpan_jenis_surat_keluar&ref=edit" method="post">
    
    <div class="form-group">
      <label class="col-sm-3" for="jenis_surat">Jenis Surat</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" required="true" name="jenis_surat" id="jenis_surat" placeholder="Jenis Surat" value="<?= $row['jenis']?>">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3" for="keterangan">Keterangan</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?= $row['keterangan']?>">
      </div>
    </div>
    
    <div class="form-group">
    <label class="col-sm-3" for="status">Status</label>
      <div class="col-sm-3">          
        <select class="form-control" required="true" name="status" id="status">
          <option class="form-control" value="">-Pilih-</option>
          <option class="form-control" <?= setSelectedItem("1", $row['status']) ?> value="1">Aktif</option>
          <option class="form-control" <?= setSelectedItem("0", $row['status']) ?> value="0">Tidak Aktif</option>
        </select>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-10">
        <input type="hidden" name="oldIdJenis" style="display: none;" value="<?= $row['id_jenis_surat_keluar']?>">
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="?page=jenis_surat_keluar" type="submit" class="btn btn-danger">Batal</a>
      </div>
    </div>
  </form>
</div>
<?php
}
?>