<?php 

    $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Catatan
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

<a href="?page=catatan&aksi=tambah" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-plus-circle"></i>Tambah Data</a>

<a href="./laporan/laporan_catatan_excel.php" target="blank" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-print"></i>Cetak Excel</a>

<a href="./laporan/laporan_catatan_pdf.php" target="blank" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-print"></i>Cetak Pdf</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Buku</th>
                                            <th>Nis</th>
                                            <th>ID Transaksi</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                        $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
                                        $no = 1;
                                        $query=mysqli_query($koneksi,"SELECT * FROM `tb_catatan` where status='Belum Diganti' ");
                                        while($data=mysqli_fetch_array($query)){
                                        
                                    ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['id_buku']; ?></td>
                                        <td><?php echo $data['nis']; ?></td>
                                        <td><?php echo $data['id_transaksi']; ?></td>
                                        <td><?php echo $data['keterangan']; ?></td>
                                        <td><?php echo $data['status']; ?></td>
                                        <td><?php echo $data['tanggal']; ?></td>
                                        <td>
                                            <a href="?page=catatan&aksi=lunas&id_catatan=<?php echo $data['id_catatan']; ?>" class="btn-xs btn-danger" ><i class="fa fa-exchange"></i>Telah Diganti</a>
                                        </td>
                                    </tr>

                                    <?php } ?>

                                    </tbody>
                                    
                            </div>
                    </div>
                </div>
        </div>