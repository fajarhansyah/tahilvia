-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jul 2020 pada 12.58
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
(4, 'Meja', 'course05.jpg', 'per kursi', '100000'),
(5, 'Kursi', 'course06.jpg', 'per kursi', '10000');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_tambahan`
--

INSERT INTO `menu_tambahan` (`id`, `id_transaksi`, `tidak_ada`, `noda_makanan`, `noda_minyak`, `noda_hewan`, `lainnya`) VALUES
(1, 1, NULL, 'Noda Makanan', 'Noda Minyak', 'Noda Hewan', ''),
(2, 2, 'Tidak ada', 'Noda Makanan', 'Noda Minyak', NULL, ''),
(3, 3, 'Tidak ada', NULL, NULL, NULL, ''),
(4, 4, NULL, 'Noda Makanan', NULL, 'Noda Hewan', ''),
(5, 5, NULL, 'Noda Makanan', NULL, 'Noda Hewan', ''),
(6, 6, NULL, NULL, 'Noda Minyak', 'Noda Hewan', ''),
(7, 7, NULL, NULL, NULL, 'Noda Hewan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `deskripsi` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id`, `nama`, `deskripsi`, `rating`) VALUES
(8, 'Fajar', 'asfsfsdfdsfsdfsdfsdfsd', 1),
(9, 'sdsd', 'sdsd', 0),
(10, 'as', 'asdsadsa', 0),
(11, 'user', 'sadasdada', 0),
(12, 'sdsd', 'sdsds', 0),
(13, 'sss', 'ss', 0),
(14, 'aa', 'aaa', 5),
(15, 'aaaa', 'aaa', 3),
(16, 'dada', 'asdas', 2);

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
  `status` varchar(255) NOT NULL,
  `progres` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `nama`, `no_telp`, `tanggal`, `jam`, `alamat`, `total`, `status`, `progres`) VALUES
(6, 'user', '087865018862', '2020-07-16', '', 'aaaaa', 'NaN', 'setuju', 'Selesai'),
(7, 'user', '087865018862', '2020-07-09', '15.00 - 18.00', 'aaaa', '250000', 'setuju', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi_jasa`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi_jasa` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `nama_unit` varchar(255) NOT NULL,
  `harga_unit` varchar(255) NOT NULL,
  `jumlah_unit` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi_jasa`
--

INSERT INTO `tbl_transaksi_jasa` (`id`, `id_transaksi`, `id_item`, `nama_unit`, `harga_unit`, `jumlah_unit`) VALUES
(1, 1, 4, 'Meja', '100000', '3'),
(2, 1, 5, 'Kursi', '10000', '2'),
(3, 2, 4, 'Meja', '100000', '2'),
(4, 2, 5, 'Meja', '100000', '3'),
(5, 3, 4, 'Meja', '100000', '2'),
(6, 3, 5, 'Kursi', '10000', '2'),
(7, 4, 4, 'Meja', '100000', '6'),
(8, 4, 5, 'Kursi', '10000', '5'),
(9, 5, 4, 'Meja', '100000', '1'),
(10, 6, 4, 'Meja', '100000', '2'),
(11, 7, 4, 'Meja', '100000', '2'),
(12, 7, 5, 'Kursi', '10000', '5');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `no_telp`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '087865018862', 'admin', 1),
(2, 'user', 'user', '087865018862', 'user', 2),
(3, 'Fajar', 'fajarhansyah1@gmail.com', '08676756744', 'wepes3000g', 2),
(4, 'bambang', 'bambang', '098596859685', 'wewewe', 2);

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
-- Indexes for table `rating`
--
ALTER TABLE `rating`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_transaksi_jasa`
--
ALTER TABLE `tbl_transaksi_jasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
