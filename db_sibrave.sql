-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 23 Jul 2020 pada 20.24
-- Versi server: 5.7.26
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sibrave`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_capaian`
--

CREATE TABLE `data_capaian` (
  `id` int(11) NOT NULL,
  `kegiatan_id` int(11) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `jumlah` double(5,0) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `date_created` int(11) DEFAULT NULL,
  `date_acc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_capaian`
--

INSERT INTO `data_capaian` (`id`, `kegiatan_id`, `nik`, `jumlah`, `status`, `date_created`, `date_acc`) VALUES
(1, 5, '3276110207840003', 5, 1, 1595513792, 1595517721),
(2, 5, '3276110207840003', 7, 1, 1595514736, 1595518410),
(4, 5, '3276110207840003', 1, 1, 1595518506, 1595529462),
(5, 6, '3276110207840003', 5, 1, 1595518755, 1595518798),
(6, 6, '3276110207840003', 2, 1, 1595518829, 1595518860),
(7, 6, '3276110207840003', 3, 1, 1595518840, 1595518863),
(8, 5, '3276110207840003', 2, 1, 1595522073, 1595529466),
(9, 5, '3276110207840003', 15, 1, 1595522207, 1595529471);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_contoh`
--

CREATE TABLE `data_contoh` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_contoh`
--

INSERT INTO `data_contoh` (`id`, `nama`, `date_created`) VALUES
(3, 'Testing', 1595407218);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kegiatan`
--

CREATE TABLE `data_kegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis` varchar(32) DEFAULT NULL,
  `jml_petugas` double(10,0) DEFAULT NULL,
  `tgl_mulai` int(11) DEFAULT NULL,
  `tgl_selesai` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_kegiatan`
--

INSERT INTO `data_kegiatan` (`id`, `nama`, `jenis`, `jml_petugas`, `tgl_mulai`, `tgl_selesai`, `file`, `jabatan_id`, `date_created`) VALUES
(5, 'Survey Pasar Tahun 2020 Kota Jakarta Selatan', 'Survei', 121410, 1577811600, 1596128400, '45cff725fdcbabeb47f0bfd1890f9b20.jpeg', 3, 1595521934),
(6, 'Sensus Pertanian Tahun 2020', 'Sensus', 12988, 1593536400, 1594054800, '5ffbef1989ef147872803d77d4bb5117.jpeg', NULL, 1595411827),
(7, 'Sensus Tes', 'Survei', 2000, 1593536400, 1596128400, '3fa7d6cae8db2087b8f1869c699bb527.jpeg', NULL, 1595499564),
(8, 'Testing kegiatan', 'Pelatihan', 2522, 1593536400, 1593622800, 'f9a9fdd13f5457b0832cddda746ed6a0.png', 4, 1595521553);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_petugas`
--

CREATE TABLE `data_petugas` (
  `id` int(11) NOT NULL,
  `kegiatan_id` int(11) DEFAULT NULL,
  `sk_id` int(11) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `jabatan` varchar(64) DEFAULT NULL,
  `gol` varchar(5) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_spk` varchar(32) DEFAULT NULL,
  `tgl_spk` int(11) DEFAULT NULL,
  `no_st` varchar(32) DEFAULT NULL,
  `tgl_st` int(11) DEFAULT NULL,
  `jml` double(5,0) DEFAULT '0',
  `satuan` double(8,0) DEFAULT '0',
  `bruto` double(10,0) DEFAULT '0',
  `capaian` double(5,0) DEFAULT '0',
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_petugas`
--

INSERT INTO `data_petugas` (`id`, `kegiatan_id`, `sk_id`, `nik`, `nama`, `jabatan`, `gol`, `alamat`, `no_spk`, `tgl_spk`, `no_st`, `tgl_st`, `jml`, `satuan`, `bruto`, `capaian`, `date_created`) VALUES
(14, 5, 4, '3276110207840003', 'DANA KRISTIAWAN', 'Kepala Seksi IPDS', 'III', 'Jl. H. Kenan No. 5 Kel. Bojongsari Kec. Bojongsari Kota Depok, Jawa Barat', '124/SPK/2020', 1594832400, '235252/ST/2020', 1596128400, 30, 200000, 6000000, 30, 1595500334),
(16, 5, 4, '1234567890123456', 'Cepot', 'Kepala Kantor', 'III', 'Jalan jalan', NULL, NULL, NULL, NULL, 10, 250000, 2500000, NULL, 1595510357),
(17, 6, 7, '3276110207840003', 'DANA KRISTIAWAN', 'Kepala Seksi IPDS', 'III', 'Jl. H. Kenan No. 5 Kel. Bojongsari Kec. Bojongsari Kota Depok, Jawa Barat', 'adfafa', 1594141200, 'dsgga', 1594227600, 10, 300000, 3000000, 10, 1595518692);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sk`
--

CREATE TABLE `data_sk` (
  `id` int(11) NOT NULL,
  `kegiatan_id` int(11) DEFAULT NULL,
  `nomor` varchar(128) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal` int(11) DEFAULT NULL,
  `akun_id` int(11) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_sk`
--

INSERT INTO `data_sk` (`id`, `kegiatan_id`, `nomor`, `nama`, `tanggal`, `akun_id`, `date_created`) VALUES
(4, 5, '001/31.716/SK/JANUARI/2020', 'Petugas Konsultasi Teknis Seksi IPDS', 1580403600, 4, 1595529404),
(6, 5, '124/SK/2020', 'Petugas survei', 1593536400, NULL, 1595529337),
(7, 6, '1414/saga/adfaa', 'SK sdga', 1596128400, NULL, 1595518683),
(8, 5, '222//22/222', 'dgs hf sfgsgss', 1596042000, 4, 1595529426);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_akun`
--

CREATE TABLE `ref_akun` (
  `id` int(11) NOT NULL,
  `kd_program` varchar(9) DEFAULT NULL,
  `nm_program` varchar(128) DEFAULT NULL,
  `kd_kegiatan` varchar(4) DEFAULT NULL,
  `nm_kegiatan` varchar(128) DEFAULT NULL,
  `kd_output` varchar(3) DEFAULT NULL,
  `nm_output` varchar(128) DEFAULT NULL,
  `kd_komponen` varchar(3) DEFAULT NULL,
  `nm_komponen` varchar(128) DEFAULT NULL,
  `kd_akun` varchar(6) DEFAULT NULL,
  `nm_akun` varchar(128) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ref_akun`
--

INSERT INTO `ref_akun` (`id`, `kd_program`, `nm_program`, `kd_kegiatan`, `nm_kegiatan`, `kd_output`, `nm_output`, `kd_komponen`, `nm_komponen`, `kd_akun`, `nm_akun`, `date_created`) VALUES
(4, '054.01.06', 'Program Penyediaan dan Pelayanan Informasi Statistik', '2897', 'Pelayanan dan Pengembangan Diseminasi Informasi Statistik', '004', 'Sistem Pendukung Layanan untuk Diseminasi Data dan Informasi Statistik yang Dikembangkan dan Dipelihara', '100', 'Peningkatan Kualitas dan Pelayanan Publikasi', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 1595528395);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_bank`
--

CREATE TABLE `ref_bank` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ref_bank`
--

INSERT INTO `ref_bank` (`id`, `nama`, `date_created`) VALUES
(3, 'Bank BNI', 1595429382),
(4, 'Bank Mandiri', 1595429388),
(5, 'Bank BRI', 1595429395);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_jabatan`
--

CREATE TABLE `ref_jabatan` (
  `id` int(11) NOT NULL,
  `kode` varchar(2) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `nama_peg` varchar(128) DEFAULT NULL,
  `nip_peg` varchar(18) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ref_jabatan`
--

INSERT INTO `ref_jabatan` (`id`, `kode`, `nama`, `nama_peg`, `nip_peg`, `date_created`) VALUES
(3, '01', 'Kepala Kantor', 'Tesss', '111111111111111111', 1595521193),
(4, '02', 'Kepala Seksi IPDS', NULL, NULL, 1595511356),
(5, '03', 'Bendahara Pengeluaran', NULL, NULL, 1595511364),
(6, '04', 'Kepala Seksi', 'Testing', '123456789012345678', 1595521130);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_jenis`
--

CREATE TABLE `ref_jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ref_jenis`
--

INSERT INTO `ref_jenis` (`id`, `nama`, `date_created`) VALUES
(1, 'Sensus', 1595407218),
(4, 'Survei', 1595519437),
(5, 'Pelatihan', 1595519442);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_petugas`
--

CREATE TABLE `ref_petugas` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `jabatan` varchar(64) DEFAULT NULL,
  `gol` varchar(5) DEFAULT NULL,
  `rekening` varchar(32) DEFAULT NULL,
  `nama_bank` varchar(64) DEFAULT NULL,
  `nama_rek` varchar(128) DEFAULT NULL,
  `npwp` varchar(32) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_petugas`
--

INSERT INTO `ref_petugas` (`id`, `nik`, `nama`, `jabatan`, `gol`, `rekening`, `nama_bank`, `nama_rek`, `npwp`, `alamat`, `date_created`) VALUES
(1, '3276110207840003', 'DANA KRISTIAWAN', 'Kepala Seksi IPDS', 'III', '0197743553', 'Bank BRI', 'DANA KRISTIAWAN', '143622686333000', 'Jl. H. Kenan No. 5 Kel. Bojongsari Kec. Bojongsari Kota Depok, Jawa Barat', 1595500027),
(2, '1234567890123456', 'Cepot', 'Kepala Kantor', 'III', '1234567890', 'Bank BNI', 'Cepot', '123456789012345', 'Jalan jalan', 1595500032),
(3, '1111111111111111', 'Wagiso Alwakis', 'Kepala Kantor', 'III', '12345', 'Bank Mandiri', 'Wagiso', '123456789012345', 'Jalan H. Kenan', 1595500037),
(5, '4444444444444444', 'Testting', 'Kepala Seksi IPDS', 'IV', '123', 'Bank BRI', 'Testinf', '123456789012345', 'Jalan testing', 1595500022);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_user`
--

CREATE TABLE `ref_user` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `gambar` varchar(64) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_user`
--

INSERT INTO `ref_user` (`id`, `nik`, `nama`, `email`, `gambar`, `password`, `is_active`, `date_created`) VALUES
(1, '3276110207840003', 'Dana Kristiawan', 'danakristiawan@gmail.com', 'default.jpeg', '$2y$10$dTvkC2eAvtW8rFGolEKbaOWDgTRn7qSaOYTf91jDp0UvtwTrYbaTC', 1, 1595413807),
(2, '1234567890123456', 'Cepot', 'cepot@gmail.com', 'default.jpeg', '-', 1, 1595413807),
(3, '3276035807830005', 'Istiqamah Rani', 'istiqamahrani@gmail.com', 'default.jpeg', '$2y$10$6kO2ArSKEmlbsrsZP7OLbudz9tNbt0pkay0Qf4wLbmt6kp5Xl43BG', 1, 1595535633);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_user_token`
--

CREATE TABLE `ref_user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `token` varchar(128) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_user_token`
--

INSERT INTO `ref_user_token` (`id`, `email`, `token`, `date_created`) VALUES
(4, 'istiqamahrani@gmail.com', '0fQCWlo2zMjFT8MnEK//wBc68qHrthLNALgcVtrjHzU=', 1595535603);

-- --------------------------------------------------------

--
-- Struktur dari tabel `system_access`
--

CREATE TABLE `system_access` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `system_access`
--

INSERT INTO `system_access` (`id`, `role_id`, `menu_id`) VALUES
(1, 3, 1),
(2, 3, 2),
(3, 3, 3),
(4, 3, 4),
(5, 3, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `system_menu`
--

CREATE TABLE `system_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `system_menu`
--

INSERT INTO `system_menu` (`id`, `name`) VALUES
(1, 'Beranda'),
(2, 'Data'),
(3, 'Monitoring'),
(4, 'Referensi'),
(5, 'System');

-- --------------------------------------------------------

--
-- Struktur dari tabel `system_role`
--

CREATE TABLE `system_role` (
  `id` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `system_role`
--

INSERT INTO `system_role` (`id`, `name`) VALUES
(1, 'Petugas'),
(2, 'Operator'),
(3, 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `system_sub_menu`
--

CREATE TABLE `system_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `icon` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `system_sub_menu`
--

INSERT INTO `system_sub_menu` (`id`, `menu_id`, `name`, `url`, `icon`) VALUES
(1, 1, 'Dashboard', 'home', 'nav-icon fa fa-dashboard'),
(2, 5, 'System', '#', 'nav-icon fa fa-wrench'),
(3, 2, 'Kegiatan', 'kegiatan', 'nav-icon fa fa-list'),
(4, 4, 'Contoh', 'contoh', 'nav-icon fa fa-archive'),
(5, 4, 'Pengguna', 'pengguna', 'nav-icon fa fa-tags'),
(6, 4, 'Petugas', 'petugas', 'nav-icon fa fa-tags'),
(7, 4, 'Jabatan', 'jabatan', 'nav-icon fa fa-tags'),
(8, 4, 'Bank', 'bank', 'nav-icon fa fa-tags'),
(9, 4, 'Akun', 'akun', 'nav-icon fa fa-tags'),
(10, 2, 'Capaian', 'capaian', 'nav-icon fa fa-archive'),
(11, 2, 'Persetujuan', 'persetujuan', 'nav-icon fa fa-database'),
(12, 3, 'Jenis', 'jenis', 'nav-icon fa fa-tags'),
(13, 2, 'Pembayaran', 'pembayaran', 'nav-icon fa fa-tags');

-- --------------------------------------------------------

--
-- Struktur dari tabel `system_sub_sub_menu`
--

CREATE TABLE `system_sub_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `sub_menu_id` int(11) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `icon` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `system_sub_sub_menu`
--

INSERT INTO `system_sub_sub_menu` (`id`, `menu_id`, `sub_menu_id`, `name`, `url`, `icon`) VALUES
(1, 5, 2, 'Access', 'akses', 'nav-icon fa fa-angle-right'),
(2, 5, 2, 'Menu', 'menu', 'nav-icon fa fa-angle-right'),
(3, 5, 2, 'User', 'user', 'nav-icon fa fa-angle-right');

-- --------------------------------------------------------

--
-- Struktur dari tabel `system_user`
--

CREATE TABLE `system_user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `system_user`
--

INSERT INTO `system_user` (`id`, `role_id`, `nik`, `nama`) VALUES
(1, 3, '3276110207840003', 'Dana Kristiawan'),
(3, NULL, '1234567890123456', 'Cepot'),
(4, 3, '3276035807830005', 'Istiqamah Rani');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_pembayaran`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_pembayaran` (
`kegiatan_id` int(11)
,`sk_id` int(11)
,`nik` varchar(16)
,`nama` varchar(128)
,`gol` varchar(5)
,`jml` double(5,0)
,`capaian` double(5,0)
,`satuan` double(8,0)
,`bruto` double(10,0)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_pembayaran`
--
DROP TABLE IF EXISTS `view_pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pembayaran`  AS  select `data_petugas`.`kegiatan_id` AS `kegiatan_id`,`data_petugas`.`sk_id` AS `sk_id`,`data_petugas`.`nik` AS `nik`,`data_petugas`.`nama` AS `nama`,`data_petugas`.`gol` AS `gol`,`data_petugas`.`jml` AS `jml`,`data_petugas`.`capaian` AS `capaian`,`data_petugas`.`satuan` AS `satuan`,`data_petugas`.`bruto` AS `bruto` from `data_petugas` where (`data_petugas`.`jml` <= `data_petugas`.`capaian`) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_capaian`
--
ALTER TABLE `data_capaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_contoh`
--
ALTER TABLE `data_contoh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_petugas`
--
ALTER TABLE `data_petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_sk`
--
ALTER TABLE `data_sk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ref_akun`
--
ALTER TABLE `ref_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ref_bank`
--
ALTER TABLE `ref_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ref_jabatan`
--
ALTER TABLE `ref_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ref_jenis`
--
ALTER TABLE `ref_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ref_petugas`
--
ALTER TABLE `ref_petugas`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `ref_user`
--
ALTER TABLE `ref_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `ref_user_token`
--
ALTER TABLE `ref_user_token`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `system_access`
--
ALTER TABLE `system_access`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `system_menu`
--
ALTER TABLE `system_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `system_role`
--
ALTER TABLE `system_role`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `system_sub_menu`
--
ALTER TABLE `system_sub_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `system_sub_sub_menu`
--
ALTER TABLE `system_sub_sub_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `system_user`
--
ALTER TABLE `system_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_capaian`
--
ALTER TABLE `data_capaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `data_contoh`
--
ALTER TABLE `data_contoh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_petugas`
--
ALTER TABLE `data_petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `data_sk`
--
ALTER TABLE `data_sk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ref_akun`
--
ALTER TABLE `ref_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ref_bank`
--
ALTER TABLE `ref_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ref_jabatan`
--
ALTER TABLE `ref_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ref_jenis`
--
ALTER TABLE `ref_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ref_petugas`
--
ALTER TABLE `ref_petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ref_user`
--
ALTER TABLE `ref_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ref_user_token`
--
ALTER TABLE `ref_user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `system_access`
--
ALTER TABLE `system_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `system_menu`
--
ALTER TABLE `system_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `system_role`
--
ALTER TABLE `system_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `system_sub_menu`
--
ALTER TABLE `system_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `system_sub_sub_menu`
--
ALTER TABLE `system_sub_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `system_user`
--
ALTER TABLE `system_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
