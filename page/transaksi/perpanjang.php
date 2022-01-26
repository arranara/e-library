<?php
 $koneksi = new mysqli ("localhost","root","","db_perpustakaan");

$id_transaksi = $_GET['id_transaksi'];
$id_buku = $_GET['id_buku'];
$tgl_kembali = $_GET['tgl_kembali'];
$tgl_kembali2 =date('Y-m-d', strtotime('+7 days', strtotime($tgl_kembali)));

	$sql = "UPDATE tb_transaksi SET tgl_kembali='$tgl_kembali2' WHERE id_transaksi='$id_transaksi'";
 
	$result = mysqli_query($koneksi, $sql);
 
	if($result){
		echo"<script type='text/javascript'>
			onload =function(){
			alert('Buku Berhasil Diperpanjang :)');
		document.location='?page=transaksi';
		}
		</script>";
	}else{
			echo "<script>alert('Buku gagal diperpanjang :(. Silahkan cek kembali.');</script>";
	}
 

?>