-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Apr 2020 pada 01.07
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hilvia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_item`
--

CREATE TABLE IF NOT EXISTS `menu_item` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_item`
--

INSERT INTO `menu_item` (`id`, `nama`, `gambar`, `satuan`, `harga`) VALUES
(4, 'tes ', 'course05.jpg', 'per kursi', '100000'),
(5, 'Alfian', 'course06.jpg', 'per kursi', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_tambahan`
--

CREATE TABLE IF NOT EXISTS `menu_tambahan` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tidak_ada` varchar(255) DEFAULT NULL,
  `noda_makanan` varchar(255) DEFAULT NULL,
  `noda_minyak` varchar(255) DEFAULT NULL,
  `noda_hewan` varchar(255) DEFAULT NULL,
  `lainnya` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_tambahan`
--

INSERT INTO `menu_tambahan` (`id`, `id_transaksi`, `tidak_ada`, `noda_makanan`, `noda_minyak`, `noda_hewan`, `lainnya`) VALUES
(1, 1, NULL, 'Noda Makanan', 'Noda Minyak', 'Noda Hewan', ''),
(2, 2, NULL, 'Noda Makanan', 'Noda Minyak', 'Noda Hewan', ''),
(3, 3, NULL, NULL, NULL, NULL, ''),
(4, 4, NULL, 'Noda Makanan', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `nama`, `no_telp`, `tanggal`, `jam`, `alamat`, `total`, `status`) VALUES
(1, 'Fajar', '087865018862', '2020-05-21', '15.00 - 18.00', 'Malang', '217000', 'setuju'),
(2, 'Fajar', '087865018862', '2020-05-21', '15.00 - 18.00', 'Malang', '217000', 'setuju'),
(3, 'Alfian', '087865018862', '2020-05-07', '15.00 - 18.00', 'Jokbang', '65000', 'setuju'),
(4, 'Fajar', '948534534', '2020-05-07', '12.00 - 14.00', 'Malang', '152000', 'setuju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi_jasa`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi_jasa` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_unit` varchar(255) NOT NULL,
  `harga_unit` varchar(255) NOT NULL,
  `jumlah_unit` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi_jasa`
--

INSERT INTO `tbl_transaksi_jasa` (`id`, `id_transaksi`, `nama_unit`, `harga_unit`, `jumlah_unit`) VALUES
(1, 1, 'Sofa Standar', '30000', '1'),
(2, 1, 'Sofa Jumbo', '35000', '1'),
(3, 1, 'Sofa Bed', '130000', '1'),
(4, 1, 'Bantalan Sofa Besar', '15000', '1'),
(5, 1, 'Bantalan Sofa Kecil', '7000', '1'),
(6, 2, 'Sofa Standar', '30000', '1'),
(7, 2, 'Sofa Jumbo', '35000', '1'),
(8, 2, 'Sofa Bed', '130000', '1'),
(9, 2, 'Bantalan Sofa Besar', '15000', '1'),
(10, 2, 'Bantalan Sofa Kecil', '7000', '1'),
(11, 3, 'Sofa Standar', '30000', '1'),
(12, 3, 'Sofa Jumbo', '35000', '1'),
(13, 4, 'Sofa Bed', '130000', '1'),
(14, 4, 'Bantalan Sofa Besar', '15000', '1'),
(15, 4, 'Bantalan Sofa Kecil', '7000', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `no_telp`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '087865018862', 'admin', 1),
(2, 'user', 'user', '087865018862', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_tambahan`
--
ALTER TABLE `menu_tambahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi_jasa`
--
ALTER TABLE `tbl_transaksi_jasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu_tambahan`
--
ALTER TABLE `menu_tambahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_transaksi_jasa`
--
ALTER TABLE `tbl_transaksi_jasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
