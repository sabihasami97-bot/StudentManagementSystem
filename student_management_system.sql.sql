-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2026 at 06:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cgpa` decimal(3,2) DEFAULT NULL,
  `course_name` varchar(100) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `enrollment_status` varchar(20) NOT NULL,
  `result_status` varchar(20) NOT NULL,
  `retake` varchar(10) NOT NULL,
  `supplementary` varchar(10) NOT NULL,
  `attendance` varchar(10) NOT NULL,
  `section` varchar(20) NOT NULL,
  `monthly_fee_status` varchar(20) NOT NULL,
  `project_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `name`, `department`, `email`, `phone`, `cgpa`, `course_name`, `semester`, `enrollment_status`, `result_status`, `retake`, `supplementary`, `attendance`, `section`, `monthly_fee_status`, `project_status`) VALUES
(10, '242-115-233', 'Sabiha Sami', 'CSE', 'sabihasami97@gmail.com', '01733003151', 3.89, 'DBMS', 'summer', 'Enrolled', 'Pass', 'No', 'No', '95%', 'E', 'Paid', 'Approved'),
(11, '242-115-215', 'rahnuma mostafa', 'CSE', 'rahnuma89@gmail.com', '01788865432', 3.95, 'DBMS', 'summer', 'Enrolled', 'Pass', 'No', 'No', '95%', 'E', 'Paid', 'Approved'),
(12, '242-115-213', 'halima jannat', 'CSE', 'halimajannat123@gmail.com', '01795594802', 3.78, 'DBMS', 'summer', 'Enrolled', 'Pending', 'No', 'No', '80%', 'E', 'Paid', 'Pending'),
(13, '242-115-227', 'umme koli', 'CSE', 'ummekoli98@gmail.com', '01844678940', 3.99, 'DBMS', 'summer', 'Enrolled', 'Pending', 'No', 'No', '10%', 'E', 'Paid', 'Approved'),
(15, '242-115-238', 'maisha farjana', 'CSE', 'maishafarjana87@gmail.com', '01987699400', 3.89, 'DBMS', 'summer', 'Pending', 'Pending', 'Yes', 'Yes', '80%', 'E', 'Paid', 'Pending'),
(16, '242-115-227', 'nusrat jahan', 'CSE', 'nusratjahan65@gmail.com', '0198765480', 3.77, 'DBMS', 'summer', 'Pending', 'Pass', 'Yes', 'No', '70%', 'E', 'Unpaid', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
