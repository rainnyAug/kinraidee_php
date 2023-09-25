-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 04:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `uname` varchar(200) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `uname`, `email`) VALUES
(38, 'psm022570', '5c23dec7722f11d56b2e7053b22e33cc', 'ขกวรรณ เตชะอาจอง', 'khokwan16@gmail.com'),
(39, 'Sompon', 'a97cbc6eedd59f771729484dd7e890b1', 'สมใจ เฮลบลูบอย', 'somsomsom@gmail.com'),
(40, 'UNOLAOTHONG', '25f9e794323b453885f5181f1b624d0b', 'อูโน่ หลาวทอง ', 'uno@gmail.com'),
(41, 'punpuninwza', '25f9e794323b453885f5181f1b624d0b', 'ปุณณภา กระบอกไม้ไผ่', 'punpuninwza@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `writing`
--

CREATE TABLE `writing` (
  `id` int(11) NOT NULL,
  `topic` varchar(200) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `r_name` varchar(200) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `category` varchar(200) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `score` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `writer` varchar(200) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `writer_id` int(11) NOT NULL,
  `des` mediumtext COLLATE utf8mb4_hungarian_ci NOT NULL,
  `pic` varchar(5000) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `writing`
--

INSERT INTO `writing` (`id`, `topic`, `r_name`, `category`, `score`, `writer`, `writer_id`, `des`, `pic`) VALUES
(32, 'ร้านก๋วยเตี๋ยวลึกลับในมศว', 'ร้านเตี๋ยวรูหลังโรงพละ', 'ของคาว', '9', 'อูโน่ หลาวทอง ', 40, '<p>ราคาไม่แพง อร่อยมากๆๆหมูนุ่ม มีน้ำบริการตัวเองมีน้ำแข็งใสด้วย แต่มีแค่บางครั้ง ถ้าคนเยอะก็รอนานหน่อย แต่ไปกินเถอะ อร่อยมากจ้าจ้าจ้า</p>\n<p><img src=\"post/imgD7A0239A-3604-4818-8381-2A31C0929ABE.jpg\" alt=\"\" width=\"786\" height=\"589\" loading=\"lazy\" /></p>\n<p>ถ้าหาร้านไม่เจอสังเกตได้จากป้ายนี้เลย สีแดงแรงฤทธิ์มากver</p>', 'https://cdn.discordapp.com/attachments/855846717094232117/946057663429636196/IMG_6135.jpg'),
(33, 'ชีสสส จุ้งงงงงงง', 'ร้านปิ้งเนย อโศก', 'ของคาว', '9', 'สมใจ เฮลบลูบอย', 39, '<p>เดินขึ้นบันไดไกล อาหารอร่อยเพราะเพื่อนดี ลดหนึ่งดาว&nbsp; กลับบ้านมาได้รับบาดแผล น้ำมันกระเด็น นั่งหลบน้ำมัน 2 ชม. แต่อร่อยค่ะ</p>', 'https://cdn.discordapp.com/attachments/855846717094232117/946058017311445043/ACC2AAC0-DED1-40AC-A1BE-900CC9335CF3.jpg'),
(34, 'ร้านเขาวัวล้วนๆ แต่เราควายล้วนๆ', 'ร้านวัวล้วนๆ ไม่มีควายผสม', 'เครื่องดื่ม', '9.5', 'ปุณณภา กระบอกไม้ไผ่', 41, '<p>อร่อยแบบไม่ต้องใส่น้ไปลา นมกลมกล่อม วิปครีมอร่อย แต่คนเยอะไปหน่อยคิวข้างหน้าเยอะ รอสักพักเหน็บกินขาแต่ก็ได้อยู๋ แต่ก็คุ้มกับการรอ เยี่ยม</p>', 'https://cdn.discordapp.com/attachments/855846717094232117/946058205212065872/IMG_6136.jpg'),
(35, 'ข้าวเหนียวแมะแมะแมะม่วง', 'ข้าวเหนียวมะม่วง เจ๊เเมะ', 'ของหวาน', '10', 'ขกวรรณ เตชะอาจอง', 38, '<p>คนหวาน ๆ อย่างเราก็ต้องกินของหวานสิคร๊าาาา แล้วหน้าร้อนแบบนี้ เหงื่อไหลแบบนี้ ก็ต้องหาอะไรหวานๆชื่นใจๆกินแล้วปะ!</p>\n<p>นี่เลย ขอแนะนำข้าวเหนียวมะม่วง บอกเลยว่าเจ้านี้คือดือออ เด็ดมากไม่ได้โม้ หมายถึงเด็ดมะม่วงออกจากต้นอ่ะเยอะมาก55555</p>\n<p><img src=\"https://s.isanook.com/wo/0/rp/rc/w850h510/yatxacm1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL3dvLzAvdWQvMzIvMTY0MzQ5L20uanBn.jpg\" alt=\"\" width=\"850\" height=\"510\" loading=\"lazy\" /></p>\n<p>มะม่วงก็คือเริ่ดดดดด หวานฉ่ำกำลังดี แม่ค้าบอกว่าเก็บมะม่วงจากสวนสด ๆ จากต้น แล้วก็ข้าวเหนียวมูนนะ โอ้โห้ววววววว อร่อยเริ่ดอย่าบอกใคร คือตัวข้าวเหนียวไม่แข็ง นุ่ม แบ้วน้ำกะทิก็มีความละมุนอ่ะแกรรรร งี้ต้องตำละปะ!</p>', 'https://cdn.discordapp.com/attachments/855846717094232117/945740314470129684/unknown.png'),
(36, 'ข้าวมันไก่ ข้าวมันใจ', 'ข้าวมันไก่เฮียหงส์', 'ของคาว', '10', 'ขกวรรณ เตชะอาจอง', 38, '<p>OMG OMG OMG นี่เป็นร้านอาหารที่ยอดเยี่ยมมาก ฉันรู้สึกชื่นชอบที่นี่เหลือเกิน</p>\n<p>และนี่คือเจ้าของร้านที่ฉันพบ</p>\n<p><img src=\"https://satitcom.spsm.ac.th/images/2021/05/17/screen-shot-2564-05-17-at-07.46.26.png\" alt=\"\" width=\"519\" height=\"698\" loading=\"lazy\" /></p>\n<p>โอ้วบุดด้า ฉันชื่นชอบอาหารของเขามาก เขาเป็นเชฟที่สุดยอด ท่าสับไก่ของเขาช่างเป็นลีลาที่อดเยี่ยมและประทับใจ</p>', 'https://cdn.discordapp.com/attachments/855846717094232117/945739314355134464/ajhn.png'),
(37, 'Flying to de moon', 'Biw on De Moon', 'ของหวาน', '10', 'ขกวรรณ เตชะอาจอง', 38, '<p>ฉันบอกเลยว่า สายคาเฟ่ถ้าไม่มาร้านนี้คือพลาดดดดดดดดดดดดดมากกกกกกกกกกกกกกกกกกกกก พลาดสิ่งสำคัญที่สุดในชีวิต เหมือนแกอยู่แม่กลองแล้วไม่กินปลาทู อยู่หนองมนไม่กินข้าวหลาม อยู่นครปฐมไม่กินส้มโอ ซิกเนเจอร์ขนมปังสังขยาก็คือปังปังปัง ปังสมชื่อขนมปังเลยค่ะซิส ซอรี่มากๆ ที่ไม่มีรูปประกอบ แต่ไม่ได้จริงๆ ถ่ายไม่ทันค่ะ กินหมดแล้ว</p>\n<p>ถ้าใครสงสัยว่ารูปหน้าปกคือใครน่ะหรอ หึ ฉันจะไม่บอกหรอกนะว่าเขาเป็นเจ้าของกิจการ ไม่บอกเด็ดขาดฮ่าๆๆๆๆ</p>', 'https://cdn.discordapp.com/attachments/855846717094232117/945747332153090088/ajbiw_start.png'),
(38, 'ส้มตำมะละกอส้มตำ', 'GRAPETUM', 'ของคาว', '10', 'ขกวรรณ เตชะอาจอง', 38, '<p>แซ่บแซ่บแซ่บแซ่บแซ่บ ทั้งเผ็ดทั้งแสบ แซ่บเข้าถึงทรวง</p>\n<p>คงไม่ต้องอธิบายอะไรมาก แค่เห็นรูปก็น้ำลายสอละ</p>\n<p><img src=\"https://cms.dmpcdn.com/travel/2020/04/08/74e0a420-795d-11ea-b4e9-0984d8e8648f_original.jpg\" alt=\"\" width=\"848\" height=\"566\" loading=\"lazy\" /></p>', 'https://cdn.discordapp.com/attachments/855846717094232117/945743406414565376/unknown.png'),
(40, 'หวานกรุบแบบย้อนยุค', 'แม๊ะ ขนมไทย', 'ของหวาน', '9', 'อูโน่ หลาวทอง ', 40, '<p>ใครไม่หยิบ ทองหยิบ!</p>\n<p>ไม่หยิบไม่ได้แล้วไหม ขนมไทยร้านนี้อร่อยขนาดนี้ อร่อยจนสายรุ้งออกจากปาก ยูนิคอร์นเห็นแล้วต้องร้องโอโห้ ยิ่งกินน้ำตาแห่งความปลื้มปริ่มก็ยิ่งไหล อีกนิดจำนวนน้ำก็น่าจะเท่าทะเลอ่าวไทยบ้านเรา</p>', 'https://cdn.discordapp.com/attachments/855846717094232117/945742361781215333/unknown.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writing`
--
ALTER TABLE `writing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `writing`
--
ALTER TABLE `writing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
