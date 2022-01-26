<?php 

    ob_start();

    session_start();

    $koneksi = new mysqli ("localhost","root","","db_perpustakaan");

    
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Perpustakaan</h2>
             
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Silahkan Login Terlebih Dahulu </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" />
                                        </div>

                                        <input type="submit" name="login" value="Login" class="btn btn-primary ">
                                
                                   
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>


<?php 

    if(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $login = mysqli_query($koneksi,"select * from tb_admin where username='$username' and password='$password'");
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($login);

        if($cek > 0){
 
            $data = mysqli_fetch_assoc($login);
         
            // cek jika user login sebagai admin
            if($data['level']=="admin"){
         
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $data['id_admin'];
                $_SESSION['level'] = "admin";
                // alihkan ke halaman dashboard admin
                echo "<script>alert('Anda Telah Berhasil Login Sebagai Admin!');</script>";
                echo "<script>location='index.php';</script>";
         
            // cek jika user login sebagai pegawai
            }else if($data['level']=="kepalasekolah"){
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $data['id_admin'];
                $_SESSION['level'] = "kepalasekolah";
                // alihkan ke halaman dashboard pegawai
                echo "<script>alert('Anda Telah Berhasil Login Sebagai Kepala Sekolah!');</script>";
			echo "<script>location='kepala_sekolah/index.php';</script>";
         
            // cek jika user login sebagai pengurus
            }
        }else{
            echo "<script>alert('Username Atau Password Salah, Silahkan cek Username dan Password');</script>";
			echo "<script>location='login.php';</script>";
        }

    }
?>