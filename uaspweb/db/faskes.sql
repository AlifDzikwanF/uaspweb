-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2023 pada 17.36
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faskes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(256) NOT NULL,
  `kepemilikan` varchar(50) DEFAULT NULL,
  `faskes` varchar(256) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id`, `provinsi`, `kepemilikan`, `faskes`, `jumlah`, `created`) VALUES
(1, 'JAWA BARAT', 'BUMN', 'RUMAH SAKIT KHUSUS', 7, '2023-07-05 03:32:32'),
(2, 'JAWA TENGAH', 'KEMENKES', 'RUMAH SAKIT UMUM', 7, '2013-03-03 01:20:10'),
(23, 'JAWA TENGAH', 'PEM.KAB', 'RUMAH SAKIT KHUSUS', 5, '2023-07-01 06:00:03'),
(24, 'JAWA TIMUR', 'KEMENKES', 'PUSKESMAS', 10, '2023-07-01 06:00:54'),
(25, 'JAWA TIMUR', 'PEM.PROV', 'RUMAH SAKIT UMUM', 5, '2023-07-03 12:27:44'),
(26, 'JAWA BARAT', 'PEM.KAB', 'PUSKESMAS', 15, '2023-07-05 03:32:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
