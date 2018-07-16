-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jul 2018 pada 17.19
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carwash_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `salju` varchar(50) NOT NULL,
  `pijat` varchar(50) NOT NULL,
  `gratis` varchar(50) NOT NULL,
  `id_fas` int(10) NOT NULL COMMENT 'AUTO_INCREMENTS'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`salju`, `pijat`, `gratis`, `id_fas`) VALUES
('Ya', 'Ya', '1kali', 6),
('Ya', 'Ya', 'sekali ', 7),
('Ya', 'Ya', 'pisan tok', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `nama` varchar(50) NOT NULL,
  `plat` varchar(50) NOT NULL,
  `kendaraan` varchar(50) NOT NULL,
  `id_ide` int(10) NOT NULL COMMENT 'AUTO_INCREMENTS'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`nama`, `plat`, `kendaraan`, `id_ide`) VALUES
('Imam', 'H 1234 JJ', 'Mobil', 22),
('Jojon', 'G 1234 JJ', 'Mobil', 23),
('Yeyen', 'N 1234 JJ', 'Bebek', 24),
('Kaka', 'J 6789 GF', 'Motor', 25),
('Kaka', 'J 6789 GF', 'Jeep', 26),
('Kaka', 'S 6789 GF', 'SUV', 27);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `plat` varchar(50) NOT NULL,
  `kendaraan` varchar(50) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `id_tran` int(10) NOT NULL COMMENT 'AUTO_INCREMENTS'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`plat`, `kendaraan`, `biaya`, `id_tran`) VALUES
('H 123 GG', 'Suzuki', '50000', 1),
('H 123 j', 'jazz', '789', 2),
('H 1234 JJ', 'mobil', '79000', 3),
('H 1234 KG', 'kuda', '79000', 4),
('K 1234 UB', 'horse', '79000', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fas`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_ide`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_tran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fas` int(10) NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCREMENTS', AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_ide` int(10) NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCREMENTS', AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_tran` int(10) NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCREMENTS', AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
