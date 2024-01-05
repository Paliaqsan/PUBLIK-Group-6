-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2023 pada 16.32
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_publik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `katakata` varchar(2000) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`id`, `nama`, `nim`, `katakata`, `foto`) VALUES
(1, 'Muh. Falah Mubaraq', 'E1E1 22 020', 'Semangat Terus!!!', 'falah.jpg'),
(2, 'Muh. Vannes Al Qadri', 'E1E1 22 071', 'Diam dalam bertemu, bergerak dalam doa.', 'vannes.jpg'),
(3, 'Annisa Nurfadilah', 'E1E1 22 004', '', 'nisfa.jpg'),
(4, 'La Ode Pali Aqsan', 'E1E1 22 106', 'Cinta ada kalanya baik, dan ada kalanya buruk. jika putus, hanya akan menyisakan kesedihan bahkan kekecewaan.', 'pali.jpg'),
(5, 'Ghefira Zahra Fadilah', 'E1E1 22 055', 'Kalau punya tugas taruh saja di story, nanti tugasnya akan hilang dalam 24 jam', 'ghefira.jpg'),
(6, 'Fabelina Agsaria', 'E1E1 22 096', '', 'elin.jpg'),
(7, 'Auliya Afifah Adnan Hakim', 'E1E1 22 046', 'Kukira jurusanku mudah, ternyata mudah mudahan bisa bertahan', 'aul.jpg'),
(8, 'Usrianto', 'E1E1 22 033', 'Tetaplah terlihat bodoh dimana pun kamu berada', 'usri.jpg'),
(9, 'Ninis Putri Arafah', 'E1E1 22 132', 'I only see deadline, deadline, deadline, deadline', 'ninis.jpg'),
(10, 'Wa Ode Fahmi Ramadhani', 'E1E1 22 145', 'what\'s a gurl gonna do?A diamond\'s gotta shine', 'ami.jpg'),
(11, 'Muh. Gian Amanah', 'E1E1 22 111', '', 'gian.jpg'),
(12, 'Devy Natalia Nurtiani', 'E1E1 22 008', '', 'devi.jpg'),
(13, 'Jumain Zulkaidah', 'E1E1 22 061', 'Pertumbuhan dan kenyamanan tidak dapat hidup berdampingan', 'jumain.jpg'),
(14, 'Nurul Aulia Apriliyanti', 'E1E1 22 134', '', 'nurul.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hubungikami`
--

CREATE TABLE `tb_hubungikami` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_hubungikami`
--

INSERT INTO `tb_hubungikami` (`nama`, `email`, `subject`, `message`) VALUES
('falah', 'muh@gmail.com', 'aan', 'test'),
('falah', 'muh@gmail.com', 'ayyay', 'test'),
('hdidd', 'd@gmail.com', 'dd', 'd'),
('hdidd', 'd@gmail.com', 'dd', 'd'),
('yat', 'muh@gmail.com', 'kndkw', 'dkwkd'),
('yat', 'muh@gmail.com', 'kndkw', 'dkwkd'),
('ya', 'kn@gmail.com', 'k', 'ihdihdw'),
('ya', 'kn@gmail.com', 'k', 'ihdihdw'),
('ya', 'kn@gmail.com', 'k', 'ihdihdw'),
('isish', 'muh@gmail.com', 'kdihd', 'ihifw'),
('isish', 'muh@gmail.com', 'kdihd', 'ihifw'),
('cikong', 'muhfalahmubaraq@gmail.com', 'fw', 'rg'),
('cikong', 'muhfalahmubaraq@gmail.com', 'fw', 'rg'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_instansi`
--

CREATE TABLE `tb_instansi` (
  `id` int(11) NOT NULL,
  `nama_instansi` varchar(55) NOT NULL,
  `tipe_instansi` varchar(50) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_instansi`
--

INSERT INTO `tb_instansi` (`id`, `nama_instansi`, `tipe_instansi`, `link`, `gambar`) VALUES
(1, 'Dinas Kesehatan(Dinkes) Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://sippn.menpan.go.id/instansi/164735/pemerintah-kota-kendari/dinas-kesehatan', 'dinkeskendari.jpeg'),
(2, 'BNN Kota Kendari', 'BNN', 'https://kendarikota.bnn.go.id/', 'bnn.jpg'),
(3, 'Dinas Komunikasi & Informatika Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://diskominfo.kendarikota.go.id/', 'kominfo.png'),
(4, 'Dinas Kehutanan/ Forestry Service Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://dephut.kendarikota.go.id/', 'dephut.png'),
(5, 'Dinas Kelautan Dan Perikanan Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://dkp-kendari.info/', 'dkp.png'),
(6, 'Dinas Pendidikan, Kepemudaan dan Olahraga Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://disdikkendari.id/', 'disdik.png'),
(7, 'Dinas Kependudukan Dan Pencatatan Sipil Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://disdukcapil.kendarikota.go.id/', 'disdukcapil.png'),
(8, 'Dinas Ketahanan Pangan Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://dishanpan.kendarikota.go.id/', 'dishanpan.png'),
(9, 'Dinas Koperasi & Usaha Mikro Kecil Menengah Kota Kendar', 'Organisasi Perangkat Daerah (OPD)', 'https://disumkm.kendarikota.go.id/', 'disumkm.png'),
(10, 'Dinas Lingkungan Hidup Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://dlh.kendarikota.go.id/', 'dlh.png'),
(11, 'Dinas Pariwisata Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://pariwisata.sultraprov.go.id/', 'pariwisata.png'),
(12, 'Dinas Pemberdayaan Masyarakat Dan Desa Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://dpdm.kendarikota.go.id/', 'dpdm.png'),
(13, 'Dinas Pemberdayaan Perempuan, PPAK & KB Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://dispppa.kendarikota.go.id/', 'dispppa.png'),
(14, 'Dinas Penanaman Modal & Pelayanan Terpadu Satu Pintu Ko', 'Organisasi Perangkat Daerah (OPD)', 'https://dpmptsp.sultraprov.go.id/page/Profil-DPMPTSP-KabKota', 'dpmptsp.png'),
(15, 'Dinas Perhubungan Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://dishub.kendarikota.go.id/', 'dishub.png'),
(16, 'Dinas Perindustrian Dan Perdagangan Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://perindangkop.kendarikota.go.id/', 'perindangkop.png'),
(17, 'Dinas Perkebunan Dan Hortikultura Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://dpkh.kendarikota.go.id/', 'dpkh.png'),
(18, 'Dinas Perpustakaan Dan Kearsipan Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://dispusip.sultraprov.go.id/', 'dispusip.png'),
(19, 'Dinas Perumahan Rakyat, Kawasan Permukiman Dan Pertanah', 'Organisasi Perangkat Daerah (OPD)', 'https://dispik.kendarikota.go.id/', 'dispik.png'),
(20, 'Dinas Sosial Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://dinsos.kendarikota.go.id/', 'dinsos.png'),
(21, 'Dinas Sumber Daya Air Dan Bina Marga Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://sisdjatansdabm.sultraprov.go.id/', 'dabm.png'),
(22, 'Dinas Tanaman Pangan Dan Peternakan Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://www.facebook.com/distanak.sultra/', 'distanak.jpg'),
(23, 'Dinas Transmigrasi Dan Tenaga Kerja Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://kelembagaan.kemnaker.go.id/home/companies/7f62740e-d016-430a-8a75-1a08c1fad728/profiles', 'disnaker.png'),
(24, 'Rumah Sakit Umum Kota Kendari', 'Organisasi Perangkat Daerah (OPD)', 'https://sirs.kemkes.go.id/fo/home/profile_rs/7471092', 'rs.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `isi` varchar(2000) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(150) NOT NULL,
  `instansi` varchar(150) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  `lampiran` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`id`, `judul`, `isi`, `tanggal`, `lokasi`, `instansi`, `kategori`, `lampiran`) VALUES
(3, 'Kekerasan pada anak', 'Teman saya dianiaya orang tuanya ', '2023-09-04', 'Jalan Tamburaka ', 'Polresta Kendari', 'Kekerasan', '1.jpg'),
(4, 'Kekurangan Gizi', 'Saya mengalami penyakit kurang gizi', '2023-09-07', 'Jalan  Prof. Abdul Rauf Tarimana', 'Dinas Kesehatan(DINKES)Kota Kendari', 'Kesehatan', '2.jpg'),
(5, 'Tawuran antar pelajar', 'Tawuran antar pelajar SMK 1 Kendari dan SMA 3 Kendari', '2023-09-10', 'Smk 1 Kendari', 'Dinas Satpol PP Kendari', 'Kekerasan', '3.jpg'),
(6, 'Begal', 'Teman Saya dibegal di depan kampus baru UHO', '2023-09-12', 'Lorong Kusuma', 'Dinas Satpol PP Kendari', 'Kekerasan', '4.jpg'),
(7, 'Kecelakaan', 'Kecelakaan di jalan KM40, 3 orang luka-luka', '2023-09-15', 'Jalan KM40', 'Dinas Kesehatan(DINKES)Kota Kendari', 'Kesehatan', '5.jpg'),
(8, 'Pasien Asma', 'Mahasiswa Teknik Informatika menderita penyakit asma saat perkuliahan sedang berlangsung', '2023-09-18', 'Gedung Fakultas Teknik', 'Dinas Kesehatan(DINKES)Kota Kendari', 'Kesehatan', '6.jpg'),
(9, 'Pemukulan', 'pengeroyokan salah satu tukang ojek yang sedang  mangkal di gerbang UHO', '2023-09-21', 'Jalan HEA Mokodompit', 'Dinas Satpol PP Kendari', 'Kekerasan', '7.jpg'),
(10, 'Indikasi Pengedaran Narkoba', 'Antonio diduga melakukan transaksi narkoba bersama seorang temannya ', '2023-09-26', 'Bat-Bat', 'BNN Kota Kendari', 'Kekerasan', '8.jpg'),
(11, 'Pencurian', 'Seorang Pria Terekam CCTV gasak HP warga di Kota Kendari', '2023-09-30', 'Kecamatan Poasia', 'Polresta Kendari', 'Keresahan', '9.jpg'),
(12, 'Pencurian Motor', 'Terjadi Pencurian Motor di Lorong Mangkerey , Motor Scoopy mere honda dengan DT2567FF warna hitam merah', '2023-10-03', 'Jalan Mangkerey', 'Polresta Kendari', 'Keresahan', '10.jpg'),
(13, 'Perusakan Fasilitas Negara', 'Seorang warga dengan inisial UB(20) ditemukan merusak fasilitas kantor kelurahan Andonuhu', '2023-10-07', 'Kantor Kelurahan Andonuhu', 'Dinas Satpol PP Kendari', 'Ketertiban', '11.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `nik` varchar(20) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`nik`, `namalengkap`, `email`, `no_telepon`, `password`) VALUES
('0000', 'x', 'd@gmail.com', '1', '0000'),
('1', '1', 'elin@gnail.com', '1', '1'),
('11111', 'Annisa', 'muhfalahmubaraq@gmail.com', '08223357372', '11111'),
('12345', 'Muh. Falah Mubaraq', 'muhikbal28@sma.belajar.id', '08223357372', 'aaaaa'),
('123456', 'Muh. Falah Mubaraq', '26falahmuhammad@gmail.com', '08223357372', '111111'),
('12345678', 'Annisa', 'muhfalahmubaraq@gmail.com', '0876', '12345'),
('22222', 'Muh. Falah', 'muh@gmail.com', '08223357372', '22222'),
('7471102609030002', 'Muh. Falah Mubaraq', 'muhfalahmubaraq@gmail.com', '08223357372', '0811406700');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_instansi`
--
ALTER TABLE `tb_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_instansi`
--
ALTER TABLE `tb_instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
