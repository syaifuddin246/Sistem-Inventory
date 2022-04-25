-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 09:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silaravel8`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahanbaku`
--

CREATE TABLE `bahanbaku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kodemasuk` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodekeluar` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglmasuk` date NOT NULL,
  `tglkeluar` date DEFAULT NULL,
  `namabarang` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namabarangkeluar` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jmlmasuk` bigint(20) NOT NULL,
  `jmlkeluar` bigint(20) DEFAULT NULL,
  `jmltotal` bigint(20) DEFAULT NULL,
  `hargabarang` bigint(20) NOT NULL,
  `subtotal` bigint(20) NOT NULL,
  `kodesupplier` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namasupplier` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahanbaku`
--

INSERT INTO `bahanbaku` (`id`, `kodemasuk`, `kodekeluar`, `tglmasuk`, `tglkeluar`, `namabarang`, `namabarangkeluar`, `jmlmasuk`, `jmlkeluar`, `jmltotal`, `hargabarang`, `subtotal`, `kodesupplier`, `namasupplier`, `created_at`, `updated_at`) VALUES
(1, 'tes', 'tes', '2022-04-20', '2022-04-21', 'tes', 'tes', 1, 1, 6, 2233, 2233, '231', 'andi', '2022-04-20 07:41:36', '2022-04-20 18:40:34'),
(2, '6785755', '6785755', '2022-04-21', '2022-04-21', 'tes', 'tes', 3, 1, 2, 2233, 6699, '231', 'andi', '2022-04-20 19:53:51', '2022-04-20 20:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `bahanjadi`
--

CREATE TABLE `bahanjadi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kodemasuk` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodekeluar` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglmasuk` date NOT NULL,
  `tglkeluar` date DEFAULT NULL,
  `namabarang` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namabarangkeluar` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelbarang` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelbarangkeluar` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jmlmasuk` bigint(20) NOT NULL,
  `jmlkeluar` bigint(20) DEFAULT NULL,
  `jmltotal` bigint(20) DEFAULT NULL,
  `hargabarang` bigint(20) NOT NULL,
  `hargabarangkeluar` bigint(20) DEFAULT NULL,
  `subtotal` bigint(20) NOT NULL,
  `subtotalkeluar` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahanjadi`
--

INSERT INTO `bahanjadi` (`id`, `kodemasuk`, `kodekeluar`, `tglmasuk`, `tglkeluar`, `namabarang`, `namabarangkeluar`, `modelbarang`, `modelbarangkeluar`, `jmlmasuk`, `jmlkeluar`, `jmltotal`, `hargabarang`, `hargabarangkeluar`, `subtotal`, `subtotalkeluar`, `created_at`, `updated_at`) VALUES
(1, '0003442', '0003442', '2022-04-06', '2022-04-21', 'kain rajut', 'kain rajut', 'pesima', 'pesima', 2, 1, 5, 3000, 2000, 6000, 2000, '2022-04-20 21:20:34', '2022-04-21 00:13:29'),
(2, '00034489', '00034489', '2022-04-25', '2022-04-25', 'tes', 'tes', 'pesima 2', 'pesima 2', 1, 1, 0, 3500, 8000, 3500, 8000, '2022-04-24 18:38:35', '2022-04-24 23:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2022_04_20_062223_create_supplier_table', 2),
(8, '2022_04_20_131739_create_bahanbaku_table', 3),
(9, '2022_04_21_032924_create_bahanjadi_table', 4),
(10, '2022_04_22_211717_create_po_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_po` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglorder` date NOT NULL,
  `tglkirim` date NOT NULL,
  `kode_supplier` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_supplier` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglbayar` date NOT NULL,
  `jml` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`id`, `no_po`, `tglorder`, `tglkirim`, `kode_supplier`, `nama_supplier`, `nama_barang`, `status`, `tglbayar`, `jml`, `harga`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, '2121', '2022-04-23', '2022-04-23', '4343', 'Ahmad Hasanuri', 'Kain Serat', 'ada', '2022-04-23', '1', '2000', '2000', '2022-04-22 15:02:36', '2022-04-22 15:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rek` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_rek` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bank` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `kode`, `nama`, `alamat`, `npwp`, `telepon`, `email`, `hp`, `no_rek`, `nama_rek`, `nama_bank`, `created_at`, `updated_at`) VALUES
(1, '0056', 'andi', 'semarang', '435353535', '08123232424', 'tes@gmail.com', '4633655', '24242523535', 'andi', '24242523535', '2022-04-20 00:32:53', '2022-04-20 00:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$PPi5aQgEVGWuMqhfkeYTSuwpP/nlYhXMiyK1ouhW4ULl9lzm11GLC', NULL, '2022-04-19 17:53:05', '2022-04-19 17:53:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahanbaku`
--
ALTER TABLE `bahanbaku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahanjadi`
--
ALTER TABLE `bahanjadi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahanbaku`
--
ALTER TABLE `bahanbaku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bahanjadi`
--
ALTER TABLE `bahanjadi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
