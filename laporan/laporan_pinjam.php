<?php
session_start();
if ($_SESSION['level']=== "admin") {
	$koneksi = new mysqli("localhost","root","","db_perpustakaan");
?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>Laporan Transaksi Perpustakaan</title>

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
	</head>

	<body>
		<?php
		if (isset($_GET['tgl1']) && $_GET['tgl2'] != '') {
			$cek = $koneksi->query("SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
			INNER JOIN tb_admin ta INNER JOIN tb_buku b 
			ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
			WHERE  tgl_pinjam BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'
							");

			$dta = mysqli_fetch_assoc($cek);
			$tanggal = $dta['tgl_pinjam'];

			if ($tanggal) {
				echo "
	 
	 ";
			} else {
				echo "
		";
			}

		?>
		<h2 align="center"><b>Laporan Data Transaksi Perpustakaan</b></h2>
	<table border="1" style="width: 100%">
		<tr>
            <th width="1%">No</th>
			<th>ID Transaksi</th>
			<th>Admin</th>
            <th>Nis</th>
			<th>Nama</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
		</tr>
				<?php
				$cek2 = $koneksi->query("SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
				INNER JOIN tb_admin ta INNER JOIN tb_buku b 
				ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
				WHERE  tgl_pinjam BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'
								");
	
	$no = 1;
				$total = 0;
				while ($row = mysqli_fetch_array($cek2)) :
				?>
					<tr>
            <td align="center"><?php echo $no++; ?></td>
			<td align="center"><?php echo $row['id_transaksi']; ?></td>
			<td align="center"><?php echo $row['nama']; ?></td>
            <td align="center"><?php echo $row['nis']; ?></td>
			<td align="center"><?php echo $row['nama_anggota']; ?></td>
            <td align="center"><?php echo $row['judul']; ?></td>
            <td align="center"><?php echo $row['status']; ?></td>
            <td align="center"><?php echo $row['tgl_pinjam']; ?></td>
            <td align="center"><?php echo $row['tgl_kembali']; ?></td>
		</tr>
					
				

				<?php endwhile; ?>
			
			</table><br>
			
<div style='text-align:right;'>
<p>Palembang,  <?= date('d/m/y') ?> </p><br>

<br><p>Kepala Sekolah  &nbsp; &nbsp; &nbsp;</p>
	</div>



			<script>
		window.print();
	</script>
	</body>

	</html>

<?php

		} else {
		}
?>
<?php
} ?>