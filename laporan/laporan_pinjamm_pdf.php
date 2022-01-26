<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Laporan Transaksi</title>
</head>
<body>
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
                      $januari = date('Y-01-01') ;
                      $februari = date('Y-02-01') ;
                      $maret = date('Y-03-01') ;
                      $april = date('Y-04-01') ;
                      $mei = date('Y-05-01') ;
                      $juni = date('Y-06-01') ;
                      $juli = date('Y-07-01') ;
                      $agustus = date('Y-08-01') ;
                      $september = date('Y-09-01') ;
                      $oktober = date('Y-10-01') ;
                      $november = date('Y-11-01') ;
                      $desember = date('Y-12-01') ;
     	?>
		<?php 
		if($_GET['bulan1']=== $januari){
		$no = 1;
		$cari = $_GET['bulan1'];
		
		$bulansekarang = date('Y-02-01') ;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
		WHERE  tgl_pinjam BETWEEN '$cari' AND '$bulansekarang' ");
		
		while($row=mysqli_fetch_array($query)){
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
		<?php 
		}
	}
	else if($_GET['bulan1']=== $februari){
		$no = 1;
		$cari = $_GET['bulan1'];
		$bulansekarang = date('Y-03-01') ;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
		WHERE  tgl_pinjam BETWEEN '$cari' AND '$bulansekarang' ");
		
		while($row=mysqli_fetch_array($query)){
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
		<?php 
		}
	}
	else if($_GET['bulan1']=== $maret){
		$no = 1;
		$cari = $_GET['bulan1'];
		$bulansekarang = date('Y-04-01') ;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
		WHERE  tgl_pinjam BETWEEN '$cari' AND '$bulansekarang' ");
		
		while($row=mysqli_fetch_array($query)){
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
		<?php 
		}
	}
	else if($_GET['bulan1']=== $april){
		$no = 1;
		$cari = $_GET['bulan1'];
		$bulansekarang = date('Y-05-01') ;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
		WHERE  tgl_pinjam BETWEEN '$cari' AND '$bulansekarang' ");
		
		while($row=mysqli_fetch_array($query)){
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
		<?php 
		}
	}
	else if($_GET['bulan1']=== $mei){
		$no = 1;
		$cari = $_GET['bulan1'];
		$bulansekarang = date('Y-06-01') ;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
		WHERE  tgl_pinjam BETWEEN '$cari' AND '$bulansekarang' ");
		
		while($row=mysqli_fetch_array($query)){
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
		<?php 
		}
	}
	else if($_GET['bulan1']=== $juni){
		$no = 1;
		$cari = $_GET['bulan1'];
		$bulansekarang = date('Y-07-01') ;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
		WHERE  tgl_pinjam BETWEEN '$cari' AND '$bulansekarang' ");
		
		while($row=mysqli_fetch_array($query)){
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
		<?php 
		}
	}
	else if($_GET['bulan1']=== $juli){
		$no = 1;
		$cari = $_GET['bulan1'];
		$bulansekarang = date('Y-08-01') ;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
		WHERE  tgl_pinjam BETWEEN '$cari' AND '$bulansekarang' ");
		
		while($row=mysqli_fetch_array($query)){
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
		<?php 
		}
	}
	else if($_GET['bulan1']=== $agustus){
		$no = 1;
		$cari = $_GET['bulan1'];
		$bulansekarang = date('Y-09-01') ;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
		WHERE  tgl_pinjam BETWEEN '$cari' AND '$bulansekarang' ");
		
		while($row=mysqli_fetch_array($query)){
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
		<?php 
		}
	}
	else if($_GET['bulan1']=== $september){
		$no = 1;
		$cari = $_GET['bulan1'];
		$bulansekarang = date('Y-10-01') ;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
		WHERE  tgl_pinjam BETWEEN '$cari' AND '$bulansekarang' ");
		
		while($row=mysqli_fetch_array($query)){
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
		<?php 
		}
	}
	else if($_GET['bulan1']=== $oktober){
		$no = 1;
		$cari = $_GET['bulan1'];
		$bulansekarang = date('Y-11-01') ;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
		WHERE  tgl_pinjam BETWEEN '$cari' AND '$bulansekarang' ");
		
		while($row=mysqli_fetch_array($query)){
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
		<?php 
		}
	}
	else if($_GET['bulan1']=== $november){
		$no = 1;
		$cari = $_GET['bulan1'];
		$bulansekarang = date('Y-12-01') ;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
		WHERE  tgl_pinjam BETWEEN '$cari' AND '$bulansekarang' ");
		
		while($row=mysqli_fetch_array($query)){
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
		<?php 
		}
	}
	else if($_GET['bulan1']=== $desember){
		$no = 1;
		$cari = $_GET['bulan1'];
		$bulansekarang = date('Y-01-01', strtotime('+1 year')) ;
		$query=mysqli_query($koneksi,"SELECT a.*,b.judul,ta.nama,an.nama_anggota FROM tb_transaksi a inner join tb_anggota an 
		INNER JOIN tb_admin ta INNER JOIN tb_buku b 
		ON a.id_buku=b.id_buku and a.nis=an.nis and a.id_admin=ta.id_admin
		WHERE tgl_pinjam BETWEEN '$cari' AND '$bulansekarang' ");
		
		while($row=mysqli_fetch_array($query)){
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
		<?php 
		}
	}?>
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