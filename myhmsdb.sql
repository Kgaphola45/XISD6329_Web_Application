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
-- Database: `maindb`
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
  `donationfees` int(5) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int(5) NOT NULL,
  `doctorStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmenttb`
--

INSERT INTO `appointmenttb` (`pid`, `ID`, `fname`, `lname`, `gender`, `email`, `contact`, `doctor`, `donationfees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`)
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
-- Table structure for table `caregiver`
--

CREATE TABLE `caregiver` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `donationfees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caregiver`
--

INSERT INTO `caregiver` (`username`, `password`, `email`, `spec`, `donationfees`) VALUES
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
CREATE TABLE `user` (
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
  `cpassword` varchar(30) NOT NULL,
  `national_id` varchar(20) NOT NULL,
  `admission_date` date NOT NULL,
  `preferred_language` varchar(50) DEFAULT NULL,
  `emergency_contact_relation` varchar(50) DEFAULT NULL,
  `dietary_requirements` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `user` (
  `fname`, `lname`, `dob`, `gender`, `address`, `contact`, `email`, 
  `emergency_contact_name`, `emergency_contact_relationship`, `emergency_contact_number`, 
  `medical_conditions`, `allergies`, `current_medications`, `primary_doctor_name`, `doctor_contact`, 
  `special_needs`, `password`, `cpassword`, `national_id`, `admission_date`, 
  `preferred_language`, `emergency_contact_relation`, `dietary_requirements`
) 
VALUES 
('Thabo', 'Mokoena', '1952-04-17', 'Male', '123 Mandela St, Johannesburg', '0721234567', 'thabo.mokoena@gmail.com',
 'Nokuthula Mokoena', 'Daughter', '0732345678', 'Diabetes', 'None', 'Insulin', 'Dr. Smith', '0123456789',
 'Wheelchair Access', 'password123', 'password123', '7804175009083', '2023-05-14', 'English', 'Daughter', 'Low sugar diet'),
 
('Zanele', 'Nkosi', '1948-10-02', 'Female', '456 Vilakazi St, Soweto', '0739876543', 'zanele.nkosi@gmail.com',
 'Nomvula Nkosi', 'Granddaughter', '0747654321', 'Hypertension', 'None', 'Lisinopril', 'Dr. Van der Merwe', '0112233445',
 'Hearing Aid', 'password456', 'password456', '4810021234085', '2023-08-01', 'Zulu', 'Granddaughter', 'Low sodium diet'),
 
('Bongani', 'Sithole', '1945-01-25', 'Male', '789 Mbeki Ave, Durban', '0823456789', 'bongani.sithole@gmail.com',
 'Lerato Sithole', 'Son', '0834567890', 'Arthritis', 'Peanuts', 'Ibuprofen', 'Dr. Naidoo', '0212345678',
 'Assistance with walking', 'password789', 'password789', '4501255091082', '2023-04-21', 'English', 'Son', 'Vegetarian diet'),
 
('Nomsa', 'Dlamini', '1955-12-10', 'Female', '321 Khumalo Rd, Pretoria', '0826543210', 'nomsa.dlamini@gmail.com',
 'Thandi Dlamini', 'Niece', '0839876543', 'Asthma', 'Pollen', 'Inhaler', 'Dr. Jacobs', '0119876543',
 'Oxygen assistance', 'password321', 'password321', '5512100987083', '2023-06-30', 'Sotho', 'Niece', 'Gluten-free diet'),
 
('Sipho', 'Ngubane', '1950-07-30', 'Male', '111 Mandela Dr, Cape Town', '0835678912', 'sipho.ngubane@gmail.com',
 'Nandi Ngubane', 'Wife', '0846789123', 'Heart Disease', 'Shellfish', 'Aspirin', 'Dr. Patel', '0128765432',
 '24/7 Medical Supervision', 'password654', 'password654', '5007300995081', '2023-07-12', 'Xhosa', 'Wife', 'Low cholesterol diet');



-- --------------------------------------------------------

--
-- Table structure for table `prescriptiontb`
--

CREATE TABLE `prescriptiontb` (
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
-- Dumping data for table `prescriptiontb`
--

INSERT INTO `prescriptiontb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES
('Lebo ', 4, 11, 'Kishan', 'Sekgobela', '2020-03-27', '15:00:00', 'Cough', 'Nothing', 'Just take a teaspoon of Benadryl every night'),
('Jacob ', 2, 8, 'Alia', 'Mkhize', '2020-03-21', '10:00:00', 'Severe Fever', 'Nothing', 'Take bed rest'),
('Amos ', 9, 12, 'Makai', 'Makai', '2020-03-26', '12:00:00', 'Sever fever', 'nothing', 'Paracetamol -> 1 every morning and night'),
('Amelia ', 9, 13, 'Manamela', 'Manamela', '2020-03-26', '14:00:00', 'Cough', 'Skin dryness', 'Intake fruits with more water content');

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
    `additional_notes` TEXT DEFAULT NULL,
    `relative_preferred_language` VARCHAR(50)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Relative_ToElderly` (
    `first_name`, `last_name`, `gender`, `email`, `physical_address`, 
    `id_number`, `relation`, `contact`, `emergency_contact`, `additional_notes`, 
    `relative_preferred_language`
) VALUES
    ('Thabo', 'Mokoena', 'Male', 'thabo.mokoena@gmail.com', '123 Main Street, Pretoria', '9001015009087', 'Brother', '0821234567', '0827654321', 'N/A', 'Zulu'),
    ('Lindiwe', 'Nkosi', 'Female', 'lindiwe.nkosi@gmail.com', '456 Elm Street, Johannesburg', '8706120123456', 'Sister', '0832345678', '0838765432', 'N/A', 'Sesotho'),
    ('Sipho', 'Dlamini', 'Male', 'sipho.dlamini@gmail.com', '789 Oak Avenue, Durban', '6709051234567', 'Cousin', '0743456789', '0749876543', 'N/A', 'Xhosa'),
    ('Zanele', 'Khumalo', 'Female', 'zanele.khumalo@gmail.com', '321 Pine Road, Cape Town', '9503115432108', 'Daughter', '0765432109', '0769876543', 'N/A', 'Afrikaans'),
    ('Jabulani', 'Sibeko', 'Male', 'jabulani.sibeko@gmail.com', '654 Maple Drive, Bloemfontein', '8007056789012', 'Uncle', '0712345678', '0718765432', 'N/A', 'Setswana');
