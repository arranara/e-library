<?php
$koneksi = new mysqli ("localhost","root","12345678","db_perpustakaan");
    $id = $_GET['id'];

    $sql = $koneksi->query("select * from tb_buku where id_buku='$id'");

    $tampil = $sql->fetch_assoc();

    $tahun = $tampil['tahun_terbit'];

    $lokasi = $tampil['lokasi'];

?>


<div class="panel panel-default">
<div class="panel-heading">
        Ubah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control hidden" name="id" value="<?php echo $tampil['id_buku']; ?>" />
                                            <input class="form-control" name="judul" value="<?php echo $tampil['judul']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang"  value="<?php echo $tampil['penulis']; ?>" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit"  value="<?php echo $tampil['penerbit']; ?>" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun">
                                               <?php 
                                                    $tahun = date("Y");

                                                    for ($i=$tahun-35; $i <= $tampil['tahun_terbit']; $i++){
                                                            echo '
                                                            if ($tahun == $i){
                                                                
                                                                <option value="'.$i.'" selected>'.$i.'</option>
    
                                                            


                                                            ';
                                                    }
                                               ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" value="<?php echo $tampil['isbn']; ?>" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah_buku'];?>" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak1" <?php if ($lokasi == "rak1") {echo "selected";} ?>>Rak 1</option>
                                                <option value="rak2" <?php if ($lokasi == "rak2") {echo "selected";} ?>>Rak 2</option>
                                                <option value="rak3" <?php if ($lokasi == "rak3") {echo "selected";} ?>>Rak 3</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" type="date" name="tanggal"  value="<?php echo $tampil['tgl_input']; ?>" /> 
                                        </div>

                                        <div>
                                            <button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
                                        </div>

                                    </div>
                                    </form>
                                </div>
</div>
</div>
</div>

<?php
 if ( isset($_POST['ubah']) ) {
      $id = $_POST['id'];
 $judul = $_POST['judul'];
 $pengarang = $_POST['pengarang'];
 $penerbit = $_POST['penerbit'];
 $tahun = $_POST['tahun'];
 $isbn = $_POST['isbn'];
 $jumlah = $_POST['jumlah'];
 $lokasi = $_POST['lokasi'];
 $tanggal = $_POST['tanggal'];

    $sql = $koneksi -> query("UPDATE tb_buku SET judul='$judul', penulis='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun', isbn='$isbn',
     jumlah_buku='$jumlah', lokasi='$lokasi', tgl_input='$tanggal'  WHERE id_buku ='$id' ");
    if( $sql ){
        echo "
        <script>
        alert('Data Buku Berhasil Diubah :)');
        document.location.href = '?page=buku';
        </script>
        ";
    }else {
        echo "
        <script>alert('Data Buku Gagal Diubah :(');history.go(-1);</script>
        ";
    }
 }


?>