-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
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

CREATE TABLE `admintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttb`
--

CREATE TABLE `appointmenttb` (
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `docFees` int(5) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int(5) NOT NULL,
  `doctorStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmenttb`
--

INSERT INTO `appointmenttb` (`pid`, `ID`, `fname`, `lname`, `gender`, `email`, `contact`, `doctor`, `docFees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`)
VALUES
(1, 1001, 'Thabo', 'Molefe', 'Male', 'thabo.molefe@gmail.com', '0723456789', 'Dr. Mkhize', 500, '2024-09-10', '09:30:00', 1, 1),
(2, 1002, 'Sibongile', 'Nkosi', 'Female', 'sibongile.nkosi@gmail.com', '0734567890', 'Dr. Khumalo', 550, '2024-09-12', '11:00:00', 1, 0),
(3, 1003, 'Mandla', 'Zulu', 'Male', 'mandla.zulu@gmail.com', '0745678901', 'Dr. Naidoo', 600, '2024-09-14', '14:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`)
VALUES
('Nomsa Khumalo', 'nomsa.khumalo@gmail.com', '0723456789', 'I would like to inquire about volunteer opportunities at the old age home.'),
('Jabulani Dlamini', 'jabulani.dlamini@gmail.com', '0734567890', 'Please provide more information about your elderly care services.'),
('Thandiwe Mthembu', 'thandiwe.mthembu@gmail.com', '0745678901', 'I am interested in donating to support the old age home. How can I do this?');

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--

CREATE TABLE `doctb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `docFees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctb`
--

INSERT INTO `doctb` (`username`, `password`, `email`, `spec`, `docFees`) VALUES
('ThandoM', 'pass123', 'thando.m@goldenyears.com', 'Elderly Care Specialist', 500),
('NomsaD', 'securePass!', 'nomsa.d@goldenyears.com', 'Geriatric Nurse', 450),
('SiyandaK', 'Siyanda456!', 'siyanda.k@goldenyears.com', 'Alzheimer’s Specialist', 600),
('LeratoP', 'lerato789', 'lerato.p@goldenyears.com', 'Dementia Caregiver', 520),
('MandlaS', 'mandla321!', 'mandla.s@goldenyears.com', 'Palliative Care', 700),
('BongiN', 'Bongi2023', 'bongi.n@goldenyears.com', 'Physical Therapist', 480),
('ZandileT', 'ZandiStrong!', 'zandile.t@goldenyears.com', 'Occupational Therapist', 550),
('KhethiweR', 'khethiwe#2023', 'khethiwe.r@goldenyears.com', 'Psychiatric Nurse', 620),
('SibusisoV', 'Sibu@123', 'sibusiso.v@goldenyears.com', 'Nutritional Consultant', 460),
('NokuthulaB', 'nokuHealth!', 'nokuthula.b@goldenyears.com', 'Pain Management Specialist', 580);


-- --------------------------------------------------------

--
-- Table  for table `Elderly`
--

CREATE TABLE `patreg` (
  `pid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `emergency_contact_name` varchar(50) NOT NULL,
  `emergency_contact_relationship` varchar(50) NOT NULL,
  `emergency_contact_number` varchar(15) NOT NULL,
  `medical_conditions` text DEFAULT NULL,
  `allergies` text DEFAULT NULL,
  `current_medications` text DEFAULT NULL,
  `primary_doctor_name` varchar(50) DEFAULT NULL,
  `doctor_contact` varchar(15) DEFAULT NULL,
  `special_needs` text DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`fname`, `lname`, `dob`, `gender`, `address`, `contact`, `email`, `emergency_contact_name`, `emergency_contact_relationship`, `emergency_contact_number`, `medical_conditions`, `allergies`, `current_medications`, `primary_doctor_name`, `doctor_contact`, `special_needs`, `password`, `cpassword`)
VALUES
('Thabo', 'Molefe', '1954-06-12', 'Male', '123 Main Street, Johannesburg, Gauteng', '0723456789', 'thabo.m@gmail.com', 'Lerato Molefe', 'Wife', '0734567890', 'Hypertension', 'Penicillin', 'Lisinopril', 'Dr. Mkhize', '0745678901', 'None', 'password123', 'password123'),
('Sibongile', 'Nkosi', '1962-11-23', 'Female', '456 Oak Avenue, Durban, KwaZulu-Natal', '0823456789', 'sibongile.nk@egmail.com', 'Andile Nkosi', 'Son', '0834567890', 'Diabetes', 'None', 'Metformin', 'Dr. Khumalo', '0845678901', 'Wheelchair accessibility', 'securepass', 'securepass'),
('Mandla', 'Zulu', '1949-04-30', 'Male', '789 Pine Road, Cape Town, Western Cape', '0623456789', 'mandla.z@egmail.com', 'Nomvula Zulu', 'Daughter', '0634567890', 'Arthritis', 'None', 'Ibuprofen', 'Dr. Naidoo', '0645678901', 'Hearing aid required', 'mypassword', 'mypassword');


-- --------------------------------------------------------

--
-- Table structure for table `prestb`
--

CREATE TABLE `prestb` (
  `doctor` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `disease` varchar(250) NOT NULL,
  `allergy` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestb`
--

INSERT INTO `prestb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES
('Dinesh', 4, 11, 'Kishan', 'Lal', '2020-03-27', '15:00:00', 'Cough', 'Nothing', 'Just take a teaspoon of Benadryl every night'),
('Ganesh', 2, 8, 'Alia', 'Bhatt', '2020-03-21', '10:00:00', 'Severe Fever', 'Nothing', 'Take bed rest'),
('Kumar', 9, 12, 'William', 'Blake', '2020-03-26', '12:00:00', 'Sever fever', 'nothing', 'Paracetamol -> 1 every morning and night'),
('Tiwary', 9, 13, 'William', 'Blake', '2020-03-26', '14:00:00', 'Cough', 'Skin dryness', 'Intake fruits with more water content');

-- createing table for registration for the person who is entering the details form
CREATE TABLE `Relative_ToElderly` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `first_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `gender` VARCHAR(10) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `physical_address` VARCHAR(255) NOT NULL,
    `id_number` VARCHAR(50) NOT NULL,
    `relation` VARCHAR(255) NOT NULL,
    `contact` VARCHAR(15) NOT NULL,
    `emergency_contact` VARCHAR(15) NOT NULL,
    `additional_notes` TEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Relative_ToElderly` (`first_name`, `last_name`, `gender`, `email`, `physical_address`, `id_number`, `relation`, `contact`, `emergency_contact`, `additional_notes`)
VALUES
('Lerato', 'Molefe', 'Female', 'lerato.m@gmail.com', '123 Main Street, Johannesburg, Gauteng', '8001011234567', 'Wife', '0734567890', '0723456789', 'No additional notes'),
('Andile', 'Nkosi', 'Male', 'andile.nk@gmail.com', '456 Oak Avenue, Durban, KwaZulu-Natal', '8102022345678', 'Son', '0834567890', '0823456789', 'Allergic to shellfish'),
('Nomvula', 'Zulu', 'Female', 'nomvula.z@gmail.com', '789 Pine Road, Cape Town, Western Cape', '7903033456789', 'Daughter', '0634567890', '0623456789', 'Primary caregiver');