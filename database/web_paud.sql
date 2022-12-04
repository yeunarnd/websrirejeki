-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 07:08 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_paud`
--

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`id`, `tahun`) VALUES
(1, 2022),
(2, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `kd_daftar` int(11) NOT NULL,
  `tgl_daftar` varchar(15) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
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
  `akta_lahir` varchar(20) NOT NULL DEFAULT 'default.jpg',
  `kartu_keluarga` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `alasan_ditolak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`kd_daftar`, `tgl_daftar`, `nama_siswa`, `umur`, `kelas`, `tempat_lahir`, `tgl_lahir`, `jkel`, `agama`, `alamat`, `nama_ayah`, `umur_ayah`, `alamat_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `telepon_ayah`, `nama_ibu`, `umur_ibu`, `alamat_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `telepon_ibu`, `akta_lahir`, `kartu_keluarga`, `status`, `alasan_ditolak`) VALUES
(23, '2022-10-09', 'Andhika Trian Sakti Evryan Jaya', 2, 'A', 'Malang', '2020-07-21', 'Laki-laki', 'Islam', 'Jl. Muharto 7 RT 3 RW 10', 'Untung Saring', 45, 'Jl. Muharto 7 RT 3 RW 10', 'SMP', 'PKL', '085791535355', 'Yetik Aris Santi', 45, 'Jl. Muharto 7 RT 3 RW 10', 'SD', 'Pedagang', '083835737345', 'akta_lahir1665328147', 'kartu_keluarga166532', 1, ''),
(24, '2022-10-09', 'Anindia Dwi Faza Putri Lestari', 3, 'A', 'Malang', '2019-09-04', 'Perempuan', 'Islam', 'Jl. Muharto 7 RT 3 RW 10', 'Untung Saring', 45, 'Jl. Muharto 7 RT 3 RW 10', 'SMP', 'PKL', '085791535355', 'Yetik Aris Santi', 45, 'Jl. Muharto 7 RT 3 RW 10', 'SD', 'Pedagang', '083835737345', 'akta_lahir1665328332', 'kartu_keluarga166532', 1, ''),
(25, '2022-10-09', 'Yeun Arinda Eka Sari', 4, 'B', 'Merauke', '2018-10-23', 'Perempuan', 'Islam', 'Jl. Muharto 7 RT 3 RW 10', 'Untung Saring', 45, 'Jl. Muharto 7 RT 3 RW 10', 'SMP', 'PKL', '085791535355', 'Yetik Aris Santi', 45, 'Jl. Muharto 7 RT 3 RW 10', 'SD', 'Pedagang', '083835737345', 'akta_lahir1665328445', 'kartu_keluarga166532', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `dispensasi`
--

CREATE TABLE `dispensasi` (
  `id` int(11) NOT NULL,
  `no_induk` varchar(11) NOT NULL,
  `nama_dispensasi` varchar(50) NOT NULL,
  `alasan_pengajuan` longtext NOT NULL,
  `tgl_pengajuan_bayar` date NOT NULL,
  `status` int(11) NOT NULL,
  `alasanditolak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispensasi`
--

INSERT INTO `dispensasi` (`id`, `no_induk`, `nama_dispensasi`, `alasan_pengajuan`, `tgl_pengajuan_bayar`, `status`, `alasanditolak`) VALUES
(1, '40918', 'Dispensasi uang gedung', 'dana belum cukup', '2022-07-31', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pembayaran`
--

CREATE TABLE `jenis_pembayaran` (
  `kode_jenis` varchar(10) NOT NULL,
  `jenis_bayar` varchar(20) NOT NULL,
  `dateline` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pembayaran`
--

INSERT INTO `jenis_pembayaran` (`kode_jenis`, `jenis_bayar`, `dateline`) VALUES
('G1', 'Uang Gedung', '1'),
('S1', 'SPP', '11');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kode_pembayaran` varchar(50) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `jenis_bayar` varchar(20) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `jumlah_bayar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kode_pembayaran`, `nama_siswa`, `jenis_bayar`, `tgl_pembayaran`, `jumlah_bayar`) VALUES
('PS1', 'Andhika', 'SPP', '2021-12-09', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nomor_induk` varchar(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jkel` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nomor_induk`, `nama_siswa`, `jkel`, `alamat`, `kelas`, `tahun_ajaran`, `biaya`) VALUES
(12, '2201', 'Andhika Trian Sakti Evryan Jaya', 'Laki-laki', 'Jl. Muharto 7 RT 3 RW 10', 'A', '2022/2023', 50000),
(13, '2202', 'Anindia Dwi Faza Putri Lestari', 'Perempuan', 'Jl. Muharto 7 RT 3 RW 10', 'A', '2022/2023', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_spp` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nm_tagihan` varchar(50) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `jml` int(11) NOT NULL,
  `ket` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id_spp`, `id_siswa`, `nm_tagihan`, `jatuh_tempo`, `bulan`, `jml`, `ket`, `id_user`) VALUES
(1, 12, 'SPP', '2022-07-11', 'Juli 2022', 50000, '', 3),
(2, 12, 'SPP', '2022-08-11', 'Agustus 2022', 50000, '', 3),
(3, 12, 'SPP', '2022-09-11', 'September 2022', 50000, '', 3),
(4, 12, 'SPP', '2022-10-11', 'Oktober 2022', 50000, '', 3),
(5, 12, 'SPP', '2022-11-11', 'November 2022', 50000, '', 3),
(6, 12, 'SPP', '2022-12-11', 'Desember 2022', 50000, '', 3),
(7, 12, 'SPP', '2023-01-11', 'Januari 2023', 50000, '', 3),
(8, 12, 'SPP', '2023-02-11', 'Februari 2023', 50000, '', 3),
(9, 12, 'SPP', '2023-03-11', 'Maret 2023', 50000, '', 3),
(10, 12, 'SPP', '2023-04-11', 'April 2023', 50000, '', 3),
(11, 12, 'SPP', '2023-05-11', 'Mei 2023', 50000, '', 3),
(12, 12, 'SPP', '2023-06-11', 'Juni 2023', 50000, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tagihan_`
--

CREATE TABLE `tagihan_` (
  `kode_tagihan` varchar(11) NOT NULL,
  `kd_daftar` int(11) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `nama_tagihan` varchar(20) NOT NULL,
  `jumlah_tagihan` int(11) NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan_`
--

INSERT INTO `tagihan_` (`kode_tagihan`, `kd_daftar`, `nama_siswa`, `nama_tagihan`, `jumlah_tagihan`, `tgl_jatuh_tempo`) VALUES
('TG1', 0, 'Yeun Arinda', 'Tagihan uang gedung', 200000, '2022-07-15'),
('TS1', 7, 'Andhika Trian Sakti', 'SPP', 50000, '2021-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'Yeun Arinda Eka Sari', 'admin@gmail.com', 'image.jpg', '$2y$10$Ju6rfMTEVtux8PU3CplZhOtL9RX1MUm8D00CrBerajPqjloqXvnNS', 1, 1, 1656404855),
(3, 'Purwati Ningsih', 'stafadmin@gmail.com', 'image.jpg', '$2y$10$3wPfW/FAlQk1w43NwLBVQufxHFDdKPZzrw7gPdpNP4PkkF3Jyl7se', 2, 1, 1656595716),
(4, 'Juwarsri', 'keuangan@gmail.com', 'image.jpg', '$2y$10$V3e.Sz2nvJ0yPnh3SvfRJelu.UvwnAtZ7ODsWHRJeZo8C6XmrYZ.C', 3, 1, 1656595766),
(5, 'Sriati', 'pembina@gmail.com', 'image.jpg', '$2y$10$AEqE5aAyRHAxpqGViZmvkuGhvw.2i6qvN/ZF5hENfA4Y3b0d1.RIO', 4, 1, 1656595978),
(7, 'Andhika Trian Sakti Evryan Jaya', 'andhikatrian@gmail.com', 'image.jpg', '$2y$10$cMqBlqULd.p4uAdQEQ/FpuZEC.jTnL9GVn3S1niyG/yF1UI0UQyPa', 5, 1, 1660227855);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 1, 3),
(5, 1, 4),
(6, 1, 5),
(7, 1, 7),
(8, 2, 4),
(9, 2, 5),
(10, 3, 1),
(11, 3, 6),
(12, 3, 7),
(13, 4, 8),
(15, 5, 1),
(16, 4, 1),
(17, 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'User'),
(2, 'Admin'),
(4, 'ppdb'),
(5, 'siswa'),
(6, 'data siswa'),
(7, 'keuangan'),
(8, 'laporan'),
(9, 'data keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Stafadmin'),
(3, 'Keuangan'),
(4, 'Pembina'),
(5, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `url` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(4, 2, 'Role', 'admin/role', 'fas fa-fw fa-folder', 1),
(5, 2, 'Menu', 'menu', 'fas fa-fw fa-folder-open', 1),
(6, 2, 'Submenu', 'submenu', 'fas fa-fw fa-user-cog', 1),
(7, 4, 'Pendaftaran', 'daftar', 'fas fa-fw fa-users', 1),
(8, 5, 'Daftar Siswa', 'siswa', 'fas fa-fw fa-user-tie', 1),
(9, 7, 'Tagihan Siswa', 'tagihan', 'fas fa-fw fa-file-invoice', 1),
(10, 7, 'Pengajuan Dispensasi', 'dispensasi', 'fas fa-fw fa-clock', 1),
(11, 7, 'Jenis Pembayaran', 'jenisbayar', 'fas fa-fw fa-dollar-sign', 1),
(12, 7, 'Pembayaran', 'pembayaran', 'fas fa-fw fa-money-bill-alt', 1),
(13, 6, 'Daftar Siswa', 'data_siswa', 'fas fa-fw fa-user-tie', 1),
(14, 8, 'Laporan Pendaftaran', 'laporan/lap_daftar', 'fas fa-fw fa-file-excel', 1),
(15, 8, 'Laporan Pembayaran', 'laporan/lap_bayar', 'fas fa-fw fa-file-alt', 1),
(16, 9, 'Daftar Tagihan', 'data_tagihan', 'fas fa-fw fa-file-invoice', 1),
(17, 9, 'Pengajuan Dispensasi', 'data_dispen', 'fas fa-fw fa-clock', 1),
(18, 9, 'Pembayaran', 'data_bayar', 'fas fa-fw fa-money-bill-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`kd_daftar`);

--
-- Indexes for table `dispensasi`
--
ALTER TABLE `dispensasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kode_pembayaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_spp`);

--
-- Indexes for table `tagihan_`
--
ALTER TABLE `tagihan_`
  ADD PRIMARY KEY (`kode_tagihan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `kd_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `dispensasi`
--
ALTER TABLE `dispensasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
