-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2021 pada 04.13
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_bkk`
--

CREATE TABLE `as_bkk` (
  `id_bkk` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` text NOT NULL,
  `konten` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_bkk`
--

INSERT INTO `as_bkk` (`id_bkk`, `gambar`, `judul`, `konten`, `tanggal`) VALUES
(48, '88241919_2987725621291966_9172937288164835328_o.jpg', 'PT.PMA Membuka Lowongan Kerja Pada Thun 2020', '<p><strong>A.LATAR BELAKANG</strong></p>\r\n\r\n<p>Pendidikan adalah salah satu bentuk perwujudan kebudayaan manusia yang dinamis dan sarat perkembangan ; karena itu perubahan perkembangan pendidikan adalah hal yang memang seharusnya terjadi sejalan dengan perubahan budaya kehidupan. Perubahan dalam arti perbaikan pendidikan pada semua tingkat perlu terus menerus dilakukan sebagai antisipasi kepentingan masa depan. Pemikiran ini mengandung konsekwensi bahwa penyempurnaan perbaikan pendidikan menengah kejuruan untuk mengatasi kebutuhan dan tantangan masa depan perlu dilakukan, diselaraskan dengan kebutuhan dunia usaha / industri dan perkembangan dunia kerja.</p>\r\n\r\n<ul>\r\n	<li><strong>iqbal alqodri123</strong></li>\r\n	<li><strong>iqbal alqodri</strong></li>\r\n	<li><strong>iqbal alqodri</strong></li>\r\n</ul>\r\n\r\n<p><strong>&nbsp; &nbsp; &nbsp; Dasar Pemikiran</strong></p>\r\n\r\n<ul>\r\n	<li>O Keputusan Kepala Sekolah Menengah Kejuruan Negeri 2 Muara Enim No: / /SMK- /HM / tentang pembentukan Bursa Kerja Khusus ( BKK ) SMK NEGERI 2 MUARA ENIM.</li>\r\n	<li>O Undang-undang No. 20 tahun 2003</li>\r\n	<li>O Peraturan Pemerintah No. 29 Tahun 1990</li>\r\n	<li>O Keputusan Menteri Negera Pendayagunaan Aparatur Negara Nomor 84 / 1993.</li>\r\n	<li>O Surat Keputusan Bersama Menteri Pendidikan dan Kebudayaan dan Kepala Badan Administrasi Kepegawaian Negara Nomor 0433/P/1993 Nomor 25 Tahun 1993</li>\r\n	<li>O Surat Persetujuan Pendirian BKK Nomor : 560/378/Disnaker/6.2/2017.</li>\r\n</ul>\r\n\r\n<p>Bedasarkan konsep di atas maka untuk memenuhi tuntutan tersebut Bursa Kerja Khusus SMK NEGERI 2 MUARA ENIM berusaha semaksimal mungkin untuk menyalurkan tamatan sesuai dengan bidang keahliannya.</p>', '2020-07-31'),
(49, '129407686_3738377899560064_2565698175052612934_o (1).jpg', 'PT.PERTAMINA Membuka Lowongan Kerja Pada Thun 2020', '<p><strong>INFORMASI PT.PERTAMINA Membuka Lowongan Pekerjaan Pada Tahun 2020&nbsp;</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; Dibawah ini adalah perlengkapan untuk berkas -berkas yang di perlukan antara lain yaitu:</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; 1. Membawa Foto Kopi KK</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; 2. Membawa Ijazah Foto Kopi Yang Telah Di Legalisir</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; 3. Membawa Foto Kopi Kartu Keluarga</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; Info Lebih lanjut Silakhan Buka Link ini&nbsp;<a href=\"https://www.pertamina.com/\">https://www.pertamina.com/</a></p>\r\n\r\n<p>&nbsp;</p>', '2020-07-31'),
(50, '125336516_3687499021314619_4834552712259560841_n.jpg', 'PT.PERTAMINA Membuka Lowongan Kerja Pada Thun 2020', '<p><strong>INFORMASI PT.PERTAMINA Membuka Lowongan Pekerjaan Pada Tahun 2020&nbsp;</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; Dibawah ini adalah perlengkapan untuk berkas -berkas yang di perlukan antara lain yaitu:</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; 1. Membawa Foto Kopi KK</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; 2. Membawa Ijazah Foto Kopi Yang Telah Di Legalisir</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; 3. Membawa Foto Kopi Kartu Keluarga Tersayang hahaha</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; Info Lebih lanjut Silakhan Buka Link ini&nbsp;<a href=\"https://www.pertamina.com/\">https://www.pertamina.com/</a></p>\r\n\r\n<p>&nbsp;</p>', '2020-08-01'),
(51, '131567049_3774729635924890_1823344952086800779_n (1).jpg', 'Info buat Alumni SMK Negeri 1 Lahat Rekrumen Pegawai Kontrak BNN Kabupaten Muara Enim 2021', '<p>Info buat Alumni SMK Negeri 1 Lahat Rekrumen Pegawai Kontrak BNN Kabupaten Muara Enim 2021, jika berminat silahkan dipedomani dan dipelajari, paling lambat pendaftaran 20 Desember 2020</p>\r\n\r\n<p><a href=\"https://web.facebook.com/hashtag/humas?__eep__=6&amp;__cft__[0]=AZXEtmJUE9EnExerK423cvsTGJaIL1kZmB4pljrBjaQ7uqkKf80noD7D5K995Abp6pMdPyOFA3Tqvezd6cnWsxPsZzlTyQOpNa0e0Y9ofqg93hU4_wtySXFn5fx5mAZqynM&amp;__tn__=*NK-R\">#Humas</a> SMK Negeri 1 Lahat</p>', '2020-12-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_dasar_pemikiran`
--

CREATE TABLE `as_dasar_pemikiran` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `as_dasar_pemikiran`
--

INSERT INTO `as_dasar_pemikiran` (`id`, `judul`, `konten`) VALUES
(1, 'Dasar Pemikiran', '<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Keputusan Kepala Sekolah Menengah Kejuruan Negeri 2 Muara Enim No:&nbsp;&nbsp;&nbsp; /&nbsp;&nbsp;&nbsp; /SMK-&nbsp;&nbsp;&nbsp; /HM&nbsp;&nbsp; / tentang pembentukan Bursa Kerja Khusus&nbsp;&nbsp;&nbsp; ( BKK )&nbsp; SMK NEGERI 2 MUARA ENIM.</li>\r\n	<li>Undang-undang No. 20 tahun 2003</li>\r\n	<li>Peraturan Pemerintah No. 29 Tahun 1990</li>\r\n	<li>Keputusan Menteri Negera Pendayagunaan Aparatur Negara Nomor 84 / 1993.</li>\r\n	<li>Surat Keputusan Bersama Menteri Pendidikan dan Kebudayaan dan Kepala Badan Administrasi Kepegawaian&nbsp; Negara Nomor 0433/P/1993 Nomor 25 Tahun 1993</li>\r\n	<li>Surat Persetujuan Pendirian BKK Nomor : 560/378/Disnaker/6.2/2017.</li>\r\n</ol>\r\n\r\n<p>Bedasarkan konsep di atas maka untuk memenuhi tuntutan tersebut Bursa Kerja Khusus SMK NEGERI 2 MUARA ENIM berusaha semaksimal mungkin untuk menyalurkan tamatan sesuai dengan bidang keahliannya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_institusi_pasangan`
--

CREATE TABLE `as_institusi_pasangan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_institusi_pasangan`
--

INSERT INTO `as_institusi_pasangan` (`id`, `judul`, `konten`) VALUES
(1, 'Institusi Pasangan', '<p>Dalam upaya untuk memasarkan tamatannya,  BKK SMK Negeri 1 lahat berkerjasama dengan Industry  yang menjadi mitra kerja, yaitu:</p>\r\n<ol>\r\n<li>Perusahaan di Dalam Negeri</li>\r\n<li>Perusahaan di Luar Negeri</li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_kegiatan`
--

CREATE TABLE `as_kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_kegiatan`
--

INSERT INTO `as_kegiatan` (`id`, `judul`, `konten`) VALUES
(1, 'KEGIATAN', '<p><strong> </strong>Kegiatan Bursa kerja Khusus adalah pemasaran tamatan dan penelusuran tamatan. Adapun program kerja dari BKK dan kebutuhan anggaran terlampir.</p>\r\n        <p>Beberapa kegiatan bursa kerja khusus yang telah dilaksanakan seperti menyalurkan tamatan ke berbagai industri yang relevan, seperti <strong>Hotel, Restaurant, Garment, Butik, bengkel dan industri</strong> lainnya baik bertaraf nasional maupun internasional, yang memiliki keterkaitan dengan Program Studi Keahlian yang ada di SMK N 1 Lahat saat ini.</p>\r\n        <p>Selain menyalurkan tamatanya, Bursa Kerja Khusus SMK Negeri 1 Lahat juga turut membantu dan memberikan kesempatan tamatan sekolah lain yang memiliki keinginan bekerja sesuai dengan keterampilan yang dimiliki para calon pelamar.</p>\r\n        <p>Selain menyalurkan tamatan, BKK SMK N 1 LAHAT juga melakukan kegiatan penelusuran tamatan, salah satu diantaranya adalah memfasilitasi pembentukan Ikatan Para Alumni nya untuk menjadi wadah berkomunikasi para alumni dari angkatan pertama hingga terakhir. Adapun ikatan alumni yang sudah terbentuk ini bernama Alumni SMK N 1 Lahat.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_kontak`
--

CREATE TABLE `as_kontak` (
  `id` int(11) NOT NULL,
  `Hp` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_kontak`
--

INSERT INTO `as_kontak` (`id`, `Hp`, `email`) VALUES
(1, '(0731) 323023', 'smkn1lahat@yahoo.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_latar_belakang`
--

CREATE TABLE `as_latar_belakang` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `as_latar_belakang`
--

INSERT INTO `as_latar_belakang` (`id`, `judul`, `konten`) VALUES
(1, 'BURSA KERJA KHUSUS (BKK)', '<p>&nbsp;</p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Latar Belakang</strong><strong>&nbsp;</strong></li>\r\n</ol>\r\n\r\n<p>Pendidikan adalah salah satu bentuk perwujudan kebudayaan manusia yang dinamis dan sarat perkembangan ; karena itu perubahan perkembangan pendidikan adalah hal yang memang seharusnya terjadi&nbsp; sejalan dengan perubahan budaya kehidupan. Perubahan dalam arti perbaikan pendidikan pada semua tingkat perlu terus menerus dilakukan sebagai antisipasi kepentingan masa depan. Pemikiran ini mengandung&nbsp; konsekwensi bahwa penyempurnaan perbaikan pendidikan menengah kejuruan untuk mengatasi kebutuhan dan tantangan masa depan perlu dilakukan, diselaraskan dengan kebutuhan dunia usaha / industri dan perkembangan dunia kerja.</p>\r\n\r\n<p>Mutu produk pendidikan sangat erat kaitannya dengan proses pelaksanaan pembelajaran yang menyesuaikan dengan kompetensi yang dituntut oleh dunia kerja, standar kompetensi nasional, serta kebutuhan pembekalan kemampuan untuk beradaptasi dengan perkembangan ilmu pengetahuan dan teknologi.</p>\r\n\r\n<p>Bursa Kerja Khusus ( BKK ) SMK NEGERI 1&nbsp;LAHAT&nbsp;merupakan salah satu wadah pemasaran tamatan sesuai dengan Program Studi Keahlian yang terdapat di SMK NEGERI 2 MUARA ENIM dan memiliki tujuan sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Berkontribusi dalam pertumbuhan ekonomi dan nasional</li>\r\n	<li>Meningkatkan mutu manajemen smk</li>\r\n	<li>Feedback proses pembelajaran pendidikan SMK</li>\r\n	<li>Pencitraan SMK/ Kepala Sekolah</li>\r\n	<li>Data Objektif</li>\r\n	<li>Penyusunan program pembelajaran pendidikan SMK berbasis Kompetensi ( sampai dengan modul-modul pembelajarannya ) lebih tepat sasaran dan memenuhi kebutuhan dunia kerja.</li>\r\n	<li>Sebagai&nbsp; pusat informasi ketenagakerjaan dalam memenuhi kebutuhan pasar kerja.</li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_perekrutan`
--

CREATE TABLE `as_perekrutan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_perekrutan`
--

INSERT INTO `as_perekrutan` (`id`, `judul`, `konten`) VALUES
(1, 'KEGIATAN', '<p style=\"text-align: center;\"><strong>Prosedur Perekrutan Umum</strong></p>\r\n<p>Langkah yang ditempuh dalam memasarkan tamatan pada dunia industry dan dunia usaha sebagai berikut:</p>\r\n<ul>\r\n<li>Mengirimkan surat pemasaran tamatan kepada  DU/DI yang menjadi mitra dari setiap program studi keahlian.</li>\r\n<li>Mendata DU/DI yang membutuhkan tenaga kerja.</li>\r\n<li>Mempersiapkan para tamatan sesuai dengan criteria yang dipersyaratkan pihak DU/DI.</li>\r\n<li>Menghimpun administrasi untuk proses pengiriman surat lamaran, jika lamaran tidak harus dibawa langsung.</li>\r\n<li>Memfasilitasi untuk proses penyeleksian calon karyawan, apabila test dilakukan di sekolah.</li>\r\n<li>Bekerjasama dengan DU/DI memberikan informasi tentang calon tenaga kerja yang diterima.</li>\r\n<li>Mengantar calon tenaga kerja ke perusahaan penerima (apabila dibutuhkan).</li>\r\n<li>Alumni yang sudah bekerja diwajibkan membayar iuran ke BKK sebesar Rp. 300.000,- dari gaji yang diterimanya.</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_profil`
--

CREATE TABLE `as_profil` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_profil`
--

INSERT INTO `as_profil` (`id`, `judul`, `konten`) VALUES
(1, 'BURSA KERJA KHUSUS (BKK) SMK NEGERI 1 LAHAT', '<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Latar Belakang</strong><strong> </strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pendidikan adalah salah satu bentuk perwujudan kebudayaan manusia yang dinamis dan sarat perkembangan ; karena itu perubahan perkembangan pendidikan adalah hal yang memang seharusnya terjadi sejalan dengan perubahan budaya kehidupan. Perubahan dalam arti perbaikan pendidikan pada semua tingkat perlu terus menerus dilakukan sebagai antisipasi kepentingan masa depan. Pemikiran ini mengandung konsekwensi bahwa penyempurnaan perbaikan pendidikan menengah kejuruan untuk mengatasi kebutuhan dan tantangan masa depan perlu dilakukan, diselaraskan dengan kebutuhan dunia usaha / industri dan perkembangan dunia kerja.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mutu produk pendidikan sangat erat kaitannya dengan proses pelaksanaan pembelajaran yang menyesuaikan dengan kompetensi yang dituntut oleh dunia kerja, standar kompetensi nasional, serta kebutuhan pembekalan kemampuan untuk beradaptasi dengan perkembangan ilmu pengetahuan dan teknologi.</p>\r\n\r\n<p>Bursa Kerja Khusus ( BKK ) SMK NEGERI 1 LAHAT merupakan salah satu wadah pemasaran tamatan sesuai dengan Program Studi Keahlian yang terdapat di SMK NEGERI 1 LAHAT dan memiliki tujuan sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Berkontribusi dalam pertumbuhan ekonomi dan nasional</p>\r\n	</li>\r\n	<li>\r\n	<p>Meningkatkan mutu manajemen smk</p>\r\n	</li>\r\n	<li>\r\n	<p>Feedback proses pembelajaran pendidikan SMK</p>\r\n	</li>\r\n	<li>\r\n	<p>Pencitraan SMK/ Kepala Sekolah</p>\r\n	</li>\r\n	<li>\r\n	<p>Data Objektif</p>\r\n	</li>\r\n	<li>\r\n	<p>Penyusunan program pembelajaran pendidikan SMK berbasis Kompetensi ( sampai dengan modul-modul pembelajarannya ) lebih tepat sasaran dan memenuhi kebutuhan dunia kerja.</p>\r\n	</li>\r\n	<li>\r\n	<p>Sebagai pusat informasi ketenagakerjaan dalam memenuhi kebutuhan pasar kerja.</p>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li><strong>Dasar Pemikiran</strong></li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>Keputusan Kepala Sekolah Menengah Kejuruan Negeri 1 Lahat No: / /SMK- /HM / tentang pembentukan Bursa Kerja Khusus ( BKK ) SMK NEGERI 1 Lahat.</li>\r\n	<li>Undang-undang No. 20 tahun 2003</li>\r\n	<li>Peraturan Pemerintah No. 29 Tahun 1990</li>\r\n	<li>Keputusan Menteri Negera Pendayagunaan Aparatur Negara Nomor 84 / 1993.</li>\r\n	<li>Surat Keputusan Bersama Menteri Pendidikan dan Kebudayaan dan Kepala Badan Administrasi Kepegawaian Negara Nomor 0433/P/1993 Nomor 25 Tahun 1993</li>\r\n	<li>Surat Persetujuan Pendirian BKK Nomor : 560/378/Disnaker/6.2/2017.</li>\r\n</ol>\r\n\r\n<p>Bedasarkan konsep di atas maka untuk memenuhi tuntutan tersebut Bursa Kerja Khusus SMK NEGERI 1 Lahat berusaha semaksimal mungkin untuk menyalurkan tamatan sesuai dengan bidang keahliannya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Visi, Misi dan Motto</strong><strong> </strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Visi</strong></p>\r\n\r\n<p>Menjadi pusat informasi ketenagakerjaan dan merupakan wadah dalam memasarkan tamatan ke dunia usaha dan dunia industri baik di dalam maupun di luar negeri.</p>\r\n\r\n<p><strong>Misi</strong></p>\r\n\r\n<ol>\r\n	<li>Meningkatkan keimanan dan ketaqwaan terhadap Tuhan Yang Maha Esa</li>\r\n	<li>Memberikan pelayanan terhadap tamatan yang belum bekerja</li>\r\n	<li>Menjalin kerjasama dengan industri yang bertaraf nasional dan internasional</li>\r\n</ol>\r\n\r\n<p><strong>Motto</strong></p>\r\n\r\n<p>&rdquo; WILLING TO BE SUCCESS TO THE GLOBAL WORLD &ldquo;</p>'),
(3, 'test2asdsadsad', '<p>Konten2asdasdasdasd</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_sekema_prekrutan`
--

CREATE TABLE `as_sekema_prekrutan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `as_sekema_prekrutan`
--

INSERT INTO `as_sekema_prekrutan` (`id`, `gambar`) VALUES
(1, 'Perekrutan-CIFU.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_visi_misi_moto`
--

CREATE TABLE `as_visi_misi_moto` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `as_visi_misi_moto`
--

INSERT INTO `as_visi_misi_moto` (`id`, `judul`, `konten`) VALUES
(1, 'visi misi moto', '<p><strong>Visi</strong></p>\r\n\r\n<p>Menjadi pusat informasi ketenagakerjaan dan merupakan wadah dalam memasarkan tamatan ke dunia usaha dan dunia industri baik di dalam maupun di luar negeri.</p>\r\n\r\n<p><strong>Misi</strong></p>\r\n\r\n<ol>\r\n	<li>Meningkatkan keimanan dan ketaqwaan terhadap Tuhan Yang Maha Esa</li>\r\n	<li>Memberikan pelayanan terhadap tamatan yang belum bekerja</li>\r\n	<li>Menjalin kerjasama dengan industri yang bertaraf nasional dan internasional</li>\r\n</ol>\r\n\r\n<p><strong>Motto</strong></p>\r\n\r\n<p>&rdquo; WILLING TO BE SUCCESS TO THE GLOBAL WORLD &ldquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$FVbNaQOyrreIJr/NqSK1c.aD8V8vpkHEkghg6GJLZfgnMPX5TdOO2', NULL, '2020-07-28 00:38:54', '2020-07-28 00:38:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `as_bkk`
--
ALTER TABLE `as_bkk`
  ADD PRIMARY KEY (`id_bkk`);

--
-- Indeks untuk tabel `as_dasar_pemikiran`
--
ALTER TABLE `as_dasar_pemikiran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `as_institusi_pasangan`
--
ALTER TABLE `as_institusi_pasangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `as_kegiatan`
--
ALTER TABLE `as_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `as_kontak`
--
ALTER TABLE `as_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `as_latar_belakang`
--
ALTER TABLE `as_latar_belakang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `as_perekrutan`
--
ALTER TABLE `as_perekrutan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `as_profil`
--
ALTER TABLE `as_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `as_sekema_prekrutan`
--
ALTER TABLE `as_sekema_prekrutan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `as_visi_misi_moto`
--
ALTER TABLE `as_visi_misi_moto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `as_bkk`
--
ALTER TABLE `as_bkk`
  MODIFY `id_bkk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `as_dasar_pemikiran`
--
ALTER TABLE `as_dasar_pemikiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `as_institusi_pasangan`
--
ALTER TABLE `as_institusi_pasangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `as_kegiatan`
--
ALTER TABLE `as_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `as_kontak`
--
ALTER TABLE `as_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `as_latar_belakang`
--
ALTER TABLE `as_latar_belakang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `as_perekrutan`
--
ALTER TABLE `as_perekrutan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `as_profil`
--
ALTER TABLE `as_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `as_sekema_prekrutan`
--
ALTER TABLE `as_sekema_prekrutan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `as_visi_misi_moto`
--
ALTER TABLE `as_visi_misi_moto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
