-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Mar 2019 pada 01.36
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `idmakanan` int(2) NOT NULL,
  `namamakanan` varchar(50) DEFAULT NULL,
  `harga` int(4) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `createdby` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`idmakanan`, `namamakanan`, `harga`, `image`, `created`, `createdby`) VALUES
(1, 'Lalapan Ayam', 250000, 'makanan-20181106121034.png', '2018-11-06 20:10:34', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `idmeja` int(2) NOT NULL,
  `namameja` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdby` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`idmeja`, `namameja`, `created`, `createdby`) VALUES
(1, 'Meja 1', '2018-11-05 10:50:46', 1),
(2, 'Meja 2', '2018-11-07 16:08:40', 1),
(3, 'Meja 3', '2018-11-07 16:08:48', 1),
(4, 'Meja 4', '2018-11-07 16:08:59', 1),
(5, 'Meja 5', '2018-11-07 16:09:06', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `idminuman` int(2) NOT NULL,
  `namaminuman` varchar(50) DEFAULT NULL,
  `harga` int(4) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `createdby` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`idminuman`, `namaminuman`, `harga`, `image`, `created`, `createdby`) VALUES
(1, 'Jus Jeruk', 15000, 'minuman-20181106122247.png', '2018-11-06 20:22:47', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `idpesanan` int(4) NOT NULL,
  `meja_idmeja` int(2) NOT NULL,
  `tanggal` date NOT NULL,
  `namapesanan` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `status` enum('baru','proses','selesai','') NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`idpesanan`, `meja_idmeja`, `tanggal`, `namapesanan`, `jumlah`, `status`, `created`) VALUES
(1, 1, '2018-10-11', 'Lalapan Ayam', 1, 'selesai', '2018-11-07 14:45:52'),
(2, 1, '2018-12-11', 'Jus Jeruk', 1, 'selesai', '2018-11-07 14:45:54'),
(3, 1, '2018-11-08', 'Lalapan Ayam', 2, 'selesai', '2018-11-07 14:56:34'),
(4, 1, '2019-01-31', 'Jus Jeruk', 2, 'selesai', '2018-11-07 14:56:37'),
(7, 3, '2018-11-07', 'Lalapan Ayam', 3, 'selesai', '2018-11-07 16:10:02'),
(8, 3, '2018-11-07', 'Jus Jeruk', 3, 'selesai', '2018-11-07 16:10:04'),
(11, 2, '2018-11-07', 'Lalapan Ayam', 2, 'selesai', '2018-11-07 16:12:34'),
(12, 2, '2018-11-07', 'Jus Jeruk', 2, 'selesai', '2018-11-07 16:12:37'),
(13, 4, '2018-11-07', 'Lalapan Ayam', 4, 'selesai', '2018-11-07 16:13:01'),
(14, 4, '2018-11-07', 'Jus Jeruk', 4, 'selesai', '2018-11-07 16:13:03'),
(15, 1, '2018-11-07', 'Lalapan Ayam', 1, 'proses', '2018-11-07 16:15:11'),
(16, 1, '2018-11-07', 'Jus Jeruk', 1, 'proses', '2018-11-07 16:15:13'),
(17, 3, '2018-11-24', 'Lalapan Ayam', 1, 'proses', '2018-11-24 14:52:44'),
(18, 3, '2018-11-24', 'Jus Jeruk', 1, 'proses', '2018-11-24 14:52:48'),
(19, 4, '2018-11-24', 'Lalapan Ayam', 4, 'proses', '2018-11-24 15:00:20'),
(20, 4, '2018-11-24', 'Jus Jeruk', 4, 'proses', '2018-11-24 15:00:22'),
(21, 1, '2019-02-16', 'Jus Jeruk', 0, 'baru', '2019-02-16 08:30:53'),
(22, 1, '2019-02-16', 'Jus Jeruk', 0, 'baru', '2019-02-16 08:30:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `idusers` int(2) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdby` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`idusers`, `fullname`, `username`, `password`, `created`, `createdby`) VALUES
(1, 'Administrator', 'admin', 'admin', '2018-11-01 00:00:00', 1),
(2, 'Papua Code', 'user', 'user', '2018-11-05 21:51:50', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`idmakanan`);

--
-- Indeks untuk tabel `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`idmeja`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`idminuman`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idpesanan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `idmakanan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `meja`
--
ALTER TABLE `meja`
  MODIFY `idmeja` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `minuman`
--
ALTER TABLE `minuman`
  MODIFY `idminuman` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idpesanan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
