<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
</div>
<div class="box-tools pull-right">
            		<a href="?page=anggota" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                </div>
            </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input class="form-control" name="nis" required />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="nama" required /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas" required>
                                                <option value="10">10</option>
                                                <option  value="11">11</option>
                                                <option  value="12">12</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jk" required>
                                                <option value="L">Laki-laki</option>
                                                <option  value="P">Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="text" name="alamat" required /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email" required/> 
                                        </div>

                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <select class="form-control" name="jurusan" required>
                                                <option value="tkj">Teknik Komputer Jaringan</option>
                                                <option value="oto">Otomotif</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" required /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select class="form-control" name="agama" required>
                                                <option value="islam">Islam</option>
                                                <option  value="kristen">Kristen</option>
                                                <option  value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                                <option value="konghucu">Konghucu</option>
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

 $nis = @$_POST['nis'];
 $nama = @$_POST['nama'];
 $kelas = @$_POST['kelas'];
 $jk = @$_POST['jk'];
 $alamat = @$_POST['alamat'];
 $email = @$_POST['email'];
 $jurusan = @$_POST['jurusan'];
 $tgl_lahir = @$_POST['tgl_lahir'];
 $agama = @$_POST['agama'];

 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
  $sql = $koneksi->query("INSERT INTO tb_anggota SET nis='$nis', nama_anggota='$nama',kelas='$kelas', 
  jk='$jk', alamat='$alamat', email='$email', jurusan='$jurusan', tgl_lahir='$tgl_lahir', agama='$agama'");

  if ($sql) {
   ?>

   <script type="text/javascript">
    
    alert("Data Anggota Berhasil Disimpan :)");
    window.location.href='?page=anggota';
   </script>

   <?php
  }
 }

?>