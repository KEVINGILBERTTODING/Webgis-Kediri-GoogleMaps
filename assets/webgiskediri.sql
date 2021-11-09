-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2021 at 06:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgiskediri`
--

-- --------------------------------------------------------

--
-- Table structure for table `peternakan`
--

CREATE TABLE `peternakan` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `lat` float NOT NULL,
  `lng` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peternakan`
--

INSERT INTO `peternakan` (`id`, `nama`, `alamat`, `lat`, `lng`) VALUES
(1, 'Kel. Tani Ternak Sapi Barokah', 'Jl. Tegalrejo, Semen, Ngablak, Kec. Banyakan', -7.75237, '111.99297'),
(2, 'Ternak Sapi Timbang', 'Dusun Pucung, Jambean, Kec. Kras', -7.91845, '111.97477'),
(3, 'Sawunggaling Farm', 'Kencong Timur, Kencong, Kec. Kepung', -7.7816, '112.2602'),
(4, 'Si Beken', 'Jl. Sudanco Supriyadi, Kec. Mojo', -7.8429, '111.9354'),
(5, 'Peternakan Sapi Lembu Mas', 'Jl. Kenanga, Krenceng, Kec. Kepung', -7.77891, '112.22362'),
(6, 'Sapi Perah Jodipati', 'Jl. Jodipati No.55, Banyuanyar, Kec. Gurah', -7.8218, '112.1213'),
(7, 'Barokah Farm Kediri', 'Jl. Sikatan Wates, Wates, Kec. Wates', -7.8937, '112.1328'),
(8, 'UD. Sahabat Kediri', 'Dusun Bangsongan RT005 RW024, Badalcikal, Sukoanyar, Kec. Mojo', -7.8563, '111.9469'),
(9, 'Peternakan Sekar Lembu', 'Jl. Karanglo, Paron II, Paron, Kec. Ngasem', -7.7921, '112.0628'),
(10, 'Peternakan Sapi Perah Pak Kusgianto', 'Dusun Kedung Bogo, RT/RW 02/02, Kedungbogo, Kuwik, Kec. Kunjang', -7.68202, '112.19298'),
(11, 'Rumah Ternak Sapi H. Sunarto', 'Jl. Brontoseno, Dusun Purwodadi, Purwodadi, Kec. Kras', -7.94875, '111.95351'),
(12, 'CV. Karunia Kediri', 'Jongbiru, Kec. Gampengrejo', -7.78091, '112.00763'),
(13, 'Al Khoiriyah Farm', 'Candirejo, Tegowangi, Kec. Pare', -7.73225, '112.15872'),
(14, 'Pak Kancil Jual Beli Sapi', 'Jl. Marabunta, Dilem, Ringinrejo, Kec. Ringinrejo', -7.9665, '112.0494'),
(15, 'Kandang Sapi Pak Nur', 'Semanding, Kec. Pagu', -7.77262, '112.09027'),
(16, 'Sido Dadi Farm', 'Jl. Raya Kediri - Blitar, Susuhbango Selatan, Selodono, Kec. Ringinrejo', -7.95961, '112.02954'),
(17, 'Kandang Sapi Pak Siswanto', 'Dampit, Asmorobangun, Kec. Puncu', -7.8333, '112.2458'),
(18, 'Sumber Agung Farm', 'Sumberagung, Krecek, Kec. Badas', -7.7231, '112.2190'),
(19, 'Kandang Sapi Desa Kedungmalang', 'Kedungmalang, Kec. Papar', -7.70622, '112.11854');

-- --------------------------------------------------------

--
-- Table structure for table `ternak`
--

CREATE TABLE `ternak` (
  `id` int(11) NOT NULL,
  `provinsi` char(50) NOT NULL,
  `kabupaten` char(50) NOT NULL,
  `kodedagri` char(20) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `jml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ternak`
--

INSERT INTO `ternak` (`id`, `provinsi`, `kabupaten`, `kodedagri`, `kecamatan`, `jml`) VALUES
(15, 'Jawa Timur', 'Kediri', '64113', 'GURAH', 14890),
(5, 'Jawa Timur', 'Kediri', '64151', 'GROGOL', 6095),
(7, 'Jawa Timur', 'Kediri', '64152', 'TAROKAN', 10430),
(19, 'Jawa Timur', 'Kediri', '64153', 'PAPAR', 11094),
(20, 'Jawa timur', 'Kediri', '64154', 'PURWOASRI', 3229),
(18, 'Jawa Timur', 'Kediri', '64156', 'KUNJANG', 6915),
(6, 'Jawa Timur', 'Kediri', '64157', 'BANYAKAN', 4997),
(4, 'Jawa Timur', 'Kediri', '64162', 'MOJO', 11766),
(3, 'Jawa Timur', 'Kediri', '64172', 'KRAS', 8919),
(22, 'Jawa Timur', 'Kediri', '64173', 'Kandat', 9391),
(1, 'Jawa Timur', 'Kediri', '64174', 'WATES', 14458),
(2, 'Jawa Timur', 'Kediri', '64175', 'PLOSOKLATEN', 12998),
(21, 'Jawa Timur', 'Kediri', '64176', 'RINGINREJO', 11024),
(8, 'Jawa Timur', 'Kediri', '64181', 'NGASEM', 2995),
(9, 'Jawa Timur', 'Kediri', '64182', 'GAMPANGREJO', 2565),
(16, 'Jawa Timur', 'Kediri', '64183', 'PAGU', 9575),
(17, 'Jawa Timur', 'Kediri', '64212', 'PARE', 6915),
(14, 'Jawa Timur', 'Kediri', '64216', 'BADAS', 3229),
(10, 'Jawa Timur', 'Kediri', '64291', 'NGANCAR', 10989),
(11, 'Jawa Timur', 'Kediri', '64292', 'PUNCU', 12003),
(12, 'Jawa Timur', 'Kediri', '64293', 'KEPUNG', 7365),
(13, 'Jawa Timur', 'Kediri', '64294', 'KANDANGAN', 2769);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `level`, `password`) VALUES
(2, 'indah', 'Indah Cahaya', 'user', 'indah'),
(8, 'kevin', 'Kevin Gilbert Toding', 'admin', 'kevin12345'),
(28, 'chika', 'chelsi chika zeruya', 'user', 'chika'),
(30, 'lia', 'Natalia Permata Sari', 'admin', 'lia12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peternakan`
--
ALTER TABLE `peternakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ternak`
--
ALTER TABLE `ternak`
  ADD PRIMARY KEY (`kodedagri`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
