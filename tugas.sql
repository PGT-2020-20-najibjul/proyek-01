-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2020 pada 09.40
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
-- Struktur dari tabel `hitungruntun`
--

CREATE TABLE `hitungruntun` (
  `id` int(10) NOT NULL,
  `a` double NOT NULL,
  `b` double NOT NULL,
  `c` double NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hitungruntun`
--

INSERT INTO `hitungruntun` (`id`, `a`, `b`, `c`, `ket`) VALUES
(1, 1, 2, 3, 'E'),
(2, 1, 2, 3, 'E'),
(3, 1, 2, 3, 'E'),
(4, 1, 2, 3, 'E'),
(5, 1, 2, 3, 'E'),
(6, 1, 2, 3, 'E'),
(7, 1, 2, 3, 'E'),
(8, 1, 2, 3, 'E'),
(9, 1, 2, 3, 'E'),
(10, 1, 2, 3, 'E'),
(11, 89, 21, 110, 'A'),
(12, 21, 110, 131, 'A'),
(13, 110, 131, 241, 'A'),
(14, 131, 241, 372, 'A'),
(15, 241, 372, 613, 'A'),
(16, 372, 613, 985, 'A'),
(17, 613, 985, 1598, 'A'),
(18, 985, 1598, 2583, 'A'),
(19, 1598, 2583, 4181, 'A'),
(20, 2583, 4181, 6764, 'A');

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
(138, 12, 2, 14, 'E'),
(139, 1, 2, 3, 'E'),
(140, 1, 2, 3, 'E'),
(141, 1, 2, 3, 'E'),
(142, 1, 2, 3, 'E'),
(143, 1, 2, 3, 'E'),
(144, 1, 2, 3, 'E'),
(145, 1, 2, 3, 'E'),
(146, 1, 2, 3, 'E'),
(147, 1, 2, 3, 'E'),
(148, 1, 2, 3, 'E'),
(149, 1, 3, 4, 'E'),
(150, 1, 3, 4, 'E'),
(151, 1, 3, 4, 'E'),
(152, 1, 3, 4, 'E'),
(153, 1, 3, 4, 'E'),
(154, 1, 3, 4, 'E'),
(155, 1, 3, 4, 'E'),
(156, 1, 3, 4, 'E'),
(157, 1, 3, 4, 'E'),
(158, 1, 3, 4, 'E');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hitungruntun`
--
ALTER TABLE `hitungruntun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjumlahan`
--
ALTER TABLE `penjumlahan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hitungruntun`
--
ALTER TABLE `hitungruntun`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `penjumlahan`
--
ALTER TABLE `penjumlahan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
