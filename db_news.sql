-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 01:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `level` enum('admin','author') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `email`, `password`, `username`, `level`) VALUES
(1, 'syaifullahalaziz@gmail.com', 'e65ac9372a656094f1fd6f409f28183624883fc5', 'Aziz', 'admin'),
(2, 'budi@gmail.com', '83161a62f22277c65a6cdb7ebc314f218c376c63', 'budi', 'author'),
(3, 'aziz@gmail.com', 'e65ac9372a656094f1fd6f409f28183624883fc5', 'aziz', 'admin'),
(4, 'aziz@gmail.com', 'e65ac9372a656094f1fd6f409f28183624883fc5', 'aziz', 'admin'),
(5, 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `gambar_anggota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `nama_anggota`, `jabatan`, `gambar_anggota`) VALUES
(5, 'Ahmad Fuadi', 'Penulis', 'ahmad_fuadi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_kategori`, `judul_berita`, `slug`, `tanggal_berita`, `isi_berita`, `gambar_berita`) VALUES
(2, 3, 'Timnas Indonesia', 'Timnas-Indonesia', '2022-01-25', '<p><strong>SUPERBALL.ID - Pelatih&nbsp;<a href=\"https://superball.bolasport.com/tag/timnas-u-23-filipina\" target=\"_blank\">Timnas U-23 Filipina</a>, Norman Salo Fegidero, mulai menebar ancaman menjelang laga melawan&nbsp;<a href=\"https://superball.bolasport.com/tag/timnas-u-23-indonesia\">Timnas U-23 Indonesia</a>&nbsp;di&nbsp;<a href=\"https://superball.bolasport.com/tag/sea-games-2021\">SEA Games 2021</a>.</strong></p>\r\n\r\n<p>Setelah mampu menahan imbang Timnas U-23 Vietnam, Filipina harus menelan kekalahan dari Timnas U-23 Myanmar.</p>\r\n\r\n<p>Bertanding di Stadion Viet Tri, Phu Tho, Vietnam, Selasa (10/5/2022) sore WIB, Filipina takluk dengan skor 2-3.</p>\r\n\r\n<p>Dengan&nbsp;hasil&nbsp;tersebut, Myanmar untuk sementara memuncaki klasemen Grup A dengan koleksi enam poin dari dua laga.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sedangkan Filipina berada di posisi kedua disusul Vietnam di urutan ketiga dengan torehan 4 poin.</p>\r\n\r\n<p>Adapun&nbsp;<a href=\"https://superball.bolasport.com/tag/timnas-u-23-indonesia\">Timnas U-23 Indonesia</a>&nbsp;masih berada di peringkat keempat dengan tiga poin dari dua laga usai mengalahkan Timor Leste.</p>\r\n\r\n<p>Timnas U-23 Timor Leste sendiri berada di posisi juru kunci dengan tanpa poin dari tiga pertandingan.</p>\r\n\r\n<p>Meski berada di peringkat kedua, Filipina kini hanya menyisakan satu pertandingan lagi melawan&nbsp;<a href=\"https://superball.bolasport.com/tag/timnas-u-23-indonesia\">Timnas U-23 Indonesia</a>.</p>\r\n', 'timnas.jpeg'),
(3, 5, '5 Mata Uang Terendah di Dunia, Rupiah Indonesia Salah Satunya', '5-Mata-Uang-Terendah-di-Dunia,-Rupiah-Indonesia-Salah-Satunya', '2022-01-26', '<p><strong>Suara.com -&nbsp;</strong>Ada beberapa negara yang selalu menjadi pusat perhatian karena jumlah dan kepentingan mata uangnya. Ada negara-negara tertentu dengan nilai&nbsp;<a href=\"https://www.suara.com/tag/mata-uang-terendah\">mata uang terendah</a>&nbsp;di dunia. Negara mana saja? Salah satunya adalah Indonesia. Sejak pandemi Covid-19 bahkan&nbsp;<a href=\"https://www.suara.com/tag/nilai-tukar\">nilai tukar</a>&nbsp;rupiah terhadap dolar Amerika Serikat semakin melemah. Simak ulasan berikut ini untuk mengetahui mata uang terendah di dunia.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Diketahui, nilai mata uang adalah indikator terbesar perekonomian negara, kondisi ekonominya, investasi asingnya dan nilai tukarnya. Sebagian besar mata uang diukur berdasarkan kekuatannya sambil membandingkannya dengan dolar AS, sementara beberapa membandingkannya dengan sterling. Melansir dari berbagai sumber, berikut ini daftar negara dengan nilai mata uang terendah di dunia yang menarik untuk diketahui.</p>\r\n\r\n<p><strong>1. Rial Iran</strong></p>\r\n\r\n<p>Rial Iran adalah mata uang dunia yang paling murah. Satu dolar AS sama dengan 24.875 riyal Iran. Nilai yang lebih rendah dari riyal Iran adalah karena hubungannya dengan AS dan sanksi ekonomi global yang telah dijatuhkan padanya bersama dengan transaksi yang dibatasi.</p>\r\n\r\n<p><strong>2. Dong Vietnam</strong></p>\r\n\r\n<p>Vietnam adalah negara yang memiliki mata uang termurah ke-2 di dunia. Nama mata uang Vietnam adalah Vietnam Dong. Dong &nbsp;pertama kali diperkenalkan pada tahun 1946 menggantikan piaster Indochina Prancis. Uang kertas pertama dari mata uang tersebut dikeluarkan pada tahun 1976, tetapi nilai dong paling rendah sejak hari pertama kali diterbitkan.</p>\r\n\r\n<p><strong>3. Sao Tome dan Principe</strong></p>\r\n\r\n<p>Sao Tome dan Principe merupakan pulau kecil yang sangat terkenal yang memiliki mata uang terendah ke-3 di dunia. Nilai mata uangnya 17.917 std sama dengan satu dolar. Ini adalah dua pulau dengan luas 1.001 km. Pada tahun 1975 memperoleh kebebasan dari Portugal. Uang kertas negara diperkenalkan di tahun kemerdekaan.</p>\r\n\r\n<p><strong>4. Rupiah Indonesia</strong></p>\r\n\r\n<p>Rupiah Indonesia merupakan mata uang terendah keempat di dunia. Rupiah memiliki uang logam mulai dari 50 hingga 1.000 dan uang kertas terdiri dari 1.000 hingga 100.000. Beberapa waktu lalu, pemerintah telah membatalkan uang kertas Rp1.000 dan telah mengeluarkan uang kertas Rp 2.000.</p>\r\n\r\n<p><strong>5. Rubel Belarusia</strong></p>\r\n\r\n<p>Rubel Belarusia adalah mata uang terendah kelima di dunia. Harganya 9.898 BYR dalam persaingan dengan satu dolar. Pada tahun 1992 negara pertama kali mengeluarkan uang kertas dan koin utama diperkenalkan pada tahun 1996. Uang kertas Belarus berkisar dari 500 hingga 5.000.000.</p>\r\n\r\n<p>&gt;</p>\r\n', '95124-ilustrasi-mata-uang.jpg'),
(8, 4, 'Rusia Vs Ukraina ', 'Rusia-Vs-Ukraina', '2022-05-11', '<p>Jakarta - Rusia dan Ukraina sedang perang. Pakar hubungan internasional menyatakan dampak perang di Eropa Timur bisa terasa sampai Indonesia.<br />\r\n&quot;Secara fisik, dampaknya mungkin tidak terasa, tapi secara ekonomi ini bisa mengganggu perdagangan internasional, terutama sektor energi dan minyak,&quot; kata pakar hubungan internasional dari Universitas Gadjah Mada (UGM), Riza Noer Arfani, kepada detikcom, Kamis (24/2/2022).<br />\r\n<br />\r\nBaca juga:<br />\r\nPemimpin Dunia Ramai-ramai Kutuk Serangan Rusia ke Ukraina<br />\r\nRiza, yang merupakan dosen HI Fisipol UGM, punya bidang keahlian dalam bidang ekonomi-politik internasional. Dia melihat sektor ekonomi sebagai sektor yang paling mungkin kena dampaknya. Apalagi dunia (termasuk Indonesia) baru saja ancang-ancang mau lepas dari keterpurukan ekonomi akibat pandemi COVID-19.<br />\r\n<br />\r\n<br />\r\n&quot;Perang ini mengancam pemulihan ekonomi internasional, maka Indonesia harus berbicara,&quot; ujar Riza.<br />\r\n<br />\r\nBaca juga:<br />\r\nPerang! Ini Peta Invasi Rusia ke Ukraina<br />\r\nForum G20 dapat digunakan Indonesia untuk mengakhiri perang Rusia vs Ukraina. Presidensi G20 Indonesia masih berlangsung dan harus dimanfaatkan semaksimal mungkin.<br />\r\n<br />\r\n<br />\r\nSelain G20, Indonesia bisa mengusahakan perdamaian lewat forum Perserikatan Bangsa-Bangsa (PBB) dan ASEAN. Indonesia punya tujuan menciptakan perdamaian dunia sebagaimana amanat Pembukaan UUD Negara Republik Indonesia 1945. Selain langkah konvensional, langkah nonkonvensional juga perlu ditempuh.<br />\r\n<br />\r\n&quot;Ini perlu kerja di luar kerja diplomatik, mungkin kerja intelijen melalui jalur-jalur yang tidak konvensional. Ini perlu dipikirkan Indonesia,&quot; kata Riza.<br />\r\n<br />\r\nNATO dan AS dinilai bikin parah<br />\r\nRiza melihat kehadiran Pakta Pertahanan Atlantik Utara (NATO) dan Amerika Serikat (AS) dalam konflik Ukraina versus Rusia justru malah menambah kacau perang ini. Saat ini kedua belah pihak perlu menahan diri.<br />\r\n<br />\r\n&quot;Kehadiran NATO dan AS mendukung Ukraina hanya semacam memperparah kondisi konfliknya,&quot; kata Riza.<br />\r\n<br />\r\nBaca juga:<br />\r\nMelihat Akar Konflik Rusia vs Ukraina yang Kini Terlibat Perang<br />\r\nPerang ini adalah permukaan paling atas dari masalah-masalah Rusia-Ukraina yang menumpuk tidak terselesaikan. Dialog konstruktif gagal dirancang. Perang sudah terjadi. Perlu pihak yang netral untuk menengahi dan menghentikan perang.<br />\r\n<br />\r\n&quot;Yang diperlukan adalah pihak di luar AS dan sekutunya. Apakah China, India, atau Indonesia. Indonesia, menurut saya, bisa karena ada di Presidensi G20,&quot; kata Riza.<br />\r\n<br />\r\n(dnu/fjp)</p>\r\n', '95124-ilustrasi-mata-uang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `judul_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `judul_kategori`) VALUES
(2, 'Hiburan'),
(3, 'Olahraga'),
(4, 'Politik'),
(5, 'Bisnis'),
(6, 'Kuliner'),
(7, 'Populer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keunggulan`
--

CREATE TABLE `tb_keunggulan` (
  `id_keunggulan` int(11) NOT NULL,
  `judul_keunggulan` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `isi_keunggulan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keunggulan`
--

INSERT INTO `tb_keunggulan` (`id_keunggulan`, `judul_keunggulan`, `icon`, `isi_keunggulan`) VALUES
(2, 'Cepat', 'fas fa-angle-double-right', 'Cara kerja penyebaran informasi sungguh-sungguh cepat'),
(3, 'Fleksibel', 'fa fa-home', 'Informasi atau data lama bisa dibuka kembali dengan gampang sewaktu-waktu'),
(4, 'Informasi Luas', 'fa fa-newspaper', 'Bentuk konten yang disajikan sangat bermacam-macam, yaitu teks, foto, audio, video'),
(5, 'Mudah Diakses', 'fas fa-wifi', 'Bisa diakses dengan gampang dari mana saja dan kapan saja, serta penggunaannya praktis dan fleksibel'),
(6, 'Komunikasi Mudah', 'fa fa-phone', 'Para pengguna media online bisa saling berinteraksi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `judul_profil` varchar(100) NOT NULL,
  `isi_profil` text NOT NULL,
  `gambar_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `judul_profil`, `isi_profil`, `gambar_profil`) VALUES
(7, 'Sejarah Institut Teknologi Padang', 'isi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_keunggulan`
--
ALTER TABLE `tb_keunggulan`
  ADD PRIMARY KEY (`id_keunggulan`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_keunggulan`
--
ALTER TABLE `tb_keunggulan`
  MODIFY `id_keunggulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
