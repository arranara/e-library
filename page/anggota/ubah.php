<?php 

    $nis = $_GET['nis'];

    $sql = $koneksi->query("select * from tb_anggota where nis = '$nis'");

    $tampil = $sql->fetch_assoc();

    $kelas = $tampil['kelas'];

    $jkl = $tampil['jk'];

    $jurusan = $tampil['jurusan'];
?>

<div class="panel panel-default">
<div class="panel-heading">
        Ubah Data
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
                                            <input class="form-control" name="id" value="<?php echo $tampil['nis']?>" readonly />
                                         </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama_anggota']; ?>" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas">
                                                <option value="10" <?php if ($kelas=="10"){echo "selected";} ?>>10</option>
                                                <option  value="11" <?php if ($kelas=="11"){echo "selected";} ?>>11</option>
                                                <option  value="12" <?php if ($kelas=="12"){echo "selected";} ?>>12</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jk">
                                                <option value="L" <?php if ($jkl=="L"){echo "selected";} ?>>Laki-laki</option>
                                                <option  value="P"  <?php if ($jkl=="P"){echo "selected";} ?>>Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" value="<?php echo $tampil['alamat']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" value="<?php echo $tampil['email']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <select class="form-control" name="jurusan">
                                            <option value="tkj" <?php if ($jurusan=="tkj"){echo "selected";} ?>>Teknik Komputer Jaringan</option>
                                                <option  value="oto" <?php if ($jurusan=="oto"){echo "selected";} ?>>Otomotif</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select class="form-control" name="agama">
                                            <option value="Islam" <?php if($tampil['agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option>
                                            <option value="Kristen" <?php if($tampil['agama'] == 'Kristen'){ echo 'selected'; } ?>>Kristen</option>
                                            <option value="Kristen" <?php if($tampil['agama'] == 'Hindu'){ echo 'selected'; } ?>>Hindu</option>
                                            <option value="Buddha" <?php if($tampil['agama'] == 'Buddha'){ echo 'selected'; } ?>>Buddha</option>
                                            <option value="Konghucu" <?php if($tampil['agama'] == 'Konghucu'){ echo 'selected'; } ?>>Konghucu</option>
                                            </select>
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="ubah" class="btn btn-primary">
                                        </div>

                                    </div>
                                    </form>
                                </div>
</div>
</div>
</div>

<?php

 $id = @$_POST['id'];
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
  
  $sql = $koneksi->query("UPDATE tb_anggota SET nama_anggota='$nama', kelas='$kelas', jk='$jk', alamat='$alamat', 
  email='$email', jurusan='$jurusan', tgl_lahir='$tgl_lahir', agama='$agama' where nis ='$id'");

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