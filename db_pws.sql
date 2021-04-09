-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Apr 2021 pada 11.47
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pws`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kab_smg`
--

CREATE TABLE `kab_smg` (
  `id` int(255) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maps` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tiket` varchar(10) NOT NULL,
  `foto_utama` varchar(50) NOT NULL,
  `foto1` varchar(50) NOT NULL,
  `foto2` varchar(50) NOT NULL,
  `foto3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kab_smg`
--

INSERT INTO `kab_smg` (`id`, `nama_tempat`, `deskripsi`, `alamat`, `maps`, `telp`, `jam`, `tiket`, `foto_utama`, `foto1`, `foto2`, `foto3`) VALUES
(1, 'Ayana Gedongsongo', '<p>Tempat wisata yang baru dibuka pada tanggal 11 juni 2018 ini bernama Ayana Gedongsongo. Hadir dengan konsep wisata kekinian dan instagramable, Ayana menyajikan banyak spot foto yang unik. Jika sedang berlibur ke Bandungan jangan sampai terlewat, apalagi jika berkunjung di candi gedongsongo.</p>\r\n<p>Lokasi Ayana berada di Krajan, Banyukuning, Bandungan, Kab Semarang, Jawa tengah. Tempat wisata ini masih berada di dalam kawasan komplek Candi Gedongsongo, berada di dekat candi 1 atau sekitar 150 meter dari loket.</p>\r\n', 'Krajan, Banyukuning, Bandungan, Semarang', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.2861555006702!2d110.33948141432006!3d-7.208159772766346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7087f13da7f053%3A0xc13f5453211dbff1!2sAyanaz+Gedongsongo!5e0!3m2!1sid!2sid!4v1558968257225!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen', '0813-9039-0768', '08.00 - 17.00 WIB', '2000', 'img1.jpg', 'a1.jpg', 'b1.jpg', 'c1.jpg'),
(2, 'Taman Bunga Celosia', '<p>spot foto dengan obyek bunga bunga bermekaran memang lagi ngetrend di kalangan traveller. Bagi warga Jogja, taman bunga amarilis menjadi sasaran empuk untuk berselfie ria. Sementara itu bagi warga semarang kini bisa mendapatkan spot serupa yakni di Lokasi Taman Bunga Celosia. Namun jenis bunga yang ditanam tentunya berbeda yakni bunga celosia dan bunga harbras. Colorfull,itulah kesan pertama ketika kamu memasuki wisata terbaru di semarang ini. Buat yang demen sama yang namanya bunga bungan, pasti betah banget deh. Selain dijadikan spot foto, kamu bisa membeli bunga yang sudah dikemas dalam polybag.Ada berbagai macam jenis bunga diantaranya bunga lavender, diantus, viia besar, hebras dll.</p>\r\n<p>Jalan setapak yang dihiasi dengan pensi raksasa warna warni sudah menyambut kedatanganmu dari area parkir. Lokasinya cukup instagenic, jadi bisa sekalian buat berselfie ria. Diujung jalan tersebut ada sebuah loket, kamu bisa membeli tiket masuk taman bunga celosia disana. Melewati loket, kamu akan disuguhi dengan hamparan bunga hebras merah dengan beberapa kincir angin di tengah tengahnya. Spot inilah yang kerap dijadikan lokasi hunfot para pengunjung.</p>\r\n<p>Seperti yang saya katakan tadi, di lokasi taman bunga celosia bandungan kita bisa membeli aneka macam bunga. Nah tempatnya tak jauh dari kincir kincir angin tersebut. Bunga bunga yang sudah dibungkus dengan polybag ini juga sudah diberi nama, jadi gak perlu bingung mau beli yang mana. Menjelajah lebih jauh lagi kamu akan mendapati spot landmark beberapa negara. Ada patung merlion (singapura), ada Menara effiel (perancis) dan kincir angin (Belanda). Saat ini memang baru ada tiga landmark, namun gak menutup kemungkinan bakal ditambah lagi.</p>\r\n', 'Beroken, Banyukuning, Bandungan, Semarang', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.141360605253!2d110.34452721432025!3d-7.224712572949354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7080b42baaaab1%3A0x31381d06554ff4f5!2sTaman+Bunga+Celosia!5e0!3m2!1sid!2sid!4v1558968375518!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen', '0822-1308-4893', '08.00 - 17.00 WIB', '1500', 'img2.jpg', 'a2.jpg', 'b2.jpg', 'c2.jpg'),
(3, 'Agrowisata Kopeng', '<p>Agrowisata Kopeng Gunungsari berada di Dusun Dukuh, Desa Kopeng, Kecamatan Getasan, Kabupaten Semarang. Wisata ini belum lama dibangun dan baru berjalan sekitar beberapa bulan. Meski begitu, tempat ini sudah banyak menarik Wisatawan mengingat lokasinya yang berdekatan dengan Wisata lain di Kecamatan Getasan.</p>\r\n<p>Beberapa Wisata yang berdekatan dari Agrowisata Kopeng yakni Ekowisata Kopeng, Kopeng Treetop, Air Terjun Umbul Songo dan Cuntel. Nah jadi kebayang kan kalau berkunjung ke tempat ini pasti bisa berkunjung ke tempat lainnya.</p>\r\n<p>Spot Foto pertama adalah Gardu Pandang kecil yang berada disamping kaban taman. Spit foto ini dibuat dari kombinasi kayu dan bambu yang ditata sedemikian rupa dan dibalut dengan pelitur yang membuatnya semakin tampak kinclong. Spot foto ini memiliki latar belakang hutan pinus memanjang yang berada agak jauh serta pemandangan Gardu Pandang utama di sebelahnya.</p>\r\n<p>Gardu Pandang utama dibuat bertingkat dengan kapasitas maksimal 28 orang. Dibagian paling bawah terdapat jalan masuk memanjang dengan jalan keluar menuju warung disebelah Gardu Pandang Utama. Di bagian tengahnya terdapat beberapa kursi yang ditata melingkar. Gardu pandang utama ini memiliki tiga tingkat, yang dari tingkat paling atas bisa kita lihat seluruh area wisata. Disisi timur terlihat Gunung Gajah, Telomoyo dan Andong yang berjajar.</p>\r\n', 'Dusun Dukuh, Kopeng, Getasan, Semarang', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.515790121961!2d110.41798141432217!3d-7.408021475005582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a7c737edd5d79%3A0xf6dd6f5ed77dd5a2!2sAgrowisata+Kopeng+%22Gunungsari%22!5e0!3m2!1sid!2sid!4v1558968490868!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen', '0858-0260-6448', '07.00 – 20.00 WIB', '2500', 'img3.jpg', 'a3.jpg', 'b3.jpg', 'c3.jpg'),
(4, 'Desa Wisata Sepakung', 'Desa Wisata Sepakung menawarkan alternatif lain untuk Anda yang ingin menikmati udara segar dari kawasan Bukit Cemoro Sewu. Terletak di Kecamatan Banyubiru, Anda bisa melihat indahnya Gunung Merbabu dan Gunung Ungaran. Selain memanjakan mata, berbagai fasilitas yang dapat dinikmati di sini antara lain gardu pandang, ayunan, hingga sepeda layang. Untuk mencapai lokasi wisata ini, tentu dibutuhkan kondisi yang fit dan bugar. Sebab, Anda akan melewati seitar 98 anak tangga dan berjalan kaki sejauh 200 meter dengan kemiringan 40 derajat. Tentunya usaha kamu akan terbayar setelah disuguhkan pemandangan apik dari Bukit Cemoro Sewu di Desa Wisata Sepakung.', 'Sepakung, Banyubiru, Semarang, Jawa Tengah 50664', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.119616330637!2d110.40532951432152!3d-7.340461974241425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a7f20d9c606a5%3A0x5a01d910a50eadc5!2sDesa%20Wisata%20Sepakung!5e0!3m2!1sid!2sid!4v1617933140871!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"', '+6285742777778', '08.00–18.00 WIB', '3000', 'img4.jpg', 'a4.jpg', 'b4.jpg', 'c4.jpg'),
(5, 'Pondok Wisata Umbul Sidomukti', 'Jauh dari hiruk pikuk jantung kota, Anda dan keluarga bisa menikmati beragam fasilitas menyenangkan di Umbul Sidomukti. Sejuknya udara dan hawa segar dari perbukitan di kawasan yang berada pada ketinggian kurang lebih 1.200 mdpl di bagian selatan Gunung Ungaran ini membuat siapapun betah berlama-lama. Di sini, terdapat tiga kolam pemandian yang letaknya berada di antara jurang. Menikmati kesejukan alam sambil berendam di kolam air bebatuan tidak hanya menyegarkan pandangan tetapi juga menyejukkan jiwa. Area lembah hijau membentang dapat digunakan sebagai lokasi permainan outdoor atau outbond bersama rekan sejawat. Yang menarik, di sini Anda bisa menikmati permainan flying fox yang cukup menantang menyeberangi lembah! Ada juga permainan Marine Bridge atau jembatan jaring, Rapeling, hingga ATV.', 'Umbul Sidomukti, Manggung, Jimbaran, Bandungan, Semarang, Central Java 50661', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.4046539074857!2d110.3711696143199!3d-7.194584972616623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70871c6fdc3481%3A0xdb78bfcef26cb6b6!2sUmbul%20Sidomukti!5e0!3m2!1sid!2sid!4v1617933494832!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"', '+622987137010', '09.00–18.00 WIB', '10000', 'img5.jpg', 'a5.jpg', 'b5.jpg', 'c5.jpg'),
(6, 'Candi Gedong Songo', 'Berlokasi di lereng Gunung Ungaran menjadikan Candi Gedong Songo sebagai salah satu candi tertinggi di Indonesia. Dan Anda pasti bisa menebak kalau suasana pagi di candi ini sangat istimewa. Memang tidak ada yang mengalahkan indahnya matahari pagi yang keluar dari balik gunung berselimut awan. Perpaduan bangunan candi, hutan, dan pegunungan yang diterpa mentari pagi menjadi kombinasi latar foto yang luar biasa.', 'Kelurahan Candi, Kecamatan Bandungan, Kabupaten Semarang, Jawa Tengah, 50614', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.2711112732263!2d110.33992321432011!3d-7.209881372785389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70819b21602297%3A0x49df7b7994e6e70c!2sCandi%20Gedong%20Songo!5e0!3m2!1sid!2sid!4v1617941430314!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"', '-', '06.30-18.00 WIB', '10000', 'img6.jpg', 'a6.jpg', 'b6.jpg', 'c6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(255) NOT NULL,
  `pesan` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `pesan`, `nama`, `email`, `status`) VALUES
(1, 'masing kurang maksimal', 'agus', 'agus@gmail.com', 'v'),
(3, 'Tempat wisata yang ditampilkan masih kurang', 'toni', 'toni@gmail.com', NULL),
(4, 'Tingkatkan', 'dani', 'dani@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota_smg`
--

CREATE TABLE `kota_smg` (
  `id` int(255) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maps` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tiket` varchar(10) NOT NULL,
  `foto_utama` varchar(50) NOT NULL,
  `foto1` varchar(50) NOT NULL,
  `foto2` varchar(50) NOT NULL,
  `foto3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota_smg`
--

INSERT INTO `kota_smg` (`id`, `nama_tempat`, `deskripsi`, `alamat`, `maps`, `telp`, `jam`, `tiket`, `foto_utama`, `foto1`, `foto2`, `foto3`) VALUES
(1, 'Lawang Sewu', '<p>Lawang Sewu merupakan sebuah bangunan kuno peninggalan jaman belanda yang dibangun pada 1904. Semula gedung ini untuk kantor pusat perusahaan kereta api (trem) penjajah Belanda atau Nederlandsch Indishe Spoorweg Naatschappij (NIS). Gedung tiga lantai bergaya art deco (1850-1940) ini karya arsitek Belanda ternama, Prof Jacob F Klinkhamer dan BJ Queendag. Lawang Sewu terletak di sisi timur Tugu Muda Semarang, atau di sudut jalan Pandanaran dan jalan Pemuda. Disebut Lawang Sewu (Seribu Pintu), ini dikarenakan bangunan tersebut memiliki pintu yang sangat banyak. Kenyataannya, pintu yang ada tidak sampai seribu. Bangunan ini memiliki banyak jendela tinggi dan lebar, sehingga masyarakat sering menganggapnya sebagai pintu.</p>\r\n<p>Setelah cukup lama lawang sewu seperti tak terurus, akhirnya Lawang Sewu dilakukan pemugaran yang memakan waktu cukup lama, akhirnya selesai pada akhir Juni 2011 dan kembali dibuka untuk umum setelah pada tanggal 5 Juli 2011 diresmikan oleh Ibu Negara Ani Bambang Yudhoyono dan dilanjutkan dengan event Pameran Kriya Unggulan Nusantara yang menampilkan produk produk tradisional dari seluruh Nusantara.</p>\r\n<p>Berapakan sebenarnya jumlah pintu dari Lawang Sewu?</p>\r\n<p>Seperti Kepulauan Seribu yang jumlah pulau yang sebenarnya tak sampai 1.000, karena tercatat hanya 342 buah pulau saja. Sebutan “Sewu” [Jawa: Seribu], merupakan penggambaran sedemikian banyaknya jumlah pintunya. Menurut guide lawang sewu, jumlah lubang pintunya terhitung sebanyak 429 buah, dengan daun pintu lebih dari 1.200 (sebagian pintu dengan 2 daun pintu, dan sebagian dengan menggunakan 4 daun pintu, yang terdiri dari 2 daun pintu jenis ayun [dengan engsel], ditambah 2 daun pintu lagi jenis sliding door/pintu geser).</p>', 'Jl.Pemuda, Sekayu, Semarang Tengah', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2150831259787!2d110.40844431477328!3d-6.9839249949547675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4f04c73cfb%3A0x37b78654cf303a7c!2sLawang%20Sewu%2C%20Sekayu%2C%20Kec.%20Semarang%20Tengah%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1617930071263!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"', '(024) 3542015', '07.00 - 21.00 WIB', '10000', 'img1.jpg', 'a1.jpg', 'a2.jpg', 'a3.jpg'),
(2, 'Sam Po Kong', '<p>Kelenteng Sam Po Kong merupakan bekas tempat persinggahan dan pendaratan pertama seorang Laksamana Tiongkok yang bernama Zheng He / Cheng Ho. Tempat ini biasa disebut Gedung Batu, karena bentuknya merupakan sebuah Gua Batu besar yang terletak pada sebuah bukit batu. Terletak di daerah Simongan, sebelah barat daya Kota Semarang.</p>\r\n<p>Hampir di keseluruhan bangunan bernuansa merah khas bangunan China. Sekarang tempat tersebut dijadikan tempat peringatan dan tempat pemujaan atau bersembahyang serta tempat untuk berziarah. Untuk keperluan tersebut, di dalam gua batu itu diletakan sebuah altar, serta patung-patung Sam Po Tay Djien. Padahal laksamana Cheng Ho adalah seorang muslim, tetapi oleh mereka di anggap dewa. Hal ini dapat dimaklumi mengingat agama Kong Hu Cu atau Tau menganggap orang yang sudah meninggal dapat memberikan pertolongan kepada mereka.</p>\r\n<p>Sam Poo Kong atau dikenal juga sebagai Kelenteng Gedung Batu</p>\r\n<p>Bangunan inti dari kelenteng adalah sebuah Goa Batu yang dipercaya sebagai tempat awal mendarat dan markas Laksamana Cheng Ho beserta anak buahnya ketika mengunjungi Pulau Jawa di tahun 1400-an. Goa Aslinya tertutup longsor pada tahun 1700-an, kemudian dibangun kembali oleh penduduk setempat sebagai penghormatan kepada Cheng Ho.</p>\r\n<p>Sejak Renovasi besar besaran tahun 2002 dan selesai 2005, yang menelah biaya 20 miliar, Sam Poo Kong menarik perhatian lebih banyak orang untuk berkunjung. Di halaman yang cukup luas di depan kelenteng, terdapat sejumlah patung, termasuk patung Laksamana Cheng Ho, yang cukup menarik untuk dinikmati. Di sinilah atraksi atraksi kesenian berupa tari tarian, barongsai atau bentuk kesenian lain digelar untuk memperngati hari hari bersejarah yang berhubungan dengan Cheng Ho atau budaya China.</p>', 'Jl.Simongan No.129, Bongsari, Semarang Barat', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.112871268569!2d110.39618011431796!3d-6.995986370460358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b46faaaaaab%3A0xef7fe551fe13bd76!2sKlenteng%20Sam%20Poo%20Kong!5e0!3m2!1sid!2sid!4v1617930149054!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"', '(024) 7605277', '08.00 - 21.00 WIB', '10000', 'img2.jpg', 'b1.jpg', 'b2.jpg', 'b3.jpg'),
(3, 'Puri Maerokoco', '<p>Puri Maerokoco, atau yang sejak tahun 2017 diubah namanya menjadi Grand Maerakaca, merupakan salah satu objek wisata di Jawa Tengah yang sudah cukup lama. Keunikan dari tempat wisata yang satu ini adalah miniatur Jawa Tengah. Konsepnya mirip dengan Taman Mini Indonesia Indah, namun di Puri Maerokoco ini miniatur hanya sebatas kawasan Jawa Tengah. Harapannya, pengunjung bisa melihat kebudayaan Jawa Tengah secara lebih lengkap. Dan itu berarti objek wisata ini juga merupakan wisata edukasi dan wisata budaya.</p>\r\n<p>Pengambilan nama Puri Maerokoco Semarang itu sendiri diambil dari kisah yang fenomenal, dimana ada seorang wanita yang memiliki keinginan untuk mendapatkan bangunan sejumlah seribu hanya dalam waktu satu maam saja. Taman wisata Puri Maerokoco itu sendiri sudah ada sejak tahun 1993 yang diresmikan oleh Gubernur yang saat itu dijabat oleh Ismail. Di sana ada beberapa fasilitas menarik yang bisa memberikan wawasan baru kepada para pengunjung.</p>\r\n<p>Bagi Anda yang ingin mempelajari lebih lanjut mengenai kebudayaan-kebudayaan yang ada di Jawa Tengah, silakan datang ke objek wisata ini. di sana ada kurang lebih 35 perwakilan berupa adat istiadat khas Jawa Tengah yang bisa dinikmati oleh pengunjung yang ingin tahu. 35 anjungan tersebut berasal dari 35 kota dan kabupaten di seluruh Jawa Tengah, sehingga sangat lengkap.</p>', 'Jl.Yos Sudarso, Tawangsari, Semarang Barat', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.412947539332!2d110.38420541431755!3d-6.960517170082027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4d1d1aea6e7%3A0xf936da89553247a2!2sPuri%20Maerokoco!5e0!3m2!1sid!2sid!4v1617894381653!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"', '+62247617433', '08.00 - 18.00 WIB', '10000', 'img3.jpg', 'c1.jpg', 'c2.jpg', 'c3.jpg'),
(4, 'Old City 3D Trick Art Museum', 'Old City 3D Trick Art Museum memiliki 108 foto gambar tiga dimensi untuk menjadi background foto yang unik. Gambar-gambarnya pun terdiri dari berbagai tema, mulai dari icon dunia, kartun, film hingga tema wisata Semarangan.', 'Jl. Letjen Suprapto No.26, Tj. Mas, Semarang Utara, Kota Semarang', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.346379406164!2d110.42401081431758!3d-6.968401070165932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f356276584c1%3A0x40455dee93f7c65c!2sOld%20City%203D%20Trick%20Art%20Museum%20Semarang!5e0!3m2!1sid!2sid!4v1617893503993!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"', '+622486570776', '09.00–21.00 WIB', '40000', 'img4.jpg', 'a4.jpg', 'b4.jpg', 'c4.jpg'),
(5, 'Brown Canyon', 'Brown Canyon Semarang sebenarnya merupakan sebuah proyek galian yang sudah berumur 10 tahun lebih.  Sebenarnya brown canyon bukanlah tempat wisata melainkan sebuah perbukitan biasa, namun karena penambangan material yang dilakukan setiap hari selama bertahun-tahun ahirnya berubah wujud seperti layaknya grand canyon yang mempesona di Amerika. Keindahan panoramanya yang cantik membuat brown canyon ini menjadi salah satu obyek wisata dan tempat yang terbaik bagi para pecinta fotografi. Tebing – tebing yang menjulang tinggi menjadikan pemandangan yang sangat menarik dan sayang untuk tidak dikunjungi.', 'Rowosari, Kec. Tembalang, Kota Semarang, Jawa Tengah 50279', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5968972993073!2d110.48395531375596!3d-7.056560055315296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708e7e1d16e6c7%3A0x38cd451e8fbddbc4!2sBrown%20Canyon!5e0!3m2!1sid!2sid!4v1617895969662!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"', '-', '24 Jam', 'Gratis', 'img5.jpg', 'a5.jpg', 'b5.jpg', 'c5.jpg'),
(6, 'Masjid Agung Jawa Tengah', 'Masjd Agung Jawa Tengah (MAJT) merupakan salah satu landmark yang ada di Jawa Tengah, khususnya Semarang. Meski baru diresmikan tahun 2006, sejarahnya berkaitan dengan pemimpin pertama di Semarang.  Usut punya usut, masjid yang megah ini berdiri di atas tanah 119 hektar ini dibangun di atas tanah wakaf Ki Ageng Pandanaran II, Bupati Semarang pertama. ', 'Jl. Gajah Raya, Sambirejo, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50166', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2212440299295!2d110.44313395159882!3d-6.983197323221764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708cb76c98241f%3A0x6afb73af24d41bf9!2sMasjid%20Agung%20Jawa%20Tengah%20(MAJT)!5e0!3m2!1sid!2sid!4v1617931467276!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"', '+6282134970000', '04.00–21.00 WIB', 'Gratis', 'img6.jpg', 'a6.jpg', 'b6.jpg', 'c6.jpg'),
(7, 'Kampung Pelangi', 'Letak Kampung Pelangi ini ada di belakang Pasar Kembang Kalisari, Semarang. Sebelum diwarnai, kampung pinggir sungai ini dulunya adalah daerah pemukiman kumuh. Rumah-rumahnya hanya berdinding bata dan tidak dicat. Pembangunannya pun tidak beraturan, berserakan di wilayah desa yang relatif berbukit. Begitu pula jika masuk ke bagian dalamnya; gang sempit menanjak, jalanan yang tidak rata, dan kendaraan terparkir sembarangan. Tapi kampung bernama Kampung Wonosari tersebut kini sudah berubah. Dengan warna-warni yang sangat eye-catching, Kampung Wonosari punya julukan baru yaitu Kampung Pelangi. Bukan cuma tembok rumah yang dipenuhi warna tetapi juga atap dan tiap sudut jalanan kampung.', 'Jl. DR. Sutomo No.89, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1731490970847!2d110.40618941431784!3d-6.988875870384363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c54eb15a0a5%3A0x21051fe4e22e41db!2sKampung%20Pelangi!5e0!3m2!1sid!2sid!4v1617931581312!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"', '-', '24 Jam', '3000', 'img7.jpg', 'a7.jpg', 'b7.jpg', 'c7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `populer`
--

CREATE TABLE `populer` (
  `id` int(5) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar_kecil` varchar(50) NOT NULL,
  `gambar_besar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `populer`
--

INSERT INTO `populer` (`id`, `nama_tempat`, `alamat`, `tanggal`, `deskripsi`, `gambar_kecil`, `gambar_besar`) VALUES
(1, 'Ayana Gedongsongo', 'Krajan, Banyukuning, Bandungan, Semarang', '2021-04-08', 'Merupakan tempat wisata baru yang dibuka pada tanggal 11 juni 2018, tempat ini memiliki konsep wisata kekinian yang memiliki banyak spot yang unik untuk berfoto, sangat cocok untuk remaja yang gemar berfoto selfie', 'i1.jpg', 'img1.jpg'),
(2, 'Taman Bunga Celosia', 'Beroken, Banyukuning, Bandungan, Semarang', '2018-06-19', 'Ini merupakan tempat wisata taman bunga dimana di dalamnya terdapat berbagai jenis bunga, disana juga terdapat banyak spot foto, tapi tidak cuma itu anda juga dapat menikmati pemandangan pengunungan disekitarnya.', 'i2.jpg', 'img2.jpg'),
(3, 'Agrowisata Kopeng', 'Dusun Dukuh, Kopeng, Getasan, Semarang', '2018-06-19', 'Tempat wisata ini baru dibuka beberapa bulan yang lalu namun sudah banyak dikunjungi oleh wisatawan mengingat lokasinya yang ada didekat tempat wisata yang sebelumnya lebih dulu dikenal yaitu Ekowisata Kopeng ataupun Kopeng', 'i3.jpg', 'img3.jpg'),
(5, 'Candi Gedong Songo', 'Desa Candi, Kecamatan Bandungan, Kabupaten Semarang', '2019-05-23', 'Objek Wisata Candi Gedong Songo Semarang merupakan salah satu Objek Wisata di Bandungan yang berupa situs peninggalan umat Hindu yang dibangun pada pertengahan abad 9. Candi ini seperti namanya (songo yang artinya sembilan) sebetulnya terdiri dari sembila', 'i5.jpg', 'img5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kab_smg`
--
ALTER TABLE `kab_smg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota_smg`
--
ALTER TABLE `kota_smg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `populer`
--
ALTER TABLE `populer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kab_smg`
--
ALTER TABLE `kab_smg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kota_smg`
--
ALTER TABLE `kota_smg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `populer`
--
ALTER TABLE `populer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
