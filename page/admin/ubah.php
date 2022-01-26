<?php

    $id_admin = $_GET['id_admin'];

    $sql = $koneksi->query("select * from tb_admin where id_admin='$id_admin'");

    $tampil = $sql->fetch_assoc();

?>


<div class="panel panel-default">
<div class="panel-heading">
        Ubah Data
</div>
<div class="box-tools pull-right">
            		<a href="?page=admin" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                </div>
            </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                    <div class="form-group">
                                            <label>ID Admin</label>
                                            <input class="form-control" name="id_admin" value="<?php echo $tampil['id_admin']?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" type="text" value="<?php echo $tampil['nama']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>username</label>
                                            <input class="form-control" name="username" type="text" value="<?php echo $tampil['username']; ?>" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" type="password"  value="<?php echo $tampil['password']; ?>" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" type="email" value="<?php echo $tampil['email']; ?>" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Level</label>
                                            <input class="form-control" type="text" name="level" value="<?php echo $tampil['level'];?>" /> 
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
 $id_admin = @$_POST['id_admin'];
 $nama = @$_POST['nama'];
 $username = @$_POST['username'];
 $password = @$_POST['password'];
 $email = @$_POST['email'];
 $level = @$_POST['level'];

 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
  $sql = $koneksi->query("UPDATE tb_admin SET nama='$nama', username='$username', password='$password', email='$email', level='$level' where id_admin='$id_admin'");

  if ($sql) {
   ?>

   <script type="text/javascript">
    
    alert("Data Admin Berhasil Diubah :)");
    window.location.href='?page=admin';
   </script>

   <?php
  }
 }

?>