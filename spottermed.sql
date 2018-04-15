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

--
-- Dumping data for table `BBQuestions`
--

INSERT INTO `BBQuestions` (`questionID`, `questionText`, `questionImageDirectory`, `answer`, `option1`, `option2`, `option3`, `option4`, `option5`, `option6`, `option7`, `option8`, `option9`, `option10`, `answerExplanation`) VALUES
(1, 'This photomicrograph of the medulla is at the level of the motor decussation. The gracile fasciculus is found here.', 'https://image.ibb.co/kDsTUx/q1_img.png', 'B', 'A', 'B', 'C', 'D', 'E', '', '', '', '', NULL, 'B. \r\n<br /> \r\nThe gracile fasciculus is a white matter tract. White matter tracts are darkly-stained in this photomicrograph.'),
(2, 'On this cast of the ventricular system, what is structure C?', 'https://preview.ibb.co/m0FXpx/q2_img.png', '4th Ventricle', 'Lateral Ventricle', 'Interventricular Foramen', '3rd Ventricle', '4th Ventricle', 'Cerebral Aqueduct', NULL, NULL, NULL, NULL, NULL, 'C is the 4th Ventricle.\r\nA is the Lateral Ventricle. \r\nB is the 3rd ventricle.\r\nD is the Cerebral Aqueduct.'),
(3, 'Which pair of eye muscles are responsible for the conjugate eye movement shown in this image?', 'https://i.imgur.com/4HXl4zp.jpg', 'Inferior Oblique and Superior Rectus', 'Inferior Oblique and Superior Rectus', 'Lateral Rectus and Medial Rectus', 'Inferior Rectus and Superior Oblique', 'Inferior Oblique and Inferior Rectus', 'Superior Rectus and Superior Oblique', NULL, NULL, NULL, NULL, NULL, 'Inferior Oblique and Superior Rectus. <br />\r\n\r\n\r\n\r\nSR: elevation, adduction, intorsion <br />\r\nMR: adduction <br />\r\nIR: depression, adduction, extorsion <br />\r\nLR: abduction <br />\r\nSO: depression, abduction, intorsion <br />\r\nIO: elevation, abduction, extorsion');
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
-- Dumping data for table `LCQuestions`
--

INSERT INTO `LCQuestions` (`questionID`, `questionText`, `questionImageDirectory`, `answer`, `option1`, `option2`, `option3`, `option4`, `option5`, `option6`, `option7`, `option8`, `option9`, `option10`, `answerExplanation`) VALUES
(1, 'Identify the bone that is fractured in this X-ray.', 'https://i.imgur.com/XX4ahEM.png', 'Ulnar', 'Radius', 'Fibula', 'Scaphoid', 'Tibia', 'Ulnar', NULL, NULL, NULL, NULL, NULL, 'Ulnar. <br />\r\nA fracture can be seen in the distal part of the ulnar bone (bone on the right of the diagram).'),
(2, 'What muscle is indicated by the yellow arrow?', 'https://i.imgur.com/Kb7guOg.png', 'Deltoid', 'Pectoralis Major', 'Deltoid', 'Triceps', 'Trapezius', 'Biceps', NULL, NULL, NULL, NULL, NULL, 'Deltoid. <br />\r\nA muscle forming the rounded contour of the human shoulder. The anterior fibres, as seen in the diagram, arises from most of the anterior border and upper surface of the lateral third of the clavicle'),
(3, 'What type of tissue is indicated by the arrow?', 'https://i.imgur.com/ik4aKiI.png', 'Dense Regular Fibrocollagenous Tissue', 'Skeletal Muscle', 'Smooth Muscle', 'Nervous Tissue', 'Dense Irregular Fibrocollagenous Tissue', 'Dense Regular Fibrocollagenous Tissue', NULL, NULL, NULL, NULL, NULL, 'Dense Regular Fibrocollagenous Tissue. <br />\r\n\r\nCollagen fibres are densely packed, and arranged in parallel. Nearby striated skeletal muscle suggests that this may be a tendon.'),
(4, 'What type of tissue is indicated by the arrow?', 'https://i.imgur.com/svgTcdT.png', 'Hyaline Cartilage', 'Fibrocartilage', 'Cancellous Bone', 'Hyaline Cartilage', 'Elastic Cartilage', 'Cortical Bone', NULL, NULL, NULL, NULL, NULL, 'Hyaline Cartilage. <br />\r\nIt has a glass-like (hyaline) but translucent cartilage. It is pearl-grey in colour and rich in type II collagen and chondroitin sulphate. Chondrocytes can be seen with lacuna (cavity), embedded in homogeneous matrix.');
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
