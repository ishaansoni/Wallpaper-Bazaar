-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2015 at 11:31 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wallbazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(10) NOT NULL AUTO_INCREMENT,
  `a_unm` varchar(10) NOT NULL,
  `a_pwd` varchar(10) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_unm`, `a_pwd`) VALUES
(1, 'ume', '330033');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(255) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(2, '3D'),
(3, 'Abstract'),
(4, 'Animals'),
(5, 'Animation'),
(6, 'Beach'),
(7, 'Bike'),
(8, 'Brand & Logos'),
(9, 'Cars'),
(10, 'Celebration'),
(11, 'Christmas'),
(12, 'Creative Graphics'),
(13, 'Cute'),
(14, 'Love'),
(15, 'Children'),
(16, 'Computers & LApy'),
(17, 'Fantasy'),
(18, 'Flower'),
(19, 'Friendship'),
(20, 'Games'),
(21, 'Girls'),
(22, 'Boys'),
(23, 'Bollywood Actor'),
(24, 'Bollywood Acterss'),
(25, 'Hollywood Actor'),
(26, 'Hollywood Acterss'),
(27, 'Military'),
(28, 'Misscelleaneous'),
(29, 'Movies'),
(30, 'Music'),
(31, 'Nature'),
(32, 'Other'),
(33, 'Paintings'),
(34, 'Quotes'),
(35, 'Sayings'),
(36, 'Science'),
(37, 'Vehicles'),
(38, 'Zoo'),
(39, 'WWE'),
(40, 'Religious');

-- --------------------------------------------------------

--
-- Table structure for table `wallpaper`
--

CREATE TABLE IF NOT EXISTS `wallpaper` (
  `w_id` int(255) NOT NULL AUTO_INCREMENT,
  `w_date` varchar(255) NOT NULL,
  `w_download` int(255) NOT NULL DEFAULT '0',
  `w_view` int(255) NOT NULL DEFAULT '0',
  `w_img` varchar(255) NOT NULL,
  `w_cat` int(255) NOT NULL,
  `w_imgnm` varchar(255) NOT NULL,
  `w_tag` varchar(200) NOT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `wallpaper`
--

INSERT INTO `wallpaper` (`w_id`, `w_date`, `w_download`, `w_view`, `w_img`, `w_cat`, `w_imgnm`, `w_tag`) VALUES
(1, '', 2, 36, '1433081893_24.jpg', 23, 'This is Amazing shahid kappor', ''),
(3, '', 2, 19, '1433082842_14.jpg', 23, 'salman khan mumbai', ''),
(4, '', 14, 32, '1433309138_boy-and-girl-on-hammock-romantic-couple-painting-1366x768.jpg', 2, 'amazings', ''),
(5, '03/06/15', 0, 28, '1433338414_image-1424928658_dashing_ranvir_meri_aashiqui_tumse_hi_wallpaper.jpg', 3, 'This is Amazing', ''),
(6, '05-Jun-15', 7, 79, '1433488975_3d-black.jpg', 2, '3d-black', ''),
(7, '05-Jun-15', 1, 91, '1433488995_3d-black-2.jpg', 2, '3d-black-heart', ''),
(8, '05-Jun-15', 4, 21, '1433489010_3D-Black-Horse-HD-Wallpaper.jpg', 2, '3D-Black-Horse-HD-Wallpaper', ''),
(9, '05-Jun-15', 1, 3, '1433489030_3d-cube-wallpaper-44345-45467-hd-wallpapers.jpg', 2, '3d-cube-wallpaper', ''),
(10, '05-Jun-15', 2, 84, '1433489046_3D-Dice-Wallpaper-Desktop.jpg', 2, '3D-Dice-Wallpaper-Desktop', ''),
(11, '05-Jun-15', 0, 5, '1433489063_3d-earth-mass-effect-1920x1080.jpg', 2, '3d-earth-mass-effect', ''),
(12, '05-Jun-15', 1, 6, '1433489083_3D-Fish-High-Definition-Desktop-Wallpapers-.jpg', 2, '3D-Fish', ''),
(13, '05-Jun-15', 0, 7, '1433489100_3d-flower-hd-wallpapers.jpg', 2, '3d-flower', ''),
(14, '05-Jun-15', 1, 4, '1433489117_3d-hd-wallpaper.jpg', 2, '3d-car', ''),
(15, '05-Jun-15', 0, 8, '1433489137_3D-HD-Wallpapers-31.jpg', 2, '3D-Flower', ''),
(16, '05-Jun-15', 1, 8, '1433489154_3D-HD-Wallpapers-81.jpg', 2, '3D', ''),
(17, '05-Jun-15', 0, 1, '1433489166_3D-Heart-Wallpaper-for-MAC.jpg', 2, '3D-Heart', ''),
(18, '05-Jun-15', 0, 5, '1433489185_3d-Ice-Wallpaper.png', 2, '3D-Ice', ''),
(19, '05-Jun-15', 0, 1, '1433489200_3d-landscape-wallpaper-hd-for-desktop-computer.jpg', 2, '3d-landscape', ''),
(20, '05-Jun-15', 2, 2, '1433489214_3D-Lion-King-HD-Wallpaper.jpg', 2, '3D-Lion-King', ''),
(21, '05-Jun-15', 0, 1, '1433489233_3d-Live-Wallpapers-For-Pc.jpg', 2, '3D-Balls', ''),
(22, '05-Jun-15', 0, 1, '1433489250_3d-motorcycle-wallpaper-93.jpg', 2, '3d-motorcycle', ''),
(23, '05-Jun-15', 0, 1, '1433489271_3d-moving-desktop-backgrounds.jpg', 2, '3d-Fish-Bowl', ''),
(24, '05-Jun-15', 0, 1, '1433489285_3d-Music-Wallpapers.jpg', 2, '3D-Music', ''),
(25, '05-Jun-15', 0, 5, '1433489299_3D-photo-art-HD-wallpaper.jpg', 2, '3D-Photoart', ''),
(26, '05-Jun-15', 1, 48, '1433489395_3d-rocks-abstract-stones-2560x1600.jpg', 2, '3d-Stone', ''),
(27, '05-Jun-15', 0, 1, '1433489462_3d-sharp-teeth-blue-color-monster-2880x1800.jpg', 2, '3d-sharp-teeth-blue-', ''),
(28, '05-Jun-15', 0, 2, '1433489482_3d-Turtle-animal-wallpaper.jpg', 2, '3d-Turtle-animal', ''),
(29, '05-Jun-15', 0, 1, '1433489500_3D-Wallpaper-2.jpeg', 2, '3D-Balls', ''),
(30, '05-Jun-15', 0, 1, '1433489536_3d-wallpaper-9.jpg', 2, '3D-Design', ''),
(31, '05-Jun-15', 0, 1, '1433489568_3d-wallpaper-34.jpg', 2, '3d-Moon Enviorment', ''),
(32, '05-Jun-15', 0, 8, '1433489670_3d-wallpaper-14828-15294-hd-wallpapers.jpg', 2, '3d-heart', ''),
(33, '05-Jun-15', 0, 2, '1433489691_3d-wallpaper-14831-15297-hd-wallpapers.jpg', 2, '3d-Design', ''),
(34, '05-Jun-15', 1, 2, '1433489718_3d-wallpapercolors-digital-hd-wallpaper-3d---wallpapersus-1zbvdiw0.jpg', 2, '3d-Wallcolor', ''),
(35, '05-Jun-15', 4, 9, '1433489738_3d-wallpaper-hd.jpg', 2, '3D-Balls', ''),
(36, '05-Jun-15', 1, 1, '1433489763_3d-wallpaper-hd-for-desktop.jpg', 2, '3d-Black', ''),
(37, '05-Jun-15', 0, 1, '1433489787_3D-Wallpaper-High-Quality-2015.jpg', 2, '3D-Wallpaper-High-Quality-2015', ''),
(38, '05-Jun-15', 0, 1, '1433489805_3d-Wallpaper-of-fire-effect-of-horse-in-photoshop.jpg', 2, '3D-Horse', ''),
(39, '05-Jun-15', 1, 0, '1433489818_3d-wallpapers.jpg', 2, '3D-Design', ''),
(40, '05-Jun-15', 0, 0, '1433489839_3d-wallpaperwallpapers--3d-eye-wallpapers-hqbeuz6i.jpg', 2, '3D Eye', ''),
(41, '05-Jun-15', 0, 1, '1433489859_3d-water-wallpaper-widescreen.jpg', 2, 'Water', ''),
(42, '05-Jun-15', 5, 198, '1433489887_1366x768_abstract-3d-blue-balls-HD-Wallpaper.jpg', 2, '3D halls', ''),
(43, '05-Jun-15', 3, 4, '1433489904_32997d1299696657-3d-cube-wallpaper-glow-cube.jpg', 2, '3D-cube', ''),
(44, '05-Jun-15', 1, 4, '1433489934_120819xcitefun-3-d-wallpapers-3.jpg', 2, '3D-Balls-colors', ''),
(45, '05-Jun-15', 4, 3, '1433489960_355098.jpg', 2, 'Balls Lighting', ''),
(46, '08-Jun-15', 4, 13, '1433769926_taylor-lautner-7a.jpg', 3, 'ume', ''),
(47, '12-Jun-15', 0, 1, '1434104346_abstract-flower-in-space-1920x1200.jpg', 2, 'abstract-flower', ''),
(48, '12-Jun-15', 0, 0, '1434104385_af953c4b.jpg', 2, 'Ship in 3D', ''),
(49, '12-Jun-15', 0, 0, '1434104404_android-skull-digital-graphics-1920x1080.jpg', 2, 'android-skull-digital', ''),
(50, '12-Jun-15', 0, 0, '1434104423_apple-3d-logo-wallpapers.jpg', 2, 'apple-3d-logo', ''),
(51, '12-Jun-15', 0, 0, '1434104468_Batman_and_Bats_3D_Live_Wallpaper.jpg', 2, 'Batman_and_Bats', ''),
(52, '12-Jun-15', 0, 0, '1434104529_Beautiful-3D-Wallpaper-Home.jpg', 2, 'Beautiful-3D-Wallpaper-Home', ''),
(53, '12-Jun-15', 0, 0, '1434104608_3d-motorcycle-wallpaper-93.jpg', 2, 'beautiful-fantasy-digital', ''),
(54, '12-Jun-15', 0, 1, '1434104630_Best-3D-Wallpaper-3.jpg', 2, 'best Apple', ''),
(55, '12-Jun-15', 0, 0, '1434104685_best-3d-wallpapers.jpg', 2, 'Three Horse ', ''),
(56, '12-Jun-15', 0, 1, '1434104712_Best-Flower-3D-Glass-Wallpapers-117.jpg', 2, '3D red glass', ''),
(57, '12-Jun-15', 0, 0, '1434104736_Black-Apple-Logo-3D-HD-Wallpaper-2526.jpg', 2, 'Black-Apple-Logo', ''),
(58, '12-Jun-15', 0, 0, '1434104763_bonsai-tree-1920x1200.jpg', 2, 'bonsai-tree', ''),
(59, '12-Jun-15', 0, 1, '1434104782_chess_board_3d.jpg', 2, 'chess_board_3d', ''),
(60, '12-Jun-15', 0, 0, '1434104809_Cool-Backgrounds-3d.jpg', 2, 'Cool-Backgrounds-3d', ''),
(61, '12-Jun-15', 0, 0, '1434104832_Dark-3D-Face-HD-Wallpaper.jpg', 2, 'Dark-3D-Face', ''),
(62, '12-Jun-15', 0, 0, '1434104854_Dark-Abstract-Colors-Wallpapers-6.jpg', 2, 'Dark-Abstract-Colors', ''),
(63, '12-Jun-15', 0, 0, '1434104884_dark-color-3d-chocolate-pieces-abstract-2560x1600.jpg', 2, 'dark-color-chocolate-pieces', ''),
(64, '12-Jun-15', 1, 1, '1434104913_ea6413150f40861f4f57196039a30b93.jpg', 2, 'Darkness ', ''),
(65, '12-Jun-15', 0, 1, '1434104958_earth-3d-burning--2560x1600.jpg', 2, 'earth-3d-burning', ''),
(66, '12-Jun-15', 0, 1, '1434104983_Neon 3D wallpapers for desktop.jpg', 2, 'Neon 3D', ''),
(67, '12-Jun-15', 0, 0, '1434105004_Pokemon-3D-HD-Wallpaper.jpg', 2, 'Pokemon-3D', ''),
(68, '12-Jun-15', 0, 0, '1434105026_pokemon-balls-8136-1920x1080.jpg', 2, 'pokemon-balls', ''),
(69, '12-Jun-15', 0, 0, '1434105051_space-stars-planets-grass-imagination-1920x1200.jpg', 2, 'space-stars-planets-grass', ''),
(70, '12-Jun-15', 1, 1, '1434105074_Strawberry-3D-Desktop-Wallpaper.jpg', 2, 'Strawberry-3D-Desktop', ''),
(71, '12-Jun-15', 0, 0, '1434105103_unnamed.jpg', 2, 'Lighting darkness in 3d', ''),
(72, '12-Jun-15', 0, 7, '1434105134_wallpaper_abstract-3d_animaatjes-28.jpg', 2, 'Abstract darkness 3D', ''),
(73, '12-Jun-15', 0, 7, '1434105150_Wallpaper-3D-2013--1024x576.jpg', 2, 'Samll blue balls ', ''),
(74, '12-Jun-15', 0, 0, '1434105168_wallpapers_62551.jpg', 2, 'planes in 3D', ''),
(75, '12-Jun-15', 1, 1, '1434105534_8589130410337-hd-wallpaper-hd.jpg', 2, 'Cup tea in 3D', ''),
(76, '12-Jun-15', 0, 1, '1434105552_abstract-210v.jpg', 2, 'Abstract fish', ''),
(77, '12-Jun-15', 0, 1, '1434105563_abstract-colored-threads.jpg', 2, 'abstract-colored-threads', ''),
(78, '12-Jun-15', 0, 1, '1434105578_aiaiai-tma1-on-a-table.jpg', 2, 'Headphones table', ''),
(79, '12-Jun-15', 0, 0, '1434105609_Apple Leopard Full HD Beautiful Pictures.jpg', 2, 'Apple Leopard car', ''),
(80, '12-Jun-15', 0, 0, '1434105623_apple_music_room-wallpaper-1366x768.jpg', 2, 'apple_music_room', ''),
(81, '12-Jun-15', 0, 1, '1434105642_bamaro_1440x900.jpg', 2, 'bamaro cars in 3D', ''),
(82, '12-Jun-15', 0, 0, '1434105669_batman_the_dark_knight_2-wallpaper-1366x768.jpg', 2, 'batman_the_dark_knight', ''),
(83, '12-Jun-15', 0, 0, '1434105688_Batman-Arkham-Origins-Wallpaper-HD-Joker-1080p.jpg', 2, 'Batman Joker', ''),
(84, '12-Jun-15', 0, 0, '1434105701_bing-curious-squirrel.jpg', 2, 'bing-curious-squirrel', ''),
(85, '12-Jun-15', 1, 1, '1434105734_bing-underground-sign.jpg', 2, 'bing-underground', ''),
(86, '12-Jun-15', 0, 0, '1434105751_black-stallion.jpg', 2, 'black-stallion', ''),
(87, '12-Jun-15', 0, 0, '1434105766_blue dark alone 1920x1200 wallpaper_www.wallpapermay.com_61.jpg', 2, 'blue dark alone', ''),
(88, '12-Jun-15', 0, 4, '1434105783_bridge-into-the-cold.jpg', 2, 'bridge-into-the-cold', ''),
(89, '12-Jun-15', 3, 12, '1434105798_bruges-belgium-2.jpg', 2, 'bruges-belgium', ''),
(90, '12-Jun-15', 0, 0, '1434105824_christmas-colorful-lights.jpg', 2, 'christmas-colorful-lights', ''),
(91, '12-Jun-15', 0, 0, '1434105842_Cool-Hd-Wallpapers-2.jpg', 2, 'Cool-Hd-Colors', ''),
(92, '12-Jun-15', 0, 0, '1434105863_dogs-72v.jpg', 2, 'Vodafone dogs', ''),
(93, '12-Jun-15', 0, 0, '1434105878_fight-club-art.jpg', 2, 'Romantic Art', ''),
(94, '12-Jun-15', 0, 0, '1434105897_free-wallpaper-13.jpg', 2, 'Natural Wallpaper', ''),
(95, '12-Jun-15', 0, 0, '1434105918_futuristic-city-with-transport-lanes.jpg', 2, 'futuristic-city-with-transport', ''),
(96, '12-Jun-15', 0, 0, '1434105938_HD-backgrounds-13.jpg', 2, 'Finger sparks', ''),
(97, '12-Jun-15', 0, 1, '1434105957_hd-wallpaper-the-jocker-07.jpg', 2, 'Joker batman smilings', ''),
(98, '12-Jun-15', 0, 0, '1434105971_ice-age-4.jpg', 2, 'ice-age-4', ''),
(99, '12-Jun-15', 0, 0, '1434105985_Iron man 3 (9).jpg', 2, 'Iron man 3', ''),
(100, '12-Jun-15', 0, 0, '1434106039_london-2012-olympic-stadium.jpg', 2, 'london-2012-olympic-stadium', ''),
(101, '12-Jun-15', 1, 7, '1434106055_love_abstract_design-wide.jpg', 2, 'love_abstract_design-wide', '2015'),
(102, '12-Jun-15', 0, 1, '1434106077_love_music-wallpaper-1366x768.jpg', 2, 'love_music', ''),
(103, '12-Jun-15', 0, 3, '1434106091_love-139a.jpg', 2, 'Love cloud', ''),
(104, '12-Jun-15', 0, 0, '1434106105_optical-fiber.jpg', 2, 'optical-fiber', ''),
(105, '12-Jun-15', 0, 0, '1434106141_rainy_day-1440x900.jpg', 2, 'rainy_day', ''),
(106, '12-Jun-15', 0, 1, '1434106157_Sparrows-Birds-HD-Wallpapers-Wallpaper-HD.jpg', 2, 'Sparrows-Birds-HD', ''),
(107, '12-Jun-15', 0, 1, '1434106181_t4deceptoconlogo.jpg', 2, 'deceptocon', ''),
(108, '12-Jun-15', 0, 0, '1434106211_teenage-mutant-ninja-turtles-night-run.jpg', 2, 'teenage-mutant-ninja', ''),
(109, '12-Jun-15', 0, 1, '1434106232_the_hobbit__battle_of_the_five_armies_by_professoradagio-d7sbzk8.png', 2, 'the_hobbit_battle_of_the_five_armies', ''),
(110, '12-Jun-15', 0, 0, '1434106248_the-wind.jpg', 2, 'the-wind', ''),
(111, '12-Jun-15', 0, 1, '1434106263_tribute_to_steve_jobs-1440x900.jpg', 2, 'tribute_to_steve_jobs', ''),
(112, '12-Jun-15', 0, 3, '1434106281_tron-legacy-lightcycle.jpg', 2, 'tron-legacy-lightcycle', ''),
(113, '12-Jun-15', 0, 3, '1434106312_valentines_day_special-valentines day-fresh hd wallpapers.jpg', 2, 'valentines_day_special', '3D'),
(114, '12-Jun-15', 0, 4, '1434106331_vbk7s_1340347194.jpg', 2, 'Upsight Light', '3D'),
(115, '12-Jun-15', 1, 3, '1434106355_vista_wallpapers(12).jpg', 2, 'big tree Colors', '3D'),
(116, '12-Jun-15', 1, 4, '1434106374_widescreen-full-hd-wallpapers-1080p-photography-wallpapers-hd-wallpapers-1080p.jpg', 2, 'Widescreen Lighter', '3D'),
(117, '12-Jun-15', 0, 2, '1434106403_labels-mirroring-in-the-shades.jpg', 2, 'Gogals in lightings', '3D'),
(118, '12-Jun-15', 0, 6, '1434106427_The-Smurfs-HD_1440x900.jpg', 2, 'The-Smurfs-HD', '3D'),
(119, '12-Jun-15', 0, 1, '1434106443_Laughing-Minions-Despicable-Me-2.jpg', 2, 'Laughing-Minions-Despicable-Me', '3D'),
(120, '12-Jun-15', 0, 6, '1434106460_10373786_743231025699370_5017282817671327428_n.jpg', 2, 'Laughing-Minions', '3D'),
(121, '12-Jun-15', 0, 7, '1434106710_3d_sphere-1366x768.jpg', 2, '3d_sphere', '3D'),
(122, '12-Jun-15', 2, 12, '1434106726_ComputerDesktopWallpapersCollection228_016.jpg', 2, 'Shining Lighting in 3D', '3D'),
(123, '12-Jun-15', 0, 71, '1434106742_ComputerDesktopWallpapersCollection231_080.jpg', 2, 'Choclate heart', '3D'),
(124, '12-Jun-15', 2, 99, '1434106756_ComputerDesktopWallpapersCollection265_082.jpg', 2, 'cartoon small boy', '3D'),
(125, '26-Jun-15', 3, 197, '1435290925_default.jpg', 7, 'Triumph Speedmaster Models', 'Bike ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
