<?php 

    session_start();

    error_reporting();

    $koneksi = new mysqli ("localhost","root","","db_perpustakaan");

   if($_SESSION['level']) { 

    

?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan SMK Antara Palembang</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />
   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
      
    <link href="assets/css/custom.css" rel="stylesheet" />

   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </nav>  
        
        <div style="color: white; padding: 15px 100px 5px 100px; float: right;
        font-size: 16px;"> &nbsp; <a href="logout.php" class="btn btn-primary square-btn-adjust">
        <i class="fa fa-sign-out"></i>Logout</a> 
        </div>
      
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <!-- logo sekolah -->
                    <img src="assets/img/smk.PNG" class="img-circle" alt="User Image"/>
				</li>
                
                    <li>
                        <a  href="index.php"></i> <i class="fa fa-book"></i> <span>Dashboard</span></a>
                    </li>
                  
                    <li>
                        <a  href="?page=anggota"></i><i class="fa fa-users"></i><span>Data Anggota</span></a>
                    </li>

                    <li>
                        <a  href="?page=buku"></i> <i class="fa fa-book"></i> <span>Data Buku</span></a>
                    </li>

                    <li>
                        <a  href="?page=transaksi"></i> <i class="fa fa-calendar"></i> <span>Transaksi</span></a>
                    </li>

                    <li>
                        <a  href="?page=admin"></i> <i class="fa fa-users"></i> <span>Data Admin</span></a>
                    </li>

                    <li>
                        <a  href="?page=catatan"></i> <i class="fa fa-pencil"></i> <span>Catatan</span></a>
                    </li>

            </div>           
        </nav>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-20">
                    
                    <?php                    
                        $page = @$_GET['page'];
                        $aksi = @$_GET['aksi']; 

                        if ($page == "buku"){
                                if ($aksi == ""){
                                    include "page/buku/buku.php";
                                }elseif ($aksi== "tambah") {
                                    include "page/buku/tambah.php";
                                }elseif ($aksi== "ubah") {
                                    include "page/buku/ubah.php";
                                }elseif ($aksi== "hapus") {
                                    include "page/buku/hapus.php";
                                }
                        }elseif ($page == "anggota") {
                                if ($aksi == ""){
                                    include "page/anggota/anggota.php";
                                }elseif ($aksi == "tambah"){
                                    include "page/anggota/tambah.php";
                                }elseif ($aksi == "ubah"){
                                    include "page/anggota/ubah.php";
                                }elseif ($aksi == "hapus"){
                                    include "page/anggota/hapus.php";
                                } 
                        }elseif ($page == "transaksi") {
                                if ($aksi == ""){
                                    include "page/transaksi/transaksi.php";
                                }elseif ($aksi == "tambah"){
                                    include "page/transaksi/tambah.php";
                                }elseif ($aksi == "perpanjang"){
                                    include "page/transaksi/perpanjang.php";
                                }elseif ($aksi == "kembali"){
                                    include "page/transaksi/kembali.php";
                                }elseif ($aksi == "hapus"){
                                    include "page/transaksi/hapus.php"; 
                                }          
                        }elseif ($page == "admin") {
                                if ($aksi == ""){
                                    include "page/admin/admin.php";
                                }elseif ($aksi == "tambah"){
                                    include "page/admin/tambah.php";
                                }elseif ($aksi == "ubah"){
                                    include "page/admin/ubah.php";
                                }elseif ($aksi == "hapus"){
                                    include "page/admin/hapus.php";
                                }
                        }elseif ($page == "catatan") {
                                if ($aksi == ""){
                                    include "page/catatan/catatan.php";
                                }elseif ($aksi == "tambah"){
                                    include "page/catatan/tambah.php";
                                }elseif ($aksi == "lunas"){
                                    include "page/catatan/lunas.php";
                                }
                        }elseif($page==""){
                            include "home.php";
                        }

                    ?>
                    </div>
                </div>
                 <hr />     
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
            $('#dataTables-example').dataTable();
            });
    </script>
    <script src="assets/js/custom.js"></script>

</body>
</html>

<?php 

    }else{
        header("location:login.php");
    }

?>