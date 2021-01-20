-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jan 2021 pada 02.42
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `level` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `telp`, `alamat`, `jenis_kelamin`, `level`, `username`, `password`) VALUES
(1, 'ayu', 'ayuindraswari5@gmail.com', '081556724913', 'Jalan Raya Rame', 'perempuan', 'kasir', 'ayu', 'ayu'),
(2, 'yay', 'yay@yahoo.com', '08374613628', 'jalan danau kerinci 4', 'perempuan', 'administrator', 'yay', 'yay'),
(3, 'iu', 'iu@gmail.com', '08325647537154', 'Jalan Danau Maninjau', 'perempuan', 'kasir', 'iu', 'iu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `alamat_anggota` text NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `alamat_anggota`, `telp`) VALUES
(1, 'iu', 'gangnam', '0815567248316');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `id_kategori`, `stok`, `foto`) VALUES
(1, 'Dongeng Klasik Dunia', 'Cerviena & Rina Puspita', 1, 3, '1.jpg'),
(2, '30 Dongeng Dunia', 'May Belle', 1, 5, '2.jpg'),
(3, 'Dhirga', 'Natalia Tan', 4, 18, '41.jpg'),
(4, 'Bulan', 'Tere Liye', 4, 8, '44.jpg'),
(5, 'Fallega', 'Dana Fazaira', 4, 6, '46.jpg'),
(6, 'Selena', 'Tere Liye', 4, 25, '47.jpg'),
(7, 'Dongeng Kasih Sayang', 'Renny Yaniar', 1, 39, '6.jpg'),
(13, 'ONEPIECE 86', 'Eiichiro Oda', 2, 4, '21.jpg'),
(14, 'Touche', 'Windhy Puspitadewi', 2, 32, '22.jpg'),
(15, 'ONEPIECE 28', 'Eiichiro Oda', 2, 23, '23.jpg'),
(16, 'Fairytail 20', 'Hiro Mashima', 2, 14, '24.jpg'),
(17, 'Detektif Conan 95', 'Aoyama Gosho', 2, 10, '25.jpg'),
(18, 'Gundala', 'Oyasujiwo', 2, 13, '26.jpg'),
(19, 'Kamus Bahasa Korea', 'Korean Club Jogja', 3, 30, '31.jpg'),
(20, 'Kamus Jerman Indonesia', 'TIK UMASEKAWAN', 3, 24, '32.jpg'),
(21, 'Kamus Italia Indonesia', 'Faizah Soenoto', 3, 12, '33.jpg'),
(22, 'Kamus Indonesia Spanyol', 'Milagros Guindel', 3, 21, '34.jpg'),
(23, 'Kamus Inggris Indonesia', 'John M. Echols', 3, 17, '35.jpg'),
(29, 'Dongeng Sebelum Tidur 2', 'Dini W. Tamam', 1, 2, '3.jpg'),
(30, 'Dongeng Seru Binatang', 'Kak Alang', 1, 11, '4.jpg'),
(31, 'Putri Pangeran', 'Arleen A.', 1, 62, '5.jpg'),
(32, 'Dongeng Dunia Anak', 'Arleen A', 1, 13, '7.jpg'),
(33, 'Hutan Damai', 'Endah Suci Astuti', 1, 9, '8.jpg'),
(34, 'Dongeng Klasik HC Anderson', 'Erlinnci', 1, 8, '9.jpg'),
(42, 'dasds', 'dada', 1, 21, '8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_buku`
--

INSERT INTO `kategori_buku` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Dongeng'),
(2, 'Komik'),
(3, 'Kamus'),
(4, 'Novel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
