-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220817.de1eb66dbf
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 12:43 PM
-- Server version: 5.7.38-log
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mebis`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(65) NOT NULL,
  `library_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `book_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `book_status` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='60000001';

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `library_name`, `book_name`, `author`, `book_status`) VALUES
(61910008, 'North Campus Library', 'Algorithm', 'Kevin Wayne', 'Available'),
(61910009, 'North Campus Library', 'Basics Of Database', 'Reda Alhajj', 'Unavailable'),
(61910010, 'North Campus Library', 'Database', 'J.R.R Tolkien', 'Available'),
(61910011, 'North Campus Library', 'Microprocessor', 'J. K. Rowling', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_name` varchar(255) NOT NULL,
  `AKTS` int(255) NOT NULL,
  `class_no` varchar(255) NOT NULL,
  `course_type` varchar(255) NOT NULL,
  `lecturer` varchar(255) NOT NULL,
  `prerequisite` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_name`, `AKTS`, `class_no`, `course_type`, `lecturer`, `prerequisite`, `semester`) VALUES
('Algorithm', 8, 'C-210', 'Technical', 'Reda Alhajj', 'Data Structures', 'Spring'),
('Calculus 1', 8, 'CZ-16', 'Technical', 'Mehmet Rafet Ozdemir', 'NULL', 'Spring'),
('Calculus 2', 8, 'CZ-16', 'Technical', 'Mehmet Rafet Ozdemir', 'Calculus 1', 'Fall'),
('Data Structures', 8, 'C-310', 'Technical', 'Hasan Fehmi Ates', 'Object Oriented Programming', 'Fall'),
('Database', 8, 'C-210', 'Technical', 'Reda Alhajj', 'Object Oriented Programming', 'Spring'),
('Introduction to Programming', 6, 'C-211', 'Technical', 'Selim Akyokus', 'NULL', 'Fall'),
('Machine Learning', 6, 'C-313', 'Non-Technical', 'Bahadir Kursat Gunturk', 'NULL', 'Fall'),
('Microprocessor', 6, 'C-210', 'Technical', 'Mehmet Kocaturk', 'Introduction to Programming', 'Fall'),
('Object Oriented Programming', 8, 'C-212', 'Technical', 'Selim Akyokus', 'Introduction to Programming', 'Spring'),
('Probability', 8, 'CZ-12', 'Technical', 'Mehmet Kemal Ozdemir', 'Calculus 2', 'Spring'),
('Web Design', 8, 'C-315', 'Non-Technical', 'Muhsin Zahid Ugur', 'NULL', 'Spring');

-- --------------------------------------------------------

--
-- Table structure for table `dining`
--

CREATE TABLE `dining` (
  `date` date NOT NULL,
  `dining_name` varchar(255) NOT NULL,
  `soup` varchar(255) NOT NULL,
  `main_dish` varchar(255) NOT NULL,
  `side_dish` varchar(255) NOT NULL,
  `dessert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dining`
--

INSERT INTO `dining` (`date`, `dining_name`, `soup`, `main_dish`, `side_dish`, `dessert`) VALUES
('2020-06-19', 'North Campus Dining Hall', 'Mercimek Çorbası', 'Tas Kebabı', 'Pirinç Pilavı', 'Fıstıklı Baklava'),
('2020-06-20', 'North Campus Dining Hall', 'Yayla Çorbası', 'Kuru Fasulye', 'Bulgur Pilavı', 'Puding');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `course_name` varchar(255) NOT NULL,
  `exam_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`course_name`, `exam_name`) VALUES
('Algorithm', 'Algorithm Final'),
('Algorithm', 'Algorithm Midterm'),
('Calculus 1', 'Calculus 1 Final'),
('Calculus 1', 'Calculus 1 Midterm'),
('Calculus 2', 'Calculus 2 Midterm'),
('Calculus 2', 'Calculus Final'),
('Data Structures', 'Data Structures Final'),
('Data Structures', 'Data Structures Midterm'),
('Database', 'Database Final'),
('Database', 'Database Midterm'),
('Inroduction to Programming ', 'Introduction to Programming Final'),
('Introduction to Programming', 'Introduction to Programming Midterm'),
('Machine Learning', 'Machine Learning Final'),
('Machine Learning', 'Machine Learning Midterm'),
('Microprocessor', 'Microprocessor Final'),
('Microprocessor', 'Microprocessor Midterm'),
('Object Oriented Programming', 'Object Oriented Programming Final'),
('Object Oriented Programming', 'Object Oriented Programming Midterm'),
('Probability', 'Probability Final'),
('Probability', 'Probability Midterm'),
('Web Design', 'Web Design Final'),
('Web Design', 'Web Design Midterm');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_name` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_name`, `website`, `birthdate`, `email`, `degree`, `role`, `course_name`, `department`) VALUES
('Bahadir Kursat Gunturk', 'https://sens.medipol.edu.tr/b-k-gunturk/', '1986-06-06', 'bkgunturk@medipol.edu.tr', 'Dr', 'Lecturer', 'Machine Learning', 'CS'),
('Hasan Fehmi Ates', 'https://sens.medipol.edu.tr/h-fehmi-ates/', '1987-05-25', 'hfates@medipol.edu.tr', 'Professor', 'Lecturer', 'Data Structures', 'CS'),
('Mehmet Kocaturk', 'https://sens.medipol.edu.tr/m-kocaturk/', '1991-04-20', 'mkocaturk@medipol.edu.tr', 'Professor', 'Lecturer', 'Microprocessor', 'CS'),
('Mehmet Kemal Ozdemir', 'https://sens.medipol.edu.tr/m-kemal-ozdemir/', '1967-11-12', 'mkozdemir@medipol.edu.tr', 'Professor', 'Deputy Dean', 'Probability', 'EEE'),
('Mehmet Rafet Ozdemir', 'https://sens.medipol.edu.tr/m-rafet-ozdemir/', '1986-02-15', 'mrozdemir@medipol.edu.tr', 'Dr', 'Lecturer', 'Calculus 1, Calculus 2', 'COE'),
('Muhsin Zahid Ugur ', 'https://sens.medipol.edu.tr//m-z-ugur', '1992-12-26', 'mzugur@medipol.edu.tr', 'Professor', 'Lecturer', 'Web Design', 'CS'),
('Reda Alhajj', 'https://sens.medipol.edu.tr/reda- alhajj/', '1988-02-10', 'redajj@medipol.edu.tr', 'Assistant Professor', 'Lecturer', 'Algorithm, Database', 'EEE'),
('Selim Akyokus', 'https://sens.medipol.edu.tr/selim-akyokus/', '1982-08-14', 'sakyokus@medipol.edu.tr', 'Professor', 'Lecturer', 'Introduction to Programming, Object Oriented Programming', 'COE');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `student_id` int(25) NOT NULL,
  `other_uni_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_name`, `student_id`, `other_uni_name`) VALUES
('Mevlana', 64160001, 'Standard University'),
('Erasmus', 64160002, 'Harvard University'),
('Farabi', 64160003, 'Medipol University'),
('Mevlana', 64160004, 'Standard University'),
('Erasmus', 64160005, 'Harvard University'),
('Farabi', 64160006, 'Medipol University');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `birthdate` date NOT NULL,
  `course_code` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `course_type` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `advisor_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `degree` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `scholarship` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `grade` int(255) NOT NULL,
  `emp_type` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `birthdate`, `course_code`, `course_type`, `advisor_name`, `degree`, `scholarship`, `grade`, `emp_type`, `department`, `email`) VALUES
(64160001, 'Mark Kent', '1998-03-16', 'Database', 'Technical', 'Mehmet Kemal Ozdemir', 'Undergraduate', 'Full Scholarship', 3, 'Advanced Programming TA', 'Computer Science & Engineering', 'mark@medipol.edu.tr'),
(64160002, 'Jack', '1997-05-22', 'Database', 'Technical', 'Mehmet Kemal Ozdemir', 'Undergraduate', 'Full Scholarship', 3, 'Advanced Programming TA', 'Computer Science & Engineering', 'jacksmith@medipol.edu.tr'),
(64160003, 'Mert Cane Cakmak', '1999-05-25', 'Algorithm', 'Technical', 'Mehmet Kemal Ozdemir', 'Graduate', 'Half Scholarship', 1, 'NA', 'Computer Science & Engineering', 'mccakmak@st.medipol.edu.tr'),
(64160004, 'Harry Steve', '1999-08-22', 'Probability', 'Technical', 'Mehmet Kemal Ozdemir', 'Undergraduate', 'Half Scholarship', 4, 'NA', 'Computer Science & Engineering', 'harry@medipol.edu.tr'),
(64160005, 'John', '1998-02-15', 'Algorithm', 'Technical', 'Reda Alhajj', 'Graduate', 'Full Scholarship', 4, 'Advanced Programming TA', 'Computer Science', 'john@medipol.edu.tr'),
(64160006, 'Parker Cape', '1999-05-19', 'Web Design', 'Non-Technical', 'Muhsin Zahid Ugur', 'Ph.D', 'Full Scholarship', 3, 'Advanced Programming TA', 'Computer Science', 'pcape@medipol.edu.tr');

-- --------------------------------------------------------

--
-- Table structure for table `student_book`
--

CREATE TABLE `student_book` (
  `book_name` varchar(255) NOT NULL,
  `student_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_book`
--

INSERT INTO `student_book` (`book_name`, `student_id`) VALUES
('Algorithm', 64160003),
('Basics of Database', 64160002),
('Microprocessor', 64160006);

-- --------------------------------------------------------

--
-- Table structure for table `student_club`
--

CREATE TABLE `student_club` (
  `club_name` varchar(255) NOT NULL,
  `leader_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_club`
--

INSERT INTO `student_club` (`club_name`, `leader_id`) VALUES
('Girişimcilik Kulübü', 61170008),
('IEEE', 63150012),
('Kızılay', 64160014),
('Management and Economics Club', 62160008);

-- --------------------------------------------------------

--
-- Table structure for table `student_club_participants`
--

CREATE TABLE `student_club_participants` (
  `leader_id` int(25) NOT NULL,
  `participant_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_club_participants`
--

INSERT INTO `student_club_participants` (`leader_id`, `participant_id`) VALUES
(61170008, 64160001),
(61170008, 64160003),
(62160008, 64160002),
(63150012, 64160002),
(63150012, 64160004),
(63150012, 64160006),
(64160014, 64160004);

-- --------------------------------------------------------

--
-- Table structure for table `student_current_course`
--

CREATE TABLE `student_current_course` (
  `course_name` varchar(255) NOT NULL,
  `student_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_current_course`
--

INSERT INTO `student_current_course` (`course_name`, `student_id`) VALUES
('Algorithm', 64160003),
('Database', 64160001),
('Dtabase', 64160002),
('Probability', 64160004);

-- --------------------------------------------------------

--
-- Table structure for table `student_exam`
--

CREATE TABLE `student_exam` (
  `exam_name` varchar(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `grade` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_exam`
--

INSERT INTO `student_exam` (`exam_name`, `student_id`, `grade`) VALUES
('Algorithm Final', 64160002, 80),
('Algorithm Final', 64160003, 75),
('Algorithm Midterm', 64160002, 90),
('Algorithm Midterm', 64160003, 80),
('Algorithm Midterm', 64160005, 88),
('Database Final', 64160001, 95),
('Database Midterm', 64160001, 85),
('Probability Midterm', 64160004, 89),
('Web Design Final', 64160006, 64),
('Web Design Midterm', 64160006, 87);

-- --------------------------------------------------------

--
-- Table structure for table `student_past_courses`
--

CREATE TABLE `student_past_courses` (
  `student_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `final_grade` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_past_courses`
--

INSERT INTO `student_past_courses` (`student_id`, `course_name`, `final_grade`) VALUES
(64160001, 'Introduction to Programing', 87),
(64160001, 'Object Oriented Programming', 86),
(64160002, 'Data Structures', 70),
(64160002, 'Introduction to Programming', 89),
(64160002, 'Object Oriented Programming', 98),
(64160003, 'Data Structures', 90),
(64160003, 'Introduction to Programming', 82),
(64160004, 'Probability', 92),
(64160005, 'Algorithm ', 92),
(64160006, 'Web Design ', 45);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`email`, `name`, `password`, `phone`, `type`) VALUES
('ben@medipol.edu.tr', 'Ben', 'd927827c30fa1046252394a7eae63de4', '5600934567', 'student'),
('bkgunturk@medipol.edu.tr', 'Bahadir Kursat Gunturk', 'f2af05c5aa251371488734a734ab77e0', '5261617546', 'lecturer'),
('harry@medipol.edu.tr', 'Harry Steve', 'c22435c4f01787b7d4aa45ba1ac1185d', '5798665477', 'student'),
('hfates@medipol.edu.tr', 'Hasan Fehmi Ates', '83cf4639f7f680d1164e9ef1beb9140a', '5123989976', 'lecturer'),
('jacksmith@medipol.edu.tr', 'Jack', '7c76dd9542caeca6c80d635a625b290d', '5695043265', 'student'),
('john@medipol.edu.tr', 'John', '52060a990660b4b8bee0327357cfa71a', '5778734008', 'student'),
('mark@medipol.edu.tr', 'Mark Kent', '846656831950211dcbca933de8ad697c', '8209845738', 'student'),
('mccakmak@st.medipol.edu.tr', 'Mert Cane Cakmak', '807227aab24948476f1c666b88a53000', '5351234546', 'student'),
('mkocaturk@medipol.edu.tr', 'Mehmet Kocaturk', '3398e4b4a12d697dba4dca109b985a10', '5647723489', 'lecturer'),
('mkozdemir@medipol.edu.tr', 'Mehmet Kemal Ozdemir', 'f91999850cafa74b60d6a80d2fabcb77', '5453536226', 'lecturer'),
('mrozdemir@medipol.edu.tr', 'Mehmet Rafet Ozdemir', '12ad4e9768af16aef303e1b2d6ed5887', '5876342288', 'lecturer'),
('mzugur@medipol.edu.tr', 'Muhsin Zahid Ugur', '25db7887dfba70d748be4fe0c29562dd', '5162271567', 'lecturer'),
('pcape@medipol.edu.tr', 'Parker Cape', 'dc7bc2f3606767aa6897e34c6c9598fe', '5784948494', 'student'),
('redajj@medipol.edu.tr', 'Reda Alhajj', '59947b6ca5147fc6eab22d3c813ccb5f', '12312312', 'lecturer'),
('sakyokus@medipol.edu.tr', 'Selim Akyokus', '47c83b2aa3b74229279f8726c99a4e01', '5254633228', 'lecturer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `book_name` (`book_name`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_name`);

--
-- Indexes for table `dining`
--
ALTER TABLE `dining`
  ADD PRIMARY KEY (`date`,`dining_name`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`course_name`,`exam_name`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `FOREIGN KEY` (`email`);

--
-- Indexes for table `student_book`
--
ALTER TABLE `student_book`
  ADD PRIMARY KEY (`book_name`,`student_id`);

--
-- Indexes for table `student_club`
--
ALTER TABLE `student_club`
  ADD PRIMARY KEY (`club_name`);

--
-- Indexes for table `student_club_participants`
--
ALTER TABLE `student_club_participants`
  ADD PRIMARY KEY (`leader_id`,`participant_id`);

--
-- Indexes for table `student_current_course`
--
ALTER TABLE `student_current_course`
  ADD PRIMARY KEY (`course_name`);

--
-- Indexes for table `student_exam`
--
ALTER TABLE `student_exam`
  ADD PRIMARY KEY (`exam_name`,`student_id`);

--
-- Indexes for table `student_past_courses`
--
ALTER TABLE `student_past_courses`
  ADD PRIMARY KEY (`student_id`,`course_name`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61910012;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64160007;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`email`) REFERENCES `visitor` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
