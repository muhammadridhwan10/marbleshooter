-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2022 pada 06.23
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marbleshooter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(64) NOT NULL,
  `nama_admin` varchar(64) NOT NULL,
  `email_admin` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `game`
--

CREATE TABLE `game` (
  `id_game` int(64) NOT NULL,
  `nama_game` varchar(64) NOT NULL,
  `id_publisher` int(64) NOT NULL,
  `nama_publisher` varchar(64) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `kategori` varchar(16) NOT NULL,
  `harga` varchar(64) NOT NULL,
  `gambar_game` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(64) NOT NULL,
  `id_game` int(64) NOT NULL,
  `harga` varchar(64) NOT NULL,
  `jumlah` varchar(64) NOT NULL,
  `tanggal` varchar(64) NOT NULL,
  `id_user` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(255) NOT NULL,
  `id` int(64) NOT NULL,
  `id_game` int(64) NOT NULL,
  `jumlah_pembayaran` varchar(64) NOT NULL,
  `nama_user` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `playgames`
--

CREATE TABLE `playgames` (
  `id_game` int(11) NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `gambar_game` varchar(255) NOT NULL,
  `deskripsi_game` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `link_game` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `publisher`
--

CREATE TABLE `publisher` (
  `id_publisher` int(64) NOT NULL,
  `nama_publisher` varchar(64) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `email_publisher` varchar(64) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` varchar(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `image` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `inacash` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`,`id_publisher`),
  ADD KEY `id_publisher` (`id_publisher`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`,`id_game`,`id_user`),
  ADD KEY `id_game` (`id_game`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`,`id`,`id_game`),
  ADD KEY `id_user` (`id`),
  ADD KEY `id_game` (`id_game`);

--
-- Indeks untuk tabel `playgames`
--
ALTER TABLE `playgames`
  ADD PRIMARY KEY (`id_game`);

--
-- Indeks untuk tabel `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id_publisher`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `game`
--
ALTER TABLE `game`
  MODIFY `id_game` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `playgames`
--
ALTER TABLE `playgames`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id_publisher` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
