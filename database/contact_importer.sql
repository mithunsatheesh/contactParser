-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2011 at 12:01 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contact_importer`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` char(200) NOT NULL,
  `midname` char(200) NOT NULL,
  `name` char(200) NOT NULL,
  `title` char(100) NOT NULL,
  `company` char(100) NOT NULL,
  `mail1` char(200) NOT NULL,
  `mail2` char(200) NOT NULL,
  `mail3` char(200) NOT NULL,
  `phone1` char(40) NOT NULL,
  `phone2` char(40) NOT NULL,
  `phone3` char(40) NOT NULL,
  `address` char(200) NOT NULL,
  `wbpage` char(200) NOT NULL,
  `birthday` char(200) NOT NULL,
  `otherinfo` text NOT NULL,
  `contactnotes` text NOT NULL,
  `im` char(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=793 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `midname`, `name`, `title`, `company`, `mail1`, `mail2`, `mail3`, `phone1`, `phone2`, `phone3`, `address`, `wbpage`, `birthday`, `otherinfo`, `contactnotes`, `im`) VALUES
(741, ' . .  Gitanjali . . . \r', '', ' . .  Gitanjali . . . \r', '', '', 'geethu03@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(742, '/Â¡NÂ¤J tHE /iCT!m Â¤Â£ Ex@M$\r', '', '/Â¡NÂ¤J tHE /iCT!m Â¤Â£ Ex@M$\r', '', '', 'vinojviswam@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(743, 'A@Â®â™ª!THâ„¢ N\r', '', 'A@Â®â™ª!THâ„¢ N\r', '', '', 'aarjithn@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(744, 'ABHAY....BAC 2 GODS OWN COUNTRY............\r', '', 'ABHAY....BAC 2 GODS OWN COUNTRY............\r', '', '', 'abhayvarma987@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(745, 'Abhijith V.S\r', '', 'Abhijith V.S\r', '', '', 'strengthfire@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(746, 'Akhil nath\r', '', 'Akhil nath\r', '', '', 'flash_formatz@yahoo.co.in', '', '', '', '', '', '', '', '', '', '', ''),
(747, 'Ammu.... .... feel  @lone...........\r', '', 'Ammu.... .... feel  @lone...........\r', '', '', 'twinklingeyesammu@yahoo.com', '', '', '', '', '', '', '', '', '', '', ''),
(748, 'anjalielikutty143\r', '', 'anjalielikutty143\r', '', '', 'anjalielikutty143@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(749, 'Anoop Sudhakaran(now in auh} à¥\r', '', 'Anoop Sudhakaran(now in auh} à¥\r', '', '', 'extr3me.x@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(750, 'Anu Mohan\r', '', 'Anu Mohan\r', '', '', 'pyarii.anu@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(751, 'anup\r', '', 'anup\r', '', '', 'mynameisanup@yahoo.com', '', '', '', '', '', '', '', '', '', '', ''),
(752, 'AruN m .......siMpLie nA "BEVARE"\r', '', 'AruN m .......siMpLie nA "BEVARE"\r', '', '', 'm007.arun@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(753, 'B Z\r', '', 'B Z\r', '', '', 'divya_26784@yahoo.com', '', '', '', '', '', '', '', '', '', '', ''),
(754, 'bagyanath pg #live  with hapinees#\r', '', 'bagyanath pg #live  with hapinees#\r', '', '', 'bagyanathpg@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(755, 'Bastin ....BIG B  \r', '', 'Bastin ....BIG B  \r', '', '', 'bastin_tomy@rediffmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(756, 'Devi p\r', '', 'Devi p\r', '', '', 'devip007@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(757, 'ÃÃPÃ‘Ã‚ ....\r', '', 'ÃÃPÃ‘Ã‚ ....\r', '', '', 'dipnadivakaran26@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(758, 'Don Mathew\r', '', 'Don Mathew\r', '', '', 'dondon87@rediffmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(759, 'G@y@thri .\r', '', 'G@y@thri .\r', '', '', 'gayathriccgg@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(760, 'haarish\r', '', 'haarish\r', '', '', 'haarishharidasan@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(761, 'jithil ..kuch haan ...kuch naa.....\r', '', 'jithil ..kuch haan ...kuch naa.....\r', '', '', 'jithilvr@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(762, 'joe joil-with golden wings.....\r', '', 'joe joil-with golden wings.....\r', '', '', 'joiljoe007@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(763, 'JOMON... @ 9995300752\r', '', 'JOMON... @ 9995300752\r', '', '', 'jomonjoseph009@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(764, 'K.P.ANOOP <<<>>.\r', '', 'K.P.ANOOP <<<>>.\r', '', '', 'kptikku@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(765, 'miâ€ hunsatishâ„¢\r', '', 'miâ€ hunsatishâ„¢\r', '', '', 'mithunsatish@gmail.com', '', '', '9446655349', '', '', '', '', '', '', '', ''),
(766, 'michelle.joe3@gmail.com\r', '', 'michelle.joe3@gmail.com\r', '', '', 'michelle.joe3@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(767, 'Milthi Manoj\r', '', 'Milthi Manoj\r', '', '', 'milthimanoj@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(768, 'Mohammed SHIJIL\r', '', 'Mohammed SHIJIL\r', '', '', 'shijilk7r@hotmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(769, 'MuZiX On aN IntrNaltioNaL TouR\r', '', 'MuZiX On aN IntrNaltioNaL TouR\r', '', '', 'muzixtheone@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(770, 'Navin Dharmaraj\r', '', 'Navin Dharmaraj\r', '', '', 'navindharmaraj@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(771, 'NIRENJAN the 1 (..HATE FRIENDS..)\r', '', 'NIRENJAN the 1 (..HATE FRIENDS..)\r', '', '', 'nirenjan.the1@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(772, 'Nishant Sankaran\r', '', 'Nishant Sankaran\r', '', '', 'nishantsw@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(773, 'nithin\r', '', 'nithin\r', '', '', 'nithin.tn@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(774, 'nithin jose/ freedom on 1st july\r', '', 'nithin jose/ freedom on 1st july\r', '', '', 'nithinjose123@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(775, 'NiTiN GR\r', '', 'NiTiN GR\r', '', '', 'nithingrme@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(776, 'parameswaran TP\r', '', 'parameswaran TP\r', '', '', 'eeswar.2889@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(777, 'prayag k.j.\r', '', 'prayag k.j.\r', '', '', 'prayagu@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(778, 'Rakhimol s raju\r', '', 'Rakhimol s raju\r', '', '', 'lakshmi.rakhimol@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(779, 'Ranjith...missin ma frndzz....\r', '', 'Ranjith...missin ma frndzz....\r', '', '', 'ranjith2k@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(780, 'RASEEF T\r', '', 'RASEEF T\r', '', '', 'raseeft@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(781, 'ReJiN^^^ ^^all endS...\r', '', 'ReJiN^^^ ^^all endS...\r', '', '', 'rejin_rjn@yahoo.com', '', '', '', '', '', '', '', '', '', '', ''),
(782, 'rohit hols r ovr bak 2 coll again.\r', '', 'rohit hols r ovr bak 2 coll again.\r', '', '', 'goshorty50cent@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(783, 'sandeep busy times ahead\r', '', 'sandeep busy times ahead\r', '', '', 'sandeepksunil@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(784, 'sankaran ps\r', '', 'sankaran ps\r', '', '', 'sankaran.ps@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(785, 'sanu Da gr8\r', '', 'sanu Da gr8\r', '', '', 'krishna_sanoop@yahoo.com', '', '', '', '', '', '', '', '', '', '', ''),
(786, 'sanu kanjani\r', '', 'sanu kanjani\r', '', '', 'sanu.salu@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(787, 'Sarika "The Blue Rose.........."\r', '', 'Sarika "The Blue Rose.........."\r', '', '', 'sarikachakko@yahoo.co.in', '', '', '', '', '', '', '', '', '', '', ''),
(788, 'Smashing Magazine\r', '', 'Smashing Magazine\r', '', '', 'newsletter@smashingmagazine.com', '', '', '', '', '', '', '', '', '', '', ''),
(789, 'sneha anand\r', '', 'sneha anand\r', '', '', 'sneha_anandk@yahoo.co.in', '', '', '', '', '', '', '', '', '', '', ''),
(790, 'sone edison\r', '', 'sone edison\r', '', '', 'soneedison@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(791, 'Sruthy..... praying for peace.....\r', '', 'Sruthy..... praying for peace.....\r', '', '', 'srusosweet@yahoo.co.in', '', '', '', '', '', '', '', '', '', '', ''),
(792, 'Viswan K\r', '', 'Viswan K\r', '', '', 'k.viswaniyer@gmail.com', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `permenent`
--

CREATE TABLE IF NOT EXISTS `permenent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `midname` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `mail1` varchar(200) NOT NULL,
  `mail2` varchar(200) NOT NULL,
  `mail3` varchar(200) NOT NULL,
  `phone1` varchar(40) NOT NULL,
  `phone2` varchar(40) NOT NULL,
  `phone3` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `wbpage` varchar(200) NOT NULL,
  `birthday` varchar(200) NOT NULL,
  `otherinfo` text NOT NULL,
  `contactnotes` text NOT NULL,
  `im` char(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `permenent`
--

INSERT INTO `permenent` (`id`, `firstname`, `midname`, `name`, `title`, `company`, `mail1`, `mail2`, `mail3`, `phone1`, `phone2`, `phone3`, `address`, `wbpage`, `birthday`, `otherinfo`, `contactnotes`, `im`) VALUES
(1, '.', '., Gitanjali .,.', '.', 'rr', 'infosys', 'geethu03@gmail.com', 'Add secondary email', 'Add third email', 'Add a phone1', 'Add a phone2', 'Add a Phone3', 'Add an address', 'Add a Website or Service', 'Add a Birthday', 'Add Other Info', 'Add Contact Notes', 'Add an Instant Message'),
(2, '/¡N¤J', 'tHE /iCT!m ¤£', 'Ex@M$', '', '', 'vinojviswam@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'A@®?!TH™', '', 'N', '', '', 'aarjithn@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'ABHAY....', 'BAC 2 GODS OWN', 'COUNTRY............', '', '', 'abhayvarma987@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Abhijith', '', 'V.S', '', '', 'strengthfire@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Akhil', '', 'nath', '', '', 'flash_formatz@yahoo.co.in', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Ammu....', '.... feel', '@lone...........', '', '', 'twinklingeyesammu@yahoo.com', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'anjalielikutty143', '', '', '', '', 'anjalielikutty143@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Anoop', '', 'Sudhakaran', '', '', 'extr3me.x@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Anu', '', 'Mohan', '', '', 'pyarii.anu@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'anup', '', '', '', '', 'mynameisanup@yahoo.com', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'AruN', 'm .......siMpLie nA', '"BEVARE"', '', '', 'm007.arun@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'B', '', 'Z', '', '', 'divya_26784@yahoo.com', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'bagyanath', 'pg #live  with', 'hapinees#', '', '', 'bagyanathpg@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'Bastin', '....BIG', 'B', '', '', 'bastin_tomy@rediffmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'Devi', '', 'p', '', '', 'devip007@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'ÐÍPÑÂ', '', '....', '', '', 'dipnadivakaran26@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'Don', '', 'Mathew', '', '', 'dondon87@rediffmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'G@y@thri', '', '.', '', '', 'gayathriccgg@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'haarish', '', '', '', '', 'haarishharidasan@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'jithil', '..kuch haan ...kuch', 'naa.....', '', '', 'jithilvr@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'joe', 'joil-with golden', 'wings.....', '', '', 'joiljoe007@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'JOMON...', '@', '9995300752', '', '', 'jomonjoseph009@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'K.', 'P.ANOOP', '<<<>>.', '', '', 'kptikku@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'mi†hunsatish™', '', '', '', '', 'mithunsatish@gmail.com', '', '', '', '9446655349', '', '', '', '', '', '', ''),
(26, 'michelle.joe3@gmail.com', '', '', '', '', 'michelle.joe3@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'Milthi', '', 'Manoj', '', '', 'milthimanoj@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(28, 'Mohammed', '', 'SHIJIL', '', '', 'shijilk7r@hotmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(29, 'MuZiX', 'On aN IntrNaltioNaL', 'TouR', '', '', 'muzixtheone@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(30, 'Navin', '', 'Dharmaraj', '', '', 'navindharmaraj@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(31, 'NIRENJAN', 'the', '1', '', '', 'nirenjan.the1@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'Nishant', '', 'Sankaran', '', '', 'nishantsw@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'nithin', '', '', '', '', 'nithin.tn@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'nithin', 'jose/ freedom on 1st', 'july', '', '', 'nithinjose123@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'NiTiN', '', 'GR', '', '', 'nithingrme@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(36, 'parameswaran', '', 'TP', '', '', 'eeswar.2889@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(37, 'prayag', '', 'k.j.', '', '', 'prayagu@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(38, 'Rakhimol', 's', 'raju', '', '', 'lakshmi.rakhimol@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'Ranjith...', 'missin ma', 'frndzz....', '', '', 'ranjith2k@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(40, 'RASEEF', '', 'T', '', '', 'raseeft@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'ReJiN^^^', '^^all', 'endS...', '', '', 'rejin_rjn@yahoo.com', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'rohit', 'hols r ovr bak 2 coll', 'again.', '', '', 'goshorty50cent@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(43, 'sandeep', 'busy times', 'ahead', '', '', 'sandeepksunil@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'sankaran', '', 'ps', '', '', 'sankaran.ps@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(45, 'sanu', 'Da', 'gr8', '', '', 'krishna_sanoop@yahoo.com', '', '', '', '', '', '', '', '', '', '', ''),
(46, 'sanu', '', 'kanjani', '', '', 'sanu.salu@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'Sarika', '"The Blue Rose..........', '"', '', '', 'sarikachakko@yahoo.co.in', '', '', '', '', '', '', '', '', '', '', ''),
(48, '', '', 'Smashing Magazine', '', 'Smashing Media GmbH', 'newsletter@smashingmagazine.com', '', '', '', '', '', '', '', '', '', '', ''),
(49, 'Freiburg', '- 79098', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 'sneha', '', 'anand', '', '', 'sneha_anandk@yahoo.co.in', '', '', '', '', '', '', '', '', '', '', ''),
(51, 'sone', '', 'edison', '', '', 'soneedison@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(52, 'Sruthy.....', 'praying for', 'peace.....', '', '', 'srusosweet@yahoo.co.in', '', '', '', '', '', '', '', '', '', '', ''),
(53, 'Viswan', '', 'K', '', '', 'k.viswaniyer@gmail.com', '', '', '', '', '', '', '', '', '', '', '');
