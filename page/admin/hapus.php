<?php 
$id_admin = $_GET['id_admin'];
$koneksi->query("DELETE FROM tb_admin WHERE id_admin ='$id_admin'");

?>


<script type="text/javascript">
        alert('Data Admin Berhasil Dihapus :)')
        window.location.href="?page=admin";
</script>