-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2022 at 02:43 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_gambar`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_gambar`
--

CREATE TABLE `list_gambar` (
  `id_blog` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list_gambar`
--

INSERT INTO `list_gambar` (`id_blog`, `gambar`, `judul`, `deskripsi`, `tanggal`, `status`) VALUES
(4, 'img/798333278898aNRnXkXg_700w_0.jpg', 'ini cewe tes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quisquam quibusdam qui, magnam suscipit, quae quidem at nemo perspiciatis dolorum incidunt doloremque perferendis illo tenetur excepturi aliquid illum saepe in!', '2022-08-19 09:57:00', 'aktif'),
(5, 'Array', 'ini judul', 'ini kucing otw edit', '2022-08-11 11:58:00', 'aktif'),
(7, 'img/831611885893solo.JPG', 'SOLO', 'SOLO desc', '2022-08-19 09:58:00', 'aktif'),
(8, 'img/217250629430aNRnXkXg_700w_0.jpg', 'ini tanggal', 'tanggal deskripsi', '2022-08-10 14:56:00', 'nonaktif'),
(9, 'img/465362914693mercenary.JPG', 'tanggal 2', 'ini tanggal 2', '2022-08-14 10:17:00', 'aktif'),
(10, 'img/353422224172a9ADxWAA_700w_0.jpg', 'sdasdasd', 'dadasdad', '2022-08-15 10:33:00', 'aktif'),
(11, 'img/246486801555mercenary.JPG', 'ini tanggal sekarang', 'ini tanggal deskripsi', '2022-08-19 10:46:00', 'aktif'),
(12, 'img/312647354470a9ADxWAA_700w_0.jpg', 'ini tanggal 18', '18 agustus', '2022-08-18 10:46:00', 'aktif'),
(17, 'img/345269369811sunflower-0quality.jpg', 'bunga 2', 'bunga bunga', '2022-08-03 15:29:00', 'aktif'),
(19, 'img/491042444040ala3rndp_700w_0.jpg', 'good for you', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quisquam quibusdam qui, magnam suscipit, quae quidem at nemo perspiciatis dolorum incidunt doloremque perferendis illo tenetur excepturi aliquid illum saepe in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quisquam quibusdam qui, magnam suscipit, quae quidem at nemo perspiciatis dolorum incidunt doloremque perferendis illo tenetur excepturi aliquid illum saepe in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quisquam quibusdam qui, magnam suscipit, quae quidem at nemo perspiciatis dolorum incidunt doloremque perferendis illo tenetur excepturi aliquid illum saepe in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quisquam quibusdam qui, magnam suscipit, quae quidem at nemo perspiciatis dolorum incidunt doloremque perferendis illo tenetur excepturi aliquid illum saepe in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quisquam quibusdam qui, magnam suscipit, quae quidem at nemo perspiciatis dolorum incidunt doloremque perferendis illo tenetur excepturi aliquid illum saepe in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quisquam quibusdam qui, magnam suscipit, quae quidem at nemo perspiciatis dolorum incidunt doloremque perferendis illo tenetur excepturi aliquid illum saepe in!', '2022-08-16 15:43:00', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_gambar`
--
ALTER TABLE `list_gambar`
  ADD PRIMARY KEY (`id_blog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_gambar`
--
ALTER TABLE `list_gambar`
  MODIFY `id_blog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
