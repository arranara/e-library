<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
</div>
<div class="box-tools pull-right">
            		<a href="?page=buku" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                </div>
            </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                    <div class="form-group">
                                            <label>ID Buku</label>
                                            <input class="form-control" name="id_buku" required />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" type="text" name="judul" required/>
                                        </div>

                                        <div class="form-group">
                                            <label>Penulis</label>
                                            <input class="form-control" type="text" name="penulis" required/> 
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" type="text" name="penerbit" required/> 
                                        </div>

                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun" required>
                                               <?php 
                                                    $tahun = date("Y");

                                                    for ($i=$tahun-35; $i <= $tahun; $i++){
                                                            echo '
                                                            
                                                                <option value="'.$i.'">'.$i.'</option>

                                                            ';
                                                    }
                                               ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" type="number" name="jumlah" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak1">Rak 1</option>
                                                <option  value="rak2">Rak 2</option>
                                                <option  value="rak3">Rak 3</option>
                                            </select>
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
$judul = @$_POST['judul'];
$penulis = @$_POST['penulis'];
$penerbit = @$_POST['penerbit'];
$tahun = @$_POST['tahun'];
$isbn = @$_POST['isbn'];
$jumlah = @$_POST['jumlah'];
$lokasi = @$_POST['lokasi'];
$tanggal = @date("Y-m-d");

 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
  $sql = $koneksi->query("INSERT INTO tb_buku SET id_buku='$id_buku', judul='$judul', penulis='$penulis', penerbit='$penerbit', 
  tahun_terbit='$tahun', isbn='$isbn', jumlah_buku='$jumlah', lokasi='$lokasi', tgl_input='$tanggal'");

  if ($sql) {
   ?>

   <script type="text/javascript">
    
    alert("Data Buku Berhasil Disimpan :)");
    window.location.href='?page=buku';
   </script>

   <?php
  }
 }

?>