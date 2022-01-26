<div class="panel panel-default">
  <div class="panel-heading">
    Tambah Data

  </div>
  <div class="box-tools pull-right">
            		<a href="?page=transaksi" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                </div>
            </div>

  <?php
  
  ?>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <form method="POST">

        <div class="form-group">
          <label>ID Transaksi</label>
          <input class="form-control" name="id_transaksi" required />
        </div>
                                        

         <div class="form-group">
         <input class="form-control" type="hidden"  name="id_admin" required value="<?php echo $_SESSION['id'] ?>" /> 
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


      <div>
        <label>Judul</label>
        <select class="form-control" name="judul" required>
          <option value="">Pilih</option>
          <?php  
          $query = mysqli_query($koneksi, "SELECT id_buku, judul FROM tb_buku
            ORDER BY judul DESC")
          or die('Ada kesalahan pada query tampil data kategori: '.mysqli_error($koneksi));

          while ($data = mysqli_fetch_assoc($query)) {
            echo"<option value=\"$data[id_buku]\"> $data[judul] </option>";
          }
          ?>  
        </select>
      </div>


      <div class="form-group">
        <input class="form-control" type="hidden" name="status" required value="pinjam" /> 
      </div>

      <div class="form-group">
        <label>Tanggal Pinjam</label>
        <input class="form-control" type="date" name="tgl_pinjam"  required/> 
      </div>

      <div class="form-group">
        <label>Tanggal Kembali</label>
        <input class="form-control" type="date" name="tgl_kembali" required/> 
      </div>

      <div>
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
      </div>

    </div>
  </form>
  </div>
  </div>
  </div>
  </div>

<?php
$id_admin = @$_POST['id_admin'];
$id_transaksi =  @$_POST['id_transaksi'];
$nis = @$_POST['nis'];
$judul = @$_POST['judul'];
$status = @$_POST['status'];
$tgl_pinjam = @$_POST['tgl_pinjam'];
$tgl_kembali = @$_POST['tgl_kembali'];
$tanggal = @$_POST['tanggal'];

$simpan = @$_POST['simpan'];

if ($simpan) {

  $sql = mysqli_query($koneksi, "INSERT INTO tb_transaksi set id_admin='$id_admin',id_transaksi='$id_transaksi',nis='$nis',id_buku='$judul',status='$status',tgl_pinjam='$tgl_pinjam',tgl_kembali='$tgl_kembali'")
  or die('Ada kesalahan pada query insert : '.mysqli_error($koneksi));



  if ($sql) {
   ?>

   <script type="text/javascript">

    alert("Data Berhasil Disimpan :)");
    window.location.href='?page=transaksi';
  </script>

  <?php
}
}

?>