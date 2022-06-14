-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 02:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categories_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `categories_name`, `description`) VALUES
(1, NULL, NULL, 'ANALGESIK NARKOTIK', 'Analgesik narkotik adalah senyawa yang dapat menekan sistem saraf pusat secara selektif, digunakan untuk mengurangi rasa nyeri yang disebabkan oleh penyakit kanker, serangan jantung akut, sesudah operasi dan kolik usus atau ginjal.'),
(2, NULL, NULL, 'ANALGESIK NON NARKOTIK', 'Obat Analgesik Non-Narkotik dalam Ilmu Farmakologi juga sering dikenal dengan istilah Analgetik/Analgetika/ Analgesik Perifer. Analgetika perifer (non-narkotik), yang terdiri dari obat-obat yang tidak bersifat narkotik dan tidak bekerja sentral.'),
(3, NULL, NULL, 'ANTIPIRAI', 'Antipirai adalah obat untuk mengobati pirai (artritis gout) atau sering disebut penyakit asam urat.'),
(4, NULL, NULL, 'NYERI NEUROPATIK', 'Neuropati adalah istilah yang digunakan untuk gejala gangguan atau penyakit pada saraf di tubuh. Gejala yang muncul bisa berupa nyeri, kesemutan, kram otot, hingga susah buang air kecil.'),
(5, NULL, NULL, 'ANESTETIK LOKAL', 'Anestesi lokal atau kadang disebut sebagai bius lokal adalah obat yang menyebabkan tidak adanya sensasi nyeri. Ketika digunakan pada jalur saraf spesifik, kelumpuhan juga bisa sewaktu-waktu terjadi. Anastesi lokal klinis tergolong menjadi dua jenis: aminoamida dan aminoester.'),
(6, NULL, NULL, 'ANESTETIK UMUM dan OKSIGEN', 'Anestesi umum atau general anestesi merupakan tindakan meniadakan nyeri secara sentral disertai hilangnya kesadaran yang dapat pulih kembali (reversible). Anestesi umum menyebabkan mati rasa karena obat ini masuk ke jaringan otak dengan tekanan setempat yang tinggi.'),
(7, NULL, NULL, 'OBAT untuk PROSEDUR PRE OPERATIF', ''),
(8, NULL, NULL, 'ANTIALERGI dan OBAT untuk ANAFILAKSIS', 'Antialergi dan anafilaksis adalah obat yang digunakan dalam terapi untuk pengobatan gejala sakit alergi dan gejala sakit oleh karena terjadi anafilaksis, terhadap atau oleh karena alergen seperti obat, minuman atau oleh karena pengaruh lingkungan.'),
(9, NULL, NULL, 'ANTIEPILEPSI - ANTIKONVULSI', 'Antikonvulsan adalah obat untuk mencegah atau mengatasi kejang atau epilepsi. Antikonvulsan atau antikejang tersedia dalam berbagai bentuk obat dan hanya boleh digunakan sesuai resep dokter.'),
(10, NULL, NULL, 'HORMON dan ANTIHORMON', '');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_02_21_041354_create_product_table', 2),
(4, '2022_02_21_041426_create_category_table', 2),
(5, '2022_02_21_041651_create_products_table', 3),
(6, '2022_02_21_041713_create_categories_table', 3),
(7, '2022_02_21_042839_alter_products_table', 4),
(8, '2022_02_21_043323_alter_categories_table', 4),
(9, '2022_02_21_043935_add_categoryid_table', 5),
(10, '2022_02_28_124721_alter_categoriesdesk_table', 6),
(11, '2022_02_28_125025_alter_productsmed_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `generic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicines_form` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restriction_formula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faskes_tk1` tinyint(1) NOT NULL,
  `faskes_tk2` tinyint(1) NOT NULL,
  `faskes_tk3` tinyint(1) NOT NULL,
  `price` double(12,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `category_id`, `generic_name`, `medicines_form`, `restriction_formula`, `description`, `faskes_tk1`, `faskes_tk2`, `faskes_tk3`, `price`, `image`) VALUES
(1, NULL, NULL, 1, 'fentanil', 'inj 0,05 mg/mL (i.m./i.v.)', '5 amp/kasus.', 'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.', 0, 1, 1, 32000.00, 'fentanil_inj 0,05 mg.jpg'),
(2, NULL, NULL, 1, 'fentanil', 'patch 12,5 mcg/jam', '10 patch/bulan.', 'patch:Untuk nyeri kronik pada pasien kanker yang tidak terkendali. Tidak untuk nyeri akut', 0, 1, 1, 32000.00, 'fentanil_12,5mcg.jpg'),
(3, NULL, NULL, 1, 'fentanil', 'patch 25 mcg/jam', '10 patch/bulan.', 'patch:Untuk nyeri kronik pada pasien kanker yang tidak terkendali. Tidak untuk nyeri akut', 0, 1, 1, 32000.00, 'fentanil_25mcg.jpg'),
(4, NULL, NULL, 1, 'hidromorfon', 'tab lepas lambat 8 mg', '30 tab/bulan.', '', 0, 1, 1, 30000.00, 'hidromorfon_8mg.jpg'),
(5, NULL, NULL, 1, 'hidromorfon', 'tab lepas lambat 16 mg', '30 tab/bulan.', '', 0, 1, 1, 30000.00, 'hidromorfon_16mg.jpg'),
(6, NULL, NULL, 1, 'kodein', 'tab 10 mg', '30 tab/bulan.', '', 1, 1, 1, 40000.00, 'kodein_10mg.jpg'),
(7, NULL, NULL, 1, 'kodein', 'tab 20 mg', '30 tab/bulan.', '', 1, 1, 1, 40000.00, 'kodein_20mg.jpg'),
(8, NULL, NULL, 2, 'asam mefenamat', 'kaps 250 mg', '30 kaps/bulan.', '', 1, 1, 1, 10000.00, 'asam mefenamat_250mg.jpg'),
(9, NULL, NULL, 2, 'asam mefenamat', 'tab 500 mg', '30 tab/bulan.', '', 1, 1, 1, 10000.00, 'asam mefenamat_500mg.jpg'),
(10, NULL, NULL, 2, 'ketoprofen', 'inj 50 mg/mL', '', 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral.', 0, 1, 1, 12000.00, 'ketoprofen_inj50mg.jpg'),
(11, NULL, NULL, 2, 'ketoprofen', 'sup 100 mg', '2 sup/hari, maks 3 \n            hari.', 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral.', 0, 1, 1, 12000.00, 'ketoprofen_sup100mg.jpg'),
(12, NULL, NULL, 2, 'ketorolak', ' inj 30 mg/mL', '2-3 amp/hari,\n            maks 2 hari.', 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral.', 0, 1, 1, 15000.00, 'ketorolak.jpg'),
(13, NULL, NULL, 3, 'alopurinol', 'tab 100 mg*', '30 tab/bulan.', 'Tidak diberikan pada saat nyeri akut.', 1, 1, 1, 20000.00, 'alopurinol_100mg.jpg'),
(14, NULL, NULL, 3, 'alopurinol', 'tab 300 mg', '30 tab/bulan.', 'Tidak diberikan pada saat nyeri akut.', 1, 1, 1, 20000.00, 'alopurinol_300mg.jpg'),
(15, NULL, NULL, 3, 'kolkisin', 'tab 500 mcg', '30 tab/bulan.', '', 1, 1, 1, 25000.00, 'kolkisin.jpg'),
(16, NULL, NULL, 3, 'probenesid', 'tab 500 mg', '30 tab/bulan.', '', 1, 1, 1, 50000.00, 'probenesid.jpg'),
(17, NULL, NULL, 4, 'amitriptilin', 'tab 25 mg', '30 tab/bulan.', '', 1, 1, 1, 30000.00, 'amitriptilin.jpg'),
(18, NULL, NULL, 4, 'gabapentin', ' kaps 100 mg', '60 kaps/bulan.', 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.', 0, 1, 1, 55000.00, 'gabapentin_100mg.jpg'),
(19, NULL, NULL, 4, 'gabapentin', 'kaps 300 mg', '30 kaps/bulan.', 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.', 0, 1, 1, 55000.00, 'gabapentin.jpg'),
(20, NULL, NULL, 4, 'karbamazepin', 'tab 100 mg', '60 tab/bulan.', 'Hanya untuk neuralgia trigeminal.', 1, 1, 1, 46000.00, 'karbamazepin.jpg'),
(21, NULL, NULL, 5, 'bupivakain', 'inj 0,5%', '', '', 0, 1, 1, 45000.00, 'bupivakain.jpg'),
(22, NULL, NULL, 5, 'bupivakain heavy', 'inj 0,5% + glukosa 8%', '', 'Khusus untuk analgesia spinal.', 0, 1, 1, 57000.00, 'bupivakain.jpg'),
(23, NULL, NULL, 5, 'etil klorida', 'spray 100 mL', '', '', 1, 1, 1, 60000.00, 'etil klorida.jpg'),
(24, NULL, NULL, 6, 'deksmedetomidin', 'inj 100 mcg/mL', '', 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.', 0, 1, 1, 57000.00, 'deksmedetomidin.jpg'),
(25, NULL, NULL, 6, 'desfluran', 'ih', '', '', 0, 1, 1, 30000.00, 'desfluran.jpg'),
(26, NULL, NULL, 6, 'propofol', ' inj 1% ', '', '', 0, 1, 1, 45000.00, 'propofol.jpg'),
(27, NULL, NULL, 7, 'atropin', 'inj 0,25 mg/mL (i.v./s.k.) ', '', '', 1, 1, 1, 78000.00, 'atropin.jpg'),
(28, NULL, NULL, 7, 'diazepam', 'inj 5 mg/mL', '', '', 1, 1, 1, 28000.00, 'diazepam.jpg'),
(29, NULL, NULL, 7, 'midazolam', 'inj 1 mg/mL (i.v.)', 'Dosis rumatan: 1 mg/jam (24 mg/hari). Dosis premedikasi: 8 vial/kasus.', 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.', 0, 1, 1, 46000.00, 'midazolam.jpg'),
(30, NULL, NULL, 7, 'midazolam', 'inj 5 mg/mL (i.v.)', 'Dosis rumatan: 1 mg/jam (24 mg/hari). Dosis premedikasi: 8 vial/kasus.', 'Dapat digunakan untuk sedasi pada pasien ICU dan HCU.', 0, 1, 1, 60000.00, 'midazolam_5mg.jpg'),
(31, NULL, NULL, 8, 'deksametason', 'inj 5 mg/mL', '20 mg/hari.', '', 1, 1, 1, 30000.00, 'deksametason.jpg'),
(32, NULL, NULL, 8, 'difenhidramin', 'inj 10 mg/mL (i.v./i.m.) ', '30 mg/hari.', '', 1, 1, 1, 47000.00, 'difenhidramin.jpg'),
(33, NULL, NULL, 8, 'epinefrin (adrenalin)', 'inj 1 mg/mL', '', '', 1, 1, 1, 43000.00, 'epinefrin.jpg'),
(34, NULL, NULL, 9, 'klonazepam', 'tab 2 mg', '30 tab/bulan.', '', 0, 1, 1, 38000.00, 'klonazepam.jpg'),
(35, NULL, NULL, 9, 'levetirasetam', ' tab 250 mg', '60 tab/bulan.', 'Sebagai terapi tambahan pada pasien epilepsi onset parsial.', 0, 0, 1, 50000.00, 'levetirasetam_250mg.jpg'),
(36, NULL, NULL, 9, 'levetirasetam', 'tab 500 mg', '90 tab/bulan.', 'Sebagai terapi tambahan pada pasien epilepsi onset parsial.', 0, 0, 1, 50000.00, 'levetirasetam.jpg'),
(37, NULL, NULL, 9, 'okskarbazepin', 'susp 60 mg/mL*', '', '', 0, 1, 1, 42000.00, 'okskarbazepin_60mg.jpg'),
(38, NULL, NULL, 10, 'anastrozol', 'tab 1 mg', '30 tab/bulan.', 'Dapat digunakan untuk kanker payudara post menopause dengan pemeriksaan reseptor estrogen/progesteron positif.', 0, 0, 1, 46000.00, 'anastrozol.jpg'),
(39, NULL, NULL, 10, 'metilprednisolon', 'tab 4 mg', '', '', 0, 1, 1, 34000.00, 'metilprednisolon_4mg.jpg'),
(40, NULL, NULL, 10, 'metilprednisolon', 'tab 16 mg', '', '', 0, 1, 1, 34000.00, 'metilprednisolon_16mg.jpg'),
(41, NULL, NULL, 10, 'letrozol', 'tab 2,5 mg', '30 tab/bulan.', 'Untuk kanker payudara pada post menopause dengan reseptor ER dan/atau PR positif. ', 0, 0, 1, 44000.00, 'letrozol.jpg');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
