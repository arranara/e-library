<?php 

    $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Buku
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

<a href="?page=buku&aksi=tambah" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-plus-circle"></i>Tambah Data</a>

<a href="./laporan/laporan_buku_excel.php" target="blank" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-print"></i>Cetak Excel</a>

<a href="./laporan/laporan_buku_pdf.php" target="blank" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-print"></i>Cetak Pdf</a>

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
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>ISBN</th>
                                            <th>Jumlah Buku</th>
                                            <th>Lokasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                        $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
                                        $no = 1;
                                        $query=mysqli_query($koneksi,"SELECT * FROM `tb_buku` ");
                                        while($data=mysqli_fetch_array($query)){
                                        
                                    ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['id_buku']; ?></td>
                                        <td><?php echo $data['judul']; ?></td>
                                        <td><?php echo $data['penulis']; ?></td>
                                        <td><?php echo $data['penerbit']; ?></td>
                                        <td><?php echo $data['tahun_terbit']; ?></td>
                                        <td><?php echo $data['isbn']; ?></td>
                                        <td><?php echo $data['jumlah_buku']; ?></td>
                                        <td><?php echo $data['lokasi']; ?></td>
                                        <td>
                                            <a href="?page=buku&aksi=ubah&id=<?php echo $data['id_buku']; ?>" class="btn-xs btn-info" ><i class="fa fa-pencil"></i>Ubah</a>
                                            <a onclick="return confirm('Hapus Data Ini?)" 
                                            href="?page=buku&aksi=hapus&id_buku=<?php echo $data['id_buku']; ?>" class="btn-xs btn-danger" ><i class="fa fa-trash"></i>Hapus</a>
                                        </td>
                                    </tr>

                                    <?php } ?>

                                    </tbody>
                                    
                            </div>
                    </div>
                </div>
        </div>