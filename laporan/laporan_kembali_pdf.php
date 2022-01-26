<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Laporan Transaksi Pinjam</title>
</head>
<body>

	<center>

		<h2>Data Laporan Transaksi</h2>
		<h4>Perpustakaan SMK Antara Palembang</h4>

	</center>

	<?php 
	$koneksi = new mysqli("localhost","root","","db_perpustakaan");
	?>

	<table border="1" style="width: 100%">
		<tr>
            <th width="1%">No</th>
			<th>Admin</th>
            <th>Nis</th>
			<th>Nama</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Tanggal Pinjam</th>
            <th width="5%">Tanggal Kembali</th>
		</tr>
		<?php 
		$no = 1;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin where status='kembali' ");
		while($data=mysqli_fetch_array($query)){
		?>
		<tr>
            <td><?php echo $no++; ?></td>
			<td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['nis']; ?></td>
			<td><?php echo $data['nama_anggota']; ?></td>
            <td><?php echo $data['judul']; ?></td>
            <td><?php echo $data['status']; ?></td>
            <td><?php echo $data['tgl_pinjam']; ?></td>
            <td><?php echo $data['tgl_kembali']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script><br>

<div style='text-align:right;'>
<p>Palembang, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p><br>

<br><p>Kepala Sekolah  &nbsp; &nbsp; &nbsp;</p>
	</div>

</body>
</html>