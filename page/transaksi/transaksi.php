<?php 

    $koneksi = new mysqli ("localhost","root","12345678","db_perpustakaan");
    
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Transaksi
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
<a href="?page=transaksi&aksi=tambah" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-plus-circle"></i>Tambah Data</a>

<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
  Cetak Data Transaksi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="./laporan/laporan_pinjam.php" class="form-horizontal"  method="get" target="_blank">

                  <fieldset>
        <div class="form-group">
                        </td><br>
                        <td align="center">
                            <b>Mulai Tanggal</b> <input class="form-control" type="date" name="tgl1" value="<?= date('Y-m-d') ?>">
                            <b>Sampai Tanggal</b> <input class="form-control" type="date" name="tgl2" value="<?= date('Y-m-d') ?>">
                         
                        </td>
                     
                      
                       <div class="box-footer">
                  	<button type="submit"  class="btn btn-primary">Cetak Berdasarkan Tanggal</button> 
                    </form>
                    <a href="./laporan/laporan_pinjam_pdf.php" target="_blank "><i class="btn btn-primary">Cetak Seluruh Data</i> </a>
                  </div><br>

                  
                      </div>
                  </div>
                   
					
                  </fieldset>
                  </div>
                 
        </form>
      </div>
    </div>
  </div>
</div>
 

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
                                            <th>ID Transaksi</th>
                                            <th>Admin</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>ID Buku</th>
                                            <th>Judul</th>
                                            <th>Status</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php


                                        $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
                                        $no = 1;
                                        $query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join 
                                        tb_anggota an INNER JOIN tb_admin ta INNER JOIN tb_buku b 
                                        ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin where status='pinjam' ");
                                        while($data=mysqli_fetch_array($query)){
                                        
        
                                    ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['id_transaksi']; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['nis']; ?></td>
                                        <td><?php echo $data['nama_anggota'] ?> </td>
                                        <td><?php echo $data['id_buku']; ?></td>
                                        <td><?php echo $data['judul']; ?></td>
                                        <td><?php echo $data['status']; ?></td>
                                        <td><?php echo $data['tgl_pinjam']; ?></td>
                                        <td><?php echo $data['tgl_kembali']; ?></td>
                                        
                                        <td ><a href="?page=transaksi&aksi=kembali&id_transaksi=<?php echo $data['id_transaksi']; 
                                        ?>&id_buku=<?php echo $data['id_buku']; ?>"class=" btn btn-xs btn-danger" >
                                        <i class="fa fa-undo" aria-hidden="true"></i> Kembali</a>

                                        <a href="?page=transaksi&aksi=perpanjang&id_transaksi=<?php echo $data['id_transaksi']; 
                                        ?>&id_buku=<?php echo $data['id_buku'];?>&tgl_kembali=<?php echo $data['tgl_kembali']; ?> "class="btn btn-xs btn-info" >
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> Perpanjang</a>

                                        <a href="?page=transaksi&aksi=hapus&id_transaksi=<?php echo $data['id_transaksi']; 
                                        ?>&id_buku=<?php echo $data['id_buku']; ?>"class=" btn btn-xs btn-danger" >
                                        <i class="fa fa-trash" aria-hidden="true"></i> Hilang</a>
                                        </td>

                                    </tr>

                                    <?php } ?>

                                    </tbody>
                                    
                    </div>
                </div>
            </div>
        </div>