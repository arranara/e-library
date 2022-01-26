<?php
$koneksi = new mysqli ("localhost","root","","db_perpustakaan");

$id_transaksi =$_GET["id_transaksi"];
$id_buku = $_GET["id_buku"];

$us=mysqli_query($koneksi,"UPDATE tb_transaksi SET status='hilang' WHERE id_transaksi='$id_transaksi'")or die ("Gagal update".mysqli_error());
$uj=mysqli_query($koneksi,"UPDATE tb_buku SET jumlah_buku=(jumlah_buku+1) WHERE id_buku='$id_buku'")or die ("Gagal update".mysqli_error());


	if ($us || $uj) {
		echo "<script>alert('Berhasil Dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	} else {
		echo "<script>alert('Gagal Dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi&aksi=transaksi'>";
	}
?>