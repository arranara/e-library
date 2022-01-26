<?php 

    $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
    
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Anggota
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

<a href="?page=anggota&aksi=tambah" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-plus-circle"></i>Tambah Data</a>

<a href="./laporan/laporan_anggota_excel.php" target="blank" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-print"></i>Cetak Excel</a>

<a href="./laporan/laporan_anggota_pdf.php" target="blank" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-print"></i>Cetak Pdf</a>

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
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Jurusan</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
        
                                        $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
                                        $no = 1;
                                        $query=mysqli_query($koneksi,"SELECT * FROM `tb_anggota` ");
                                        while($data=mysqli_fetch_array($query)){

                                        @$jk = ($data['jk']==L)?"Laki-laki":"Perempuan";

                                        @$jurusan = ($data['jurusan']==tkj)?"Teknik Komputer Jaringan":"Otomotif";
                                    
                                    ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['nis']; ?></td>
                                        <td><?php echo $data['nama_anggota']; ?></td>
                                        <td><?php echo $data['kelas']; ?></td>
                                        <td><?php echo $jk; ?></td>
                                        <td><?php echo $data['alamat']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $jurusan; ?></td>
                                        <td><?php echo $data['tgl_lahir']; ?></td>
                                        <td><?php echo $data['agama']; ?></td>
                                        <td>
                                            <a href="?page=anggota&aksi=ubah&nis=<?php echo $data['nis']; ?>" class="btn-xs btn-info" ><i class="fa fa-pencil"></i>Ubah</a>
                                            <a onclick="return confirm('Hapus Data Ini?)"
                                            href="?page=anggota&aksi=hapus&nis=<?php echo $data['nis']; ?>" class="btn-xs btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>

                                    <?php } ?>

                                    </tbody>
                                   
                                </table>       
                            </div>
                        </div>
                </div>
            </div>