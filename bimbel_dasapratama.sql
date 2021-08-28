-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 17, 2021 at 07:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbel`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `tanggal`, `id_kelas`, `created_at`, `updated_at`) VALUES
(2, '2021-08-03', 10, '2021-08-03 08:06:08', '2021-08-03 08:06:08'),
(3, '2021-08-04', 10, '2021-08-03 08:39:56', '2021-08-03 08:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `absensi_users`
--

CREATE TABLE `absensi_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('none','hadir','izin','tidak hadir') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `absensi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensi_users`
--

INSERT INTO `absensi_users` (`id`, `status`, `user_id`, `absensi_id`, `created_at`, `updated_at`) VALUES
(1, 'tidak hadir', 2, 2, '2021-08-03 11:22:21', '2021-08-04 02:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `judul`, `keterangan`, `banner`, `created_at`, `updated_at`) VALUES
(3, 'sfsfsffsf cffs', 'lfahfjlsadhfjfjdfjdbfhfbehq sajdbasfbabfabfakjbfa fjfajksfbasbfaj', '1626683952_bg-bisnis.jpg', '2021-07-19 01:39:12', '2021-07-19 01:39:12'),
(4, 'tess', 'isi', '1626689814_undraw_not_found_60pq.svg', '2021-07-19 03:15:30', '2021-07-19 03:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `kategori_kelas` enum('terbatas','regular') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwals`
--

INSERT INTO `jadwals` (`id`, `title`, `start`, `end`, `kategori_kelas`, `kelas_id`, `created_at`, `updated_at`) VALUES
(47, 'sd mi terbatas', '2021-08-26', '2021-08-28', 'terbatas', 10, '2021-08-16 13:53:40', '2021-08-16 13:53:40'),
(48, 'smp mts terbatas', '2021-08-17', '2021-08-20', 'terbatas', 11, '2021-08-16 13:54:07', '2021-08-16 13:54:07'),
(50, 'kelas sma ips terbatas', '2021-08-02', '2021-08-06', 'terbatas', 13, '2021-08-16 14:02:53', '2021-08-16 14:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_kelas` enum('terbatas','regular') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `thumbnail`, `desc`, `harga`, `kategori`, `kategori_kelas`, `created_at`, `updated_at`) VALUES
(9, 'tes kelas 2', '1625706312_logo-poliwangi.png', '<p>etrttrtra</p>', '150000', 'kedinasan', 'terbatas', '2021-07-07 18:05:12', '2021-07-07 18:05:12'),
(10, 'kelas sd dan mi', '1628002689_logo-poliwangi.png', '<p>deskripsi</p>', '1000000', 'sd/mi', 'terbatas', '2021-08-03 07:58:09', '2021-08-03 07:58:09'),
(11, 'kelas smp/mts', '1628007513_default.jpg', '<p>desc</p>', '1000000', 'smp/mts', 'terbatas', '2021-08-03 09:18:33', '2021-08-03 09:18:33'),
(12, 'kelas sma', '1628007573_profile.png', '<p>fsff</p>', '1000000', 'sma/ma-ipa', 'terbatas', '2021-08-03 09:19:33', '2021-08-03 09:19:33'),
(13, 'kelas sma ips', '1628007608_default.jpg', '<p>dnsjfs</p>', '1000000', 'sma/ma-ips', 'terbatas', '2021-08-03 09:20:08', '2021-08-03 09:20:08'),
(14, 'kelas sbmptn', '1628007645_logo-poliwangi.png', '<p>fhsfbhs</p>', '1000000', 'sbmptn', 'terbatas', '2021-08-03 09:20:45', '2021-08-03 09:20:45');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2021_06_27_125109_create_profile_users_table', 1),
(9, '2021_06_28_223023_create_kelas_table', 2),
(13, '2021_07_11_074841_create_transaksis_table', 3),
(18, '2021_07_19_062615_create_carousels_table', 5),
(19, '2021_08_03_102244_create_absensis_table', 6),
(21, '2021_08_03_102542_create_absensi_users_table', 7),
(22, '2021_07_18_005646_create_jadwals_table', 8),
(23, '2021_08_17_015231_create_profile_ortus_table', 9);

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
-- Table structure for table `profile_ortus`
--

CREATE TABLE `profile_ortus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_ortus`
--

INSERT INTO `profile_ortus` (`id`, `user_id`, `siswa_id`, `created_at`, `updated_at`) VALUES
(5, 13, 2, '2021-08-16 21:09:52', '2021-08-16 21:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `profile_users`
--

CREATE TABLE `profile_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.jpg',
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cek_akun_ortu` tinyint(1) NOT NULL DEFAULT 0,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_users`
--

INSERT INTO `profile_users` (`id`, `nama`, `foto`, `alamat`, `no_hp`, `nama_wali`, `no_hp_wali`, `email_wali`, `cek_akun_ortu`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Aditya', '1624821162_profile.png', 'Temuguruh', '+6281678908678', 'Asyhari', '+6281678908123', 'adit.asyhari16@gmail.com', 1, 2, '2021-06-27 06:36:49', '2021-08-16 21:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `status_bayar` enum('ditolak','pending','belum bayar','lunas') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'belum bayar',
  `user_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `bukti`, `user_id`, `kelas_id`, `status_bayar`, `user_read`, `created_at`, `updated_at`) VALUES
(1, '1626012141_logo.png', 2, 9, 'lunas', 1, '2021-07-11 05:32:42', '2021-08-11 05:01:58'),
(3, '1626012141_logo.png', 2, 10, 'lunas', 1, '2021-07-11 05:32:42', '2021-08-11 05:01:58'),
(4, '1628659039_model.png', 2, 11, 'lunas', 1, '2021-08-04 22:50:11', '2021-08-16 14:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'siswa',
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

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '2021-06-27 13:35:53', '$2y$10$.TToeBM1jH9TntwScjEmd.JflcpkUpwrvde0g/2pQI4F5lPzNDgU.', NULL, '2021-06-27 13:35:53', '2021-06-27 13:35:53'),
(2, 'kororo', 'siswa', 'kororo@gmail.com', NULL, '$2y$10$0kPyuS5OLdKXzvaN2cZ/PeiHi8gwbr51byLX4LtFV5H6Vz2Pd.K/.', NULL, '2021-06-27 06:36:48', '2021-06-27 06:36:48'),
(13, 'Nama Ortu', 'ortu', 'adit.asyhari16@gmail.com', NULL, '$2y$10$WSZPifxWKyKWec/uiEV8V.zW6yfTYQMRLKRCWQaV.WKcWUpSriG7a', NULL, '2021-08-16 21:09:52', '2021-08-17 05:07:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensis_id_kelas_foreign` (`id_kelas`);

--
-- Indexes for table `absensi_users`
--
ALTER TABLE `absensi_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_users_user_id_foreign` (`user_id`),
  ADD KEY `absensi_users_absensi_id_foreign` (`absensi_id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwals_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `profile_ortus`
--
ALTER TABLE `profile_ortus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_ortus_user_id_foreign` (`user_id`),
  ADD KEY `profile_ortus_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `profile_users`
--
ALTER TABLE `profile_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_profile_user_id_user` (`id_user`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksis_user_id_foreign` (`user_id`),
  ADD KEY `transaksis_kelas_id_foreign` (`kelas_id`);

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
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `absensi_users`
--
ALTER TABLE `absensi_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `profile_ortus`
--
ALTER TABLE `profile_ortus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profile_users`
--
ALTER TABLE `profile_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `absensi_users`
--
ALTER TABLE `absensi_users`
  ADD CONSTRAINT `absensi_users_absensi_id_foreign` FOREIGN KEY (`absensi_id`) REFERENCES `absensis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absensi_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profile_ortus`
--
ALTER TABLE `profile_ortus`
  ADD CONSTRAINT `profile_ortus_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `profile_ortus_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profile_users`
--
ALTER TABLE `profile_users`
  ADD CONSTRAINT `fk_profile_user_id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
