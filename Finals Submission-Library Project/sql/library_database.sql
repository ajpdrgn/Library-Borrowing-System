-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 06:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_tb`
--

CREATE TABLE `registration_tb` (
  `borrower_name` varchar(100) NOT NULL,
  `borrower_program` varchar(100) NOT NULL,
  `borrower_email` varchar(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_accession_number` varchar(60) NOT NULL,
  `date_borrowed` date NOT NULL,
  `date_due` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_tb`
--

INSERT INTO `registration_tb` (`borrower_name`, `borrower_program`, `borrower_email`, `book_title`, `book_author`, `book_accession_number`, `date_borrowed`, `date_due`) VALUES
('Arla Ragun Patrick', '', '2021sha01043@iacademy.edu.ph', 'Hello World', 'Raden Alvarez', '', '2023-04-26', '2023-04-28'),
('sd', '', 'sdf', 'sdf', 'sdf', '12', '2023-03-31', '2023-03-31'),
('dfsd', 'sd', 'sdfsd', 'sdfsd', 'sdf', '06701', '2023-04-15', '2023-04-21'),
('Trial', 'sd', 'hello@iacademy.edu.ph', 'Hello', 'Hello', '013', '2023-04-26', '2023-04-29'),
('Arla Ragun Patrick', 'mma', 'sdfsd', 'sdf', 'sdf', '1232', '2023-04-27', '2023-04-29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
