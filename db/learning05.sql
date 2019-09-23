-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 04:47 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `learning05`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE IF NOT EXISTS `choice` (
`choice_id` int(11) NOT NULL,
  `choice_name` varchar(100) NOT NULL,
  `video` varchar(300) NOT NULL,
  `choice_detail` varchar(100) NOT NULL,
  `choice_status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`choice_id`, `choice_name`, `video`, `choice_detail`, `choice_status`) VALUES
(28, 'ทดสอบ 234', '1511SampleVideo_1280x720_1mb.mp4', 'ทดสอบ รายละเอียดจะ', 0),
(29, 'แขนกล คนนอนดึก', '14881SampleVideo_1280x720_2mb.mp4', 'sdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE IF NOT EXISTS `testing` (
`id` int(3) NOT NULL,
  `choice_id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL DEFAULT '',
  `c1` varchar(100) NOT NULL DEFAULT '',
  `c2` varchar(100) NOT NULL DEFAULT '',
  `c3` varchar(100) NOT NULL DEFAULT '',
  `c4` varchar(100) NOT NULL DEFAULT '',
  `answer` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `choice_id`, `question`, `c1`, `c2`, `c3`, `c4`, `answer`, `status`) VALUES
(1, 28, 'กรดชนิดใดที่อยู่ในน้ำมันถั่วเหลืองและน้ำมันดอกทานตะวัน', 'ออกซิเดซัน', 'ไลโนเลอิก', 'ไฮโดรลิซิส', 'ไอโซโพพิล', 2, 0),
(2, 28, 'คาร์โบไฮเดรตคืออาหารจำพวกใด', 'ข้าวจ้าว ข้าวโพด ข้าวเหนียว', 'ขนมกบเคี้ยว น้ำอัดลม', 'เนื้อหมู เนื้อไก่', 'กุ้ง ปลาหมึก หอย', 1, 0),
(3, 28, 'ผู้สูงอายุควรดื่มน้ำสะอดอย่างน้อยวันละกี่แก้ว', '2 - 4 แก้ว', '3 - 5 แก้ว', '6 - 8 แก้ว', '9 - 10 แก้ว', 3, 0),
(4, 28, 'ผู้สูงอายุที่เป็นโรคเบาหวานห้ามรับประทานผลไม้จำพวกใด', 'ทุเรียน ลำไย น้อยหน่า และขนุน', 'มะม่วง มะละกอ ส้ม และแก้วมังกร', 'ส้ม แตงโม องุ่น และสับปะรด', 'กล้วย แอปเปิ้ล ฝรั่ง และองุ่นเขียว', 1, 0),
(5, 28, 'การกายบริหาร คือการออกกำลังกายแบบใด', 'รำมวยจีน', 'เต้นแอโรบิก', 'คาร์ดิโอ', 'เต้น T25', 1, 0),
(6, 28, 'ผู้สูงอายุควรออกกำลังกายอย่างน้อยครั้งละกี่นาที', '10 – 50 นาที', '20 – 60 นาที', '30 – 60 นาที', '40 – 60 นาที', 2, 0),
(7, 28, 'ผู้สูงอายุมักมีปัญหาอาการท้องผูกซึ่งเกิดจากสาเหตุอะไร', 'กระเพราะอาหารและลำไส้ลดการบีบตัวตามอายุ', 'กระเพราะลำไส้อักเสบ', 'อาหารไม่ย่อย', 'ไม่ทานวิตามินอาหารเสริม', 1, 1),
(8, 28, 'บันไดที่ดีเหมะกับผู้สูงอายุไม่ควรเป็นลักษณะแบบใด', 'มีแสงสว่างพียงพอ', 'มีราวจับที่แข็งแรงทั้ง2ข้าง', 'มีสวิตช์ไฟ ทั้งด้านบนและด้านล่างของบันได', 'มีข้าวของระเกะระกะตั้งไว้ขวางทางบันได', 4, 0),
(9, 28, 'ห้องครัวสำหรับผู้สูงอายุไม่ควรเป็นลักษณะแบบใด', 'พื้นครัวไม่ควรลื่นและไม่สะท้อนแสง', 'บนโต๊ะไม่ควรมีของวางเกะกะ', 'ไม่ควรเก็บของในตู้สูงเกินไปสามารถหยิบจับของได้ง่ายๆ', 'หากหยิบจับของที่สูงไม่ถึง ผู้สูงอายุสามารถใช้บันไดปีนขึ้นไปได้', 4, 0),
(10, 28, 'ยาที่รับประทานก่อนอาหารควรรับประทานก่อนอย่างน้อยที่นาที', '10 นาที', '20 นาที', '30 นาที', '40 นาที', 3, 0),
(11, 28, 'ข้อใดคือเรื่องทั่วไปที่ผู้สูงอายุไม่ควรปฏิบัติ', 'เปิดไฟตรงทางเดินไปห้องน้ำ ตอนกลางคืน', 'หลีกเลี่ยงการสวมรองเท้าหลวมๆหรือรองเท้าส้นสูง', 'หากมีอาการเวียนศรีษะหลังจากกินยาเข้าไป ควรบอกแพทย์เพื่อนเปลี่ยนชนิดของยา', 'รับประทานยาตามใจชอบ ไม่ตามเวลาที่แพทย์สั่ง', 4, 0),
(12, 28, 'ข้อใดไม่ใช่วิธีที่ถูกต้องในการเตือนให้ผู้สูงอายุไม่ลืมรับประทานยา', 'นำกล่องใส่ยามาแยกชนิดของยาเพื่อจำชนิดของยาให้ง่ายขึ้น', 'ตั้งนาฬิกาปลุกเพื่อเตือนเวลาในการรับประทานยา', 'ใช้แอพพลิเคชั่นสำหรับเตือนให้รับประทานยาในสมาร์ทโฟน', 'ตะโกนเสียงดังๆเพื่อเตือนให้ผู้สูงอายุได้ยิน', 4, 0),
(13, 28, 'ยากลุ่ม ยานอนหลับ ยาคลายเครียด ยาแก้แพ้ และยาแก้ปวด ทำให้มีอาการข้างเคียงยกเว้นอาการใด', 'เวียนศรีษะ', 'ง่วงซึม', 'สับสน', 'เป็นลม', 4, 0),
(14, 28, 'ยากลุ่มต้านการอักเสบอาจทำให้ผู้สูงอายุเสี่ยงต่ออาการใด', 'โรคหัวใจ', 'ความดันต่ำ', 'เบาหวาน', 'ความดันโลหิตสูงหรือไตวาย', 4, 0),
(15, 28, 'ข้อใดคืองานอดิเรกที่เหมะสมกับผู้สูงอายุมากที่สุด', 'ดูแลสวนหรือต้นไม้', 'ขับมอเตอร์ไซค์ชมวิว', 'วิ่งออกกำลังกาย 10 กิโลเมตรในช่วงเที่ยง', 'ดื่มสุราสังสรรค์กับเพื่อน', 1, 0),
(16, 28, 'ข้อใด ไม่ใช่ การสร้างความรู้สึกมีคุณค่าให้กับผู้สูงอายุ', 'การขอคำปรึกษาในเรื่องการเลี้ยงลูก', 'การขอคำปรึกษาในเรื่องการดูแลบ้าน', 'การขอคำปรึกษาในเรื่องการกู้เงิน', 'การขอคำปรึกษาในเรื่องการทำอาหาร', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`ID` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `Userlevel` varchar(1) NOT NULL,
  `user_date` date NOT NULL,
  `user_stid` int(11) NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `Status` varchar(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Firstname`, `Lastname`, `email`, `phone`, `Userlevel`, `user_date`, `user_stid`, `session_id`, `Status`) VALUES
(48, 'user', 'Aa123456', 'ทดสอบ', 'User', 'User@gmail.com', '0834565129', 'M', '2020-03-31', 2123332222, 'fdc1e278676cd8877f58ab2b0c3dc5c6', 'Y'),
(44, 'admin', 'Aa123456', 'ทดสอบ', 'GGMM', 'admin@gmail.com', '0832215453', 'A', '2020-03-31', 2147483647, 'fdc1e278676cd8877f58ab2b0c3dc5c6', 'Y'),
(47, 'user1', 'Aa1234561', 'User1', 'User', 'User@gmail.com', '8888888888', 'M', '2020-03-31', 2147483647, 'fdc1e278676cd8877f58ab2b0c3dc5c6', 'Y'),
(49, 'nopp', 'Nn123456', 'Noppa', 'buss', '23.noop@gmail.com', '0982132155', 'M', '2021-08-16', 2147483647, 'nhdf4vd3c1p7kl3r26lto2eeb2', 'N'),
(50, 'dasdasdsa', 'Aa123123', 'asdasd', 'asdasd', 'asdasd@sads.df', '0578454212', 'M', '2021-09-22', 2147483647, 'pap9ced2jbggbbm9ui42bjliv0', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `user_learning`
--

CREATE TABLE IF NOT EXISTS `user_learning` (
`user_learning_id` int(10) NOT NULL,
  `choice_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_learning_bf` int(20) NOT NULL,
  `user_learning_af` varchar(20) NOT NULL,
  `user_learning_status` int(1) NOT NULL,
  `user_learning_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_learning`
--

INSERT INTO `user_learning` (`user_learning_id`, `choice_id`, `user_id`, `user_learning_bf`, `user_learning_af`, `user_learning_status`, `user_learning_date`) VALUES
(1, 28, 48, 1, '4', 0, '2019-09-23 14:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_testing`
--

CREATE TABLE IF NOT EXISTS `user_testing` (
`id` int(11) NOT NULL,
  `testing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_anw` int(11) NOT NULL,
  `user_bf` varchar(11) NOT NULL,
  `status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
 ADD PRIMARY KEY (`choice_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_learning`
--
ALTER TABLE `user_learning`
 ADD PRIMARY KEY (`user_learning_id`);

--
-- Indexes for table `user_testing`
--
ALTER TABLE `user_testing`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choice`
--
ALTER TABLE `choice`
MODIFY `choice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `user_learning`
--
ALTER TABLE `user_learning`
MODIFY `user_learning_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_testing`
--
ALTER TABLE `user_testing`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
