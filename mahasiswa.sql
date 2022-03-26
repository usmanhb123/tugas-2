-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2022 pada 05.56
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `kode_barang` int(11) NOT NULL,
  `nama` text NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`kode_barang`, `nama`, `stok`, `harga`) VALUES
(200, 'RAM DDR3 4gb/8GB/16GB', 100, 198000),
(1001, 'RAM DDR3 4gb/8GB/16GB 16000 MHz', 7271, 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penjualan`
--

CREATE TABLE `data_penjualan` (
  `kode_penjualan` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pembeli` text NOT NULL,
  `total_belanja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penjualan`
--

INSERT INTO `data_penjualan` (`kode_penjualan`, `kode_barang`, `nama_barang`, `jumlah`, `pembeli`, `total_belanja`) VALUES
(6, 1001, 'RAM DDR3 4gb/8GB/16G', 30, 'Fahrul', 450000),
(7, 1001, 'RAM DDR3 4gb/8GB/16G', 4000, 'Usman Habib', 60000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `nim` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `na` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`nim`, `nama`, `uts`, `uas`, `tugas`, `na`, `status`) VALUES
(232323, 'nico', 80, 98, 12, 67, 'Lulus'),
(2016102019, 'Usman Habib Bahtiar', 89, 0, 10, 65, 'Lulus');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `data_penjualan`
--
ALTER TABLE `data_penjualan`
  ADD PRIMARY KEY (`kode_penjualan`);

--
-- Indeks untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT untuk tabel `data_penjualan`
--
ALTER TABLE `data_penjualan`
  MODIFY `kode_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
