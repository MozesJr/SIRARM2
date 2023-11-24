-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2023 pada 03.44
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `month`
--

CREATE TABLE `month` (
  `month_num` int(2) NOT NULL,
  `month_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `month`
--

INSERT INTO `month` (`month_num`, `month_name`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-11-23 14:35:28', '2023-11-23 14:35:32'),
(2, 'apoteker', '2023-11-23 14:36:05', '2023-11-23 14:36:09'),
(3, 'user', '2023-11-23 14:36:30', '2023-11-23 11:20:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_cat`
--

CREATE TABLE `table_cat` (
  `id_kat` int(3) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `des_kat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `table_cat`
--

INSERT INTO `table_cat` (`id_kat`, `nama_kategori`, `des_kat`) VALUES
(201, 'Anti Radang', 'Melegakan peradangan'),
(207, 'Antioksidan', 'Mencegah penuaan dini'),
(208, 'Anti Depresan', 'Mengurangi depresi'),
(209, 'Vitamin', 'Suplemen'),
(216, 'Stimulan', 'Menstimulasi hewan'),
(217, 'Antibiotik', 'bakteriostatik'),
(222, 'Hemolitika', 'Menghentikan pendarahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_invoice`
--

CREATE TABLE `table_invoice` (
  `id_tagihan` int(5) NOT NULL,
  `ref` varchar(10) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `banyak` int(3) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `nama_pembeli` varchar(40) NOT NULL,
  `tgl_beli` date NOT NULL,
  `grandtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `table_invoice`
--

INSERT INTO `table_invoice` (`id_tagihan`, `ref`, `nama_obat`, `harga_jual`, `banyak`, `subtotal`, `nama_pembeli`, `tgl_beli`, `grandtotal`) VALUES
(80, 'JMBSErmmo0', 'Adona', 15000, 1, 15000, 'Melinda', '2018-08-09', 29000),
(81, 'JMBSErmmo0', 'Asam Mefenamat', 4000, 1, 4000, 'Melinda', '2018-08-09', 29000),
(82, 'JMBSErmmo0', 'Salbutamol', 10000, 1, 10000, 'Melinda', '2018-08-09', 29000),
(87, 'xl23Q6whsP', 'Salbutamol', 10000, 3, 30000, 'Melinda', '2018-01-10', 30000),
(90, '9ab7RcZHma', 'Adrome', 15000, 6, 90000, 'Doni', '2018-02-14', 90000),
(91, 'fAMEjr9rA0', 'Ambroxol', 22000, 5, 110000, 'Amirullah', '2018-03-14', 110000),
(92, 'so5518T1vI', 'Salbutamol', 10000, 6, 60000, 'Doni', '2018-04-18', 60000),
(97, 'VS27jjD5Ze', 'Ambroxol', 22000, 1, 22000, 'Pitaloka', '2018-07-18', 32000),
(98, 'VS27jjD5Ze', 'Stimuno', 10000, 1, 10000, 'Pitaloka', '2018-07-18', 32000),
(99, 'nyptFm9i43', 'Stimuno', 10000, 3, 30000, 'Andi', '2018-06-13', 30000),
(101, 'e7QgBweE8X', 'Adrome', 15000, 1, 15000, 'Andi', '2018-09-15', 15000),
(105, 'zPpAfLsmd7', 'Adrome', 15000, 1, 15000, 'Amila', '2018-05-16', 25000),
(106, 'zPpAfLsmd7', 'Amoxilin', 10000, 1, 10000, 'Amila', '2018-05-16', 25000),
(119, 'FfndSkUmh6', 'Asam Mefenamat', 4000, 2, 8000, 'Alina', '2018-09-24', 12000),
(120, 'FfndSkUmh6', 'Vitamin E', 4000, 1, 4000, 'Alina', '2018-09-24', 12000),
(121, 'fP5YRYg6Ms', 'Adrome', 15000, 1, 15000, 'Abcs', '2023-10-05', 35000),
(122, 'fP5YRYg6Ms', 'Amoxilin', 10000, 2, 20000, 'Abcs', '2023-10-05', 35000),
(123, 'QlEiAnZN39', 'Vitamin E', 4000, 1, 4000, 'asd3', '2023-10-05', 4000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_med`
--

CREATE TABLE `table_med` (
  `id_obat` int(4) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `penyimpanan` varchar(30) NOT NULL,
  `stok` int(3) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `kedaluwarsa` date NOT NULL,
  `des_obat` text NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `nama_pemasok` varchar(30) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `table_med`
--

INSERT INTO `table_med` (`id_obat`, `nama_obat`, `penyimpanan`, `stok`, `unit`, `nama_kategori`, `kedaluwarsa`, `des_obat`, `harga_beli`, `harga_jual`, `nama_pemasok`, `gambar`) VALUES
(1008, 'Asam Mefenamat', 'Gudang', 11, 'Semprot', 'Antioksidan', '2020-07-20', 'Untuk meringankan gejala nyeri', 4000, 4000, 'Bina Jaya Apotek', ''),
(1016, 'Salbutamol', 'Gudang', 4, 'Sirup', 'Antioksidan', '2020-07-20', 'Tidak ada', 6000, 10000, 'Bina Jaya Apotek', ''),
(1018, 'Adrome', 'Gudang', 5, 'Kapsul', 'Stimulan', '2020-08-20', 'Tidak untuk kucing', 12000, 15000, 'Kenanga Apotek', ''),
(1023, 'Ambroxol', 'Lemari 1', 6, 'Semprot', 'Anti Radang', '2014-08-20', '', 20000, 22000, 'Kenanga Apotek', ''),
(1025, 'Amoxilin', 'Rak 1', 7, 'Semprot', 'Anti Radang', '2018-12-14', '', 7000, 10000, 'Tina Farma', ''),
(1026, 'Cetirizen', 'Rak 1', 0, 'Tablet', 'Anti Radang', '2020-01-20', '', 2000, 3000, 'Kenanga Apotek', ''),
(1027, 'Corovit', 'Gudang', 10, 'Tablet', 'Antioksidan', '2018-09-28', '', 2000, 3000, 'Kimia Farma', ''),
(1033, 'Vitamin E', 'Rak 1', 7, 'Tablet', 'Vitamin', '2019-01-23', '', 3000, 4000, 'Bina Jaya Apotek', ''),
(1036, 'Vitamin A', 'Rak 2', 10, 'Tablet', 'Vitamin', '2013-02-20', '', 3000, 4000, 'Bina Jaya Apotek', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_purchase`
--

CREATE TABLE `table_purchase` (
  `id_pembelian` int(5) NOT NULL,
  `ref` varchar(10) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `banyak` int(3) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `nama_pemasok` varchar(40) NOT NULL,
  `tgl_beli` date NOT NULL,
  `grandtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `table_purchase`
--

INSERT INTO `table_purchase` (`id_pembelian`, `ref`, `nama_obat`, `harga_beli`, `banyak`, `subtotal`, `nama_pemasok`, `tgl_beli`, `grandtotal`) VALUES
(3, 'L8BvtCyFDZ', 'Salbutamol', 6000, 3, 18000, 'Bina Jaya Apotek', '2018-08-11', 24000),
(4, 'L8BvtCyFDZ', 'Stimuno', 6000, 1, 6000, 'Bina Jaya Apotek', '2018-08-11', 24000),
(8, 'pwoaFcmGVs', 'Asam Mefenamat', 4000, 12, 48000, 'Bina Jaya Apotek', '2018-02-22', 48000),
(9, '96kHYMepS9', 'Salbutamol', 6000, 7, 42000, 'Bina Jaya Apotek', '2018-03-21', 42000),
(10, 'Tbb6pLVCJr', 'Ambroxol', 20000, 4, 80000, 'Bina Jaya Apotek', '2018-01-24', 80000),
(11, 'fdMGrBa4nS', 'Stimuno', 6000, 16, 96000, 'Bina Jaya Apotek', '2018-04-18', 96000),
(12, 'aDxtUA0rsc', 'Adrome', 12000, 6, 72000, 'Bina Jaya Apotek', '2018-05-09', 72000),
(14, 'KCZxZ1MqID', 'Ambroxol', 20000, 2, 40000, 'Bina Jaya Apotek', '2018-07-18', 40000),
(15, 'Ar9235n1ny', 'Adrome', 12000, 3, 36000, 'Kenanga Apotek', '2018-06-06', 56000),
(16, 'Ar9235n1ny', 'Ambroxol', 20000, 1, 20000, 'Kenanga Apotek', '2018-06-06', 56000),
(25, 'q8ke6ToBMo', 'Cetirizen', 2000, 3, 6000, 'Kenanga Apotek', '2018-09-24', 6000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_sup`
--

CREATE TABLE `table_sup` (
  `id_pem` int(3) NOT NULL,
  `nama_pemasok` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `table_sup`
--

INSERT INTO `table_sup` (`id_pem`, `nama_pemasok`, `alamat`, `telepon`) VALUES
(101, 'Bina Jaya Apotek', 'Jalan Kaliurang KM 7', '089693330253'),
(103, 'Kimia Farma', 'Jalan Kaliurang', '02574555'),
(104, 'Tina Farma', 'Jalan Kaliurang', '08775544'),
(105, 'Kenanga Apotek', 'Jalan Magelang', '08965555'),
(108, 'Surya Farmasi', 'Jalan Magelang KM 9', '08546677790');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_unit`
--

CREATE TABLE `table_unit` (
  `id_unit` int(2) NOT NULL,
  `unit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `table_unit`
--

INSERT INTO `table_unit` (`id_unit`, `unit`) VALUES
(1, 'Kapsul'),
(2, 'Semprot'),
(3, 'Sirup'),
(4, 'Tablet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `real_name` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `real_name`, `role`, `created_at`, `updated_at`) VALUES
(1, 'mozes', '4297f44b13955235245b2497399d7a93', 'Mozes Sapari', 1, '2023-11-22 03:56:16', '2023-11-22 03:58:34'),
(3, 'apoteker', '4297f44b13955235245b2497399d7a93', 'Coba Apoteker', 3, '2023-11-23 19:59:11', '2023-11-24 02:21:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`month_num`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_cat`
--
ALTER TABLE `table_cat`
  ADD PRIMARY KEY (`id_kat`),
  ADD UNIQUE KEY `kategori` (`nama_kategori`);

--
-- Indeks untuk tabel `table_invoice`
--
ALTER TABLE `table_invoice`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indeks untuk tabel `table_med`
--
ALTER TABLE `table_med`
  ADD PRIMARY KEY (`id_obat`),
  ADD UNIQUE KEY `nama_obat` (`nama_obat`),
  ADD KEY `med_unit` (`unit`),
  ADD KEY `med_cat` (`nama_kategori`),
  ADD KEY `med_sup` (`nama_pemasok`);

--
-- Indeks untuk tabel `table_purchase`
--
ALTER TABLE `table_purchase`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `table_sup`
--
ALTER TABLE `table_sup`
  ADD PRIMARY KEY (`id_pem`),
  ADD UNIQUE KEY `nama_supplier` (`nama_pemasok`);

--
-- Indeks untuk tabel `table_unit`
--
ALTER TABLE `table_unit`
  ADD PRIMARY KEY (`id_unit`),
  ADD UNIQUE KEY `unit` (`unit`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `table_cat`
--
ALTER TABLE `table_cat`
  MODIFY `id_kat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT untuk tabel `table_invoice`
--
ALTER TABLE `table_invoice`
  MODIFY `id_tagihan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT untuk tabel `table_med`
--
ALTER TABLE `table_med`
  MODIFY `id_obat` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1037;

--
-- AUTO_INCREMENT untuk tabel `table_purchase`
--
ALTER TABLE `table_purchase`
  MODIFY `id_pembelian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `table_sup`
--
ALTER TABLE `table_sup`
  MODIFY `id_pem` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `table_unit`
--
ALTER TABLE `table_unit`
  MODIFY `id_unit` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `table_med`
--
ALTER TABLE `table_med`
  ADD CONSTRAINT `med_cat` FOREIGN KEY (`nama_kategori`) REFERENCES `table_cat` (`nama_kategori`) ON UPDATE CASCADE,
  ADD CONSTRAINT `med_sup` FOREIGN KEY (`nama_pemasok`) REFERENCES `table_sup` (`nama_pemasok`) ON UPDATE CASCADE,
  ADD CONSTRAINT `med_unit` FOREIGN KEY (`unit`) REFERENCES `table_unit` (`unit`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
