-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2016 at 06:23 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `champ`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` varchar(5) CHARACTER SET utf8 NOT NULL,
  `customer_type` int(2) DEFAULT NULL,
  `company_name` varchar(46) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(89) CHARACTER SET utf8 DEFAULT NULL,
  `town` varchar(17) CHARACTER SET utf8 DEFAULT NULL,
  `city` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `zip` int(5) DEFAULT NULL,
  `phone` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `fax` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `contact` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `credit` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_type`, `company_name`, `address`, `town`, `city`, `zip`, `phone`, `fax`, `contact`, `credit`) VALUES
('001', 1, 'บจก. เอเซีย แมชชินพาร์ท(สำนักงานใหญ่)', '222/11 ถนนวิภาวดีรังสิต ซอย 60 แขวงตลาดบางเขน เขตหลักสี่ กทม. 10210             ', 'เขตหลักสี่ ', 'กทม.', 10210, '02-940-9949', '02-579-9806', 'คุณชัยพงศ์', 30),
('A0002', 1, 'บจก. เอวัน ทูลส์เทค', '74 ซอยสว่าง 1 ถนนพระราม 4 แขวงมหาพฤฒาราม เขตบางรัก กทม. 10500', 'เขตบางรัก', 'กทม.', 10500, '02-611-7200', '02-611-7200-1', 'คุณวิทย์', 60),
('A0003', 1, 'อ้อมใหญ่ฟิทติ้งซ์ (สาขาที่ 00001)', '5/56 หมู่ 8 ถนนเพชรเกษม ต.อ้อมใหญ่ อ.สามพราน นครปฐม 73110', 'อ.สามพราน ', 'นครปฐม', 73110, '02-420-5535', '02-810-3394', 'คุณเกตุ', 60),
('A0004', 1, 'อ.เจริญการช่าง', '31/38-39 หมู่1 ต.เอกชัย บางขุมเทียน จอมทอง เขตจอมทอง กทม. 10150', 'เขตจอมทอง', 'กทม.', 10150, '02-415-3148', '', 'คุณโกวิทย์', 30),
('A0005', 1, 'บจก. โอโต้กาซ (ไทยแลนด์)', '26/26 หมู่บ้านพฤกษชาติ ซ.พฤกษชาติ26 ถ.รามคำแหง แขวงสะพานสูง กทม. 10240', 'เขตสะพานสูง', 'กทม.', 10240, '02-729-4767', '', 'คุณเด่นดวง', 30),
('A0006', 1, 'บมจ. อะโกร อินดัสเตรียล แมชชีนเนอรี่', '480 หมู่1  ถ.บ้านค่าย-บ้านบึง  ต.ละหารอ.ปลวกแดง ระยอง 21140', 'อ.ปลวกแดง', 'ระยอง', 21140, '02-6934101-5', '02-6934365 ', 'คุณนิพนธ์', 30),
('A0007', 3, 'บจก. เอี๊ยวเทียมบ๊วย/ บ.เอส.เค รีไซเคิล จก', '57/10-11 หมู่ 2 ถนนเลี่ยงเมืองนนทบุรี ต.ตลาดขวัญ อ.เมือง นนทบุรี 11000', 'อ.เมือง', 'นนทบุรี', 11000, '02-969-0001', '', 'คุณสมเกียรติ', 30),
('A0008', 1, 'ร้าน อะไหล่ยนต์ออโต้พาร์ท', '2100/176-178 ถนนรามคำแหง  ซอยรามคำแหง 24/1 หลังเซเว่นฯ แขวงหัวหมาก เขตบางกะปิ กทม. 10240', 'เขตบางกะปิ ', 'กทม.', 10240, '02-718-4440', '', 'คุณปุ๊', 60),
('A0009', 1, 'บจก. เอกฐากร', '44 ซอยเฉลิมพระเกียรติ ร.9ซอย 34  แขวงบางบอน เขตประเวศ กทม. 10250', 'เขตประเวศ', 'กทม.', 10250, '02-752-8221', '02-752-8220', 'คุณอรรถพล', 30),
('A0010', 1, 'หจก. อู่ทองแก๊ส', '594/1 หมู่ 1 ต.อู่ทอง สุพรรณบุรี 72160', 'อ.อู่ทอง', 'สุพรรณบุรี', 72160, '035-564-999', '', 'คุณท๊อป', 30),
('A0011', 1, 'บจก เอ แอนด์ วี พลาสติก กรุ๊ป(สำนักงานใหญ่)', '144/23-26 หมู่ 14 ซอยสุขสวัสดิ์ 62 ถนนสุขสวัสดิ์ ต. บางพึ่ง อ.พระประแดง สมุทรปราการ 10130', 'อ.พระประแดง', 'สมุทรปราการ', 10130, '02-463-9183', '02-462-6972-3', 'คุณวิชัย', 30),
('A0012', 1, 'ร้าน อมรซัพพลาย', '437/573 ถนนจรัญสนิทวงศ์ ซอยจรัญสนิทวงศ์ 35 หมู่บ้านแก้ววิลล่า แขวงบางขุนศรี 10130', 'เขตบางกอกน้อย', 'กทม.', 10700, '02-412-7102', '02-8648184', 'คุณอมร', 30),
('A0013', 1, 'บจก. เอเซีย เมทัล เอ็นจิเนียริ่ง', '1038 หมู่ที่13 ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 12120', 'อ.คลองหลวง', 'ปทุมธานี', 12120, '', '', 'ซื้ออะไหล่เครื่องจักร', 30),
('A0014', 1, 'บจก. อาณาจักรสลักภัณฑ์', '134/1 หมู่ 12 ถนนเพชรเกษม อ.กระทุ่มแบน สมุทรสาคร 74110', 'อ.กระทุ่มแบน', 'สมุทรสาคร', 74110, '02-812-8982-4', '02-812-8984', 'คุณจุไรรัตน์', 30),
('A0015', 1, 'บจก. บางกอกอินเตอร์พลาสติก (สำนักงานใหญ่)', '213 ซอยเอกชัย 69  แขวงบางบอน กทม. 10150', 'เขตบางบอน  ', 'กทม.', 10150, '02-415-7100', '02-899-4882', 'คุณวิชัย', 30),
('A0016', 1, 'หจก. บุญถึงฮาร์ดแวร์', '766.768.770 ซอยเทิดไท ถนนเทิดไท แขวงบุคคโล เขตธนบุรี กทม. กทม. 10600', 'เขตธนบุรี ', 'กทม.', 10600, '02-476-5281  ', '', '', 60),
('A0017', 1, 'เบญจฮาร์ดแวร์', '26 ซอยตากสิน 30 ถนนตากสิน แขวงบุคคโล เขตธนบุรี กทม 10600', 'เขตธนบุรี', 'กทม.', 10600, '02-468-0215 ', '02-476-3941', 'คุณวีระ', 60),
('A0018', 1, 'บี.เอ็น.ฮาร์ดแวร์ 2001', '588 ถนนจันทน์ (ซอยจันทน์45) เขตสาทร กทม. 10120 ', 'เขตสาทร', 'กทม.', 10120, '02-212-1601', '02-211-5472', 'คุณบุญเลิศ เลิศขจรสิน', 60),
('A0019', 1, 'บจก. บี.เค.ทันตภัณฑ์ (สำนักงานใหญ่)', '63 ซอยวชิรธรรมสาธิต 6 ถนนสุขุมวิท 101/1 แขวงบางนา  กทม. 10260', 'เขตบางนา', 'กทม.', 10260, '02-747-6168-9', '02-747-8688', 'คุณโอ๋', 30),
('A0020', 1, 'บางไผ่อะไหล่ยนต์', '1822/2-3 ถนนสุขุมวิท ปากซอยสุขุมวิท 56 แขวงบางจาก โขนง กทม. 10250', 'เขตพระโขนง', 'กทม.', 10250, '02-311-1108', '', 'คุณเล้ง', 30),
('A0021', 1, 'บจก. บี.เค.เจ แอดวานซ์โพรเซสส์', '99/1 หมู่ 3  ต. หนองชุมพลเหนือ อ.เขาย้อย เพชรบุรี 76140', 'อ.เขาย้อย ', 'เพชรบุรี', 76140, '02-463-2677', '', 'สนง.พระประแดง', 30),
('A0022', 1, 'บจก. บางใหญ่สลักภัณฑ์', '78/39-40 หมู่ที่ 6 ตำบลบางรักพัฒนา อ.บางบัวทอง นนทบุรี 11110', 'อ.บางบัวทอง', 'นนทบุรี', 11110, '02-221-0614', '', 'ติดต่อผ่านเทิร์นนิ่งช็อป', 30),
('A0023', 1, 'บจก ชื่นศิริ   (สาขา 00002)', '88 หมู่ 12 ถ.ประชาราษฎร์อุทิศ ต.ราชาเทวะ อ.บางพลี สมุทรปราการ 10540', 'อ.บางพลี', 'สมุทรปราการ', 10540, '02-312-4606', '02-312-4359', 'คุณสิริ  เหล่าศิริชน คุณเจนวิทย์/คุณโชดก', 30),
('A0024', 1, 'บจก. พีดับเบิ้ลยูที', '178 ซอยร่มเกล้า 56 ถนนร่มเกล้า แขวงคลองสามประเวศ เขตลาดกระบัง กทม. 10520', 'เขตลาดกระบัง ', 'กทม.', 10520, '02-915-0059', '02-543-9243', 'คุณเมย์', 30),
('A0025', 1, 'บจก. พี. เอส. เนเชอรัล ก๊าซ (เอเซีย)', '36 หมู่ 6 ซอยพัฒนาการ 59 แขวงประเวศ กทม. 10250', 'เขตประเวศ', 'กทม.', 10250, '02-512-0969', '02-512-0968', 'คุณพงษ์ศักดิ์ อาจขำ', 30),
('A0026', 1, 'บริษัท เพอร์เฟคดีปิโตรเลี่ยม', '11/2 หมู่ที่ 15 ต.ศาลาแดง อ.บางน้ำเปรี้ยว ฉะเชิงเทรา 24150', 'อ.บางน้ำเปรี้ยว', 'ฉะเชิงเทรา', 24150, '089-897-4697', '', 'คุณธีรา', 30),
('A0027', 1, 'บมจ. สหมิตรถังแก๊ส(สำนักงานใหญ่)', '92ซอยเทียนทะเล 7 แยก 4 ถนนบางขุนเทียน-ชายทะเล แขวงแสมดำ กทม. 10150', 'เขตบางขุนเทียน ', 'กทม.', 10150, '02-895-4139', '02-895-4163', 'คุณจิรศักดิ์', 30),
('A0028', 1, 'สมานแก๊สเซอร์วิส', '15/4 หมู่4 ถ.นาคนิวาส แขวงลาดพร้าว เขตลาดพร้าว กทม. 10230', 'เขตลาดพร้าว', 'กทม.', 10230, '02-542-4058', '', 'คุณธัณย์จิรา', 60),
('A0029', 1, 'บจก. ศรีนครแก๊สคอนเทนนิ่ง(โรงบรรจุยูนิค)', '49 หมู่ 13 ถนนวารีราชเดช ต. น้ำคำใหญ่ อ. เมือง ยโสธร 35000', 'อ. เมือง', 'ยโสธร', 35000, '045-724-374', '045-714-321', 'คุณศิรินทร', 60),
('A0030', 1, 'บจก. เอส.พี. อีเล็คทริค อินดัสตรี', '39/6 หมู่ 4 ต. สวนหลวง อ.กระทุ่มแบน สมุทรสาคร 74110', 'อ.กระทุ่มแบน', 'สมุทรสาคร', 74110, '034-875-261-7', '034-875-260', 'คุณสุรชัย', 30),
('A0031', 1, 'บจก. เอสพีวี แก๊ส', '99/2.99/3 หมู่ 8 ต.ในคลองบางปลากด อ.พระสมุทรเจดีย์ สมุทรปราการ 10290', 'อ.พระสมุทรเจดีย์ ', 'สมุทรปราการ', 10290, '088-353-6295', '02-816-2747', 'คุณอ้อม', 30),
('A0032', 1, 'บจก ที.เอ็ม.ซี. แมนูแฟคเจอริ่ง', '68/1 หมู่ 5 ต.หนองรี อ.เมืองชลบุรี ชลบุรี 20000', 'อ.เมืองชลบุรี', 'ชลบุรี', 20000, '038-799495', '038-799-567', '', 30),
('A0033', 1, 'บริษัท ถังเหล็กสากล จำกัด', '99 หมู่ 17 ถนนสามวา แขวงมีนบุรี เขตมีนบุรี กทม. 10510', 'เขตมีนบุรี', 'กทม.', 10510, '02-517-2977-8', '02-5179-587', 'คุณวรวิทย์ MD', 30),
('A0034', 1, 'บมจ ยูนิคแก๊สแอนด์ปิโตรเคมิคัลส์(สำนักงานใหญ่)', '553 อาคารเดอะพาลาเดียม ชั้น 30 ถนนราชปรารภ แขวงมักกะสัน เขตราชเทวี  กทม. 10400', 'เขตราชเทวี  ', 'กทม.', 10400, '02-120-9799', '02- 250-6014', 'คุณชูสิทธิ์', 30),
('A0035', 1, 'ปตท. จำกัด (มหาชน)', '555 ถ.วิภาวดีรังสิต แขวงจัตุจักร เขตจตุจักร 10900', 'เขตจตุจักร', 'กทม.', 10900, '02-537-2259', '', 'คุณยิ่งยศ ชลิโต', 30);

-- --------------------------------------------------------

--
-- Table structure for table `customers_type`
--

CREATE TABLE `customers_type` (
  `customer_type_id` int(2) NOT NULL,
  `customer_type` varchar(14) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers_type`
--

INSERT INTO `customers_type` (`customer_type_id`, `customer_type`) VALUES
(1, 'ในประเทศ'),
(2, 'ต่างประเทศ'),
(3, 'ขายเศษ'),
(4, 'ลูกหนี้ในเครือ');

-- --------------------------------------------------------

--
-- Table structure for table `mo`
--

CREATE TABLE `mo` (
  `mo_id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `po_id` int(11) NOT NULL,
  `customer_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mo_details`
--

CREATE TABLE `mo_details` (
  `mo_id` int(11) NOT NULL,
  `pruduct_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `po_id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` float(11,2) NOT NULL,
  `tax` float(11,2) NOT NULL,
  `total_tax` float(11,2) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `po_details`
--

CREATE TABLE `po_details` (
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unit_price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` float(11,2) NOT NULL,
  `duedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(7) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `unit` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `remark` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `pic` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `unit`, `price`, `remark`, `pic`, `quantity`) VALUES
('V001', 'วาล์ว V55EX-S', 'ตัว', 63, '         ว', 'imgs/NoPhoto.jpg', 0),
('V002', 'วาล์ว V55EX-N (แฮนวีลRT)', 'ตัว', 63, '', '', 0),
('V005-01', 'วาล์ว V64(แฮนทองเหลือง)', 'ตัว', 110, '', '', 0),
('V005-P1', 'วาล์ว V64 (H/W RTอลูมิเนียมพ่นสีเขียว/ตี Pi mark)', 'ตัว', 103, '', '', 0),
('V006-R1', 'วาล์ว V68', 'ตัว', 110, '', '', 0),
('V006-T9', 'วาล์ว V68(แฮนวีลทองเหลือง) ปตท', 'ตัว', 158, '', '', 0),
('V007', 'วาล์ว V15-S (SNAP-TIGHT)', 'ตัว', 82, '', '', 0),
('V010-P1', 'วาล์ว M17 #20mm (Pi mark)', 'ตัว', 82, '', '', 0),
('V012', 'วาล์ว F1 ฟรีออน 13.5 กก.', 'ตัว', 102, '', '', 0),
('V015', 'วาล์ว V2', 'ตัว', 110, '', '', 0),
('V017-S1', 'วาล์ว M20 #20mm (2.6mpa/MS831)', 'ตัว', 82, '', '', 0),
('V022-R1', 'วาล์ว F8', 'ตัว', 105, '', '', 0),
('V023', 'วาล์ว M16 (Clip on Valve)', 'ตัว', 82, '', '', 0),
('V024-R1', 'วาล์ว V69+OPD', 'ตัว', 125, '', '', 0),
('V028', 'วาล์ว V63', 'ตัว', 125, '', '', 0),
('V035-R1', 'วาล์ว V95', 'ตัว', 105, '', '', 0),
('V061-R1', 'วาล์วแค้มปิ้ง VCP-2 (รุ่นเฟือง)', 'ตัว', 45, '', '', 0),
('V077-R1', 'วาล์ว V67 (เกลียวทางเข้า W28.8-14/แฮนวีลทองเหลือง)', 'ตัว', 95, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ro`
--

CREATE TABLE `ro` (
  `ro_id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ro_details`
--

CREATE TABLE `ro_details` (
  `ro_id` int(11) NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `so`
--

CREATE TABLE `so` (
  `so_id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `so_details`
--

CREATE TABLE `so_details` (
  `so_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin@champ.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customers_type`
--
ALTER TABLE `customers_type`
  ADD PRIMARY KEY (`customer_type_id`);

--
-- Indexes for table `mo`
--
ALTER TABLE `mo`
  ADD PRIMARY KEY (`mo_id`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `ro`
--
ALTER TABLE `ro`
  ADD PRIMARY KEY (`ro_id`);

--
-- Indexes for table `so`
--
ALTER TABLE `so`
  ADD PRIMARY KEY (`so_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mo`
--
ALTER TABLE `mo`
  MODIFY `mo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ro`
--
ALTER TABLE `ro`
  MODIFY `ro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `so`
--
ALTER TABLE `so`
  MODIFY `so_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
