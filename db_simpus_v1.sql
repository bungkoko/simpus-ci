-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2018 at 05:28 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simpus_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `simpus_anggota`
--

CREATE TABLE `simpus_anggota` (
  `anggota_kd` varchar(15) NOT NULL,
  `anggota_nm` varchar(45) DEFAULT NULL,
  `anggota_email` varchar(45) DEFAULT NULL,
  `anggota_tmplahir` varchar(45) DEFAULT NULL,
  `anggota_tgllahir` date DEFAULT NULL,
  `anggota_jeniskelamin` enum('L','P') DEFAULT NULL,
  `anggota_notelpon` varchar(13) DEFAULT NULL,
  `anggota_alamat` text,
  `anggota_avatar` text,
  `anggota_tgldaftar` date DEFAULT NULL,
  `anggota_status` enum('active','block') DEFAULT NULL,
  `anggota_username` varchar(45) DEFAULT NULL,
  `anggota_password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `simpus_anggota`
--

INSERT INTO `simpus_anggota` (`anggota_kd`, `anggota_nm`, `anggota_email`, `anggota_tmplahir`, `anggota_tgllahir`, `anggota_jeniskelamin`, `anggota_notelpon`, `anggota_alamat`, `anggota_avatar`, `anggota_tgldaftar`, `anggota_status`, `anggota_username`, `anggota_password`) VALUES
('180001', NULL, 'putridian@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'putridian', '25dc5fc7cfd6ec7da027dcbcce3d9d0e');

-- --------------------------------------------------------

--
-- Table structure for table `simpus_genre`
--

CREATE TABLE `simpus_genre` (
  `genre_kd` int(11) NOT NULL,
  `genre_judul` varchar(45) DEFAULT NULL,
  `genre_singkatan` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `simpus_koleksi`
--

CREATE TABLE `simpus_koleksi` (
  `koleksi_kd` varchar(15) NOT NULL,
  `koleksi_judul` varchar(45) DEFAULT NULL,
  `koleksi_tebal` varchar(45) DEFAULT NULL,
  `koleksi_isbn` varchar(45) DEFAULT NULL,
  `koleksi_deskripsi` text,
  `koleksi_lokasi_rak` varchar(7) DEFAULT NULL,
  `koleksi_stok` int(11) DEFAULT NULL,
  `koleksi_cover` text,
  `simpus_penerbit_penerbit_kd` int(11) NOT NULL,
  `simpus_genre_genre_kd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `simpus_penerbit`
--

CREATE TABLE `simpus_penerbit` (
  `penerbit_kd` int(11) NOT NULL,
  `penerbit_nm` varchar(45) DEFAULT NULL,
  `penerbit_notelp` varchar(13) DEFAULT NULL,
  `penerbit_email` varchar(45) DEFAULT NULL,
  `penerbit_alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `simpus_pengaturan`
--

CREATE TABLE `simpus_pengaturan` (
  `pengaturan_kd` int(11) NOT NULL,
  `pengaturan_lamapinjam` int(11) DEFAULT NULL,
  `pengaturan_dendaperhari` int(11) DEFAULT NULL,
  `pengaturan_limit_pinjam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `simpus_pengaturan`
--

INSERT INTO `simpus_pengaturan` (`pengaturan_kd`, `pengaturan_lamapinjam`, `pengaturan_dendaperhari`, `pengaturan_limit_pinjam`) VALUES
(1, 3, 2000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `simpus_penulis`
--

CREATE TABLE `simpus_penulis` (
  `penulis_kd` varchar(8) NOT NULL,
  `penulis_nm` varchar(45) DEFAULT NULL,
  `penulis_email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `simpus_penulis_has_simpus_koleksi`
--

CREATE TABLE `simpus_penulis_has_simpus_koleksi` (
  `simpus_penulis_penulis_kd` varchar(8) NOT NULL,
  `simpus_koleksi_koleksi_kd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `simpus_sirkulasi`
--

CREATE TABLE `simpus_sirkulasi` (
  `simpus_koleksi_koleksi_kd` varchar(15) NOT NULL,
  `simpus_anggota_anggota_kd` varchar(15) NOT NULL,
  `sirkulasi_pinjam_kd` varchar(12) NOT NULL,
  `sirkulasi_tgl_pinjam` date DEFAULT NULL,
  `sirkulasi_tgl_harus_kembali` date DEFAULT NULL,
  `sirkulasi_tgl_dikembalikan` date DEFAULT NULL,
  `sirkulasi_jumlah_pinjam` int(11) DEFAULT NULL,
  `sirkulasi_keterlambatan` int(11) DEFAULT NULL,
  `sirkulasi_denda` int(11) DEFAULT NULL,
  `sirkulasi_status_pinjam` enum('pinjam','kembali','perpanjang') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `simpus_user`
--

CREATE TABLE `simpus_user` (
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `user_namalengkap` varchar(45) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_status` enum('aktif','blokir') DEFAULT NULL,
  `user_rule` enum('operator','admin','super') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `simpus_user`
--

INSERT INTO `simpus_user` (`user_name`, `user_password`, `user_namalengkap`, `user_email`, `user_status`, `user_rule`) VALUES
('bungkoko', '4fc00490723877758aa1c3728c63fb1b', 'Joko Purwanto', 'joko.purwanto18@gmail.com', 'aktif', 'super');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `simpus_anggota`
--
ALTER TABLE `simpus_anggota`
  ADD PRIMARY KEY (`anggota_kd`);

--
-- Indexes for table `simpus_genre`
--
ALTER TABLE `simpus_genre`
  ADD PRIMARY KEY (`genre_kd`);

--
-- Indexes for table `simpus_koleksi`
--
ALTER TABLE `simpus_koleksi`
  ADD PRIMARY KEY (`koleksi_kd`),
  ADD KEY `fk_simpus_koleksi_simpus_penerbit1_idx` (`simpus_penerbit_penerbit_kd`),
  ADD KEY `fk_simpus_koleksi_simpus_genre1_idx` (`simpus_genre_genre_kd`);

--
-- Indexes for table `simpus_penerbit`
--
ALTER TABLE `simpus_penerbit`
  ADD PRIMARY KEY (`penerbit_kd`);

--
-- Indexes for table `simpus_pengaturan`
--
ALTER TABLE `simpus_pengaturan`
  ADD PRIMARY KEY (`pengaturan_kd`);

--
-- Indexes for table `simpus_penulis`
--
ALTER TABLE `simpus_penulis`
  ADD PRIMARY KEY (`penulis_kd`);

--
-- Indexes for table `simpus_penulis_has_simpus_koleksi`
--
ALTER TABLE `simpus_penulis_has_simpus_koleksi`
  ADD PRIMARY KEY (`simpus_penulis_penulis_kd`,`simpus_koleksi_koleksi_kd`),
  ADD KEY `fk_simpus_penulis_has_simpus_koleksi_simpus_koleksi1_idx` (`simpus_koleksi_koleksi_kd`);

--
-- Indexes for table `simpus_sirkulasi`
--
ALTER TABLE `simpus_sirkulasi`
  ADD PRIMARY KEY (`simpus_koleksi_koleksi_kd`,`simpus_anggota_anggota_kd`,`sirkulasi_pinjam_kd`),
  ADD KEY `fk_simpus_koleksi_has_simpus_anggota_simpus_anggota1_idx` (`simpus_anggota_anggota_kd`),
  ADD KEY `fk_simpus_koleksi_has_simpus_anggota_simpus_koleksi1_idx` (`simpus_koleksi_koleksi_kd`);

--
-- Indexes for table `simpus_user`
--
ALTER TABLE `simpus_user`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `simpus_genre`
--
ALTER TABLE `simpus_genre`
  MODIFY `genre_kd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `simpus_penerbit`
--
ALTER TABLE `simpus_penerbit`
  MODIFY `penerbit_kd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `simpus_pengaturan`
--
ALTER TABLE `simpus_pengaturan`
  MODIFY `pengaturan_kd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `simpus_koleksi`
--
ALTER TABLE `simpus_koleksi`
  ADD CONSTRAINT `fk_simpus_koleksi_simpus_genre1` FOREIGN KEY (`simpus_genre_genre_kd`) REFERENCES `simpus_genre` (`genre_kd`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_simpus_koleksi_simpus_penerbit1` FOREIGN KEY (`simpus_penerbit_penerbit_kd`) REFERENCES `simpus_penerbit` (`penerbit_kd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `simpus_penulis_has_simpus_koleksi`
--
ALTER TABLE `simpus_penulis_has_simpus_koleksi`
  ADD CONSTRAINT `fk_simpus_penulis_has_simpus_koleksi_simpus_koleksi1` FOREIGN KEY (`simpus_koleksi_koleksi_kd`) REFERENCES `simpus_koleksi` (`koleksi_kd`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_simpus_penulis_has_simpus_koleksi_simpus_penulis1` FOREIGN KEY (`simpus_penulis_penulis_kd`) REFERENCES `simpus_penulis` (`penulis_kd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `simpus_sirkulasi`
--
ALTER TABLE `simpus_sirkulasi`
  ADD CONSTRAINT `fk_simpus_koleksi_has_simpus_anggota_simpus_anggota1` FOREIGN KEY (`simpus_anggota_anggota_kd`) REFERENCES `simpus_anggota` (`anggota_kd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_simpus_koleksi_has_simpus_anggota_simpus_koleksi1` FOREIGN KEY (`simpus_koleksi_koleksi_kd`) REFERENCES `simpus_koleksi` (`koleksi_kd`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
