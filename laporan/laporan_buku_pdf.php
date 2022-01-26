<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Laporan Buku</title>
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

	<table border="1" style="width: 100%">
		<tr>
            <th width="1%">No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>ISBN</th>
            <th>Jumlah Buku</th>
            <th>Lokasi</th>
		</tr>
		<?php 
		 $no = 1;
         $query=mysqli_query($koneksi,"SELECT * FROM `tb_buku` ");
         while($data=mysqli_fetch_array($query)){
		?>
		<tr>
            <td align="center"><?php echo $no++; ?></td>
            <td align="center"><?php echo $data['judul']; ?></td>
            <td align="center"><?php echo $data['penulis']; ?></td>
            <td align="center"><?php echo $data['penerbit']; ?></td>
            <td align="center"><?php echo $data['tahun_terbit']; ?></td>
            <td align="center"><?php echo $data['isbn']; ?></td>
            <td align="center"><?php echo $data['jumlah_buku']; ?></td>
            <td align="center"><?php echo $data['lokasi']; ?></td>
		</tr>
		<?php 
		}
		?>
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