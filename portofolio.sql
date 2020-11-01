-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2020 pada 11.30
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `telepon` int(25) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `deskripsi`, `nama`, `ttl`, `alamat`, `email`, `telepon`, `foto`) VALUES
(1, 'I am an Informatics student in Pembangunan Jaya University. I am a person who has a high competitive spirit that make me get 3.76 GPA and scholarships from Marga Jaya. My creativity and social spirit got me into the organization.', 'Aviana Zhafira Rustandiputri', '2000-02-20', 'Villa Dago Tol', 'avianazhafira@gmail.com', 818188227, 'aviana.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `email` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `subjek` varchar(225) NOT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`email`, `nama`, `subjek`, `isi`) VALUES
('bibi@gmail.com', 'Kevin', 'Testing', 'Semoga bisa deh testingnya Semoga bisa deh testingnya Semoga bisa deh testingnya Semoga bisa deh testingnya Semoga bisa deh testingnya Semoga bisa deh testingnya Semoga bisa deh testingnya Semoga bisa deh testingnya Semoga bisa deh testingnya'),
('nanawijayanti@gmail.com', 'Jay', 'Testing', 'Halo aku aviana lagi nyoba testing Halo aku aviana lagi nyoba testing Halo aku aviana lagi nyoba testing Halo aku aviana lagi nyoba testing Halo aku aviana lagi nyoba testing Halo aku aviana lagi nyoba testing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `kampus` varchar(225) NOT NULL,
  `tahun_kampus` varchar(25) NOT NULL,
  `des_kampus` varchar(255) NOT NULL,
  `major_kampus` varchar(100) NOT NULL,
  `sma` varchar(225) NOT NULL,
  `tahun_sma` varchar(25) NOT NULL,
  `des_sma` varchar(255) NOT NULL,
  `major_sma` varchar(100) NOT NULL,
  `smp` varchar(225) NOT NULL,
  `tahun_smp` varchar(25) NOT NULL,
  `des_smp` varchar(255) NOT NULL,
  `major_smp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id`, `kampus`, `tahun_kampus`, `des_kampus`, `major_kampus`, `sma`, `tahun_sma`, `des_sma`, `major_sma`, `smp`, `tahun_smp`, `des_smp`, `major_smp`) VALUES
(1, 'Pembangunan Jaya University', '2018-Now', 'Pembangunan Jaya University was founded through the long experience of the Jaya group which has produced various masterpieces of property and monumental infrastructure development in DKI Jaya and 25 cities in Indonesia as well as experience in providing', 'Informatics', '3 Senior High School', '2015-2018', 'SMA Negeri (SMA N) 3, is one of the State Senior High Schools located in Banten Province, Indonesia. Similar to SMA in general, the school education period at SMAN 3 is taken within three academic years, starting from Class X to Class XII.', 'Science', '11 Junior High School', '2012-2015', 'SMP Negeri (SMP N) 11, is one of the State Junior High Schools located in Banten Province, Indonesia. Similar to SMP in general, the school education period at SMPN 11 is taken within three academic years, starting from Class VII to Class IX.', 'Bilingual Class');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `id` int(20) NOT NULL,
  `ex1` varchar(255) NOT NULL,
  `des1` varchar(1000) NOT NULL,
  `gambar1` varchar(255) NOT NULL,
  `ex2` varchar(255) NOT NULL,
  `des2` varchar(1000) NOT NULL,
  `gambar2` varchar(225) NOT NULL,
  `ex3` varchar(255) NOT NULL,
  `des3` varchar(1000) NOT NULL,
  `gambar3` varchar(255) NOT NULL,
  `ex4` varchar(255) NOT NULL,
  `des4` varchar(1000) NOT NULL,
  `gambar4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`id`, `ex1`, `des1`, `gambar1`, `ex2`, `des2`, `gambar2`, `ex3`, `des3`, `gambar3`, `ex4`, `des4`, `gambar4`) VALUES
(1, 'Communication and Information Unit', 'member of KOMINFO Student Association for the 2019/2020 period', 'hima.png', 'Person in Charge of Fashion Show Competition', 'the person in charge in a fashion show competition at the Youth Pledge Event', 'sp19.png', 'Secretary of Student Association', 'I am the secretary of Student Association in the 2020/2021 period', 'hima.png', 'Chief Excecutive of Sumpah Pemuda Event', 'I am the chief executive of the 2020 youth pledge event.', 'sp20.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skills`
--

CREATE TABLE `skills` (
  `id` int(10) NOT NULL,
  `html` int(10) NOT NULL,
  `css` int(10) NOT NULL,
  `php` int(10) NOT NULL,
  `ms` int(10) NOT NULL,
  `tm` int(10) NOT NULL,
  `ps` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skills`
--

INSERT INTO `skills` (`id`, `html`, `css`, `php`, `ms`, `tm`, `ps`) VALUES
(1, 80, 80, 70, 90, 80, 85);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
