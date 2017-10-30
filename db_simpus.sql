-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 08 Feb 2017 pada 20.27
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpus_anggota`
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
  `anggota_status` enum('pelajar','mahasiswa','umum') DEFAULT NULL,
  `anggota_username` varchar(45) DEFAULT NULL,
  `anggota_password` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `simpus_anggota`
--

INSERT INTO `simpus_anggota` (`anggota_kd`, `anggota_nm`, `anggota_email`, `anggota_tmplahir`, `anggota_tgllahir`, `anggota_jeniskelamin`, `anggota_notelpon`, `anggota_alamat`, `anggota_avatar`, `anggota_tgldaftar`, `anggota_status`, `anggota_username`, `anggota_password`) VALUES
('160001', 'Joko Purwanto', 'joko.purwanto18@gmail.com', 'Curup', '1989-05-18', 'L', NULL, 'HOS Cokroaminoto', NULL, '2016-12-17', 'mahasiswa', NULL, NULL),
('160002', 'Sarah Kusuma', 'sarahkusumawardhani@gmail.com', 'Jakarta', '2001-12-01', 'P', '085268690818', 'Jalan Proklamasi No 175 Menteng', '/upload/anggota/510869ef42c3ce67b188eceb33e6cb52.jpg', '2016-12-17', 'pelajar', NULL, NULL),
('160003', 'John Tandukalo', 'john@gmail.com', 'Curup', '0000-00-00', 'L', '085268690818', 'asdadasdsadasadsadadsa', '/upload/member/865016a4bb5eb53f81fd2d1ffb35c87f.png', '2017-02-05', NULL, 'John', 'e99a18c428cb38d5f260853678922e03'),
('160004', 'Kusumawati', 'kusuma@gmail.com', 'Bengkulu', '0000-00-00', 'L', '08900993333', 'Padang Harapan', '/upload/member/056f487b50184d9ae7be2a38acbdf4a1.png', '2017-02-05', NULL, 'kusuma', 'e99a18c428cb38d5f260853678922e03'),
('160005', 'Wardhana ', 'wardhana@gmail.com', 'Bengkulu', '0000-00-00', 'L', '08900993333', 'Padang Harapan', '/upload/member/d7209c16a6c7146c1503bba88c938397.png', '2017-02-05', NULL, 'wardhana', 'e99a18c428cb38d5f260853678922e03'),
('160006', 'Arjuna', 'arjuna@gmail.com', 'Bengkulu', '1932-04-03', 'L', '08900993333', 'Padang Harapan', '/upload/member/46c209eda8726a7e01e9b0ea1118550c.png', '2017-02-05', NULL, 'Arjuna', 'e99a18c428cb38d5f260853678922e03'),
('160007', 'Rani', 'rani@gmail.com', 'Jogja', '1989-04-18', 'L', '08575757555', 'Kotagede', '/upload/member/af37e9845808cb15b0ab71d17bcaecad.png', '2017-02-06', NULL, 'Rani', 'e99a18c428cb38d5f260853678922e03'),
('160008', 'Roni', 'rani@gmail.com', 'Jogja', '1989-04-18', 'L', '08575757555', 'Kotagede', '/upload/member/dfe38b5745926a1956807d009eea750b.png', '2017-02-06', NULL, 'Roni', 'e99a18c428cb38d5f260853678922e03'),
('160009', 'Roni Sianturi', 'sianturi.roni@gmail.com', 'Jogja', '1989-05-18', 'L', '08575757555', 'Kotagede', '/upload/member/b34c40818e962ebc542f1f5ced5dbbaf.png', '2017-02-06', NULL, 'Sianturi', 'e99a18c428cb38d5f260853678922e03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpus_genre`
--

CREATE TABLE `simpus_genre` (
  `genre_kd` int(11) NOT NULL,
  `genre_judul` varchar(45) DEFAULT NULL,
  `genre_singkatan` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `simpus_genre`
--

INSERT INTO `simpus_genre` (`genre_kd`, `genre_judul`, `genre_singkatan`) VALUES
(1, 'Fiksi', 'FKS'),
(2, 'Agama', 'AGM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpus_koleksi`
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
  `simpus_genre_genre_kd` int(11) NOT NULL,
  `simpus_penerbit_penerbit_kd` int(11) NOT NULL,
  `simpus_penulis_penulis_kd` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `simpus_koleksi`
--

INSERT INTO `simpus_koleksi` (`koleksi_kd`, `koleksi_judul`, `koleksi_tebal`, `koleksi_isbn`, `koleksi_deskripsi`, `koleksi_lokasi_rak`, `koleksi_stok`, `koleksi_cover`, `simpus_genre_genre_kd`, `simpus_penerbit_penerbit_kd`, `simpus_penulis_penulis_kd`) VALUES
('FKS-0001', 'Change Your Habits', '200 ', 'XXXX-XXXX-XXXX-XXXX', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', 'A1', 5, NULL, 1, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpus_peminjaman`
--

CREATE TABLE `simpus_peminjaman` (
  `simpus_anggota_anggota_kd` varchar(15) NOT NULL,
  `simpus_koleksi_koleksi_kd` varchar(15) NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `tgl_dikembalikan` date DEFAULT NULL,
  `denda` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpus_penerbit`
--

CREATE TABLE `simpus_penerbit` (
  `penerbit_kd` int(11) NOT NULL,
  `penerbit_nm` varchar(45) DEFAULT NULL,
  `penerbit_notelp` varchar(13) DEFAULT NULL,
  `penerbit_email` varchar(45) DEFAULT NULL,
  `penerbit_alamat` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpus_pengaturan`
--

CREATE TABLE `simpus_pengaturan` (
  `pengaturan_lamapinjam` int(11) NOT NULL,
  `pengaturan_dendaperhari` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpus_penulis`
--

CREATE TABLE `simpus_penulis` (
  `penulis_kd` varchar(8) NOT NULL,
  `penulis_nm` varchar(45) DEFAULT NULL,
  `penulis_email` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpus_user`
--

CREATE TABLE `simpus_user` (
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `user_namalengkap` varchar(45) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_status` enum('aktif','blokir') DEFAULT NULL,
  `user_rule` enum('operator','admin','super') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `simpus_user`
--

INSERT INTO `simpus_user` (`user_name`, `user_password`, `user_namalengkap`, `user_email`, `user_status`, `user_rule`) VALUES
('superadmin', '0192023a7bbd73250516f069df18b500', 'Joko Purwanto', 'joko.purwanto18@gmail.com', 'aktif', 'super');

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
  ADD PRIMARY KEY (`koleksi_kd`,`simpus_penerbit_penerbit_kd`),
  ADD KEY `fk_simpus_koleksi_simpus_genre1_idx` (`simpus_genre_genre_kd`),
  ADD KEY `fk_simpus_koleksi_simpus_penerbit1_idx` (`simpus_penerbit_penerbit_kd`),
  ADD KEY `fk_simpus_koleksi_simpus_penulis1_idx` (`simpus_penulis_penulis_kd`);

--
-- Indexes for table `simpus_peminjaman`
--
ALTER TABLE `simpus_peminjaman`
  ADD PRIMARY KEY (`simpus_anggota_anggota_kd`,`simpus_koleksi_koleksi_kd`),
  ADD KEY `fk_simpus_anggota_has_simpus_koleksi_simpus_koleksi1_idx` (`simpus_koleksi_koleksi_kd`),
  ADD KEY `fk_simpus_anggota_has_simpus_koleksi_simpus_anggota_idx` (`simpus_anggota_anggota_kd`);

--
-- Indexes for table `simpus_penerbit`
--
ALTER TABLE `simpus_penerbit`
  ADD PRIMARY KEY (`penerbit_kd`);

--
-- Indexes for table `simpus_pengaturan`
--
ALTER TABLE `simpus_pengaturan`
  ADD PRIMARY KEY (`pengaturan_lamapinjam`);

--
-- Indexes for table `simpus_penulis`
--
ALTER TABLE `simpus_penulis`
  ADD PRIMARY KEY (`penulis_kd`);

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
  MODIFY `genre_kd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
