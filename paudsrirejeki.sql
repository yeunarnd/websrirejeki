-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 04:32 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paudsrirejeki`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `kd_daftar` int(11) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nm_calon_siswa` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jkel` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `umur_ayah` int(11) NOT NULL,
  `alamat_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(10) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `telepon_ayah` varchar(13) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `umur_ibu` int(11) NOT NULL,
  `alamat_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(10) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `telepon_ibu` varchar(13) NOT NULL,
  `berkas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`kd_daftar`, `tgl_daftar`, `nm_calon_siswa`, `umur`, `kelas`, `tempat_lahir`, `tgl_lahir`, `jkel`, `agama`, `alamat`, `nama_ayah`, `umur_ayah`, `alamat_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `telepon_ayah`, `nama_ibu`, `umur_ibu`, `alamat_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `telepon_ibu`, `berkas`) VALUES
(1, '2021-12-01', 'Andhika', 1, 'A', 'Malang', '2011-07-21', 'Laki-laki', 'Islam', 'Jl. Muharto', 'Untung', 45, 'Jl. Muharto', 'SMP', 'PKL', '0857', 'Yetik', 45, 'Jl. Muharto', 'SD', 'Pedagang', '0838', '');

-- --------------------------------------------------------

--
-- Table structure for table `dispensasi`
--

CREATE TABLE `dispensasi` (
  `kode_dispensasi` varchar(10) NOT NULL,
  `kd_jenis_bayar` varchar(10) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `alasan_pengajuan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `no_induk` varchar(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelompok_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no_induk`, `nama_siswa`, `jenis_kelamin`, `alamat`, `kelompok_kelas`) VALUES
('0001', 'Andhika', 'Laki-laki', 'Jl. Muharto', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `kode_tagihan` varchar(11) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `nama_tagihan` varchar(20) NOT NULL,
  `jumlah_tagihan` int(11) NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vw_password` varchar(50) NOT NULL,
  `user_level` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`user_id`, `username`, `email`, `password`, `vw_password`, `user_level`) VALUES
(1, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1'),
(2, 'Staff Admin', 'staffadmin@gmail.com', '96d02fb19d339c27eafbf4db5f8586b4', 'staffadmin', '2'),
(3, 'Keuangan', 'keuangan@gmail.com', 'a4151d4b2856ec63368a7c784b1f0a6e', 'keuangan', '3'),
(4, 'Pembina', 'pembina@gmail.com', '377a610343a9812be993e0e755b2e00f', 'pembina', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`kd_daftar`);

--
-- Indexes for table `dispensasi`
--
ALTER TABLE `dispensasi`
  ADD PRIMARY KEY (`kode_dispensasi`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`kode_tagihan`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `kd_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
