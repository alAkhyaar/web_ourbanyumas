-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 04:48 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourbanyumas`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(100) NOT NULL,
  `judul` varchar(400) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `url` varchar(250) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `keterangan`, `url`, `foto`) VALUES
(14, 'Resmi Dibuka, Ini 6 Potret Kemegahan Menara Pandang Purwokerto', 'Di Purwokerto, Banyumas, Jawa Tengah, ada sebuah bangunan menara yang tinggi megah menjulang. Tingginya sekitar 117 meter. Keunikan dari menara ini adalah puncaknya yang berbentuk seperti daun teratai.', 'https://www.merdeka.com/jateng/resmi-dibuka-ini-6-potret-kemegahan-menara-pandang-purwokerto.html', '19062022005924menara1.jpg'),
(15, 'Asyik! Purwokerto Punya Bus Wisata Gratis, Mulai Beroperasi Hari Ini.', 'Untuk menggairahkan sektor pariwisata, mulai hari ini bus wisata gratis hadir di Kota Purwokerto. Beroperasi setiap akhir pekan. Bus wisata di Purwokerto itu akan melayani rute ke beberapa obyek wisata yang ada di Kabupaten Banyumas.', 'https://travel.detik.com/domestic-destination/d-5779493/asyik-purwokerto-punya-bus-wisata-gratis-mulai-beroperasi-hari-ini', '18062022153039cb4bc_bus-wisata-gratis.jpeg'),
(16, '12 Wisata Kuliner Purwokerto Legendaris, Mudah Ditemukan', 'Liputan6.com, Jakarta Wisata kuliner Purwokerto punya keunikan dan keistimewaannya sendiri. Purwokerto merupakan ibu kota dari Kabupaten Banyumas. Nama Purwokerto sendiri lebih populer dari Banyumas.', 'https://hot.liputan6.com/read/4439917/12-wisata-kuliner-purwokerto-legendaris-mudah-ditemukan', '18062022152706026211200_1595842311-chicken-noodle-bowl-with-side-dishes-thai-food_1150-20720.jpg'),
(17, 'Manjakan Ratusan Ribu Wisatawan, Baturaden Disulap Lebih Keren', 'Liputan6.com, Jakarta Agak jarang mendengar perkembangan destinasi Lokawisata Baturraden, Banyumas, Jawa Tengah. Diam-diam, mereka bakal make up menjadi lebih cantik, lebih keren, dan lebih memanjakan travelista saat libur Lebaran nanti. Maklum, Idul Fitri adalah saat peak season bagi semua destinasi wisata di Jawa Tengah, Jogjakarta dan Jawa Timur.', 'https://www.liputan6.com/lifestyle/read/2992455/manjakan-ratusan-ribu-wisatawan-baturaden-disulap-lebih-keren', '18062022152910033154000_1497531302-Baturaden.jpg'),
(18, '4 Tempat Wisata Baru di Banyumas Akan Dibuka Saat Libur Lebaran 2022', 'KOMPAS.com - Sebanyak empat tempat wisata baru di Kabupaten Banyumas, Jawa Tengah, akan dibuka pada periode libur Lebaran 2022.  Empat tempat wisata baru tersebut adalah Menara Pandang Indraprana Baturraden, Taman Apung Mas Kemambang Purwokerto, Menara Pandang Purwokerto, dan Madhang Maning Park Purwokerto. ', 'https://travel.kompas.com/read/2022/04/13/190600427/4-tempat-wisata-baru-di-banyumas-akan-dibuka-saat-libur-lebaran-2022', '18062022153228lokawisata1.jpg'),
(19, 'PFC Bakal Dilalui Rute Bus Trans Jateng', 'PURBALINGGA- Purbalingga Food Center (PFC) bakal semakin cethar. Pasalnya, Bupati Purbalingga berjanji akan mengupayakan jalur Bus Rapid Transit (BRT) melintasi lokasi tersebut. “Saya minta Dinhub segera memfasilitasi dan berkoordinasi dengan pengelola Trans Jateng. Karena ini penting dan akan membantu semakin majunya PFC,” kata Bupati Purbalingga Tiwi.', 'https://radarbanyumas.co.id/pfc-bakal-dilalui-rute-bus-trans-jateng/', '18062022153431Belum-Ada-Rencana-Penambahan-Unit-BRT-1000x600.jpg.webp');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(20) NOT NULL,
  `jenis_wisata` varchar(20) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `jenis_wisata`, `nama_tempat`, `foto`) VALUES
(113, 'Kolam Renang', 'Tirto Asri Walik', '18062022111901walik1.jpg'),
(114, 'Kolam Renang', 'Tirta Kembar', '18062022111916tirtakembar1.jpg'),
(115, 'Kolam Renang', 'Tirta Kencana', '18062022112005tirtakencana2.jpg'),
(116, 'Kolam Renang', 'The Forest Island', '18062022112134theforest3.jpg'),
(117, 'Kolam Renang', 'GWK Baturraden Waterpark', '18062022112151gwk3.jpg'),
(118, 'Kolam Renang', 'Buken', '18062022112203buken1.jpg'),
(119, 'Kolam Renang', 'Depo Bay Pelita', '18062022112220depo3.jpg'),
(120, 'Kolam Renang', 'Pagubugan', '18062022112316pagubugan1.jpg'),
(121, 'Wisata Alam', 'Lokawisata Baturraden', '18062022115446lokawisata1.jpg'),
(122, 'Wisata Alam', 'Curug Gomblang', '18062022115510gomblang2.jpg'),
(123, 'Wisata Alam', 'Bukit Watu Meja', '18062022115528watumeja3.jpg'),
(124, 'Wisata Alam', 'Curug Jenggala', '18062022115551jenggala1.jpg'),
(125, 'Wisata Modern', 'Small World', '18062022122625smallworld3.jpg'),
(126, 'Wisata Modern', 'Bendungan Gerak Serayu', '18062022122648bendungan3.jpg'),
(127, 'Wisata Modern', 'Taman Maskumambang', '18062022122709maskumambang3.jpg'),
(128, 'Wisata Modern', 'Menara Pandang Teratai', '18062022122727menara1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `saran` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`id`, `nama_user`, `saran`) VALUES
(55, 'Raju', 'Nice broo'),
(56, 'Simsi', 'Gambar terlalu sedikit :('),
(57, 'User', 'Sangat membantu :)'),
(58, 'Syah', 'Damage Broo !'),
(59, 'User', 'Paling suka ke Walik, Tempatnya Segar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_awal` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama_akhir` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dibuat` datetime NOT NULL,
  `diubah` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `role` varchar(64) COLLATE utf8_unicode_ci DEFAULT 'user_biasa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_awal`, `nama_akhir`, `email`, `password`, `telp`, `dibuat`, `diubah`, `status`, `role`) VALUES
(15, 'Admin', 'Akhyaar', 'akhyaarelm@gmail.com', '202cb962ac59075b964b07152d234b70', '082223172828', '2022-06-18 01:48:36', '2022-06-18 01:48:36', '1', 'admin'),
(16, 'Admin', '2', 'Admin2@ourbanyumas.com', '21eed4f2e9ab214fdbf00a2a091d63c4', '7894561233', '2022-06-19 00:53:41', '2022-06-19 00:53:41', '1', 'admin'),
(26, 'User', 'Biasa', 'User@gmail.com', '428d0e7a73d305245da72e307ae51e57', '1234567899877', '2022-06-18 01:51:54', '2022-06-18 01:51:54', '1', 'user_biasa'),
(27, 'User', '1', 'User1@ourbanyumas.com', '6b908b785fdba05a6446347dae08d8c5', '8544698432', '2022-06-19 00:57:01', '2022-06-19 00:57:01', '1', 'user_biasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
