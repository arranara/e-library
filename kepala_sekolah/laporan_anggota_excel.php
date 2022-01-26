<?php 

    $koneksi = new mysqli("localhost","root","","db_perpustakaan");

    $filename = "anggota_excel-(".date('d-m-Y').").xls";

    header("content-disposition: attachment; filename='$filename'");
    header("content-type: application/vdn.ms-excel");


?>


<h2>Data Laporan Anggota</h2>

<table border='1'>
    <tr>
        <th>No</th>
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
        

        $koneksi = new mysqli ("localhost","root","","db_perpustakaan");
        $no = 1;
        $query=mysqli_query($koneksi,"SELECT * FROM `tb_anggota` ");
        while($data=mysqli_fetch_array($query)){

        @$jk = ($data['jk']==L)?"Laki-laki":"Perempuan";

        @$jurusan = ($data['jurusan']==tkj)?"Teknik Komputer Jaringan":"Otomotif";
    
    
    ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['nama_anggota']; ?></td>
            <td><?php echo $data['kelas']; ?></td>
            <td><?php echo $jk; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $jurusan; ?></td>
            <td><?php echo $data['tgl_lahir']; ?></td>
            <td><?php echo $data['agama']; ?></td>
        </tr>

                <?php } ?>


</table>