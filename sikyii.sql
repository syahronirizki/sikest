-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2022 pada 10.16
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikyii`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('administrator', '1', 1658987608),
('administrator', '4', 1658987634),
('staff', '2', 1658987616),
('user', '3', 1658987626);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/admin/*', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/admin/assignment/revoke', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/admin/default/*', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/admin/default/index', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/admin/menu/*', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/menu/create', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/menu/index', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/admin/menu/update', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/menu/view', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/admin/permission/*', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/permission/create', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/permission/get-users', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/permission/index', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/permission/remove', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/permission/update', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/permission/view', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/role/*', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/role/assign', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/role/create', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/role/delete', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/role/get-users', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/role/index', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/role/remove', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/role/update', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/role/view', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/route/*', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/route/assign', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/route/create', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/route/index', 2, NULL, NULL, NULL, 1658986766, 1658986766),
('/admin/route/refresh', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/route/remove', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/rule/*', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/rule/create', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/rule/index', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/rule/update', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/rule/view', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/user/*', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/admin/user/activate', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/user/change-password', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/user/delete', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/user/index', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/user/login', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/user/logout', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/user/request-password-reset', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/user/reset-password', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/user/signup', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/admin/user/view', 2, NULL, NULL, NULL, 1658986767, 1658986767),
('/debug/*', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/debug/default/*', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/debug/default/index', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/debug/default/view', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/debug/user/*', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/debug/user/reset-identity', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/debug/user/set-identity', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/gii/*', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/gii/default/*', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/gii/default/action', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/gii/default/diff', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/gii/default/index', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/gii/default/preview', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/gii/default/view', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/gridview/*', 2, NULL, NULL, NULL, 1658994411, 1658994411),
('/gridview/export/*', 2, NULL, NULL, NULL, 1658994411, 1658994411),
('/gridview/export/download', 2, NULL, NULL, NULL, 1658994411, 1658994411),
('/gridview/grid-edited-row/*', 2, NULL, NULL, NULL, 1658994411, 1658994411),
('/gridview/grid-edited-row/back', 2, NULL, NULL, NULL, 1658994411, 1658994411),
('/obat/*', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/obat/create', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/obat/delete', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/obat/index', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/obat/update', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/obat/view', 2, NULL, NULL, NULL, 1658986768, 1658986768),
('/pasien/*', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/pasien/create', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/pasien/delete', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/pasien/index', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/pasien/update', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/pasien/view', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/pegawai/*', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/pegawai/create', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/pegawai/delete', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/pegawai/index', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/pegawai/update', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/pegawai/view', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/penanganan-pasien/*', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/penanganan-pasien/create', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/penanganan-pasien/delete', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/penanganan-pasien/index', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/penanganan-pasien/update', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/penanganan-pasien/view', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/site/*', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/site/about', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/site/captcha', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/site/contact', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/site/error', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/site/index', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/site/login', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/site/logout', 2, NULL, NULL, NULL, 1658986769, 1658986769),
('/tagihan/*', 2, NULL, NULL, NULL, 1658994412, 1658994412),
('/tagihan/create', 2, NULL, NULL, NULL, 1658994411, 1658994411),
('/tagihan/delete', 2, NULL, NULL, NULL, 1658994412, 1658994412),
('/tagihan/index', 2, NULL, NULL, NULL, 1658994411, 1658994411),
('/tagihan/update', 2, NULL, NULL, NULL, 1658994411, 1658994411),
('/tagihan/view', 2, NULL, NULL, NULL, 1658994411, 1658994411),
('/tindakan/*', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/tindakan/create', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/tindakan/delete', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/tindakan/index', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/tindakan/update', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/tindakan/view', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/user/*', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/user/admin/*', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/admin/assignments', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/admin/block', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/admin/confirm', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/admin/create', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/admin/delete', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/admin/index', 2, NULL, NULL, NULL, 1658986763, 1658986763),
('/user/admin/info', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/admin/resend-password', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/admin/switch', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/admin/update', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/admin/update-profile', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/profile/*', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/profile/index', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/profile/show', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/recovery/*', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/recovery/request', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/recovery/reset', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/registration/*', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/registration/confirm', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/registration/connect', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/registration/register', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/registration/resend', 2, NULL, NULL, NULL, 1658986764, 1658986764),
('/user/security/*', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/user/security/auth', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/user/security/login', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/user/security/logout', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/user/settings/*', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/user/settings/account', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/user/settings/confirm', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/user/settings/delete', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/user/settings/disconnect', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/user/settings/networks', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/user/settings/profile', 2, NULL, NULL, NULL, 1658986765, 1658986765),
('/users/*', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/users/create', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/users/delete', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/users/index', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/users/update', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/users/view', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/wilayah/*', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/wilayah/create', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/wilayah/delete', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/wilayah/index', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/wilayah/update', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('/wilayah/view', 2, NULL, NULL, NULL, 1658986770, 1658986770),
('administrator', 1, NULL, NULL, NULL, 1658986854, 1658986854),
('administratorPermission', 2, NULL, NULL, NULL, 1658986932, 1658986932),
('staff', 1, NULL, NULL, NULL, 1658987022, 1658987022),
('staffPermission', 2, NULL, NULL, NULL, 1658987034, 1658987034),
('user', 1, NULL, NULL, NULL, 1658986872, 1658986872),
('userPermission', 2, NULL, NULL, NULL, 1658986942, 1658986942);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('administrator', 'administratorPermission'),
('administrator', 'staffPermission'),
('administrator', 'userPermission'),
('administratorPermission', '/*'),
('staff', 'staffPermission'),
('staff', 'userPermission'),
('staffPermission', '/obat/*'),
('staffPermission', '/pegawai/*'),
('staffPermission', '/tindakan/*'),
('staffPermission', '/wilayah/*'),
('staffPermission', 'userPermission'),
('user', 'userPermission'),
('userPermission', '/pasien/*'),
('userPermission', '/penanganan-pasien/*'),
('userPermission', '/tagihan/*');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1658935103),
('m140209_132017_init', 1658935129),
('m140403_174025_create_account_table', 1658935130),
('m140504_113157_update_tables', 1658935132),
('m140504_130429_create_token_table', 1658935134),
('m140506_102106_rbac_init', 1658985631),
('m140830_171933_fix_ip_field', 1658935135),
('m140830_172703_change_account_table_name', 1658935135),
('m141222_110026_update_ip_field', 1658935136),
('m141222_135246_alter_username_length', 1658935137),
('m150614_103145_update_social_account_table', 1658935137),
('m150623_212711_fix_username_notnull', 1658935138),
('m151218_234654_add_timezone_to_profile', 1658935138),
('m160929_103127_add_last_login_at_to_user_table', 1658935138),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1658985631),
('m180523_151638_rbac_updates_indexes_without_prefix', 1658985633),
('m200409_110543_rbac_update_mssql_trigger', 1658985633);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(20) NOT NULL,
  `nama_obat` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`) VALUES
(1, 'Kalpanax'),
(2, 'Biogesic'),
(3, 'Cataflam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(20) NOT NULL,
  `tgl_daftar` varchar(100) NOT NULL,
  `nama_pasien` varchar(256) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `kota_pasien` varchar(100) NOT NULL,
  `Jenis_Kelamin` varchar(100) NOT NULL,
  `no_Telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `tgl_daftar`, `nama_pasien`, `no_ktp`, `alamat_pasien`, `kota_pasien`, `Jenis_Kelamin`, `no_Telp`) VALUES
(7, '2022-July-03', 'Kurniawan Julianto', '3576121212990010', 'Jalan Mundurserentak No. 12', 'Cikarang', 'Pria', '2147483647'),
(8, '2022-June-06', 'Rey Subekti', '3576120312990010', 'Jalan Sukamaju No. 12', 'Sukabumi', 'Pria', '08312776655'),
(9, '2022-July-26', 'Albert Julian', '3576112345990010', 'Jalan Mundurserentak No. 10', 'Cikarang', 'Pria', '1235678910');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(20) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `jk_pegawai` varchar(100) NOT NULL,
  `alamat_pegawai` varchar(256) NOT NULL,
  `divisi_pegawai` varchar(100) NOT NULL,
  `level_pegawai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jk_pegawai`, `alamat_pegawai`, `divisi_pegawai`, `level_pegawai`) VALUES
(1, 'Ahmad Subekti', 'L', 'Jalan Meriang No. 12', 'HC', 'SPV');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penanganan_pasien`
--

CREATE TABLE `penanganan_pasien` (
  `id_penanganan` int(20) NOT NULL,
  `tgl_penanganan` varchar(100) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `poliklinik` varchar(100) NOT NULL,
  `status_berobat` varchar(100) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `obat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penanganan_pasien`
--

INSERT INTO `penanganan_pasien` (`id_penanganan`, `tgl_penanganan`, `nama_pasien`, `poliklinik`, `status_berobat`, `keluhan`, `obat`) VALUES
(7, '2022-July-05', 'Rey Subekti', 'Gigi', 'Rawat Jalan', 'Gusi Ngilu', 'Cataflam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_account`
--

CREATE TABLE `social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(50) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `namaitem1` varchar(100) NOT NULL,
  `hargaitem1` varchar(100) NOT NULL,
  `namaitem2` varchar(100) NOT NULL,
  `hargaitem2` varchar(100) NOT NULL,
  `totalharga` varchar(100) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `nama_pasien`, `namaitem1`, `hargaitem1`, `namaitem2`, `hargaitem2`, `totalharga`, `status_pembayaran`) VALUES
(1, 'Rey Subekti', 'Cataflam', '24.000,00-', 'Cek Dokter', '100.000,00-', '124.000,00-', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tindakan` int(20) NOT NULL,
  `tindakan` varchar(100) NOT NULL,
  `tarif` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `tindakan`, `tarif`) VALUES
(3, 'Rawat Inap', 'Rp. 10.000.000,00-'),
(4, 'Rawat Jalan', 'Rp. 500.000,00-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `token`
--

INSERT INTO `token` (`user_id`, `code`, `created_at`, `type`) VALUES
(1, 'CV4C5ana-Y_J7N34QJxEl3pi0IrdcJaD', 1658935453, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT 0,
  `last_login_at` int(11) DEFAULT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`, `status`) VALUES
(1, 'admin', 'admin@root.com', '$2y$10$TVv/lSJQjSr37hcry/TUc.drxsAEeCmE3sKpAMYSa7vUjkO5btwvS', 'aTisBmxANDlvQIxQAz1ZuBYFS2AI2_aU', 1658986384, NULL, NULL, '::1', 1658935453, 1658935453, 0, 1658992385, ''),
(2, 'fian', 'fian@root.com', '$2y$10$7NuVTHTVY9VdIyZ0fwKHfem8n0e6J0I/c7JB7yIzDGz2Hkx89b3Ei', 'u_buyLGmsbFl7c6l32O7VHNKSr7wg-PF', 1658986452, NULL, NULL, '::1', 1658986451, 1658986451, 0, 1658987818, ''),
(3, 'naufal', 'naufal@root.com', '$2y$10$LHo9UD/L5zMMO5.PEC9y5ufECnrfi5oAg7DfpEsCRHgtf2pAc/ZgS', 'huL_4gu-24dKh6nFTNRp6A7q6pqPQzC0', 1658986491, NULL, NULL, '::1', 1658986491, 1658986505, 0, NULL, ''),
(4, 'roni', 'roni@root.com', '$2y$10$GdaCxSZMMCvWqHAO9mXI4ORHIXNlJFxh.mqluvmFUd1LMVMu0RFIG', 'ol0qkhcnfJKXJIn0E3DiZkxZ2srVqWZZ', 1658986525, NULL, NULL, '::1', 1658986525, 1658986525, 0, NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `authKey` varchar(100) NOT NULL,
  `accessToken` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `authKey`, `accessToken`) VALUES
(2, 'roni', 'roni123', 'Admin', 'roni123', 'roni123'),
(3, 'aldo', 'aldo123', 'User', 'aldo123', 'aldo00'),
(4, 'Admin', 'admin', 'Admin', 'r0n1234', 'grant33d');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(20) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_provinsi`, `nama_kota`, `nama_kecamatan`, `nama_kelurahan`) VALUES
(1, 'Jawa Timur', 'Surabaya', 'Wonocolo', 'Sidosermo'),
(2, 'Jawa Tengah', 'Semarang', 'Tugu', 'Mangunharjo');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indeks untuk tabel `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indeks untuk tabel `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `penanganan_pasien`
--
ALTER TABLE `penanganan_pasien`
  ADD PRIMARY KEY (`id_penanganan`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `social_account`
--
ALTER TABLE `social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD UNIQUE KEY `account_unique_code` (`code`),
  ADD KEY `fk_user_account` (`user_id`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indeks untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indeks untuk tabel `token`
--
ALTER TABLE `token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_username` (`username`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penanganan_pasien`
--
ALTER TABLE `penanganan_pasien`
  MODIFY `id_penanganan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `social_account`
--
ALTER TABLE `social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tindakan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
