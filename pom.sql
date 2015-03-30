-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 29. Maret 2015 jam 09:05
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(101, 'administrator', 'admin101');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_wilayah` int(15) NOT NULL,
  `Nama_fasilitas` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_wilayah`, `Nama_fasilitas`) VALUES
(1, 'Toilet'),
(2, 'Musholla'),
(3, 'Mini Market'),
(4, 'Oli Market'),
(5, 'Pompa Nitrogen'),
(6, 'Pompa Angin (Hidrogen)'),
(7, 'ATM Center');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_spbu`
--

CREATE TABLE IF NOT EXISTS `informasi_spbu` (
  `Kode_spbu` int(15) NOT NULL,
  `id_admin` int(15) NOT NULL,
  `id_wilayah` int(15) NOT NULL,
  `Nama_spbu` varchar(1024) NOT NULL,
  `Lokasi` varchar(200) NOT NULL,
  `Jenis_produk` text NOT NULL,
  `Jam_operasional` varchar(10) NOT NULL,
  `Rating` text NOT NULL,
  `Peta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi_spbu`
--

INSERT INTO `informasi_spbu` (`Kode_spbu`, `id_admin`, `id_wilayah`, `Nama_spbu`, `Lokasi`, `Jenis_produk`, `Jam_operasional`, `Rating`, `Peta`) VALUES
(111, 101, 601101, 'SPBU 601101', 'JL. Kertajaya, No. 16, Airlangga, Gubeng', 'Premium\r\nPertamax\r\nPertamax Plus\r\nPertamx Dex\r\nBio Solar', '24 Jam', '', ''),
(112, 101, 601102, 'SPBU 601102', 'Jalan Raya Gubeng', 'Premium\r\nPetamax\r\nPertamax Plus\r\nBio Solar', '24 Jam', '', ''),
(113, 101, 601103, 'SPBU Ngagel Jaya', 'Jl Ngagel Jaya, Baratajaya', '', '24 Jam', '', ''),
(114, 101, 601104, 'SPBU 601104', 'Jl Pucang Sewu', '', '24 Jam', '', ''),
(115, 101, 601105, 'SPBU 601105', 'Jl Dr Soetomo', '', '24 Jam', '', ''),
(116, 101, 601106, 'SPBU 601106', 'Jl Gn Anyar no.17, Kali Rungkut, Gn Anyar', '', '24 Jam', '', ''),
(117, 101, 601107, 'SPBU 601107', 'Jl Gunung Anyar Tambak', '', '24 Jam', '', ''),
(118, 101, 601108, 'Pertamina Pasti Pas', 'Jl Raya Rungkut Menanggal', '', '24 Jam', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_pengunjung` int(11) NOT NULL,
  `Kode_spbu` int(15) NOT NULL,
  `nama_pengunjung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_pengunjung`, `Kode_spbu`, `nama_pengunjung`) VALUES
(1, 111, 'Heru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE IF NOT EXISTS `wilayah` (
  `id_wilayah` int(15) NOT NULL,
  `Nama_wilayah` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `Nama_wilayah`) VALUES
(601101, 'Kertajaya'),
(601102, 'Gubeng'),
(601103, 'Barata Jaya'),
(601104, 'Pucang'),
(601105, 'Airlangga'),
(601106, 'Gunung Anyar'),
(601107, 'Gunung Anyar Tambak'),
(601108, 'Rungkut Menanggal'),
(601109, 'Rungkut Tengah'),
(601110, 'Gebang Putih'),
(6011011, 'Keputih'),
(601112, 'Klampis Ngasem'),
(601113, 'Medokan Semampir'),
(601114, 'Menur Pumpungan'),
(601115, 'Nginden Jangkungan'),
(601116, 'Semolowaru'),
(601117, 'Kejawan Putih Tambak'),
(601118, 'Manyar Sabrangan'),
(601119, 'Mulyorejo'),
(601120, 'Wonorejo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
