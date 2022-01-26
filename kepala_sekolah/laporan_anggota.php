<?php 

    $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
    
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Anggota
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

<a href="laporan_anggota_excel.php" target="blank" class="btn btn-primary" style="margin-bottom: 5px;"><i class="fa fa-print"></i>Cetak Excel</a>

<a href="laporan_anggota_pdf.php" target="blank" class="btn btn-primary" style="margin-bottom: 5px;"><i class="fa fa-print"></i>Cetak Pdf</a>