<?php 
session_start();
include "config/helpers.php";
if(empty(isset($_SESSION['level']))){
    cegahPengunjung();
}else {
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
        <title>Jumbotron Template for Bootstrap</title>
        <link href="assets/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="jumbotron.css" rel="stylesheet">
        <script src="assets/bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script> 
        <script src="assets/date/css/bootstrap-datepicker3.css"></script>
        <script src="assets/date/css/bootstrap-datepicker3.min.css"></script>
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
                        <a href="?pageb=home" class="list-group-item">
                            <span class="glyphicon glyphicon-home"></span>
                            <font>Dashboard</font>
                        </a>
                        <button type="button" class="list-group-item" data-toggle="collapse" data-target="#demo">
                            <span class="glyphicon glyphicon-user"></span> 
                            <font>Manajemen Operator</font>
                            <span class="caret"></span></button>
                        </button>
                        <div id="demo" class="collapse out dropdownrevisi">
                            <li class="list-group-item"><a href="?pageb=tambah_operator">Tambah Data</a></li>
                            <li class="list-group-item"><a href="?pageb=user_operator">Daftar Operator</a></li>
                        </div>
                        <button type="button" class="list-group-item" data-toggle="collapse" data-target="#demo1">
                            <span class="glyphicon glyphicon-folder-open"></span> 
                            <font>Arsip Surat Masuk</font>
                            <span class="caret"></span></button>
                            <div id="demo1" class="collapse out dropdownrevisi">
                                <li class="list-group-item"><a href="?pageb=form_suratmasuk">Tambah Surat</a></li>
                                <li class="list-group-item"><a href="?pageb=daftar_surat_masuk">Daftar Surat</a></li>
                            </div>
                        </button>
                        <button type="button" class="list-group-item" data-toggle="collapse" data-target="#demo2">
                            <span class="glyphicon glyphicon-folder-close"></span> 
                            <font>Arsip Surat keluar</font>
                            <span class="caret"></span></button>
                            <div id="demo2" class="collapse out dropdownrevisi">
                                <li class="list-group-item"><a href="?pageb=form_suratkeluar">Tambah Surat</a></li>
                                <li class="list-group-item"><a href="?pageb=daftar_surat_keluar">Daftar Surat</a></li>
                            </div>
                        </button>
                        <button type="button" class="list-group-item" data-toggle="collapse" data-target="#demo3">
                            <span class="glyphicon glyphicon-book"></span> 
                            <font>Laporan</font>
                            <span class="caret"></span></button>
                            <div id="demo3" class="collapse out dropdownrevisi">
                                <li class="list-group-item"><a href="?pageb=laporan_operator">Data Operator</a></li>
                                <li class="list-group-item"><a href="#">Arsip Surat Masuk</a></li>
                                <li class="list-group-item"><a href="#">Arsip Surat Keluar</a></li>
                            </div>
                        <a href="?pageb=logout" onclick="return confirm('Anda yakin ingin logout?')" class="list-group-item">
                            <span class="glyphicon glyphicon-off"></span>
                            <font>Log Out</font>
                        </a>
                    </div>
                </div>
                <div class="col-md-10" id="menukanan">
                    <div class="isi">
                        <div class="container-fluid">
                            <?php include "config/pageb_helper.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="assets/date/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.datepicker').datepicker();
        })
    </script>
    <script type="text/javascript">
        $(".fileUpload").click(function() {
            document.getElementById("uploadBtn").click();
        });
        
        document.getElementById("uploadBtn").onchange = function() {
            document.getElementById("uploadFile").value = this.value;
        };
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.media.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.media').media({width: 868});
        });
    </script>

</body>
</html>

<?php }?>