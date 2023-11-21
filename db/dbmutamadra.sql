-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2023 pada 16.53
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmutamadra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_sekolah`
--

CREATE TABLE `daftar_sekolah` (
  `id` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `surat_registrasi` varchar(250) NOT NULL,
  `tgl_buka` date NOT NULL,
  `tgl_tutup` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_siswa`
--

CREATE TABLE `daftar_siswa` (
  `id` int(11) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `surat` varchar(250) NOT NULL,
  `tujuan_sekolah` varchar(100) NOT NULL,
  `tujuan` enum('Siswa Baru','Perpindahan') NOT NULL,
  `status` enum('Diterima','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `npsn` varchar(20) NOT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kab_kota` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `jenjang` enum('SMA','SMP') DEFAULT NULL,
  `surat_sekolah` varchar(250) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `id_sekolah` int(11) DEFAULT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `tmpt_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_sekolah`
--
ALTER TABLE `daftar_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- Indeks untuk tabel `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `daftar_sekolah`
--
ALTER TABLE `daftar_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_sekolah`
--
ALTER TABLE `daftar_sekolah`
  ADD CONSTRAINT `daftar_sekolah_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
