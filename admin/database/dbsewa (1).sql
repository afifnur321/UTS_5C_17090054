-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 05:56 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `facebook` text NOT NULL,
  `whatsaap` text NOT NULL,
  `link_whatsaap` text NOT NULL,
  `instagram` text NOT NULL,
  `email` text NOT NULL,
  `location` text NOT NULL,
  `link_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `facebook`, `whatsaap`, `link_whatsaap`, `instagram`, `email`, `location`, `link_location`) VALUES
(1, 'https://www.facebook.com/messages/t/dimas213', '087869966215', 'https://wa.me/087869966222', 'https://www.instagram.com/mas_andika34/', 'andikapanji12@gmail.com', 'Jl. Pemuda No.148, Magelang, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56122\"\"\"', 'https://www.google.co.id/maps/place/Jl.+Pemuda+No.148,+Magelang,+Kec.+Magelang+Tengah,+Kota+Magelang,+Jawa+Tengah+56122/\"\"\"');

-- --------------------------------------------------------

--
-- Table structure for table `data_item`
--

CREATE TABLE `data_item` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(8) NOT NULL,
  `spesifikasi` varchar(225) NOT NULL,
  `tipe_sewa` varchar(5) NOT NULL,
  `periode_tunda` varchar(5) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `biaya_operasional` float NOT NULL,
  `harga_sewa` float NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_item`
--

INSERT INTO `data_item` (`id`, `nama`, `kategori`, `spesifikasi`, `tipe_sewa`, `periode_tunda`, `no_telp`, `alamat`, `biaya_operasional`, `harga_sewa`, `gambar`, `status`) VALUES
(4, 'Kamar 2', 'VIP', 'Bersih', 'Bulan', '3 Har', '08812763', 'jl.jalan', 50000, 500000, 'fa8df761b8e563bcf8bd60f74f2ea4ca-c31c9b35ef5d46e05e1b454ba5eb9cab15565412399598.png', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `data_konsumen`
--

CREATE TABLE `data_konsumen` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alama_domisili` text NOT NULL,
  `alamat_ktp` text NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `no_wa` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `nama2` varchar(50) NOT NULL,
  `no_telp2` varchar(12) NOT NULL,
  `no_wa2` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_profilweb`
--

CREATE TABLE `data_profilweb` (
  `id` int(3) NOT NULL,
  `profil` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_profilweb`
--

INSERT INTO `data_profilweb` (`id`, `profil`, `visi`, `misi`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute iru', 'Menjadi usaha terbaik penyedia kost-kost-an, yang mengutamakan pelayanan dan kenyamanan yang memuaskan bagi penghuni kost.', '1. Menerapkan langkah-langkah promosi strategis untuk mengenalkan perusahaan kepada penghuni/konsumen.\r\n<br>\r\n2. Menyediakan tempat penghuni kost yang nyaman dan aman.\r\n<br>\r\n3. Memberikan pelayanan servis yang terbaik kepada penghuni kost.\r\n<br>\r\n4. Selalu berkomitmen');

-- --------------------------------------------------------

--
-- Table structure for table `howtoorder`
--

CREATE TABLE `howtoorder` (
  `id_cara` int(3) NOT NULL,
  `prtnyaan` varchar(255) NOT NULL,
  `petunjuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `howtoorder`
--

INSERT INTO `howtoorder` (`id_cara`, `prtnyaan`, `petunjuk`) VALUES
(1, 'How to Order', 'Berisi  cara pemesanan pada website ini');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id_knsmn` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `almt_dmsli` varchar(50) NOT NULL,
  `almt_ktp` varchar(50) NOT NULL,
  `telp` char(13) NOT NULL,
  `whatsapp` char(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ktp` blob NOT NULL,
  `kk` blob NOT NULL,
  `nama_kontak` varchar(50) NOT NULL,
  `telp_aktif` char(13) NOT NULL,
  `wa_aktif` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pemesanan`
--

CREATE TABLE `laporan_pemesanan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `tgl_pemesanan` int(11) NOT NULL,
  `periode` int(11) NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `no_rekening` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `nama`) VALUES
(1, 'Tersedia'),
(2, 'Penuh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_faq`
--

CREATE TABLE `tb_faq` (
  `id` int(3) NOT NULL,
  `quest` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_faq`
--

INSERT INTO `tb_faq` (`id`, `quest`, `answer`) VALUES
(1, 'Dimana alamat kantor Kost.id', 'Jl. Pemuda No.148, Magelang, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56122'),
(2, 'Apakah ada minimal order? Berapa?', 'Tidak ada minimal order.'),
(3, 'Bagaimana cara bayarnya?', 'Pembayaran dapat dilakukan dengan bayar ditempat atau dengan transfer ke rekening bank kami yang akan diinfokan melalui Whatsapp oleh admin kami.'),
(4, 'Apakah bisa datang ke lokasi langsung?', 'Bisa. Silakan datang langsung ke alamat kami di : Jl. Kelengkeng No 17F Prujakan Rt.001/ Rw.032, Sinduharjo, Ngaglik, Sleman, Daerah Istimewa Yogyakarta'),
(5, 'Apakah semua kost di kost.id dapat tepercaya?', 'Iya, semua kost yang ada di kost.id sangat terpercaya. Karena kami sudah mengantongi semua identitas pemilik, agar terhindar dari kejahatan.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id_gambar` int(3) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `slide` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(3) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'VIP'),
(2, 'Standar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(3) NOT NULL,
  `nama_penyewa` varchar(50) NOT NULL,
  `telp` char(13) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `uang_byr` varchar(30) NOT NULL,
  `periode` varchar(20) NOT NULL,
  `status` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `nama_penyewa`, `telp`, `tgl_pesan`, `uang_byr`, `periode`, `status`) VALUES
(17, 'Takim', '08298774666', '2019-07-11', '300.000', '2 bulan', 'Booking');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_sewa`
--

CREATE TABLE `tipe_sewa` (
  `id_tipe` int(3) NOT NULL,
  `nama` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_sewa`
--

INSERT INTO `tipe_sewa` (`id_tipe`, `nama`) VALUES
(1, 'Hari'),
(2, 'Bulan'),
(3, 'Tahun');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `no_telp`, `password`, `level`) VALUES
(13, 'Andika', 'dika@gmail.com', '0897878676778', '8cb2237d0679ca88db6464eac60da96345513964', 'User'),
(14, 'Admin', 'admin', '082111111111', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `data_item`
--
ALTER TABLE `data_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_profilweb`
--
ALTER TABLE `data_profilweb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `howtoorder`
--
ALTER TABLE `howtoorder`
  ADD PRIMARY KEY (`id_cara`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_knsmn`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_faq`
--
ALTER TABLE `tb_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tipe_sewa`
--
ALTER TABLE `tipe_sewa`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_item`
--
ALTER TABLE `data_item`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `howtoorder`
--
ALTER TABLE `howtoorder`
  MODIFY `id_cara` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_knsmn` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_faq`
--
ALTER TABLE `tb_faq`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id_gambar` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tipe_sewa`
--
ALTER TABLE `tipe_sewa`
  MODIFY `id_tipe` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
