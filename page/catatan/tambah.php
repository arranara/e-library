<div class="panel panel-default">
<div class="panel-heading">
        Tambah Catatan
</div>
<div class="box-tools pull-right">
            		<a href="?page=catatan" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                </div>
            </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                    <div class="form-group">
                                            <label>ID Buku</label>
                                            <select class="form-control" name="id_buku" required />
                                            <?php

                                            $query = "SELECT * FROM tb_buku ORDER BY id_buku";

                                            $result = mysqli_query($koneksi, $query);

                                            ?>
                                            <option  Disabled = true Selected = true value="" >Pilih</option>
                                            <?php while($data = mysqli_fetch_assoc($result) ){?>

                                            <option value="<?php echo $data['id_buku']; ?>"> <?php echo $data['id_buku']; ?> , <?php echo $data['judul']; ?></option>

                                            <?php } ?>

                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label>Nis</label>
                                            <select class="form-control" name="nis" required>
                                                <?php
                                                
                                                $query = "SELECT * FROM tb_anggota ORDER BY nis ASC";

                                                $result = mysqli_query($koneksi, $query);

                                                ?>
                                                <option  Disabled = true Selected = true value="" >Pilih</option>
                                                <?php while($data = mysqli_fetch_assoc($result) ){?>

                                                <option value="<?php echo $data['nis']; ?>"> <?php echo $data['nis']; ?> , <?php echo $data['nama_anggota']; ?></option>

                                            <?php } ?>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label>ID Transaksi</label>
                                            <select class="form-control" name="id_transaksi" required>
                                                <?php
                                                
                                                $query = "SELECT * FROM tb_transaksi ORDER BY id_transaksi";

                                                $result = mysqli_query($koneksi, $query);

                                                ?>
                                                <option  Disabled = true Selected = true value="" >Pilih</option>
                                                <?php while($data = mysqli_fetch_assoc($result) ){?>

                                                <option value="<?php echo $data['id_transaksi']; ?>"> <?php echo $data['id_transaksi']; ?></option>

                                            <?php } ?>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input class="form-control" type="text" name="keterangan" required/> 
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="status" required value="Belum Diganti" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tanggal" required/> 
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                            <input type="reset" name="reset" value="reset" class="btn btn-default"> 
                                        </div>

                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
$id_buku = @$_POST['id_buku'];
$nis = @$_POST['nis'];
$id_transaksi = @$_POST['id_transaksi'];
$keterangan = @$_POST['keterangan'];
$status = @$_POST['status'];
$tanggal = @$_POST['tanggal'];

$simpan = @$_POST['simpan'];

if ($simpan) {

  $sql = mysqli_query($koneksi, "INSERT INTO tb_catatan(id_buku,nis,id_transaksi,keterangan,status,tanggal)
    VALUES('$id_buku','$nis','$id_transaksi','$keterangan','$status','$tanggal')")
  or die('Ada kesalahan pada query insert : '.mysqli_error($koneksi));



  if ($sql) {
   ?>

   <script type="text/javascript">

    alert("Data Berhasil Disimpan :)");
    window.location.href='?page=catatan';
  </script>

  <?php
}
}

?>