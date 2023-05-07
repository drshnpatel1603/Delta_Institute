-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 08:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `a_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_id` varchar(150) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_type` varchar(50) NOT NULL DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `admin_name`, `admin_id`, `admin_password`, `admin_type`) VALUES
(1, 'Dishant', 'dishant.delta@gmail.edu', '6cae710709768e404ff476ccabda95c5', 'admin'),
(2, 'Darshan', 'darshan22@gmail.edu', 'c4eac0264f5b7bb1ab84f8a9f96387a2', 'staff'),
(3, 'Darshan', 'darshan.delta@gmail.edu', '44268f3e1262343012a841ccf45bc54f', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birth_date` varchar(30) NOT NULL,
  `joining_date` varchar(30) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`id`, `faculty_id`, `faculty_name`, `image`, `phone_no`, `email`, `birth_date`, `joining_date`, `branch`, `degree`) VALUES
(1, 2201, 'Naimish Vadodariya', '../Admin/image/Faculty/faculty_1.png', 9647824036, 'naimishvadodariya27@gmail.com', '1991-06-27', '2019-05-01', 'B.C.A', 'M.Tech'),
(2, 2204, 'Hemang Chath', '../Admin/image/Faculty/faculty_1.png', 8749621035, 'hemang.chath@delta.ac.in', '1986-06-22', '2019-03-01', 'B.B.A', 'B.E.'),
(3, 2202, 'Dixita Kagathara', '../Admin/image/Faculty/faculty_2.png', 9727747317, 'dixita.kagathara@delta.ac.in', '1983-01-06', '2020-10-05', 'B.C.A', 'M.E'),
(4, 2205, 'Vaseem Ghada', '../Admin/image/Faculty/faculty_3.png', 7844924592, 'vaseem.ghada@delta.ac.in', '1986-09-25', '2017-06-01', 'B.Com', 'M.E.'),
(5, 2203, 'Upesh Vaishnav', '../Admin/image/Faculty/faculty_3.png', 9876321762, 'rupesh.vaishnav@delta.ac.in', '1996-03-25', '2021-01-01', 'B.B.A', 'B.E.'),
(6, 2206, 'Shruti Maniar', '../Admin/image/Faculty/faculty_2.png', 7848962140, 'shruti.maniar@delta.ac.in', '1994-04-25', '2020-09-01', 'B.Com', 'B.E.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subject` varchar(80) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`, `subject`, `title`, `image`, `message`) VALUES
(7, '2022-09-30 06:19:23', 'Sport Activities', 'Cricket', '../Admin/image/News/cricket.jpg', 'Next month cricket team selection. Any one interested to participant so you registration your name in sport office.'),
(8, '2022-09-30 05:49:55', 'Diwali Festival', 'Celebration & Event ', '../Admin/image/News/Diwali.jpg', 'The five-day festival celebrates the victory of light over darkness.\r\nHindus across the world are celebrating Diwali.'),
(9, '2022-09-30 05:54:01', 'Advenchar', 'Kashmir Great Lakes Trek', '../Admin/image/News/Event.jpg', ' Kashmir Great Lakes Trek gives you an opportunity to feast your eyes with a magical view of ice melting from the glaciers and feeding the lakes with sheets of ice floating on the lakes.\r\nMore information to call +91 9874824586'),
(10, '2022-09-30 06:12:03', 'Garba Mahotsav 2022', 'Let`s play Dandiya', '../Admin/image/News/Graba.jpg', 'One of the unique attraction of this college Garba is that along with Maa Ambe, the visitors can visit the Durga pandal on the same ground.\r\nExperience 5-days of exhilaration, soulful music, culture and tradition at Delta Institute Garba Mahotsav.');

-- --------------------------------------------------------

--
-- Table structure for table `student_fee`
--

CREATE TABLE `student_fee` (
  `id` int(11) NOT NULL,
  `stu_id` varchar(30) NOT NULL,
  `amount` float NOT NULL,
  `last_paid_fee_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_fee`
--

INSERT INTO `student_fee` (`id`, `stu_id`, `amount`, `last_paid_fee_date`) VALUES
(1, 'BCA22001', 5000, '2022-09-28'),
(2, 'BCA22003', 200, '2022-09-28'),
(3, 'BCOM22001', 5000, '2022-09-29'),
(4, 'BCOM22002', 5000, '2022-09-29'),
(5, 'BBA22002', 800, '2022-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `stu_id` varchar(30) DEFAULT NULL,
  `enrollment` double DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `student_name` varchar(50) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `admission_date` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `father_phone_no` bigint(20) NOT NULL,
  `father_occupation` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `stu_id`, `enrollment`, `password`, `student_name`, `last_name`, `student_image`, `birth_date`, `email`, `phone_number`, `gender`, `status`, `branch`, `admission_date`, `category`, `father_name`, `father_phone_no`, `father_occupation`, `address`, `pincode`, `city`, `action`) VALUES
(1, 'BCA22001', 3203202616, '151e13f8a12cf5864c54b5401dd60b21', 'Dishant', 'Ginoya', '../Admin/image/Student/student_2.png', '2003-06-22', 'dishantginoya@gmail.com', 7863016737, 'Male', 'single', 'B.C.A', '2022-09-28', 'Open', 'Jivanbhai', 9924935142, 'Work Shop', 'Maruti park st 1 (patel st)', 360005, 'Rajkot', 'Activate'),
(2, NULL, NULL, NULL, 'Sonu', 'Jani', '../Admin/image/Student/girl_2.png', '2002-09-25', 'sonujani25@gmail.com', 9854713579, 'Female', 'single', 'B.C.A', '2022-09-24', 'Open', 'Babubhai', 7425753567, 'Work Shop', 'Near atmiya college', 360005, 'Rajkot', 'Deactivate'),
(3, 'BBA22001', 3203201577, '2de1f3fe473a1d7ff29c33f0f4050aab', 'Darshan', 'Malli', '../Admin/image/Student/student_3.png', '2002-03-16', 'darshanmalli@gmail.com', 9016956069, 'Male', 'single', 'B.B.A', '2022-09-29', 'Open', 'Kishorbhai', 9984512458, 'Agent', 'Mavdi kankot main road', 360004, 'Rajkot', 'Activate'),
(4, NULL, NULL, NULL, 'Komal', 'Tanna', '../Admin/image/Student/girl_1.png', '2004-01-25', 'kvtanna@gmail.com', 6378597452, 'Female', 'married', 'B.B.A', '2022-09-26', 'Open', 'Vijaybhai', 7849183245, 'Loyar', 'Near Kalawad road', 360006, 'Rajkot', 'Deactivate'),
(5, 'BBA22003', 3203201503, '8ed66383393f669713b8293636a8aeff', 'Pari', 'Kamani', '../Admin/image/Student/girl_3.png', '2003-04-15', 'papa.ki.pari@gmail.com', 8568240370, 'Female', 'married', 'B.B.A', '2022-09-26', 'Open', 'Bavnjibhai', 7494726482, 'Work Shop', 'Lodhika', 360009, 'Rajkot', 'Activate'),
(6, 'BBA22002', 3203201502, '856a8709ea469cb19f9e4c21da0206d2', 'Rohit', 'Shetty', '../Admin/image/Student/student_1.png', '2003-07-09', 'hitman09@gmail.com', 7284899176, 'Male', 'single', 'B.B.A', '2022-09-30', 'ST', 'Yashkumar', 8427301739, 'Loyar', 'Metoda GIDC ', 360008, 'Rajkot', 'Activate'),
(7, NULL, NULL, NULL, 'Aditya', 'Svani', '../Admin/image/Student/student_3.png', '2002-07-14', 'savni14072@gmail.com', 8895430147, 'Male', 'single', 'B.B.A', '2022-09-26', 'ST', 'Himatkumar', 7748929486, 'Loyar', 'Patidar chok', 360007, 'Rajkot', 'Deactivate'),
(8, 'BCA22003', 3203202603, '07be7d4f7190f51b503ffb6ee622d1e0', 'Pujaa', 'Mahi', '../Admin/image/Student/girl_2.png', '2001-11-01', 'pujaa.mahi011@gmail.com', 8452196014, 'Female', 'single', 'B.C.A', '2022-09-15', 'ST', 'Ramjibhai', 7324803104, 'Agent', 'Opp. Hospial chok', 360008, 'Rajkot', 'Activate'),
(9, 'BCOM22001', 3203201401, 'a9cc57913f442f3be7fe73bc10ed136d', 'Anil', 'Makwana', '../Admin/image/Student/student_1.png', '2002-02-20', 'a.forapple@gmail.com', 8469649368, 'Male', 'married', 'B.Com', '2022-09-27', 'ST', 'Premjibhai', 8524050642, 'Job', 'Kankot main road', 360003, 'Rajkot', 'Activate'),
(10, NULL, NULL, NULL, 'Kavya', 'Ladva', '../Admin/image/Student/girl_3.png', '2004-10-27', 'kpladva08@gmail.com', 7089548467, 'Female', 'single', 'B.C.A', '2022-09-27', 'ST', 'Pramodbhai', 9601204783, 'Loyar', 'Greenland chokadi', 360001, 'Rajkot', 'Deactivate'),
(11, 'BCA22002', 3203202602, 'b55212d5867955fa0d8bed9a3a38b524', 'Liza', 'Patel', '../Admin/image/Student/girl_2.png', '2001-10-03', 'liza.apatel03@gmail.com', 9988215577, 'Female', 'single', 'B.C.A', '2022-09-25', 'Open', 'Arvindbhai', 7894134520, 'Loyar', 'Near nava mava main road', 360005, 'Rajkot', 'Activate'),
(12, NULL, NULL, NULL, 'Raviraj', 'Jadeja', '../Admin/image/Student/student_3.png', '2003-07-26', 'j.bapu07@gmail.com', 9526741928, 'Male', 'married', 'B.C.A', '2022-09-28', 'OBC', 'Mohanlal', 6341590284, 'Agent', 'Tilala chokadi', 360001, 'Rajkot', 'Deactivate'),
(13, NULL, NULL, NULL, 'Mayur', 'Rajput', '../Admin/image/Student/student_2.png', '2001-04-29', 'mayur12@gmail.com', 7584830185, 'Male', 'single', 'B.Com', '2022-09-25', 'SE', 'Parshkumar', 8548950143, 'Work Shop', 'B/H big bazar main road', 360004, 'Rajkot', 'Deactivate'),
(14, 'BCOM22003', 3203201403, '3297fd83b8bfed91fb5a5e12769b16d5', 'Alexa', 'Ahir', '../Admin/image/Student/girl_1.png', '2002-08-25', 'a2.foralexahir@gmail.com', 7046225380, 'Female', 'single', 'B.Com', '2022-10-01', 'SE', 'Sivajibhai', 8815015064, 'Bus driver', 'Gondal road', 360006, 'Rajkot', 'Activate'),
(15, NULL, NULL, NULL, 'Jigar', 'Gosai', '../Admin/image/Student/student_1.png', '2001-03-01', 'j.forjigs@gmail.com', 9987456324, 'Male', 'married', 'B.Com', '2022-09-30', 'ST', 'Kanjibhai', 7984563485, 'Work Shop', 'Harighava road', 360002, 'Rajkot', 'Deactivate'),
(16, 'BCOM22002', 3203201402, '867668d2e0795cb85d463148bffdbf80', 'Kamil', 'Badi', '../Admin/image/Student/student_2.png', '2003-05-16', 'k.b1605@gmail.com', 9558887422, 'Male', 'single', 'B.Com', '2022-09-30', 'Open', 'Nishadbhai', 6426102812, 'Agent', 'Vakaner', 360004, 'Rajkot', 'Activate'),
(17, NULL, NULL, NULL, 'Hetvi', 'Vyas', '../Admin/image/Student/girl_3.png', '2000-08-16', 'hetvivyas16@gmail.com', 9748283713, 'Female', 'single', 'B.Com', '2022-10-01', 'Open', 'Kantibhai', 8954285438, 'Job', 'Shastri nagar-1', 360004, 'Rajkot', 'Deactivate');

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

CREATE TABLE `student_result` (
  `id` int(11) NOT NULL,
  `enrollment` double NOT NULL,
  `subject_1` varchar(50) NOT NULL,
  `in_1` int(11) NOT NULL,
  `th_1` int(11) NOT NULL,
  `subject_2` varchar(50) NOT NULL,
  `in_2` int(11) NOT NULL,
  `th_2` int(11) NOT NULL,
  `subject_3` varchar(50) NOT NULL,
  `in_3` int(11) NOT NULL,
  `th_3` int(11) NOT NULL,
  `subject_4` varchar(50) NOT NULL,
  `in_4` int(11) NOT NULL,
  `th_4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_result`
--

INSERT INTO `student_result` (`id`, `enrollment`, `subject_1`, `in_1`, `th_1`, `subject_2`, `in_2`, `th_2`, `subject_3`, `in_3`, `th_3`, `subject_4`, `in_4`, `th_4`) VALUES
(1, 3203201403, '1', 28, 53, '2', 29, 28, '3', 24, 33, '4', 28, 50),
(2, 3203202616, 'CS-25', 21, 30, 'CS-26', 25, 50, 'CS-27', 24, 42, 'CS-28', 26, 26),
(3, 3203201402, '1', 25, 34, '2', 27, 28, '3', 30, 36, '4', 26, 51);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fee`
--
ALTER TABLE `student_fee`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stu_id` (`stu_id`),
  ADD UNIQUE KEY `enrollment` (`enrollment`);

--
-- Indexes for table `student_result`
--
ALTER TABLE `student_result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enrollment` (`enrollment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty_info`
--
ALTER TABLE `faculty_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_fee`
--
ALTER TABLE `student_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student_result`
--
ALTER TABLE `student_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_result`
--
ALTER TABLE `student_result`
  ADD CONSTRAINT `student_result_ibfk_1` FOREIGN KEY (`enrollment`) REFERENCES `student_info` (`enrollment`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
