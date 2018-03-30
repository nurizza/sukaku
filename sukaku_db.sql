-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mar 2018 pada 03.27
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sukaku_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `harga` varchar(225) NOT NULL,
  `stok` int(11) NOT NULL,
  `detail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `foto`, `harga`, `stok`, `detail`) VALUES
(3, 'Meja', '17055790375aaf8e94cf5dd.jpg', '12000000', 1, 'Jati'),
(4, 'Kursi', '7914110355aaf8eb1bffd5.jpg', '100000', 6, 'Kayu'),
(5, 'Pensil', '7520581855aaf905ab5abb.jpg', '2000', 180, '2B'),
(6, 'Penggaris', '21125322815aaf907889927.jpg', '1000', 8, 'Besi'),
(8, 'Baju Koko', '2267399035aafd63ac3cbf.jpg', '80000', 12, 'Adem'),
(10, 'Pensil Warna', '14497225555aafd6e5438f7.jpg', '20000', 3, 'Titi'),
(11, 'Benang', '2840875525abd90348f715.jpg', '2000', 4, 'Benang Wol ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `posisi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id`, `nama`, `email`, `password`, `posisi`) VALUES
(1, 'Nur Izza Lutful Rizqiani', 'nurizzalutful@gmail.com', 'izza', 'Admin'),
(2, 'Buyer', 'buyer@gmail.com', 'buyer', 'Buyer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelanjaan`
--

CREATE TABLE `pembelanjaan` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `harga` varchar(225) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `total` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelanjaan`
--

INSERT INTO `pembelanjaan` (`id`, `nama_barang`, `harga`, `jml_barang`, `total`) VALUES
(2, 'Penggaris', '1000', 1, '1000'),
(3, 'Baju Balita', '30000', 3, '90000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `total`
--

CREATE TABLE `total` (
  `id` int(11) NOT NULL,
  `total` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `harga` varchar(225) NOT NULL,
  `jml_brg` int(11) NOT NULL,
  `total` varchar(225) NOT NULL,
  `nama_pembeli` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_barang`, `harga`, `jml_brg`, `total`, `nama_pembeli`, `alamat`) VALUES
(1, 'kursi', '100000', 2, '200000', 'Nur Izza', 'Malang'),
(2, 'Meja', '12000000', 1, '12000000', 'Dwi Valentino', 'Kediri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelanjaan`
--
ALTER TABLE `pembelanjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembelanjaan`
--
ALTER TABLE `pembelanjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
