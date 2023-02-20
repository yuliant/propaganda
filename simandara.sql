-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 06:27 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simandara`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggaran`
--

CREATE TABLE `anggaran` (
  `id_ang` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggaran`
--

INSERT INTO `anggaran` (`id_ang`, `nama`, `jumlah`) VALUES
(1, 'Anggaran Utama', 25000000),
(2, 'Subag1', 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `bap`
--

CREATE TABLE `bap` (
  `id_bap` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `tgl_l` date NOT NULL,
  `paspor` varchar(128) NOT NULL,
  `masa` date NOT NULL,
  `niora` varchar(128) NOT NULL,
  `kebangsaan` varchar(128) NOT NULL,
  `sponsor` varchar(128) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jenis_doc` varchar(128) NOT NULL,
  `pasal` varchar(128) NOT NULL,
  `pelanggaran` varchar(50) NOT NULL,
  `no_putusan` varchar(50) NOT NULL,
  `isi` varchar(128) NOT NULL,
  `tgl_putusan` date NOT NULL,
  `foto_paspor` text NOT NULL,
  `foto_wna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deportasi`
--

CREATE TABLE `deportasi` (
  `id_deportasi` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `tgl_l` date NOT NULL,
  `paspor` varchar(128) NOT NULL,
  `masa` date NOT NULL,
  `niora` varchar(128) NOT NULL,
  `kebangsaan` varchar(128) NOT NULL,
  `sponsor` varchar(128) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jenis_doc` varchar(128) NOT NULL,
  `pasal` varchar(128) NOT NULL,
  `pelanggaran` varchar(50) NOT NULL,
  `no_putusan` varchar(50) NOT NULL,
  `isi` varchar(128) NOT NULL,
  `tgl_putusan` date NOT NULL,
  `foto_paspor` text NOT NULL,
  `foto_wna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deteni`
--

CREATE TABLE `deteni` (
  `id_deteni` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `tgl_l` date NOT NULL,
  `paspor` varchar(128) NOT NULL,
  `masa` date NOT NULL,
  `niora` varchar(128) NOT NULL,
  `kebangsaan` varchar(128) NOT NULL,
  `sponsor` varchar(128) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jenis_doc` varchar(128) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `pasal` varchar(128) NOT NULL,
  `pelanggaran` varchar(50) NOT NULL,
  `no_putusan` varchar(50) NOT NULL,
  `isi` varchar(128) NOT NULL,
  `tgl_putusan` date NOT NULL,
  `foto_paspor` text NOT NULL,
  `foto_wna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pora`
--

CREATE TABLE `pora` (
  `id_pora` int(11) NOT NULL,
  `kegiatan` varchar(128) NOT NULL,
  `tempat` varchar(128) NOT NULL,
  `tgl` date NOT NULL,
  `anggota` varchar(128) NOT NULL,
  `target` varchar(128) NOT NULL,
  `hasil` varchar(128) NOT NULL,
  `foto1` text,
  `foto2` text,
  `foto3` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projustisia`
--

CREATE TABLE `projustisia` (
  `id_projus` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `tgl_l` date NOT NULL,
  `paspor` varchar(128) NOT NULL,
  `masa` date NOT NULL,
  `niora` varchar(128) NOT NULL,
  `kebangsaan` varchar(128) NOT NULL,
  `sponsor` varchar(128) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jenis_doc` varchar(128) NOT NULL,
  `pasal` varchar(128) NOT NULL,
  `pelanggaran` varchar(50) NOT NULL,
  `no_putusan` varchar(50) NOT NULL,
  `isi` varchar(128) NOT NULL,
  `tgl_putusan` date NOT NULL,
  `foto_paspor` text NOT NULL,
  `foto_wna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tak`
--

CREATE TABLE `tak` (
  `id_tak` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `tgl_l` date NOT NULL,
  `paspor` varchar(128) NOT NULL,
  `masa` date NOT NULL,
  `niora` varchar(128) NOT NULL,
  `kebangsaan` varchar(128) NOT NULL,
  `sponsor` varchar(128) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jenis_doc` varchar(128) NOT NULL,
  `pasal` varchar(128) NOT NULL,
  `pelanggaran` varchar(50) NOT NULL,
  `no_putusan` varchar(50) NOT NULL,
  `isi` varchar(128) NOT NULL,
  `tgl_putusan` date NOT NULL,
  `foto_paspor` text NOT NULL,
  `foto_wna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'admin', 'admin', 'default.png', '$2y$10$8/HrmRcKeoN7gA0H/7AbxeoTCXnGEwo8TxCPFbzuz8bVIgqYYePQe', 1, 1, 1611730617),
(7, 'User 1', 'user1', 'default.png', '$2y$10$dZGhzSb81ZEK0buR92s.5u5.UMTzg.9QGM9LyOyio7iIbBzDDattO', 2, 1, 1613018751);

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
(5, 1, 4),
(6, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Kegiatan'),
(5, 'Anggaran');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, '1', 'Tambah User', 'admin', 'fas fa-fw fa-user-plus', 1),
(2, '2', 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, '2', 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, '3', 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, '3', 'Submenu Management', 'menu/submenu', 'far fa-fw fa-folder-open', 1),
(7, '1', 'Role', 'admin/role', 'fas fa-fw fa-user-tag', 0),
(8, '2', 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, '4', 'TAK', 'kegiatan/tak', 'far fa-fw fa-clipboard', 1),
(10, '4', 'Projustisia', 'kegiatan/projustisia', 'far fa-fw fa-clipboard', 1),
(11, '4', 'Deportasi', 'kegiatan/deportasi', 'far fa-fw fa-clipboard', 1),
(12, '4', 'Deteni', 'kegiatan/deteni', 'far fa-fw fa-clipboard', 1),
(13, '4', 'Tim Pora', 'kegiatan/pora', 'far fa-fw fa-clipboard', 1),
(14, '4', 'BAP WNA', 'kegiatan/bap', 'far fa-fw fa-clipboard', 1),
(15, '4', 'Anggaran', 'kegiatan/anggaran', 'far fa-fw fa-money-bill-alt', 1),
(16, '5', 'Detail Anggaran', 'anggaran', 'far fa-fw fa-money-bill-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggaran`
--
ALTER TABLE `anggaran`
  ADD PRIMARY KEY (`id_ang`);

--
-- Indexes for table `bap`
--
ALTER TABLE `bap`
  ADD PRIMARY KEY (`id_bap`);

--
-- Indexes for table `deportasi`
--
ALTER TABLE `deportasi`
  ADD PRIMARY KEY (`id_deportasi`);

--
-- Indexes for table `deteni`
--
ALTER TABLE `deteni`
  ADD PRIMARY KEY (`id_deteni`);

--
-- Indexes for table `pora`
--
ALTER TABLE `pora`
  ADD PRIMARY KEY (`id_pora`);

--
-- Indexes for table `projustisia`
--
ALTER TABLE `projustisia`
  ADD PRIMARY KEY (`id_projus`);

--
-- Indexes for table `tak`
--
ALTER TABLE `tak`
  ADD PRIMARY KEY (`id_tak`);

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
-- AUTO_INCREMENT for table `anggaran`
--
ALTER TABLE `anggaran`
  MODIFY `id_ang` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bap`
--
ALTER TABLE `bap`
  MODIFY `id_bap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deportasi`
--
ALTER TABLE `deportasi`
  MODIFY `id_deportasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deteni`
--
ALTER TABLE `deteni`
  MODIFY `id_deteni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pora`
--
ALTER TABLE `pora`
  MODIFY `id_pora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projustisia`
--
ALTER TABLE `projustisia`
  MODIFY `id_projus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tak`
--
ALTER TABLE `tak`
  MODIFY `id_tak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
