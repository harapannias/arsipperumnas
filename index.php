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
        <div><img src="assets/img/header1.jpg" width="100%"></div>
    </nav>

    <div class="container-fluid">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-2 scroll-wrapper scrollbar-inner" id="menukiri">
                <div class="list-group scroll-wrapper scrollbar-inner" style="position: relative;">
                    <div class="container-fluid" id="profil">
                        <a href="?page=profil&token=<?= kunci(getAuth()['id_user']) ?>">
                            <div class="avatar"><img src="<?= getAvatar(getUserInfo(getAuth()['id_user'], 'avatar')) ?>" class="img img-circle profil"></div>
                        </a>
                        <div class="profil-name">
                            <b><?= getAuth()['nama']?></b><br>
                            <small>Level: <?= getLevelOperator(getAuth()['level'])?></small>
                        </div>
                        <hr>
                    </div>

                    <a id="menu" href="?page=home" class="list-group-item <?= (isUrlMatch('?page=home') || isUrlMatch('')) ? 'active' : ''  ?>">
                        <span class="glyphicon glyphicon-home"></span>
                        <font>Dashboard</font>
                    </a>

                    <?php if(getAuth()['level'] == 1) { ?>
                    <button type="button" class="list-group-item" data-toggle="collapse" data-target="#demo">
                        <span class="glyphicon glyphicon-user"></span> 
                        <font class="cursor-pointer">Manajemen Operator</font>
                        <span class="caret"></span>
                    </button>
                    <div id="demo" class="collapse dropdownrevisi <?= (isUrlMatch('?page=daftar_operator') || isUrlMatch('?page=tambah_operator') || isUrlMatch('?page=edit_operator')) ? 'in' : 'out'?>">
                        <li class="list-group-item <?= isUrlMatch('?page=tambah_operator') ? 'active' : ''?>"><a id="menu" href="?page=tambah_operator">Tambah Data</a></li>
                        <li class="list-group-item <?= isUrlMatch('?page=daftar_operator') || isUrlMatch('?page=edit_operator') ? 'active' : ''?>"><a id="menu" href="?page=daftar_operator">Daftar Operator</a></li>
                    </div>
                    <?php } ?>

                    <button type="button" class="list-group-item" data-toggle="collapse" data-target="#demo1">
                        <span class="glyphicon glyphicon-folder-open"></span> 
                        <font>Arsip Surat Masuk</font>
                        <span class="caret"></span>
                    </button>
                    <div id="demo1" class="collapse dropdownrevisi <?= (isUrlMatch('?page=tambah_surat_masuk') || isUrlMatch('?page=daftar_surat_masuk') || isUrlMatch('?page=detail_surat_masuk') || isUrlMatch('?page=edit_surat_masuk')) ? 'in' : 'out'?>">
                        <li class="list-group-item <?= isUrlMatch('?page=tambah_surat_masuk') ? 'active' : ''?>"><a id="menu" href="?page=tambah_surat_masuk">Tambah Surat</a></li>
                        <li class="list-group-item <?= isUrlMatch('?page=daftar_surat_masuk') || isUrlMatch('?page=detail_surat_masuk') || isUrlMatch('?page=edit_surat_masuk') ? 'active' : ''?>"><a id="menu" href="?page=daftar_surat_masuk">Daftar Surat</a></li>
                    </div>

                    <button type="button" class="list-group-item" data-toggle="collapse" data-target="#demo2">
                        <span class="glyphicon glyphicon-folder-close"></span> 
                        <font>Arsip Surat keluar</font>
                        <span class="caret"></span>
                    </button>

                    <div id="demo2" class="collapse out dropdownrevisi <?= (isUrlMatch('?page=tambah_surat_keluar') || isUrlMatch('?page=daftar_surat_keluar') || isUrlMatch('?page=detail_surat_keluar') || isUrlMatch('?page=edit_surat_keluar')) ? 'in' : 'out'?>">
                        <li class="list-group-item <?= isUrlMatch('?page=tambah_surat_keluar') ? 'active' : ''?>"><a id="menu" href="?page=tambah_surat_keluar">Tambah Surat</a></li>
                        <li class="list-group-item <?= isUrlMatch('?page=daftar_surat_keluar') || isUrlMatch('?page=detail_surat_keluar') || isUrlMatch('?page=edit_surat_keluar') ? 'active' : ''?>"><a id="menu" href="?page=daftar_surat_keluar">Daftar Surat</a></li>
                    </div>
                    <button id="menuLaporan" type="button" class="list-group-item" data-toggle="collapse" data-target="#demo3">
                        <span class="glyphicon glyphicon-book"></span> 
                        <font>Laporan</font>
                        <span class="caret"></span>
                    </button>
                    <div id="demo3" class="collapse dropdownrevisi">
                        <?php if(getAuth()['level'] == 1) { ?>
                        <li class="list-group-item"><a id="menu" href="laporan/laporan_operator.php" target="_blank">Data Operator</a></li>
                        <?php } ?>
                        <li class="list-group-item"><a id="menu" href="laporan/laporan_surat_masuk.php" target="_blank">Arsip Surat Masuk</a></li>
                        <li class="list-group-item"><a id="menu" href="laporan/laporan_surat_keluar.php" target="_blank">Arsip Surat Keluar</a></li>
                    </div>

                    <button id="menuAdministrasi" type="button" class="list-group-item" data-toggle="collapse" data-target="#administrasi">
                        <span class="glyphicon glyphicon-tasks"></span> 
                        <font>Administrasi</font>
                        <span class="caret"></span>
                    </button>
                    <div id="administrasi" class="collapse dropdownrevisi <?= isUrlMatch('?page=jenis_surat_masuk') || isUrlMatch('?page=tambah_jenis_surat_masuk') || isUrlMatch('?page=edit_jenis_surat_masuk') || isUrlMatch('?page=jenis_surat_keluar') || isUrlMatch('?page=tambah_jenis_surat_keluar') || isUrlMatch('?page=edit_jenis_surat_keluar') ? 'in' : ''?>">
                        <li class="list-group-item <?= isUrlMatch('?page=jenis_surat_masuk') || isUrlMatch('?page=tambah_jenis_surat_masuk') || isUrlMatch('?page=edit_jenis_surat_masuk') ? 'active' : ''?>"><a id="menu" href="?page=jenis_surat_masuk">Jenis Surat Masuk</a></li>
                        <li class="list-group-item <?= isUrlMatch('?page=jenis_surat_keluar') || isUrlMatch('?page=tambah_jenis_surat_keluar') || isUrlMatch('?page=edit_jenis_surat_keluar') ? 'active' : ''?>"><a id="menu" href="?page=jenis_surat_keluar">Jenis Surat Keluar</a></li>
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

     

        $(document).ready(function() {
            $('.profil, .profil_detail').mouseenter(function() {
                $('.profil').css({"opacity": "0.5", "filter": "alpha(opacity=50)"});
                $('.profil_detail').css({"margin-top": "-55px", "margin-bottom" : "35px"});
            });
        })
        $(document).ready(function() {
            $('.profil, .profil_detail').mouseleave(function() {
                $('.profil').css({"opacity": "1", "filter": "alpha(opacity=50)"});
                $('.profil_detail').css({"margin-top": "-200px", "margin-bottom" : "180px"});
            });
        })

        <?php
        if(isUrlMatch('?page=edit_profil') && isset($_SESSION['edit_profil'])) {
            echo $_SESSION['edit_profil'];
        }

        if(isUrlMatch('?page=tambah_surat_masuk') && isset($_SESSION['tambah_surat_masuk'])) {
            echo $_SESSION['tambah_surat_masuk'];
        }

         if(isUrlMatch('?page=tambah_surat_keluar') && isset($_SESSION['tambah_surat_keluar'])) {
            echo $_SESSION['tambah_surat_keluar'];
        }
        ?>
    </script>
</body>
</html>