-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 30 Novembre 2016 à 16:40
-- Version du serveur :  5.7.16-0ubuntu0.16.04.1
-- Version de PHP :  7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `haras`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
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
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `name`, `title_id`, `content_id`, `structure_id`, `created_at`) VALUES
(9, 'test1', 135, 136, 2, '2016-11-30'),
(10, 'test2', 138, 139, 2, '2016-11-30'),
(11, 'test3', 141, 142, 2, '2016-11-30'),
(12, 'test4', 144, 145, 2, '2016-11-30'),
(13, 'test5', 147, 148, 1, '2016-11-30'),
(14, 'test6', NULL, NULL, 3, '2016-11-30'),
(15, 'test7', 153, 154, 4, '2016-11-30'),
(16, 'test8', 156, 157, 2, '2016-11-30');

-- --------------------------------------------------------

--
-- Structure de la table `articles_medias`
--

CREATE TABLE `articles_medias` (
  `article_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `articles_medias`
--

INSERT INTO `articles_medias` (`article_id`, `media_id`) VALUES
(9, 42),
(10, 43),
(11, 44),
(12, 45),
(13, 46),
(14, 47),
(14, 48),
(14, 49),
(15, 50),
(16, 51);

-- --------------------------------------------------------

--
-- Structure de la table `article_structure`
--

CREATE TABLE `article_structure` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `article_structure`
--

INSERT INTO `article_structure` (`id`, `name`) VALUES
(2, 'imageLeft'),
(1, 'imageRight'),
(3, 'slider'),
(4, 'video');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'section1'),
(2, 'section2'),
(3, 'section3'),
(4, 'section4');

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
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
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(2, 'admin', 'admin', 'admin@admin.admin', 'admin@admin.admin', 1, 'yrsiuwwrj400c88kss08808c8g8w0w', '$2y$13$yrsiuwwrj400c88kss088uakatjOT.IYYFTkFwJ9NsvgXgkvvqIbm', '2016-11-30 14:24:26', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:11:"SUPER_ADMIN";i:1;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `media`
--

INSERT INTO `media` (`id`, `name`, `path`, `alt_id`) VALUES
(10, 'homepageBackground', 'bundles/haras/media/homepageBackground.jpeg', 99),
(11, 'section1Image', 'bundles/haras/media/section1Image.png', 100),
(13, 'section2Image', 'bundles/haras/media/section2Image.png', 101),
(14, 'section3Image', 'bundles/haras/media/section3Image.png', 102),
(15, 'section4Image', 'bundles/haras/media/section4Image.png', 103),
(29, 'logo', 'bundles/haras/media/logo.png', 96),
(30, 'facebook', 'bundles/haras/media/facebook.svg', 97),
(31, 'twitter', 'bundles/haras/media/twitter.svg', 98),
(38, 'homepageBackgroundMobile', 'bundles/haras/media/homepageBackgroundMobile.jpeg', 99),
(42, 'test1_Media_1', 'bundles/haras/media/test1_Media_1.jpeg', 137),
(43, 'test2_Media_1', 'bundles/haras/media/test2_Media_1.jpeg', 140),
(44, 'test3_Media_1', 'bundles/haras/media/test3_Media_1.jpeg', 143),
(45, 'test4_Media_1', 'bundles/haras/media/test4_Media_1.png', 146),
(46, 'test5_Media_1', 'bundles/haras/media/test5_Media_1.jpeg', 149),
(47, 'test6_Media_1', 'bundles/haras/media/test6_Media_1.png', 150),
(48, 'test6_Media_2', 'bundles/haras/media/test6_Media_2.jpeg', 151),
(49, 'test6_Media_3', 'bundles/haras/media/test6_Media_3.jpeg', 152),
(50, 'test7_Media_1', 'bundles/haras/media/test7_Media_1.qt', 155),
(51, 'test8_Media_1', 'bundles/haras/media/test8_Media_1.jpeg', 158);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `page`
--

INSERT INTO `page` (`id`, `category_id`, `name`) VALUES
(1, NULL, 'homepage'),
(10, 1, 'section1'),
(11, 2, 'section2'),
(12, 3, 'section3'),
(13, 4, 'section4'),
(14, NULL, 'header'),
(15, NULL, 'footer'),
(17, NULL, 'contact'),
(18, NULL, 'login');

-- --------------------------------------------------------

--
-- Structure de la table `pages_articles`
--

CREATE TABLE `pages_articles` (
  `page_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pages_articles`
--

INSERT INTO `pages_articles` (`page_id`, `article_id`) VALUES
(10, 9),
(10, 13),
(10, 14),
(10, 15),
(10, 16),
(11, 10),
(12, 11),
(13, 12);

-- --------------------------------------------------------

--
-- Structure de la table `pages_medias`
--

CREATE TABLE `pages_medias` (
  `page_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pages_medias`
--

INSERT INTO `pages_medias` (`page_id`, `media_id`) VALUES
(1, 10),
(1, 11),
(1, 13),
(1, 14),
(1, 15),
(1, 38),
(14, 29),
(14, 30),
(14, 31);

-- --------------------------------------------------------

--
-- Structure de la table `pages_texts`
--

CREATE TABLE `pages_texts` (
  `page_id` int(11) NOT NULL,
  `text_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pages_texts`
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
-- Structure de la table `text`
--

CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_fr` longtext COLLATE utf8_unicode_ci,
  `text_en` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `text`
--

INSERT INTO `text` (`id`, `name`, `text_fr`, `text_en`) VALUES
(1, 'homeName', 'Accueil', 'Home'),
(2, 'section1Name', 'Découvrir', 'Discover'),
(3, 'section2Name', 'Votre haras', 'Your stud farm'),
(4, 'section3Name', 'Vous détendre', 'Relax'),
(5, 'section4Name', 'Co-working', 'Co-working'),
(18, 'catchPhrase1', 'Prenez le temps de vivre...', 'Take some time...'),
(19, 'footerTitle1', 'Qui sommes-nous ?', 'About us'),
(20, 'footerContent1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde! pdsdjsdskdjks Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde! pdsdjsdskdjks Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde! pdsdjsdskdjks Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde! pdsdjsdskdjks'),
(21, 'footerTitle2', 'Coordonnées', 'Contact infos'),
(22, 'footerContent2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda est molestiae repellat sequi tempore, temporibus. Amet facilis laborum molestias officiis recusandae ut voluptates. Ducimus molestias, nemo? Blanditiis, excepturi unde!'),
(38, 'pageTitle', 'Découverte', 'Discover'),
(39, 'pageTitle', 'Votre haras', 'Your stud farm'),
(40, 'pageTitle', 'Vous détendre', 'Relax'),
(41, 'pageTitle', 'Co-working', 'Co-working'),
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
(118, 'navPrev', 'Précédent', 'Previous'),
(119, 'navNext', 'Suivante', 'Next'),
(120, 'navFirst', 'Début', 'First page'),
(121, 'contactAddressTitle', 'Adresse', 'Address'),
(122, 'contactName', 'Haras de la métamorphose', 'Haras de la métamorphose'),
(123, 'contactAddressLocation', '110 rue du colonel fabien', '110 rue du colonel fabien'),
(124, 'contactTel', '01 46 74 64 93', '01 46 74 64 93'),
(125, 'contactAddressPostalCode', '92568 Domont', '92568 Domont'),
(135, 'test1 | Title', 'Un lieu de vie et se sens', 'A place of life and meaning'),
(136, 'test1 | Content', 'Ce lieu de vie, en connexion directe avec la nature, a pour vocation de redonner les lettres de\r\n\r\nnoblesse à l’équitation d’extérieur.\r\n\r\nDans cet espace, le cheval sera un médiateur vivant, qui permettra, entre autres de découvrir «\r\n\r\nle vivant » de ce lieu.\r\n\r\nCe lieu est un lieu sera aussi un lieu de sens où des ateliers « de faire par soi-même » seront\r\n\r\nproposés.\r\n\r\nL’expérimentation sera aussi proposée. Les personnes seront invitées à trouver leurs ressources\r\n\r\nen expérimentant la nature, la forêt, la faune, la flore, l’eau, le cheval.\r\n\r\nL’objectif est aussi de trouver la place que le cheval aura dans 20 ans, 50 ans. Quel en sera «\r\n\r\nl’utilisation »? (guerre, loisir, sport, transport...)\r\n\r\nCe lieu, grâce à un encadrement supérieur assujetti à une formation spécialisée validée par un\r\n\r\ndiplôme privé, permettra aussi le perfectionnement équestre.', 'This place of life, in direct connection with nature, has the vocation of restoring the letters of\r\n\r\nnobility to outdoor riding.\r\n\r\nIn this space, the horse will be a living mediator, which will allow, among other things, to\r\n\r\ndiscover &quot;the living&quot; of this place.\r\n\r\nThis place is a place will also be a place of meaning where workshops &quot;to do by oneself&quot; will be\r\n\r\nproposed.\r\n\r\nExperimentation will also be proposed. People will be invited to find their resources by\r\n\r\nexperimenting with nature, the forest, the fauna, the flora, the water and the horse.\r\n\r\nThe goal is also to find the place that the horse will have in 20 years, 50 years. What will be\r\n\r\n&quot;use&quot;? (War, leisure, sport, transport ...)\r\n\r\nThis place, thanks to a superior supervision subject to a specialized training validated by a private\r\n\r\ndiploma, will also allow the equestrian improvement.'),
(137, 'test1_Media_1_Alt', 'rrg', 'grgr'),
(138, 'test2 | Title', 'Le cheval comme médiateur', 'The horse as our intermediary'),
(139, 'test2 | Content', 'La rupture est marquée par le fait que nous partons de cet espace vivant, « apprenant » qui va\r\n\r\npermettre de faire évoluer les activités comme l’équitation d’extérieur.\r\n\r\nL’approche 360° a pour objectif de permettre d’explorer l’environnement de manière complète\r\n\r\npar des entrées différentes. D’autres aspects méconnus ou mal connus, ou que l’on croyait\r\n\r\nconnaitre (du cheval, de la nature...) émergeront, grâce à l’approche singulière et personnelle\r\n\r\nque chacun y mettra.\r\n\r\nLe Haras de la métamorphose mettra à disposition des outils, des techniques pour aider à cette\r\n\r\nouverture, mais ne dictera ou n’imposera aucun résultat de pensée. C’est la nature qui impose\r\n\r\nses codes, ses normes.\r\n\r\nEx: une balade possible un jour, ne le sera pas forcément le lendemain (inondation, chute\r\n\r\nd’arbre, nid d’animaux... , . Quelle décision je prends? Quelles sont les conséquences?\r\n\r\nL’équitation d’extérieur est un champ qui permet d’explorer d’autres aspects du cheval.\r\n\r\nL’hébergement permet un style de vie qui ouvre à de nouveaux sens, perceptions.', 'The break is marked by the fact that we start from this living space, &quot;learning&quot; which will\r\n\r\nallow to evolve activities like outdoor riding.\r\n\r\nThe 360 ​​° approach aims to make it possible to explore the environment in a complete\r\n\r\nway through different inputs. Other aspects that are unknown or poorly known, or that are\r\n\r\nbelieved to be known (of horse, nature ...) will emerge, thanks to the singular and personal\r\n\r\napproach that each one will put in it.\r\n\r\nThe Metamorphosis Stud will make available tools and techniques to assist in this opening\r\n\r\nbut will not dictate or impose any outcome of thought. It is nature that imposes its codes, its\r\n\r\nnorms.\r\n\r\nEx: a possible walk one day, will not necessarily be the next day (inonda2on, fall of tree,\r\n\r\nnest of animals ..., What decision I take?\r\n\r\nOutdoor riding is a field that explores other aspects of the horse. Accommodation allows a\r\n\r\nlifestyle that opens up new senses, perceptions.'),
(140, 'test2_Media_1_Alt', 're', 'rer'),
(141, 'test3 | Title', 'S’élever pour s’évader', 'High in the sky'),
(142, 'test3 | Content', 'Ville d’eau et forêt, Compiègne, grâce à son histoire, ses paysages et sa nature généreuse, attire\r\n\r\nchaque année des touristes de plus en plus nombreux. Son accès facile est un aspect très\r\n\r\nimportant de son développement économique.\r\n\r\nDe passage à Compiègne, pour un week-end, une semaine, ou à « allure » régulière, prenez de\r\n\r\nla hauteur et dormez dans les cabanes nichées dans les arbres de la Follie!\r\n\r\nEn famille, entre amis, touristes ou habitués rapprochez-vous de la nature de la forêt de\r\n\r\nCompiègne riche en faune et flore. Vous y découvrirez une vie animée dans un lieu paisible.\r\n\r\nC’est au Haras de la Métamorphose que vous trouverez ces paysages et cette expérience\r\n\r\nsensitive particulière.', 'Town of water and forest, Compiègne, thanks to its history, its landscapes and its generous\r\n\r\nnature, attracts each year more and more tourists. Its easy access is a very important aspect of\r\n\r\nits economic development.\r\n\r\nPassing through Compiègne, for a weekend, a week, or at regular &quot;pace&quot;, climb up and sleep in\r\n\r\nthe cabins nestled in the trees of the Follie!\r\n\r\nWith family, friends, tourists or regulars get closer to the nature of the forest of Compiègne rich\r\n\r\nin fauna and flora. You will discover a lively life in a peaceful place.\r\n\r\nThis is the Haras de la Métamorphose'),
(143, 'test3_Media_1_Alt', 'frfr', 'frfr'),
(144, 'test4 | Title', 'Un lieu propice à la réflexion et la création', 'A place suitable for reflexion'),
(145, 'test4 | Content', 'Un lieu unique permettant d’accueillir dans des condi2ons exceptionnelles, des groupes de\r\n\r\ntravail, que ce soient des entreprises, des écoles, ....\r\n\r\nL’environnement et la connexion avec la nature vous permettent de trouver une sérénité\r\n\r\npropice à une grande créativité.\r\n\r\nLa créativité est très recherchée par les entreprises qui doivent sans cesse se renouveler, créer\r\n\r\net développer de nouvelles idées pour être compétitives.\r\n\r\nCe cadre appelle à cette créativité par son environnement unique. Ce passage dans ce lieu\r\n\r\npermettra aux cadres, dirigeants, étudiants, futurs élites, de faire émerger des idées nouvelles.', 'A unique place to host, in exceptional conditions, working groups, be they companies,\r\n\r\nschools, ....\r\n\r\nThe environment and the connection with nature allow you to find a serenity conducive\r\n\r\nto great creativity.\r\n\r\nCreativity is highly sought after by companies that must constantly renew themselves,\r\n\r\ncreate and develop new ideas to be competitive.\r\n\r\nThis framework calls for this creativity through its unique environment. This passage in\r\n\r\nthis place will allow executives, leaders, students, future elites, to bring out new ideas.'),
(146, 'test4_Media_1_Alt', 'ggrg', 'grgr'),
(147, 'test5 | Title', 'Exemple', 'Exemple'),
(148, 'test5 | Content', 'Exemple', 'Exemple'),
(149, 'test5_Media_1_Alt', 'egg', 'egegeg'),
(150, 'test6_Media_1_Alt', 'fef', 'fefe'),
(151, 'test6_Media_2_Alt', 'ffd', 'fdf'),
(152, 'test6_Media_3_Alt', 'fdf', 'dfff'),
(153, 'test7 | Title', 'exemple', 'exemple'),
(154, 'test7 | Content', 'Contrairement à une opinion répandue, le Lorem Ipsum n\'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s\'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d\'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l\'éthique. Les premières lignes du Lorem Ipsum, "Lorem ipsum dolor sit amet...", proviennent de la section 1.10.32.', 'Contrairement à une opinion répandue, le Lorem Ipsum n\'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s\'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d\'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l\'éthique. Les premières lignes du Lorem Ipsum, "Lorem ipsum dolor sit amet...", proviennent de la section 1.10.32.'),
(155, 'test7_Media_1_Alt', 'fgf', 'gfg'),
(156, 'test8 | Title', 'Exemple', 'exemple'),
(157, 'test8 | Content', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).'),
(158, 'test8_Media_1_Alt', 'fdfdf', 'dfdf');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_23A0E665E237E06` (`name`),
  ADD KEY `IDX_23A0E66A9F87BD` (`title_id`),
  ADD KEY `IDX_23A0E6684A0A3ED` (`content_id`),
  ADD KEY `IDX_23A0E662534008B` (`structure_id`);

--
-- Index pour la table `articles_medias`
--
ALTER TABLE `articles_medias`
  ADD PRIMARY KEY (`article_id`,`media_id`),
  ADD KEY `IDX_A8EA7BAC7294869C` (`article_id`),
  ADD KEY `IDX_A8EA7BACEA9FDD75` (`media_id`);

--
-- Index pour la table `article_structure`
--
ALTER TABLE `article_structure`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B53467CE5E237E06` (`name`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_64C19C15E237E06` (`name`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_6A2CA10C5E237E06` (`name`),
  ADD UNIQUE KEY `UNIQ_6A2CA10CB548B0F` (`path`),
  ADD KEY `IDX_6A2CA10C53F5CCF9` (`alt_id`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_140AB6205E237E06` (`name`),
  ADD KEY `IDX_140AB62012469DE2` (`category_id`);

--
-- Index pour la table `pages_articles`
--
ALTER TABLE `pages_articles`
  ADD PRIMARY KEY (`page_id`,`article_id`),
  ADD KEY `IDX_FF922899C4663E4` (`page_id`),
  ADD KEY `IDX_FF9228997294869C` (`article_id`);

--
-- Index pour la table `pages_medias`
--
ALTER TABLE `pages_medias`
  ADD PRIMARY KEY (`page_id`,`media_id`),
  ADD KEY `IDX_BF58D48EC4663E4` (`page_id`),
  ADD KEY `IDX_BF58D48EEA9FDD75` (`media_id`);

--
-- Index pour la table `pages_texts`
--
ALTER TABLE `pages_texts`
  ADD PRIMARY KEY (`page_id`,`text_id`),
  ADD KEY `IDX_F3C65AD5C4663E4` (`page_id`),
  ADD KEY `IDX_F3C65AD5698D3548` (`text_id`);

--
-- Index pour la table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `article_structure`
--
ALTER TABLE `article_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E662534008B` FOREIGN KEY (`structure_id`) REFERENCES `article_structure` (`id`),
  ADD CONSTRAINT `FK_23A0E6684A0A3ED` FOREIGN KEY (`content_id`) REFERENCES `text` (`id`),
  ADD CONSTRAINT `FK_23A0E66A9F87BD` FOREIGN KEY (`title_id`) REFERENCES `text` (`id`);

--
-- Contraintes pour la table `articles_medias`
--
ALTER TABLE `articles_medias`
  ADD CONSTRAINT `FK_A8EA7BAC7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_A8EA7BACEA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
