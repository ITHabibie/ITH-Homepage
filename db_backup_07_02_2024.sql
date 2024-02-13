-- MySQL dump 10.19  Distrib 10.3.39-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_ith
-- ------------------------------------------------------
-- Server version	10.3.39-MariaDB-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `engtitle` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) NOT NULL,
  `meta_desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Informasi','informasi','Information','Informasi',NULL,'2021-11-25 22:33:29','2022-03-11 04:33:40'),(2,'Berita','berita','News','berita',NULL,'2021-11-25 22:33:45','2021-11-25 22:33:45');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `maps` longtext DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (2,'Kampus 1: Jl. Balai Kota No. 1 Parepare, Kampus 2:  Jl. Pemuda No. 6 Parepare','rektorat@ith.ac.id','(0421) 2924000','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.9894692766213!2d119.63265252915663!3d-4.0290139620262755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95bb6f2b52da5b%3A0x518220a1f2ead916!2sJl.%20Balaikota%2C%20Kec.%20Bacukiki%20Bar.%2C%20Kota%20Parepare%2C%20Sulawesi%20Selatan%2091125!5e0!3m2!1sid!2sid!4v1643716268509!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>','#','#','#','#','2021-12-01 05:08:50','2023-03-14 09:20:49','images/logo/lUwGtFE8PLdfqVHJI4oKDYCASTqcgoo520d75rbA.png');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `front_navbars`
--

DROP TABLE IF EXISTS `front_navbars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `front_navbars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `format` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 99,
  `view` int(11) NOT NULL DEFAULT 0,
  `ops1` int(11) NOT NULL DEFAULT 0,
  `ops2` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `indtitle` varchar(255) NOT NULL,
  `engtitle` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `inggris` longtext DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `front_navbars_name_unique` (`name`),
  UNIQUE KEY `front_navbars_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `front_navbars`
--

LOCK TABLES `front_navbars` WRITE;
/*!40000 ALTER TABLE `front_navbars` DISABLE KEYS */;
INSERT INTO `front_navbars` VALUES (1,'Tentang ITH','tentang-ith',1,3,1,0,0,'2021-11-26 07:11:22','2022-02-19 01:20:55','Tentang ITH','Profile',NULL,NULL,NULL),(2,'Visi & Misi','visi-misi',2,2,1,1,0,'2021-11-26 07:13:17','2022-02-07 03:10:27','Visi & Misi','Vision & Mission',NULL,'<h3><strong>Visi&nbsp;</strong></h3>\r\n<p>Menjadi Institut yang unggul, memiliki daya saing, berstandar internasional yang menjunjung tinggi martabat kemanusiaan, berwawasan lingkungan dan berbasis enterpreneurship</p>\r\n<p>&nbsp;</p>\r\n<h3>Misi&nbsp;</h3>\r\n<ol>\r\n<li>Menghasilkan lulusan yang profesional, berjiwa wirausaha, berkarakter dan berstandar Internasioanal</li>\r\n<li>Menghasilkan karya nyata bidang ilmu pengetahuan yang inovatif dan berguna bagi masyarakat;</li>\r\n<li>Menyelengarakan pendidikan teknologi yang berkualitas;</li>\r\n<li>Terciptanya manajemen &nbsp;yang &nbsp;handal &nbsp;untuk &nbsp;tatakelola transparan dan terpercaya;</li>\r\n<li>Melakukan Pembinaan sumberdaya manusia yang berkesinambungan dalam menunjang pengembangan profesionalisme.</li>\r\n</ol>','<h3><strong>ITH Vision</strong></h3>\r\n<p>To be an excellent, competitive, international standard institute that upholds human dignity, is environmentally sound and entrepreneurship-based</p>\r\n<p>&nbsp;</p>\r\n<h3><strong>ITH Mision</strong></h3>\r\n<ol>\r\n<li>Produce graduates who are professional, entrepreneurial, have character and have international standards</li>\r\n<li>Produce real works of science that are innovative and useful for society;</li>\r\n<li>Organizing quality technology education;</li>\r\n<li>Creation of reliable management for transparent and reliable governance;</li>\r\n<li>Carry out sustainable human resource development in support of professional development.</li>\r\n</ol>'),(3,'Sejarah Singkat','sejarah-singkat',2,1,1,1,0,'2021-11-26 07:51:20','2022-02-07 03:10:27','Sejarah Singkat','History',NULL,'<h2><strong>Latar Belakang</strong></h2>\r\n<h2><strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/2/Foto 01.jpg\" alt=\"\" width=\"485\" height=\"361\" /></strong></h2>\r\n<p>&nbsp;</p>\r\n<p>Berdirinya Institut Teknologi B.J. Habibie (ITH) di Kota Parepare melalui perjuangan panjang Bapak Walikota Parepare (Dr. H.M. Taupan Pawe) dan Tim &nbsp;yang menjawab keraguan orang akan lahirnya Perguruan Tinggi Negeri di Kota Parepare.</p>\r\n<p>Ide pendirian ITH, bermula ketika Presiden Republik Indonesia ke 6 &nbsp;<strong>Bapak Susilo Bambang Yudoyono</strong> berkunjung ke Kota Parepare,&nbsp; pada hari Kamis tanggal 20 Februari 2014 lalu. &nbsp;Bapak Presiden bermalam di Rumah Jabatan Walikota&nbsp; dan ditempat &nbsp;itulah Bapak Walikota Parepare berdiskusi dengan beliau dan melontarkan ide-ide cemerlang untuk menjadikan B.J.Habibie sebagai sumber inspirasi, kemudian tercetuslah keinginan Bapak Walikota <strong>(H.M. Taupan Pawe</strong>) untuk mendirikan <strong>Institut Teknologi Habibie</strong> ditempat kelahirannya. Inisiatif itu sambut baik oleh Bapak Presiden dan memanggil Menteri Pendidikan dan Kebudayaan RI (Prof. Dr. Muhammad Nuh) untuk menindaklanjuti keinginan Walikota Parepare.</p>\r\n<p><strong>Berdirilah INSTITUT TEKNOLOGI B.J. HABIBIE (ITH), kemudian berubah nama menjadi </strong><strong>INSTITUT TEKNOLOGI&nbsp; BACHARUDDIN JUSUF HABIBIE</strong> <strong>(ITBH) </strong>&nbsp;melalui <strong>Peraturan Presisden Nomor 152 Tahun 2014</strong>, tanggal 17 Oktober 2014 yang ditandatangani oleh Presiden &nbsp;<strong>H. Susilo Bambang Yudoyono</strong>.</p>\r\n<p>Setelah melalui proses yang panjang dalam izin operasionalnya, maka terbitlah peraturan kelembagaan dan tata kerja melalui Peraturan Menteri Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Republik Indonesia, Nomor 21 Tahun 2021 pada tanggal 4 Agustus 2021,&nbsp; Organisasi dan Tata Kerja. <strong>Maka </strong><strong>mulai tanggal 14 Agustus 2021 </strong><strong>secara resmi Institut Teknologi </strong><strong>&nbsp;</strong><strong>B.J. Habibie mulai beroperasi.</strong> &nbsp;</p>\r\n<p><strong>Unggul dalam </strong><strong>p</strong><strong>engembangan </strong><strong>ilmu pengetahuan dan </strong><strong>teknologi terapan </strong><strong>berstandar internasional yang berwawasan lingkungan dan berbasis enterpreneurs</strong><strong>hip</strong><strong>, </strong>merupakan inti dari visi Institut Teknologi B.J. Habibie di Kota Parepare</p>\r\n<p><strong>Institut Teknologi B.J. Habibie (I</strong><strong>TB</strong><strong>H)</strong> &nbsp;merupakan &nbsp;Perguruan &nbsp;Tinggi &nbsp;Negeri &nbsp;(PTN) &nbsp;penyelenggara pendidikan &nbsp;Akademis &nbsp;berlokasi &nbsp;di &nbsp;Kota&nbsp; Parepare &nbsp;Provinsi Sulawesi Selatan. Izin pendirian berdasarkan Peraturan Presisden Nomor 152 Tahun 2014,&nbsp; tanggal 17 Oktober 2014.</p>\r\n<p><strong>Penetapan Rektor</strong> melalui Keputusan Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Republik Indonesi, Nomor 67373/MPK.A/KP.07.00/2021, tentang Pengangkatan Rektor Institut Teknologi Bacharuddin Jusuf Habibie Periode 2021-2025. Tanggal 04 Oktober 2021.</p>\r\n<p>Pada awal operasionalnya ITBH menyelenggarakan pendidikan strata satu (S1) bergelar akademik sarjana sesuai dengan keilmuannya. Saat ini Institut Teknologi B.J. Habibie memiliki 3(tiga) program studi, yaitu Program Studi Matematika, Program Studi Teknik Informatika dan Program Studi Sistem Informasi serta mengembangkan program studi baru.</p>\r\n<p>Kampus ITBH saat ini&nbsp; berdiri di atas tanah seluas 8,16 Ha yang merupakan&nbsp; Gedung DPRD dan Gedung Pemuda yang dialihkan menjadi Kampus ITBH berlantai dua dan telah dilengkapi dengan fasilitas memadai, terdiri dari ruang Rektorat, ruang &nbsp;kuliah, laboratorium Komputer, Perpustkaaan dan fasilitas penunjang lainnya. Persiapan kampus terpadu dilokasi pengembagan ke 3 seluas 34 ha.</p>\r\n<p>Dalam melaksanakan fungsinya, maka ITBH membekali mahasiswa dengan sikap, pengetahuan dan keterampilan dan kecakapan hidup,&nbsp; sesuai dengan capaian pembelajaran yang ditetapkan. Proses belajar mengajar mengacu kurikulum berbasis KKNI yang menitikberatkan pada pendalaman keilmuan dan memberikan &nbsp;pengalaman &nbsp;belajar baik didalam negeri maupun diluar negeri sesuai &nbsp;capaian &nbsp;pembelajaran yang dituju dan membekali juga lulusan untuk berwirausaha.</p>\r\n<p><em>AKU DATANG DENGAN CINTA MENUNTUT ILMU DAN TEKNOLOGI, AKU BELAJAR TEKUN, &nbsp;AKU BERHASIL MENJADI SARJANA PRODUKTIF YANG UNGGUL DAN ENTREPNEURSHIP</em></p>\r\n<p><em>Jadilah mata air jernih yang memberikan kehidupan kepada sekitarmu </em></p>\r\n<p><em>(B.J. Habibie)</em></p>','<p><strong>Background</strong></p>\r\n<p>The inauguration of the construction of the Rectorate Building of the Habibie Institute of Technology (ITH) Parepare, Thursday (28/8/2014) was officially launched by former President of the Republic of Indonesia BJ Habibie, who is also the native son of Parepare.</p>\r\n<p>The inauguration of this information technology-based school was held in front of the former Youth Building, in Bumi Harapan Village, West Bacukiki District, Parepare City, South Sulawesi. This ITH building will have a chain of 10, and will become the largest Computer School in Eastern Indonesia. In his remarks, Habibie said he welcomed ITH\'s plan to become a center for making computer software and hardware.</p>\r\n<p>The Parepare City Government provides a budget of Rp 1.9 billion in the Parepare City Amendment Budget this year for the construction of ITH. The building, which stands on an area of ​​two hectares, will be the location of ITH\'s first campus before the main campus is completed in the Lompoe area, Bacukiki District. \"In addition to office facilities, this building will also be equipped with library facilities, laboratories with an estimated number of lecture rooms as many as 19 rooms,\" said Mayor of Parepare Taufan Pawe, in his speech. The idea of ​​establishing ITH was inspired by the desire of the people of Parepare City to realize itself as a beacon of education in the north of the province. South Sulawesi.</p>'),(4,'Struktur Organisasi','struktur-organisasi',2,4,0,1,0,'2021-11-26 07:55:44','2022-02-21 11:54:11','Struktur Organisasi','Organizational Structure','images/page/NVDSIG8JiMbt5tQ9xWeWf2BW0VcTVBoqJsu1fHiX.png','<p>Struktur organisasi sebagai sebuah hierarki (jenjang atau garis yang bertingkat) berisi komponen-komponen dimana pendiri dan penyusun perusahaan kemudian menggambarkan pembagian kerja, dan bagaimana aktivitas dalam perusahaan yang berbeda mampu saling terkoordinasi. Struktur organisasi yang baik sendiri kemudian akan menunjukkan adanya spesialisasi pada masing-masing fungsi pekerjaan, maupun penyampaiannya melalui sebuah laporan.</p>\r\n<p>Struktur organisasi adalah sistem yang digunakan untuk mendefinisikan hierarki dalam sebuah organisasi dengan tujuan menetapkan cara sebuah organisasi dapat beroperasi, dan membantu organisasi tersebut dalam mencapai tujuan yang telah ditetapkan di masa depan.</p>\r\n<p>&nbsp;</p>','<p>The organizational structure as a hierarchy (tiers or tiered lines) contains the components by which the founders and constituents of the company then describe the division of labor, and how activities in different companies are able to be coordinated with each other. A good organizational structure itself will then show the specialization in each job function, as well as its delivery through a report.</p>\r\n<p>An organizational structure is a system used to define a hierarchy within an organization with the aim of establishing how an organization can operate, and assisting the organization in achieving its stated goals in the future.</p>'),(5,'Akademik','akademik',1,4,1,0,0,'2021-11-26 08:05:22','2022-02-01 03:22:59','Akademik','Academic',NULL,NULL,NULL),(6,'Program Studi','program-studi',3,2,1,5,0,'2021-11-26 08:10:04','2022-02-09 15:04:18','Program Studi','Study Program',NULL,'<p><strong>Program Studi</strong></p>\r\n<p>Institut Teknologi B.J. Habibie (ITBH) memberi peranan yang&nbsp; penting bagi pengetahuan, teknologi dan seni bagi kemajuan masyarakat dan pembangunan. Peranan tersebut dilakukan melalui Tridarma Perguruan Tinggi, yaitu pendidikan, penelitian dan pengabdian kepada masyarakat baik didalan negeri maupun diluar negeri.</p>\r\n<p>Untuk tahap awal bidang ilmu yang diselenggarakan berkaitan dengan bidang teknologi&nbsp; yang terdiri &nbsp;3 (tiga) Program Studi:</p>\r\n<ol>\r\n<li>Program Studi Matematika</li>\r\n<li>Program Studi Teknik Informatika</li>\r\n<li>Program Studi Sistem Informasi</li>\r\n</ol>','<p><strong>Study program</strong></p>\r\n<p>B.J. Institute of Technology Habibie (ITBH) plays an important role in science, technology and art for the advancement of society and development. This role is carried out through the Tridarma of Higher Education, namely education, research and community service both at home and abroad.</p>\r\n<p>For the initial stage of the field of science that is held related to the field of technology, which consists of 3 (three) Study Programs:</p>\r\n<ol>\r\n<li>Mathematics Study Program</li>\r\n<li>Informatics Engineering Study Program</li>\r\n<li>Information Systems Study Program</li>\r\n</ol>'),(9,'Riset','riset',2,4,0,5,0,'2021-11-26 08:22:41','2022-02-19 13:31:32','Riset','Research',NULL,'<p>Riset adalah penelitian, berasal dari kata&nbsp;<em>re</em>&nbsp;dan&nbsp;<em>search</em>, mencari sesuatu yang baru menjadi hakikat dari kata&nbsp;<em>research</em>, bagaimana kita mencari sesuatu yang baru, mencari sesuatu di belakang kejadian, fenomena atau mencari penyelesaian masalah lewat&nbsp;<em>research</em>&nbsp;atau penelitian. Namun ada perbedaan antara penelitian dan pengamatan sehari-hari karena penelitian adalah suatu pengamatan yang sistematis, menggunakan metodologis, atau cara-cara baik prosedur ilmiah dalam pengetahuan. Cara membedakan penelitian dengan investigasi atau pengamatan. Yang pertama, penelitian itu memiliki suatu kerangka/<em>framework</em>&nbsp;tertentu dari kaidah-kaidah ilmu pengetahuan yang disepakati dalam suatu disiplin ilmu tertentu, tidak bisa hanya berdasarkan pengetahuan kita apa adanya.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://ith.ac.id/storage/photos/1/Dunia-Digital.png\" alt=\"\" width=\"300\" height=\"234\" /></p>\r\n<p>Yang kedua, menggunakan suatu prosedur, tata cara, metode, Teknik-teknik tertentu, yang jelas berbeda dari masing-masing disiplin ilmu, misalnya pendekatan kualitatif yang berbeda dengan kuantitatif. Yang ketiga, penelitian itu didesain secara khusus agar tidak bias. Riset pada dasarnya adalah ingin menjelaskan terhadap suatu kejadian, suatu fenomena mengapa suatu kejadian atau fenomena yang terjadi dalam dunia ini terjadi seperti ini.</p>','<p>Research is research, derived from the words re and search, looking for something new which is the essence of the word research, how do we look for something new, look for something behind events, phenomena or find solutions to problems through research or research. However there is a difference between research and everyday observation because research is a systematic observation, using methodological, or scientific methods of good knowledge. How to distinguish research from investigation or observation. First, the research has a certain framework of scientific principles that are agreed upon in a particular scientific discipline, it cannot be based solely on our knowledge as it is.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://ith.ac.id/storage/photos/1/Dunia-Digital.png\" alt=\"\" width=\"300\" height=\"234\" /></p>\r\n<p>The second, using a procedure, procedure, method, certain techniques, which are clearly different from each discipline, for example a qualitative approach that is different from quantitative. Third, the research was specifically designed to be unbiased. Research basically wants to explain to an event, a phenomenon why an event or phenomenon that occurs in this world occurs like this.</p>'),(10,'Kerjasama','kerjasama',2,4,0,5,0,'2021-11-26 08:28:13','2022-02-19 13:31:43','Kerjasama','Cooperation',NULL,'<p>Sebelum kita menuju pada topik utama yaitu manfaat kerjasama khususnya dalam dunia bisnis, ada baiknya kita mengetahui terlebih dahulu tentang pengertian dari kerjasama tersebut. pengertian kerjasama adalah pengaturan kemitraan saling menguntungkan yang dilakukan secara sukarela oleh dua bidang usaha atau lebih. Kerjasama ini menjadi hal yang menguntungkan karena beberapa permasalahan menjadi lebih ringan.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://ith.ac.id/storage/photos/1/inovasi.jpg\" alt=\"\" width=\"300\" height=\"200\" />Selain itu, kerjasama tidak hanya soal mencari dana saja. Beberapa pebisnis lebih suka menjalin relasi yang menguntungkan dengan sesama kompetitor.<br />Daripada bersaing yang akhirnya membuat stres, lebih baik saling melengkapi hal-hal yang tidak dimiliki. Terlebih saat darurat. Misalnya seorang suplier ikan. Ketika pada suatu hari ia kehabisan stok, ia bisa mencari ikan ke suplier lainnya.</p>','<p>Before we go to the main topic, namely the benefits of cooperation, especially in the business world, it helps us to know in advance about the meaning of the cooperation. The notion of cooperation is a mutually beneficial partnership arrangement carried out voluntarily by two or more business fields. This collaboration is beneficial because some problems become lighter.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://ith.ac.id/storage/photos/1/inovasi.jpg\" alt=\"\" width=\"300\" height=\"200\" /></p>\r\n<p>In addition, cooperation is not only about finding funds. Some businesses prefer to establish profitable relationships with fellow competitors.<br />Instead of competing which ends up being stressful, it\'s better to complement each other what they don\'t have. Especially during an emergency. For example a fish supplier. When one day he ran out of stock, he could look for fish to other suppliers.</p>'),(11,'Kampus & Fasilitas','kampus-fasilitas',1,5,1,0,0,'2021-11-26 08:32:25','2022-02-01 03:22:59','Kampus & Fasilitas','Campus & Facilities',NULL,NULL,NULL),(12,'Kampus I','kampus-i',2,0,1,11,0,'2021-11-26 08:33:24','2022-03-08 05:47:32','Kampus I','Campus I',NULL,'<h3 style=\"text-align: center;\"><strong>Gedung 1 Kampus ITH</strong></h3>\r\n<p style=\"text-align: center;\"><em><strong>Jl. Balai Kota No.1 Kota Pare-Pare, Sulawesi Selatan</strong></em></p>\r\n<h3>&nbsp;</h3>\r\n<h3><img style=\"font-size: medium; font-weight: 400; text-align: start; display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/1/kampus 1.1.jpeg\" alt=\"\" width=\"461\" height=\"259\" /></h3>\r\n<h3>&nbsp;</h3>\r\n<h3>&nbsp;</h3>\r\n<h3><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/1/kampus 1.3.jpeg\" alt=\"\" width=\"331\" height=\"589\" /></h3>\r\n<h3>&nbsp;</h3>\r\n<h3>&nbsp;</h3>\r\n<h3><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/1/kampus%201.2.jpeg\" alt=\"\" width=\"323\" height=\"574\" /></h3>\r\n<h3 style=\"text-align: center;\">&nbsp;</h3>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>','<h3 style=\"text-align: center;\"><strong>ITBH Campus 1 Building</strong></h3>\r\n<p><strong>&nbsp;</strong></p>\r\n<p style=\"text-align: center;\"><em><strong>Balai Kota Street No.1 Pare-Pare City, South Sulawesi&nbsp;</strong></em></p>\r\n<h3>&nbsp;</h3>\r\n<p><strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/1/kampus 1.1.jpeg\" alt=\"\" width=\"461\" height=\"259\" /></strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/1/kampus%201.3.jpeg\" width=\"331\" height=\"588\" /></strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/1/kampus%201.2.jpeg\" alt=\"\" width=\"323\" height=\"574\" /><br /></strong></p>\r\n<p>&nbsp;</p>'),(13,'Kampus II','kampus-ii',2,2,1,11,0,'2021-11-26 08:33:39','2022-03-08 05:48:02','Kampus II','Campus II',NULL,'<h3 style=\"text-align: center;\"><strong>Gedung 2 Kampus ITH</strong></h3>\r\n<p style=\"text-align: center;\"><strong><em>Jl. Pemuda No.6, Kota Pare-Pare, Sulawesi Selatan</em></strong></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/1/kampus 2.1.jpeg\" alt=\"\" width=\"900\" height=\"507\" /></p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/1/kampus 2.2.jpeg\" alt=\"\" width=\"900\" height=\"507\" /></p>','<h3 style=\"text-align: center;\"><strong>ITBH campus 2 building</strong></h3>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/1/kampus 2.1.jpeg\" alt=\"\" width=\"900\" height=\"507\" /></p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/1/kampus 2.2.jpeg\" alt=\"\" width=\"900\" height=\"507\" /></p>\r\n<p>&nbsp;</p>'),(15,'Laboratorium','laboratorium',2,4,1,11,0,'2021-11-26 08:38:49','2022-03-08 05:52:20','Laboratorium','Laboratory',NULL,'<h3 style=\"text-align: center;\"><strong>Laboratorium Kampus ITH</strong></h3>\r\n<p>&nbsp;</p>\r\n<h3 style=\"text-align: center;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/2/WhatsApp Image 2022-03-04 at 21.25.36.jpeg\" alt=\"\" width=\"785\" height=\"515\" /></h3>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/2/WhatsApp Image 2022-03-04 at 21.25.36 (1).jpeg\" alt=\"\" width=\"785\" height=\"515\" /></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/2/WhatsApp Image 2022-03-04 at 21.25.35.jpeg\" alt=\"\" width=\"785\" height=\"515\" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>',NULL),(16,'Perpustakaan','perpustakaan',2,5,0,11,0,'2021-11-26 08:39:04','2022-02-21 11:54:39','Perpustakaan','Library',NULL,NULL,NULL),(36,'P M B','p-m-b',0,6,0,0,0,'2022-01-26 02:23:50','2022-05-10 16:32:10','P M B','P M B',NULL,'<h2><strong><a href=\"https://pmb.ith.ac.id\" target=\"_blank\" rel=\"noopener\">Penerimaan Mahasiswa Baru Tahun 2022</a></strong></h2>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>SNMPTN</strong></p>\r\n<p>Seleksi Nasional Mahasiswa Perguruan Tinggi Negeri&nbsp; sesuai jadwal&nbsp; SNPTN secara Nasional</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>SBMPTN</strong></p>\r\n<p>Seleksi Bersama Mahasiswa Perguruan Tinggi Negeri&nbsp; sesuai jadwal&nbsp;&nbsp; SBMPTN secara Nasional</p>\r\n<p>&nbsp;</p>\r\n<p><strong>JALUR MANDIRI </strong></p>\r\n<ul>\r\n<li>Jalur Non Subsidi (JNS)</li>\r\n<li>Penelusuran Perestasi Olah Raga, Seni dan Keilmuan POSK)</li>\r\n</ul>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;<em> &nbsp;Jadwal Penerimaan Jalur Mandiri-JNS-POSK ditentukan oleh Perguruan Tinggi masing-masing&nbsp;</em></p>\r\n<h3 style=\"text-align: center;\">&nbsp;</h3>\r\n<h3 style=\"text-align: left;\"><strong>Cek Link Pendaftaran . . . !</strong></h3>\r\n<p><strong><a href=\"https://pmb.ith.ac.id\" target=\"_blank\" rel=\"noopener\">Penerimaan Mahasiswa Baru Tahun Ajaran 2022/2023</a></strong></p>\r\n<h6 style=\"text-align: center;\">&nbsp;</h6>','<h2><strong><a href=\"https://pmb.ith.ac.id\" target=\"_blank\" rel=\"noopener\">Penerimaan Mahasiswa Baru Tahun 2022</a></strong></h2>\r\n<p><strong>SNMPTN</strong></p>\r\n<p>National Selection of State University Students according to the National SNPTN schedule</p>\r\n<p>&nbsp;</p>\r\n<p><strong>SBMPTN</strong></p>\r\n<p>Joint Selection of State University Students according to schedule for National SBMPTN</p>\r\n<p>&nbsp;</p>\r\n<p><strong>INDEPENDENT PATH</strong></p>\r\n<ul>\r\n<li>Non-Subsidized Pathway (JNS)</li>\r\n<li>Tracking Performance in Sports, Arts and Sciences (POSK)</li>\r\n</ul>\r\n<p><em>&nbsp; &nbsp; &nbsp; &nbsp; The Independent-JNS-POSK Admission Schedule is determined by each university</em></p>\r\n<p>&nbsp;</p>\r\n<h3 style=\"text-align: center;\">&nbsp;</h3>\r\n<h3 style=\"text-align: left;\"><strong>Check the registration link . . . !</strong></h3>\r\n<div>\r\n<p><strong><a href=\"https://pmb.ith.ac.id\" target=\"_blank\" rel=\"noopener\">Penerimaan Mahasiswa Baru Tahun Ajaran 2022/2023</a></strong></p>\r\n<h6 style=\"text-align: center;\">&nbsp;</h6>\r\n</div>\r\n<div>\r\n<h6 style=\"text-align: center;\">&nbsp;</h6>\r\n</div>'),(43,'Profil Lulusan','profil-lulusan',2,3,1,5,0,'2022-02-07 02:04:45','2022-02-07 03:10:27','Profil Lulusan','Graduate Profile',NULL,'<p><strong>Profil Lulusan</strong></p>\r\n<p>1. Akademisi</p>\r\n<p>Menjadi dosen, asisten dosen/staf pengajar muda pada program studi.</p>\r\n<p>2. Peneliti</p>\r\n<p>Peneliti muda pada bidang pengembangan ilmu teknologi &nbsp;dan terapannya</p>\r\n<p>3. Tenaga Ahli Profesional</p>\r\n<p>Tenaga ahli profesional pada industri, lembaga pemerintah dan/atau swasta dengan penerapan keahlian bidang ilmu teknik informatika dan sistem informasi.</p>\r\n<p>&nbsp;</p>','<p><strong>Graduate Profile</strong></p>\r\n<p>1. Academics</p>\r\n<p>Become a lecturer, assistant lecturer / young teaching staff in study programs.</p>\r\n<p>2. Researcher</p>\r\n<p>Young researchers in the field of technological science development and its application</p>\r\n<p>3. Professional Experts</p>\r\n<p>Professional experts in industry, government and/or private institutions with the application of expertise in the field of informatics engineering and information systems.</p>'),(44,'Program Studi Matematika','program-studi-matematika',4,1,1,0,6,'2022-02-09 15:06:33','2022-02-14 02:08:12','Program Studi Matematika','Mathematics Study Program',NULL,'<p style=\"text-align: justify;\">Program Studi S1 Matematika merupakan salah satu program studi yang didirikan sebagai prodi&nbsp;baru <em>(new study program), </em>yang mengemban penyelenggaraan unsur-unsur Tridharma Perguruan Tinggi. Untuk dapat mewujudkan amanat Tridharma&nbsp; Perguruan Tinggi&nbsp; dengan berkualitas,&nbsp; Prodi&nbsp; S1 Matematika merumuskan visi sebagai arah cita-cita yang ingin dicapai di masa&nbsp; yang&nbsp; akan&nbsp; datang melalui beberapa tahap dan dengan melibatkan para pemangku kepentingan <em>(stakeholder) </em>internal dan eksternal. Sebagai unit kerja yang merupakan bagian integral dari Institut Teknologi Habibie, maka visi Prodi S1 Matematika dirumuskan secara selaras dan konsisten terhadap visi Institut. Visi dan misi pada akhirnya sangat penting untuk merumuskan kurikulum prodi.</p>\r\n<p><strong>Visi Prodi S1 Matematika adalah:</strong></p>\r\n<p><strong>Menjadi Program Studi Matematika yang menghasilkan lulusan yang profesional, kompeten, unggul, bermoral dan mandiri secara nasional dan internasional</strong></p>\r\n<p>Dari visi di atas ditetapkan <strong>misi prodi</strong>, yaitu:</p>\r\n<ol>\r\n<li>Menyelenggarakan proses pembelajaran berkualitas dengan peningkatan berkelanjutan dalam pengembangan bidang Matematika yang relevan dengan kebutuhan pemangku kepentingan</li>\r\n<li>Menyelenggarakan kegiatan penelitian dan pelayanan dan pengabdian kepadamasyarakat yang berkualitas</li>\r\n<li>Menyelenggarakan kerjasama saling menguntungkan dengan berbagai pihak secara berkelanjutan dalam bidang pendidikan, penelitian dan pelayanan&nbsp; dan&nbsp; pengabdian&nbsp; kepada masyarakat</li>\r\n<li>Meningkatkan kuantitas dan kualitas sarana dan prasarana pembelajaran untuk peningkatan kualitas pendidikan secara berkelanjutan</li>\r\n<li>Menghasilkan lulusan yang profesional, berjiwa wirausaha dan berkarakter</li>\r\n</ol>\r\n<p>Selaras dan konsisten dengan misi prodi ditetapkan <strong>tujuan Prodi </strong>S1 Matematika adalah:</p>\r\n<ol>\r\n<li>Menghasilkan tenaga profesional di bidang Matematika, yang memiliki sikap dan&nbsp; kemampuan sebagai berikut:\r\n<ul>\r\n<li>beradaptasi terhadap perkembangan teknologi</li>\r\n<li>belajar sepanjang hayat dan ulet</li>\r\n<li>berfikir kreatif, analitis dan sistematis</li>\r\n<li>berwirausaha</li>\r\n</ul>\r\n</li>\r\n<li>bermoral</li>\r\n<li>Menghasilkan penelitian dan pengabdian serta pelayanan kepada masyarakat dalam bidang Matematika</li>\r\n<li>Menghasilkan penerimaan dan kemanfaatan bagi prodi S1 Matematika melalui kerjasama</li>\r\n<li>dengan berbagai pihak</li>\r\n</ol>','<p>The S1 Mathematics Study Program is one of the study programs that was established as a new study program, which carries out the implementation of the elements of the Tridharma of Higher Education. In order to be able to realize the Tridharma mandate of Higher Education with quality, the S1 Mathematics Study Program formulates a vision as a direction of ideals to be achieved in the future through several stages and by involving internal and external stakeholders. As a work unit that is an integral part of the Habibie Institute of Technology, the vision of the S1 Mathematics Study Program is formulated in a harmonious and consistent manner with the vision of the Institute. In the end, the vision and mission are very important to formulate the study program curriculum.</p>\r\n<p><strong>The vision of the S1 Mathematics Study Program is:</strong></p>\r\n<p><strong>Become a Mathematics Study Program that produces graduates who are professional, competent, superior, moral and independent nationally and internationally</strong></p>\r\n<p>From the vision above, the study <strong>program\'s mission</strong> is determined, namely:</p>\r\n<ol>\r\n<li>Organizing a quality learning process with continuous improvement in the development of the field of Mathematics that is relevant to the needs of stakeholders</li>\r\n<li>Organizing quality research and service activities and community service</li>\r\n<li>Organizing mutually beneficial cooperation with various parties on an ongoing basis in the fields of education, research and service and community service</li>\r\n<li>Increasing the quantity and quality of learning facilities and infrastructure to improve the quality of education in a sustainable manner</li>\r\n<li>Produce graduates who are professional, entrepreneurial and have character</li>\r\n</ol>\r\n<p>In line with and consistent with the mission of the study program, the objectives of the S1 Mathematics Study Program are:</p>\r\n<p style=\"padding-left: 40px;\">1. Producing professionals in the field of Mathematics, who have the following attitudes and abilities:</p>\r\n<ul>\r\n<li style=\"list-style-type: none;\">\r\n<ul>\r\n<li>adapt to technological developments</li>\r\n<li>lifelong learning and tenacious</li>\r\n<li>think creatively, analytically and systematically</li>\r\n<li>entrepreneurship</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p style=\"padding-left: 40px;\">2. moral</p>\r\n<p style=\"padding-left: 40px;\">3. Produce research and community service in the field of Mathematics</p>\r\n<p style=\"padding-left: 40px;\">4. Generate acceptance and benefit for S1 Mathematics study programs through collaboration<br />with various parties</p>'),(45,'Program Studi Teknik Informatika','program-studi-teknik-informatika',4,2,1,0,6,'2022-02-14 01:59:08','2022-02-14 02:12:37','Program Studi Teknik Informatika','Informatics Engineering Study Program',NULL,'<p>Program Studi S1 Teknik Informatika merupakan salah satu program studi yang didirikan sebagai prodi baru <em>(new study program), </em>yang mengemban penyelenggaraan unsur-unsur Tridharma Perguruan Tinggi. Untuk dapat mewujudkan amanat Tridharma Perguruan Tinggi dengan berkualitas, Prodi S1 Teknik Informatika merumuskan visi sebagai arah cita-cita yang ingin dicapai di masa yang akan datang melalui beberapa tahap dan dengan melibatkan para pemangku kepentingan <em>(stakeholder) </em>internal dan eksternal. Sebagai unit kerja yang merupakan bagian integral dari Institut Teknologi Habibie, maka visi Prodi S1 Teknik Informatika dirumuskan secara selaras dan konsisten terhadap visi Institut. Visi dan misi pada akhirnya sangat penting untuk merumuskan kurikulum prodi.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Visi Prodi S1 Teknik Informatika adalah:</strong></p>\r\n<p><strong>Menjadi Program Studi Teknik Informatika yang menghasilkan lulusan yang profesional, kompeten, unggul, bermoral dan mandiri secara nasional dan internasional</strong></p>\r\n<p>Dari visi di atas ditetapkan <strong>misi prodi</strong>, yaitu:</p>\r\n<ol>\r\n<li>Menyelenggarakan proses pembelajaran berkualitas dengan&nbsp; peningkatan&nbsp; berkelanjutan dalam pengembangan bidang Teknik Informatika yang relevan dengan kebutuhan pemangku kepentingan</li>\r\n<li>Menyelenggarakan kegiatan penelitian dan pelayanan dan pengabdian kepada masyarakat yang berkualitas</li>\r\n<li>Menyelenggarakan kerjasama saling menguntungkan dengan berbagai pihak secara berkelanjutan dalam bidang pendidikan, penelitian dan pelayanan dan pengabdian kepada masyarakat</li>\r\n<li>Meningkatkan kuantitas dan kualitas sarana dan prasarana pembelajaran untuk peningkatan kualitas pendidikan secara berkelanjutan</li>\r\n<li>Menghasilkan lulusan yang profesional, berjiwa wirausaha dan berkarakter</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>Selaras dan konsisten dengan misi prodi ditetapkan <strong>tujuan Prodi </strong>S1 Teknik Informatika adalah:</p>\r\n<p style=\"padding-left: 40px;\">1. Menghasilkan tenaga profesional di bidang Teknik Informatika, yang memiliki sikap dan kemampuan sebagai berikut:</p>\r\n<ul>\r\n<li style=\"list-style-type: none;\">\r\n<ul>\r\n<li>beradaptasi terhadap perkembangan teknologi</li>\r\n<li>belajar sepanjang hayat dan ulet</li>\r\n<li>berfikir kreatif, analitis dan sistematis</li>\r\n<li>berwirausaha</li>\r\n<li>bermoral</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p style=\"padding-left: 40px;\">2. Menghasilkan penelitian dan pengabdian serta pelayanan kepada masyarakat dalam bidang Teknik Informatika</p>\r\n<p style=\"padding-left: 40px;\">3. Menghasilkan penerimaan dan kemanfaatan bagi prodi S1 Teknik Informatika melalui kerjasama dengan berbagai pihak</p>','<p>The Informatics Engineering S1 Study Program is one of the study programs established as a new study program, which carries out the implementation of the elements of the Tridharma of Higher Education. To be able to realize the mandate of the Tridharma of Higher Education with quality, the Informatics Engineering S1 Study Program formulates a vision as a direction of ideals to be achieved in the future through several stages and by involving internal and external stakeholders. As a work unit that is an integral part of the Habibie Institute of Technology, the vision of the Informatics Engineering Study Program is formulated in a harmonious and consistent manner with the vision of the Institute. In the end, the vision and mission are very important to formulate the study program curriculum.</p>\r\n<p>&nbsp;</p>\r\n<p><br /><strong>The vision of the Informatics Engineering S1 Study Program is:</strong></p>\r\n<p><strong>Become an Informatics Engineering Study Program that produces graduates who are professional, competent, superior, moral and independent nationally and internationally</strong></p>\r\n<p>From the vision above, the study <strong>program\'s mission</strong> is determined, namely:</p>\r\n<p>Organizing a quality learning process with continuous improvement in the development of the field of Informatics Engineering that is relevant to the needs of stakeholders<br />Organizing quality research and service activities and community service<br />Organizing mutually beneficial cooperation with various parties on an ongoing basis in the fields of education, research and service and community service<br />Increasing the quantity and quality of learning facilities and infrastructure to improve the quality of education in a sustainable manner<br />Produce graduates who are professional, entrepreneurial and have character</p>\r\n<p>&nbsp;</p>\r\n<p><br />In line with and consistent with the mission of the study program, the objectives of the Informatics Engineering S1 Study Program are:</p>\r\n<ol>\r\n<li>Produce professionals in the field of Informatics Engineering, who have the following attitudes and abilities:</li>\r\n</ol>\r\n<ul>\r\n<li>adapt to technological developments</li>\r\n<li>lifelong learning and tenacious</li>\r\n<li>think creatively, analytically and systematically</li>\r\n<li>entrepreneurship</li>\r\n<li>moral</li>\r\n</ul>\r\n<ol start=\"2\">\r\n<li>Produce research and community service in the field of Informatics Engineering</li>\r\n<li>Generate acceptance and benefit for the Informatics Engineering S1 study program through collaboration with various parties</li>\r\n</ol>'),(46,'Program Studi Sistem Informasi','program-studi-sistem-informasi',4,3,1,0,6,'2022-02-14 02:13:20','2022-02-14 02:23:07','Program Studi Sistem Informasi','Information Systems Study Program',NULL,'<p>Program Studi S1 Sistem Informasi merupakan salah satu program studi yang didirikan sebagai prodi baru <em>(new study program), </em>yang mengemban penyelenggaraan unsur-unsur Tridharma Perguruan Tinggi. Untuk dapat mewujudkan amanat Tridharma Perguruan Tinggi dengan berkualitas, Prodi S1 Sistem Informasi merumuskan visi sebagai arah cita-cita yang ingin dicapai di masa yang akan datang melalui beberapa tahap dan dengan melibatkan para pemangku kepentingan <em>(stakeholder) </em>internal dan eksternal. Sebagai unit kerja yang merupakan bagian integral dari Institut Teknologi Habibie, maka visi Prodi S1 Sistem Informasi dirumuskan secara selaras dan konsisten terhadap visi Institut. Visi dan misi pada akhirnya sangat penting &nbsp;untuk merumuskan kurikulum prodi.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Visi Prodi S1 Sistem Informasi adalah:</strong></p>\r\n<p><strong>Menjadi Program Studi Sistem Informasi yang menghasilkan lulusan yang profesional, kompeten, unggul, bermoral dan mandiri secara nasional dan internasional</strong></p>\r\n<p>Dari visi di atas ditetapkan <strong>misi prodi</strong>, yaitu:</p>\r\n<ol>\r\n<li>Menyelenggarakan proses pembelajaran berkualitas dengan peningkatan berkelanjutan dalam pengembangan bidang Sistem Informasi yang relevan dengan kebutuhan pemangku kepentingan</li>\r\n<li>Menyelenggarakan kegiatan penelitian dan pelayanan dan pengabdian kepada masyarakat yang berkualitas</li>\r\n<li>Menyelenggarakan kerjasama saling menguntungkan dengan berbagai pihak secara berkelanjutan dalam bidang pendidikan, penelitian dan pelayanan dan pengabdian kepada masyarakat</li>\r\n<li>Meningkatkan kuantitas dan kualitas sarana dan prasarana pembelajaran untuk peningkatan kualitas pendidikan secara berkelanjutan</li>\r\n<li>Menghasilkan lulusan yang profesional, berjiwa wirausaha dan&nbsp; Selaras dan konsisten dengan misi prodi ditetapkan <strong>tujuan Prodi </strong>S1 Sistem Informasi adalah:</li>\r\n</ol>\r\n<ol>\r\n<li>Menghasilkan tenaga profesional di bidang Sistem Informasi, yang memiliki sikap dan kemampuan sebagai berikut:\r\n<ul>\r\n<li>beradaptasi terhadap perkembangan teknologi</li>\r\n<li>belajar sepanjang hayat dan ulet</li>\r\n<li>berfikir kreatif, analitis dan sistematis</li>\r\n<li>berwirausaha</li>\r\n<li>bermoral</li>\r\n</ul>\r\n</li>\r\n<li>Menghasilkan penelitian dan pengabdian serta pelayanan kepada masyarakat dalam bidang sistem informasi</li>\r\n<li>Menghasilkan penerimaan dan kemanfaatan bagi prodi S1 Sistem Informasi melalui kerjasama dengan berbagai pihak</li>\r\n</ol>','<p>The Information Systems Undergraduate Study Program is one of the study programs established as a new study program, which carries out the implementation of the elements of the Tridharma of Higher Education. To be able to realize the mandate of the Tridharma of Higher Education with quality, the Information Systems S1 Study Program formulates a vision as a direction of ideals to be achieved in the future through several stages and by involving internal and external stakeholders. As a work unit that is an integral part of the Habibie Institute of Technology, the vision of the Information Systems Undergraduate Study Program is formulated in a harmonious and consistent manner with the vision of the Institute. In the end, the vision and mission are very important to formulate the study program curriculum.</p>\r\n<p>&nbsp;</p>\r\n<p><br /><strong>The vision of the S1 Information Systems Study Program is:</strong></p>\r\n<p><strong>Become an Information Systems Study Program that produces graduates who are professional, competent, superior, moral and independent nationally and internationally</strong></p>\r\n<p>From the vision above, <strong>the study program\'s mission</strong> is determined, namely:</p>\r\n<ol>\r\n<li>Organizing a quality learning process with continuous improvement in the development of the Information System field that is relevant to the needs of stakeholders</li>\r\n<li>Organizing quality research and service activities and community service</li>\r\n<li>Organizing mutually beneficial cooperation with various parties on an ongoing basis in the fields of education, research and service and community service</li>\r\n<li>Increasing the quantity and quality of learning facilities and infrastructure to improve the quality of education in a sustainable manner</li>\r\n<li>Produce graduates who are professional, entrepreneurial and have character.\r\n<p>In line with and consistent with the study program\'s mission, the objectives of the Information Systems Undergraduate Study Program are:</p>\r\n<ol>\r\n<li>Producing professionals in the field of Information Systems, who have the following attitudes and abilities:</li>\r\n</ol>\r\n<ul>\r\n<li>adapt to technological developments</li>\r\n<li>lifelong learning and tenacious</li>\r\n<li>think creatively, analytically and systematically</li>\r\n<li>entrepreneurship</li>\r\n<li>moral</li>\r\n</ul>\r\n<ol start=\"2\">\r\n<li>Produce research and community service in the field of information systems</li>\r\n<li>Generate acceptance and benefit for the Information Systems S1 study program through collaboration with various parties</li>\r\n</ol>\r\n</li>\r\n</ol>'),(48,'Laporan Tahunan','laporan-tahunan',2,4,0,1,0,'2024-02-06 02:19:33','2024-02-06 02:29:13','Laporan Tahunan','Laporan Tahunan',NULL,NULL,NULL);
/*!40000 ALTER TABLE `front_navbars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jumbotrons`
--

DROP TABLE IF EXISTS `jumbotrons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jumbotrons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `indtitle` varchar(255) NOT NULL,
  `engtitle` varchar(255) NOT NULL,
  `indsubtitle` varchar(255) DEFAULT NULL,
  `engsubtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `style` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jumbotrons`
--

LOCK TABLES `jumbotrons` WRITE;
/*!40000 ALTER TABLE `jumbotrons` DISABLE KEYS */;
INSERT INTO `jumbotrons` VALUES (2,'Institut Teknologi Bacharuddin Jusuf Habibie','Bacharuddin Jusuf Habibie Institute of Technology','Institut Teknologi Bacharuddin Jusuf Habibie','Bacharuddin Jusuf Habibie Institute of Technology','images/jumbotron/ySIYkTR3OYQSikXLkRmQxaZ66fI3ltfJJTKqZUR2.png','1','2021-11-29 08:53:46','2023-03-14 08:35:29');
/*!40000 ALTER TABLE `jumbotrons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `links` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `indtitle` varchar(255) NOT NULL,
  `engtitle` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `alt1` varchar(255) DEFAULT NULL,
  `alt2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (11,'LPPM-PM ITH','LPPM-PM ITH','http://lppm-pm.ith.ac.id/',NULL,NULL,'2022-01-31 14:45:52','2022-10-01 21:14:08'),(12,'Dokumen Terbuka','Open Document','http://od.ith.ac.id',NULL,NULL,'2022-10-01 21:12:35','2022-10-01 21:14:18'),(13,'Digital Library ITH','Digital Library ITH','http://digilab.ith.ac.id/',NULL,NULL,'2023-10-31 04:33:47','2023-10-31 04:33:47'),(14,'LMS ITH','LMS ITH','http://simpel.ith.ac.id/',NULL,NULL,'2023-10-31 04:36:55','2023-10-31 04:36:55');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_11_16_071908_create_categories_table',2),(6,'2021_11_16_072804_create_tags_table',3),(7,'2021_11_16_085046_create_posts_table',4),(8,'2021_11_16_085204_create_post_tag_table',4),(10,'2021_11_16_142142_create_pages_table',5),(11,'2021_11_16_152419_tambah_field_table_page',5),(12,'2021_11_17_091940_tambah_field_language',6),(13,'2021_11_19_023441_create_front_navbars_table',7),(14,'2021_11_19_032117_tambah_field_front_navbars',8),(15,'2021_11_19_110330_tambah_image_table_front_navbar',9),(16,'2021_11_19_142027_tambah_field_content_front_navbar',10),(18,'2021_11_24_044731_create_typesatus_table',11),(19,'2021_11_29_020229_create_contacts_table',12),(20,'2021_11_29_072425_create_jumbotrons_table',13),(22,'2021_12_01_085646_create_links_table',14),(23,'2023_02_20_045700_create_pmb_links_table',15);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `top_bar` int(11) NOT NULL DEFAULT 0,
  `side_bar` int(11) NOT NULL DEFAULT 0,
  `top` int(11) NOT NULL DEFAULT 0,
  `mid` int(11) NOT NULL DEFAULT 0,
  `bottom` int(11) NOT NULL DEFAULT 0,
  `alt1` text DEFAULT NULL,
  `alt2` int(11) NOT NULL DEFAULT 0,
  `alt3` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ind` text NOT NULL,
  `en` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Judul',1,1,1,0,1,'#244064',0,0,NULL,'2022-03-11 04:34:28','Beranda','Home');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pmb_links`
--

DROP TABLE IF EXISTS `pmb_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pmb_links` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pmb_links`
--

LOCK TABLES `pmb_links` WRITE;
/*!40000 ALTER TABLE `pmb_links` DISABLE KEYS */;
INSERT INTO `pmb_links` VALUES (1,'http://admission.ith.ac.id','2023-02-19 21:10:03','2024-01-22 09:33:04');
/*!40000 ALTER TABLE `pmb_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_tag` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `tag_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_tag_post_id_foreign` (`post_id`),
  KEY `post_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tag`
--

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
INSERT INTO `post_tag` VALUES (1,1,7,NULL,NULL),(3,3,7,NULL,NULL),(10,8,8,NULL,NULL),(17,52,7,NULL,NULL),(18,52,8,NULL,NULL),(20,20,7,NULL,NULL),(21,20,8,NULL,NULL),(22,30,8,NULL,NULL),(23,34,8,NULL,NULL),(27,65,7,NULL,NULL),(28,66,7,NULL,NULL),(29,66,8,NULL,NULL),(30,67,8,NULL,NULL);
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `meta_desc` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `engtitle` varchar(255) DEFAULT NULL,
  `eng` longtext DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_category_id_foreign` (`category_id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,1,'images/blog/69rY6rYyR2fabVa1wfnpkFLTHIsPEVUckeoseIfy.jpg','Artikel tersebut biasanya dipublikasikan di suatu media, mulai buletin, majalah, koran hingga website.','artikel-tersebut-biasanya-dipublikasikan-di-suatu-media-mulai-buletin-majalah-koran-hingga-website','<p>Menurut Kamus Besar Bahasa Indonesia (KBBI), artikel merupakan suatu karya tulis yang ditulis secara lengkap.Adapun tujuan secara umum dari pembuatan artikel ialah untuk memengaruhi, mendidik, memberitahu, meyakinkan, serta menghibur pembacanya. Artikel tersebut biasanya dipublikasikan di suatu media, mulai buletin, majalah, koran hingga website.Nah, untuk memahami lebih jelas tentang artikel, bisa membaca pengertian dari para ahli, ciri-ciri, kaidah kebahasaan hingga strukturnya.Berikut ini rangkuman tentang pengertian artikel menurut ahli, ciri-ciri, tujuan, manfaat, kaidah kebahasaan hingga strukturnya</p>','informasi',NULL,'2021-12-15','2021-11-26 19:36:13','2023-02-16 04:02:53',NULL,'The article is usually published in a media, ranging from bulletins, magazines, newspapers to websites.Well','<p>According to the Big Indonesian Dictionary (KBBI), an article is a written work that is written in full.The general purpose of making articles is to influence, educate, inform, convince, and entertain readers. The article is usually published in a media, ranging from bulletins, magazines, newspapers to websites.Well, to understand more clearly about the article, you can read the understanding of the experts, the characteristics, the linguistic rules to the structure.The following is a summary of the meaning of articles according to experts, their characteristics, objectives, benefits, linguistic rules to their structure</p>'),(3,2,1,'images/blog/t3N69oPbWMQe5VmBgIDgvrOAXai9r72t4RTpCTUx.jpg','Secara umum, institusi adalah lembaga yang menjadi aturan, mekanisme penegakan, dan organisasi.','secara-umum-institusi-adalah-lembaga-yang-menjadi-aturan-mekanisme-penegakan-dan-organisasi','<p>Secara umum, institusi adalah lembaga yang menjadi aturan, mekanisme penegakan, dan organisasi. Pembangunan institusi bisa terdiri dari pemerintah, pelaku usaha, dan anggota komunitas. Institusi ditandai oleh karakteristik praktik, kebiasaan, dan adat istiadat, yang diatur oleh norma-norma moral atau oleh ketentuan hukum. Fungsi institusi adalah untuk menghimpun pola-pola atau cara-cara yang diperlukan untuk mencapai tujuan tertentu.</p>','berita',NULL,'2021-12-02','2021-11-30 00:37:46','2022-03-11 04:24:54','2022-03-11 04:24:54','In general, institutions are institutions that become rules, enforcement mechanisms, and organizations.','<p>In general, institutions are institutions that become rules, enforcement mechanisms, and organizations. Institutional development can consist of government, business actors, and community members. Institutions are characterized by characteristic practices, customs, and customs, which are governed by moral norms or by legal provisions. The function of the institution is to collect patterns or methods needed to achieve certain goals.</p>'),(8,1,2,'images/blog/ZTmu8oWD3RdoZ3D7eNXEe9tmfJ7b6nq0BYIcQrbg.pdf','Rekrutmen Calon Anggota Satgas PPKS ITH','Rekrutmen-Calon-Anggota-Satgas-PPKS-ITH','<p>Rekrutmen Calon Anggota Satgas Pencegahan dan Penanganan Kekerasan Seksual (PPKS) ITH telah dibuka. Bagi yang berminat mengikuti rekrutmen calon anggota Satgas, silakan siapkan berkasnya dan mendaftarkan diri pada tautan:<br /><a href=\"https://bit.ly/FORMULIRSATGASPPKSITH\">https://bit.ly/FORMULIRSATGASPPKSITH</a></p>\r\n<p>Adapun format formulir pendaftaran, Daftar Riwayat Hidup, &amp; Surat Rekomendasi dapat diunduh pada tautan: <a href=\"https://bit.ly/BERKASSATGASPPKSITH\">https://bit.ly/BERKASSATGASPPKSITH</a></p>\r\n<p>&nbsp;</p>','informasi',NULL,'2022-11-23','2021-11-30 04:04:29','2022-11-22 23:46:43','2022-11-22 23:46:43','Announcement of Recruitment of Prospective PPKS ITH Task Force Members','<p>Recruitment for Prospective Members of the ITH Prevention and Handling of Sexual Violence Task Force (PPKS) has opened. For those interested in participating in the recruitment of prospective Task Force members, please prepare the files and register at the link:</p>\r\n<p><a href=\"https://bit.ly/FORMULIRSATGASPPKSITH\">https://bit.ly/FORMULIRSATGASPPKSITH</a></p>\r\n<p>&nbsp;</p>\r\n<p>The registration form, Curriculum Vitae, &amp; Letter of Recommendation can be downloaded at the link:</p>\r\n<p><a href=\"https://bit.ly/BERKASSATGASPPKSITH\">https://bit.ly/BERKASSATGASPPKSITH</a></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),(20,2,1,'images/blog/DkAnOd8BDMlmYu8aR0vDro6kIemYsXfQzUYhNNdi.jpg','Informatika merupakan disiplin ilmu komputer','informatika-merupakan-disiplin-ilmu-komputer','<p>Informatika merupakan disiplin ilmu komputer yaitu data maupun informasi pada mesin berbasis komputasi. Disiplin ilmu ini mencakup beberapa macam bidang, termasuk di dalamnya: sistem informasi, ilmu komputer, ilmu informasi, teknik komputer dan aplikasi informasi dalam sistem informasi manajemen Informatika merupakan disiplin ilmu komputer yaitu data maupun informasi pada mesin berbasis komputasi. Disiplin ilmu ini mencakup beberapa macam bidang, termasuk di dalamnya: sistem informasi, ilmu komputer, ilmu informasi, teknik komputer dan aplikasi informasi dalam sistem informasi manajemen</p>','berita',NULL,'2021-12-03','2021-11-30 03:58:45','2022-03-11 04:24:49','2022-03-11 04:24:49','Informatics is a computer science discipline','<p>Informatics is a computer science discipline, namely data and information on computing-based machines. This discipline covers several fields, including: information systems, computer science, information science, computer engineering and information applications in management information systems. Informatics is a computer science discipline, namely data and information on computing-based machines. This discipline covers several fields, including: information systems, computer science, information science, computer engineering and information applications in management information systems.</p>'),(30,1,1,'images/blog/m1OuPVc5g8B8f9BhyHiU804nbkYMH1hGXZDGDMHW.jpg','Ada yang mendefinisikan bahwa arti mahasiswa pun bisa menjadi kebanggaan sendiri.','ada-yang-mendefinisikan-bahwa-arti-mahasiswa-pun-bisa-menjadi-kebanggaan-sendiri','<p>Ada yang mendefinisikan bahwa arti mahasiswa pun bisa menjadi kebanggaan sendiri. Selain mendapatkan gelar dan stigma positif menjadi mahasiswa itu keren. Ternyata ada beberapa fakta dibalik arti mahasiswa. Tentu saja fakta tersebut tidak seenak saat kita mendapatkan label positif dari masyarakat. Mahasiswa memiliki peran dan tanggungjawab yang besar. Kembali fokus ke Arti mahasiswa. Ternyata bagi setiap orang pun berbeda-beda. Setiap mahasiswa itu sendiri, mengartikan dirinya mahasiswa seperti apa dan bagaimana pun juga akan bervariasi. Nah, berikut beberapa arti mahasiswa dan peran fungsi mahasiswa.</p>','informasi',NULL,'2021-12-01','2021-11-30 04:01:10','2022-03-11 03:30:55','2022-03-11 03:30:55','There are those who define that the meaning of students can be their own pride.','<p>There are those who define that the meaning of students can be their own pride. Besides getting a degree and the positive stigma of being a student is cool. It turns out that there are several facts behind the meaning of student. Of course, this fact is not as good as when we get a positive label from the community. Students have a big role and responsibility. Back to focus on Meaning student. Turns out it\'s different for everyone. Each student himself, interpreting himself as a student and in any way will vary. Well, here are some meanings of students and the role of student functions.</p>'),(34,1,1,'images/blog/KGJqnXWTyqMgzyFUEI7vlglqKbQzA0gF6fZfzQez.jpg','Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif','sarana-untuk-menyampaikan-ide-penulis-dalam-mengembangkan-daya-imajinasi-serta-kreatif','<p>Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif, Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif, Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif, Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif, Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif, Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif, Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif, Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif, Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif, Sarana untuk menyampaikan ide penulis dalam mengembangkan daya imajinasi serta kreatif</p>\r\n<p>&nbsp;</p>','informasi',NULL,'2021-11-29','2021-11-26 19:40:31','2022-03-11 03:30:58','2022-03-11 03:30:58','Means for conveying author\'s ideas in developing imagination and creative power','<p>Means for conveying author\'s ideas in developing imagination and creative power, Means for conveying author\'s ideas in developing imagination and creative power, Means for conveying author\'s ideas in developing imagination and creative power Means for conveying author\'s ideas in developing imagination and creative power, Means for conveying author\'s ideas in developing imagination and creative power, Means for conveying author\'s ideas in developing imagination and creative power, Means for conveying author\'s ideas in developing imagination and creative power, Means for conveying author\'s ideas in developing imagination and creative power, Means for conveying author\'s ideas in developing imagination and creative power, Means for conveying author\'s ideas in developing imagination and creative power, Means for conveying author\'s ideas in developing imagination and creative power, Means for conveying author\'s ideas in developing imagination and creative power Means for conveying author\'s ideas in developing imagination and creative power, Means for conveying author\'s ideas in developing imagination and creative power, Means for conveying author\'s ideas in developing imagination and creative power</p>\r\n<p>&nbsp;</p>'),(52,2,1,'images/blog/VYBb2tD9JU8iXbBpF1LT4yekvbBddvDLQMGSpU6t.png','Teknik elektro atau biasa disebut teknik listrik adalah salah satu bidang ilmu teknik mengenai aplikasi listrik untuk memenuhi kebutuhan dari kehidupan manusia','teknik-elektro-atau-biasa-disebut-teknik-listrik-adalah-salah-satu-bidang-ilmu-teknik-mengenai-aplikasi-listrik-untuk-memenuhi-kebutuhan-dari-kehidupan-manusia','<p style=\"text-align: left;\">Teknik elektro atau biasa disebut teknik listrik adalah salah satu bidang ilmu teknik mengenai aplikasi listrik untuk memenuhi kebutuhan dari kehidupan manusia. teknik elektro melibatkan konsep, perencanaan, pengembangan, dan produksi perangkat listrik dan elektronik yang dibutuhkan oleh masyarakat. Orang yang sudah ahli dibidang teknik bisanya disebut Enginer. Enginer elektro memegang peranan penting dalam mengembangkan dan memajukan teknologi tinggi dalam dunia telekomunikasi, energi dan aplikasi lainnya dari perangkat listrik dan elektronik. Enginer elektro juga bekerjasama dengan enginer dari bidang lain, seperti kimia, mesin, dan sipil untuk merancang, mengembangkan dan membantu berbagai macam produk dan jasa seperi sistem distribusi energi, komputer, sistem satelit, radio, sistem radar, mobil listrik, dan masih banyak lainnya yang melibatkan komponen listrik dan elektronik. Pengertian teknik elektro adalah ilmu teknik atau rekayasa yang mempelajari sifat-sifat elektron atau sifat-sifat kelistrikan yang kemudian diaplikasikan pada kehidupan sehari-hari. Berasal dari bahasa Inggris electrical engineering, yang bisa diartikan dengan teknik listrik.</p>','berita',NULL,'2021-11-27','2021-11-30 00:57:40','2022-03-11 04:24:52','2022-03-11 04:24:52','Electrical engineering or commonly called electrical engineering is one of the fields of engineering science regarding the application of electricity to meet the needs of human life','<p>Electrical engineering or commonly called electrical engineering is one of the fields of engineering science regarding the application of electricity to meet the needs of human life. Electrical engineering involves the concept, planning, development, and production of electrical and electronic devices required by society. People who are experts in the field of engineering are usually called engineers. Electrical engineers play an important role in developing and advancing high technology in the world of telecommunications, energy and other applications of electrical and electronic devices. Electrical engineers also work closely with engineers from other fields, such as chemical, mechanical, and civil to design, develop and assist various products and services such as energy distribution systems, computers, satellite systems, radio, radar systems, electric cars, and many others. involving electrical and electronic components. The definition of electrical engineering is engineering or engineering that studies the properties of electrons or electrical properties which are then applied to everyday life. Derived from English electrical engineering, which can be interpreted as electrical engineering.</p>'),(65,2,2,'images/blog/sFBmtoub1eW1MwDwzYF0TWFr0n0O2MxxRQKZnTcW.jpg','Pelantikan Prof. Ir. Ansar Suyuti, MT. Sebagai Rektor ITH Parepare','pelantikan-prof-ir-ansar-suyuti-mt-sebagai-rektor-ith-parepare','<p style=\"text-align: center;\"><sup>Wali Kota Parepare Taufan Pawe mengucapkan selamat atas pelantikan Ansar Suyuti selaku Rektor Institut Teknologi Bacharuddin Jusuf Habibie (ITH).</sup><br /><br /></p>\r\n<p>Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) menggelar Upacara Pelantikan Pejabat dalam lingkungan Kemendikbudristek, Selasa (05/10/2021) kemarin, di Plaza Insan Beprestasi Kantor Kemdibudristek Jakarta.&nbsp;Upacara pelantikan ini dipimpin oleh Sekretaris Jenderal Kemendikbudristek, Ir. Suharti, M.A., PhD. Dalam acara itu, dilakukan pelantikan terhadap Pejabat Pimpinan Tinggi Pratama dan Pemimpin Perguruan Tinggi Negeri dan Pejabat Pengawas. Terdapat 13 pejabat yang dilantik yaitu 2 Pejabat Pimpinan Tinggi Pratama, 4 Rektor, 6 Direktur dan 1 Pejabat Pengawas.</p>\r\n<p>Salah satu pejabat yang dilantik adalah Prof. Dr. Ir. Ansar Suyuti, MT., selaku Rektor Institut Teknologi Bacharuddin Jusuf Habibie (ITH) yang dulunya dikenal dengan sebutan ITH. Institut teknologi ini merupakan Perguruan Tinggi Negeri baru di lingkungan Kemendikbudristek yang berlokasi di Kota Parepare, Sulawesi Selatan yang digagas oleh Wali Kota Parepare Taufan Pawe.</p>\r\n<p>Ansar Suyuti adalah Guru Besar pada Departemen Teknik Elektro, Fakultas Teknik Unhas. Ia dipercaya menjadi Rektor Pertama ITH setelah melalui proses seleksi yang dilakukan secara langsung oleh Kemendikbudristek. Universitas Hasanuddin sebagai Institusi Pembina ITH diminta mengusulkan nama Calon Rektor, dimana proses selanjutnya menjadi kewenangan Kemendikbudristek.</p>\r\n<p>Dalam pelantikan yang dilakukan secara luring tersebut, Sekretaris Jenderal Kemendikbudristek menyampaikan harapan kepada para pejabat baru untuk melaksanakan pemerintahan dalam upaya mencerdaskan kehidupan bangsa.&nbsp;&ldquo;Para pejabat baru perlu memastikan kebijakan dan program kita, direncanakan dengan baik, dilaksanakan dengan akuntabilitas yang baik, serta diawasi dengan seksama sehingga dapat memberikan manfaat untuk mencerdaskan kehidupan bangsa,&rdquo; kata Suharti.</p>\r\n<p>Kepada Rektor dan Direktur yang baru dilantik diharapkan menghasilkan terobosan dalam pengembangan ilmu pengetahuan dan teknologi pada berbagai bidang yang dapat dimanfaatkan, menguatkan kolaborasi berkelanjutan antara perguruan tinggi dan dunia usaha/dunia industri (DUDI) serta pemangku kepentingan untuk mendukung program Merdeka Belajar Kampus Merdeka.&nbsp;Secara khusus, Sekretaris Jenderal Kemendikbudristek menitipkan pesan kepada Rektor ITH agar memanfaatkan momentum berdirinya ITH sebagai PTN baru untuk membangun fondasi tata kelola yang mendukung tumbuhnya semangat kreatif dan inovasi serta memastikan program kampus merdeka dapat dilaksanakan dengan amat baik.</p>\r\n<p>Dengan pelantikan Rektor Pertama ITH ini menandakan dimulainya operasionalisasi kampus yang digagas oleh Walikota Parepare, Dr. Taufan Pawe, SH., MH dengan menggandeng Unhas sebagai induk semang. ITBH Parepare merupakan Institut Teknologi Negeri ke-5 di Indonesia (setelah ITB, ITS, ITERA dan ITK). Kehadiran ITH juga menjadikan Pulau Sulawesi resmi memiliki institut teknologi negeri setelah Pulau Jawa, Sumatera dan Kalimantan.&nbsp;Hadirnya ITBH juga menjadi kebanggaan masyarakat Pulau Sulawesi dan khususnya Sulawesi Selatan karena akses memperoleh pendidikan tinggi negeri semakin terbuka. ITH menjadi PTN ke-5 di Sulawesi Selatan yang berada dibawah naungan Kemendikbudristek.</p>\r\n<p>Wali Kota Parepare, Taufan Pawe sebagai penggagas hadirnya ITH menyampaikan ucapan selamat kepada rektor pertama yang dilantik.&nbsp;</p>\r\n<p>Taufan berharap, Rektor pertama ITH yang dilantik dapat segera menuntaskan semua administrasi sehingga perguruan tinggi kebanggaan masyarakat Parepare dan Sulsel itu dapat beroperasi dan segera menerima mahasiswa baru.&nbsp;&ldquo;ITH merupakan kebanggaan masyarakat Parepare dan Sulawesi Selatan. Janji saya menghadirkan universitas negeri di kota tercinta adalah wujud cinta saya untuk kota kelahiran saya dan untuk Sulawesi Selatan,&rdquo; kata Taufan.</p>','Berita',NULL,'2021-10-07','2022-03-11 04:24:42','2022-03-11 04:28:40',NULL,'Inauguration of Prof. Ir. Ansar Suyuti, MT. As Chancellor of ITH Parepare','<p>The Ministry of Education, Culture, Research and Technology (Kemendikbudristek) held an Official Inauguration Ceremony within the Ministry of Education and Culture, Tuesday (05/10/2021) yesterday, at the Insan Beprestasi Plaza, Kemdibudristek Office, Jakarta. The inauguration ceremony was led by the Secretary General of the Ministry of Education and Culture, Ir. Suharti, M.A., PhD. During the event, the inauguration of the Primary and State University Leaders and Supervisory Officers was held. There were 13 officials who were inaugurated, namely 2 Primary Executive Officers, 4 Chancellors, 6 Directors and 1 Supervisory Officer.</p>\r\n<p>One of the inaugurated officials is Prof. Dr. Ir. Ansar Suyuti, MT., as Chancellor of the Bacharuddin Jusuf Habibie Institute of Technology (ITH), formerly known as ITH. This technology institute is a new State University within the Ministry of Education and Culture located in Parepare City, South Sulawesi which was initiated by the Mayor of Parepare, Taufan Pawe.</p>\r\n<p>Ansar Suyuti is a Professor at the Department of Electrical Engineering, Faculty of Engineering Unhas. He was trusted to be the First Chancellor of ITH after going through a selection process carried out directly by the Ministry of Education and Culture. Hasanuddin University as the ITH Guiding Institution was asked to propose the name of the Chancellor Candidate, where the next process was the authority of the Ministry of Education and Culture.</p>\r\n<p>In the offline inauguration, the Secretary General of the Ministry of Education and Culture expressed hope for new officials to carry out government in an effort to educate the nation\'s life. \"New officials need to ensure that our policies and programs are well planned, implemented with good accountability, and carefully monitored so that they can provide benefits for the intellectual life of the nation,\" said Suharti.</p>\r\n<p>The newly appointed Chancellors and Directors are expected to produce breakthroughs in the development of science and technology in various fields that can be utilized, strengthening sustainable collaboration between universities and the business/industrial world (DUDI) as well as stakeholders to support the Merdeka Learn Campus program. In particular, the Secretary General of the Ministry of Education and Culture left a message to the Chancellor of ITH to take advantage of the momentum of the establishment of ITH as a new state university to build a governance foundation that supports the growth of creative and innovative spirit and ensures that the independent campus program can be implemented very well.</p>\r\n<p>With the inauguration of the First Chancellor of ITH, it marks the start of campus operations initiated by the Mayor of Parepare, Dr. Taufan Pawe, SH., MH by cooperating with Unhas as the landlady. ITBH Parepare is the 5th State Institute of Technology in Indonesia (after ITB, ITS, ITERA and ITK). The presence of ITH also makes Sulawesi Island officially have a state technology institute after Java, Sumatra and Kalimantan. The presence of ITBH has also become the pride of the people of Sulawesi Island and especially South Sulawesi because access to public higher education is increasingly open. ITH is the 5th PTN in South Sulawesi under the auspices of the Ministry of Education and Culture.</p>\r\n<p>The Mayor of Parepare, Taufan Pawe, as the initiator of the presence of ITH, congratulated the first Chancellor who was sworn in.</p>\r\n<p>Taufan hopes that the first Chancellor of ITH who is inaugurated can immediately complete all administration so that the university, the pride of the people of Parepare and South Sulawesi, can operate and immediately accept new students. &ldquo;ITH is the pride of the people of Parepare and South Sulawesi. My promise to present a state university in my beloved city is a form of my love for my hometown and for South Sulawesi,&rdquo; said Taufan.</p>\r\n<p>&nbsp;</p>'),(66,2,2,'images/blog/PTBBiJNnjdk6o6U7tPWcsBqoUYDRD3pCAKsvyfrJ.jpg','Rektor ITH Lantik Lima Pejabat Akademisi','rektor-ith-lantik-lima-pejabat-akademisi','<p>Rektor Institut Teknologi Habibie (ITH) Prof. Ir. Ansar Suyuti, MT., melantik lima pejabat akademisi ITH Parepare, di Kampus I ITH Parepare, Jumat (11/02/2022).</p>\r\n<p>Pejabat tersebut diantaranya, Wakil Rektor Bidang Non Akademik diisi Dr. Mohammad Mochsen Sir dan Wakil Rektor Bidang Akademik Dr. Eng. Armin Lawu. Ketua Lembaga Penelitian dan Pengabdian kepada Masyarakat (LPPM) dan Lembaga Penjaminan Mutu Universitas (LPMU) dijabat Dr. Eng. Intan Sari Areni. Ketua Jurusan Sains dijabat Dr. Andi Ilham Latunra dan Ketua Jurusan Teknologi Produksi dan Industri diisi Dr. Indar Chaerah Gunadin.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/2/IMG-20220211-WA0037.jpg\" alt=\"\" width=\"600\" height=\"450\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Rektor ITH Parepare Prof. Ir. Ansar Suyuti, MT. mengatakan, pejabat yang dilantik tersebut juga akan melakukan proses mengajar.</p>\r\n<p>Ia mengatakan setelah pelantikan tersebut, hal pertama dilakukan itu, awal Maret 15 dosen pns dan pegawai mulai aktif. Selanjutnya akan dilakukan promosi penerimaan mahasiswa baru yang rencananya dibuka antara bulan Mei dan Juni 2022 mendatang.</p>\r\n<p>&ldquo;Jurusan ITH, Matematika ada 80 mahasiswa yang akan diterima, sistem informasi 120 mahasiswa, teknik informatika 160 mahasiswa,&rdquo; tuturnya.</p>\r\n<p>Setelah itu katanya akan membuat proposal untuk membuka Program Studi Baru (Prodi) baru. Ia berharap, dengan pejabat yang dilantik tersebut akan membuka prodi baru sehingga tahun 2023 paling tidak katanya ITH sudah memiliki 10 Prodi jadi bukan lagi tiga.</p>','Berita',NULL,'2022-03-11','2022-03-11 04:27:15','2022-03-11 04:33:55',NULL,'ITH Chancellor Appoints Five Academic Officers','<p>The Chancellor of the Habibie Institute of Technology (ITH) Prof. Ir. Ansar Suyuti, M.T, inaugurated five ITH Parepare academic officials, at Campus I ITH Parepare, Friday (11/02/2022).</p>\r\n<p>These officials include the Vice Chancellor for Non-Academic Affairs filled with Dr. Mohammad Mochsen Sir and Vice Chancellor for Academic Affairs Dr. eng. Armin Lawu. The chairman of the Institute for Research and Community Service (LPPM) and the University Quality Assurance Institute (LPMU) is Dr. eng. Intan Sari Areni. The Head of the Science Department is Dr. Andi Ilham Latunra and the Head of the Department of Production and Industrial Technology, filled with Dr. Indar Chaerah Gunadin.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/2/IMG-20220211-WA0037.jpg\" alt=\"\" width=\"600\" height=\"450\" /></p>\r\n<p>&nbsp;</p>\r\n<p>ITH Parepare Chancellor Prof. Ir. Ansar Suyuti, MT. said the appointed official would also carry out the teaching process.<br />He said that after the inauguration, the first thing to do was, in early March 15 civil servant lecturers and employees began to be active. Furthermore, there will be promotion of new student admissions which is planned to be opened between May and June 2022.<br />\"Department of ITH, Mathematics there are 80 students who will be accepted, information systems 120 students, informatics engineering 160 students,\" he said.<br />After that he said he would make a proposal to open a new Study Program (Prodi). He hopes that with the inaugurated officials, they will open new study programs so that by 2023 at least, he said, ITH already has 10 study programs, so there are no longer three.</p>'),(67,1,2,'images/blog/bOBuosUU5Cp3wzp3pC8eEDDOnIWEwAZpg2EIeYQZ','Rekrutmen Calon Anggota Satgas PPKS  Institut Teknologi Bacharuddin Jusuf Habibie (ITH)','rekrutmen-calon-anggota-satgas-ppks-institut-teknologi-bacharuddin-jusuf-habibie-ith','<p>Rekrutmen Calon Anggota Satgas Pencegahan dan Penanganan Kekerasan Seksual (PPKS) ITH telah dibuka. Bagi yang berminat mengikuti rekrutmen calon anggota Satgas, silakan siapkan berkasnya dan mendaftarkan diri pada tautan:<br /><a href=\"https://bit.ly/FORMULIRSATGASPPKSITH\">https://bit.ly/FORMULIRSATGASPPKSITH</a></p>\r\n<p>Adapun format formulir pendaftaran, Daftar Riwayat Hidup, &amp; Surat Rekomendasi dapat diunduh pada tautan: <a href=\"https://bit.ly/BERKASSATGASPPKSITH\">https://bit.ly/BERKASSATGASPPKSITH</a></p>\r\n<p>&nbsp;</p>\r\n<p>Link Pengumuman Rekrutmen:</p>\r\n<p><a title=\"Rekrutmen Calon Anggota Satgas PPKS ITH\" href=\"https://drive.google.com/file/d/1OFopo-G4rHtCDxBnnKK1dVMKx_W4LPd5/view?usp=share_link\">https://drive.google.com/file/d/1OFopo-G4rHtCDxBnnKK1dVMKx_W4LPd5/view?usp=share_link</a></p>','Informasi',NULL,'2022-11-23','2022-11-22 23:46:13','2023-02-15 06:00:01',NULL,'Announcement of Recruitment of Prospective PPKS ITH Task Force Members','<p>Recruitment for Prospective Members of the ITH Prevention and Handling of Sexual Violence Task Force (PPKS) has opened. For those interested in participating in the recruitment of prospective Task Force members, please prepare the files and register at the link:</p>\r\n<p><a href=\"https://bit.ly/FORMULIRSATGASPPKSITH\">https://bit.ly/FORMULIRSATGASPPKSITH</a></p>\r\n<p>&nbsp;</p>\r\n<p>The registration form, Curriculum Vitae, &amp; Letter of Recommendation can be downloaded at the link:</p>\r\n<p><a href=\"https://bit.ly/BERKASSATGASPPKSITH\">https://bit.ly/BERKASSATGASPPKSITH</a></p>\r\n<p>&nbsp;</p>\r\n<p>Recruitment Announcement Link:</p>\r\n<p><a title=\"Rekrutmen Calon Anggota Satgas PPKS ITH\" href=\"https://drive.google.com/file/d/1OFopo-G4rHtCDxBnnKK1dVMKx_W4LPd5/view?usp=share_link\">https://drive.google.com/file/d/1OFopo-G4rHtCDxBnnKK1dVMKx_W4LPd5/view?usp=share_link</a></p>');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `engtitle` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `meta_desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_name_unique` (`name`),
  UNIQUE KEY `tags_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (7,'Rektor','Rector','rektor','rektor',NULL,'2021-11-26 19:34:25','2021-12-02 03:30:11'),(8,'Mahasiswa','Student','mahasiswa','Mahasiswa',NULL,'2021-11-30 00:54:05','2021-11-30 00:54:05');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typesatus`
--

DROP TABLE IF EXISTS `typesatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typesatus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) NOT NULL,
  `submenu` varchar(255) NOT NULL,
  `engmenu` varchar(255) DEFAULT NULL,
  `engsubmenu` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `engdesc` longtext NOT NULL,
  `alt1` int(11) NOT NULL DEFAULT 0,
  `alt2` int(11) NOT NULL DEFAULT 0,
  `alt3` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `typesatus_menu_unique` (`menu`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typesatus`
--

LOCK TABLES `typesatus` WRITE;
/*!40000 ALTER TABLE `typesatus` DISABLE KEYS */;
INSERT INTO `typesatus` VALUES (22,'Sambutan','Rektor Institut Teknologi BJ Habibie','Welcoming Speech','Rector of Institute Technology of BJ Habibie','rektor','BannerTOZED.png','1','<p align=\"justify\">\n<i>Selamat datang di Institut Teknologi Bacharuddin Jusuf Habibie (ITH).</i> <br><br>\nITH memiliki visi menjadi Institut yang unggul, memiliki daya saing, berstandar internasional yang menjunjung tinggi martabat kemanusiaan, berwawasan lingkungan dan berbasis entrepreneurship. Kami berkomitmen menyelenggarakan pendidikan akademik dalam sejumlah rumpun ilmu pengetahuan dan teknologi tertentu. Semoga di masa yang akan datang ITH menghasilkan Habibie-Habibie  baru yang akan mensejahterakan masyarakat melalui pengembangan IPTEKS, baik di kota Pare-pare, Indonesia, maupun Internasional.<br>\nSelamat bergabung dengan Kampus Teknologi Masa Depan di Kota Cinta. <br><br>\n<strong>Prof. Dr. Ir. Ansar Suyuti, SH.,MT., IPU., ASEAN.Eng</strong></p>\n','Welcome to ITH.\nITH has a vision to become an excellent, competitive, international standard institute that upholds human dignity, is environmentally sound and entrepreneurship-based. We are committed to providing academic education in a number of specific science and technology clusters. Hopefully in the future ITH will produce new Habibies who will prosper the community through the development of science and technology, both in the city of Pare-Pare, Indonesia, and internationally.\nWelcome to the Future Technology Campus in the City of Love.',0,0,1,'2021-11-26 09:32:20','2023-02-19 20:38:19'),(23,'Sejarah Singkat','Institut Teknologi Habibie','History','Habibie Institute of Technology ','sejarah-singkat','BannerFA03P.png','1','<p align=\"justify\">Berdirinya Institut Teknologi B.J. Habibie (ITH) di Kota Parepare melalui perjuangan panjang Bapak Walikota Parepare (Dr. H.M. Taupan Pawe) dan Tim  yang menjawab keraguan orang akan lahirnya Perguruan Tinggi Negeri di Kota Parepare.\n\nIde pendirian ITH, bermula ketika Presiden Republik Indonesia ke 6  Bapak Susilo Bambang Yudoyono berkunjung ke Kota Parepare,  pada hari Kamis tanggal 20 Februari 2014 lalu.  Bapak Presiden bermalam di Rumah Jabatan Walikota  dan ditempat  itulah Bapak Walikota Parepare berdiskusi dengan beliau dan melontarkan ide-ide cemerlang untuk menjadikan B.J.Habibie sebagai sumber inspirasi, kemudian tercetuslah keinginan Bapak Walikota (H.M. Taupan Pawe) untuk mendirikan Institut Teknologi Habibie ditempat kelahirannya. Inisiatif itu sambut baik oleh Bapak Presiden dan memanggil Menteri Pendidikan dan Kebudayaan RI (Prof. Dr. Muhammad Nuh) untuk menindaklanjuti keinginan Walikota Parepare.\n\nBerdirilah INSTITUT TEKNOLOGI B.J. HABIBIE (ITH), kemudian berubah nama menjadi INSTITUT TEKNOLOGI  BACHARUDDIN JUSUF HABIBIE (ITBH)  melalui Peraturan Presisden Nomor 152 Tahun 2014, tanggal 17 Oktober 2014 yang ditandatangani oleh Presiden  H. Susilo Bambang Yudoyono.\n\nSetelah melalui proses yang panjang dalam izin operasionalnya, maka terbitlah peraturan kelembagaan dan tata kerja melalui Peraturan Menteri Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Republik Indonesia, Nomor 21 Tahun 2021 pada tanggal 4 Agustus 2021,  Organisasi dan Tata Kerja. Maka mulai tanggal 14 Agustus 2021 secara resmi Institut Teknologi  B.J. Habibie mulai beroperasi. </p>','The establishment of the B.J. Institute of Technology Habibie (ITH) in Parepare City through the long struggle of the Mayor of Parepare (Dr. H.M. Taupan Pawe) and the team who answered people\'s doubts about the birth of a State University in Parepare City.\n\nThe idea of ​​establishing ITH began when the 6th President of the Republic of Indonesia, Mr. Susilo Bambang Yudoyono, visited the City of Parepare, on Thursday, February 20, 2014. The President spent the night at the Mayor\'s Office and that\'s where the Mayor of Parepare discussed with him and flashed bright ideas to make B.J. Habibie a source of inspiration, then the Mayor\'s desire (H.M. Taupan Pawe) to establish the Habibie Institute of Technology was born in his place of birth. The President welcomed the initiative and summoned the Minister of Education and Culture of the Republic of Indonesia (Prof. Dr. Muhammad Nuh) to follow up on the wishes of the Mayor of Parepare.\n\nB.J. INSTITUTE OF TECHNOLOGY HABIBIE (ITH), later changed its name to INSTITUTE OF TECHNOLOGY BACHARUDDIN JUSUF HABIBIE (ITBH) through Presidential Regulation Number 152 of 2014, dated October 17, 2014 which was signed by President H. Susilo Bambang Yudoyono.\n\nAfter going through a long process of obtaining an operational permit, institutional regulations and work procedures were issued through the Regulation of the Minister of Education, Culture, Research and Technology of the Republic of Indonesia, Number 21 of 2021 on August 4, 2021, Organization and Work Procedures. So starting on August 14, 2021, the B.J. Habibie started operating.',0,0,3,'2021-11-26 19:20:20','2023-02-19 20:53:57');
/*!40000 ALTER TABLE `typesatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Rendra Syam','user@user.ac.id',NULL,'$2y$10$O331FHOF5UI2vXfm.mlhWu95yV3/O0SC6k5CPFwfTIaGXW4CFw0PK',NULL,'2021-11-16 01:02:04','2021-11-16 01:02:04'),(2,'Admin Web','adminweb@ith.ac.id',NULL,'$2y$10$Ro05UaAA7QXbKjuJtC7awuY93WbKtDPaMkCF1zl10grwEdSgJoEQS','asInTLY5mVFsP3IAL3stAL7Ug2cgLWzgJNVYEDDryyvFlBC8xG7DYbZpf7Vz',NULL,NULL),(18,'asfasf','yucaerin@hotmail.com',NULL,'$2y$10$4VHWhXIU/hkY/7rWcOJDYuI9usk.B9gJOzcSmyW4nw6gsUqc/K0Zm',NULL,'2023-04-16 20:58:07','2023-04-16 20:58:07'),(19,'adadad','bangsat@jyby.io',NULL,'$2y$10$N3B8TeDd9AUQW8CDyl4G8OviSCnbMCGerb6UCePgRepyDd1s0A7CO',NULL,'2023-12-31 04:58:29','2023-12-31 04:58:29'),(20,'adadad','bangsatt@jyby.io',NULL,'$2y$10$Wi2QSrXepxBUEgjuoEF6DOrYJ/FEErMD2QCIw2movFg1Ikf24TEzG',NULL,'2023-12-31 05:11:20','2023-12-31 05:11:20');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-07 12:44:07
