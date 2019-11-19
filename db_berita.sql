-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2019 at 03:29 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(50) NOT NULL,
  `judul_foto` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `ket_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `judul_foto`, `foto`, `ket_foto`) VALUES
(2, 'WISATA Ke NUSA TENGGRA TIMUR', 'pic-1571820679.jpg', 'Selain Bali, tempat wisata di Nusa Tenggara Timur juga tak kalah menarik dan selalu menjadi alternatif tempat liburan bagi para wisatawan. Karena NTT merupakan wilayah kepulauan, provinsi ini menyimpan begitu banyak tempat-tempat eksotis yang layak dikunjungi.\r\n\r\nBeberapa tempat wisata di Nusa Tenggara Timur bisa dibilang masih perawan karena tak banyak dikunjungi orang, sehingga keasriannya pun masih terjaga dengan baik.\r\n\r\nSelain itu, ada juga tempat wisata di Nusa Tenggara Timur yang ikonik dan selalu menjadi tujuan utama para wisatawan, sebut saja Labuan Bajo.\r\n\r\nLabuan Bajo memang dikenal dengan objek wisata Taman Nasional Komodo dan Pink Beach-nya. Namun, ternyata di dalamnya masih ada banyak lagi objek wisata menarik yang wajib dikunjungi.\r\n\r\nSelain Labuan Bajo, ada juga beberapa tempat menarik yang bisa menjadi tujuan berwisata. Saat ini, NTT memang telah menjadi tempat impian banyak orang untuk bisa dikunjungi.\r\n\r\nPerlu diketahui, di awal kemerdekaan, wilayah kepulauan ini merupakan wilayah Provinsi Sunda Kecil dengan ibu kota di Kota Singaraja. Namun, saat ini sudah menjadi tiga provinsi terpisah, yaitu Bali, Nusa Tenggara Barat, dan Nusa Tenggara Timur.\r\n\r\nKetiga provinsi ini sama-sama memiliki daya tarik wisata yang menarik. Jika ingin mengenal wisata NTT lebih dalam lagi, simak panduan lengkapnya di bawah ini.'),
(4, 'Alamku Surgaku Nan Indah', 'pic-1571821101.jpg', 'siti'),
(5, 'Duniaku', 'pic-1571899945.jpg', 'saya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
