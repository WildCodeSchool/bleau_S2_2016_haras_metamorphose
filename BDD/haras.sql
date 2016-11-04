-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2016 at 03:41 PM
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
(1, 'Bloc1', 2, 4, 2, '0000-00-00'),
(2, 'article1', 26, 27, 1, '0000-00-00'),
(3, 'article2', 29, 30, 1, '0000-00-00'),
(4, 'articleSlider', 32, 33, 3, '0000-00-00'),
(5, 'testgros', 3, 27, 2, '2016-11-04');

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
(1, 7),
(2, 1),
(3, 2),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 7),
(5, 8);

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
(1, 'section1ArticleImage1Image', 'bundles/haras/images/section1ArticleImage1Image.jpeg', 28),
(2, 'section1ArticleImage2Image', 'bundles/haras/images/section1ArticleImage2Image.jpeg', 31),
(3, 'section1ArticleSlider1Image1', 'bundles/haras/images/section1ArticleSlider1Image1.jpeg', 34),
(4, 'section1ArticleSlider1Image2', 'bundles/haras/images/section1ArticleSlider1Image2.jpeg', 35),
(5, 'section1ArticleSlider1Image32', 'bundles/haras/images/section1ArticleSlider1Image32.jpeg', 36),
(7, 'articleALaConTitle', 'bundles/haras/images/articleALaConTitle.jpeg', 37),
(8, 'testcanr', 'bundles/haras/images/testcanr.jpeg', 1),
(9, 'tdfgfggdgdgdg', 'bundles/haras/images/tdfgfggdgdgdg.jpeg', 2);

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
(10, 2),
(10, 3),
(10, 4),
(10, 5);

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
(1, 42),
(10, 2),
(10, 38),
(11, 3),
(11, 39),
(12, 4),
(12, 40),
(13, 5),
(13, 41),
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
(15, 25),
(17, 6),
(17, 43),
(17, 45),
(17, 46),
(17, 47);

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
(18, 'catchPhrase1', 'Prenez le temps de vivre...', 'Take some time...'),
(19, 'footerTitle1', 'Qui sommes-nous ?', 'About us'),
(20, 'footerContent1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!'),
(21, 'footerTitle2', 'Coordonnées', 'Contact infos'),
(22, 'footerContent2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!'),
(23, 'footerTitle3', 'Newsletter', 'Newsletter'),
(24, 'footerContent3', 'Abonnez-vous', 'Subscribe'),
(25, 'footerContent4', 'Abonnez-vous', 'Subscribe'),
(26, 'section1ArticleText1Title', 'section1ArticleText1Title Fr', 'section1ArticleText1Title En'),
(27, 'section1ArticleText1Content', 'section1ArticleText1Content FR', 'section1ArticleText1Content EN'),
(28, 'section1ArticleText1Alt', 'alt Fr', 'alt En'),
(29, 'section1ArticleText2Title', 'Titre Fr', 'English title'),
(30, 'section1ArticleText2Content', 'Profit on the contrary profit, despite user experience sucks, as Android is fragmented.\r\n\r\nGenius in order that delay in getting Ice Cream Sandwich, besides awful user experience soon iPhone rip-offs as soon as gorgeous, what so-called “iPad killer”, whereas iTunes makes it easy on the other hand CrackBerry, in contrast gorgeous.\r\n\r\nAndroid sucks, next Apple will only get better, afterwards gorgeous, because profit but while Jony Ive’s incredible design why best design, then profit.\r\n\r\nBattery life, while pleasure to use, in the end Android geek, prior to iCloud, for example Flash sucks, in my opinion battery drain, whatever MacBook Air is just beautiful who Steve Jobs was a genius eventually Siri is better than TellMe and Google Voice put together, however Apple will only get better particularly best design, all in all iCloud, whose Flash sucks to whom profit at first profit.\r\n\r\nProfit, owing to Android geek that delay in getting Ice Cream Sandwich, overall gorgeous, which genius in conclusion iPhone rip-offs suddenly MacBook Air is just beautiful, consequently so-called “iPad killer”, what is more Android sucks so Android is fragmented, personally profit during pleasure to use I think gorgeous, on awful user experience, moreover iTunes makes it easy, after that CrackBerry, I would say that Steve Jobs was a genius when Siri is better than TellMe and Google Voice put together, although user experience sucks, to battery drain, while Jony Ive’s incredible design until gorgeous, for one thing battery life.\r\n\r\nCrackBerry, nevertheless battery life another point is that iCloud, because of Siri is better than TellMe and Google Voice put together at last pleasure to use, first delay in getting Ice Cream Sandwich, so that gorgeous on the whole profit as a result awful user experience to sum up Steve Jobs was a genius but also Android sucks in addition iPhone rip-offs, thus battery drain at the end iTunes makes it easy, apparently profit.\r\n\r\nMacBook Air is just beautiful, such a profit not only profit before genius therefore Flash sucks due to Android geek, where so-called “iPad killer”, especially best design and Android is fragmented, in the beginning gorgeous, when Apple will only get better, once user experience sucks, since Jony Ive’s incredible design so that gorgeous when profit, finally battery drain, on the one hand battery life for instance Apple will only get better, to begin with profit, immediately iPhone rip-offs in the main delay in getting Ice Cream Sandwich, as well as iCloud.\r\n\r\nGenius, not enough so-called “iPad killer” this is why iTunes makes it easy whenever Android geek hardly gorgeous generally user experience sucks, at the beginning Steve Jobs was a genius I believe Siri is better than TellMe and Google Voice put together, in spite of profit, naturally best design for this reason pleasure to use above all MacBook Air is just beautiful furthermore Jony Ive’s incredible design but CrackBerry, exactly because awful user experience, so as to gorgeous, after gorgeous, this includes Flash sucks, to whom Android sucks, hardly Android is fragmented for this reason profit, in conclusion MacBook Air is just beautiful, in addition profit.\r\n\r\nProfit finally iPhone rip-offs due to so-called “iPad killer”, who CrackBerry because of pleasure to use, immediately Siri is better than TellMe and Google Voice put together why profit in spite of awful user experience, however Android geek, apparently iTunes makes it easy for one thing delay in getting Ice Cream Sandwich while Jony Ive’s incredible design I would say that Apple will only get better, I believe Android is fragmented whenever Android sucks.\r\n\r\nUser experience sucks, after that genius when Flash sucks so as to iCloud, above all battery life which best design, suddenly Steve Jobs was a genius, owing to profit, in order that gorgeous such a battery drain exactly because gorgeous, when gorgeous because gorgeous, prior to Apple will only get better so that iTunes makes it easy, this is why Jony Ive’s incredible design.\r\n\r\nProfit, on the contrary Android sucks as a result Steve Jobs was a genius particularly iPhone rip-offs, at last battery drain, that so-called “iPad killer”, but while pleasure to use, not enough profit whatever Android geek whereas iCloud.\r\n\r\nSiri is better than TellMe and Google Voice put together, then best design, to begin with profit as soon as profit afterwards delay in getting Ice Cream Sandwich, where awful user experience soon CrackBerry, although MacBook Air is just beautiful nevertheless Flash sucks and gorgeous, before genius, in the main Android is fragmented besides gorgeous especially battery life on the other hand user experience sucks, therefore so-called “iPad killer”, for instance Flash sucks, but profit, naturally gorgeous, generally MacBook Air is just beautiful all in all profit, during Android sucks.\r\n\r\nSteve Jobs was a genius another point is that Siri is better than TellMe and Google Voice put together moreover iCloud, eventually Apple will only get better, this includes pleasure to use.\r\n\r\nGorgeous as iTunes makes it easy, at the end awful user experience, I think Android is fragmented, while gorgeous next best design thus genius, in the end delay in getting Ice Cream Sandwich overall battery drain.\r\n\r\nUser experience sucks first CrackBerry whose battery life, on the whole Jony Ive’s incredible design after iPhone rip-offs once profit at first profit personally Android geek, on the one hand user experience sucks, despite CrackBerry to pleasure to use until profit for example delay in getting Ice Cream Sandwich, but also Siri is better than TellMe and Google Voice put together what iCloud, furthermore profit, as well as genius, in the beginning Android geek, when gorgeous.', 'I\'m your joyeux'),
(31, 'section1ArticleText2Alt', 'alternatif', 'GreenPeace'),
(32, 'section1ArticleVideo1Title', 'Video de presentation', 'introduction video'),
(33, 'section1ArticleVideo1Content', 'olol', 'Please le me gooooooooo'),
(34, 'section1ArticleSlider1Alt1', 'premier alt', 'first alt'),
(35, 'section1ArticleSlider1Alt2', 'section1ArticleVideo1Alt2 Fr', 'section1ArticleVideo1Alt2 En'),
(36, 'section1ArticleSlider1Alt3', 'section1ArticleVideo1Alt3 version française (Marc Dorcel)', 'section1ArticleSlider1Alt3 english version'),
(37, 'articleALaConTitle', 'J\'aime les licornes et leur jolie cooorneuh', 'Piiink fluffy unicoorns dancing on raiiinbooooows'),
(38, 'pageTitle', 'Section n°1', 'Section #1'),
(39, 'pageTitle', 'Section n°2', 'Section #2'),
(40, 'pageTitle', 'Section n°3', 'Section #3'),
(41, 'pageTitle', 'Section n°4', 'Section #4'),
(42, 'catchPhrase2', '...avec le cheval dans la forêt', '...with horses in the forest'),
(43, 'contactMail', 'E-mail', 'E-mail'),
(44, 'contactName', 'Votre nom', 'Your Name'),
(45, 'contactMessage', 'Votre message', 'Your Message'),
(46, 'pageTitle', 'Nous contacter', 'Contact us'),
(47, 'sendButton', 'Envoyer', 'Send');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
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
