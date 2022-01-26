<?php
$koneksi = new mysqli ("localhost","root","","db_perpustakaan");

$id_catatan =$_GET["id_catatan"];

$us=mysqli_query($koneksi,"UPDATE tb_catatan SET status='Telah Diganti' WHERE id_catatan='$id_catatan'")or die ("Gagal update".mysqli_error());

	if ($us || $uj) {
		echo "<script>alert('Buku Telah Diganti :)')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=catatan'>";
	} else {
		echo "<script>alert('Buku Gagal Diganti :(')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi&aksi=catatan'>";
	}
?>