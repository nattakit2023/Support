-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 08:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `support`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('lcehht3vtsb40dbhaftn6lmsetuf1q1g', '127.0.0.1', 1694674375, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343637343337353b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('9vp0r81sv2l5dfo5nrn27iak85llh35k', '127.0.0.1', 1694676570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343637363537303b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('eci7vfpupfv46t339bhnmodb1itv7grv', '127.0.0.1', 1694677374, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343637373337343b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('q8vanvdionkbnh9dqci1qupknd7pn2uk', '127.0.0.1', 1694677735, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343637373733353b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('riuslhagikmcegfqf0f0ggvno1gb91e5', '127.0.0.1', 1694678672, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343637383637323b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('v70sunpqsq64imk4htc180v07b42n2bh', '127.0.0.1', 1694679487, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343637393438373b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('fkls1knrmdnmqoss46pj5u60aebeme2s', '127.0.0.1', 1694679788, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343637393738383b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('jivr4ua1jt854ihs0ov3go3frjc1ldkg', '127.0.0.1', 1694680089, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343638303038393b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('9h8s1g78p6kp0vm7gqj6sc53cddbhbfu', '127.0.0.1', 1694680417, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343638303431373b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('v0qsqrjpv2ngla0ubcp20cvphu2rld7d', '127.0.0.1', 1694681247, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343638313234373b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('ru4ljrqhhbrj23qa6vdg8ta60candk9f', '127.0.0.1', 1694682911, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343638323931313b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('2gm5vh2vv4mldjk3a08dle1is1bk9gfe', '127.0.0.1', 1694684617, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343638343631373b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('orh78v08nd75p6bmbpqv7bpbk5tch6lj', '127.0.0.1', 1694685297, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343638353239373b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('mojl7b4h33qbu7dv94ih4hnff4smbrlk', '127.0.0.1', 1694685450, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343638353239373b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('96unofsp30mah4hskhpvv3hr35d783f6', '127.0.0.1', 1694698603, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343639383630333b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('mqu8gv48sfc9feqpql4blhk3jip57ftc', '127.0.0.1', 1694699044, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343639393034343b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('mcktau3vv4ph7n5ft0itfrn90dim1b77', '127.0.0.1', 1694699474, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343639393437343b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('1e0mtc69315987t79ggdu7irs14m7mgb', '127.0.0.1', 1694700209, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343730303230393b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('ie4m5lcebkphneinmft7jea1coumt5iv', '127.0.0.1', 1694700210, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343730303230393b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('qkf9avt5gpmc5fi7euc7bmtglc8bgtpq', '127.0.0.1', 1694708515, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343730383531353b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('tqelc8deaj38j068tnb4e4ggns5vohaf', '127.0.0.1', 1694708819, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343730383831393b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('sck5afkto0a1i9chqu2hen0lfs9lrscd', '127.0.0.1', 1694709120, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343730393132303b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('d4t72am083jemud2q0slck2bsmuvln2f', '127.0.0.1', 1694709412, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343730393132303b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('1bekabvr06m5h4oi1ugjbajl5icv61jv', '127.0.0.1', 1694738287, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343733383238373b),
('4956se214obn6qq32lejnr75u305e1ra', '127.0.0.1', 1694738549, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343733383333393b),
('mfki3g3vmr0feeaum4toqa2f6972q6f4', '127.0.0.1', 1694738903, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343733383930333b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('8gubocac618o7e8k1q86o423jerk4h64', '127.0.0.1', 1694740292, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343734303239323b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('pe5ru72j04253b2s16jivq964v7cv28n', '127.0.0.1', 1694743967, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343734333936373b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('60c491lon0rqueu6gmv04ga8tjab1vpp', '127.0.0.1', 1694745873, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343734353837333b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('ofr1g1qiulhnm2uei33mufulhciqfaa3', '127.0.0.1', 1694746182, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343734363138323b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('0rm0hkrcmmnfs8jj0th5sjrh7291isib', '127.0.0.1', 1694746183, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343734363138323b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('p73qhud8sqp3rmorq8v75slme4pg9srb', '127.0.0.1', 1694757476, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343735373433323b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('5gl6sftcot3rtg1jsm420p1u5oa22ad3', '127.0.0.1', 1694757943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343735373934333b),
('um0aubs4k9jdvcb7ct5012qej9i95big', '127.0.0.1', 1694758408, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343735383430383b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b),
('dc2pe8b6070j0jdocatpa0jr304ddpuk', '127.0.0.1', 1694758513, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639343735383430383b61646d696e5f6e616d657c733a31333a2241646d696e6973747261746f72223b61646d696e5f69647c733a313a2231223b61646d696e5f706f736974696f6e7c733a353a2261646d696e223b);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `admin_username` varchar(50) NOT NULL COMMENT 'ชื่อผู้ใช้งานระบบ',
  `admin_password` varchar(100) NOT NULL COMMENT 'รหัสผ่านเข้าสู่ระบบ',
  `admin_position` varchar(10) NOT NULL COMMENT 'ตำแหน่ง \r\n- admin \r\n-employee',
  `admin_status` varchar(10) NOT NULL DEFAULT 'active' COMMENT 'สถานะ\r\n- active (ใช้งาน)\r\n- inactive (ไม่ใช้งาน)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_username`, `admin_password`, `admin_position`, `admin_status`) VALUES
(1, 'Administrator', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'active'),
(2, 'Sirawit Nachom', 'sirawit', 'd7316a3074d562269cf4302e4eed46369b523687', 'support', 'active'),
(3, 'Sayumpron Sirimajan', 'sayumpron', '7c222fb2927d828af22f592134e8932480637c0d', 'support', 'active'),
(4, 'Kirk Vilaimal', 'kirk', '7c222fb2927d828af22f592134e8932480637c0d', 'admin', 'active');

-- --------------------------------------------------------
--
-- Table structure for table `tbl_contract`
--

CREATE TABLE `tbl_contract` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(100) NOT NULL COMMENT 'ชื่อลูกค้า',
  `con_tel` varchar(15) NOT NULL COMMENT 'เบอร์โทร',
  `con_email` varchar(50) DEFAULT NULL COMMENT 'อีเมล'

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL,
  `pack_name` varchar(100) NOT NULL COMMENT 'ชื่อแพคเกจ'


) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id` int(11) NOT NULL,
  `service_invoice` varchar(20) NOT NULL COMMENT 'เลขที่ใบส่งซ่อม',
  `admin_name` varchar(20) NOT NULL COMMENT 'แอดมินที่ตีกลับ',
  `his_name` varchar(100) NOT NULL COMMENT 'หัวข้อแก้ไข',
  `descript` varchar(500) NOT NULL COMMENT 'เนื้อหา'

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `tbl_type_vesserl`
--

CREATE TABLE `tbl_type_vessel` (
  `id` int(11) NOT NULL COMMENT 'ไอดีเรือ',
  `ves_type` varchar(20) NOT NULL COMMENT 'ชนิดเรือ'

)  ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_type_vessel`
--

INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (1, 'Container Ship');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (2, 'Bulk Carrier');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (3, 'Platform Supply Vessel');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (4, 'Tanker');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (5, 'Cargo Ship');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (6, 'Oil Tanker');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (7, 'Fishing Vessel');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (8, 'Passenger Ship');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (9, 'Tugboat');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (10, 'Roll-on/Roll-off');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (11, 'Panamax');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (12, 'Barge');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (13, 'Reefer Ship');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (14, 'Suezmax');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (15, 'Handymax');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (16, 'Capesize');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (17, 'Chimical Tanker');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (18, 'Gas Carrier');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (19, 'Schooner');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (20, 'Sailling Ship');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (21, 'Aframax');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (22, 'Yacht');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (23, 'LNG Carrier');
INSERT INTO `tbl_type_vessel` (`id`, `ves_type`) VALUES (24, 'High-Speed Craft');


-- --------------------------------------------------------

--
-- Table structure for table `tbl_type_vesserl`
--

CREATE TABLE `tbl_service` (
  `service_id` int(11) NOT NULL,
  `service_invoice` varchar(20) NOT NULL COMMENT 'เลขที่ใบส่งซ่อม',
  `projects` varchar(50) NOT NULL COMMENT 'รหัสโปรเจค',
  `cus_name` varchar(100) NOT NULL COMMENT 'ชื่อลูกค้า',
  `cus_address` text NOT NULL COMMENT 'ที่อยู่ลูกค้า',
  `cus_tel` varchar(20) NOT NULL COMMENT 'เบอร์โทร',
  `cus_email` varchar(20) DEFAULT NULL COMMENT 'อีเมล์',
  `cus_zipcode` varchar(20) NOT NULL COMMENT 'รหัสไปรษณีย์',
  `ves_fleet` varchar(50) NOT NULL COMMENT 'ฟรีทเรือ',
  `ves_name` varchar(50) NOT NULL COMMENT 'ชื่อเรือ',
  `ves_type` varchar(50) NOT NULL COMMENT 'ชนิดเรือ',
  `ves_callsign` varchar(50) NOT NULL COMMENT 'Callsign',
  `ves_imo` varchar(50) NOT NULL COMMENT 'IMO',
  `ves_mmsi` varchar(50) NOT NULL COMMENT 'MMSI',
  `ves_year` varchar(50) NOT NULL COMMENT 'ปีที่สร้างเรือ',
  `ves_maintenance` varchar(50) NOT NULL COMMENT 'ซ่อมเรือ',
  `ves_survey` varchar(50) NOT NULL COMMENT 'สำรวจ',
  `ves_installation` varchar(50) NOT NULL COMMENT 'ติดตั้ง',
  `con_name` varchar(50) NOT NULL COMMENT 'ชื่อติดต่อคนบนเรือ',
  `con_tel` varchar(50) NOT NULL COMMENT 'เบอร์โทรติด่อคนบนเรือ',
  `con_email` varchar(50) NOT NULL COMMENT 'อีเมลติดต่อคนบนเรือ',
  `con_port` varchar(50) NOT NULL COMMENT 'ท่าเรือ',
  `engineer` varchar(50) NOT NULL COMMENT 'วิศวกรคุมงาน',
  `support_1` varchar(50) NOT NULL COMMENT 'ผู้ช่วยวิศวกรคนที่1',
  `remark` varchar(1000) COMMENT 'รีมาร์ค',
  `create_date` date NOT NULL COMMENT 'สร้างJob Order',
  `due_date` date NOT NULL COMMENT 'เริ่ม',
  `end_date` date NOT NULL COMMENT 'สิ้นสุด',
  `ETA` datetime NOT NULL COMMENT 'เรือเข้าท่า',
  `ETD` datetime NOT NULL COMMENT 'เรือออกท่า',
  `contract_start` date NOT NULL COMMENT 'เริ่มสัญญา',
  `contract_end` date NOT NULL COMMENT 'สิ้นสุดสัญญา',
  `service_status` varchar(10) NOT NULL DEFAULT 'created' COMMENT 'สถานะ\r\n-created สร้างใบแจ้งซ่อม\r\n-wait รับซ่อม/ระหว่างซ่อม\r\n- fixed รอรับ\r\n- done รับรถเรียบร้อย',
  `his_count` varchar(20) NOT NULL COMMENT 'จำนวนการตีกลับ',
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_detail`
--

CREATE TABLE `tbl_service_detail` (
  `id` int(11) NOT NULL,
  `service_invoice` varchar(13) NOT NULL COMMENT 'เลขใบสั่งซื้อ',
  `service_name` varchar(100) NOT NULL COMMENT 'ชื่อสินค้าและบริการ',
  `amount` int(10) NOT NULL COMMENT 'จำนวนสินค้า',  
  `detail` varchar(250) DEFAULT NULL COMMENT 'รายละเอียด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------
--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`service_invoice`);


--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `tbl_type_vessel`
--
ALTER TABLE `tbl_type_vessel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contract`
--
ALTER TABLE `tbl_contract`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_service_detail`
--
ALTER TABLE `tbl_service_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_vessel`
--
ALTER TABLE `tbl_type_vessel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `tbl_contract`
--
ALTER TABLE `tbl_contract`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `tbl_service_detail`
--
ALTER TABLE `tbl_service_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;