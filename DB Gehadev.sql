-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table example2.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table example2.admin: ~2 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `email`, `password`, `role`) VALUES
	(2, 'admin@gmail.com', '$2y$10$sM5vhKSdpCX8ePL9SwCa.ewNtbouyjo52nPiPLzo2k3TKOs3ofHMG', 'superadmin'),
	(5, 'konsultan@gmail.com', '$2y$10$AKeJGJVRL3Uiln2r1YYrJ.wWP4VxS/37mxgDNwlachtBsmrIqgAcy', 'konsultan');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table example2.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table example2.admins: ~0 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table example2.aturan
CREATE TABLE IF NOT EXISTS `aturan` (
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  KEY `id_gejala` (`id_gejala`),
  KEY `id_penyakit` (`id_penyakit`),
  CONSTRAINT `aturan_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `aturan_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table example2.aturan: ~179 rows (approximately)
/*!40000 ALTER TABLE `aturan` DISABLE KEYS */;
INSERT INTO `aturan` (`id_penyakit`, `id_gejala`) VALUES
	(37, 45),
	(37, 46),
	(37, 47),
	(37, 48),
	(37, 49),
	(37, 50),
	(37, 51),
	(37, 52),
	(37, 53),
	(37, 54),
	(37, 55),
	(37, 56),
	(37, 62),
	(35, 45),
	(35, 46),
	(35, 47),
	(35, 48),
	(35, 49),
	(35, 50),
	(35, 51),
	(35, 52),
	(35, 53),
	(35, 54),
	(35, 55),
	(35, 56),
	(35, 63),
	(35, 64),
	(35, 65),
	(35, 66),
	(35, 69),
	(35, 71),
	(35, 74),
	(36, 45),
	(36, 46),
	(36, 47),
	(36, 48),
	(36, 49),
	(36, 50),
	(36, 51),
	(36, 52),
	(36, 53),
	(36, 54),
	(36, 55),
	(36, 59),
	(36, 60),
	(36, 61),
	(36, 62),
	(36, 63),
	(36, 64),
	(36, 65),
	(36, 67),
	(36, 68),
	(36, 69),
	(36, 70),
	(36, 71),
	(36, 72),
	(36, 76),
	(34, 45),
	(34, 46),
	(34, 47),
	(34, 48),
	(34, 49),
	(34, 50),
	(34, 51),
	(34, 52),
	(34, 53),
	(34, 54),
	(34, 55),
	(34, 60),
	(34, 61),
	(34, 62),
	(34, 63),
	(34, 64),
	(34, 65),
	(34, 67),
	(34, 68),
	(34, 69),
	(34, 70),
	(34, 71),
	(34, 72),
	(34, 76),
	(33, 45),
	(33, 46),
	(33, 47),
	(33, 48),
	(33, 49),
	(33, 50),
	(33, 51),
	(33, 52),
	(33, 53),
	(33, 54),
	(33, 55),
	(33, 56),
	(33, 57),
	(33, 58),
	(33, 59),
	(33, 60),
	(33, 61),
	(33, 62),
	(33, 63),
	(33, 64),
	(33, 65),
	(33, 66),
	(33, 67),
	(33, 68),
	(33, 69),
	(33, 70),
	(33, 71),
	(33, 76),
	(33, 77),
	(32, 45),
	(32, 46),
	(32, 47),
	(32, 48),
	(32, 49),
	(32, 50),
	(32, 51),
	(32, 52),
	(32, 53),
	(32, 54),
	(32, 55),
	(32, 56),
	(32, 57),
	(32, 58),
	(32, 59),
	(32, 60),
	(32, 61),
	(32, 62),
	(32, 63),
	(32, 64),
	(32, 65),
	(32, 66),
	(32, 67),
	(32, 68),
	(32, 69),
	(32, 70),
	(32, 71),
	(32, 72),
	(32, 76),
	(32, 77),
	(32, 78),
	(32, 80),
	(31, 45),
	(31, 46),
	(31, 47),
	(31, 48),
	(31, 49),
	(31, 50),
	(31, 51),
	(31, 52),
	(31, 53),
	(31, 54),
	(31, 55),
	(31, 56),
	(31, 57),
	(31, 58),
	(31, 59),
	(31, 60),
	(31, 61),
	(31, 62),
	(31, 63),
	(31, 64),
	(31, 65),
	(31, 66),
	(31, 67),
	(31, 68),
	(31, 69),
	(31, 70),
	(31, 71),
	(31, 72),
	(31, 73),
	(31, 74),
	(31, 75),
	(31, 76),
	(31, 77),
	(31, 78),
	(31, 79),
	(31, 80),
	(31, 81);
/*!40000 ALTER TABLE `aturan` ENABLE KEYS */;

-- Dumping structure for table example2.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table example2.contacts: ~2 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'test', 'test@gmail.com', 'test', '2023-02-06 19:50:34', '2023-02-06 19:50:34'),
	(2, 'dafi', 'daf@gmail.com', 'Hallo Lur', '2023-08-05 12:15:39', '2023-08-05 12:15:39');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table example2.factors
CREATE TABLE IF NOT EXISTS `factors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_faktor` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faktor_det` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faktor_quest` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `factors_id_faktor_unique` (`id_faktor`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table example2.factors: ~8 rows (approximately)
/*!40000 ALTER TABLE `factors` DISABLE KEYS */;
INSERT INTO `factors` (`id`, `id_faktor`, `faktor_det`, `faktor_quest`, `created_at`, `updated_at`) VALUES
	(1, 'F001', 'AC Kamar', 'Apakah ada AC Kamar ?', '2023-02-02 10:58:32', '2023-02-02 10:58:32'),
	(2, 'F002', 'TV Digital', 'Apakah ada TV Digital di kamar ?', '2023-02-02 10:58:55', '2023-02-02 10:58:55'),
	(3, 'F003', 'Meja Kamar', 'Apakah ada Meja di Kamar ?', '2023-02-02 10:59:27', '2023-02-02 10:59:27'),
	(4, 'F004', 'Sofa / Kursi Kamar', 'Apakah ada Sofa / Kursi di Kamar ?', '2023-02-02 10:59:49', '2023-02-02 10:59:49'),
	(5, 'F005', 'Lemari Kamar', 'Apakah ada Lemari di Kamar ?', '2023-02-02 11:00:25', '2023-02-02 11:00:25'),
	(6, 'F006', 'Peralatan Mandi', 'Apakah disediakan peralatan Mandi ?', '2023-02-02 11:01:10', '2023-02-02 11:01:10'),
	(7, 'F007', 'Air Minum', 'Apakah disediakan Air Minum untuk tamu yang menginap ??', '2023-02-02 11:01:56', '2023-02-02 11:03:29'),
	(8, 'F008', 'Shower Kamar Mandi Kamar', 'Apakah disediakan Shower di Kamar Mandi dalam Kamar ??', '2023-02-02 11:02:49', '2023-02-02 11:02:49'),
	(9, 'F009', 'Kulkas', 'Apakah ada Kulkas ?', '2023-02-02 11:04:26', '2023-02-02 11:04:26'),
	(10, 'F010', 'Ruang Tamu', 'Apakah ada ruang tamu ?', '2023-02-02 11:04:51', '2023-02-02 11:04:51');
/*!40000 ALTER TABLE `factors` ENABLE KEYS */;

-- Dumping structure for table example2.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table example2.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table example2.gejala
CREATE TABLE IF NOT EXISTS `gejala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

-- Dumping data for table example2.gejala: ~34 rows (approximately)
/*!40000 ALTER TABLE `gejala` DISABLE KEYS */;
INSERT INTO `gejala` (`id`, `nama`) VALUES
	(45, 'AC (Kamar)'),
	(46, 'TV Digital (Kamar)'),
	(47, 'Meja (Kamar)'),
	(48, 'Lemari (Kamar)'),
	(49, 'Kursi / Sofa Nyaman (Kamar)'),
	(50, 'Telepon (Kamar)'),
	(51, 'Air Minum / Minuman (Kamar)'),
	(52, 'Bathtub (Fasilitas K.Mandi Kamar)'),
	(53, 'Shower (Fasilitas K.Mandi Kamar)'),
	(54, 'Air Hangat (Fasilitas K.Mandi Kamar)'),
	(55, 'Peralatan Mandi Lengkap + Handuk (Fasilitas K.Mandi Kamar)'),
	(56, 'Wifi (Umum)'),
	(57, 'AC Area umum'),
	(58, 'TV Digital (Umum)'),
	(59, 'Pelayanan Makan'),
	(60, 'Tampat Parkir Yang Layak'),
	(61, 'Dapur Lengkap + Kulkas'),
	(62, 'Musholla'),
	(63, 'Ruang Tamu'),
	(64, 'Balkon'),
	(65, 'Taman'),
	(66, 'Laundry (Berbayar / Tidak)'),
	(67, 'Kolam Renang'),
	(68, 'Bathtub (Fasilitas K.Mandi Umum)'),
	(69, 'Shower (Fasilitas K.Mandi Umum)'),
	(70, 'Air Hangat (Fasilitas K.Mandi Umum)'),
	(71, 'Peralatan Mandi Lengkap + Handuk (Fasilitas K.Mandi Umum)'),
	(72, 'Keamanan Privasi / Tempat Lokasi Senyap'),
	(73, 'Objek Wisata'),
	(74, 'Minimarket'),
	(75, 'Toko Kelontong'),
	(76, 'Penjual Makanan'),
	(77, 'CCTV Di area umum'),
	(78, 'Software Manajemen Channel'),
	(79, 'Manajemen Medsos'),
	(80, 'Website'),
	(81, 'Laptop / Komputer Admin');
/*!40000 ALTER TABLE `gejala` ENABLE KEYS */;

-- Dumping structure for table example2.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table example2.migrations: ~10 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_12_12_090024_create_contacts_table', 1),
	(6, '2022_12_13_202245_create_posts_table', 1),
	(7, '2022_12_15_003456_create_std_knowledges_table', 1),
	(8, '2023_01_06_204755_create_admins_table', 1),
	(9, '2023_02_02_004833_create_prices_table', 1),
	(10, '2023_02_02_005054_create_factors_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table example2.obat
CREATE TABLE IF NOT EXISTS `obat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Dumping data for table example2.obat: ~5 rows (approximately)
/*!40000 ALTER TABLE `obat` DISABLE KEYS */;
INSERT INTO `obat` (`id`, `nama`, `foto`, `deskripsi`) VALUES
	(13, 'Puncak Harga Tertinggi', '1691225610_undraw_For_sale_re_egkk.png', 'Pertahankan dan Terus Rawat Propertimu'),
	(14, '1 Level Harga Dibawah A', '1691225671_undraw_At_home_re_1m0v.png', 'Ayo Tingkatkan Kualitas dan Terus Rawat Propertimu'),
	(15, '2 Level Harga Dibawah A', '1691225779_undraw_Ordinary_day_re_v5hy.png', 'Ayo Tingkatkan Kualitas dan Terus Rawat Propertimu'),
	(16, '3 Level Harga Dibawah A', '1691225819_undraw_sweet_home_dkhr.png', 'Ayo Tingkatkan Kualitas dan Terus Rawat Propertimu'),
	(17, 'Harga Paling Bawah', '1691225849_undraw_under_construction_46pa.png', 'Ayo Tingkatkan Kualitas dan Terus Rawat Propertimu');
/*!40000 ALTER TABLE `obat` ENABLE KEYS */;

-- Dumping structure for table example2.obat_penyakit
CREATE TABLE IF NOT EXISTS `obat_penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  KEY `id_obat` (`id_obat`),
  KEY `id_penyakit` (`id_penyakit`),
  CONSTRAINT `obat_penyakit_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `obat_penyakit_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table example2.obat_penyakit: ~6 rows (approximately)
/*!40000 ALTER TABLE `obat_penyakit` DISABLE KEYS */;
INSERT INTO `obat_penyakit` (`id_penyakit`, `id_obat`) VALUES
	(35, 17),
	(33, 15),
	(32, 14),
	(34, 16),
	(36, 16),
	(37, 17),
	(31, 13);
/*!40000 ALTER TABLE `obat_penyakit` ENABLE KEYS */;

-- Dumping structure for table example2.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table example2.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table example2.penyakit
CREATE TABLE IF NOT EXISTS `penyakit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `penjelasan` text NOT NULL,
  `tindakan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- Dumping data for table example2.penyakit: ~7 rows (approximately)
/*!40000 ALTER TABLE `penyakit` DISABLE KEYS */;
INSERT INTO `penyakit` (`id`, `nama`, `penjelasan`, `tindakan`, `foto`) VALUES
	(31, 'A', 'Harian : > 250.000,... Mingguan : > 1.350.000,... Bulanan : > 3.000.000', 'Pertahankan !!!', '1691220720_undraw_For_sale_re_egkk.png'),
	(32, 'B', 'Harian = ( > Rp. 220.000 ),... Mingguan = ( > Rp. 1.190.000 ),... Bulanan = ( > Rp. 2.500.000 )', 'Tingkatkan Kualitasmu Agar Harga Bisa Naik 1 Level Ke Kategori A', '1691318009_undraw_At_home_re_1m0v.png'),
	(33, 'C', 'Harian = ( > Rp. 180.000 ),... Mingguan = ( > Rp. 975.000 ),... Bulanan = ( > Rp. 2.000.000 )', 'Ayo Tingkatkan Kualitasmu Agar Bisa Naik 1 Level Ke Kategori Harga B', '1691226597_undraw_Ordinary_day_re_v5hy.png'),
	(34, 'D', 'Harian = ( > Rp. 150.000 ),...Mingguan = ( > Rp. 810.000 ),... Bulanan = ( > Rp. 1.500.000 )', 'Ayo Tingkatkan Kualitas Agar Harga Bisa Naik Lebih Baik Lagi', '1691226589_undraw_sweet_home_dkhr.png'),
	(35, 'E', 'Harian = ( < Rp. 150.000 ),...Mingguan = ( < Rp. 810.000 ),... Bulanan = ( < Rp. 1.500.000 )', 'Kamu Memasuki Kategori Harga Paling Dasar, Ayo Lebih Semangat Meningkatkan Kualitas Properti Lagi', '1691225100_undraw_under_construction_46pa.png'),
	(36, 'D', 'Harian = ( > Rp. 150.000 ),...Mingguan = ( > Rp. 810.000 ),... Bulanan = ( > Rp. 1.500.000 )', 'Ayo Tingkatkan Kualitas Propertimu Lagi', '1691677728_undraw_quality_time_wiyl.png'),
	(37, 'E', 'Harian = ( < Rp. 150.000 ),...Mingguan = ( < Rp. 810.000 ),... Bulanan = ( < Rp. 1.500.000 )', 'Kategori Harga Terendah', '1692069954_undraw_Setup_re_y9w8.png');
/*!40000 ALTER TABLE `penyakit` ENABLE KEYS */;

-- Dumping structure for table example2.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table example2.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table example2.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table example2.posts: ~2 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `slug`, `category`, `content`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Cara Menentukan Karyawan Berdasarkan Kebutuhan', 'Cara-Menentukan-Karyawan-Berdasarkan-Kebutuhan', 'GENERAL', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?</p><p><i><strong>Lorem</strong></i><br><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?</i></p><p><i>Lorem ipsum dolor sit amet consectetur adip</i>isicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?</p><p>&nbsp;</p><p>IG : Gehadev<br>&nbsp;</p>', 'image/020220231052.jpg', '2023-02-02 10:52:46', '2023-02-02 10:52:46'),
	(2, 'Cara Mengelola Tempat Parkir Dengan Benar', 'Cara-Mengelola-Tempat-Parkir-Dengan-Benar', 'PROPERTI', '<p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?</strong></p><p><i><strong>Lorem</strong></i><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?</p><p>&nbsp;</p><p>IG : Gehadev</p><p>&nbsp;</p>', 'image/020220231053.jpg', '2023-02-02 10:53:44', '2023-08-10 12:13:30'),
	(3, 'Cara Mengelola Properti Dengan Baik dan Benar', 'Cara-Mengelola-Properti-Dengan-Baik-dan-Benar', 'PROPERTI', '<p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?</strong></p><p><i><strong>Lorem</strong></i><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?</p><p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis? </i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequatur vitae quos quaerat odio nulla explicabo maiores non, similique blanditiis?</p><p>…</p><p>&nbsp;</p><p>IG : Gehadev</p><p>&nbsp;</p>', 'image/100820232151.jpg', '2023-02-02 10:54:43', '2023-08-10 21:51:55');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table example2.prices
CREATE TABLE IF NOT EXISTS `prices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_harga` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_det` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `prices_id_harga_unique` (`id_harga`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table example2.prices: ~4 rows (approximately)
/*!40000 ALTER TABLE `prices` DISABLE KEYS */;
INSERT INTO `prices` (`id`, `id_harga`, `harga_det`, `created_at`, `updated_at`) VALUES
	(1, 'H001', 'Harga Kateogri A =\r\nHarian : Rp. 200.000 - 250.000\r\nMingguan : RP. 1.200.000 - RP. 1.350.000\r\nBulanan : Rp.2. 500.000 - Rp. 3.000.000', '2023-02-02 10:42:24', '2023-02-02 10:47:33'),
	(2, 'H002', 'Harga Kateogri B = Harian : Rp. 180.000 - 230.000 Mingguan : RP. 1.100.000 - RP. 1.250.000 Bulanan : Rp. 2.300.000 - Rp. 2.500.000', '2023-02-02 10:44:34', '2023-02-02 10:48:14'),
	(5, 'H003', 'Harga Kateogri C = Harian : Rp. 170.000 - 200.000 Mingguan : RP. 1.000.000 - RP. 1.200.000 Bulanan : Rp.2.200.000 - Rp.2.400.000', '2023-02-02 10:45:58', '2023-02-02 10:45:58'),
	(6, 'H004', 'Harga Kateogri D = Harian : Rp. 160.000 - 190.000 Mingguan : RP. 960.000 - RP. 1.100.000 Bulanan : Rp.2.100.000 - Rp.2.300.000', '2023-02-02 10:46:25', '2023-02-02 10:46:25'),
	(7, 'H005', 'Harga Kateogri E = Harian : Rp. 150.000 - 170.000 Mingguan : RP. 900.000 - RP. 1.000.000 Bulanan : Rp.2.000.000 - Rp.2.200.000', '2023-02-02 10:46:37', '2023-02-02 10:46:37');
/*!40000 ALTER TABLE `prices` ENABLE KEYS */;

-- Dumping structure for table example2.report
CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `penyakit_id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `penyakit_id` (`penyakit_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `report_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`no_telp`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- Dumping data for table example2.report: ~33 rows (approximately)
/*!40000 ALTER TABLE `report` DISABLE KEYS */;
INSERT INTO `report` (`id`, `penyakit_id`, `user_id`, `tanggal`) VALUES
	(1, 31, '5464564', '2023-08-05'),
	(2, 31, '0898989', '2023-08-05'),
	(3, 0, '0898989', '2023-08-05'),
	(4, 31, '0898989', '2023-08-05'),
	(5, 35, '678678678678', '2023-08-06'),
	(6, 31, '678678678678', '2023-08-06'),
	(7, 0, '678678678678', '2023-08-06'),
	(8, 36, '678678678678', '2023-08-06'),
	(9, 34, '678678678678', '2023-08-06'),
	(10, 33, '678678678678', '2023-08-06'),
	(11, 31, '678678678678', '2023-08-06'),
	(12, 31, '678678678678', '2023-08-06'),
	(13, 32, '678678678678', '2023-08-06'),
	(14, 31, '08999', '2023-08-07'),
	(15, 0, '098091283123', '2023-08-07'),
	(16, 31, '5657567567', '2023-08-10'),
	(17, 0, '5657567567', '2023-08-10'),
	(18, 36, '011012983', '2023-08-10'),
	(19, 37, '019823791823', '2023-08-10'),
	(20, 31, '8792492834234', '2023-08-11'),
	(21, 35, '1231423434234', '2023-08-13'),
	(22, 38, '1231423434234', '2023-08-13'),
	(23, 32, '1231423434234', '2023-08-13'),
	(24, 31, '08187231623', '2023-08-14'),
	(25, 40, '08187231623', '2023-08-14'),
	(26, 37, '08187231623', '2023-08-14'),
	(27, 33, '08187231623', '2023-08-14'),
	(28, 37, '08187231623', '2023-08-14'),
	(29, 31, '789879789', '2023-08-15'),
	(30, 41, '789879789', '2023-08-15'),
	(31, 37, '789879789', '2023-08-15'),
	(32, 41, '789879789', '2023-08-15'),
	(33, 37, '789879789', '2023-08-15'),
	(34, 31, '789879789', '2023-08-15'),
	(35, 35, '768678768768', '2023-08-15'),
	(36, 37, '768678768768', '2023-08-15'),
	(37, 31, '99800989987', '2023-08-15'),
	(38, 31, '99800989987', '2023-08-15'),
	(39, 37, '99800989987', '2023-08-15'),
	(40, 31, '09239812312', '2023-08-31'),
	(41, 0, '09239812312', '2023-08-31'),
	(42, 33, '67867678678678', '2023-09-01');
/*!40000 ALTER TABLE `report` ENABLE KEYS */;

-- Dumping structure for table example2.std_knowledges
CREATE TABLE IF NOT EXISTS `std_knowledges` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table example2.std_knowledges: ~5 rows (approximately)
/*!40000 ALTER TABLE `std_knowledges` DISABLE KEYS */;
INSERT INTO `std_knowledges` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
	(9, 'Kategori Harga A', '<p><strong>Merupakan Kategori Harga Tertinggi</strong></p><p>Dengan Range Harga <i><strong>Harian = ( &gt; Rp 250.000 ), Mingguan = ( &gt; Rp 1.350.000 ), Bulanan = ( &gt; Rp 3.000.000)</strong></i></p>', 'image/100820232159.png', '2023-08-10 21:59:38', '2023-08-10 21:59:38'),
	(10, 'Kategori Harga B', '<p><strong>Merupakan Harga Tertinggi Ke Dua</strong></p><p>Dengan Range Harga <i><strong>Harian = ( &gt; Rp 220.000 ), Mingguan = ( &gt; Rp 1.190.000 ), Bulanan = ( &gt; Rp 2.500.000 )</strong></i></p>', 'image/100820232205.png', '2023-08-10 22:01:09', '2023-08-10 22:05:52'),
	(11, 'Kategori Harga C', '<p><strong>Merupakan Range Harga Tengah</strong></p><p>Dengan range harga <i><strong>Harian = ( &gt; Rp 180.000 ), Mingguan = ( &gt; Rp 975.000 ), Bulanan = ( &gt; 2.000.000 )</strong></i></p>', 'image/100820232206.png', '2023-08-10 22:03:18', '2023-08-10 22:06:36'),
	(12, 'Kategori Harga D', '<p><strong>Merupakan Kategori Harga Terendah Ke Dua</strong></p><p>Dengan range harga <i><strong>Harian = ( &gt; Rp 150.000 ), Mingguan ( &gt; Rp 810.000 ), Bulanan ( &gt; Rp 1.500.000 )</strong></i></p>', 'image/100820232208.png', '2023-08-10 22:08:57', '2023-08-10 22:08:57'),
	(13, 'Kategori Harga E', '<p><strong>Merupakan Kategori Harga Paling Dasar</strong></p><p>Dengan range harga<i><strong> Harian = ( &gt; Rp 120.000 ), Mingguan = ( &gt; Rp 650.000 ), Bulanan = ( &gt; Rp 900.000 )</strong></i></p>', 'image/100820232210.png', '2023-08-10 22:10:46', '2023-08-30 10:49:21');
/*!40000 ALTER TABLE `std_knowledges` ENABLE KEYS */;

-- Dumping structure for table example2.user
CREATE TABLE IF NOT EXISTS `user` (
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  PRIMARY KEY (`no_telp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table example2.user: ~8 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`nama`, `no_telp`) VALUES
	('ghj', '011012983'),
	('ghj', '019823791823'),
	('test', '08187231623'),
	('diki', '0843284298432423'),
	('sdfsdff', '0898989'),
	('guys', '08999'),
	('deden', '09239812312'),
	('sulun', '098091283123'),
	('taft', '1231423434234'),
	('ddd', '5464564'),
	('mft', '5656656756'),
	('dims', '5657567567'),
	('dddddd', '67867678678678'),
	('ky', '678678678678'),
	('test3', '768678768768'),
	('test2', '789879789'),
	('asror', '8792492834234'),
	('sahruil', '89089089098'),
	('test4', '99800989987');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table example2.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table example2.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Rendra Indra', 'rendra@gehadev.com', NULL, '$2y$10$PgJh4QnXKeum2J/egyNd8uCRd4rSiOZBlUVvvFh353TFA0phoS2be', NULL, '2023-02-02 10:41:30', '2023-02-02 10:41:30'),
	(2, 'gehamin', 'gehamin@gmail.com', NULL, '$2y$10$jWKDAYDNVOo4KtwJvReUkeySzGWitZICTqutaB0MkdvK/Lnr554Wm', NULL, '2023-06-22 22:39:25', '2023-06-22 22:39:25'),
	(3, 'PeskaMin', 'peskamin@gmail.com', NULL, '$2y$10$y0mpDYOax7xDDmpvGUx0cuwJ7tgB8MsPBGBB2HRq6a6/GDJWSYx2y', NULL, '2023-06-27 21:55:17', '2023-06-27 21:55:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
