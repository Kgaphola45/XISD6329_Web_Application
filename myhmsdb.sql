-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2020 at 02:34 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `ADMINTB` (
  `USERNAME` VARCHAR(50) NOT NULL,
  `PASSWORD` VARCHAR(30) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=LATIN1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `ADMINTB` (
  `USERNAME`,
  `PASSWORD`
) VALUES (
  'admin',
  'admin123'
);

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttb`
--

CREATE TABLE `APPOINTMENTTB` (
  `PID` INT(11) NOT NULL,
  `ID` INT(11) NOT NULL,
  `FNAME` VARCHAR(20) NOT NULL,
  `LNAME` VARCHAR(20) NOT NULL,
  `GENDER` VARCHAR(10) NOT NULL,
  `EMAIL` VARCHAR(30) NOT NULL,
  `CONTACT` VARCHAR(10) NOT NULL,
  `DOCTOR` VARCHAR(30) NOT NULL,
  `DOCFEES` INT(5) NOT NULL,
  `APPDATE` DATE NOT NULL,
  `APPTIME` TIME NOT NULL,
  `USERSTATUS` INT(5) NOT NULL,
  `DOCTORSTATUS` INT(5) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=LATIN1;

--
-- Dumping data for table `appointmenttb`
--

INSERT INTO `APPOINTMENTTB` (
  `PID`,
  `ID`,
  `FNAME`,
  `LNAME`,
  `GENDER`,
  `EMAIL`,
  `CONTACT`,
  `DOCTOR`,
  `DOCFEES`,
  `APPDATE`,
  `APPTIME`,
  `USERSTATUS`,
  `DOCTORSTATUS`
) VALUES (
  4,
  1,
  'Kishan',
  'Lal',
  'Male',
  'kishansmart0@gmail.com',
  '8838489464',
  'Ganesh',
  550,
  '2020-02-14',
  '10:00:00',
  1,
  0
),
(
  4,
  2,
  'Kishan',
  'Lal',
  'Male',
  'kishansmart0@gmail.com',
  '8838489464',
  'Dinesh',
  700,
  '2020-02-28',
  '10:00:00',
  0,
  1
),
(
  4,
  3,
  'Kishan',
  'Lal',
  'Male',
  'kishansmart0@gmail.com',
  '8838489464',
  'Amit',
  1000,
  '2020-02-19',
  '03:00:00',
  0,
  1
),
(
  11,
  4,
  'Shraddha',
  'Kapoor',
  'Female',
  'shraddha@gmail.com',
  '9768946252',
  'ashok',
  500,
  '2020-02-29',
  '20:00:00',
  1,
  1
),
(
  4,
  5,
  'Kishan',
  'Lal',
  'Male',
  'kishansmart0@gmail.com',
  '8838489464',
  'Dinesh',
  700,
  '2020-02-28',
  '12:00:00',
  1,
  1
),
(
  4,
  6,
  'Kishan',
  'Lal',
  'Male',
  'kishansmart0@gmail.com',
  '8838489464',
  'Ganesh',
  550,
  '2020-02-26',
  '15:00:00',
  0,
  1
),
(
  2,
  8,
  'Alia',
  'Bhatt',
  'Female',
  'alia@gmail.com',
  '8976897689',
  'Ganesh',
  550,
  '2020-03-21',
  '10:00:00',
  1,
  1
),
(
  5,
  9,
  'Gautam',
  'Shankararam',
  'Male',
  'gautam@gmail.com',
  '9070897653',
  'Ganesh',
  550,
  '2020-03-19',
  '20:00:00',
  1,
  0
),
(
  4,
  10,
  'Kishan',
  'Lal',
  'Male',
  'kishansmart0@gmail.com',
  '8838489464',
  'Ganesh',
  550,
  '0000-00-00',
  '14:00:00',
  1,
  0
),
(
  4,
  11,
  'Kishan',
  'Lal',
  'Male',
  'kishansmart0@gmail.com',
  '8838489464',
  'Dinesh',
  700,
  '2020-03-27',
  '15:00:00',
  1,
  1
),
(
  9,
  12,
  'William',
  'Blake',
  'Male',
  'william@gmail.com',
  '8683619153',
  'Kumar',
  800,
  '2020-03-26',
  '12:00:00',
  1,
  1
),
(
  9,
  13,
  'William',
  'Blake',
  'Male',
  'william@gmail.com',
  '8683619153',
  'Tiwary',
  450,
  '2020-03-26',
  '14:00:00',
  1,
  1
);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `CONTACT` (
  `NAME` VARCHAR(30) NOT NULL,
  `EMAIL` TEXT NOT NULL,
  `CONTACT` VARCHAR(10) NOT NULL,
  `MESSAGE` VARCHAR(200) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=LATIN1;

--
-- Dumping data for table `contact`
--

INSERT INTO `CONTACT` (
  `NAME`,
  `EMAIL`,
  `CONTACT`,
  `MESSAGE`
) VALUES (
  'Anu',
  'anu@gmail.com',
  '7896677554',
  'Hey Admin'
),
(
  ' Viki',
  'viki@gmail.com',
  '9899778865',
  'Good Job, Pal'
),
(
  'Ananya',
  'ananya@gmail.com',
  '9997888879',
  'How can I reach you?'
),
(
  'Aakash',
  'aakash@gmail.com',
  '8788979967',
  'Love your site'
),
(
  'Mani',
  'mani@gmail.com',
  '8977768978',
  'Want some coffee?'
),
(
  'Karthick',
  'karthi@gmail.com',
  '9898989898',
  'Good service'
),
(
  'Abbis',
  'abbis@gmail.com',
  '8979776868',
  'Love your service'
),
(
  'Asiq',
  'asiq@gmail.com',
  '9087897564',
  'Love your service. Thank you!'
),
(
  'Jane',
  'jane@gmail.com',
  '7869869757',
  'I love your service!'
);

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--

CREATE TABLE `DOCTB` (
  `USERNAME` VARCHAR(50) NOT NULL,
  `PASSWORD` VARCHAR(50) NOT NULL,
  `EMAIL` VARCHAR(50) NOT NULL,
  `SPEC` VARCHAR(50) NOT NULL,
  `DOCFEES` INT(10) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=LATIN1;

--
-- Dumping data for table `doctb`
--

INSERT INTO `DOCTB` (
  `USERNAME`,
  `PASSWORD`,
  `EMAIL`,
  `SPEC`,
  `DOCFEES`
) VALUES (
  'ashok',
  'ashok123',
  'ashok@gmail.com',
  'General',
  500
),
(
  'arun',
  'arun123',
  'arun@gmail.com',
  'Cardiologist',
  600
),
(
  'Dinesh',
  'dinesh123',
  'dinesh@gmail.com',
  'General',
  700
),
(
  'Ganesh',
  'ganesh123',
  'ganesh@gmail.com',
  'Pediatrician',
  550
),
(
  'Kumar',
  'kumar123',
  'kumar@gmail.com',
  'Pediatrician',
  800
),
(
  'Amit',
  'amit123',
  'amit@gmail.com',
  'Cardiologist',
  1000
),
(
  'Abbis',
  'abbis123',
  'abbis@gmail.com',
  'Neurologist',
  1500
),
(
  'Tiwary',
  'tiwary123',
  'tiwary@gmail.com',
  'Pediatrician',
  450
);

-- --------------------------------------------------------

--
-- Table structure for table `patreg`
--

CREATE TABLE `PATREG` (
  `PID` INT(11) NOT NULL,
  `FNAME` VARCHAR(20) NOT NULL,
  `LNAME` VARCHAR(20) NOT NULL,
  `GENDER` VARCHAR(10) NOT NULL,
  `EMAIL` VARCHAR(30) NOT NULL,
  `CONTACT` VARCHAR(10) NOT NULL,
  `PASSWORD` VARCHAR(30) NOT NULL,
  `CPASSWORD` VARCHAR(30) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=LATIN1;

--
-- Dumping data for table `patreg`
--

INSERT INTO `PATREG` (
  `PID`,
  `FNAME`,
  `LNAME`,
  `GENDER`,
  `EMAIL`,
  `CONTACT`,
  `PASSWORD`,
  `CPASSWORD`
) VALUES (
  1,
  'Ram',
  'Kumar',
  'Male',
  'ram@gmail.com',
  '9876543210',
  'ram123',
  'ram123'
),
(
  2,
  'Alia',
  'Bhatt',
  'Female',
  'alia@gmail.com',
  '8976897689',
  'alia123',
  'alia123'
),
(
  3,
  'Shahrukh',
  'khan',
  'Male',
  'shahrukh@gmail.com',
  '8976898463',
  'shahrukh123',
  'shahrukh123'
),
(
  4,
  'Kishan',
  'Lal',
  'Male',
  'kishansmart0@gmail.com',
  '8838489464',
  'kishan123',
  'kishan123'
),
(
  5,
  'Gautam',
  'Shankararam',
  'Male',
  'gautam@gmail.com',
  '9070897653',
  'gautam123',
  'gautam123'
),
(
  6,
  'Sushant',
  'Singh',
  'Male',
  'sushant@gmail.com',
  '9059986865',
  'sushant123',
  'sushant123'
),
(
  7,
  'Nancy',
  'Deborah',
  'Female',
  'nancy@gmail.com',
  '9128972454',
  'nancy123',
  'nancy123'
),
(
  8,
  'Kenny',
  'Sebastian',
  'Male',
  'kenny@gmail.com',
  '9809879868',
  'kenny123',
  'kenny123'
),
(
  9,
  'William',
  'Blake',
  'Male',
  'william@gmail.com',
  '8683619153',
  'william123',
  'william123'
),
(
  10,
  'Peter',
  'Norvig',
  'Male',
  'peter@gmail.com',
  '9609362815',
  'peter123',
  'peter123'
),
(
  11,
  'Shraddha',
  'Kapoor',
  'Female',
  'shraddha@gmail.com',
  '9768946252',
  'shraddha123',
  'shraddha123'
);

-- --------------------------------------------------------

--
-- Table structure for table `prestb`
--

CREATE TABLE `PRESTB` (
  `DOCTOR` VARCHAR(50) NOT NULL,
  `PID` INT(11) NOT NULL,
  `ID` INT(11) NOT NULL,
  `FNAME` VARCHAR(50) NOT NULL,
  `LNAME` VARCHAR(50) NOT NULL,
  `APPDATE` DATE NOT NULL,
  `APPTIME` TIME NOT NULL,
  `DISEASE` VARCHAR(250) NOT NULL,
  `ALLERGY` VARCHAR(250) NOT NULL,
  `PRESCRIPTION` VARCHAR(1000) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=LATIN1;

--
-- Dumping data for table `prestb`
--

INSERT INTO `PRESTB` (
  `DOCTOR`,
  `PID`,
  `ID`,
  `FNAME`,
  `LNAME`,
  `APPDATE`,
  `APPTIME`,
  `DISEASE`,
  `ALLERGY`,
  `PRESCRIPTION`
) VALUES (
  'Dinesh',
  4,
  11,
  'Kishan',
  'Lal',
  '2020-03-27',
  '15:00:00',
  'Cough',
  'Nothing',
  'Just take a teaspoon of Benadryl every night'
),
(
  'Ganesh',
  2,
  8,
  'Alia',
  'Bhatt',
  '2020-03-21',
  '10:00:00',
  'Severe Fever',
  'Nothing',
  'Take bed rest'
),
(
  'Kumar',
  9,
  12,
  'William',
  'Blake',
  '2020-03-26',
  '12:00:00',
  'Sever fever',
  'nothing',
  'Paracetamol -> 1 every morning and night'
),
(
  'Tiwary',
  9,
  13,
  'William',
  'Blake',
  '2020-03-26',
  '14:00:00',
  'Cough',
  'Skin dryness',
  'Intake fruits with more water content'
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmenttb`
--
ALTER TABLE `APPOINTMENTTB`
  ADD PRIMARY KEY (
    `ID`
  );

--
-- Indexes for table `patreg`
--
ALTER TABLE `PATREG`
  ADD PRIMARY KEY (
    `PID`
  );

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmenttb`
--
ALTER TABLE `APPOINTMENTTB` MODIFY `ID` INT(
  11
) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patreg`
--
ALTER TABLE `PATREG` MODIFY `PID` INT(
  11
) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

COMMIT;

-- createing table for registration for the person who is entering the details form
CREATE TABLE RELATIVE_TOELDERLY (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  FIRST_NAME VARCHAR(255) NOT NULL,
  LAST_NAME VARCHAR(255) NOT NULL,
  EMAIL VARCHAR(50) NOT NULL,
  PHYSICAL_ADDRESS VARCHAR(255) NOT NULL,
  ID_NUMBER VARCHAR(50) NOT NULL,
  RELATION VARCHAR(255) NOT NULL,
  GENDER VARCHAR(10) NOT NULL,
  CONTACT VARCHAR(15) NOT NULL,
  EMERGENCY_CONTACT VARCHAR(15) NOT NULL
);

INSERT INTO RELATIVE_TOELDERLY (
  `FIRST_NAME`,
  `LAST_NAME`,
  `EMAIL`,
  `PHYSICAL_ADDRESS`,
  `ID_NUMBER`,
  `RELATION`,
  `GENDER`,
  `CONTACT`,
  `EMERGENCY_CONTACT`
) VALUES (
  'Sipho',
  'Mokoena',
  'sipho.mokoena@example.com',
  '123 Main Road, Johannesburg',
  '8501015109080',
  'Family',
  'Male',
  '071-123-4567',
  '082-234-5678'
),
(
  'Zanele',
  'Ngcobo',
  'zanele.ngcobo@example.com',
  '456 Elm Street, Durban',
  '9001010624082',
  'Family',
  'Female',
  '073-234-5678',
  '083-345-6789'
),
(
  'Thabo',
  'Nkosi',
  'thabo.nkosi@example.com',
  '789 Oak Avenue, Pretoria',
  '7401015286080',
  'Relative',
  'Male',
  '074-345-6789',
  '079-456-7890'
),
(
  'Nandi',
  'Dlamini',
  'nandi.dlamini@example.com',
  '101 Pine Street, Cape Town',
  '8501010777085',
  'Relative',
  'Female',
  '081-456-7890',
  '074-567-8901'
),
(
  'Mandela',
  'Khosa',
  'mandela.khosa@example.com',
  '202 Cedar Road, Port Elizabeth',
  '8601015102087',
  'Family',
  'Male',
  '082-567-8901',
  '071-678-9012'
),
(
  'Lindiwe',
  'Radebe',
  'lindiwe.radebe@example.com',
  '303 Birch Lane, Bloemfontein',
  '9201010312089',
  'Relative',
  'Female',
  '076-678-9012',
  '083-789-0123'
);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;