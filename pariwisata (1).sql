-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 11:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `kota_destinasi` varchar(255) NOT NULL,
  `provinsi_destinasi` varchar(255) NOT NULL,
  `kategori_destinasi` varchar(255) NOT NULL,
  `harga_destinasi` varchar(255) NOT NULL,
  `deskripsi_destinasi` varchar(255) NOT NULL,
  `gambar_destinasi` varchar(255) NOT NULL,
  `link_maps` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `nama_destinasi`, `kota_destinasi`, `provinsi_destinasi`, `kategori_destinasi`, `harga_destinasi`, `deskripsi_destinasi`, `gambar_destinasi`, `link_maps`) VALUES
(1, 'Masjid Cheng Hoo', 'Pandaan', 'East Java', 'Religion', 'FREE', 'Masjid Cheng Hoo in Pandaan uniquely blends Islamic and Chinese architecture, creating a serene space that reflects the cultural richness of its surroundings.', 'chenghoo.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15817.252658843814!2d112.69305531057516!3d-7.6494352110277415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d99aa2236825%3A0x83863533cf0d0f81!2sMasjid%20Muhammad%20Cheng%20Hoo!5e0!3m2!1sid!2sid!4v1701284619260!5m2!1sid!2sid'),
(2, 'Taman Safari Pandaan', 'Pandaan', 'East Java', 'Nature', '250K', 'Taman Safari Prigen: A captivating Indonesian wildlife park offering a unique safari experience amidst picturesque landscapes, perfect for families and nature enthusiasts.', 'safari.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63252.74526143161!2d112.58772504863282!3d-7.758337199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d7e760373d7f%3A0x77f02a789d5a548e!2sThe%20Grand%20Taman%20Safari%20Prigen%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1701285942154!5m2!1sid!2sid'),
(3, 'Taman Hobbit', 'Sidoarjo', 'East Java', 'Fun', '150K', 'Taman Rumah Hobbit Sidoarjo, nestled in Indonesia, offers a whimsical escape with its charming hobbit houses and enchanting surroundings.', 'hobbit.png\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.739854941352!2d112.6384763757945!3d-7.383023572676115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e30b95264143%3A0x32352133e7cdfa3a!2sTaman%20Rumah%20HOBBIT!5e0!3m2!1sid!2sid!4v1701289159605!5m2!1sid!2sid'),
(5, 'Candi Borobudur', 'Magelang', 'Central Java', 'History', '200K', 'Candi Borobudur, a UNESCO World Heritage site in Indonesia, is the world\'s largest Buddhist temple, renowned for its majestic architecture in the Central Java.', 'borobudur.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.697418037061!2d110.20117637579716!3d-7.607868475202864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8cf009a7d697%3A0xdd34334744dc3cb!2sCandi%20Borobudur!5e0!3m2!1sid!2sid!4v1701289212918!5m2!1sid!2sid'),
(7, 'Gunung Bromo', 'Probolinggo', 'East Java', 'Nature', '200K', 'Gunung Bromo in East Java, Indonesia, is a mesmerizing volcano with breathtaking calderas and sunrise views in Bromo-Tengger-Semeru National Park.', 'bromo.png', ''),
(8, 'Air Terjun Tapak Sewu', 'Lumajang', 'East Java', 'Nature', '200K', 'Air Terjun Tumpak Sewu in East Java, Indonesia, is a mesmerizing waterfall surrounded by lush greenery, known for its stunning cascade.', 'tapaksewu.png', ''),
(9, 'Kawah Ijen', 'Banyuwangi', 'East Java', 'Nature', '200K', 'Lorem Lagiiii', 'kawahijen.png', ''),
(10, 'Benteng Vredeburg', 'Yogyakarta', 'Yogyakarta', 'History', '200K', 'Lorem Lagiiii', 'benteng.png', ''),
(11, 'Museum Nasional Indonesia', 'Jakarta Pusat', 'DKI Jakarta', 'History', '100K', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis', 'museumgajah.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `kategori_tempat` varchar(255) NOT NULL,
  `gambar_tempat` varchar(255) NOT NULL,
  `jarak_tempat` varchar(255) NOT NULL,
  `links` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `destination_id`, `nama_tempat`, `kategori_tempat`, `gambar_tempat`, `jarak_tempat`, `links`) VALUES
(2, 1, 'Lesehan Pak Sholeh', 'Restaurant', 'sholeh.png', '5,1 km', 'https://maps.app.goo.gl/exG1vuugtfqYQNNa9'),
(3, 1, 'Candra Hotel Pandaan', 'Hotel', 'candra.png', '2,1 km', 'https://maps.app.goo.gl/hEo1oWkFgLvzK2v89'),
(4, 1, 'K - Hotel Pandaan', 'Hotel', 'khotel.png', '4,7 km', ''),
(5, 2, 'Nasi Goreng Kaconk', 'Food Place', 'nasikaconk.png', '6,0 km', ''),
(6, 2, 'Cawang Dapur Bakar', 'Restaurant', 'cawang.jpg', '1,9 km', ''),
(7, 2, 'Baobab Safari Resort', 'Inn', 'baobab.jpg', '1,2 km', ''),
(8, 3, 'Warung Mbak Cicit', 'Food Place', 'cicit.jpg', '4,9 km', ''),
(10, 3, 'Warkop Genthong', 'Food Place', 'genthong.jpg', '2,7 km', ''),
(11, 3, 'PISWAY', 'Food Place', 'pisway.jpg', '3,1 km', ''),
(12, 5, 'Sarasvati Borobudur Hotel', 'Hotel', 'sarasvati.jpg', '1,6 km', ''),
(13, 5, 'Wahid Borobudur', 'Hotel', 'wahid.jpg', '1,2 km', ''),
(14, 5, 'Rumah Makan Minang Murah Meriah', 'Food Place', 'minang.jpg', '1,4 km', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_29_034551_create_destinations_table', 2),
(6, '2023_11_29_034758_create_destinations_table', 3),
(7, '2023_11_29_182245_create_locations_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arka Jenar Maarif', 'fuad16@gmail.com', NULL, '$2y$12$zJUsTuHQ1oWfYHW1zgQHcegtBL/fKM8oZ8BBrmXiNoDMR.DbjvasS', NULL, '2023-11-27 21:07:44', '2023-11-27 21:07:44'),
(3, 'ini hanya contoh', 'contoh@example.com', NULL, '$2y$12$1VFyCu.9UZguoqusxR//4e5hHfU6WGqHcV9pr0pLdJjJSzs8HMR6C', NULL, '2023-11-30 16:21:12', '2023-11-30 16:21:12'),
(4, '123', '123@gmail.com', NULL, '$2y$12$l535Fau/8SqXYDJDbhqLvePKTlb1RaHH5cA7zRPAR5Weuhgm6Q5wW', NULL, '2024-02-02 18:16:29', '2024-02-02 18:16:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locations_destination_id_foreign` (`destination_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
