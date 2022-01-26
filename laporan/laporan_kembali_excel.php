<?php 

    $koneksi = new mysqli("localhost","root","","db_perpustakaan");

    $filename = "transaksi_excel-(".date('d-m-Y').").xls";

    header("content-disposition: attachment; filename='$filename'");
    header("content-type: application/vdn.ms-excel");


?>


<h2>Data Laporan transaksi</h2>

<table border='1'>
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Judul</th>
        <th>Status</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
    </tr>

    <?php

        $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
        $no = 1;
        $query=mysqli_query($koneksi,"SELECT a.*,b.judul FROM tb_transaksi a LEFT JOIN tb_buku b 
        ON a.id_buku=b.id_buku where status='kembali' ");
        while($data=mysqli_fetch_array($query)){

    ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nis']; ?></td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo $data['status']; ?></td>
        <td><?php echo $data['tgl_pinjam']; ?></td>
        <td><?php echo $data['tgl_kembali']; ?></td>
    </tr>

    <?php } ?>

</table>