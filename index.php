<?php 
ob_start();
session_start();
include "config/helpers.php";
authenticateCheck('index');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/logo.png">
    <title>Sistem Informasi Pengarsipan pada Perumnas Regional I Medan</title>
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/jqueryUI/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style_home.css">
</head>

<body>
    <nav class="navbar-fixed-top" id="header">
        <div><img src="assets/img/header.jpg" width="100%"></div>
    </nav>

    <div class="container-fluid">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-2 scroll-wrapper scrollbar-inner" id="menukiri">
                <div class="list-group scroll-wrapper scrollbar-inner" style="position: relative;">
                    <div class="container-fluid" id="profil">
                        <div class="avatar"><img src="assets/img/Perumnas2.jpg" class="img img-circle"></div>
                        <div class="profil-name">
                            <b><?= getAuth()['nama']?></b><br>
                            <small>Level: <?= getLevelOperator(getAuth()['id_user'])?></small>
                        </div>
                        <hr>
                    </div>

                    <a id="menu" href="?page=home" class="list-group-item <?= (isUrlMatch('?page=home') || isUrlMatch('')) ? 'active' : ''  ?>">
                        <span class="glyphicon glyphicon-home"></span>
                        <font>Dashboard</font>
                    </a>

                    <button type="button" class="list-group-item" data-toggle="collapse" data-target="#demo">
                        <span class="glyphicon glyphicon-user"></span> 
                        <font class="cursor-pointer">Manajemen Operator</font>
                        <span class="caret"></span>
                    </button>
                    <div id="demo" class="collapse dropdownrevisi <?= (isUrlMatch('?page=daftar_operator') || isUrlMatch('?page=tambah_operator')) ? 'in' : 'out'?>">
                        <li class="list-group-item <?= isUrlMatch('?page=tambah_operator') ? 'active' : ''?>"><a id="menu" href="?page=tambah_operator">Tambah Data</a></li>
                        <li class="list-group-item <?= isUrlMatch('?page=daftar_operator') ? 'active' : ''?>"><a id="menu" href="?page=daftar_operator">Daftar Operator</a></li>
                    </div>

                    <button type="button" class="list-group-item" data-toggle="collapse" data-target="#demo1">
                        <span class="glyphicon glyphicon-folder-open"></span> 
                        <font>Arsip Surat Masuk</font>
                        <span class="caret"></span>
                    </button>
                    <div id="demo1" class="collapse dropdownrevisi <?= (isUrlMatch('?page=tambah_surat_masuk') || isUrlMatch('?page=daftar_surat_masuk')) ? 'in' : 'out'?>">
                        <li class="list-group-item <?= isUrlMatch('?page=tambah_surat_masuk') ? 'active' : ''?>"><a id="menu" href="?page=tambah_surat_masuk">Tambah Surat</a></li>
                        <li class="list-group-item <?= isUrlMatch('?page=daftar_surat_masuk') ? 'active' : ''?>"><a id="menu" href="?page=daftar_surat_masuk">Daftar Surat</a></li>
                    </div>

                    <button type="button" class="list-group-item" data-toggle="collapse" data-target="#demo2">
                        <span class="glyphicon glyphicon-folder-close"></span> 
                        <font>Arsip Surat keluar</font>
                        <span class="caret"></span>
                    </button>
                    <div id="demo2" class="collapse out dropdownrevisi">
                        <li class="list-group-item"><a id="menu" href="?page=form_suratkeluar">Tambah Surat</a></li>
                        <li class="list-group-item"><a id="menu" href="?page=daftar_surat_keluar">Daftar Surat</a></li>
                    </div>
                    <button type="button" class="list-group-item" data-toggle="collapse" data-target="#demo3">
                        <span class="glyphicon glyphicon-book"></span> 
                        <font>Laporan</font>
                        <span class="caret"></span>
                    </button>
                    <div id="demo3" class="collapse out dropdownrevisi">
                        <li class="list-group-item"><a id="menu" href="laporan/laporan_operator.php">Data Operator</a></li>
                        <li class="list-group-item"><a id="menu" href="laporan/laporan_surat_masuk.php">Arsip Surat Masuk</a></li>
                        <li class="list-group-item"><a id="menu" href="laporan/laporan_surat_keluar">Arsip Surat Keluar</a></li>
                    </div>
                    <a id="menu" href="?page=logout" onclick="return confirm('Anda yakin ingin logout?')" class="list-group-item">
                        <span class="glyphicon glyphicon-off"></span>
                        <font>Log Out</font>
                    </a>
                </div>
            </div>
            <div class="col-md-10" id="menukanan">
                <div class="isi">
                    <div class="container-fluid">
                        <?php include "config/page_helper.php" ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/bootstrap/css/jquery-2.2.3.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/jqueryUI/jquery-ui.js"></script>
    <script type="text/javascript" src="assets/js/jquery.media.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.media').media({width: 868});
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.datepicker').datepicker({
               dateFormat : "dd/mm/yy",
            });
        })
        $(".fileUpload").click(function() {
            document.getElementById("uploadBtn").click();
        });
        
        $("#uploadBtn").change(function() {
            $("#uploadFile").val(this.value);
        });

        $('#chkUbahPassword').click(function() {
            if(this.checked) {
                $('#password').attr('disabled', false);
            } else {
                $('#password').attr('disabled', true);
            }
        });

    </script>
    

</body>
</html>