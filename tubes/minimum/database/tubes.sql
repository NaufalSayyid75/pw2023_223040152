-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2023 at 02:05 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_content`
--

CREATE TABLE `home_content` (
  `id` int NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `home_content`
--

INSERT INTO `home_content` (`id`, `gambar`, `judul`, `isi`) VALUES
(1, 'Baju SEPEN BROTHER.png', 'T-Shirt', 'T-Shirt adalah jenis pakaian yang menutupi sebagian lengan, seluruh dada, bahu, dan perut. Kaus oblong biasanya tidak memiliki kancing, kerah, ataupun saku. Pada umumnya, kaus oblong berlengan pendek (melewati bahu hingga sepanjang siku) dan berleher bundar.'),
(3, 'Hoodie.png', 'Hoodie', 'Hoodie adalah jenis pakaian berlengan panjang dengan memiliki desain kantong atau saku pada bagian depannya. Di bagian penutup kepala hoodie juga ada tali untuk menyesuaikan penutup kepala saat Anda mengenakannya.'),
(13, 'Jaket.png', 'Jaket', 'Jaket adalah jenis baju luar yang menutupi bagian leher hingga pinggang atau pinggul dengan bukaan di bagian depan. Bukaan tersebut dapat dibuka atau ditutup dengan ritsleting, kancing, atau sabuk.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_content`
--
ALTER TABLE `home_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_content`
--
ALTER TABLE `home_content`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
