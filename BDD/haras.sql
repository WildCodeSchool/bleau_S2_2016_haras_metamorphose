-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2016 at 02:42 PM
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haras`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `structure_id` int(11) DEFAULT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `name`, `title_id`, `content_id`, `structure_id`, `created_at`) VALUES
(5, 'ffdkfhd', 115, 116, 4, '2016-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `articles_medias`
--

CREATE TABLE `articles_medias` (
  `article_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles_medias`
--

INSERT INTO `articles_medias` (`article_id`, `media_id`) VALUES
(5, 37);

-- --------------------------------------------------------

--
-- Table structure for table `article_structure`
--

CREATE TABLE `article_structure` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article_structure`
--

INSERT INTO `article_structure` (`id`, `name`) VALUES
(2, 'imageLeft'),
(1, 'imageRight'),
(3, 'slider'),
(4, 'video');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'section1'),
(2, 'section2'),
(3, 'section3'),
(4, 'section4');

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(2, 'admin', 'admin', 'admin@admin.admin', 'admin@admin.admin', 1, 'yrsiuwwrj400c88kss08808c8g8w0w', '$2y$13$yrsiuwwrj400c88kss088uakatjOT.IYYFTkFwJ9NsvgXgkvvqIbm', '2016-11-17 13:28:15', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:11:"SUPER_ADMIN";i:1;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `path`, `alt_id`) VALUES
(10, 'homepageBackground', 'bundles/haras/media/homepageBackground.png', 99),
(11, 'section1Image', 'bundles/haras/media/section1Image.jpeg', 100),
(13, 'section2Image', 'bundles/haras/media/section2Image.png', 101),
(14, 'section3Image', 'bundles/haras/media/section3Image.jpeg', 102),
(15, 'section4Image', 'bundles/haras/media/section4Image.jpeg', 103),
(29, 'logo', 'bundles/haras/media/logo.png', 96),
(30, 'facebook', 'bundles/haras/media/facebook.svg', 97),
(31, 'twitter', 'bundles/haras/media/twitter.svg', 98),
(37, 'ffdkfhd_Media_1', 'bundles/haras/media/ffdkfhd_Media_1.mp4', 117);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `category_id`, `name`) VALUES
(1, NULL, 'homepage'),
(10, 1, 'section1'),
(11, 2, 'section2'),
(12, 3, 'section3'),
(13, 4, 'section4'),
(14, NULL, 'header'),
(15, NULL, 'footer'),
(17, NULL, 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `pages_articles`
--

CREATE TABLE `pages_articles` (
  `page_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages_articles`
--

INSERT INTO `pages_articles` (`page_id`, `article_id`) VALUES
(10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pages_medias`
--

CREATE TABLE `pages_medias` (
  `page_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages_medias`
--

INSERT INTO `pages_medias` (`page_id`, `media_id`) VALUES
(1, 10),
(1, 11),
(1, 13),
(1, 14),
(1, 15),
(14, 29),
(14, 30),
(14, 31);

-- --------------------------------------------------------

--
-- Table structure for table `pages_texts`
--

CREATE TABLE `pages_texts` (
  `page_id` int(11) NOT NULL,
  `text_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages_texts`
--

INSERT INTO `pages_texts` (`page_id`, `text_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 18),
(1, 42),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(10, 2),
(10, 38),
(10, 118),
(10, 119),
(10, 120),
(11, 3),
(11, 39),
(11, 118),
(11, 119),
(11, 120),
(12, 4),
(12, 40),
(12, 118),
(12, 119),
(12, 120),
(13, 5),
(13, 41),
(13, 118),
(13, 119),
(13, 120),
(14, 1),
(14, 2),
(14, 3),
(14, 4),
(14, 5),
(14, 95),
(15, 19),
(15, 20),
(15, 21),
(15, 22),
(17, 43),
(17, 45),
(17, 46),
(17, 47),
(17, 121),
(17, 122),
(17, 123),
(17, 124),
(17, 125);

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_fr` longtext COLLATE utf8_unicode_ci,
  `text_en` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `name`, `text_fr`, `text_en`) VALUES
(1, 'homeName', 'Accueil', 'Home'),
(2, 'section1Name', 'Découvrir', 'Discover'),
(3, 'section2Name', 'Votre haras', 'Your stud farm'),
(4, 'section3Name', 'Vous détendre', 'Relax'),
(5, 'section4Name', 'Co-working', 'Co-working'),
(18, 'catchPhrase1', 'Prenez le temps de vivre...', 'Take some time...'),
(19, 'footerTitle1', 'Qui sommes-nous ?', 'About us'),
(20, 'footerContent1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!'),
(21, 'footerTitle2', 'Coordonnées', 'Contact infos'),
(22, 'footerContent2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!'),
(38, 'pageTitle', 'Section n°1', 'Section #1'),
(39, 'pageTitle', 'Section n°2', 'Section #2'),
(40, 'pageTitle', 'Section n°3', 'Section #3'),
(41, 'pageTitle', 'Section n°4', 'Section #4'),
(42, 'catchPhrase2', '...avec le cheval dans la forêt', '...with horses in the forest'),
(43, 'contactMail', 'E-mail', 'E-mail'),
(44, 'contactName', 'Votre nom', 'Your Name'),
(45, 'contactMessage', 'Votre message', 'Your Message'),
(46, 'pageTitle', 'Nous contacter', 'Contact us'),
(47, 'sendButton', 'Envoyer', 'Send'),
(64, 'section1Text', 'Le Lorem Ipsum est simplement du faux texte employé dans la', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.'),
(65, 'section2Text', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.'),
(66, 'section3Text', 'Le Lorem Ipsum est simplement du faux texte employé dans la', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.'),
(67, 'section4Text', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.'),
(95, 'contactName', 'Contact', 'Contact'),
(96, 'altLogo', 'logo', 'logo'),
(97, 'facebookAlt', 'facebook', 'facebook'),
(98, 'twitterAlt', 'twitterAlt', 'twitterAlt'),
(99, 'homepageBackgroundAlt', 'Background', 'Background'),
(100, 'section1Alt', 'section1image', 'section1image'),
(101, 'section2alt', 'section2image', 'section2image'),
(102, 'section3Alt', 'section3image', 'section3image'),
(103, 'section4Alt', 'section4image', 'section4image'),
(115, 'ffdkfhd | Title', 'sd', 'dsds'),
(116, 'ffdkfhd | Content', 'dsd', 'sddssdsdsdsds'),
(117, 'ffdkfhd_Media_1_Alt', 'sdsd', 'dsd'),
(118, 'navPrev', 'Précédent', 'Previous'),
(119, 'navNext', 'Suivante', 'Next'),
(120, 'navFirst', 'Début', 'First page'),
(121, 'contactAdress', 'Adresse', 'Adress'),
(122, 'contactName', 'Haras de la métamorphose', 'Haras de la métamorphose'),
(123, 'contactAdressLocation', '110 rue du colonel fabien', '110 rue du colonel fabien'),
(124, 'contactTel', '01 46 74 64 93', '01 46 74 64 93'),
(125, 'contactAdressPostalCode', '92568 Domont', '92568 Domont');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_23A0E665E237E06` (`name`),
  ADD KEY `IDX_23A0E66A9F87BD` (`title_id`),
  ADD KEY `IDX_23A0E6684A0A3ED` (`content_id`),
  ADD KEY `IDX_23A0E662534008B` (`structure_id`);

--
-- Indexes for table `articles_medias`
--
ALTER TABLE `articles_medias`
  ADD PRIMARY KEY (`article_id`,`media_id`),
  ADD KEY `IDX_A8EA7BAC7294869C` (`article_id`),
  ADD KEY `IDX_A8EA7BACEA9FDD75` (`media_id`);

--
-- Indexes for table `article_structure`
--
ALTER TABLE `article_structure`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B53467CE5E237E06` (`name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_64C19C15E237E06` (`name`);

--
-- Indexes for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_6A2CA10C5E237E06` (`name`),
  ADD UNIQUE KEY `UNIQ_6A2CA10CB548B0F` (`path`),
  ADD KEY `IDX_6A2CA10C53F5CCF9` (`alt_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_140AB6205E237E06` (`name`),
  ADD KEY `IDX_140AB62012469DE2` (`category_id`);

--
-- Indexes for table `pages_articles`
--
ALTER TABLE `pages_articles`
  ADD PRIMARY KEY (`page_id`,`article_id`),
  ADD KEY `IDX_FF922899C4663E4` (`page_id`),
  ADD KEY `IDX_FF9228997294869C` (`article_id`);

--
-- Indexes for table `pages_medias`
--
ALTER TABLE `pages_medias`
  ADD PRIMARY KEY (`page_id`,`media_id`),
  ADD KEY `IDX_BF58D48EC4663E4` (`page_id`),
  ADD KEY `IDX_BF58D48EEA9FDD75` (`media_id`);

--
-- Indexes for table `pages_texts`
--
ALTER TABLE `pages_texts`
  ADD PRIMARY KEY (`page_id`,`text_id`),
  ADD KEY `IDX_F3C65AD5C4663E4` (`page_id`),
  ADD KEY `IDX_F3C65AD5698D3548` (`text_id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `article_structure`
--
ALTER TABLE `article_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E662534008B` FOREIGN KEY (`structure_id`) REFERENCES `article_structure` (`id`),
  ADD CONSTRAINT `FK_23A0E6684A0A3ED` FOREIGN KEY (`content_id`) REFERENCES `text` (`id`),
  ADD CONSTRAINT `FK_23A0E66A9F87BD` FOREIGN KEY (`title_id`) REFERENCES `text` (`id`);

--
-- Constraints for table `articles_medias`
--
ALTER TABLE `articles_medias`
  ADD CONSTRAINT `FK_A8EA7BAC7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_A8EA7BACEA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
