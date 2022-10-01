-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 07:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobacms`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_aktivitas` date NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_aktv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`id`, `judul`, `tgl_aktivitas`, `author`, `isi`, `img_aktv`, `created_at`, `updated_at`) VALUES
(2, 'Konser Han Jisung', '2022-08-24', 'admin', 'weqetyh4ayjsd', '20220812062146.jpg', '2022-08-11 23:21:46', '2022-08-24 17:13:53'),
(3, 'Rapat dengan Bu Wakil Walikota Madiun', '2022-08-31', 'Admin', 'Rapat guys, harus datang yaa gaboleh ga datang', 'WhatsApp-Image-2022-04-01-at-13.36.18-1.jpeg', '2022-08-18 07:17:38', '2022-09-01 18:35:18'),
(7, 'sfdyj', '2022-08-25', 'dinas pendidikan', 'tidur guysss', '93edda1c01cb2acad1cdba910bee321b.jpg', '2022-08-23 22:59:54', '2022-08-24 08:45:01'),
(10, 'sdkj', '2022-09-05', 'admin', 'aWREtyd', 'E98blK8VEAII6SY.jpg', '2022-08-24 08:39:33', '2022-08-24 08:39:33'),
(11, 'dqWfergzet', '2022-08-23', 'admin', 'waretrs', 'Ei7MqkjVoAA-8hX-removebg-preview.png', '2022-08-24 17:13:08', '2022-08-24 17:13:08'),
(14, 'Konser Stray Kids', '2022-09-01', 'Admin', '2nd World Tour in Jakarta', 'Em6__TnVQAAEEU_.jpg', '2022-08-29 20:21:29', '2022-08-31 23:53:03'),
(16, 'Tingkatkan Pelayanan Aduan, Pemkot Komitmen Kuatkan Pengelolaan SP4N LAPOR', '2022-09-06', 'Admin', '<p>MADIUN &ndash; Urusan keterbukaan informasi memang bukan sekedar penyebaran berita. Namun, juga bagaimana pemerintah daerah menangani setiap aduan masyarakat. Karenanya, upaya peningkatan layanan aduan terus dilakukan. Salah satunya, melalui penguatan komitmen pimpinan terhadap pengembangan Sistem Pengelolaan Pengaduan Pelayanan Publik Nasional (SP4N) Layanan dan Pengaduan Online Rakyat (LAPOR) Kota Madiun, Jumat (1/4).</p>\r\n\r\n<p>Kegiatan tersebut menghadirkan Asisten Deputi Transformasi Digital Pelayanan Publik Kemenpan RB, Yanuar Ahmad sebagai narasumber secara virtual. Sementara, Wali Kota Madiun, Maidi mengikuti kegiatan dari GCIO Dinas Kominfo Kota Madiun.</p>', 'WhatsApp-Image-2022-04-01-at-13.36.19-1.jpeg', '2022-08-31 23:54:49', '2022-09-07 23:51:37'),
(18, 'retyu', '2022-09-27', 'admin', 'derty', '2a23f035-ff5e-437a-a7cc-e11549c96f49.jpg', '2022-09-06 17:34:20', '2022-09-06 17:34:20'),
(19, 'xsdert', '2022-09-13', 'ardila lukita', 'ewrty', 'dfs.jpg', '2022-09-06 17:35:45', '2022-09-06 17:35:45'),
(21, 'aswretyt', '2022-09-20', 'admin', '<p>eqwreatsrydtjufadvg</p>\r\n\r\n<p>shdfajsh</p>\r\n\r\n<p>hjSALJKFSGD</p>\r\n\r\n<p>HGavdsjaektrjlyu</p>\r\n\r\n<table border=\"2\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>dsetryu</td>\r\n			<td>tshdyj</td>\r\n		</tr>\r\n		<tr>\r\n			<td>rth</td>\r\n			<td>thyf</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 'gcio.jpg', '2022-09-07 18:30:57', '2022-09-07 23:51:01');

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
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `tgl_kegiatan`, `created_at`, `updated_at`, `deskripsi`) VALUES
(3, 'Penyuluhan', '2022-08-16', '2022-08-10 17:14:59', '2022-08-10 17:14:59', 'rggr'),
(6, 'bakti sosial', '2022-08-31', '2022-08-10 17:44:48', '2022-08-10 17:44:48', 'bakti sosial'),
(11, 'efGS', '2022-08-12', '2022-08-10 18:04:06', '2022-08-10 18:04:06', 'sGR'),
(12, 'rga', '2022-08-03', '2022-08-10 18:04:19', '2022-08-10 18:04:19', 'reag'),
(13, 'ETGW4', '2022-08-09', '2022-08-11 18:11:12', '2022-08-11 18:11:12', 'rwtr'),
(16, 'easy', '2022-08-25', '2022-08-24 00:12:24', '2022-08-29 20:32:01', 'hari ini'),
(17, 'ghg', '2022-09-01', '2022-08-30 17:17:29', '2022-08-30 17:17:29', 'dszfgxhcj');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_08_05_011026_saran_table', 1),
(5, '2022_08_05_151636_create_users_table', 1),
(6, '2022_08_05_172258_create_kegiatans_table', 1),
(7, '2022_08_06_020906_add_deskripsi_to_create_kegiatans_table', 1),
(8, '2022_08_09_014535_create_profil_table', 1),
(9, '2022_08_12_014539_create_aktivitas_table', 2),
(10, '2022_08_12_024315_create_aktivitas_table', 3),
(11, '2022_09_01_002057_create_pengumuman_table', 4),
(12, '2022_09_01_005333_create_pengumuman_table', 5),
(13, '2022_09_02_025906_create_pengumuman_table', 6),
(14, '2022_09_07_014743_create_pelayanan_table', 7),
(15, '2022_09_13_195327_create_petugas_table', 8),
(16, '2022_09_14_004650_create_permohonan_table', 9),
(17, '2022_09_14_034716_create_pengajuan_table', 10),
(18, '2022_09_14_035407_create_penyelesaian_table', 11);

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
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komponen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id`, `jenis`, `komponen`, `uraian`, `created_at`, `updated_at`) VALUES
(1, 'Pemberian Informasi oleh Pejabat Pengelola Informasi dan Dokumentasi (PPID)', '<ol>\r\n	<li>Persyaratan Pelayanan</li>\r\n	<li>Sistem, mekanisme, dan prosedur</li>\r\n	<li>Jangka waktu penyelesaian</li>\r\n	<li>Biaya/tarif</li>\r\n	<li>Produk layanan</li>\r\n	<li><span dir=\"ltr\">Penanganan</span><span dir=\"ltr\"> Pengaduan, Saran, dan</span><span dir=\"ltr\"> Masuk</span></li>\r\n</ol>', '<p><strong>1. Persyaratan Pelayanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Identitas Pemohon (</span><span dir=\"ltr\">KT</span><span dir=\"ltr\">P/</span><span dir=\"ltr\"> </span><span dir=\"ltr\">SIM/</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Paspor</span><span dir=\"ltr\">);</span></li>\r\n	<li><span dir=\"ltr\">Jika</span><span dir=\"ltr\"> </span><span dir=\"ltr\">ada</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Akta</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Notaris</span><span dir=\"ltr\"> </span><span dir=\"ltr\">dan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Dokumen Pengesahan</span><span dir=\"ltr\"> bagi Badan hukum dan/</span><span dir=\"ltr\"> </span><span dir=\"ltr\">atau Badan Publik</span><span dir=\"ltr\">;</span></li>\r\n	<li><span dir=\"ltr\">Mengisi Formulir permohonan informasi</span><span dir=\"ltr\">.</span></li>\r\n</ul>\r\n\r\n<p><strong>2. Sistem, mekanisme, dan prosedur</strong></p>\r\n\r\n<p><span dir=\"ltr\">&nbsp;&nbsp;&nbsp; D</span><span dir=\"ltr\">apat</span><span dir=\"ltr\"> </span><span dir=\"ltr\">dil</span><span dir=\"ltr\">aksa</span><span dir=\"ltr\">nakan</span><span dir=\"ltr\"> men</span><span dir=\"ltr\">jad</span><span dir=\"ltr\">i 2</span><span dir=\"ltr\"> </span><span dir=\"ltr\">(dua) cara</span><span dir=\"ltr\">:</span></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Dengan Tat</span><span dir=\"ltr\">ap Muka ke PPID Kota Madiun</span></li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/img/SP/1a.png\" style=\"height:225px; width:400px\" /></p>\r\n\r\n<ul>\r\n	<li>M<span dir=\"ltr\">elalui Media Daring (Online)</span></li>\r\n</ul>\r\n\r\n<p><span dir=\"ltr\"><img alt=\"\" src=\"http://127.0.0.1:8000/img/SP/1b.png\" style=\"height:260px; width:400px\" /></span></p>\r\n\r\n<p><strong>3. Jangka waktu penyelesaian</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">10</span><span dir=\"ltr\"> </span><span dir=\"ltr\">(sepuluh)</span><span dir=\"ltr\"> </span><span dir=\"ltr\">hari</span><span dir=\"ltr\"> </span><span dir=\"ltr\">kerja,</span><span dir=\"ltr\"> </span><span dir=\"ltr\">dapat</span><span dir=\"ltr\"> </span><span dir=\"ltr\">diperpanjang</span><span dir=\"ltr\"> </span><span dir=\"ltr\">paling</span><span dir=\"ltr\"> lam</span><span dir=\"ltr\">a</span><span dir=\"ltr\"> </span><span dir=\"ltr\">7 (tujuh) hari kerja</span></li>\r\n</ul>\r\n\r\n<p><strong>4. Biaya/tarif</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Tidak dipungut biaya</span></li>\r\n</ul>\r\n\r\n<p><strong>5. Produk layanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Informasi Publik Pemerintah Kota Madiun</span></li>\r\n</ul>\r\n\r\n<p><strong><span dir=\"ltr\">6. Penanganan</span><span dir=\"ltr\"> Pengaduan, Saran, dan</span><span dir=\"ltr\"> Masuk</span></strong></p>\r\n\r\n<p><span dir=\"ltr\">&nbsp;&nbsp;&nbsp; Pelayanan pen</span><span dir=\"ltr\">gaduan dapat dil</span><span dir=\"ltr\">akuka</span><span dir=\"ltr\">n dengan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">:</span></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">D</span><span dir=\"ltr\">ata</span><span dir=\"ltr\">ng langsung</span></li>\r\n	<li><span dir=\"ltr\">Telepon (0</span><span dir=\"ltr\">351) 467327</span></li>\r\n	<li><span dir=\"ltr\">Fax (0351) 457331</span></li>\r\n	<li><span dir=\"ltr\">Email</span><span dir=\"ltr\"> </span><span dir=\"ltr\">ppidkotamadiun@gmail.com</span></li>\r\n	<li><span dir=\"ltr\">Radio Suara Madiun</span></li>\r\n	<li><span dir=\"ltr\">Melalui LAPOR! SP4N</span></li>\r\n	<li><span dir=\"ltr\">Media Sosial</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Pemerintah Kota Madiun</span></li>\r\n	<li><span dir=\"ltr\">Website ppid.mad</span><span dir=\"ltr\">iunkota.go.id.</span></li>\r\n</ul>', '2022-09-06 19:27:28', '2022-09-29 23:28:30'),
(2, 'Layanan Aspirasi dan Solusi di LPPL Radio Suara Madiun', '<ol>\r\n	<li>Persyaratan Pelayanan</li>\r\n	<li>Sistem, mekanisme, dan prosedur</li>\r\n	<li>Jangka waktu penyelesaian</li>\r\n	<li>Biaya/tarif</li>\r\n	<li>Produk layanan</li>\r\n	<li><span dir=\"ltr\">Penanganan</span><span dir=\"ltr\"> Pengaduan, Saran, dan</span><span dir=\"ltr\"> Masuk</span></li>\r\n</ol>', '<p><strong>1. Persyaratan Pelayanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">M</span><span dir=\"ltr\">encantumkan/m</span><span dir=\"ltr\">enyampa</span><span dir=\"ltr\">ikan identitas diri se</span><span dir=\"ltr\">suai KTP</span></li>\r\n</ul>\r\n\r\n<p><strong>2. Sistem, mekanisme, dan prosedur</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Penyampaian aspirasi/saran/kritik tentang Kota Madiun</span><span dir=\"ltr\"> dapat</span><span dir=\"ltr\"> </span><span dir=\"ltr\">dilakukan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Pendengar</span><span dir=\"ltr\"> </span><span dir=\"ltr\">dengan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">cara</span><span dir=\"ltr\"> menelpon/meninggalkan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">komentar</span><span dir=\"ltr\"> </span><span dir=\"ltr\">pada</span><span dir=\"ltr\"> </span><span dir=\"ltr\">kolom</span><span dir=\"ltr\"> komentar</span><span dir=\"ltr\"> </span><span dir=\"ltr\">setiap</span><span dir=\"ltr\"> </span><span dir=\"ltr\">acar</span><span dir=\"ltr\">a</span><span dir=\"ltr\"> </span><span dir=\"ltr\">yang</span><span dir=\"ltr\"> </span><span dir=\"ltr\">ditayangk</span><span dir=\"ltr\">an</span><span dir=\"ltr\"> </span><span dir=\"ltr\">secara</span><span dir=\"ltr\"> liv</span><span dir=\"ltr\">e</span><span dir=\"ltr\"> strea</span><span dir=\"ltr\">ming</span><span dir=\"ltr\"> </span><span dir=\"ltr\">di FP Pemerintah</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Kota Madiun dan FP LPPL</span><span dir=\"ltr\"> Radio</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Suara Madiun</span><span dir=\"ltr\">. Selain itu, melalui SMS/WA atau</span><span dir=\"ltr\"> Direct Massanger</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Instagram @93fmsuaramadiun</span></li>\r\n</ul>\r\n\r\n<p><span dir=\"ltr\"><img alt=\"\" src=\"http://127.0.0.1:8000/img/SP/2.png\" style=\"height:287px; width:400px\" /></span></p>\r\n\r\n<p><strong>3. Jangka waktu penyelesaian</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">1 (satu) ja</span><span dir=\"ltr\">m</span></li>\r\n</ul>\r\n\r\n<p><strong>4. Biaya/tarif</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Tidak dipungut biaya</span></li>\r\n</ul>\r\n\r\n<p><strong>5. Produk layanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Informasi tentang Pemerintah Kota Madiun</span></li>\r\n</ul>\r\n\r\n<p><strong><span dir=\"ltr\">6. Penanganan</span><span dir=\"ltr\"> Pengaduan, Saran, dan</span><span dir=\"ltr\"> Masuk</span></strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Melalui</span><span dir=\"ltr\"> </span><span dir=\"ltr\">kolom komentar/</span><span dir=\"ltr\"> inbox</span><span dir=\"ltr\"> </span><span dir=\"ltr\">di FB Pemerintah Kota</span><span dir=\"ltr\"> Madiun dan FP LPPL Radio Suara Madiun</span></li>\r\n	<li><span dir=\"ltr\">Melalui</span><span dir=\"ltr\"> </span><span dir=\"ltr\">telepo</span><span dir=\"ltr\">n</span><span dir=\"ltr\"> </span><span dir=\"ltr\">: (0</span><span dir=\"ltr\">351</span><span dir=\"ltr\">)</span><span dir=\"ltr\"> </span><span dir=\"ltr\">46181</span><span dir=\"ltr\">7 dan SMS/WA</span><span dir=\"ltr\"> </span><span dir=\"ltr\">di</span><span dir=\"ltr\"> 0815</span><span dir=\"ltr\">66451817</span></li>\r\n	<li><span dir=\"ltr\">Instagram @93</span><span dir=\"ltr\">fmsuaramadiun</span></li>\r\n	<li><span dir=\"ltr\">Melalui email : 93</span><span dir=\"ltr\">fmsuaramadiu</span><span dir=\"ltr\">n@gmail.com</span></li>\r\n</ul>', '2022-09-29 23:25:31', '2022-09-29 23:28:58'),
(3, 'Peliputan Kegiatan Pemerintah Kota Madiun', '<ol>\r\n	<li>Persyaratan Pelayanan</li>\r\n	<li>Sistem, mekanisme, dan prosedur</li>\r\n	<li>Jangka waktu penyelesaian</li>\r\n	<li>Biaya/tarif</li>\r\n	<li>Produk layanan</li>\r\n	<li><span dir=\"ltr\">Penanganan</span><span dir=\"ltr\"> Pengaduan, Saran, dan</span><span dir=\"ltr\"> Masuk</span></li>\r\n</ol>', '<p><strong>1. Persyaratan Pelayanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Surat</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Permohonan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Peliputan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">atau</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Jadwal/</span><span dir=\"ltr\"> </span><span dir=\"ltr\">agenda</span><span dir=\"ltr\"> kegiatan Pemerintah Kota Madiun</span><span dir=\"ltr\">;</span></li>\r\n	<li><span dir=\"ltr\">Ad</span><span dir=\"ltr\">anya</span><span dir=\"ltr\"> </span><span dir=\"ltr\">arahan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">pimp</span><span dir=\"ltr\">inan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">untuk</span><span dir=\"ltr\"> </span><span dir=\"ltr\">me</span><span dir=\"ltr\">laksana</span><span dir=\"ltr\">kan</span><span dir=\"ltr\"> peliputan</span><span dir=\"ltr\">;</span></li>\r\n	<li><span dir=\"ltr\">Pembagi</span><span dir=\"ltr\">an Tugas dari Koordinator Liputan</span></li>\r\n</ul>\r\n\r\n<p><strong>2. Sistem, mekanisme, dan prosedur</strong></p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/img/SP/3.png\" style=\"height:371px; width:400px\" /></p>\r\n\r\n<p><strong>3. Jangka waktu penyelesaian</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">1 (sa</span><span dir=\"ltr\">tu) hari</span></li>\r\n</ul>\r\n\r\n<p><strong>4. Biaya/tarif</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Tidak dipungut biaya</span></li>\r\n</ul>\r\n\r\n<p><strong>5. Produk layanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Dokumentasi peliputan berup</span><span dir=\"ltr\">a foto, rekaman,</span><span dir=\"ltr\"> </span><span dir=\"ltr\">dan video</span><span dir=\"ltr\"> ya</span><span dir=\"ltr\">ng</span><span dir=\"ltr\"> </span><span dir=\"ltr\">dipu</span><span dir=\"ltr\">blikasikan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">ke</span><span dir=\"ltr\">pada</span><span dir=\"ltr\"> </span><span dir=\"ltr\">masy</span><span dir=\"ltr\">arakat melalui Media</span><span dir=\"ltr\"> Informasi</span><span dir=\"ltr\"> </span><span dir=\"ltr\">P</span><span dir=\"ltr\">emerintah Kota Madiun</span><span dir=\"ltr\">.</span></li>\r\n</ul>\r\n\r\n<p><strong>6. Penanganan Pengaduan, Saran, dan Masuk</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Melalui</span><span dir=\"ltr\"> </span><span dir=\"ltr\">telepon</span><span dir=\"ltr\"> </span><span dir=\"ltr\">: (0</span><span dir=\"ltr\">351</span><span dir=\"ltr\">)</span><span dir=\"ltr\"> </span><span dir=\"ltr\">4673</span><span dir=\"ltr\">27</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '2022-09-29 23:27:49', '2022-09-29 23:29:16'),
(4, 'Pelayanan Data Statistik Sektoral', '<ol>\r\n	<li>Persyaratan Pelayanan</li>\r\n	<li>Sistem, mekanisme, dan prosedur</li>\r\n	<li>Jangka waktu penyelesaian</li>\r\n	<li>Biaya/tarif</li>\r\n	<li>Produk layanan</li>\r\n	<li><span dir=\"ltr\">Penanganan</span><span dir=\"ltr\"> Pengaduan, Saran, dan</span><span dir=\"ltr\"> Masuk</span></li>\r\n</ol>', '<p><strong>1. Persyaratan Pelayanan</strong></p>\r\n\r\n<p><span dir=\"ltr\">&nbsp;&nbsp;&nbsp; 1.</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Pemohon data</span><span dir=\"ltr\"> </span><span dir=\"ltr\">langsung ke D</span><span dir=\"ltr\">inas Ko</span><span dir=\"ltr\">munikasi dan</span><span dir=\"ltr\"> Inform</span><span dir=\"ltr\">atika Kota Madiun</span></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Pemohon menunjukkan identitas pribadi</span></li>\r\n	<li><span dir=\"ltr\">Mengisi buku tamu atau daftar tamu</span></li>\r\n	<li><span dir=\"ltr\">Mengisi form</span><span dir=\"ltr\">ulir permintaan data yang dibutuhkan</span></li>\r\n</ul>\r\n\r\n<p><span dir=\"ltr\">&nbsp;&nbsp;&nbsp; 2. Pemohon menyampaikan permohonan data melalui</span><span dir=\"ltr\"> surat kepada</span> <span dir=\"ltr\">Kepala Dinas </span><br />\r\n<span dir=\"ltr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kom</span><span dir=\"ltr\">unikasi dan I</span><span dir=\"ltr\">nformat</span><span dir=\"ltr\">ika</span><span dir=\"ltr\"> Kota Madiun</span></p>\r\n\r\n<p><strong>2. Sistem, mekanisme, dan prosedur</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Pemohon Datang Langsung</span></li>\r\n</ul>\r\n\r\n<p><span dir=\"ltr\"><img alt=\"\" src=\"http://127.0.0.1:8000/img/SP/4a.png\" style=\"height:277px; width:400px\" /></span></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Pemohon Melalui</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Surat</span></li>\r\n</ul>\r\n\r\n<p><span dir=\"ltr\"><img alt=\"\" src=\"http://127.0.0.1:8000/img/SP/4b.png\" style=\"height:315px; width:400px\" /></span></p>\r\n\r\n<p><strong>3. Jangka waktu penyelesaian</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Pemohon yang datang langsung : 1 (satu) jam seja</span><span dir=\"ltr\">k</span><span dir=\"ltr\"> permintaan data</span></li>\r\n	<li><span dir=\"ltr\">Pemohon mela</span><span dir=\"ltr\">lui sur</span><span dir=\"ltr\">at : pemohon menerima</span><span dir=\"ltr\"> </span><span dir=\"ltr\">jawaban</span><span dir=\"ltr\"> maksimal 3 (tiga) hari kerja sejak surat permohonan</span><span dir=\"ltr\"> diterima petugas data</span></li>\r\n</ul>\r\n\r\n<p><strong>4. Biaya/tarif</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Tidak dip</span><span dir=\"ltr\">ungut biaya</span></li>\r\n</ul>\r\n\r\n<p><strong>5. Produk layanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Data statistik</span></li>\r\n</ul>\r\n\r\n<p><strong>6. Penanganan Pengaduan, Saran, dan Masuk</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Melalui telepon (035</span><span dir=\"ltr\">1) 467327</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '2022-09-29 23:31:15', '2022-09-29 23:34:58'),
(5, 'Pelayanan Wifi Gratis', '<ol>\r\n	<li>Persyaratan Pelayanan</li>\r\n	<li>Sistem, mekanisme, dan prosedur</li>\r\n	<li>Jangka waktu penyelesaian</li>\r\n	<li>Biaya/tarif</li>\r\n	<li>Produk layanan</li>\r\n	<li><span dir=\"ltr\">Penanganan</span><span dir=\"ltr\"> Pengaduan, Saran, dan</span><span dir=\"ltr\"> Masuk</span></li>\r\n</ol>', '<p><strong>1. Persyaratan Pelayanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Surat terkai</span><span dir=\"ltr\">t permohonan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">pemasangan wifi di</span><span dir=\"ltr\">fasili</span><span dir=\"ltr\">t</span><span dir=\"ltr\">as umum masyaraka</span><span dir=\"ltr\">t</span></li>\r\n	<li><span dir=\"ltr\">Menyebutkan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">nama</span><span dir=\"ltr\"> </span><span dir=\"ltr\">t</span><span dir=\"ltr\">empat</span><span dir=\"ltr\"> </span><span dir=\"ltr\">dan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">alamat</span><span dir=\"ltr\"> pemas</span><span dir=\"ltr\">angan wifi gratis</span></li>\r\n	<li><span dir=\"ltr\">Melaporkan trobel wifi melalui aplikasi service</span><span dir=\"ltr\"> desk dan whatsapp group wifi</span></li>\r\n</ul>\r\n\r\n<p><strong>2. Sistem, mekanisme, dan prosedur</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">P</span><span dir=\"ltr\">ermohonan pe</span><span dir=\"ltr\">masangan wifi gratis</span></li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/img/SP/5a.png\" style=\"height:474px; width:400px\" /></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Pela</span><span dir=\"ltr\">poran/pengadu</span><span dir=\"ltr\">an gang</span><span dir=\"ltr\">guan/ perbaikan wifi</span><span dir=\"ltr\"> g</span><span dir=\"ltr\">ratis melalui aplikasi service</span><span dir=\"ltr\"> </span><span dir=\"ltr\">desk</span><span dir=\"ltr\">.</span></li>\r\n</ul>\r\n\r\n<p><span dir=\"ltr\"><img alt=\"\" src=\"http://127.0.0.1:8000/img/SP/5b.png\" style=\"height:289px; width:400px\" /></span></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Pelaporan/</span><span dir=\"ltr\"> </span><span dir=\"ltr\">pengaduan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">gangguan/</span><span dir=\"ltr\"> </span><span dir=\"ltr\">perbaikan</span><span dir=\"ltr\"> wifi gratis melalui group whatssapp</span></li>\r\n</ul>\r\n\r\n<p><span dir=\"ltr\"><img alt=\"\" src=\"http://127.0.0.1:8000/img/SP/5c.png\" style=\"height:627px; width:400px\" /></span></p>\r\n\r\n<p><strong>3. Jangka waktu penyelesaian</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Minimal 1</span><span dir=\"ltr\"> </span><span dir=\"ltr\">hari</span></li>\r\n</ul>\r\n\r\n<p><strong>4. Biaya/tarif</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Tidak dipungut</span><span dir=\"ltr\"> </span><span dir=\"ltr\">biaya</span></li>\r\n</ul>\r\n\r\n<p><strong>5. Produk layanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Jasa</span><span dir=\"ltr\"> </span><span dir=\"ltr\">perbaikan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">g</span><span dir=\"ltr\">angguan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">wifi</span><span dir=\"ltr\"> </span><span dir=\"ltr\">dan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">pemasangan</span><span dir=\"ltr\"> wifi gratis</span></li>\r\n</ul>\r\n\r\n<p><strong>6. Penanganan Pengaduan, Saran, dan Masuk</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">bersurat</span></li>\r\n	<li><span dir=\"ltr\">apl</span><span dir=\"ltr\">ikasi servicedesk.mad</span><span dir=\"ltr\">iunkota.go.id</span></li>\r\n	<li><span dir=\"ltr\">Wha</span><span dir=\"ltr\">tsapp group &ldquo;</span><span dir=\"ltr\">Wifi Gr</span><span dir=\"ltr\">atis Pemkot Madiun&rdquo;</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '2022-09-29 23:38:51', '2022-09-29 23:38:51'),
(6, 'Layanan Call Center 112', '<ol>\r\n	<li>Persyaratan Pelayanan</li>\r\n	<li>Sistem, mekanisme, dan prosedur</li>\r\n	<li>Jangka waktu penyelesaian</li>\r\n	<li>Biaya/tarif</li>\r\n	<li>Produk layanan</li>\r\n	<li><span dir=\"ltr\">Penanganan</span><span dir=\"ltr\"> Pengaduan, Saran, dan</span><span dir=\"ltr\"> Masuk</span></li>\r\n</ol>', '<p><strong>1. Persyaratan Pelayanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Panggilan darurat masuk melalui jaringan GSM</span><span dir=\"ltr\"> maupun PSTN ke nomor 112</span><span dir=\"ltr\"> Pa</span><span dir=\"ltr\">nggilan bera</span><span dir=\"ltr\">sal dari wilayah Kota Madiu</span><span dir=\"ltr\">n</span></li>\r\n</ul>\r\n\r\n<p><strong>2. Sistem, mekanisme, dan prosedur</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Panggilan Darurat 112</span></li>\r\n</ul>\r\n\r\n<p><span dir=\"ltr\"><img alt=\"\" src=\"http://127.0.0.1:8000/img/SP/6.png\" style=\"height:531px; width:400px\" /></span></p>\r\n\r\n<p><strong>3. Jangka waktu penyelesaian</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Maksimal</span><span dir=\"ltr\"> </span><span dir=\"ltr\">5</span><span dir=\"ltr\"> </span><span dir=\"ltr\">m</span><span dir=\"ltr\">enit</span><span dir=\"ltr\"> </span><span dir=\"ltr\">untuk</span><span dir=\"ltr\"> </span><span dir=\"ltr\">penyampaian</span><span dir=\"ltr\"> </span><span dir=\"ltr\">ke</span><span dir=\"ltr\"> dispatcher</span></li>\r\n	<li><span dir=\"ltr\">Maksimal 30 menit untuk panggilan tertangani</span><span dir=\"ltr\"> sampai ke feedba</span><span dir=\"ltr\">ck penangana</span><span dir=\"ltr\">n</span></li>\r\n</ul>\r\n\r\n<p><strong>4. Biaya/tarif</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Tidak dipungut biaya</span></li>\r\n</ul>\r\n\r\n<p><strong>5. Produk layanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Jasa penanganan panggilan da</span><span dir=\"ltr\">rurat 112</span></li>\r\n</ul>\r\n\r\n<p><strong>6. Penanganan Pengaduan, Saran, dan Masuk</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Berkirim surat</span></li>\r\n	<li><span dir=\"ltr\">Datang langsung</span></li>\r\n	<li><span dir=\"ltr\">Telep</span><span dir=\"ltr\">on</span><span dir=\"ltr\"> </span><span dir=\"ltr\">: 0351 (4</span><span dir=\"ltr\">67327) ;</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Fax. (0351) 457331</span></li>\r\n	<li><span dir=\"ltr\">Email :</span><span dir=\"ltr\"> </span><span dir=\"ltr\">k</span><span dir=\"ltr\">ominfo@madiunkota</span><span dir=\"ltr\">.go.id</span></li>\r\n	<li><span dir=\"ltr\">Web s</span><span dir=\"ltr\">ite : w</span><span dir=\"ltr\">ww.lapor.go.id</span></li>\r\n	<li><span dir=\"ltr\">SMS : M</span><span dir=\"ltr\">ADIUNKOTA(spasi)ISI ADUAN kirim ke</span><span dir=\"ltr\"> 1708</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '2022-09-29 23:54:06', '2022-09-29 23:54:06'),
(7, 'Government Chief Information Officer (GCIO)', '<ol>\r\n	<li>Persyaratan Pelayanan</li>\r\n	<li>Sistem, mekanisme, dan prosedur</li>\r\n	<li>Jangka waktu penyelesaian</li>\r\n	<li>Biaya/tarif</li>\r\n	<li>Produk layanan</li>\r\n	<li><span dir=\"ltr\">Penanganan</span><span dir=\"ltr\"> Pengaduan, Saran, dan</span><span dir=\"ltr\"> Masuk</span></li>\r\n</ol>', '<p><strong>1. Persyaratan Pelayanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Salah satu iden</span><span dir=\"ltr\">titas</span><span dir=\"ltr\"> </span><span dir=\"ltr\">pemohon (KTP,</span><span dir=\"ltr\"> </span><span dir=\"ltr\">SIM,</span><span dir=\"ltr\"> </span><span dir=\"ltr\">KIA,</span><span dir=\"ltr\"> Kartu Pelajar, Passport)</span></li>\r\n	<li><span dir=\"ltr\">Tidak boleh diwakilkan (sesuai identitas)</span></li>\r\n</ul>\r\n\r\n<p><strong>2. Sistem, mekanisme, dan prosedur</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Pemohon datang ke GCIO</span></li>\r\n</ul>\r\n\r\n<p><span dir=\"ltr\"><img alt=\"\" src=\"http://127.0.0.1:8000/img/SP/7.png\" style=\"height:207px; width:400px\" /></span></p>\r\n\r\n<p><strong>3. Jangka waktu penyelesaian</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Maksimal</span><span dir=\"ltr\"> </span><span dir=\"ltr\">5</span><span dir=\"ltr\"> </span><span dir=\"ltr\">menit</span><span dir=\"ltr\"> </span><span dir=\"ltr\">untuk</span><span dir=\"ltr\"> </span><span dir=\"ltr\">admi</span><span dir=\"ltr\">nistrasi</span><span dir=\"ltr\"> peng</span><span dir=\"ltr\">gunaan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">cowor</span><span dir=\"ltr\">king space</span></li>\r\n	<li><span dir=\"ltr\">Maksim</span><span dir=\"ltr\">al</span><span dir=\"ltr\"> </span><span dir=\"ltr\">10</span><span dir=\"ltr\"> </span><span dir=\"ltr\">menit</span><span dir=\"ltr\"> </span><span dir=\"ltr\">untuk</span><span dir=\"ltr\"> </span><span dir=\"ltr\">pelayanan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">informasi</span><span dir=\"ltr\"> pelatihan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">dan</span><span dir=\"ltr\"> </span><span dir=\"ltr\">2</span><span dir=\"ltr\"> </span><span dir=\"ltr\">minggu</span><span dir=\"ltr\"> </span><span dir=\"ltr\">untuk</span><span dir=\"ltr\"> </span><span dir=\"ltr\">pemanggilan</span><span dir=\"ltr\"> peserta/penginformasian jadual pelatihan</span></li>\r\n</ul>\r\n\r\n<p><strong>4. Biaya/tarif</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Tidak dipungut biaya</span></li>\r\n</ul>\r\n\r\n<p><strong>5. Produk layanan</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Jasa informasi pela</span><span dir=\"ltr\">tihan di GCIO</span></li>\r\n	<li><span dir=\"ltr\">Jas</span><span dir=\"ltr\">a pelatihan d</span><span dir=\"ltr\">i</span><span dir=\"ltr\"> </span><span dir=\"ltr\">GCIO</span></li>\r\n	<li><span dir=\"ltr\">Jasa c</span><span dir=\"ltr\">oworking space</span></li>\r\n</ul>\r\n\r\n<p><strong>6. Penanganan Pengaduan, Saran, dan Masuk</strong></p>\r\n\r\n<ul>\r\n	<li><span dir=\"ltr\">Berki</span><span dir=\"ltr\">r</span><span dir=\"ltr\">im sur</span><span dir=\"ltr\">at</span></li>\r\n	<li><span dir=\"ltr\">Dat</span><span dir=\"ltr\">ang langsung</span></li>\r\n	<li><span dir=\"ltr\">Tel</span><span dir=\"ltr\">epon</span><span dir=\"ltr\"> </span><span dir=\"ltr\">: 0351 (467327) ;</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Fax. (0351) 457331</span></li>\r\n	<li><span dir=\"ltr\">Email :</span><span dir=\"ltr\"> </span><span dir=\"ltr\">kominfo@madiunkota.go.id</span></li>\r\n	<li><span dir=\"ltr\">Web site : www.lapor.go.id</span></li>\r\n	<li><span dir=\"ltr\">SMS</span><span dir=\"ltr\"> </span><span dir=\"ltr\">:</span><span dir=\"ltr\"> </span><span dir=\"ltr\">MADIUNKOTA(spasi)ISI</span><span dir=\"ltr\"> </span><span dir=\"ltr\">ADUAN</span><span dir=\"ltr\"> </span><span dir=\"ltr\">kirim</span><span dir=\"ltr\"> </span><span dir=\"ltr\">ke</span><span dir=\"ltr\"> 1708</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '2022-09-29 23:56:32', '2022-09-29 23:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `judul`, `img`, `uraian`, `created_at`, `updated_at`) VALUES
(1, 'Prosedur Pengajuan Keberatan', 'pengajuan.jpg', '<p>Keterangan :</p>\r\n\r\n<ol>\r\n	<li>Pemohon mengajukan permohonan keberatan ke atasan PPID</li>\r\n	<li>Diterima di meja layanan informasi</li>\r\n	<li>Petugas PPID menulis dalam formulir permohonan keberatan meliputi kelengkapan administrasi : identittas pemohon dan alasan pemohon</li>\r\n	<li>Petugas meminta bukti permohonan informasi publik dan kelengkapannya</li>\r\n	<li>Jika persyaratan sudah terpenuhi, pemohon dipersilahkan menandatangani formulir permohonan keberatan, selanjutnya petugas menandatangani dan menulis nomor registrasi</li>\r\n	<li>Petugas menyampaikan formulir keberatan kepada pemohon dan atasan PPID serta mengarsipnya</li>\r\n	<li>Atasan PPID selama 30 hari kerja berhak memberi tanggapan / jawaban</li>\r\n	<li>Jika pemohon sudah puas dengan tanggapan yang diberikan, keberatan selesai</li>\r\n	<li>Jika pemohon tidak puas dengan tanggapan yang diberikan, maka mengajukan sengketa informasi ke Komisi Informasi (KI) selambat-lambatnya 14 hari kerja sejak mendapat tanggapan.</li>\r\n</ol>', '2022-09-13 20:52:50', '2022-09-28 17:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pengumuman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyelesaian`
--

CREATE TABLE `penyelesaian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyelesaian`
--

INSERT INTO `penyelesaian` (`id`, `judul`, `img`, `uraian`, `created_at`, `updated_at`) VALUES
(1, 'Prosedur Penyelesaian Sengketa', 'penyelesaian.jpg', NULL, '2022-09-13 21:03:30', '2022-09-28 17:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id`, `judul`, `img`, `uraian`, `created_at`, `updated_at`) VALUES
(1, 'Prosedur Permohonan Informasi', 'permohonan.jpg', '<p>Berikut ini merupakan alur permohonan informasi :</p>\r\n\r\n<ol>\r\n	<li>Pemohon informasi datang ke desk layanan informasi (Ruang PPID Dinas Komunikasi dan Informatika Kota Madiun)</li>\r\n	<li>Mengisi buku tamu PPID dan formulir permohonan informasi dengan melampirkan fotocopy KTP pemohon</li>\r\n	<li>Menjelaskan maksud dan tujuan permintaan informasi yang jelas penggunaannya</li>\r\n	<li>Petugas memberi tanda bukti penerimaan permohonan informasi kepada pemohon informasi</li>\r\n	<li>Petugas memproses permintaan permohonan informasi publik sesuai dengan formulir permintaan informasi publik yang sudah ditanda tangani pemohon informasi</li>\r\n	<li>Petugas menyerahkan informasi sesuai permintaan pemohon, jika informasi termasuk dalam kategori informasi dikecualikan, PPID menyampaikan alasan sesuai dengan perundangan yang berlaku</li>\r\n	<li>Petugas memberikan tanda bukti penyerahan informasi publik kepada pemohon informasi</li>\r\n	<li>Petugas membukukan formulir dan KTP pemohon dan mencatat</li>\r\n</ol>', '2022-09-13 19:42:53', '2022-09-28 17:20:31');

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
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelatihan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `jabatan`, `uraian`, `pendidikan`, `pelatihan`, `created_at`, `updated_at`) VALUES
(1, 'Satyo Naresworo', 'Prahum Ahli Pertama', '<ol>\r\n	<li>Menganalisis data dan Informasi dari media dan masyarakat;</li>\r\n	<li>menyusun program pelayanan informasi dan kehumasan sebagai anggota tim;</li>\r\n	<li>mengumpulkan isu publik;</li>\r\n	<li>Mengolah konten media;</li>\r\n	<li>Menyusun informasi strategis pemerintah sebagai anggota tim;</li>\r\n	<li>Menyusun materi layanan Informasi untuk media elektronik;</li>\r\n	<li>Menyusun berita pelayanan informasi dan kehumasan melalui media cetak;</li>\r\n	<li>Menyusun berita pelayanan Informasi dan kehumasan melalui media elektronik;</li>\r\n	<li>Menyusun berita pelayanan informasi dan kehumasan melalui media daring (online);</li>\r\n	<li>Menyusun naskah pelayanan informasi dan kehumasan dalam bentuk ceramah;</li>\r\n	<li>Menyusun naskah pelayanan Informasi dan kehumasan dalam bentuk pidato;</li>\r\n	<li>Menyusun naskah pelayanan informasi dan kehumasan dalam bentuk bahan tayang;</li>\r\n	<li>Menyusun naskah profil lembaga;</li>\r\n	<li>Menyelenggarakan penerbitan materi pelayanan informasi untuk media cetak, sebagai tim kreatif:</li>\r\n	<li>Menyelenggarakan penerbitan materi pelayanan informasi untuk media daring (online), sebagai tim kreatif;</li>\r\n	<li>Mengumpulkan isu tentang hubungan internal;</li>\r\n	<li>Menyusun bahan pelayanan informasi dan kehumasan dalam bentuk dialog;</li>\r\n	<li>Menyusun bahan pelayanan informasi dan kehumasan dalam bentuk ceramah;</li>\r\n	<li>Menyusun bahan pelayanan informasi dan kehumasan dalam bentuk briefing;</li>\r\n	<li>Menganalisis data dan Informasi dalam rangka pelaksanaan hubungan</li>\r\n</ol>', 'S1/ Hubungan Internasional', '<ol>\r\n	<li>Pelatihan Online Fitur Baru dan Strategis Komunikasi SP4NLAPOR! &quot;Pengelolaan Pengaduan terkait Covid-19&quot; oleh Kementerian PAN RB;</li>\r\n	<li>Peluncuran Kompetisi Pengelolaan Pengaduan Pelayanan Publik 2022 oleh Kementerian PAN RB;</li>\r\n	<li>Desain Grafis dan Desain Komunikasi Visual;</li>\r\n	<li>Rapat Koordinasi Virtual Layanan PPID Masa Pandemi Covid-19;</li>\r\n	<li>Kegiatan TOT HCD Imuniasal, REC, MVMH, dan PR Kegiatan Kerjasama UNAIR UNICEF, dan Dinas Kesehatan Provinsi Jawa Timur;</li>\r\n	<li>Review Tindak Lanjut Pengelolaan SP4NLAPOR!;</li>\r\n	<li>Ngobrol Pintar Bareng IPRAHUMAS;</li>\r\n	<li>Pelatihan Data Manajemen dan Analisis</li>\r\n	<li>Bimbingan Teknis Orkestrasi GPR untuk Narasi Tunggal</li>\r\n	<li>Seminar Indeks Pengelolaan Informasi dan Komunikasi Publik</li>\r\n</ol>', '2022-09-13 17:20:39', '2022-09-30 20:46:21'),
(2, 'Gilang Asnia Putra', 'Prahum Terampil', '<ol>\r\n	<li>Mengumpulkan data untuk perencanaan pelayanan informasi;</li>\r\n	<li>Mengumpulkan data untuk perencanaan hubungan eksternal;</li>\r\n	<li>Mengolah data untuk perencanaan pelayanan informasi;</li>\r\n	<li>Mengolah data untuk perencanaan hubungan eksternal;</li>\r\n	<li>Mengolah data untuk perencanaan hubungan internal;</li>\r\n	<li>Mengolah data untuk perencanaan, pengembangan pelayanan informasi dan kehumasan;</li>\r\n	<li>Menyusun rencana kebutuhan sarana, prasarana, dan biaya penyelenggaraan kegiatan pelayanan informasi dan kehumasan;</li>\r\n	<li>Merangcang tata letak (layout) ruang konferensi pers, resepsi pers, seminar, lokakarya, rapat kerja, pameran dan kegiatan sejenisnya;</li>\r\n	<li>Melakukan survei lokasi, atau tempat penyelenggaraan konferensi pers, seminar, lokakarya, rapat kerja, pameran dan kegiatan sejenisnya;</li>\r\n	<li>Mengikuti rapat kerja pimpinan yang berkaitan dengan pelayanan informasi dan kehumasan;</li>\r\n	<li>Mengumpulkan konten media.</li>\r\n</ol>', 'DIII/ Komunikasi', '<ol>\r\n	<li>Bimbingan Teknis JFPH (Jabatan Fungsional Pranata Humas) Diseminasi Konten Kreatif</li>\r\n	<li>Ngobrol Seru Pranata Humas Kementerian PUPR dengan topik &quot;How Media Work In Social Media Era&quot;</li>\r\n	<li>Bimbingan Teknis Pelaksanaan Kebijakan Sub Urusan Informasi dan Komunikasi Publik Monitoring Isu Publik</li>\r\n	<li>Pelatihan Pembentukan Jabatan Fungsional Pranata Humas Tingkat Keterampilan Tahun 2021</li>\r\n</ol>', '2022-09-30 20:49:26', '2022-09-30 20:49:26'),
(3, 'Christia Pahala', 'Prahum Terampil', '<ol>\r\n	<li>Mengumpulkan data untuk perencanaan pelayanan ifrormasi;</li>\r\n	<li>Mengumpulkan data untuk perencanaan hubungan eksternal;</li>\r\n	<li>Mengolah data untuk perencanaan pelayanan informasi;</li>\r\n	<li>Mengolah data untuk perencanaan hubungan eksternal;</li>\r\n	<li>Mengolah data untuk perencanaan hubungan internal;</li>\r\n	<li>Mengolah data untuk perencanaan, pengembangan pelayanan informasi dan kehumasan;</li>\r\n	<li>Menyusun rencana kebutuhan sarana, prasarana, dan biaya penyelenggaraan kegiatan pelayanan informasi dan kehumasan;</li>\r\n	<li>Merangcang tata letak (layout) ruang konferensi pers, resepsi pers, seminar, lokakarya, rapat kerja, pameran dan kegiatan sejenisnya;</li>\r\n	<li>Melakukan survei lokasi, atau tempat penyelenggaraan konferensi pers, seminar, lokakarya, rapat kerja, pameran dan kegiatan sejenisnya;</li>\r\n	<li>Mengikuti rapat kerja pimpinan yang berkaitan dengan pelayanan informasi dan kehumasan;</li>\r\n	<li>Mengumpulkan konten media.</li>\r\n</ol>', 'D III/ Komunikasi', '<ol>\r\n	<li>Ubilitas Akses Internet dan Jaringan 4G di wilayah 3T</li>\r\n</ol>', '2022-09-30 20:53:03', '2022-09-30 20:53:03'),
(4, 'Hendri Apriyadi', 'Prahum Terampil', '<ol>\r\n	<li>Mengumpulkan data untuk perencanaan pelayanan Informasi;</li>\r\n	<li>Mengumpulkan data untuk perencanaan hubungan eksternal;</li>\r\n	<li>Mengolah data untuk perencanaan pelayanan informasi;</li>\r\n	<li>Mengolah data untuk perencanaan hubungan eksternal;</li>\r\n	<li>Mengolah data untuk perencanaan hubungan internal;</li>\r\n	<li>Mengolah data untuk perencanaan, pengembangan pelayanan informasi dan kehumasan;</li>\r\n	<li>Menyusun rencana kebutuhan sarana, prasarana, dan biaya penyelenggaraan kegiatan pelayanan informasi dan kehumasan;</li>\r\n	<li>Merangcang tata letak (layout) ruang konferensi pers, resepsi pers, seminar, lokakarya, rapat kerja, pameran dan kegiatan sejenisnya;</li>\r\n	<li>Melakukan survei lokasi, atau tempat penyelenggaraan konferensi&nbsp;pers, seminar, lokakarya, rapat kerja, pameran dan kegiatan sejenisnya;</li>\r\n	<li>Mengikuti rapat kerja pimpinan yang berkaitan dengan pelayanan informasi dan kehumasan;</li>\r\n	<li>Mengumpulkan konten media.</li>\r\n</ol>', 'D III/ Komunikasi', '<ol>\r\n	<li>Bimbingan Teknis Pelaksanaan Kebijakan Sub Urusan Informasi dan Komunikasi Publik : Monitoring Isu Publik.</li>\r\n	<li>Bimbingan Teknis JFPH (Jabatan Fungsional Pranata Humas) Diseminasi Konten Kreatif</li>\r\n	<li>Pelatihan Kehumasan oleh Lembaga Pendidikan Yogya Executive School</li>\r\n	<li>Bimbingan Teknis Manajemen Resiko, Peta Rencana dan Arsitektur Sistem Pemerintahan</li>\r\n	<li>Bimbingan Teknis Orkestrasi GPR untuk Narasi Tunggal G20</li>\r\n	<li>Seminar Indeks Pengelolaan Informasi dan Komunikasi Publik</li>\r\n	<li>Bimbingan Teknis Penilaian Angka Kredit Jabatan Fungsional Pranata Humas 2021</li>\r\n	<li>Bimtek Virtual Pelaksanaan Uji Konsekuensi Informasi Publik</li>\r\n</ol>', '2022-09-30 21:01:39', '2022-09-30 21:02:52'),
(5, 'Aditya Setya Nugrhoho', 'Prahum Terampil', '<ol>\r\n	<li>Mengumpulkan data untuk perencanaan pelayanan ifnormasi;</li>\r\n	<li>Mengumpulkan data untuk perencanaan hubungan eksternal;</li>\r\n	<li>Mengolah data untuk perencanaan pelayanan informasi;</li>\r\n	<li>Mengolah data untuk perencanaan hubungan eksternal;</li>\r\n	<li>Mengolah data untuk perencanaan hubungan internal;</li>\r\n	<li>Mengolah data untuk perencanaan, pengembangan pelayanan informasi dan kehumasan;</li>\r\n	<li>Menyusun rencana kebutuhan sarana, prasarana, dan biaya penyelenggaraan kegiatan&nbsp;pelayanan informasi dan kehumasan;</li>\r\n	<li>Merangcang tata letak (layout) ruang konferensi pers, resepsi pers, seminar, lokakarya, rapat kerja, pameran dan kegiatan sejenisnya;</li>\r\n	<li>Melakukan survei lokasi, atau tempat penyelenggaraan konferensi pers, seminar, lokakarya, rapat kerja, pameran dan kegiatan sejenisnya;</li>\r\n	<li>Mengikuti rapat kerja pimpinan yang berkaitan dengan pelayanan Informasi dan kehumasan;</li>\r\n	<li>Mengumpulkan konten media.</li>\r\n</ol>', 'D III/ Komunikasi', '<ol>\r\n	<li>Webinar Menulis Itu Mudah</li>\r\n</ol>', '2022-09-30 21:04:16', '2022-09-30 21:05:33'),
(6, 'Dyah Ayu Kusumaningtyas', 'Statistisi Terampil', '<ol>\r\n	<li>Merancang dan membuat jadwal di bidang Statistik</li>\r\n	<li>Mengatur alokasi dokumen sensus/survei</li>\r\n	<li>Mengatur alokasi peralatan observasi</li>\r\n	<li>Mengikuti pelatihan pengumpulan data</li>\r\n	<li>Melakukan pengawasan pada kegiatan statistic objek rumah tangga</li>\r\n</ol>', 'DIII/ Statistik', '<ol>\r\n	<li>Sosialisasi Peraturan Menteri PPN/ Kepala Bappenas Nomor 16 Tahun 2020 tentang Manajemen Data Sistem Pemerintahan Berbasis Elektronik</li>\r\n	<li>Strategi Implementasi Satu Data Indonesia</li>\r\n	<li>Webinar Sosialisasi IRIO</li>\r\n	<li>Analisis Data Statistik Diskriptif</li>\r\n</ol>', '2022-09-30 21:08:55', '2022-09-30 21:08:55'),
(7, 'Ifatul Jannah', 'Petugas Help Desk', '<ol>\r\n	<li>Membantu menghimpun hasil peliputan yang dilakukan oleh tim peliputan;</li>\r\n	<li>Membantu menginput dan mengentry data informasi ke website PPID yang telah diverifikasi dinas;</li>\r\n	<li>Membantu memonitor dan update berita PPID setiap hari;</li>\r\n	<li>Membantu melakukan tugas administrasi PPID;</li>\r\n	<li>Membantu melayani permohonan informasi dari pemohon dan mengkonsultasikan permohonan tersebut ke dinas terkait;</li>\r\n	<li>Menjawab pengaduan di media sosial milik Pemkot Madiun.</li>\r\n</ol>', 'S1 / Ilmu Komunikasi', '<ol>\r\n	<li>Pelatihan Online Fitur Baru dan Strategis Komunikasi SP4NLAPOR! &quot;Pengelolaan Pengaduan terkait Covid-19&quot; oleh Kementerian PAN RB;</li>\r\n	<li>Rapat Koordinasi Virtual Layanan PPID Masa Pandemi Covid-19;</li>\r\n	<li>Review Tindak Lanjut Pengelolaan SP4N LAPOR!;</li>\r\n	<li>Peluncuran Kompetisi Pengelolaan Pengaduan Pelayanan Publik 2022 oleh Kementerian PAN RB.</li>\r\n</ol>', '2022-09-30 21:10:20', '2022-09-30 21:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_profil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_profil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama_profil`, `jabatan`, `img_profil`, `created_at`, `updated_at`) VALUES
(27, 'Subakri, S. Sos, M. Si', 'Kepala Dinas', 'kadin.jpg', '2022-08-22 17:32:40', '2022-09-01 18:18:31'),
(28, 'Noor Aflah, S. Kom', 'Sekretaris Dinas', 'user.png', '2022-09-28 17:16:44', '2022-09-28 17:17:08'),
(29, 'Dra. Robertha Juvita Rosaridewi', 'Kabid Bidang Pengelolaan IKP', 'user.png', '2022-09-28 17:17:27', '2022-09-28 17:17:27'),
(30, 'Eni Yusriani, S.Kom, M.T', 'Kabid Bidang Pengelolaan TIK', 'user.png', '2022-09-28 17:17:47', '2022-09-28 17:18:21'),
(31, 'Ike Yessica Kusumawati, SE, MM', 'Kabid Bidang Pengelolaan Statistik dan Persandian', 'user.png', '2022-09-28 17:18:35', '2022-09-28 17:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id`, `created_at`, `updated_at`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, NULL, NULL, 'zethry', 'wadearf@gmail.com', 'adegtr', 'waergteyw6'),
(2, NULL, NULL, 'Eksa', 'eksa@gmail.com', 'Saran', 'tolong tampilan webnya diperbaiki'),
(3, NULL, NULL, 'yeji', 'yeji@gmail.com', 'Kritik', 'Pelayanan kurang ramah');

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'ardila lukita', 'ardilalukita08@gmail.com', NULL, '$2y$10$bqrO23RdEBLdxoeNdE2Ni.svEqtU7wmMkCpHIxZpGVTBWOHxJdNMO', 'opd', NULL, NULL, '2022-08-31 23:21:26'),
(9, 'eksa', 'eksa123@gmail.com', NULL, '$2y$10$mMdUyQ3bA5ZysteZuxwPW.mXw6DsH5ZbkMcbEOkY70CGSGf22.jvq', 'administrator', NULL, NULL, NULL),
(10, 'admin', 'admin@gmail.com', NULL, '$2y$10$4F0GljND3gXIsJOL.n.C1udrmSDSWTf2rDi33/h7NXa9Y6QpkC/ci', 'administrator', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
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
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelesaian`
--
ALTER TABLE `penyelesaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `saran_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyelesaian`
--
ALTER TABLE `penyelesaian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
