-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 03:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20212_wp2_412020007`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_key`
--

CREATE TABLE `tbl_admin_key` (
  `id` int(11) NOT NULL,
  `admin_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_key`
--

INSERT INTO `tbl_admin_key` (`id`, `admin_key`) VALUES
(1, 'kunciadminrahasiajabary1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bangunan`
--

CREATE TABLE `tbl_bangunan` (
  `id` int(11) NOT NULL,
  `nama_bangunan` varchar(255) DEFAULT NULL,
  `keterangan_bangunan` text DEFAULT NULL,
  `gambar_bangunan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bangunan`
--

INSERT INTO `tbl_bangunan` (`id`, `nama_bangunan`, `keterangan_bangunan`, `gambar_bangunan`) VALUES
(1, 'Imah Badak Heuay', 'Arti salah satu rumah adat Jawa Barat ini sangat unik, yaitu ‘badak yang sedang menguap’. Dinamakan demikian karena bentuk atap bagian belakang hingga tepiannya menyerupai badak yang sedang menguap.', '19-bangunan1.jpg'),
(2, 'Imah Julang Ngapak', 'Imah Julang Ngapak dalam bahasa Indonesia berarti ‘burung yang sedang mengepakkan sayapnya’. Dinamakan demikian karena bentuk atapnya menyerupai burung yang sedang mengepakkan sayap.', '766-bangunan2.jpg'),
(3, 'Perahu Kumareb', 'Arti dari kata parahu kumureb adalah perahu yang terbalik. Itulah sebabnya bentuk atap dari jenis rumah adat ini mirip dengan bentuk perahu yang terbalik.', '959-bangunan3.jpg'),
(4, 'Jubleg Nangkup', 'Rumah adat suku Sunda yang terakhir yaitu rumah adat Jubleg Nangkub. Jika dilihat secara sekilas, rumah adat ini terlihat mirip dengan rumah adat Parahu Kamureb. Secara harfiah, rumah adat ini memiliki makna lesung (alat menumbuk padi) yang menelungkup. Rumah adat Jubleg Nangkub merupakan sebuah simbol kepribadian masyarakat yang sopan, ramah, dan bersahaja.', '534-bangunan4.jpg'),
(5, 'Tagong Anjing', 'Nama dari rumah ini memiliki arti yaitu anjing yang sedang duduk. Bentuk atapnya yaitu segitiga, dan bagian atap yang lainnya mengarah ke depan sehingga bentuknya mirip dengan pose anjing yang sedang duduk.', '441-bangunan5.jpeg'),
(6, 'Jolopong', 'Rumah adat “Jolopong” memiliki bentuk atap yang lebih sederhana yang berbentuk memanjang seperti pelana. Desain serta material atap yang digunakan pun jauh lebih sederhana dibanding jenis rumah adat lainnya, sehingga pembangunannya pun lebih mudah', '193-bangunan6.jpeg'),
(7, 'Capit Gunting', 'Bentuk atap pada rumah adat Sunda ini mirip dengan bentuk gunting, sehingga dinamakan capit gunting. Sedangkan pada bagian ujung atapnya berbentuk saling silang yang kemudian menyisakan hasil persilangan, di antara kayu dengan bambu.', '749-bangunan7.jpg'),
(8, 'Buka Pongkok', 'Pintu masuk yang posisinya sejajar dengan salah satu ujung susuhunan atau atap rumah, menjadi alasan mengapa rumah adat Suku Sunda ini disebut dengan rumah adat Buka Pongpok.', '98-bangunan8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id` int(11) NOT NULL,
  `nama_berita` varchar(255) DEFAULT NULL,
  `keterangan_berita` text DEFAULT NULL,
  `keterangan_gambar` varchar(255) DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id`, `nama_berita`, `keterangan_berita`, `keterangan_gambar`, `gambar_berita`) VALUES
(1, 'Angkat Seni Budaya Lokal, Puluhan Penari Ikut Festival Tari Topeng', 'Puluhan peserta Festival Tari Topeng mengasah bakat dan kemampuan mereka dalam lomba tari memeriahkan milad ke-213 Keraton Kacirebonan, Sabtu (3/4/2021). Festival ini digelar untuk melestarikan seni budaya lokal. Festival dan lomba tari topeng Kelana Gaya Slangit dan tari kreasi tersebut, diikuti puluhan pelajar tingkat SD, SMP, dan SMA. Mereka sangat antusias mengikuti lomba yang berlansung di Keraton Prabayaksa Keraton Kacirebonan.\r\n\r\nMereka satu persatu menampilkan kemampuan membawakan tarian topeng dengan cekatan dan lincah untuk mendapatkan nilai tinggi dari para juri. Nani Sawitri yang merupakan dewan juri mengatakan, sangat senang sekali melihat penampilan para peserta lomba.\r\n\r\n\"Kriteria yang kami nilai bagi para peserta adalah penguasaan gerakan tari, wirama, wiraga serta wirasa serta teknik penguasaan ruang,\" kata Nani.\r\n\r\n\"Para juri mengharapkan kegiatan seperti festival tari topeng sangat penting digelar terutama oleh instansi pemerintah maupun swasta. \"Kami sangat berharap, baik instansi pemerintah dan swasta agar bisa mewadahi pengembangan kreativitas anak-anak dalam melestarikan kesenian tradisional, khususnya seni tari topeng,\" ujarnya.\r\n\r\n', 'Seorang penari menunjukkan kebolehannya membawakan tari topeng.', '931-berita1.png'),
(2, 'Sudah Lekang Dimakan Zaman, Seniman Wayang Golek Makin Terhimpit Dihantam Pandemi', 'Wayang golek yang mulai tergerus zaman kini kian pudar keberadaannya. Padahal, wayang golek merupakan budaya warisan leluhur orang Jawa Barat yang diakui oleh dunia, bukan hanya Indonesia dan masyarakat Jawa Barat.\r\n\r\nDi tatar Sunda, saat ini tak mudah menemukan keberadaan perajin wayang golek.\r\n\r\nBagi Kartiwa (34), seniman ukir wayang golek asal Kampung Palasari RT 02 RW 11, Desa Cirawamekar, Kecamatan Cipatat, Kabupaten Bandung Barat (KBB), kondisi ini sangatlah disayangkan. Ia tak ingin budaya yang dicintainya semakin punah.\r\n\r\n\"Banyak orang yang sudah gak suka dengan wayang baik dari sisi pagelaran atau pun dijalankan mainan,\" kata Kartiwa\r\n\r\nDi sebuah lemari sederhananya terlihat koleksi pewayangan miliknya seperti, Cepot, Hanoman, Gatotkaca, dan Arjuna, belum sempurna penampilannya. Catnya masih putih, sebatas dasar penghalus pada bagian kayu.\r\n\r\nAdapula wayang yang belum memiliki lengan dan bagian tubuh lainnya. Sebagian lagi bahkan belum mengenakan kustum sebagai ciri khasnya. Yang paling menonjol dari wayang golek milik Kartiwa, semuanya berdebu.\r\n\r\nSejak 20 tahun lalu Kartiwa menjadi seniman ukir pembuat wayang golek Wayang golek buatan Kartiwa biasa dijual di sentra oleh-oleh di beberapa daerah, mulai dari Jakarta, Jogjakarta, hingga Bali.\r\n\r\nSebagian lagi dijual kepada sejumlah dalang. Mulai dari dalang tenar, hingga dalang yang biasa tampil antar kampung. Ia menjual wayang golek dengan harga bervariasi tergantung ukuran wayang. Dibandrol antara Rp 50-500 ribu.\r\n\r\n\"Kalau lancar dan banyak pesanan saya biasa mengahasilkan untung Rp 8 juta sebulan,\" ucap Kartiwa.\r\n\r\nSelain kian pudar dimakan zaman, usaha kesenian wayang golek miliknya juga kian tenggelam ketika pandemi COVID-19 mewabah tahun lalu.\r\n\r\nBanyak pelanggan batal pesan karena toko mereka tutup. Imbasnya wayang golek ciptaan Iwa menumpuk tak bisa dipasarkan.\r\n\r\n\"Ini sebagian wayang buatan saya yang tak bisa jual karena ruko penjual eceran tutup selama Pandemik. Hampir satu tahun wayang-wayang ini belum ada lagi yang beli lagi,\" ungkap Kartiwa.\r\n\r\nMeski begitu, ia tetap berkomitmen menekuni hobi tersebut Keputusan itu telah bulat diambil usai dirinya memutuskan berhenti sebagai buruh tambang batu kapur.\r\n\r\nMenurutnya, langkah itu diambil sebagai upaya melestarikan warisan budaya Sunda. \"Saya ingin lestarikan wayang golek melalui seni ukir. Kalau bukan kuta, siapa lagi yang melestarikan warisan budaya ini,\" tukas Kartiwa.', 'Sudah Lekang Dimakan Zaman, Seniman Wayang Golek Makin Terhimpit Dihantam Pandemi', '493-berita2.jpg'),
(3, 'Kenalkan Budaya Sunda, Disparbud Jabar Giatkan Pertunjukan', 'Dinas Pariwisata dan Kebudayaan (Disparbud) Provinsi Jawa Barat terus menggenjot program mengenalkan budaya sunda kepada generasi milenial. Salah satu caranya adalah mengemas budaya dalam bentuk pertunjukan kesenian.\r\n\r\n\"Selain menjadi daya tarik wisata, seni pertunjukan diharapkan menumbuhkan ketertarikan generasi muda atau milenial melestarikan budaya lokal,\" kata Kepala Dinas Pariwisata dan Kebudayaan Jawa Barat Dedi Taufik.\r\n\r\nDedi mengatakan, keseriusan pihaknya dalam mengenalkan budaya kepada generasi milenial diwujudkan dengan menggelar opera legenda kolosal Ciung Wanara. Opera itu berlangsung di teater tertutup Taman Budaya Jawa Barat\r\n\r\nOpera yang disutradarai oleh seniman besar Sunda, Bambang Arayana Sambas ini melibatkan 82 penari muda dan anak-anak tingkat SD hingga mahasiswa. Hal ini sejalan dengan keinginan pemerintah pelestarian budaya lokal di kalangan generasi milenial.\r\n\r\n\"Di satu sisi seni pertunjukan jadi agenda pariwisata, tapi di sisi lain menjadi sarana edukasi untuk kaum milenial. Karena kami melibatkan mereka secara langsung baik sebagai pementas tapi juga penonton,\" kata Bambang.\r\n\r\nIa mengatakan, pelestarian budaya sangat berkaitan erat dengan kemajuan pariwisata di Jabar karena provinsi ini tidak hanya dikenal dengan alamnya yang asri, melainkan juga wisata kebudayaan unik. Sebagai contohnya tari jaipong hingga wayang golek yang sudah mendunia.\r\n\r\nMenurut Bambang, pemerintah sudah memiliki fasilitas berupa teater tertutup Taman Budaya. Oleh sebab itu, pihaknya ingin menghidupkan peran Taman Budaya sebagai ruang ekspresi seni, bagi para seniman dan budayawan.\r\n\r\nSehingga, selanjutnya bisa menjadi pusat pelestarian seni kebudayaan sunda, terlebih dalam melestarikan sebuah budaya atau kesenian itu perlu sarana yang memadai juga.\r\n\r\n\"Nah, kita sudah punya Taman Budaya. Kami akan menghidupkan itu dengan intensitas pagelaran berkelanjutan,\" tutur Bambang.\r\n\r\nDedi menyadari dalam mewujudkan ini perlu kolaborasi dengan seniman dan budayawan di Jabar, sehingga pihaknya bersama penggiat seni dan budaya akan merumuskan agenda-agenda pertunjukan. Hal ini juga diharapkan bisa menjadi daya tarik wisata.\r\n\r\n\"Ke depan, harapannya tentu generasi muda ini bisa bangga dengan kebudayaannya sendiri. Tentu harapannya juga ke depannya ikut mengenalkannya daerah lain bahkan negara lain,\" kata Dedi Taufik.', 'Opera Ciung Wanara di Taman Budaya Jawa Barat, Kota Bandung, Rabu', '708-berita3.jpg'),
(4, 'Gong Si Bolong ditetapkan sebagai warisan budaya tak benda', 'Gong Si Bolong ditetapkan sebagai warisan budaya Takbenda (WBTb) dalam Sidang Penetapan Warisan Budaya Takbenda Indonesia 2021 oleh Kementerian Pendidikan Kebudayaan Riset dan Teknologi tanggal 26 - 30 Oktober 2021.\r\n\r\nSekretaris Dinas Pemuda Olahraga Kebudayaan dan Pariwisata (Disporyata) Kota Depok Eko Herwiyanto mengatakan, pada sidang penetapan tersebut terdapat 289 karya budaya menjadi WBTb Indonesia 2021.\r\n\r\nSeluruhnya berasal dari 28 provinsi di Indonesia.\r\n\r\n\"Alhamdulillah Gong Si Bolong yang merupakan usulan warisan budaya telah ditetapkan sebagai WBTb 2021,\" ujar Eko dikutip dari laman resmi Pemerintah Kota Depok.\r\n\r\nMenurut Eko, Gong Si Bolong ditemukan kurang lebih tahun 1750 M pada areal tanah tegalan bersemak, tidak jauh dari curugan (air terjun kecil) ujung Tanah Baru.\r\n\r\nAlat musik tersebut ditemukan oleh Pak Damong dengan seperangkat gamelan lainnya yang siap pakai.\r\n\r\nKarena Pak Damong sendiri, ia hanya membawa Gong, satu bende dan dua buah gendang.\r\n\r\nGong Si Bolong merupakan akulturasi kesenian Sunda dengan Betawi, yakni musiknya bernuansa Sunda dan nyanyian menggunakan sindiran bahasa Betawi.\r\n\r\nEko melanjutkan, pelestarian Gong Si Bolong hingga saat ini masih melakukan pertunjukan rutin.\r\n\r\nEksistensi itu muncul karena adanya regenerasi yang telah melakukan pelatihan.\r\n\r\n\"Masih digunakan sebagai musik pengiring Tari Topeng,\" kata Eko.\r\n\r\nUntuk itu, ia berharap dengan ditetapkannya sebagai WBTb 2021, Gong Si Bolong dapat dikenal masyarakat luas.\r\n\r\nSelain itu, Gong Si Bolong digunakan untuk pertunjukan dan dilestarikan oleh generasi penerus.', 'Alat musik Gong Si Bolong di Hotel Santika Depok, Jawa Barat, Sabtu', '612-berita4.jpg'),
(5, 'Mahasiswa Jepang pelajari budaya Sunda di \"Indonesia Day\"', 'Kedutaan Besar Republik Indonesia (KBRI) Tokyo pada Rabu (15/9) menyelenggarakan “Indonesia Day: Pesona Seni Budaya Jawa Barat” di mana mahasiswa Universitas Keio Jepang terlihat antusias mempelajari budaya Sunda, seperti degung dan tari Jaipong.\r\n\r\nAcara tersebut dibuka oleh Duta Besar RI untuk Jepang Heri Akhmadi yang didampingi oleh Kepala Bidang Penerangan, Sosial dan Budaya dan jajaran pejabat KBRI Tokyo lainnya.\r\n\r\nSebanyak 26 mahasiswa pembelajar dan pengajar Bahasa Indonesia untuk Penutur Asing (BIPA) dari Universitas Keio Kampus Shonan Fujisawa, Kanagawa yang berjarak 60 kilometer dari Tokyo hadir langsung di ruang promosi Japan Indonesia Partnership Lounge (Jaipong) KBRI Tokyo. Para pelajar dan pembelajar BIPA dari berbagai belahan dunia juga ikut hadir secara daring.\r\n\r\n\"Saya bangga melihat generasi muda Jepang antusias belajar bahasa dan budaya Indonesia. Hari ini mereka juga belajar tari Jaipong dan degung. Saya berharap ini bisa membuat mereka semakin mencintai Indonesia,\" kata Dubes Heri dalam keterangan tertulis yang diterima di Jakarta, Rabu.\r\n\r\nIa pun berdiskusi dalam Bahasa Indonesia dengan mahasiswa Universitas Keio.\r\n\r\nPara mahasiswa memanfaatkan acara ini dengan melakukan diskusi langsung dengan Dubes Heri. Berbagai pertanyaan seputar Indonesia diajukan para mahasiswa dan dijawab langsung oleh Dubes Heri.\r\n\r\nSementara itu, Profesor Yo Nonaka yang juga merupakan Ketua Program Bahasa Indonesia Universitas Keio mengaku gembira dan mengapresiasi kegiatan ini.\r\n\r\nIa berharap para mahasiswa dapat lebih bersemangat dalam mempelajari kekayaan seni dan budaya Indonesia. “Akibat kondisi pandemi, kami tidak dapat berkunjung ke Indonesia. Jadi, kami berusaha menghadirkan Indonesia dengan membawa para mahasiswa ke KBRI Tokyo. Mereka bisa merasakan suasana Indonesia dengan melihat dan belajar langsung tari Jaipong dan degung Jawa Barat. Para mahasiswa juga antusias bisa diskusi langsung dengan Bapak Duta Besar. Terima kasih kepada KBRI Tokyo,” ujar Profesor Yo Nonaka.\r\n\r\nKegiatan yang dilakukan secara daring dan luring ini bertujuan mempromosikan seni, budaya, dan pariwisata Indonesia kepada masyarakat Jepang, khususnya mahasiswa dari Universitas Keio.\r\n\r\nKegiatan itu juga menjadi wadah bagi para pembelajar Bahasa Indonesia di Universitas Keio untuk dapat mempraktikkan dan memperkaya kemampuan Bahasa Indonesia.\r\n\r\nMahasiswa dan pengajar dari Universitas Keio yang hadir secara luring tampak antusias saat melihat tari Jaipong dan kesenian degung Sunda.\r\n\r\nPeserta yang hadir langsung juga berkesempatan mengikuti kursus singkat memainkan degung dan menari Jaipong.\r\n\r\nSelain itu, para peserta yang hadir bisa mencicipi beragam jajanan khas Jawa Barat seperti gehu dan pisang molen sebagai \"omiyage\" (oleh-oleh) untuk dibawa pulang.\r\n\r\nSebagaimana kegiatan lain di masa pandemi COVID-19, acara Pesona Seni Budaya Jawa Barat dilaksanakan dengan protokol kesehatan yang ketat.', 'Sejumlah mahasiswa Universitas Keio Jepang belajar memainkan alat musik tradisional Sunda dalam ajang “Indonesia Day: Pesona Seni Budaya Jawa Barat” yang diselenggarakan KBRI Tokyo', '992-berita5.jpg'),
(6, 'Partai NasDem usung strategi khusus lestarikan seni budaya Jabar', 'Partai NasDem mengusung strategi khusus untuk melestarikan seni budaya di Jawa Barat, karena seni budaya diyakini berdampak besar bukan hanya untuk pelaku seni, masyarakat pengusungnya, namun juga warga di wilayah yang sama dan di wilayah lain senegara.\r\n\r\n\"Salah satu upaya pelestarian seni budaya daerah bisa dilakukan dengan \"clustering strategy\" atau membangun komunitas-komunitas dalam cakupan kewilayahan,\" kata politikus Partai NasDem Muhammad Farhan di Bandung, Selasa.\r\n\r\nFarhan, yang juga berlatarbelakang seniman, melihat Pemerintah Kota Bandung dan pemerintah kota serta kabupaten lain harus melakukan \"clustering strategy\".\r\n\r\nDia menjelaskan, ini bisa dilakukan seperti yang dulu di Bandung, yakni ada \"sarang-sarang\" seniman, seperti wilayah Cigereleng sampai ke Bojong Sawang yang dikenal sebagai daerah seniman tradisional sunda.\r\n\r\n\"Dari Jaipong, gamelan degung sampai wayang juga ada. Tetapi akibat tidak adanya strategi semacam \"clustering\", maka hilanglah para seniman pembuat wayang dan seni lainnya,\" kata dia.\r\n\r\n\"Pada kemana itu para \"nayaga\" hebat? Pada tinggal di mana itu tempat pelatihan dalang-dalang luar biasa,\" kata Farhan. Oleh karena itu, Caleg NasDem Dapil Jawa Barat Satu ini mengajak pemerintah kota untuk bersama-sama melestarikan seni dan budaya Jawa Barat berdasar strategi itu.\r\n\r\nDengan konsep demikian, kata Farhan, jika diberi kesempatan menjadi anggota dewan dirinya akan melakukan pemetaan daerah mana saja di Indonesia yang punya potensi bagus untuk seni dan budaya masing-masing.\r\n\r\nCara lain untuk melestarikan seni dan budaya Jawa Barat dan Indonesia secara umum adalah dengan membangun ekosistem industri, sehingga musik hasil seni dan budaya Indonesia setua apapun, secanggih apapun, pasti ada pendengar serta apresiasinya.\r\n\r\nApalagi, lanjut dia, dengan adanya teknologi media digital seperti sekerang ini. Hal itu tentu sangat memungkinkan untuk mengetahui siapa-siapa penggemar musik dari daerah tertentu.\r\n\r\n\"Jadi, kita harus mengusahakan setiap musik di Indonesia baik yang tradisional maupun modern harus punya pasarnya, karena dengan punya pasar artinya musik itu ada yang mendengarkan dan mengapresiasinya. Kita bikin dulu ekosistemnya,\" katanya.\r\n', 'Peserta memainkan rampak kendang penca saat Liga Seni Budaya Bandung di kota Bandung, Jawa Barat', '521-berita6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ensiklopedia`
--

CREATE TABLE `tbl_ensiklopedia` (
  `id` int(11) NOT NULL,
  `nama_ensiklopedia` varchar(255) DEFAULT NULL,
  `keterangan_ensiklopedia` text DEFAULT NULL,
  `gambar_ensiklopedia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ensiklopedia`
--

INSERT INTO `tbl_ensiklopedia` (`id`, `nama_ensiklopedia`, `keterangan_ensiklopedia`, `gambar_ensiklopedia`) VALUES
(1, 'Sumping', 'Sumping (bukan bahasa Sunda) adalah salah satu asesoris yang menempel di sisi kiri-kanan busana bagian kepala penari topeng yang disebut sobrah atau tekes. Bentuknya mirip dengan sebuah untaian bunga. Panjangnya (untuk ukuran orang dewasa) biasanya sekitar satu hasta, dan untuk ukuran anak-anak biasanya lebih pendek. Berjuntai dari atas kuping sampai melebihi pangkal paha. Bahannya terbuat dari berbagai macam bahan, antara lain ada yang dari daun pisang, biji-bijian, benang wool, kain perca, dan sebagainya. Bahan yang kini sering dipergunakan adalah benang wool yang dibuat menjadi bulatan-bulatan kecil kurang-lebih sebesar biji kemiri. Setiap bulatan diselang-seling dengan merjan (mutiara), jumlahnya 15 buah ditambah dengan sebuah bulatan yang agak besar dan sebuah bulatan yang mirip dengan bunga kuncup. Di bagian paling atas dibuat bulatan yang mirip dengan bunga mekar yang disebut dengan kembang melok. Bulatan itu seluruhnya berjumlah 17 buah dan oleh sebagian orang jumlah 17 itu sering dianalogikan dengan jumlah rakaat sholat lima waktu dalam agama Islam.\r\n\r\nSumping, tidak hanya sebagai hiasan, akan tetapi juga seringkali dipakai untuk berbagai variasi gerak. Oleh sebab itu, di dalam terminologi gerak tari topeng Cirebon dikenal bermacam-macam gerakan sumping, misalnya banting sumping, geong sumping, ngola sumping, dan lain-lain.\r\n\r\n\"Sumping (bukan bahasa Sunda) adalah salah satu asesoris yang menempel di sisi kiri-kanan busana bagian kepala penari topeng yang disebut sobrah atau tekes.', '339-siklo1.jpg'),
(2, 'Sobrah', 'Sobrah adalah simbol kesabaran dan ketabahan seorang manusia dalam mengarungi kehidupan yang penuh dengan lika-liku. Kata sobrah itu sendiri diyakini berasal dari kata sobir, sobur, sobaro, sobron, dalam bahasa Arab yang artinya “yang sabar”, “yang tabah hati”, “bersabar”, “berani atas sesuatu”. Warna sobrah didominasi oleh hitam. Warna hitam adalah lambang keabadian dan kelanggengan. Sobrah juga adalah simbol budhi atau pikiran manusia. Bahwa dalam hidup ini, budhi dan pikiran itu harus sigér tengah ora kena miring ngiwa-nengen, kudu panceg maring Pangéran (Budi dan pikiran itu harus seimbang, jangan berat ke kiri atau ke kanan, harus lurus dan tertuju kepada Tuhan). Oleh sebab itu mengapa sobrah itu dilengkapi oleh sigér yang bentuknya lancip seperti menunjuk ke atas.\r\n\r\n\"Sobrah adalah simbol kesabaran dan ketabahan seorang manusia dalam mengarungi kehidupan yang penuh dengan lika-liku.', '164-siklo2.jpg'),
(3, 'Rerempah', 'Adalah macam-macam properti dalam pertunjukan wayang golek yang terbuat dari kulit atau kayu. Jenisnya antara lain terdiri atas berbagai macam senjata, jimat, dan binatang seperti panah, keris, tumbak, gada, limpung, candrasa, kembang cangkok wijaya kusumah, jamus layang kalimusada, cupu manik astagina, gajah, kuda, babi, naga, banteng, garuda, dan lain-lain. Rerempah biasanya ditancapkan di bawah “jagat” dengan posisi terbalik. Properti ini digunakan sesuai dengan peruntukannya, misalnya untuk alat perang yakni panah, keris, tumbak, gada, dan ada pula yang dipakai untuk ditunggangi seperti gajah dan kuda. Di samping itu ada pula yang dipergunakan sebagai peran binatang, misalnya garuda, naga, dan sebagainya.', '500-siklo4.jpg'),
(4, 'Rancung', 'Rancung adalah salah satu komponen dalam pertunjukan kesenian burok atau kesenian yang berbentuk arak-arakan. Bahannya dari kerangka bambu yang dibuat seperti payung dan diberi ranting-ranting. Ranting-ranting tersebut gunanya untuk mengaitkan bermacam-macam makanan khas desa seperti lakar (rangginang) putih, lakar merah, opak, pisang, jawadah (dodol), krupuk, jajanan pasar, wajit dan sebagainya. Makanan tersebut diikat dengan tali dan digantungkan di kerangka bambu tadi sehingga bergelantungan. Kerangka bambu yang seperti payung tersebut dihias memakai kertas warna-wari merah, putih, kuning, dan biru sehingga kelihatan menarik dan meriah. Tempo dulu, rancung dipakai untuk mengarak pengantin akan tetapi kini digunakan untuk mengarak anak sunat atau anak yang telah digusar.', '447-siklo5.jpg'),
(5, 'Puncak Manik', 'Puncak manik adalah nasi tumpeng berbentuk kerucut yang di ujungnya disimpan telur ayam. Nasi ini termasuk salah satu sasajen (sesaji), dan biasanya diperuntukan bagi keperluan ritual adat, baik yang diselenggarakan secara komunal maupun individual. Sebagai sesaji, puncak manik biasanya disimpan pada sebuah wadah khusus, baskom, cempeh, atau niru, dan disatukan dengan jenis makanan lainnya. Puncak manik adalah simbol dari cita-cita manusia. Semua insan sebagai manusia ingin mendapatkan keberhasilan sampai pada puncaknya, sampai pada masa keemasan dalam segala sesuatu potensi yang sedang dijalani dalam hidup ini. Tumpeng nasi yang berbentuk kerucut dimaksudkan untuk menyertakan lambang asas linggaisme. Tujuannya adalah untuk mengingatkan kepada banyak orang tentang sangkan paraning dumadi, yakni tentang asal-usul dan akhir kehidupan manusia. Sedangkan tumpeng menggambarkan kehendak dan cita-cita yang enak dalam pengertian kesejahteraan jasmani dan kebahagiaan rohani. Cita-cita senantiasa harus mawas diri, memperhitungkan daya lebih dari kelemahan-kelemahan yang ada pada dirinya. Cita-cita haruslah merupakan yang pantas dipersembahkan kepada Tuhan Yang Maha Esa, yaitu dalam usaha meningkatkan hubungan manusia dengan alam dan lingkungan, manusia dengan manusia lain, maupun dirinya sendiri sesuai dengan berkat hidup dan kehidupan.', '664-siklo6.jpg'),
(6, 'Panjak Repot', 'Panjak Repot, atau dalam bahasa Inggris disebut One Man Band, adalah seni bermain musik/karawitan yang dilakukan oleh seorang diri. Kesenian ini pernah muncul sekitar tahun 60-an di desa-desa dan dipertunjukan oleh seorang pemain secara berkeliling atau bebarang (ngamen). Alat musiknya terdiri atas seperangkat angklung berlaras salendro, kecrek, dan gong bumbung atau gong tiup, yakni gong yang terbuat dari seruas bambu yang dibunyikan dengan cara ditiup. Disebut panjak repot, karena seluruh alat musik yang dibawa dimainkan sendiri. Kedua tangannya memiankan angklung, kakinya membunyikan kecrek, dan mulutnya meniup gong bumbung. Kesenian ini kemudian punah sekitar tahun 70-an. Baru-baru ini, kesenian tersebut ditemukan lagi di daerah Tanjungsiang, yakni di Kampung Tanjung, Desa/Kecamatan Tanjungsiang, Kabupaten Subang pada program Pewarisan Seni Tradisional Ketuk Tilu Mapag Hujan yang diselenggarakan oleh Balai Pengelolaan Taman Budaya Jawa Barat, 3 Juli 2012. Mereka menyebutnya dengan Ketuk Tilu Buhun. Alat musiknya terdiri atas Ketuk tiga buah yang terbuat dari logam besi atau perunggu, kecrek, dan goong dari besi. Ketiga alat musik tersebut dimainkan sendiri, kedua tangan memainkan ketuk, sesekali tangan kanannya memukul goong, dan kaki memainkan kecrek.', '281-siklo7.jpg'),
(7, 'Lenyepan', 'Lenyepan adalah nama sebuah tari yang terdapat dalam genre tari Keurseus atau Tayub. Tari ini berkarakter halus dan biasanya ditarikan oleh laki-laki. Gerakan-gerakannya seringkali dipakai untuk menggambarkan suatu tokoh dalam sebuah cerita, wayang atau pantun misalnya, yang karakternya sama, seperti tokoh Arjuna, Rama, Abimanyu, Mundinglaya, dan sebagainya. Tari Lenyepan merupakan perkembangan dari tari Tayub, yakni perkembangan dari ibing saka (tari tak berstruktur tetap) ke ibing patokan (tari berstruktur tetap). Tari tersebut diiringi oleh lagu yang berirama lambat—dalam istilah karawitan Sunda disebut wirahma opat wilet—seperti lagu Renggong Bandung, Sulanjana, Banjar Sinom, dan sebagainya. Busananya meniru busana menak, terdiri atas baju takwa, bendo, dan kain batik, soder, dan keris. Seperti halnya tari Keurseus lainnya, tari Lenyepan sudah sangat jarang disaksikan lagi, seiring dengan langkanya pertunjukan tari Keurseus adan Tayuban. Tari ini kini dijadikan sebagai salah satu muatan kurikulum di beberapa sekolah kesenian seperti SMKN 10, STSI Bandung, dan UPI Bandung.', '356-siklo8.jpg'),
(8, 'Klana Udeng', 'Dalam pertunjukan topeng Cirebon, Klana Udeng adalah salah satu tari yang biasanya ditampilkan pada bagian terakhir. Disebut Klana Udeng, karena salah satu bagian kostum kepalanya memakai udeng atau ikat kepala. Tarian ini muncul setelah topeng Klana selesai ditarikan. Gerakan dan musik pengiringnya berbeda dengan topeng Klana. Dari sekian banyak gaya topeng Cirebon, Klana Udeng hanya terdapat di beberapa gaya, antara lain di daerah Pekandangan, Tambi, Indramayu, dan di daerah Cipunagara, Subang. Topeng gaya daerah lainnya, seperti Gegesik, Kalianyar, Losari, Slangit, Palimanan, dan lain-lain, tidak pernah menampilkan tari yang satu ini. Tari topeng ini menjadi sangat terkenal setelah Rasinah menarikannya di berbagai pertunjukan, baik di Indramayu, Cirebon maupun di daerah lainnya serta di luar negeri. Tarian ini kemudian malah menjadi salah satu materi ajar di beberapa sanggat tari topeng di Indramayu. Berbeda dengan topeng Klana yang sering kita lihat, sebagian gerakan Klana Udeng ditarikan secara komikal. Gerakannya terkadang menirukan orang yang tengah mabuk bahkan melucu. Dalang topeng Carini dari Cipunagara, misalnya, menarikan topeng ini dengan penuh kelucuan. Selain menggambarkan seseorang yang tengah mabuk sebagian gerakannya juga mirip dengan gerakan orang yang kaki, tangan dan kepalanya lemas. Sebagian lagi gerakannya mirip dengan gerakan tari dalam Terbang Randu Kentir.', '503-siklo9.jpg'),
(9, 'Lotek atau Gado-gado', 'Gado-gado (dalam bahasa Indonesia atau bahasa Betawi), juga dikenal sebagai Lotek (dalam bahasa Sunda dan Jawa) adalah hidangan Betawi atau Indonesia saladconsisting sayuran rebus disajikan dengan saus saus kacang. Hal ini berbeda dari lotek atah atau karedok untuk versionof yang segar dan mentah sayuran ditutupi dengan saus kacang. Lain hidangan serupa tapi tak sama pecel Jawa. Hal ini diperkirakan awalnya telah Sundanesedish a. Hal ini banyak dilayani dari gerobak penjaja, kios (warung) serta restoran dan hotel baik di Indonesia maupun di seluruh dunia.', '510-siklo10.jpg'),
(10, 'Tuding', 'Dalam kamus bahasa Sunda, tuding artinya gagang tangan wayang golek atau wayang kulit. Gagang tersebut gunanya untuk menghidupkan atau menggerakkan tangan wayang, baik untuk geture saat wayang itu bicara, saat diarikan, dan diperangkan. Pada umumnya, tuding untuk wayang golek bahannya terbuat dari bambu, akan tetapi untuk wayang kulit ada pula yang terbuat dari tanduk. Bentuknya bulat, panjangnya antara 40 s/d 45 cm dengan diameter sekitar 3 inci. Pada wayang golek, alat tersebut dikaitkan ke tengah-tengah kedua telapak tangan wayang dengan benang yang panjangnya kira-kira 1 s/d 1,5 cm, sehingga jika sudah terpasang, alat tersebut seperti menggantung. Akan tetapi, benang pada tuding wayang kulit lebih pendek, kira-kira 0,5 cm. Diujung tuding paling atas dibuat lubang kecil untuk mengaitkan benang yang tersambung ke bagian telapak tangan wayang. Pada bagian tangan wayang, baik wayang golek maupun wauang kulit, tuding adalah salah satu alat yang sangat vital. Melalui alat itulah tangan-tangan wayang dihidupkan untuk berbagai gerakan: gestur bicara, menari, dan perang. Cara memegang dan menggerakannya pun bermacam-macam. Ada yang dijepit dan ada yang digenggam, baik dengan tangan kiri maupun tangan kakan, atau sekaligus dengan kedua tangan (kiri dan kanan). Tuding dalam wayang golek, selain difungsikan untuk menghidupkan tangan wayang, juga bisa difungsikan sebagai senjata atau alat, misalnya sebagai tumbak atau pengungkit. Demikian pula benangnya, selain berfungsi untuk mengaitkan tuding, juga berfungsi untuk menghidupkan bagian sikut. Caranya ialah dengan memutar tuding sehingga benang tersebut melilit ke bagian tuding sehingga menyatu dengan bagian telapak tangan wayang. Dengan cara ini maka sikut wayang bisa digerakkan seperti halnya orang yang menyikut saat diperangkan atau membengkokkan sikutnya saat ditarikan. Cara memainkan tuding untuk wayang kulit agak sedikit berbeda dibanding dengan wayang golek. Hal ini disebabkan karena posisi tangan wayang kulit menyamping, sedangkan posisi tangan wayang golek seperti halnya posisi tangan manusia. Oleh sebab itu, ketika kedua tuding itu dimainkan, misalnya saat wayang itu ditarikan atau diperangkan, maka salah satu tuding itu digenggam oleh tangan dalang (kiri atau kanan) sekaligus dengan campurit. Cara memainkan tuding pada wayang kulit tidak sebebas memainkan tuding pada wayang golek.', '418-siklo11.jpg'),
(11, 'Sabet', 'Sabet (Sunda), secara harfiah artinya tebas. Akan tetapi bukan itu yang dimaksud, melainkan suatu istilah yang terdapat dalam pedalangan. Sabet artinya keterampilan dalang dalam memainkan wayang. Biasanya menyangkut beberapa hal antara lain: cara menarikan, memerangkan, dan gerak-gerik lainnya. Sabet merangkum keterampilan yang dirumuskan menjadi luwes, kewes, dan pantes. Luwes berkaitan dengan kesesuaian gerak dan irama, kewes berkaitan dengan ekspresi, dan pantes berkaitan dengan menyatunya antara dalang dan gerakan wayang itu terasa “hidup”. Dalam basa Sunda hal tersebut disebut nyari. Dalam pertunjukan wayang, baik wayang kulit maupun golek, sbet setiap dalang berbeda-beda. Bisa saja seorang dalang itu sangat terampil, dan secara teknis ia piawai memperagakan berbagai gerakan, akan tetapi belum tentu nyari. Salah satu contoh dalang yang sabet-nya nyari adalah Abah Sunarya (alm.) atau Asep Sunandar Sunarnya. Oleh sebab itu ia dijuluki pula sebagai Dalang Sabet.', '718-siklo12.jpg'),
(12, 'Ketuk', 'Di dalam gamelan pelog dan salendro, ketuk adalah salah satu watitra (alat musik) yang berfungsi untuk menuntun keajegan irama lagu yang tengah dimainkan. Di dalam gamelan Cirebon, waditra tersebut disebut dengan tutukan. Bentuknya seperti bonang dan biasanya bersanding dengan kemyang (Sunda) atau kebluk (Cirebon). Nada ketuk atau tutukan adalah barang (istilah dalam gamelan Sunda), laras atau susul (istilah dalam gamelan Cirebon), dan nada kemyang atau kebluk adalah galimer atau sepuluh. Di dalam permainan gamelan, kedua waditra tersebut biasanya ditabuh secara bersahut-sahutan, yakni sekali ketuk dan sekali kemyang/kebluk, sehingga terdengar seperti suara tuk-bluk tuk-bluk. Akan tetapi, di dalam permainan gamelan Cirebon, terutama dalam irama yang lambat (dodoan) ketuk/tutukan kadang-kadang ditabuh dua kali dan kemyang/kebluk ditabuh sekali. Di dalam permainan gamelan Cirebon, baik untuk gamelan wayang maupun topeng, bahkan juga dalam Tarling, kebluk dan tutukan mempunyai peranan yang sangat penting. Tabuhannya berfungsi untuk menjaga keajegan seluruh irama lagu. Tabuh ketuk yang salah bisa mengacaukan irama lagu yang tengah dimainkan. Penabuhnya pun adalah orang yang sangat khusus, dan kehadirannya sama pentingnya dengan penabuh lainnya. Oleh sebab itu, di Cirebon tidak semua nayaga bisa menabuh waditra tersebut. Hal ini agak berbeda dengan permainan dalam gamelan Sunda, kedua waditra itu malah bisa tidak dimainkan. Lain halnya dengan ketuk tilu, walaupun namanya sama-sama ketuk, namun dalam praktik memainkannya berbeda dengan ketuk dalam gamelan. Jumlah waditranya pun bukan dua, melainkan tiga, sesuai dengan namanya, ketuk tilu, yakni ketuk yang waditranya berjumlah tiga buah. Akan tetapi, cara memainkannya hampir sama, yakni bersahutan antara waditra yang satu dengan dua waditra lainnya.', '54-siklo13.jpg'),
(13, 'Badawang Burok', 'Badawang Burok adalah sejenis boneka besar yang kerangkanya terbuat dari anyaman bambu. Bagian luarnya ditutupi kain yang dicat menyerupai wujud binatang. Kerangka dasar terdiri atas tiga bagian, yaitu bagian kepala, badan, dan sayap. Bagian kepala dibuat menyerupai seorang perempuan cantik, mengenakan hiasan jamang yang terbuat dari kain berwarna keemasan. Wajah Burok adalah topeng yang terbuat dari kertas karton yang dicat putih, dilukis menyerupai rias wajah seorang penari. Bentuk alisnya bulan sapasi, kelopak matanya diberi eye shadow berwarna mencolok. Matanya dapat berkedip, hidung mancung. dan bibirnya dicat warna merah seperti halnya seseorang yang mengenakan lipstick. Bentuk kepala itu nampak seperti perempuan berjilbab. Bagian kepala diberi tangkai dari sebatang kayu dan berfungsi untuk memudahkan pemain di dalam melakukan berbagai gerakan seperti mengangguk, menoleh ke kanan dan ke kiri, berputar, dan juga gerakan ngayang ke belakang, dan ke depan. Kerangka badan dibuat besar agar dapat dimasuki oleh dua orang yang akan memainkannya. Bagian ini ditutupi kain yang berwarna-warni, mulai dari kepala, badan bagian depan sampai bagian belakang. Kain yang menutupi bagian badan itu menyerupai baju wanita dengan berbagai warna menyala: merah, hijau, kuning, biru, dan oranye, lengkap dengan aksesorisnya seperti kace border, renda, dan untaian payet. Di bagian punggungnya dipasang sepasang sayap berwarna merah muda, hijau muda, atau warna lainnya dan dimainkan ke atas ke bawah oleh seorang pemian sehingga gerakannya menyerupai burung yang sedang terbang.', '292-siklo14.jpg'),
(14, 'Alok', 'Dalam karawitan Sunda, alok adalah nyanyian atau kawih yang biasanya dilantunkan secara solois oleh seorang pria seperti yang sering kita dengar dalam pergelaran wayang golek, wayang kulit, wayang cepak, kiliningan, celempungan, bujangga, dan sebagainya. Di lingkungan karawitan Sunda, orang yang melantunkannya disebut Juru Alok atau Wiraswara. Syairnya berupa pantun (sisindiran) atau kata-kata yang dirangkai menurut kehendak penyanyinya. Dalam syair lagunya, seringkali diselipkan nama seseorang sebagai penghormatan atau sebagai cara untuk mendapatkan saweran. Di daerah Cirebon dan Indtramayu, menyebut nama seseorang dalam sindenan disebut jambu alasan. Di dalam kehidupan karawitan Sunda, khususnya kiliningan atau wayang golek, peran Juru Alok sangat penting. Ia bukan saja hanya mengisi kekosongan dalam struktur lagu, akan tetapi juga sebagai penghubung antara baris melodi yang terdapat dalam lagu yang dinyanyikan oleh sinden serta harmonisasi komposisi musik itu sendiri. Oleh sebab itu, tidaklah heran jika dikenal nama-nama juru alok yang popularitasnya juga tak kalah dengan pesinden atau dalang, seperti Mang Samin, Mang Eye, Mang Dedi Rosida, dan lain-lain. Dalam karawitan Cirebon dan Indramayu (tayuban, wayang, kliningan, tarling), sebutan alok sama dengan nglagon, akan tetapi tidak ada orang yang secara khusus dijadikan juru nglagon, karena nglagon biasanya dilantunkan secara rampak atau bersama-sama. Syairnya bukan berupa pantun melainkan kata-kata yang tidak mempunyai arti, misalnya e walele, walele, e walele. Alok atau nglagon, biasanya muncul di sela-sela nyanyian sinden, di antara kenongan dan goongan lagu.', '587-siklo15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id`, `fullname`, `email`, `message`) VALUES
(1, 'tes hubungi kami', 'apakahberhasil@gmail.com', 'tes tes tes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_makanan`
--

CREATE TABLE `tbl_makanan` (
  `id` int(11) NOT NULL,
  `nama_makanan` varchar(255) DEFAULT NULL,
  `keterangan_makanan` text DEFAULT NULL,
  `gambar_makanan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_makanan`
--

INSERT INTO `tbl_makanan` (`id`, `nama_makanan`, `keterangan_makanan`, `gambar_makanan`) VALUES
(1, 'Karedok', 'Karedok adalah makanan khas Jawa Barat berisikan macam-macam sayuran. Hidangan sederhana dan sehat ini menggunakan bahan-bahan segar dan mentah, yang diiris dan disajikan dengan saus kacang tradisional.', '936-makanan1.jpg'),
(2, 'Nasi Timbel', 'Nasi timbel adalah hidangan tradisional khas Jawa Barat. Olahan sederhana ini terbuat dari nasi yang dibungkus daun pisang, lalu dikukus hingga empuk. Nasi timbel jarang dimakan sendiri, biasanya disajikan dengan berbagai lauk, seperti ayam goreng, ikan goreng, tahu, tempe, sayuran, sup, atau sambal.', '518-makanan2.jpg'),
(3, 'Batagor', 'Salah satu jajanan khas Jawa Barat adalah batagor yang merupakan akronim dari bakso, tahu goreng. Makanan ini terdiri dari pangsit ikan goreng yang disajikan dengan saus pedas tradisional. Ikan yang paling umum digunakan untuk membuat hidangan ini adalah ikan tenggiri. Namun tidak jarang juga yang menggunakan ikan tuna, makarel, dan udang.', '111-makanan3.jpg'),
(4, 'Cilok', 'Makanan khas Jawa Barat ini terdiri dari bola-bola kenyal yang berbahan dasar tepung tapioka, ditambahkan udang kering, bawang putih, dan daun bawang. Cilok adalah singkatan dari aci dicolok. Aci adalah nama lain dari tepung tapioka. Ukuran cilok mungkin berbeda-beda, tetapi umumnya camilan satu ini seukuran dengan bakso.', '670-makanan4.jpg'),
(5, 'Empal Gentong', 'Empal gentong adalah makanan khas Jawa Barat, tepatnya dari Cirebon. Sup ini dimasak dalam pot yang terbuat dari tanah liat. Bahan-bahan empal gentong merupakan kombinasi daging sapi, bawang merah, bawang putih, kemiri, kunyit, pala, santan, kecap manis, cengkeh, serai, dan daun jeruk purut.', '901-makanan5.jpg'),
(6, 'Kupat Tahu', 'Kupat tahu adalah makanan khas Jawa Barat yang terdiri dari ketupat (sejenis kue beras) dan tahu dengan bumbu kacang. Bahan-bahan tambahan meliputi tahu, taoge, cabai, kacang tanah, bawang putih, gula merah, air, dan kecap manis.', '524-makanan6.jpg'),
(7, 'Rujak Cuka', 'Rujak cuka adalah makanan khas Jawa Barat lainnya. Rujak jenis ini dibuat dengan bahan utama buah-buahan seperti mangga dan nanas mentah, serta sayuran seperti kol, taoge, bengkuang, dan mentimun.', '894-makanan7.jpg'),
(8, 'Pepes Tahu', 'Pepes tahu terdiri dari tahu dibumbui dan dikukus yang dimasak dalam daun pisang. Bahan-bahannya meliputi tahu, paprika, daun bawang, dan bumbu terasi yang terdiri dari bawang merah, bawang putih, gula, garam, dan cabai rawit.', '922-makanan8.jpg'),
(9, 'Nasi Tutug Oncom', 'Nasi tutug oncom atau kadang hanya disebut tutug oncom, adalah makanan khas Jawa Barat yang terbuat dari nasi dicampur dengan kacang oncom yang difermentasi. Hidangan ini berasal dari Tasikmalaya.', '906-makanan9.jpg'),
(10, 'Nasi Jamblang', 'Nasi jamblang adalah salah satu makanan khas Cirebon yang awalnya disajikan untuk para pekerja paksa yang membangun Jalan Pos Besar dari Anyer hingga Panarukan, melewati Kabupaten Cirebon pada zaman pemerintahan Belanda.', '524-makanan10.jpg'),
(11, 'Growolan', 'Growolan adalah makanan khas Cirebon yang terbuat dari olahan gaplek (singkong yang sudah dihaluskan lalu dijemur hingga kering) dan parutan kelapa. Kata growolan sendiri berasal dari bahasa Jawa yang berarti gumpalan atau kumpulan.', '326-makanan11.jpg'),
(12, 'Empal gepuk', 'Makanan khas Sunda ini berbahan dasar daging yang di goreng bersama dengan bumbu dan kelapa. Gepung ini sangat cocok dimakan bersama nasi yang masih hangat.', '73-makanan12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pakaian`
--

CREATE TABLE `tbl_pakaian` (
  `id` int(11) NOT NULL,
  `nama_pakaian` varchar(255) DEFAULT NULL,
  `keterangan_pakaian` text DEFAULT NULL,
  `gambar_pakaian` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pakaian`
--

INSERT INTO `tbl_pakaian` (`id`, `nama_pakaian`, `keterangan_pakaian`, `gambar_pakaian`) VALUES
(1, 'Pangsi', 'Untuk kaum laki-laki Sunda, dalam kehidupan sehari-hari masa lalu selalu menggunakan celana komprang yakni celana dengan ukuran yang lebih besar ketimbang bentuk kaki. Masyarakat modern kerap menyebutkan oversize, sedangkan di Sunda disebut dengan pangsi.', '189-pakaian1.jpg'),
(2, 'Bludru', 'Baju Beludru merupakan pakaian adat jawa barat yang paling istimewa, biasa digunakan untuk kaum bangsawan.', '254-pakaian2.JPG'),
(3, 'Baju Selontreng dan Sarung Poleng', 'Baju Selontreng sepasang dengan Sarung Poleng adalah baju sehari-hari yang dipakai oleh kaum pria dari rakyat bawah sekali.', '101-pakaian3.jpg'),
(4, 'Baju Bedahan', 'Baju bedahan merupakan sebutan pakaian adat Jawa Barat untuk masyarakat dari kalangan menengah. Bentuknya sama berupa setelan jas tutup dan kebaya seperti pakaian bangsawan namun terlihat lebih sederhana dari segi bahan kain dan aksesoris yang digunakan.', '648-pakaian4.jpg'),
(5, 'Kebaya Sunda', 'Kebaya merupakan baju adat yang digunakan untuk acara resmi di tanah jawa. Kebaya Jawa Barat bentuknya hampir sama dengan kebaya Jawa Tengan maupun Jawa Timur. Kebaya sunda dijadikan sebagai pasangan baju bedahan baik untuk acara formal maupun non formal.', '265-pakaian5.jpg'),
(6, 'Mojang Jajaka', 'Mojang adalah istilah sunda untuk menyebut gadis remaja sedangkan jajaka istilah untuk remaja lelaki. Gadis sunda biasa menggunakan baju adat seperti kebaya polos dengan warna yang beraneka macam dipadukan dengan kain kebet sebagai bawahanya.', '43-pakaian6.jpg'),
(7, 'Beskap', 'Beskap adalah pakaian tradisional yang kerap digunakan oleh masyarakat Jawa Barat untuk kegiatan resmi atau penting seperti acara pernikahan, upacara adat, atau untuk acara yang bersifat kenegaraan. Beskap sendiri merupakan jas tutup dengan lengan panjang yang terbuat dari bahan yang cukup tebal.', '450-pakaian7.jpg'),
(8, 'Sinjang', 'Sinjang adalah kain panjang yang kerap digunakan sebagai pakaian bawah. Masyarakat tanah air sendiri kerap menyebutnya dengan kain jarik atau kain kebat. Umumnya jenis kain yang digunakan untuk Sinjang berbahan dasar lembut dengan warna dan corak yang menarik dan berbeda setiap daerah', '400-pakaian12.JPG'),
(9, 'Baju Pengantin Umum', 'Setiap daerah pasti memiliki pakaian adat yang berbeda untuk baju pengantinnya. Baju pengantin di Jawa Barat pada dasarnya mengunakan jas tutup atau beskap dan kebaya untuk pengantin wanitanya. Dibagian kepala dipasangkan mahkota yang dikenal dengan nama siger.', '667-pakaian9.jpg'),
(10, 'Busana Santana Inten Kedaton', 'Busana Santana Inten Kedaton merupakan gaya busana pengantin yang umumnya dipakai masyarakat Ciamis. Dikatakan bahwa, busana pengantin Santana Inten Kedaton merupakan replika busana bangsawan kerajaan Galuh.', '531-pakaian10.jpg'),
(11, 'Busana Pakaian Pengantin Cirebon', 'Baju pengantin adat Cirebon biasanya berupa baju oblong warna krem yang dilengkapi juga dengan terataian, celana panjang beludru berwarna hijau, kain didit batik cirebonan, keris, ikat pinggang, kilat bahu dan juga gelang kono.', '931-pakaian11.png'),
(12, 'Kain kebat', 'Kain kebat adalah bawahan kain yang dipakai sebagai pelengkap kebaya (Baju Pangsi). Biasanya dipakai penajang sampai menutupi betis seperti rok. Kain kebat memiliki corak batik yang tidak terlalu mencolok dan dapat digunakan baik untuk acara formal maupun sehari-hari.', '44-pakaian12.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tarian`
--

CREATE TABLE `tbl_tarian` (
  `id` int(11) NOT NULL,
  `nama_tarian` varchar(255) DEFAULT NULL,
  `keterangan_tarian` text DEFAULT NULL,
  `gambar_tarian` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tarian`
--

INSERT INTO `tbl_tarian` (`id`, `nama_tarian`, `keterangan_tarian`, `gambar_tarian`) VALUES
(1, 'Tari Jaipong', 'Tari jaipong adalah sebuah tari daerah yang berasal dari Karawang, Jawa Barat yang berkembang pada tahun 60-an. Mulanya tari jaipong dikenal dengan sebutan tari Banjet, sebuah pertunjukan seni tari yang yang dipentaskan dengan gerakan tari yang diiringi oleh musik dengan instrumen gamelan sebagai pengiringnya.', '413-tarian1.jpg'),
(2, 'Tari Topeng', 'Tari topeng berkembang di daerah Cirebon, Jawa Barat. Penari memakai topeng untuk aksesoris dan berfungsi menutupi wajah penari. Pemakaian topeng disesuaikan dengan karakter dan jenis tarian. Lagu pengiring tarian adalah Gonjong dan Sarung Ilang.', '383-tarian2.jpg'),
(3, 'Tari Merak', 'Tari Merak merupakan seni tradisional dari kota Bandung, Jawa Barat. Tarian ini diciptakan oleh Rd. Tjetje Somantri tahun 1955. Tari Merak merupakan pengembangan dari gaya tarian tradisional Sunda.', '442-tarian3.jpg'),
(4, 'Kuda Renggong', 'Kuda Renggong adalah seni pertunjukan masyarakat Sumedang, Jawa Barat. Kata Renggong dalam bahasa Sunda artinya keterampilan. Kuda Renggong menjelaskan cara berjalan kuda yang dilatih untuk menari mengikuti irama musik kendang. Tarian ini biasanya ditampilkan ketika sunatan anak.', '466-tarian4.jpg'),
(5, 'Tari Ronggeng Bugis', 'Tari Ronggeng Bugis adalah jenis tarian dengan unsur komedi, yang dimainkan oleh satu atau beberapa penari laki-laki yang menggunakan busana perempuan.', '641-tarian5.JPG'),
(6, 'Tari Ketuk Tilu', 'Tarian ini banyak ditemukan di daerah Priangan, Bogor, dan Purwakarta, Jawa Barat. Tari Ketuk Tilu termasuk tari pergaulan atau hiburan yang diiringi alat musik seperti kendang, rebab, tiga buah ketuk, Kecrek, dan Goong.', '752-tarian6.jpg'),
(7, 'Tari Ronggeng Gunung', 'Tari Ronggeng Gunung adalah tari yang biasa digunakan sebagai pengantar upcara adat. Contoh acara adat di Jawa Barat seperti panen raya, perkawinan, hitanan, dan penerimaan tamu', '676-tarian7.jpg'),
(8, 'Tari Serimpi', 'Tari Serimpi merupakan tarian sakral yang dahulu hanya dipentaskan oleh kalangan internal keraton. Kata serimpi merujuk pada makna impi atau mimpi, mengingat jika menyaksikan tari serimpi penonton seperti terbuai alunan musik dan gerak luwes penari, seolah-olah penonton masuk ke dalam dunia mimpi.', '307-tarian8.jpg'),
(9, 'Tari Keurseus', 'Tari Keurseus adalah tarian tradisional dari Rancaekek, Bandung, Jawa Barat, dan merupakan tarian pergaulan di kalangan menak atau bangsawan Sunda tempo dahulu.', '669-tarian9.jpg'),
(10, 'Tari Gambyong', 'Gambyong merupakan salah satu tari yang cukup populer. Biasanya dibawakan oleh beberapa orang penari wanita dengan gerakan yang luwes dan lemah gemulai. Saat dipentaskan, ia akan diiringi oleh alat musik serta gending tertentu.', '98-tarian10.jpg'),
(11, 'Tari Buyung', 'Tari buyung adalah tarian khas masyarakat kuningan yang di laksanakan pada perayaan upacara adat seren taun. Tarian ini sudah ada pada zaman sebelumnya yang dipercaya sebagai warisan budaya masyarakat Kuningan, Jawa Barat.', '87-tarian11.jpg'),
(12, 'Tari Sintren', 'Tari Sintren merupakan salah satu tarian tradisional yang berasal dari pesisir utara pantai Jawa tengah dan Jawa barat. selain gerak tarinya, tarian ini juga terkenal dengan unsur mistis di dalamnya karena adanya ritual khusus untuk pemangilan roh atau dewa.', '234-tarian12.jpg'),
(13, 'Tari Angklung Bungko', 'Tarian Angklung Bungko adalah tarian khas Desa Bungko di Kecamatan Kapetakan, Kabupaten Cirebon. Tarian ini diiringi alat musik gendang, angklung, tutukan, klenong, dan gong.', '526-tarian13.jpg'),
(14, 'Tari Wayang', 'Tari Wayang adalah salah satu kelompok atau genre tari yang latar belakangnya dari cerita wayang. Tari ini tumbuh mekar di wilayah Jawa Barat, dan menjadi salah satu tarian tradisional Jawa Barat.', '488-tarian14.jpg'),
(15, 'Tari Kamonesan', 'Tari Kamonesan merupakan tari berpasangan yang ditarikan oleh 8 orang yang terdiri dari 4 orang laki-laki dan 4 orang perempuan. Penampilan para penari pun ditampilkan semenarik mungkin dengan kostum dengan warna yang terang dan cerah seperti merah, biru, kuning dan hijau.', '832-tarian15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tradisi`
--

CREATE TABLE `tbl_tradisi` (
  `id` int(11) NOT NULL,
  `nama_tradisi` varchar(255) DEFAULT NULL,
  `keterangan_tradisi` text DEFAULT NULL,
  `gambar_tradisi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tradisi`
--

INSERT INTO `tbl_tradisi` (`id`, `nama_tradisi`, `keterangan_tradisi`, `gambar_tradisi`) VALUES
(1, 'Ngalaksa', 'Ngalaksa adalah salah satu upacara adat Sunda membawa padi ke lumbung dan membuat laksa sebagai ungkapan rasa syukur kepada Tuhan Yang Maha Kuasa atas kesuksesan hasil panen padi di sawah yang diperoleh masyarakat.', '891-tradisi1.jpg'),
(2, 'Reuneuh Mundingeun', 'Reuneuh mundingeun adalah upacara adat sunda yang dilakukan apabila terdapat perempuan yang mengandung lebih dari 9 bulan, bahkan sampai 12 bulan dan belum melahirkan. Tujuan dari upacara adat ini adalah agar perempuan yang hamil tersebut segera melahirkan dengan selamat, dan supaya dijauhkan dari hal-hal yang tidak diinginkan.', '403-tradisi2.png'),
(3, ' Upacara Ngirab atau Rebo Wekasan', 'Upacara adat Jawa Barat ini memiliki nilai religius. Ngirab yang juga biasa disebut Rebo Wekasan ini dilakukan oleh masyarakat yang tinggal di daerah Sungai Drajat, Cirebon. Tradisi ini ditandai dengan kegiatan berziarah ke makam Sunan Kalijaga.', '423-tradisi3.jpg'),
(4, 'Ngalungsur Pusaka', 'Upacara adat Ngalungsur Pusaka ini pada umumnya dapat dijumpai di daerah Garut, Jawa Barat. Tradisi ini dapat dipimpin oleh seorang juru kunci atau kuncen yang merupakan bukti bahwa mereka masih tetap melestarikan dan juga melaksanakan sebuah tradisi leluhurnya juga dapat mensosialisasikan keberadaan dari benda-benda pusaka peninggalan Sunan Rohmat Suci.', '774-tradisi4.jpg'),
(5, 'Seren Tahun', 'Upacara Seren Taun merupakan salah satu adat tradisi yang hidup di Kabupaten Kuningan, Jawa Barat, sejak puluhan tahun silam. Ia adalah bentuk ungkapan syukur masyarakat Sunda atas suka duka yang mereka alami terutama di bidang pertanian selama setahun yang telah berlalu dan tahun yang akan datang.', '949-tradisi5.jpg'),
(6, 'Nadran', 'Upacara nadran adalah upacara adat Jawa Barat mengenai sedekah laut. Nadran asal katanya dari bahasa Arab “nadar” yang berarti syukuran. Adapun maksud dari penyelenggaraan upacara nadran ini yaitu sebagai ungkapan rasa syukur para nelayan kepada Tuhan YME', '502-tradisi6.jpg'),
(7, 'Labuh Saji', 'Upacara Labuh Saji adalah Upacara adat yang dilakukan oleh masyarakat kota Palabuhan ratu, Kabupaten Sukabumi, Jawa barat. Upacara dilakukan sebagai ungkapan rasa syukur kepada Sang Hyang Widhi karena telah memberi kesejahteraan.', '911-makanan7.jpg'),
(8, 'Munjung', 'Tradisi Mujung atau dalam kata lainnya yaitu Ngunjung ini berasal dari kata Kunjung, yaitu mengunjungi lantas untuk berdoa di makam para leluhur atau orang tua. Kegiatan ini sebagai salah satu perwujudan atas rasa syukur dari masyarakat.', '413-tradisi8.jpg'),
(9, 'Ngarot', 'Ngarot adalah salah satu upacara adat menyambut musim garapan sawah yang dilaksanakan masyarakat di Desa Lelea, Kabupaten Indramayu, Provinsi Jawa Barat. Biasanya upacara ini dilaksanakan mendekati musim penghujan yaitu antara bulan Oktober sampai Desember.', '657-tradisi9.jpg'),
(10, 'Upacara Tingkeban', 'Upacara adat provinsi Jawa Barat ini yang berhubungan dengan sebuah kehidupan manusia lainnya adalah bernama Tingkeban atau Tujuh Bulan. Kebiasaan dari adat ini telah diterapkan ketika seorang ibu sedang mengandung tujuh bulan kandungannya tersebut.', '204-tradisi10.jpg'),
(11, 'Upacara Tembuni', 'Tembuni adalah salah satu upacara adat suku Sunda yang memliki tujuan untuk memelihara ari-ari atau placenta dari bayi tersebut. Hal ini dikarenakan Placenta atau ari-ari sang bayi harus dirawat dengan sebaik-baiknya.', '199-tradisi11.jpg'),
(12, 'Nenjrag Bumi', 'Nenjrag Bumi adalah salah satu upacara adat khas Sunda yang biasa dilakukan oleh warga Kota Bandung. Kegiatan adat Nenjrag Bumi ini ditujukan kepada anak bayi agar kedepannya tidak menjadi ketakukan atau gampang kaget atas gangguan dari luar.', '244-tradisi12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'tesadmin2', 'tesadmin2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_key`
--
ALTER TABLE `tbl_admin_key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bangunan`
--
ALTER TABLE `tbl_bangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ensiklopedia`
--
ALTER TABLE `tbl_ensiklopedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pakaian`
--
ALTER TABLE `tbl_pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tarian`
--
ALTER TABLE `tbl_tarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tradisi`
--
ALTER TABLE `tbl_tradisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_key`
--
ALTER TABLE `tbl_admin_key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_bangunan`
--
ALTER TABLE `tbl_bangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_ensiklopedia`
--
ALTER TABLE `tbl_ensiklopedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pakaian`
--
ALTER TABLE `tbl_pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_tarian`
--
ALTER TABLE `tbl_tarian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_tradisi`
--
ALTER TABLE `tbl_tradisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
