<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Laporan Anggota</title>
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
            <th>Nis</th>
            <th>Nama</th>
			<th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
		</tr>
		<?php 
		$no = 1;
        $query=mysqli_query($koneksi,"SELECT * FROM `tb_anggota` ");
        while($data=mysqli_fetch_array($query)){

        @$jk = ($data['jk']==L)?"Laki-laki":"Perempuan";

        @$jurusan = ($data['jurusan']==tkj)?"Teknik Komputer Jaringan":"Otomotif";
    
		?>
		<tr>
        <td align="center"><?php echo $no++; ?></td>
            <td align="center"><?php echo $data['nis']; ?></td>
            <td align="center"><?php echo $data['nama_anggota']; ?></td>
			<td align="center"><?php echo $data['kelas']; ?></td>
            <td align="center"><?php echo @$jk; ?></td>
            <td align="center"><?php echo $data['alamat']; ?></td>
            <td align="center"><?php echo $data['email']; ?></td>
            <td align="center"><?php echo @$jurusan; ?></td>
            <td align="center"><?php echo $data['tgl_lahir']; ?></td>
            <td align="center"><?php echo $data['agama']; ?></td>
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