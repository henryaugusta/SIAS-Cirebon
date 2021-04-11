-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2021 at 05:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sias`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_arsip`
--

CREATE TABLE `data_arsip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_klarifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_arsip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_register` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_input` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_boks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_arsip`
--

INSERT INTO `data_arsip` (`id`, `kode_klarifikasi`, `jenis_arsip`, `no_register`, `tahun`, `nik`, `nama`, `uraian`, `tgl_input`, `petugas`, `no_buku`, `no_boks`, `lokasi`, `ket`, `lampiran`, `created_at`, `updated_at`) VALUES
(1, '4143535223', 'Surat Masuk', '2352521', '2019', '781294104435', 'Mila', 'BUKU REGISTER AKTA KELAHIRAN UMUM', '2020-12-30', 'Lia', '1221321', '7234j92', 'Rak 1', 'oke', 'lampiran/Cxkh0iBBQSOQwSY30tRFsbUhQycezHCF1WtnHvSX.png', NULL, NULL),
(3, '3252645747467', 'Surat Keluar', '24676763', '2019', '5647335737', 'M. Lutfi', 'BUKU REGISTER AKTA KELAHIRAN UMUM', '2021-01-21', 'Iha', '721-750et35', '6283h29h56352', 'Rak 1', 'oke', 'lampiran/yo2NcWq5Qgp82mrdGL1sZdxVOHyloKFHDh0hJDt2.jpg', NULL, NULL),
(4, '24532626', 'Surat Masuk 1', '23124156', '2020', '34235152626564', 'Mila', 'BUKU REGISTER AKTA KELAHIRAN UMUM', '2021-01-23', 'LIli', '436362642', '3463626', 'Rak 1', 'oke', 'lampiran/SWMzExkmRZNdPQocL8cKOekbTZdNgvltwyr18ery.jpg', NULL, NULL);

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2020_09_11_032518_create_data_barang_table', 1),
(23, '2020_09_11_033453_add_nama_barang_to_data_barang_table', 1),
(25, '2020_09_19_170009_add_column_to_users_table', 1),
(26, '2020_10_10_143656_create_operator_table', 1),
(29, '2020_10_24_165457_create_opname_buku_table', 1),
(34, '2020_11_09_090937_create_surat_masuk_table', 2),
(35, '2020_11_09_145528_create_surat_keluar_table', 3),
(37, '2020_11_30_071543_create_peminjaman_berkas_table', 4),
(40, '2020_12_03_131718_create_peminjaman_buku_table', 5),
(41, '2020_12_03_141224_create_pengembalian_berkas_table', 6),
(46, '2020_12_12_022106_create_pengembalian_buku_table', 9),
(47, '2020_12_12_022320_create_opname_berkas_table', 10),
(48, '2021_01_16_045058_rename_colum_uraian_berkas', 11),
(49, '2021_01_16_050411_rename_colum_uraian', 12),
(50, '2021_01_16_060016_add_jml_berkas_to_opname_berkas_table', 13),
(51, '2021_01_16_081121_add_jml_buku_to_opname_buku_table', 14),
(52, '2021_01_18_054400_add_lampiran_to_data_arsip_table', 15),
(53, '2021_01_24_133033_create_data_arsip_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_op` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_op` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `id_op`, `nm_op`, `level`, `created_at`, `updated_at`) VALUES
(1, '123456', 'master', 'login sias', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `opname_berkas`
--

CREATE TABLE `opname_berkas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_klarifikasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_berkas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_berkasada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_berkastidakada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_boks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_boks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_perkembangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opname_berkas`
--

INSERT INTO `opname_berkas` (`id`, `kode_klarifikasi`, `no_berkas`, `tahun`, `kategori_berkas`, `uraian_berkas`, `jml_berkas`, `jml_berkasada`, `jml_berkastidakada`, `jml_boks`, `no_boks`, `lokasi`, `ket`, `tingkat_perkembangan`) VALUES
(1, '23421', '2412-1', '2020', 'Umum', 'Surat Keluar', '1', '1', '0', '2', '2354f57', 'Rak 1', 'Data Baru', 'Pinjam\r'),
(2, '353665', '2455-23', '2020', 'Istimewa', 'Surat Masuk', '1', '1', '0', '1', '22345e', 'Rak 3', 'Data Lama', 'Pinjam\r'),
(3, '451671', '3424-1', '2021', 'Istimewa', 'Surat Masuk', '2', '1', '1', '1', '342353', 'Rak 4', 'Data Baru', 'Pinjam\r');

-- --------------------------------------------------------

--
-- Table structure for table `opname_buku`
--

CREATE TABLE `opname_buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_klarifikasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_buku` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_register` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_perkembangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opname_buku`
--

INSERT INTO `opname_buku` (`id`, `kode_klarifikasi`, `no_buku`, `no_register`, `tahun`, `kategori_buku`, `uraian`, `jml_buku`, `lokasi`, `ket`, `tingkat_perkembangan`) VALUES
(1, 'KI-125', '123434', '136128', '2019', 'Surat Keluar', '', '', 'Rak 1', 'Pending', '312'),
(2, 'KI-12545', '123412', '1337E56', '2020', 'Surat Masuk', '', '', 'Rak 1', 'Pending', '312'),
(3, '12313', '721-75023', '1312', '2020', 'Terlambat I', 'CAPIL', '1', 'Rak 1', 'oke', 'Ada'),
(4, 'sfwe231', '1221321', '231241', '2020', 'Terlambat II', 'BUKU REGISTER AKTA KELAHIRAN UMUM', '1', 'Rak 1', 'asdfad', 'adfasf'),
(5, '463rt44465484849494', '4627', '6246375373732342626', '2020', 'Istimewa', 'CAPIL', '1', 'Rak 1', 'oke', 'Ada');

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
-- Table structure for table `peminjaman_berkas`
--

CREATE TABLE `peminjaman_berkas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `uraian_berkas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `jml_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_pengolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman_berkas`
--

INSERT INTO `peminjaman_berkas` (`id`, `no_berkas`, `tgl_pinjam`, `uraian_berkas`, `tahun`, `jml_berkas`, `nama_peminjam`, `unit_pengolah`, `nama_petugas`, `kategori_petugas`, `status`, `created_at`, `updated_at`) VALUES
(4, '2069', '2020-08-03', 'BERKAS AKTA KELAHIRAN AN. FATHIMAH ZAHROTUNNISA', 2019, '1', 'BU ERWIN', 'CAPIL', 'YENI ROYANA', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(5, '2068', '2020-08-03', 'BERKAS AKTA KELAHIRAN AN. MUHAMAD FATHIR AL FARIZI', 2019, '1', 'BU ERWIN', 'CAPIL', 'YENI ROYANA', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(6, '2067', '2020-08-03', 'BERKAS AKTA KELAHIRAN AN. NAFISATUL A.', 2019, '1', 'BU ERWIN', 'CAPIL', 'YENI ROYANA', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(7, '536', '2020-08-07', 'BERKAS AKTA KEMATIAN AN. DJUMANDI', 2019, '1', 'BU LEDY', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(8, '451', '2020-08-13', 'KK DINAS AN. MAULANA YUSUF', 2020, '1', 'BU OPI', 'DAFDUK', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_buku`
--

CREATE TABLE `peminjaman_buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_register` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `uraian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `jml_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_pengolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman_buku`
--

INSERT INTO `peminjaman_buku` (`id`, `no_buku`, `no_register`, `tgl_pinjam`, `uraian`, `tahun`, `jml_berkas`, `nama_peminjam`, `unit_pengolah`, `nama_petugas`, `kategori_petugas`, `status`, `created_at`, `updated_at`) VALUES
(3, '601-750', '711', '2020-08-03', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2017, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(4, '457-600', '502', '2020-08-03', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2009, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(5, '151-300', '212', '2020-08-04', 'BUKU REGISTER AKTA KELAHIRAN ISTIMEWA', 1998, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(6, '3601-3750', '3726', '2020-08-04', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2002, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(7, '1691-1840', '1768', '2020-08-04', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 1999, '1', 'BU ERWIN', 'CAPIL', 'RENNY RACHMATIKA, AMd', 'ARSIPARIS', 'PINJAM', NULL, NULL),
(8, '1551-1800', '1673', '2020-08-05', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2015, '1', 'BU ERWIN', 'CAPIL', 'RENNY RACHMATIKA, AMd', 'ARSIPARIS', 'PINJAM', NULL, NULL),
(9, '3146-3294', '3201', '2020-08-05', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2006, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(10, '1835-2287', '2200', '2020-08-05', 'BUKU REGISTER AKTA KELAHIRAN ISTIMEWA', 2002, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(11, '151-300', '175', '2020-08-05', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2011, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(12, '3001-3151', '3043', '2020-08-05', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 1993, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(13, '721-750', '653', '2020-03-08', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2020, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian_berkas`
--

CREATE TABLE `pengembalian_berkas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jenis_arsip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `jml_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_pengolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengembalian_berkas`
--

INSERT INTO `pengembalian_berkas` (`id`, `no_berkas`, `tgl_kembali`, `jenis_arsip`, `tahun`, `jml_berkas`, `nama_peminjam`, `unit_pengolah`, `nama_petugas`, `kategori_petugas`, `status`, `created_at`, `updated_at`) VALUES
(1, '131415341', '2020-12-03', 'Stovck Opname Surat', 2020, '1', 'Mila', 'ASFAGETEJR', 'Indah', 'Petugas', 'OKE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian_buku`
--

CREATE TABLE `pengembalian_buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_register` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jenis_arsip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `jml_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_pengolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengembalian_buku`
--

INSERT INTO `pengembalian_buku` (`id`, `no_buku`, `no_register`, `tgl_kembali`, `jenis_arsip`, `tahun`, `jml_berkas`, `nama_peminjam`, `unit_pengolah`, `nama_petugas`, `kategori_petugas`, `status`, `created_at`, `updated_at`) VALUES
(1, '601-750', '456', '2020-10-12', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2019, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'KEMBALI', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL),
(2, 'Istiharoh', 'master', 'admin@zoho.com', '2020-10-26 09:29:38', '$2y$10$plbNRGHWZJKHkpLP1Z8uOuO2fGtEw.epDzmtRhk9QNqy4V.J6gspK', '5IGL0GD5i8SaSgsWL6FZiZSr6o2f4oy3OE1y8HJcVINUD8uZcxR8RUwmCkjx', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_arsip`
--
ALTER TABLE `data_arsip`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_arsip_kode_klarifikasi_unique` (`kode_klarifikasi`),
  ADD UNIQUE KEY `data_arsip_no_register_unique` (`no_register`);

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
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `operator_id_op_unique` (`id_op`);

--
-- Indexes for table `opname_berkas`
--
ALTER TABLE `opname_berkas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `opname_berkas_kode_klarifikasi_unique` (`kode_klarifikasi`);

--
-- Indexes for table `opname_buku`
--
ALTER TABLE `opname_buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `opname_buku_kode_klarifikasi_unique` (`kode_klarifikasi`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peminjaman_berkas`
--
ALTER TABLE `peminjaman_berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian_berkas`
--
ALTER TABLE `pengembalian_berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
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
-- AUTO_INCREMENT for table `data_arsip`
--
ALTER TABLE `data_arsip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `opname_berkas`
--
ALTER TABLE `opname_berkas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `opname_buku`
--
ALTER TABLE `opname_buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjaman_berkas`
--
ALTER TABLE `peminjaman_berkas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengembalian_berkas`
--
ALTER TABLE `pengembalian_berkas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
