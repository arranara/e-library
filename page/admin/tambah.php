<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
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
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="nama" required /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" name="username" required /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" required /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email" required/> 
                                        </div>

                                        <div class="form-group">
                                            <label>Level</label>
                                            <input class="form-control" type="text" name="level" required/> 
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

 $id_admin = @$_POST['id_admin'];
 $nama = @$_POST['nama'];
 $username = @$_POST['username'];
 $password = @$_POST['password'];
 $email = @$_POST['email'];
 $level = @$_POST['level'];
 
 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
  $sql = $koneksi->query("INSERT INTO tb_admin SET id_admin='$id_admin', nama='$nama', username='$username', password='$password', email='$email', level='$level'");

  if ($sql) {
   ?>

   <script type="text/javascript">
    
    alert("Data Admin Berhasil Disimpan :)");
    window.location.href='?page=admin';
   </script>

   <?php
  }
 }

?>