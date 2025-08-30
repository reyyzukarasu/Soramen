-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2023 pada 02.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--
CREATE DATABASE IF NOT EXISTS `project_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project_db`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `komen` varchar(100) NOT NULL,
  `tanggal_komentar` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id`, `nama`, `komen`, `tanggal_komentar`) VALUES
(1, 'Azhar', 'Minta source code banh', '2023-11-21'),
(2, 'Azka', '-_-', '2023-11-21'),
(3, 'jong', 'mantap bet ler', '2023-11-21'),
(5, 'Azhar', 'goblok bego', '2023-11-22'),
(8, 'siak', 'bego', '2023-11-22'),
(9, 'Rei', 'mantap dahh', '2023-11-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_ramen`
--

CREATE TABLE `produk_ramen` (
  `id` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `toping` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `bintang` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk_ramen`
--

INSERT INTO `produk_ramen` (`id`, `gambar`, `nama`, `sub`, `toping`, `price`, `bintang`) VALUES
(1, 'miso.png', 'MISO RAMEN', '\"Fermentasi kedelai asli khas Jepang\"', 'Topping: Katsu, Telur, Nori, Narutomaki, Yasai', '33K', 20),
(2, 'curry.png', 'CURRY RAMEN', '\"Kental gurih curry jepang\"', 'Topping: Katsu, Telur, Nori, Narutomaki, Yasai', '35K', 20),
(3, 'chizu.png', 'CHIZU RAMEN', '\"Kamu keju lovers? wajib coba ini!\"', 'Topping: Katsu, Keju, Narutomaki, Yasai', '32K', 15),
(4, 'shiro.png', 'SHIRO RAMEN', '\"Ramen dengan segar gurihnya susu!\"', 'Topping: Katsu, Telur, Nori, Narutomaki, Yasai', '36K', 20),
(5, 'blue.png', 'BLUE RAMEN', '\"Rasa dari lautan biru!\"', 'Topping: Udang, Nori, Narutomaki, Cumi, Yasai', '27K', 16),
(6, 'bbq.png', 'BBQ RAMEN', '\"Citarasa asam manis saus bbq\"', 'Topping: Katsu, Telur, Nori, Narutomaki, Yasai', '35K', 20),
(7, 'shoyu.png', 'SHOYU RAMEN', '\"Kuah khas Jepang gurih & segar\"', 'Topping: Katsu, Telur, Nori, Narutomaki, Yasai', '27.5K', 20),
(8, 'teriyaki.png', 'TERIYAKI RAMEN', '\"Ramen yang gurih dan manis\"', 'Topping: Katsu, Telur, Nori, Narutomaki, Yasai', '28K', 20);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk_ramen`
--
ALTER TABLE `produk_ramen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `produk_ramen`
--
ALTER TABLE `produk_ramen`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
