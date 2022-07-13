-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 11:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai_tr`
--

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(2) NOT NULL,
  `role` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggungj` text NOT NULL,
  `keahlian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`, `deskripsi`, `tanggungj`, `keahlian`) VALUES
(1, 'UI UX Designer', 'We are looking for a dynamic UI/UX designer who will be responsible for the user experience (UX) and user interface (UI) design of our mobile app/web. You will ensure that all elements of the online user experience are optimized for improved usability, usefulness, and exceptional visual design.\r\n\r\nThe successful candidate will evidence a passion for delivering adaptive and creative solutions to UI/UX design problems by staying up to date with best practices and emerging trends in user experience design and user interface technology.', '1. Investigating user experience design requirements for our suite of digital assets (mobile app/web).\r\n2. Developing and conceptualizing a comprehensive UI/UX design strategy for the mobile app.\r\n3. Producing high-quality UX design solutions through wireframes, visual and graphic designs, flow diagrams, storyboards, site maps, and prototypes.\r\n4. Designing UI elements and tools such as navigation menus, search boxes, tabs, and widgets for our digital assets.\r\n5. Testing UI elements such as CTAs, banners, page layouts, page designs, page flows, and target links for landing pages.\r\n6. Collaborating with the marketing team, and internal and external designers to ensure the creation and delivery of tailored experiences for the digital user.\r\n7. Providing advice and guidance on the implementation of UX research methodologies and testing activities in order to analyze and predict user behavior.\r\n8. Adhering to style standards on typography and graphic design.', '1. Minimum of 5 years UI/UX design experience for digital products or services.\r\n2. A portfolio of professional UI/UX design work for both web and mobile platforms.\r\n3. Working knowledge of the following technologies and software: Sketch, InVision, Visio, HTML, CSS (SCSS), iOS, Android, Design Systems, and Adobe Creative Suite.\r\n4. A team player but can work independently too.\r\n5. Excellent written and verbal communication skills.\r\n6. Multi-tasking and time-management skills, with the ability to prioritize tasks. Can join ASAP'),
(2, 'Web Developer', 'Ini deskripsi tentang webdev', 'Ini tanggung jawab tentang webdev', 'Ini keahlian tentang webdev'),
(3, 'Mobile Developer', 'Ini deskripsi tentang mobdev', 'Ini tanggung jawab tentang mobile', 'Ini keahlian tentang mobile');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `bio` text NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `linkedin`, `email`, `password`, `city`, `bio`, `foto`) VALUES
(1, 'Vasyilla Kautsar', 'linkedin.com/in/vasyilla-kautsar-8502241b7', 'vasyilla@gmail.com', 'vasyilla', 'Jember, Indonesia', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit debitis reprehenderit quaerat ab optio illo tempore! Quod voluptatum sequi ratione numquam quas, culpa, officiis libero explicabo aperiam minima aut debitis!', 'icon.jpg'),
(2, 'Dzikri Abyudzaky', 'linkedin.com/in/dzikri-abyu-8502241b7', 'dzikri@gmail.com', 'dzikri', 'Ngawi, Indonesia', 'Lorem ', 'icon.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
