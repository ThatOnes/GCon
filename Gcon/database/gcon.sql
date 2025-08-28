-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Agu 2025 pada 06.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT 'default.png',
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile_image`, `role`, `created_at`) VALUES
(1, 'MIce', 'mice@gmail.com', '$2y$10$y3Qv8bCE2tvesqp5cBkLSevtqm0ZAUdJgza3NFItQz19JfVgXMVje', 'default.png', 'admin', '2025-08-25 03:41:00'),
(2, 'Mikhail', 'mikel@gmail.com', '$2y$10$Fh6CAiWwgtgDW23QD47ZWOczojHLNhxNIdeieIKH3pniJn6Ea5PNW', 'default.png', 'user', '2025-08-25 04:00:03'),
(5, 'fitriwemingsigma', 'fitir@gmail.com', '$2y$10$NTaoRpc/WM/5uJ3OrOu/Z.NNq9f.sJvlPV2lacW9Jsccve7dukVhS', 'default.png', 'user', '2025-08-27 04:13:15'),
(6, 'Kangkung', 'raju@gmail.com', '$2y$10$7OeSDUIsIcHniQhNbMyMmuF2tsef41us3oIK7ZxUTRaKh2g7j4BAO', 'default.png', 'user', '2025-08-28 00:28:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
