-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2022 pada 05.29
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penelusuran_data_alumni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_perusahaan` int(11) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmpt_lahir` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'laki-laki',
  `agama` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn_lulus` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`nik`, `id_perusahaan`, `id_jabatan`, `nama`, `tmpt_lahir`, `tgl_lahir`, `jenkel`, `agama`, `no_telp`, `alamat`, `thn_lulus`, `angkatan`, `email`, `password`, `status`, `tgl_masuk`, `role`, `id_user`, `foto`, `created_at`, `updated_at`) VALUES
('1', NULL, NULL, 'Admin', '', '0000-00-00', 'laki-laki', '', '', '', '', '0', 'admin@gmail.com', '', '', NULL, 'admin', 1, '', NULL, NULL),
('30012022', NULL, NULL, 'Rahma Amanila', 'Kebumen', '2005-04-26', 'perempuan', 'islam', '085772945816', 'Jl. Madura', '2020', '15', 'rahma@gmail.com', 'rahma123', 'belumbekerja', NULL, 'alumni', 121, 'avatar4.jpg', '2022-12-04 20:14:35', '2022-12-04 20:29:19'),
('30022022', 35, 29, 'Nuryanah', 'Subang', '2004-10-21', 'perempuan', 'islam', '085873847562', 'Jl. Persahabatan', '2019', '14', 'nuryanah@gmail.com', 'nuryanah123', 'bekerja', '2021-02-05', 'alumni', 122, 'avatar5.jpg', '2022-12-04 20:16:36', '2022-12-04 20:16:36'),
('30032022', NULL, NULL, 'Nabila Farikha Afriani', 'Jakarta', '2005-05-17', 'perempuan', 'islam', '085880037320', 'Jl. Madrasah', '2020', '15', 'nabila@gmail.com', 'nabila123', 'belumbekerja', NULL, 'alumni', 123, 'avatar2.jpg', '2022-12-04 20:18:07', '2022-12-04 20:18:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(10) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_event` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `awal_event` date NOT NULL,
  `selesai_event` date NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nik`, `nm_event`, `awal_event`, `selesai_event`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES
(54, '1', 'Reuni Angkatan', '2022-12-12', '2022-12-13', 'Menjalin silaturahim sembari menuntaskan rasa rindu', 'Class of 1990 Reunion Invitation.jpg', NULL, NULL),
(55, '30032022', 'Bazaar', '2022-11-08', '2022-11-10', 'bazaar dan makanan dan pakaian dibuka untuk umum', 'bazar.jpeg', NULL, NULL),
(56, '1', 'Pelatihan Desain Grafis', '2022-11-23', '2022-11-24', 'Berkreasi dengan korel draw photoshop untuk mengawali karir desainmu', 'BROSUR KU.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(10) UNSIGNED NOT NULL,
  `nm_jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nm_jabatan`, `created_at`, `updated_at`) VALUES
(28, 'CEO', NULL, NULL),
(29, 'Staff', NULL, NULL),
(30, 'Administrator', NULL, NULL),
(31, 'Sekretaris', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(10) UNSIGNED NOT NULL,
  `nik` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `nik`, `judul`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(39, '30012022', 'Loker Guru', 'Lowongan Kerja Guru matematika SMP Barunawati Surabaya.png', 'Sedang membutuhkan Guru untuk mengajar Matematika di SMP Barunawati, silahkan penuhi ketentuan dan syarat apabila ingin mendaftar.', NULL, NULL),
(40, '30022022', 'Loker', 'Lowongan Kerja Admin Toko Nolimitz Maticshop Bandung September 2019.jpg', 'Dibutuhkan seorang Admin di Toko Nolimitz, silahkan hubungi untuk keterangan lebih lanjut.', NULL, NULL),
(41, '1', 'Loker untuk Design', 'Loker Surabaya - [PRO DESIGN IS HIRING] Hi job seekers! Pro Design Furniture @prodesign_id sedan___.jpg', 'Dibuka Lowongan untuk Design produk, ketentuan dan syarat tertera pada gambar. Terimakasih', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2022_08_14_183913_create_kategoris_table', 1),
(121, '2014_10_12_000000_create_users_table', 2),
(122, '2014_10_12_100000_create_password_resets_table', 2),
(123, '2022_08_14_185953_create_events_table', 2),
(124, '2022_08_14_202415_create_lowongans_table', 2),
(125, '2022_08_17_212341_create_jabatans_table', 2),
(126, '2022_08_17_213644_create_perusahaans_table', 2),
(127, '2022_08_19_175353_create_alumnis_table', 2),
(128, '2022_08_30_214420_create_sessions_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(10) UNSIGNED NOT NULL,
  `nm_perusahaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nm_perusahaan`, `created_at`, `updated_at`) VALUES
(32, 'Shopee', NULL, NULL),
(34, 'Tokopedia', NULL, NULL),
(35, 'PT Hijau Solusi Utama', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '$2y$10$uN3/jXhl75R3Yd0SAVtGru5tOmMHF6RGx2CLsdFOX3nLaKnQl66Qq', 'ITMCncuslKc4aSndXKjLHaixqOVghiogVKn4HcCny3r03AkMvarEU7cBL22X', '2022-08-29 23:43:15', '2022-09-25 20:18:58'),
(121, 'Rahma Amanila', 'alumni', 'rahma@gmail.com', '$2y$10$Ancb1fGTLs6Ce62A3dyoK.O1YICyK/zbBTYW5hCFjaapWfBS06Nbu', 'AT0RbIx5uXEK0533kC9ijRL94RlLrrk7iaxX7zzL5weKLr8jzkUhUSgjw9mJ', '2022-12-04 20:14:35', '2022-12-04 20:29:19'),
(122, 'Nuryanah', 'alumni', 'nuryanah@gmail.com', '$2y$10$EG8G/b6KbiHHrDHE7XX/9uAIdxasFATC2P3cqqf91ixF.HAZVDORe', NULL, '2022-12-04 20:16:36', '2022-12-04 20:16:36'),
(123, 'Nabila Farikha Afriani', 'alumni', 'nabila@gmail.com', '$2y$10$PkUwyGLNDiK0eo39/inJXu/efhAXEP6dqvj.NrsnLFfrS7YK7RPfO', NULL, '2022-12-04 20:18:07', '2022-12-04 20:18:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `alumni_email_unique` (`email`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
