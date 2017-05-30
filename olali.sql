-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mei 2017 pada 15.54
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olali`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `product` varchar(30) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `alamat`, `hp`, `product`, `jumlah`, `email`) VALUES
(1, 'c', 'c', '0', 'c', 0, ''),
(2, 'alfian fakhruddin fikri', 'cukuptauajah@gmail.com', '2147483647', 'davinci sirup', 4, ''),
(3, 'alfian fakhruddin fikri', 'cukuptauajah@gmail.com', '082177777074', 'davinci sirup', 4, ''),
(4, 'alfian fakhruddin fikri', 'surabaya, jawa timur', '082177777074', 'davinci sirup', 4, 'cukuptauajah@gmail.com'),
(5, 'fajar febrianto', 'latsari', '0812345678', 'mandailing', 2, 'fajarfebrianto1398@gmail.com'),
(6, 'fajar febrianto', 'latsari', '0812345678', 'mandailing', 2, 'fajarfebrianto1398@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `detail` varchar(800) NOT NULL,
  `harga` int(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama_produk`, `jenis`, `detail`, `harga`, `img`) VALUES
(6, 'Kopi Bali', 'Kopi', '1 KG', 185000, 'rev3.jpg'),
(7, 'Espresso', 'Kopi', '1 KG', 230000, 'rev4.jpg'),
(8, 'Toraja', 'Kopi', '1Kg', 220000, 'rev5.jpg'),
(9, 'Kopi Mandailing', 'Kopi', '1Kg', 195000, 'rev6.jpg'),
(10, 'Gelas plastik', 'Gelas', '1 slop', 9000, 'box8.jpg'),
(11, 'Kopi Mandailing', 'Kopi', '1Kg', 195000, 'rev61.jpg'),
(12, 'Lunch Box', 'box', '1pcs', 1400, 'box12.jpg'),
(13, 'Gelas Tea', 'Gelas', '2 Lusin', 20000, 'box9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'brian', 'fajarfebrianto@gmail.com', 'brian123', '929064f2a141f812f1c2efb3ff8194ca'),
(2, '1234', '1234@yahoo.com', '1234', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, '12345', '12345@yahoo.com', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
