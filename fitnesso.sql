-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 08:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitnesso`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Mostafa houjeiry', 'mostafa.hj.001@gmail.com', '$2y$10$ZIPPEElkYfQFDLc1fzz7q.TRpU0Qw7id/tsnHIgsjoSO5K6q7TSSW'),
(2, 'Mostafa houjeiry', 'mostafa.hj.001@gmail.com', '$2y$10$Sd19dW.WbMpPRMWus5TrJeabP4iv3o3eI98Ec0WwsH4L8nHp1yAUq'),
(3, 'Mostafa houjeiry', 'mostafa.hj.001@gmail.com', '$2y$10$ElNymEHmqX9id3mWpDaNJuj/ha2YulfVUwjuZgnxqPyfsewugyQ.K'),
(4, 'Mostafa houjeiry', 'mostafa.hj.001@gmail.com', '$2y$10$7DDCk3WxhPG3JUZPgqtvw.dEFn3ILQpS4ThKFYjvkxqjBr7w/dBTG'),
(5, 'Mostafa houjeiry', 'mostafa.hj.001@gmail.com', '$2y$10$m3IkDM29WEysWGIE9o2V0uV4c8G9Y4K6Dx7wMYN1IcDzb48FirzeC'),
(6, 'Mostafa houjeiry', 'bhamdanieh@gmail.com', '$2y$10$xrJlPwNFvX/rbUCtEL5dVebVVxsME3uMtlSMUHUXQR1TyTH36Dtxq'),
(7, 'Mostafa houjeiry', 'bhamdanieh@gmail.com', '$2y$10$7BN8v3fMnVBlRm4T2xq6Iucj8y0hk4aoOtMolAD9edVd8PnlB9y9i'),
(8, 'Mostafa houjeiry', 'alielajami20@gmail.com', '$2y$10$aqfx/yFDIBp6cmXGjoKPfuE4viZuukOB8EYGs5m1LxAMD8d26Lgn2'),
(9, 'ali', 'alielajami20@gmail.com', '$2y$10$R8qSCoF/3TnwNMhDkDZgU.sl1bQJryMAYkw1MR8RtYD2se1vLRENS'),
(10, 'Mostafa houjeiry', 'mostafa.hj.001@gmail.com', '$2y$10$qeD.k6Elx2RUrL2W6a8i2O0Tk0PZJLEyW/NZ1kee4gfuss5dCISaG'),
(11, 'Mostafa houjeiry', 'bhamdanieh@gmail.com', '$2y$10$yLst/Msh84ZAzImR0LERtue1AfJXekXZEay200jxIA24jNGLhAODC'),
(12, 'ali', 'alielajami20@gmail.com', '$2y$10$qYpVs4ASh5cK6ZVXq4L/6eFajpSoyWMdoSx9ZYuZBLTjKedJoXs5i'),
(13, 'Mostafa houjeiry', 'mostafa.hj.001@gmail.com', '$2y$10$FPuE5AQ0i/D1mOjLBWrQjOSUyFAM0hSX1UTjvfnKuDoe0dtJtjVfK'),
(14, 'Mostafa houjeiry', 'mostafa.hj.001@gmail.com', '$2y$10$iavHg4PMN.ht/Dt.Bful/.XIcZlP57I8Q2I0Xvs5DohJqynyBSlti');

-- --------------------------------------------------------

--
-- Table structure for table `users_data`
--

CREATE TABLE `users_data` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `workout_type` varchar(255) NOT NULL,
  `workout_intensity` int(11) NOT NULL,
  `daily_calorie_intake` float NOT NULL,
  `created_at` datetime NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_data`
--

INSERT INTO `users_data` (`id`, `full_name`, `gender`, `age`, `height`, `weight`, `goal`, `workout_type`, `workout_intensity`, `daily_calorie_intake`, `created_at`) VALUES
(1, 'Mostafa houjeiry', 'male', 123, 1111, 1111, 'gainWeight', 'running', 7, 42301.1, '2024-11-30 20:32:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users_data`
--
ALTER TABLE `users_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
