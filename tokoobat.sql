-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 07.18
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoobat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `logreg`
--

CREATE TABLE `logreg` (
  `Username` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logreg`
--

INSERT INTO `logreg` (`Username`, `Password`) VALUES
('aku', 'saya'),
('Artup', 'wkwk'),
('Luckyboosss', 'meongkucing1'),
('Putra', 'aku'),
('salman', 'aku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_barang` varchar(8) NOT NULL,
  `nomor` int(3) NOT NULL,
  `obat` varchar(25) NOT NULL,
  `tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_barang`, `nomor`, `obat`, `tujuan`) VALUES
('00000001', 1, 'Paracetamol', ' Obat analgesik dan antipiretik yang populer dan digunakan untuk melegakan sakit kepala, sengal-sengal dan sakit ringan, serta demam. ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `logreg`
--
ALTER TABLE `logreg`
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `nomor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
