-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Des 2020 pada 09.45
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `no_hp_lama` varchar(100) NOT NULL,
  `no_hp_baru` varchar(100) NOT NULL,
  `tgl_perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_mhs`, `nim`, `no_hp_lama`, `no_hp_baru`, `tgl_perubahan`) VALUES
(26, '12180324', '878880237', '878880237', '2020-12-26 18:58:03'),
(27, '12180324', '878880237', '878880237', '2020-12-26 18:58:19'),
(28, '12180324', '878880237', '878880237', '2020-12-26 18:58:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `jns_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama_mhs`, `nim`, `jns_kelamin`, `alamat`, `no_hp`, `jurusan`) VALUES
(13, 'test', '12180324', 'Laki-Laki', 'Jakarta', 878880237, 'Teknik Informatika'),
(14, 'Nisa Almaida', '11190478', 'Perempuan', 'Jl. Utama 6 no.8', 834344213, 'Sistem Informasi'),
(15, 'Putri Widyasari', '11190368', 'Perempuan', 'Jl. Prepedan Raya, kec.Kalideres Jakarta Barat', 812293484, 'Sistem Informasi'),
(16, 'Siti Robiah', '11190515', 'Perempuan', 'Jl. Manunggal Kapuk Rawa Gabus', 865435343, 'Sistem Informasi'),
(17, 'Maria Flaviana', '11190416', 'Perempuan', 'Jl. Kapuk Raya No.7', 875643443, 'Sistem Informasi');

--
-- Trigger `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `log_perubahan` BEFORE UPDATE ON `mahasiswa` FOR EACH ROW insert into log
set nim=old.nim,
no_hp_lama =old.no_hp,
no_hp_baru=new.no_hp,
tgl_perubahan=now()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
