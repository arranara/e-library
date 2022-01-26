<?php 

    $koneksi = new mysqli("localhost","root","","db_perpustakaan");

    $filename = "catatan_excel-(".date('d-m-Y').").xls";

    header("content-disposition: attachment; filename='$filename'");
    header("content-type: application/vdn.ms-excel");


?>

<h2>Data Catatan</h2>
<table border='1'>
<tr>
                                            <th>No</th>
                                            <th>ID Buku</th>
                                            <th>Nis</th>
                                            <th>ID Transaksi</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                        $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
                                        $no = 1;
                                        $query=mysqli_query($koneksi,"SELECT * FROM `tb_catatan` where status='Belum Diganti' ");
                                        while($data=mysqli_fetch_array($query)){
                                        
                                    ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['id_buku']; ?></td>
                                        <td><?php echo $data['nis']; ?></td>
                                        <td><?php echo $data['id_transaksi']; ?></td>
                                        <td><?php echo $data['keterangan']; ?></td>
                                        <td><?php echo $data['status']; ?></td>
                                        <td><?php echo $data['tanggal']; ?></td>
                                    </tr>

                                    <?php } ?>
                                    </table>
                                    <table border='1'>
<tr>
                                            <th>No</th>
                                            <th>ID Buku</th>
                                            <th>Nis</th>
                                            <th>ID Transaksi</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                        $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
                                        $no = 1;
                                        $query=mysqli_query($koneksi,"SELECT * FROM `tb_catatan` where status='Telah Diganti' ");
                                        while($data=mysqli_fetch_array($query)){
                                        
                                    ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['id_buku']; ?></td>
                                        <td><?php echo $data['nis']; ?></td>
                                        <td><?php echo $data['id_transaksi']; ?></td>
                                        <td><?php echo $data['keterangan']; ?></td>
                                        <td><?php echo $data['status']; ?></td>
                                        <td><?php echo $data['tanggal']; ?></td>
                                    </tr>

                                    <?php } ?>
                                    </table>

