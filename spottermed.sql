-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2018 at 02:14 PM
-- Server version: 10.2.13-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `spottermed`
--

-- --------------------------------------------------------

--
-- Table structure for table `BBQuestions`
--

CREATE TABLE `BBQuestions` (
  `questionID` int(10) UNSIGNED NOT NULL,
  `questionText` text NOT NULL,
  `questionImageDirectory` varchar(2083) DEFAULT NULL,
  `answer` tinytext DEFAULT NULL,
  `option1` tinytext DEFAULT NULL,
  `option2` tinytext DEFAULT NULL,
  `option3` tinytext DEFAULT NULL,
  `option4` tinytext DEFAULT NULL,
  `option5` tinytext DEFAULT NULL,
  `option6` tinytext DEFAULT NULL,
  `option7` tinytext DEFAULT NULL,
  `option8` tinytext DEFAULT NULL,
  `option9` tinytext DEFAULT NULL,
  `option10` tinytext DEFAULT NULL,
  `answerExplanation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `LCQuestions`
--

CREATE TABLE `LCQuestions` (
  `questionID` int(10) UNSIGNED NOT NULL,
  `questionText` text COLLATE utf8_unicode_ci NOT NULL,
  `questionImageDirectory` varchar(2083) CHARACTER SET utf8 DEFAULT NULL,
  `answer` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `option1` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `option2` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `option3` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `option4` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `option5` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `option6` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `option7` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `option8` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `option9` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `option10` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerExplanation` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BBQuestions`
--
ALTER TABLE `BBQuestions`
  ADD PRIMARY KEY (`questionID`);

--
-- Indexes for table `LCQuestions`
--
ALTER TABLE `LCQuestions`
  ADD PRIMARY KEY (`questionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BBQuestions`
--
ALTER TABLE `BBQuestions`
  MODIFY `questionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `LCQuestions`
--
ALTER TABLE `LCQuestions`
  MODIFY `questionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;
