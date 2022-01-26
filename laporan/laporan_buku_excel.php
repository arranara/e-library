<?php 

    $koneksi = new mysqli("localhost","root","","db_perpustakaan");

    $filename = "buku_excel-(".date('d-m-Y').").xls";

    header("content-disposition: attachment; filename='$filename'");
    header("content-type: application/vdn.ms-excel");


?>

<h2>Data Laporan Buku</h2>

<table border='1'>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>ISBN</th>
        <th>Jumlah Buku</th>
        <th>Lokasi</th>
    </tr>


    <?php

        $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
        $no = 1;
        $query=mysqli_query($koneksi,"SELECT * FROM `tb_buku` ");
        while($data=mysqli_fetch_array($query)){

    ?>


    
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo $data['penulis']; ?></td>
        <td><?php echo $data['penerbit']; ?></td>
        <td><?php echo $data['tahun_terbit']; ?></td>
        <td><?php echo $data['isbn']; ?></td>
        <td><?php echo $data['jumlah_buku']; ?></td>
        <td><?php echo $data['lokasi']; ?></td>
    </tr>

    <?php } ?>

</table>