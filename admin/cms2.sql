-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2018 pada 07.37
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aboutus`
--

CREATE TABLE `aboutus` (
  `heading` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `aboutus`
--

INSERT INTO `aboutus` (`heading`, `content`) VALUES
('About', ''),
('About', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `main_title` varchar(1000) NOT NULL,
  `email` text NOT NULL,
  `sendtoemail` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zipcode` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id`, `heading`, `main_title`, `email`, `sendtoemail`, `address`, `city`, `state`, `zipcode`, `phone`) VALUES
(1, 'Contact', 'Contact With Us', 'dimasariyanto890@gmail.com', 'dimasariyanto890@gmail.com', 'Jalan Gondang Timur 4, Grand Tembalang Regency Blok D3 Nomor 30 Bulusan, Tembalang, Semarang, Jawa Tengah, Indonesia', '', '0895386989706', '', '0895386989706');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitur`
--

CREATE TABLE `fitur` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `main_title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fitur`
--

INSERT INTO `fitur` (`id`, `heading`, `main_title`, `subtitle`) VALUES
(1, 'Fitur', 'FITUR I SMS GATEWAY', 'Berikut adalah beberapa fitur yang kami sediakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `footer`
--

INSERT INTO `footer` (`id`, `heading`, `content`) VALUES
(1, 'Footer', 'All copyrights reserved Â© 2018 - Developed by Anak Magang izza web');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `idharga` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(100) NOT NULL,
  `satuan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`idharga`, `heading`, `nama_produk`, `harga_produk`, `satuan`) VALUES
(1, 'Harga', 'SMS REGULER', '80', 'SMS'),
(2, 'Harga', 'SMS MASKING', '280', 'SMS'),
(3, 'Harga', 'SMS CENTER', '165.000', 'Bulan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `heading` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `teks` varchar(1000) NOT NULL,
  `klik` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumbotron`
--

CREATE TABLE `jumbotron` (
  `id_jumbotron` int(11) NOT NULL,
  `jumbotron` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jumbotron`
--

INSERT INTO `jumbotron` (`id_jumbotron`, `jumbotron`) VALUES
(1, 'hero-area.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing`
--

CREATE TABLE `landing` (
  `heading` text NOT NULL,
  `introtext` text NOT NULL,
  `skills` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `landing`
--

INSERT INTO `landing` (`heading`, `introtext`, `skills`, `image`) VALUES
('Produ', '', '', ''),
('Produ', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `navbar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `navbar`
--

INSERT INTO `navbar` (`id`, `navbar`) VALUES
(1, 'Home'),
(2, 'Produk'),
(3, 'Fitur'),
(4, 'Harga'),
(5, 'Contact');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `thumbnail` text NOT NULL,
  `content` text NOT NULL,
  `active` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id`, `title`, `thumbnail`, `content`, `active`, `datetime`) VALUES
(25, 'test', '', '<p>test</p>', 1, '2015-02-14 22:06:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `slogan` varchar(1000) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idproduk`, `heading`, `slogan`, `produk`, `content`, `icon`, `banner`) VALUES
(1, 'Produk\r\n', 'Software I SMS Gateway merupakan software yang dapat membantu anda dalam menyebarkan pesan singkat (sms) ke banyak nomor secara otomatis dan cepat. Manfaatnya antara lain adalah :\r\n', 'SMS REGULER', 'Layanan Online SMS Gateway dengan menggunakan nomer GSM acak dari server I SMS khusus untuk kebutuhan kirim SMS Massal berupa pengumuman / informasi. Bukan spam.', ' <i class=\"fa fa-envelope-o\"></i>', 'banner.jpg'),
(2, 'Produk', 'Software I SMS Gateway merupakan software yang dapat membantu anda dalam menyebarkan pesan singkat (sms) ke banyak nomor secara otomatis dan cepat. Manfaatnya antara lain adalah :', 'SMS MASKING', 'Layanan SMS dengan pengirim (sender ID) berupa huruf alphanumeric yang dapat di customize menjadi nama usaha Anda', '  <i class=\"fa fa-envelope\"></i>', 'banner.jpg'),
(3, 'Produk', 'Software I SMS Gateway merupakan software yang dapat membantu anda dalam menyebarkan pesan singkat (sms) ke banyak nomor secara otomatis dan cepat. Manfaatnya antara lain adalah :', 'SMS CENTER', 'Layanan Online SMS Gateway dengan menggunakan nomer SMS Center khusus untuk kebutuhan kirim & terima SMS pada perusahaan Anda.', '  <i class=\"fa fa-comments-o\"></i>', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setup`
--

CREATE TABLE `setup` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `heading` varchar(100) NOT NULL,
  `jumbotron` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `keywords` text NOT NULL,
  `description` varchar(1000) NOT NULL,
  `author` text NOT NULL,
  `tinymce` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `setup`
--

INSERT INTO `setup` (`id`, `title`, `heading`, `jumbotron`, `logo`, `keywords`, `description`, `author`, `tinymce`) VALUES
(1, 'I SMS Gateway', 'Home', 'hero-area.jpg', 'logo.png', 'Baca Selengkapnya', ' SMS Gateway dapat memberikan nilai tambah dan meningkatkan kualitas pelayanan pelanggan dan suara konsumen melalui layanan SMS Center Perusahaan Anda ', 'Apa Yang I SMS Bisa Lakukan.?', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `linkedin` text NOT NULL,
  `google` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `heading`, `facebook`, `twitter`, `linkedin`, `google`) VALUES
(1, 'Follow Me', 'https://www.facebook.com/s', 'https://www.twitter.com/', 'https://www.linkdln.com/', 'https://www.google.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_fitur`
--

CREATE TABLE `sub_fitur` (
  `idfitur` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `teks` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_fitur`
--

INSERT INTO `sub_fitur` (`idfitur`, `icon`, `title`, `teks`) VALUES
(1, '<i class=\"fa fa-address-book\" aria-hidden=\"true\"></i>', 'Manajemen Phonebook', 'Pengaturan kontak pada phonebook sesuai kebutuhan Anda termasuk Menambah, mengedit dan menghapus data phonebook.'),
(2, '<i class=\"fa fa-users\" aria-hidden=\"true\"></i>', 'Manajemen Group', 'Pengaturan kontak pada group phonebook sesuai kebutuhan Anda termasuk Menambah, mengedit dan menghapus data group phonebook.'),
(3, '<i class=\"fa fa-envelope-open-o\" aria-hidden=\"true\"></i>', 'Manajemen Inbox SMS', 'Menghapus, memforward dan mereply SMS yang masuk ke INBOX. Selain itu terdapat fitur auto history SMS.'),
(4, '<i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>', 'Pengiriman SMS', 'Kirim SMS ke satu kontak, ke grup ataupun kesemua kontak dalam phonebook.'),
(5, '\r\n<i class=\"fa fa-file-excel-o\" aria-hidden=\"true\"></i>', ' Export', 'Export ke Excel Anda dapat mengeksport semua SMS yang ada di folder INBOX maupun yang sudah terkirim (OUTBOX).'),
(6, ' <i class=\"fa fa-calendar-o\"></i>', 'Manajemen Auto Responder', 'Mendukung pesan SMS secara terjadwal seperti halnya auto responder di internet marketing, berdasarkan group.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_harga`
--

CREATE TABLE `sub_harga` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `deskripsi2` varchar(1000) NOT NULL,
  `deskripsi3` varchar(1000) NOT NULL,
  `deskripsi4` varchar(1000) NOT NULL,
  `deskripsi5` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_harga`
--

INSERT INTO `sub_harga` (`id`, `deskripsi`, `deskripsi2`, `deskripsi3`, `deskripsi4`, `deskripsi5`) VALUES
(1, 'Sistem Kerja Semi 2 arah', 'Kecepatan :100 SMS / menit', 'SMS Inbox', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `username`, `nama`, `password`, `level`, `foto`) VALUES
(1, 'admin', 'dimas', 'admin', 'admin', 'user.png'),
(2, 'kasir', 'yefta', 'kasir', 'kasir', 'user.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `id`) VALUES
('admin', 'admin', 2),
('admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`idharga`);

--
-- Indeks untuk tabel `jumbotron`
--
ALTER TABLE `jumbotron`
  ADD PRIMARY KEY (`id_jumbotron`);

--
-- Indeks untuk tabel `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indeks untuk tabel `setup`
--
ALTER TABLE `setup`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sub_fitur`
--
ALTER TABLE `sub_fitur`
  ADD PRIMARY KEY (`idfitur`);

--
-- Indeks untuk tabel `sub_harga`
--
ALTER TABLE `sub_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fitur`
--
ALTER TABLE `fitur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `idharga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jumbotron`
--
ALTER TABLE `jumbotron`
  MODIFY `id_jumbotron` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `setup`
--
ALTER TABLE `setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sub_harga`
--
ALTER TABLE `sub_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
