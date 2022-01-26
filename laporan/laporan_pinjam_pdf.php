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

	<h2 align="center"><b>Laporan Data Transaksi Perpustakaan</b></h2>
	<table border="1" style="width: 100%">
		<tr>
            <th width="1%">No</th>
			<th>Admin</th>
            <th>Nis</th>
			<th>Nama</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
		</tr>
		<?php 
		$no = 1;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin ");
		while($data=mysqli_fetch_array($query)){
		?>
		<tr>
            <td align="center"><?php echo $no++; ?></td>
			<td align="center"><?php echo $data['nama']; ?></td>
            <td align="center"><?php echo $data['nis']; ?></td>
			<td align="center"><?php echo $data['nama_anggota']; ?></td>
            <td align="center"><?php echo $data['judul']; ?></td>
            <td align="center"><?php echo $data['status']; ?></td>
            <td align="center"><?php echo $data['tgl_pinjam']; ?></td>
            <td align="center"><?php echo $data['tgl_kembali']; ?></td>
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