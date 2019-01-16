-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 10:21 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kategori`
--

CREATE TABLE `daftar_kategori` (
  `daftar_kategori` int(11) NOT NULL,
  `id_film` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `nama_film` varchar(50) DEFAULT NULL,
  `gambar_film` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `nama_film`, `gambar_film`, `deskripsi`) VALUES
(4, 'Spider-Man : HomeComing', 'Poster1.jpg', 'Menyusul peristiwa Captain America: Civil War, Peter Parker dengan bantuan mentornya Tony Stark, mencoba untuk mengimbangi hidupnya sebagai siswa SMA biasa di Queens, New York City dengan melawan kejahatan sebagai pahlawan super Spider-Man dan sebagai ancaman baru yang muncul Vulture.'),
(5, 'Thor:Ragnarok', 'Poster2.jpg', 'Setelah peristiwa di Avengers: Age of Ultron, Thor yang kini ditawan di planet Sakaar tanpa palunya, harus memenangkan pertarungan gladiator melawan seorang kawan lama Hulk agar bisa kembali ke Asgard untuk menghentikan Hela dan tibanya Ragnarok, kiamat peradaban Asgard.'),
(6, 'Logan', 'Poster4.jpg', 'Wolverine yang mulai menua, kini hidup mengasingkan diri karena harus merawat Profesor X. Namun, kehadiran sesosok mutan gadis cilik yang diburu oleh para musuh tiba-tiba menjungkirbalikkan segalanya.'),
(7, 'Firework', 'Poster3.jpg', 'Cerita terjadi dalam sehari di sebuah musim panas. Sekelompok pemuda berencana menonton atraksi kembang api dari mercu suar, ingin tahu apakah kembang api itu bundar atau rata bila dilihat dari samping. Di tempat lain, Nazuna, sang idola kelas, meminta Norimichi, pemuda yang disukainya, untuk kawin lari. Apa nasib yang menunggu mereka di hari yang terus-menerus berulang ini?');

-- --------------------------------------------------------

--
-- Table structure for table `film_tayang`
--

CREATE TABLE `film_tayang` (
  `id_film_tayang` int(11) NOT NULL,
  `id_film` int(11) DEFAULT NULL,
  `id_jam` int(11) DEFAULT NULL,
  `id_studio` int(11) DEFAULT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film_tayang`
--

INSERT INTO `film_tayang` (`id_film_tayang`, `id_film`, `id_jam`, `id_studio`, `harga`) VALUES
(18, 5, 12, 4, 25000),
(19, 4, 13, 4, 25000),
(20, 7, 14, 4, 25000),
(21, 6, 15, 4, 25000),
(22, 6, 12, 3, 25000),
(23, 7, 13, 3, 25000),
(24, 4, 14, 3, 25000),
(28, 5, 14, 2, 25000),
(29, 4, 15, 2, 25000),
(30, 4, 12, 1, 25000),
(31, 5, 13, 1, 25000),
(32, 6, 14, 1, 25000),
(33, 4, 13, 3, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id_jam` int(11) NOT NULL,
  `jam` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id_jam`, `jam`) VALUES
(12, '07:00:00'),
(13, '08:00:00'),
(14, '09:00:00'),
(15, '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` int(11) NOT NULL,
  `no_kursi` int(11) DEFAULT NULL,
  `id_studio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `no_kursi`, `id_studio`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 1, 2),
(7, 2, 2),
(8, 3, 2),
(9, 4, 2),
(10, 5, 2),
(11, 1, 3),
(12, 2, 3),
(13, 3, 3),
(14, 4, 3),
(15, 5, 3),
(16, 1, 4),
(17, 2, 4),
(18, 3, 4),
(19, 4, 4),
(20, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kursi_tersedia`
--

CREATE TABLE `kursi_tersedia` (
  `id_kursi_tersedia` int(11) NOT NULL,
  `id_kursi` int(11) DEFAULT NULL,
  `id_film_tayang` int(11) DEFAULT NULL,
  `tersedia` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursi_tersedia`
--

INSERT INTO `kursi_tersedia` (`id_kursi_tersedia`, `id_kursi`, `id_film_tayang`, `tersedia`) VALUES
(1, 11, 24, 0),
(2, 12, 24, 1),
(3, 13, 24, 0),
(4, 14, 24, 1),
(5, 15, 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `tgl_beli` date NOT NULL,
  `grandtotal` int(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `bukti` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `id_pembeli`, `tgl_beli`, `grandtotal`, `status`, `bukti`) VALUES
(6, 8, '2018-04-06', 25000, 1, 't.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `alamat`, `username`, `password`, `foto`) VALUES
(8, 'Yoga Cahya Romadhon', 'Kediri,Jawa Timur', 'sakatayoga', '5693858f9cfd5da1f3da0855c5949d2b', ''),
(9, 'Yoga Cahya Romadhon', 'Malang', 'yogacahya', 'a868ac07db09ffac3dcee5e78ce7e0c9', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(20) DEFAULT NULL,
  `status_petugas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `status_petugas`) VALUES
(5, 'Marcel', 'admin'),
(6, 'Gustav', 'teller'),
(7, 'biss', 'teller');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id_studio` int(11) NOT NULL,
  `nama_studio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id_studio`, `nama_studio`) VALUES
(1, 'Studio 1'),
(2, 'Studio 2'),
(3, 'Studio 3'),
(4, 'Studio 4');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_pembeli` int(11) DEFAULT NULL,
  `id_film_tayang` int(11) DEFAULT NULL,
  `id_kursi_tersedia` int(11) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `id_nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_pembeli`, `id_film_tayang`, `id_kursi_tersedia`, `id_petugas`, `id_nota`) VALUES
(7, 8, 24, 1, 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_kategori`
--
ALTER TABLE `daftar_kategori`
  ADD PRIMARY KEY (`daftar_kategori`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `film_tayang`
--
ALTER TABLE `film_tayang`
  ADD PRIMARY KEY (`id_film_tayang`),
  ADD KEY `fk_film` (`id_film`),
  ADD KEY `fk_studio11` (`id_studio`),
  ADD KEY `fk_jam` (`id_jam`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`),
  ADD KEY `fk_studio` (`id_studio`);

--
-- Indexes for table `kursi_tersedia`
--
ALTER TABLE `kursi_tersedia`
  ADD PRIMARY KEY (`id_kursi_tersedia`),
  ADD KEY `id_kursi` (`id_kursi`),
  ADD KEY `id_film_tayang` (`id_film_tayang`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `fk_pembeli` (`id_pembeli`),
  ADD KEY `fk_film_tayang` (`id_film_tayang`),
  ADD KEY `fk_kursi` (`id_kursi_tersedia`),
  ADD KEY `fk_petugas` (`id_petugas`),
  ADD KEY `id_nota` (`id_nota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_kategori`
--
ALTER TABLE `daftar_kategori`
  MODIFY `daftar_kategori` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `film_tayang`
--
ALTER TABLE `film_tayang`
  MODIFY `id_film_tayang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `kursi_tersedia`
--
ALTER TABLE `kursi_tersedia`
  MODIFY `id_kursi_tersedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_kategori`
--
ALTER TABLE `daftar_kategori`
  ADD CONSTRAINT `daftar_kategori_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftar_kategori_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `film_tayang`
--
ALTER TABLE `film_tayang`
  ADD CONSTRAINT `fk_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `fk_jam` FOREIGN KEY (`id_jam`) REFERENCES `jam` (`id_jam`),
  ADD CONSTRAINT `fk_studio11` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id_studio`);

--
-- Constraints for table `kursi`
--
ALTER TABLE `kursi`
  ADD CONSTRAINT `fk_studio` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id_studio`);

--
-- Constraints for table `kursi_tersedia`
--
ALTER TABLE `kursi_tersedia`
  ADD CONSTRAINT `kursi_tersedia_ibfk_1` FOREIGN KEY (`id_kursi`) REFERENCES `kursi` (`id_kursi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kursi_tersedia_ibfk_2` FOREIGN KEY (`id_film_tayang`) REFERENCES `film_tayang` (`id_film_tayang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `fk_film_tayang` FOREIGN KEY (`id_film_tayang`) REFERENCES `film_tayang` (`id_film_tayang`),
  ADD CONSTRAINT `fk_pembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`id_kursi_tersedia`) REFERENCES `kursi_tersedia` (`id_kursi_tersedia`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
