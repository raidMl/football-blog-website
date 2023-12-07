-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 09:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ess`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `mytime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `img`, `content`, `mytime`) VALUES
(1, 'ess histo', 'Web capture_7-4-2023_203317_localhost.jpeg', 'Entente Sportive Sétifienne (Arabic: الوفاق الرياضي السطايفي), known as Entente de Sétif, commonly referred to as ES Sétif or ESS for short, is an Algerian professional football club based in Sétif. The club was founded in 1958 and its colours are black and white. Their home stadium, the Stade 8 Mai 1945, has a capacity of 18,000 spectators. The club is currently playing in the Algerian Ligue Professionnelle 1.\r\n\r\nESS is one of the most successful clubs in Algeria, having won the Algerian Ligue Professionnelle 1 eight times and the Algerian Cup a record of eight times. They are also one of only three Algerian clubs to have won the CAF Champions League, winning it twice in 1988 and 2014. They have also won the Arab Champions League twice, in 2007 and 2008, as well as three North African Cups in 2009 and 2010. In 2015, they became the first Algerian club to win the CAF Super Cup since its creation in 1993.\r\n\r\nES Sétif became CAF Champions League champion by defeating DR Congo\'s AS Vita Club in the 2014 final; and the reigning CAF Super Cup champions, by beating Egypt\'s Al Ahly in the 2015 Super Cup[4] and the reigning Algerian Ligue Professionnelle 1 champions.\r\n\r\nHistory\r\nThe club was founded in 1958 by Ali Benaouda and Ali Layass as Entente Sportive Sétifienne (ESS), the name was later changed to Entente Pétroliers Sétifienne (EPS) in 1977, and again in 1984 it became known as Entente Plastique Sétifienne (EPS) and was then later changed back to Entente Sportive Sétifienne (ESS).[5]\r\n\r\nThe first colours of the club were green and the white, and following a confrontation with the French Army in a match with FC Gadir on May 8, 1945 colours changed to black and white as mourning for the events on this day. The Guessab Stadium was the original name for the club\'s home.\r\n\r\nES Sétif is one of the prestigious top flight Algerian clubs. The club has won the Algerian Cup 8 times, and is the only Algerian team to have won the Afro-Asia cup, in 1989 in Qatar.\r\n\r\nSince its foundation, ES Sétif has had 19 presidents, the first being Ibrahim Dokomi.[citation needed] The current president is Hassan Hammar.\r\n\r\nAfrican success\r\nIn 1988, ES Sétif won the African Cup of Champions Clubs by beating Iwuanyanwu Nationale of Nigeria 4–1 on aggregate in the final.[6] After losing the first leg 1–0 in Liberty Stadium, Ibadan, ES Sétif scored 4 goals in the return leg in Constantine to lift the trophy. ES Sétif were playing in the Algerian second division at time and are the only club in Africa to date to have won the African Cup of Champions Clubs while not being in the top flight.\r\n\r\nBy winning the 1988 African Cup of Champions Clubs, ES Sétif qualified for the 1989 Afro-Asian Club Championship, where they faced Al-Sadd of Qatar, winners of the 1988–89 Asian Club Championship. ES Sétif won both legs, 2–0 at home and 3–1 in Doha, to lift the trophy.[7] They are the only Algerian club to have won the ', '2023-04-18 18:38:28'),
(3, 'ESS club historiy', 'esss.png', '\"Entente Sportive Sétifienne (Arabic: الوفاق الرياضي السطايفي), known as Entente de Sétif and commonly referred to as ES Sétif or ESS, is an Algerian professional football club based in Sétif. The club was founded in 1958, and its colors are black and white. Their home stadium, the Stade 8 Mai 1945, has a capacity of 18,000 spectators. The club currently competes in the Algerian Ligue Professionnelle 1.\n\nESS is one of the most successful clubs in Algeria, having won the Algerian Ligue Professionnelle 1 eight times and the Algerian Cup a record eight times. It is also one of only three Algerian clubs to have won the CAF Champions League, securing victory twice in 1988 and 2014. Additionally, they have claimed the Arab Champions League twice (2007, 2008) and won three North African Cups in 2009 and 2010. In 2015, ES Sétif became the first Algerian club to win the CAF Super Cup since its creation in 1993.\n\nES Sétif achieved CAF Champions League success by defeating DR Congo\'s AS Vita Club in the 2014 final. They went on to become the reigning CAF Super Cup champions by defeating Egypt\'s Al Ahly in the 2015 Super Cup and were also the reigning Algerian Ligue Professionnelle 1 champions.\n\nHistory:\nThe club, founded in 1958 by Ali Benaouda and Ali Layass as Entente Sportive Sétifienne (ESS), underwent name changes, becoming Entente Pétroliers Sétifienne (EPS) in 1977. In 1984, it was known as Entente Plastique Sétifienne (EPS) before reverting to Entente Sportive Sétifienne (ESS) [5].\n\nInitially, the club\'s colors were green and white. However, after a confrontation with the French Army during a match with FC Gadir on May 8, 1945, the colors changed to black and white as a mark of mourning for the events on that day. The original name for the club\'s home was Guessab Stadium.\n\nES Sétif is among the prestigious top-flight Algerian clubs, having won the Algerian Cup eight times. It is the only Algerian team to have won the Afro-Asia Cup in 1989 in Qatar.\n\nSince its foundation, ES Sétif has had 19 presidents, with the first being Ibrahim Dokomi. The current president is Hassan Hammar.\n\nAfrican Success:\nIn 1988, ES Sétif won the African Cup of Champions Clubs by beating Iwuanyanwu Nationale of Nigeria 4–1 on aggregate in the final [6]. Despite playing in the Algerian second division at the time, they lost the first leg 1–0 in Liberty Stadium, Ibadan, and then scored four goals in the return leg in Constantine to lift the trophy.\n\nWinning the 1988 African Cup of Champions Clubs qualified ES Sétif for the 1989 Afro-Asian Club Championship, where they faced Al-Sadd of Qatar, winners of the 1988–89 Asian Club Championship. ES Sétif won both legs, 2–0 at home and 3–1 in Doha, to lift the trophy [7]. They remain the only Algerian club to have won the competition.\"\n\n\n\n\n\n', '2023-04-18 18:46:23'),
(4, '(ESS) is now part of the Sonelgaz group', 'download (1).png', 'During this meeting attended by local civil and security authorities, members of the National People\'s Assembly, the former leadership of the club, and representatives of national media, the local executive chief described this formalization as a \"historic milestone\" in the journey of the flagship club of the High Plateaus.\r\n\r\nExpressing gratitude to the President of the Republic, Mr. Abdelmadjid Tebboune, for his decision in favor of Entente, the Wali emphasized that reaching the final stage of the official transfer of ownership is \"the result of enormous work that took several months.\"\r\n\r\nMr. Deramchi expressed his strong desire to see the Sétif team, the \"club with 27 titles,\" regain its glory and resume winning national and continental titles, stating that a \"new era\" is now opening for the club. He thanked the former leaders for their efforts and the club\'s supporters for their unwavering commitment to their team while offering encouragement to the new administrative staff.\r\n\r\nThe CEO of Sonelgaz expressed his \"happiness\" at this happy conclusion of a series of efforts leading to the transfer of ownership, especially since it occurs in August, the month of the creation of ESS (in 1958).\r\n\r\n\"This is a significant event for Entente de Sétif but also for the Sonelgaz group, which will spare no effort to contribute to restoring this great club to its rightful place,\" Mourad Adjal also declared.\r\n\r\nA roadmap outlining various projects and the administrative and technical staff of the club was then presented by the new CEO of the sports company \"ESS Black Eagles,\" Nabil Gouasmia. The new CEO discussed major short and medium-term projects such as the construction of the training center, the rehabilitation of the former Hôtel de France, which will be used for the accommodation and catering of athletes, and other facilities.\r\n\r\nMr. Gouasmia also recalled, among other things, that the new technical staff of ES Sétif for the upcoming season will be composed of head coach Abdelkader Amrani and his assistant Malik Zorgane.', '2023-12-07 21:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `mail`, `password`) VALUES
(1, 'ess1958@gmail.com', '21ddd6b047d9ab9c96d97289d22cf5ca341a4606');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
