<?php
session_start();
echo "<script>alert('Anda berhasil Logout');</script>";
session_destroy();

header("location:login.php");

?>