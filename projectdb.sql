-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 09:53 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `equip_id` int(11) NOT NULL,
  `comedate` date NOT NULL,
  `Return_date` date NOT NULL,
  `borrow_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`id`, `user_id`, `equip_id`, `comedate`, `Return_date`, `borrow_status`, `created_at`, `updated_at`) VALUES
(1, '5940203329', 1, '2019-06-10', '2019-07-10', 'คืน', NULL, '2019-06-09 22:50:30'),
(7, '5940203329', 3, '2019-02-02', '2019-03-10', 'คืน', '2019-06-09 23:07:00', '2020-05-18 06:13:33'),
(8, '5940203329', 4, '2019-02-02', '2019-03-02', 'ยืม', '2019-06-10 00:00:47', '2019-06-11 00:19:22'),
(9, '5940203329', 6, '2019-02-02', '2019-03-10', 'ยืม', '2019-06-11 02:16:24', '2019-06-11 23:48:12'),
(10, '5940203326', 5, '2019-06-10', '2019-03-10', 'ยืม', '2019-06-12 02:49:08', '2019-06-12 19:26:55'),
(12, '5940203329', 7, '2019-02-02', '2019-03-02', 'ยืม', '2019-06-12 19:28:59', '2019-06-12 19:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(10) UNSIGNED NOT NULL,
  `equip_id` varchar(255) NOT NULL,
  `year` date NOT NULL,
  `equip_name` varchar(255) NOT NULL,
  `jurantee` date NOT NULL,
  `equip_status` varchar(255) NOT NULL,
  `tooltypes` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `equip_id`, `year`, `equip_name`, `jurantee`, `equip_status`, `tooltypes`, `created_at`, `updated_at`) VALUES
(1, '0001', '2019-02-02', 'อาดูโน01', '2019-02-02', 'ไม่ว่าง', 'พัสดุ', '2019-06-09 06:07:01', '2020-05-18 06:13:55'),
(2, '0002', '2019-02-02', 'อาดูโน02', '2019-02-09', 'ว่าง', 'อุปกรณ์', '2019-06-09 17:10:40', '2019-06-09 21:52:27'),
(3, '0003', '2019-02-02', 'อาดูโน03', '2019-02-19', 'ไม่ว่าง', 'อุปกรณ์', '2019-06-09 17:10:56', '2019-06-11 23:52:51'),
(4, '0004', '2019-02-02', 'อาดูโน03', '2019-02-19', 'ไม่ว่าง', 'อุปกรณ์', '2019-06-09 17:11:12', '2019-06-11 23:52:59'),
(5, '0005', '2019-02-02', 'อาดูโน04', '2020-03-28', 'ว่าง', 'พัสดุ', '2019-06-09 17:11:56', '2019-06-09 21:52:47'),
(6, '0006', '2019-02-02', 'อาดูโน', '2019-09-30', 'ไม่ว่าง', 'อุปกรณ์', '2019-06-09 17:12:27', '2019-06-11 23:53:08'),
(7, '0007', '2019-02-02', 'ไอแพต10', '2019-03-09', 'ว่าง', 'อุปกรณ์', '2019-06-12 19:25:37', '2019-06-12 19:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_05_28_062126_create_borrows_table', 2),
(11, '2019_05_01_182039_create_equipment_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `sex`, `status`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'พงศกร บุญสร้อย', '5940203329', 'ชาย', '2', 'student@gmail.com', '$2y$10$Bz/GVyClhVtmZZg9fWb/Z.fTZ3gsCWFFukoLUO9sPIB5nT1c2HnS.', 'oxatqTdjfiYJmMSdpuPmaXHU4xsWY9fKACHOi12lhQ8Z3ZXX0V6i3mbimPW0', '2019-06-07 00:00:12', '2019-06-07 00:00:12'),
(4, 'admin', 'admin', 'ชาย', '1', 'admin@gmail.com', '$2y$10$BLIm47RVDQuyHl.wNIVdE.Xd6m3WWxci34WQ1TbXtHhLMgrKJypW.', 'HoRikbW26At6CavezmXozsNKryVEFsWb4CqE7LwdiYq1CGsG9CmGASvPZSJt', '2019-06-07 00:01:21', '2019-06-07 00:01:21'),
(5, 'เอกชัย', '5940203326', 'ชาย', '2', 'Ekkgmail.com', '$2y$10$u6wLSr1YnXAku8x5Az2zjOcys.t.J6NiuLy8untQVvmQQBBl.xyWy', 'AWCF2HiK0s0vqk0c4MhAfNsTyo3tQSJpGGd51crW2y86Y3MoGq5P7GeO4r3l', '2019-06-11 23:40:48', '2019-06-11 23:40:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrows`
--
ALTER TABLE `borrows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
