-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 12:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `username`, `password`, `email`, `level`) VALUES
(2, 'M Reza Fahlevi', 'admin', 'admin', 'admin@gmail.com', 'admin'),
(3, 'Sina', 'kepalasekolah', 'kepalasekolah', 'kepalasekolah@gmail.com', 'kepalasekolah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nis` int(11) NOT NULL,
  `nama_anggota` varchar(25) NOT NULL,
  `kelas` enum('12','11','10') NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `jurusan` enum('tkj','oto') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Buddha','Konghucu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nis`, `nama_anggota`, `kelas`, `jk`, `alamat`, `email`, `jurusan`, `tgl_lahir`, `agama`) VALUES
(928347371, 'Rani', '12', 'P', 'jl mayorzen', 'rani2899@gmail.com', 'tkj', '2020-07-16', 'Islam'),
(2147483647, 'Ryan', '12', 'L', 'jl baguskuning', 'ryanindigo22@gmail.com', 'tkj', '2020-07-13', 'Kristen');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` varchar(4) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(12) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3') NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
('11', 'Teknologi Mekanik Kelas X', 'Dr Suratno dan Joko Pramono', 'Andi', '2018', '978979296225', 3, 'rak1', '2020-07-13'),
('12', 'Cisco CCNP dan Jaringan Komputer', 'Iwan Sofana', 'Informatika', '2012', '978602875879', 3, 'rak2', '2020-07-13'),
('9485', 'hrhr', 'hhuhuhu', 'huhuhu', '1988', '08808', 1, 'rak2', '2020-07-15'),
('b676', 'hhg', 'hgh', 'gh', '1991', '88768', 2, 'rak2', '2020-07-15'),
('b999', 'kefjekfejk', 'kjkjkjkj', 'kjkjkjk', '1994', '0897979787', 2, 'rak2', '2020-07-18'),
('t377', 'Malam', 'aj', 'aj', '1996', '09383484722', 1, 'rak2', '2020-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_catatan`
--

CREATE TABLE `tb_catatan` (
  `id_catatan` int(11) NOT NULL,
  `id_buku` varchar(4) NOT NULL,
  `nis` int(11) NOT NULL,
  `id_transaksi` varchar(4) NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_catatan`
--

INSERT INTO `tb_catatan` (`id_catatan`, `id_buku`, `nis`, `id_transaksi`, `keterangan`, `status`, `tanggal`) VALUES
(1, '11', 928347371, '1212', 'Hilang disekolah', 'lunas', '2020-12-31'),
(2, '11', 928347371, '1212', 'Hilang dirumah', 'LUNAS', '2020-12-31'),
(3, '11', 2147483647, '1212', 'Hilang dirumah', 'lunas', '2020-12-31'),
(4, '12', 928347371, 'b665', 'Hilang dirumah', 'Belum Diganti', '2020-12-31'),
(5, '12', 928347371, '22', 'Hilang dirumah', 'Telah Diganti', '2020-07-20'),
(6, 't377', 2147483647, 'b493', 'hilang dirumah belum mengembalikan', 'Belum Diganti', '2020-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` varchar(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_buku` varchar(4) NOT NULL,
  `nis` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_admin`, `id_buku`, `nis`, `status`, `tgl_pinjam`, `tgl_kembali`) VALUES
('005', 2, 'b999', 928347371, 'pinjam', '2020-07-01', '2020-07-22'),
('1212', 2, '11', 928347371, 'pinjam', '2020-07-25', '2020-08-22'),
('22', 2, '12', 2147483647, 'pinjam', '2020-02-19', '2020-02-21'),
('55', 2, '11', 928347371, 'hilang', '2020-06-10', '2020-07-29'),
('b493', 2, '12', 2147483647, 'kembali', '2020-12-31', '2021-01-14'),
('b665', 2, '11', 928347371, 'hilang', '2020-12-31', '2020-12-31'),
('t234', 2, 'b999', 928347371, 'kembali', '2020-12-31', '2021-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_catatan`
--
ALTER TABLE `tb_catatan`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_catatan`
--
ALTER TABLE `tb_catatan`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
