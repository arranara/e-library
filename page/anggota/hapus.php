<?php 
$nis = $_GET['nis'];
$koneksi->query("DELETE FROM tb_anggota WHERE nis ='$nis'");

?>

<script type="text/javascript">
        alert('Data Anggota Berhasil Dihapus :)')
        window.location.href="?page=anggota";
</script>