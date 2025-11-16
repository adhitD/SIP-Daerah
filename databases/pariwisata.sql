-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Nov 2025 pada 06.02
-- Versi server: 5.7.39
-- Versi PHP: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `jam_operasional` varchar(50) NOT NULL,
  `tiket_masuk` float NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama`, `lat`, `lng`, `jam_operasional`, `tiket_masuk`, `deskripsi`, `cover`) VALUES
(1, 'test', '0.5729907606677359', '122.99554824829103', '08.00', 120000, 'kfhdjvkdsfbj', '1763270478_download (3).jpg'),
(2, 'kampus 1', '0.5482344861954717', '123.08101415634157', '08.00', 120000, 'gjdkflgfblk', '1763272620_download (1).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `nama`, `tanggal`, `lokasi`, `keterangan`) VALUES
(1, 'Pesona Danau Limboto', '2025-11-15', 'jbnkjdb', 'bisakah terubah isi dalam textarea nya?\r\n'),
(2, 'Festival Karawo ', '2025-10-20', 'pusat kota', 'Pameran & lomba kerajinan bordir Karawo â€” menampilkan perajin lokal.'),
(4, 'Gorontalo Cultural Parade', '2025-11-09', 'Kota Gorontalo', 'Pawai budaya menampilkan pakaian adat dan pertunjukan seni.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner`
--

CREATE TABLE `kuliner` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `kategori` enum('Hidangan Adat','Makanan Favorit','Lainnya','') NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
