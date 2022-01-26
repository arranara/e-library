<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Laporan Transaksi</title>
</head>
<body>
        <style>
			body {
				font-family: times;
			}

			.print {
				margin-top: 10px;
			}

			@media print {
				.print {
					display: none;
				}
			}

			table {
				border-collapse: collapse;
			}
		</style>
<img src="../assets/img/kop.PNG" style="height: 25% ; width: 100%;">

<br>
<br>
	<?php 
	$koneksi = new mysqli("localhost","root","","db_perpustakaan");
	?>

<h2 align="center"><b>Catatan Data Buku Belum Diganti</b></h2>
	<table border="1" style="width: 100%">
    <tr>
<th>No</th>
<th>ID Buku</th>
<th>Nis</th>
<th>ID Transaksi</th>
<th>Keterangan</th>
<th>Status</th>
<th>Tanggal</th>
    </tr>

    <?php

$koneksi = new mysqli ("localhost","root","","db_perpustakaan");
$no = 1;
$query=mysqli_query($koneksi,"SELECT * FROM `tb_catatan` where status='Belum Diganti' ");
while($data=mysqli_fetch_array($query)){
                                        
    ?>

    <tr>
<td align="center"><?php echo $no++; ?></td>
<td align="center"><?php echo $data['id_buku']; ?></td>
<td align="center"><?php echo $data['nis']; ?></td>
<td align="center"><?php echo $data['id_transaksi']; ?></td>
<td align="center"><?php echo $data['keterangan']; ?></td>
<td align="center"><?php echo $data['status']; ?></td>
<td align="center"><?php echo $data['tanggal']; ?></td>
    </tr>

    <?php } ?>

    </table><br>


	<h2 align="center"><b>Catatan Data Buku Lunas</b></h2>
    <table border="1" style="width: 100%">
    <tr>
<th>No</th>
<th>ID Buku</th>
<th>Nis</th>
<th>ID Transaksi</th>
<th>Keterangan</th>
<th>Status</th>
<th>Tanggal</th>
    </tr>

    <?php

$koneksi = new mysqli ("localhost","root","","db_perpustakaan");
$no = 1;
$query=mysqli_query($koneksi,"SELECT * FROM `tb_catatan` where status='Telah Diganti' ");
while($data=mysqli_fetch_array($query)){
                                        
    ?>

    <tr>
<td align="center"><?php echo $no++; ?></td>
<td align="center"><?php echo $data['id_buku']; ?></td>
<td align="center"><?php echo $data['nis']; ?></td>
<td align="center"><?php echo $data['id_transaksi']; ?></td>
<td align="center"><?php echo $data['keterangan']; ?></td>
<td align="center"><?php echo $data['status']; ?></td>
<td align="center"><?php echo $data['tanggal']; ?></td>
    </tr>

    <?php } ?>

    </table>

	<script>
		window.print();
	</script><br>

<div style='text-align:right;'>
<p>Palembang,  <?= date('d/m/y') ?> </p><br>

<br><p>Kepala Sekolah  &nbsp; &nbsp; &nbsp;</p>
	</div>

</body>
</html>
