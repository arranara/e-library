<?php 

$koneksi = new mysqli ("localhost","root","","db_perpustakaan");
?>

<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Admin
  </h1>
  <ol class="breadcrumb">
    <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
  </ol>
</section>

<a href="?page=admin&aksi=tambah" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-plus-circle"></i>Tambah Data</a>

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
                                        <th>ID Admin</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php

                                    $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
                                    $no = 1;
                                    $query=mysqli_query($koneksi,"SELECT * FROM `tb_admin` ");
                                    while($data=mysqli_fetch_array($query)){    
    
                                ?>

                                <tr>
                                    <td><?php echo $data['id_admin']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['username']; ?></td>
                                    <td><?php echo $data['password']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['level']; ?></td>
                                    <td>
                                        <a href="?page=admin&aksi=ubah&id_admin=<?php echo $data['id_admin']; ?>" class="btn-xs btn-info" ><i class="fa fa-pencil"></i>Ubah</a>
                                        <a onclick="return confirm('kembalikan buku ini?)"
                                        href="?page=admin&aksi=hapus&id_admin=<?php echo $data['id_admin']; ?>" class="btn-xs btn-danger" ><i class="fa fa-trash"></i>Hapus</a>
                                    </td>
                                </tr>

                                <?php } ?>

                                </tbody>
                                
                </div>
            </div>
        </div>
    </div>