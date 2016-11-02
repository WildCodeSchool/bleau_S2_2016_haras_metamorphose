-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2016 at 11:52 AM
-- Server version: 5.7.9
-- PHP Version: 7.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haras_bleau`
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
  `structure_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `name`, `title_id`, `content_id`, `structure_id`) VALUES
(1, 'Bloc1', 2, 4, 1),
(3, 'test', 2, 2, 4),
(4, 'reversed', 2, 4, 2);

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
(1, 1),
(3, 1),
(3, 2),
(3, 3),
(4, 1);

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
(4, 'slider'),
(3, 'video');

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
(1, 'cheval 1', 'bundles/haras/images/cheval 1.jpeg', 28),
(2, 'cheval 2', 'bundles/haras/images/cheval 2.jpeg', 28),
(3, 'cheval 3', 'bundles/haras/images/cheval 3.jpeg', 28);

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
(16, NULL, 'testPage'),
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
(10, 1),
(10, 3),
(10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages_medias`
--

CREATE TABLE `pages_medias` (
  `page_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(10, 2),
(11, 3),
(12, 4),
(13, 5),
(14, 1),
(14, 2),
(14, 3),
(14, 4),
(14, 5),
(14, 6),
(15, 19),
(15, 20),
(15, 21),
(15, 22),
(15, 23),
(15, 24),
(15, 25);

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
(6, 'contactName', 'Contact', 'Contact'),
(18, 'catchPhrase', 'Prenez le temps de vivre...\r\n... avec le cheval dans la forêt', 'Take some time...\r\n...with horses in the forest'),
(19, 'footerTitle1', 'Qui sommes-nous ?', 'About us'),
(20, 'footerContent1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!'),
(21, 'footerTitle2', 'Coordonnées', 'Contact infos'),
(22, 'footerContent2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!'),
(23, 'footerTitle3', 'Newsletter', 'Newsletter'),
(24, 'footerContent3', 'Abonnez-vous', 'Subscribe'),
(25, 'footerContent4', 'Abonnez-vous', 'Subscribe'),
(26, 'article_image title', 'Ceci est un texte', 'This is definitely a text'),
(27, 'article_image_content', '', ''),
(28, 'article_image_alt', 'image', 'image'),
(29, 'article_slider', 'ceci est un slider', 'taht\'s a slider'),
(30, 'article_slider_content', 'ceci est un contenu de slider', 'that\'s a slider\'s content'),
(31, 'article_video', 'ceci est une video', 'that\'s a video'),
(32, 'article_video_content', 'ceci est le texte d\'une video', 'that\'s a video\'s text'),
(33, 'article_video_alt', 'video', 'video');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3B8BA7C75E237E06` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
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

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `FK_6A2CA10C53F5CCF9` FOREIGN KEY (`alt_id`) REFERENCES `text` (`id`);

--
-- Constraints for table `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `FK_140AB62012469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `pages_articles`
--
ALTER TABLE `pages_articles`
  ADD CONSTRAINT `FK_FF9228997294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_FF922899C4663E4` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`);

--
-- Constraints for table `pages_medias`
--
ALTER TABLE `pages_medias`
  ADD CONSTRAINT `FK_BF58D48EC4663E4` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`),
  ADD CONSTRAINT `FK_BF58D48EEA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

--
-- Constraints for table `pages_texts`
--
ALTER TABLE `pages_texts`
  ADD CONSTRAINT `FK_F3C65AD5698D3548` FOREIGN KEY (`text_id`) REFERENCES `text` (`id`),
  ADD CONSTRAINT `FK_F3C65AD5C4663E4` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
