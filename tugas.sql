-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2020 pada 08.49
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjumlahan`
--

CREATE TABLE `penjumlahan` (
  `id` int(3) NOT NULL,
  `a` double NOT NULL,
  `b` double NOT NULL,
  `c` double NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjumlahan`
--

INSERT INTO `penjumlahan` (`id`, `a`, `b`, `c`, `ket`) VALUES
(113, 12, 23, 35, 'E'),
(114, 39, 23, 62, 'E'),
(115, 23, 44, 67, 'E'),
(116, 23, 45, 68, 'E'),
(117, 11, 22, 33, 'E'),
(118, 23, 34, 57, 'E'),
(119, 23, 56, 79, 'D'),
(120, 1, 1, 2, 'E'),
(121, 12, 1, 13, 'E'),
(122, 2, 1, 3, 'E'),
(123, 1, 2, 3, 'E'),
(124, 2, 2, 4, 'E'),
(125, 1, 2, 3, 'E'),
(126, 23, 90, 113, 'A'),
(127, 212, 0, 212, 'A'),
(128, 21, 2, 23, 'E'),
(129, 12, 23, 35, 'E'),
(130, 12, 23, 35, 'E'),
(131, 12, 2, 14, 'E'),
(132, 12, 2, 14, 'E'),
(133, 12, 2, 14, 'E'),
(134, 12, 2, 14, 'E'),
(135, 12, 2, 14, 'E'),
(136, 12, 2, 14, 'E'),
(137, 12, 2, 14, 'E'),
(138, 12, 2, 14, 'E');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penjumlahan`
--
ALTER TABLE `penjumlahan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penjumlahan`
--
ALTER TABLE `penjumlahan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
