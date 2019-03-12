-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2019 at 03:24 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revel_soft_real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about_us`
--

CREATE TABLE `tb_about_us` (
  `about_us_id` int(5) NOT NULL,
  `about_us_title_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `about_us_sub_title_en` text COLLATE utf8_unicode_ci NOT NULL,
  `about_us_title_th` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `about_us_sub_title_th` text COLLATE utf8_unicode_ci NOT NULL,
  `about_us_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_about_us`
--

INSERT INTO `tb_about_us` (`about_us_id`, `about_us_title_en`, `about_us_sub_title_en`, `about_us_title_th`, `about_us_sub_title_th`, `about_us_img`) VALUES
(1, ' Penthouse', 'Penthouse apartment for sale located on Iancu Nicolae Road. Wit New Darwin suburb<br />\r\nMuirhead &ndash; which came in at number two with 49.7% price growth &ndash; and rapidly growing<br />\r\nnew Melbourne area, Clyde North, are examples of suburbs with high development,<br />\r\nexpansion potential and subsequent shifts in supply and demand.', 'เพนต์เฮาส์', 'เพนต์เฮาส์สำหรับขายตั้งอยู่บนถนน Iancu Nicolae ปัญญา New Darwin Muirhead ซึ่งครองอันดับ 2 ด้วยการเติบโตของราคา 49.7% และเติบโตอย่างรวดเร็ว พื้นที่เมลเบิร์นใหม่ไคลด์นอร์ ธ เป็นตัวอย่างของชานเมืองที่มีการพัฒนาสูง ศักยภาพในการขยายตัวและการเปลี่ยนแปลงที่ตามมาของอุปสงค์และอุปทาน', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_agent`
--

CREATE TABLE `tb_agent` (
  `agent_id` int(5) NOT NULL,
  `agent_name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `agent_name_th` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `agent_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `agent_detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `agent_detail_en` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_agent`
--

INSERT INTO `tb_agent` (`agent_id`, `agent_name_en`, `agent_name_th`, `agent_img`, `agent_detail_th`, `agent_detail_en`) VALUES
(2, 'Deliicious Foods a sadasd', 'อาหารอร่อย  sdasdas', '280220191035302802201910353050115942.png', 'สด สะอาด อร่อย ปลอดภัยd s dasd asd', 'We\'ve scoured the planetda  dasdas dasda sda '),
(5, 'asda', 'asd', '28022019103537280220191035371907149302.jpg', 'asdasdasd', 'sdasdasdasdasdasdasd'),
(7, 'Deliicious Foods a sadasd', 'อาหารอร่อย  sdasdas', '2802201910360628022019103606958300776.jpg', 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasd', 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_agent_head`
--

CREATE TABLE `tb_agent_head` (
  `agent_head_id` int(5) NOT NULL,
  `agent_head_title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `agent_head_sub_title_en` text COLLATE utf8_unicode_ci NOT NULL,
  `agent_head_title_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `agent_head_sub_title_th` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_agent_head`
--

INSERT INTO `tb_agent_head` (`agent_head_id`, `agent_head_title_en`, `agent_head_sub_title_en`, `agent_head_title_th`, `agent_head_sub_title_th`) VALUES
(1, 'FACILITIES', 'dasdasdasdasdsasdasdasd', 'สิ่งอำนวยความสะดวก', 'asdasdasasdasdasdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_company_profile`
--

CREATE TABLE `tb_company_profile` (
  `company_profile_id` int(5) NOT NULL,
  `company_profile_title_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company_profile_sub_title_en` text COLLATE utf8_unicode_ci NOT NULL,
  `company_profile_title_th` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company_profile_sub_title_th` text COLLATE utf8_unicode_ci NOT NULL,
  `company_profile_vision_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_profile_vision_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_profile_vision_detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `company_profile_vision_detail_en` text COLLATE utf8_unicode_ci NOT NULL,
  `company_profile_mission_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_profile_mission_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_profile_mission_detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `company_profile_mission_detail_en` text COLLATE utf8_unicode_ci NOT NULL,
  `company_profile_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_company_profile`
--

INSERT INTO `tb_company_profile` (`company_profile_id`, `company_profile_title_en`, `company_profile_sub_title_en`, `company_profile_title_th`, `company_profile_sub_title_th`, `company_profile_vision_th`, `company_profile_vision_en`, `company_profile_vision_detail_th`, `company_profile_vision_detail_en`, `company_profile_mission_th`, `company_profile_mission_en`, `company_profile_mission_detail_th`, `company_profile_mission_detail_en`, `company_profile_img`) VALUES
(0, 'COMPANYPROFILE', 'Penthouse apartment for sale located on Iancu Nicolae Road. Wit New Darwin suburb Muirhead &ndash; which came in at number two with 49.7% price growth &ndash; and rapidly growing new Melbourne area, Clyde North, are examples of suburbs with high development, expansion potential and subsequent shifts in supply and demand Penthouse apartment for sale located on Iancu Nicolae Road. Wit New Darwin suburb Muirhead &ndash; which came in at number two with 49.7% price growth &ndash; and rapidly growing new Melbourne area, Clyde North, are examples of suburbs with high development, expansion potential and subsequent shifts in supply and demand.&quot;', 'COMPANYPROFILE', 'เพนต์เฮาส์สำหรับขายตั้งอยู่บนถนน Iancu Nicolae ปัญญา New Darwin Muirhead ซึ่งครองอันดับ 2 ด้วยการเติบโตของราคา 49.7% และเติบโตอย่างรวดเร็ว พื้นที่เมลเบิร์นใหม่ไคลด์นอร์ ธ เป็นตัวอย่างของชานเมืองที่มีการพัฒนาสูง ศักยภาพในการขยายตัวและการเปลี่ยนแปลงที่ตามมาของอุปสงค์และอุปทานในอพาร์ทเมนท์เพนต์เฮาส์เพื่อขายตั้งอยู่บน ถนน Iancu Nicolae ปัญญา New Darwin Muirhead ซึ่งครองอันดับ 2 ด้วยการเติบโตของราคา 49.7% และเติบโตอย่างรวดเร็ว พื้นที่เมลเบิร์นใหม่ไคลด์นอร์ ธ เป็นตัวอย่างของชานเมืองที่มีการพัฒนาสูง ศักยภาพในการขยายและการเปลี่ยนแปลงของอุปสงค์และอุปทานในเวลาต่อมา&quot;', 'วิสัยทัศน์', 'VISION', 'ชื่อย่อยวิสัยทัศน์', '\"expansion potential and subsequent shifts\"', 'หน้าที่', 'MISSION', 'คำอธิบายหน้าที่', '\"expansion potential shifts\"', '26022019162311260220191623111232915682.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `contact_id` int(5) NOT NULL,
  `contact_title_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contact_country` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `contact_type_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`contact_id`, `contact_title_id`, `contact_firstname`, `contact_lastname`, `contact_email`, `contact_tel`, `contact_country`, `contact_type_id`, `contact_text`) VALUES
(8, '2', '', '', '', '', 'THA', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_head`
--

CREATE TABLE `tb_contact_head` (
  `contact_head_id` int(5) NOT NULL,
  `contact_head_detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_head_detail_en` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact_head`
--

INSERT INTO `tb_contact_head` (`contact_head_id`, `contact_head_detail_th`, `contact_head_detail_en`) VALUES
(1, 'sdfsdf', 'easfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_title`
--

CREATE TABLE `tb_contact_title` (
  `contact_title_id` int(5) NOT NULL,
  `contact_title_name_th` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `contact_title_name_en` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact_title`
--

INSERT INTO `tb_contact_title` (`contact_title_id`, `contact_title_name_th`, `contact_title_name_en`) VALUES
(1, 'กหดหกด', 'หกดหกดหกด'),
(2, 'ฟหกฟหกฟห', 'กฟหกฟหกฟห');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_type`
--

CREATE TABLE `tb_contact_type` (
  `contact_type_id` int(5) NOT NULL,
  `contact_type_name_th` varchar(200) NOT NULL,
  `contact_type_name_en` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_contact_type`
--

INSERT INTO `tb_contact_type` (`contact_type_id`, `contact_type_name_th`, `contact_type_name_en`) VALUES
(1, 'หกดหกดหก', 'ดหกดหกดหกด'),
(2, 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_us`
--

CREATE TABLE `tb_contact_us` (
  `contact_us_id` int(5) NOT NULL,
  `contact_us_title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_title_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_sub_title_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_sub_title_th` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_facebook` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_th` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_1_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_1_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_2_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_2_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_3_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_3_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_fax` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact_us`
--

INSERT INTO `tb_contact_us` (`contact_us_id`, `contact_us_title_en`, `contact_us_title_th`, `contact_us_sub_title_en`, `contact_us_sub_title_th`, `contact_us_facebook`, `contact_us_tel`, `contact_us_address_en`, `contact_us_address_th`, `contact_us_address_1_en`, `contact_us_address_1_th`, `contact_us_address_2_en`, `contact_us_address_2_th`, `contact_us_address_3_en`, `contact_us_address_3_th`, `contact_us_address_4`, `contact_us_fax`, `contact_us_email`) VALUES
(8, 'CONTACT REALESTATE', 'CONTACT REALESTATE', 'กฟหกฟหก', 'ฟหกฟห', 'https://www.facebook.com/real', '089-652-5147 089-652-7777', '606/13 SOI EKAMAI 28', '606/13 ซอยเอกมัย 28\n', 'SUKUMVIT 63 RD', 'ถนนสุขุมวิท 63\n', 'KLONGTON NUA ', 'คลองตันเหนือ\n', 'WATTANA MANGKOK', 'วัฒนามะม่วง\n', '10110 ', '029-652-5147\n', 'REALESTATE@GMAILCOM\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_country`
--

CREATE TABLE `tb_country` (
  `ct_code` char(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสประเทศ',
  `ct_nameENG` varchar(200) NOT NULL COMMENT 'ชื่อภาษาอังกฤษ',
  `ct_nameTHA` varchar(200) NOT NULL COMMENT 'ชื่อภาษาไทย',
  `code` char(2) NOT NULL COMMENT 'ชื่อย่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_country`
--

INSERT INTO `tb_country` (`ct_code`, `ct_nameENG`, `ct_nameTHA`, `code`) VALUES
('ABW', 'Aruba', 'อารูบา', 'AW'),
('AFG', 'Afghanistan', 'อัฟกานิสถาน', 'AF'),
('AGO', 'Angola', 'แองโกลา', 'AO'),
('AIA', 'Anguilla', 'แองกวิลลา', 'AI'),
('ALA', 'Åland', 'โอลันด์', 'AX'),
('ALB', 'Albania', 'แอลเบเนีย', 'AL'),
('AND', 'Andorra', 'อันดอร์รา', 'AD'),
('ARE', 'United Arab Emirates', 'สหรัฐอาหรับเอมิเรตส์\n', 'AE'),
('ARG', 'Argentina', 'อาร์เจนตินา', 'AR'),
('ARM', 'Armenia', 'อาร์เมเนีย', 'AM'),
('ASM', 'American Samoa', 'อเมริกันซามัว', 'AS'),
('ATA', 'Antarctica', 'ทวิปแอนตาร์กติกา', 'AQ'),
('ATF', 'French Southern Territories', 'ดินแดนทางตอนใต้ของฝรั่งเศส', 'TF'),
('ATG', 'Antigua and Barbuda', 'แอนติกาและบาร์บูดา', 'AG'),
('AUS', 'Australia', 'ออสเตรเลีย', 'AU'),
('AUT', 'Austria', 'ออสเตรีย', 'AT'),
('AZE', 'Azerbaijan', 'อาเซอร์ไบจาน', 'AZ'),
('BDI', 'Burundi', 'บุรุนดี', 'BI'),
('BEL', 'Belgium', 'เบลเยียม', 'BE'),
('BEN', 'Benin', 'เบนิน', 'BJ'),
('BES', 'Bonaire', 'โบแนร์', 'BQ'),
('BFA', 'Burkina Faso', 'บูร์กินาฟาโซ', 'BF'),
('BGD', 'Bangladesh', 'บังคลาเทศ', 'BD'),
('BGR', 'Bulgaria', 'บัลแกเรีย', 'BG'),
('BHR', 'Bahrain', 'บาห์เรน', 'BH'),
('BHS', 'Bahamas', 'บาฮามาส', 'BS'),
('BIH', 'Bosnia and Herzegovina', 'บอสเนียและเฮอร์เซโก\n', 'BA'),
('BLM', 'Saint Barthélemy', 'Saint Barthélemy', 'BL'),
('BLR', 'Belarus', 'เบลารุส', 'BY'),
('BLZ', 'Belize', 'เบลีซ', 'BZ'),
('BMU', 'Bermuda', 'เบอร์มิวดา', 'BM'),
('BOL', 'Bolivia', 'โบลิเวีย', 'BO'),
('BRA', 'Brazil', 'บราซิล', 'BR'),
('BRB', 'Barbados', 'บาร์เบโดส', 'BB'),
('BRN', 'Brunei', 'บรูไน', 'BN'),
('BTN', 'Bhutan', 'ภูฏาน', 'BT'),
('BVT', 'Bouvet Island', 'เกาะบูเว็ต', 'BV'),
('BWA', 'Botswana', 'บอตสวานา', 'BW'),
('CAF', 'Central African Republic', 'สาธารณรัฐแอฟริกากลาง', 'CF'),
('CAN', 'Canada', 'แคนาดา', 'CA'),
('CCK', 'Cocos [Keeling] Islands', 'เกาะโคโคส [คีลิง]', 'CC'),
('CHE', 'Switzerland', 'สวิสเซอร์แลนด์', 'CH'),
('CHL', 'Chile', 'ชิลี', 'CL'),
('CHN', 'China', 'จีน', 'CN'),
('CIV', 'Ivory Coast', 'ไอวอรี่โคสต์', 'CI'),
('CMR', 'Cameroon', 'แคเมอรูน', 'CM'),
('COD', 'Democratic Republic of the Congo', 'สาธารณรัฐประชาธิปไตยคองโก', 'CD'),
('COG', 'Republic of the Congo', 'สาธารณรัฐคองโก', 'CG'),
('COK', 'Cook Islands', 'หมู่เกาะคุก', 'CK'),
('COL', 'Colombia', 'โคลอมเบีย', 'CO'),
('COM', 'Comoros', 'คอโมโรส', 'KM'),
('CPV', 'Cape Verde', 'เคปเวิร์ด', 'CV'),
('CRI', 'Costa Rica', 'คอสตาริกา\n', 'CR'),
('CUB', 'Cuba', 'คิวบา', 'CU'),
('CUW', 'Curacao', 'คูราเซา\n', 'CW'),
('CXR', 'Christmas Island', 'เกาะคริสต์มาส', 'CX'),
('CYM', 'Cayman Islands', 'หมู่เกาะเคย์เเมน', 'KY'),
('CYP', 'Cyprus', 'ไซปรัส', 'CY'),
('CZE', 'Czech Republic', 'สาธารณรัฐเช็ก', 'CZ'),
('DEU', 'Germany', 'เยอรมันนี', 'DE'),
('DJI', 'Djibouti', 'จิบูตี', 'DJ'),
('DMA', 'Dominica', 'โดมินิกา', 'DM'),
('DNK', 'Denmark', 'เดนมาร์ก', 'DK'),
('DOM', 'Dominican Republic', 'สาธารณรัฐโดมินิกัน\n', 'DO'),
('DZA', 'Algeria', 'แอลจีเรีย', 'DZ'),
('ECU', 'Ecuador', 'เอกวาดอร์', 'EC'),
('EGY', 'Egypt', 'อียิปต์', 'EG'),
('ERI', 'Eritrea', 'เอริเทรี', 'ER'),
('ESH', 'Western Sahara', 'ซาฮาร่าตะวันตก', 'EH'),
('ESP', 'Spain', 'สเปน', 'ES'),
('EST', 'Estonia', 'เอสโตเนีย', 'EE'),
('ETH', 'Ethiopia', 'สาธารณรัฐเอธิโอเปีย', 'ET'),
('FIN', 'Finland', 'ฟินแลนด์', 'FI'),
('FJI', 'Fiji', 'ฟิจิ', 'FJ'),
('FLK', 'Falkland Islands', 'หมู่เกาะฟอล์คแลนด์', 'FK'),
('FRA', 'France', 'ฝรั่งเศส', 'FR'),
('FRO', 'Faroe Islands', 'หมู่เกาะแฟโร', 'FO'),
('FSM', 'Micronesia', 'ไมโครนีเซีย', 'FM'),
('GAB', 'Gabon', 'กาบอง', 'GA'),
('GBR', 'United Kingdom', 'อังกฤษ (สหราชอาณาจักร)', 'GB'),
('GEO', 'Georgia', 'จอร์เจีย', 'GE'),
('GGY', 'Guernsey', 'เกิร์นซีย์', 'GG'),
('GHA', 'Ghana', 'เกิร์นซีย์', 'GH'),
('GIB', 'Gibraltar', 'ยิบรอลตา', 'GI'),
('GIN', 'Guinea', 'กินี', 'GN'),
('GLP', 'Guadeloupe', 'กัวเดลุฟ', 'GP'),
('GMB', 'Gambia', 'แกมเบีย', 'GM'),
('GNB', 'Guinea-Bissau', 'กินีบิสเซา', 'GW'),
('GNQ', 'Equatorial Guinea', 'อิเควทอเรียลกินี', 'GQ'),
('GRC', 'Greece', 'กรีซ', 'GR'),
('GRD', 'Grenada', 'เกรเนดา ', 'GD'),
('GRL', 'Greenland', 'กรีนแลนด์', 'GL'),
('GTM', 'Guatemala', 'กัวเตมาลา', 'GT'),
('GUF', 'French Guiana', 'เฟรนช์เกียนา', 'GF'),
('GUM', 'Guam', 'เกาะกวม', 'GU'),
('GUY', 'Guyana', 'กายอานา', 'GY'),
('HKG', 'Hong Kong', 'ฮ่องกง', 'HK'),
('HMD', 'Heard Island and McDonald Islands', 'เกาะเฮิร์ดและหมู่เกาะแมคโดนัลด์', 'HM'),
('HND', 'Honduras', 'ฮอนดูรัส', 'HN'),
('HRV', 'Croatia', 'โครเอเชีย', 'HR'),
('HTI', 'Haiti', 'เฮติ', 'HT'),
('HUN', 'Hungary', 'ฮังการี', 'HU'),
('IDN', 'Indonesia', 'อินโดนีเซีย', 'ID'),
('IMN', 'Isle of Man', 'เกาะแมน', 'IM'),
('IND', 'India', 'อินเดีย', 'IN'),
('IOT', 'British Indian Ocean Territory', 'หมู่เกาะบริติชเวอร์จิน', 'IO'),
('IRL', 'Ireland', 'ไอร์แลนด์', 'IE'),
('IRN', 'Iran', 'อิหร่าน', 'IR'),
('IRQ', 'Iraq', 'อิรัก', 'IQ'),
('ISL', 'Iceland', 'ประเทศไอซ์แลนด์', 'IS'),
('ISR', 'Israel', 'อิสราเอล', 'IL'),
('ITA', 'Italy', 'อิตาลี', 'IT'),
('JAM', 'Jamaica', 'เกาะจาเมกา', 'JM'),
('JEY', 'Jersey', 'นิวเจอร์ซีย์', 'JE'),
('JOR', 'Jordan', 'จอร์แดน', 'JO'),
('JPN', 'Japan', 'ญี่ปุ่น', 'JP'),
('KAZ', 'Kazakhstan', 'คาซัคสถาน', 'KZ'),
('KEN', 'Kenya', 'เคนย่า', 'KE'),
('KGZ', 'Kyrgyzstan', 'คีร์กีสถาน', 'KG'),
('KHM', 'Cambodia', 'กัมพูชา', 'KH'),
('KIR', 'Kiribati', 'คิริบาส', 'KI'),
('KNA', 'Saint Kitts and Nevis', 'เซนต์คิตส์และเนวิส', 'KN'),
('KOR', 'South Korea', 'เกาหลีใต้', 'KR'),
('KWT', 'Kuwait', 'คูเวต', 'KW'),
('LAO', 'Laos', 'ลาว', 'LA'),
('LBN', 'Lebanon', 'เลบานอน', 'LB'),
('LBR', 'Liberia', 'ประเทศไลบีเรีย', 'LR'),
('LBY', 'Libya', 'ลิบยา', 'LY'),
('LCA', 'Saint Lucia', 'เซนต์ลูเซีย', 'LC'),
('LIE', 'Liechtenstein', 'นสไตน์', 'LI'),
('LKA', 'Sri Lanka', 'ศรีลังกา', 'LK'),
('LSO', 'Lesotho', 'เลโซโท', 'LS'),
('LTU', 'Lithuania', 'ลิธัวเนีย', 'LT'),
('LUX', 'Luxembourg', 'ลักเซมเบิร์ก', 'LU'),
('LVA', 'Latvia', 'ลัตเวีย', 'LV'),
('MAC', 'Macao', 'มาเก๊า', 'MO'),
('MAF', 'Saint Martin', 'เซนต์มาร์ติน', 'MF'),
('MAR', 'Morocco', 'โมร็อกโก', 'MA'),
('MCO', 'Monaco', 'โมนาโก', 'MC'),
('MDA', 'Moldova', 'มอลโดวา', 'MD'),
('MDG', 'Madagascar', 'มาดากัสการ์', 'MG'),
('MDV', 'Maldives', 'มัลดีฟส์', 'MV'),
('MEX', 'Mexico', 'เม็กซิโก', 'MX'),
('MHL', 'Marshall Islands', 'หมู่เกาะมาร์แชลล์', 'MH'),
('MKD', 'Macedonia', 'มาซิโดเนีย', 'MK'),
('MLI', 'Mali', 'มาลี', 'ML'),
('MLT', 'Malta', 'เกาะมอลตา', 'MT'),
('MMR', 'Myanmar [Burma]', 'พม่า', 'MM'),
('MNE', 'Montenegro', 'มอนเตเนโก', 'ME'),
('MNG', 'Mongolia', 'มองโกเลีย', 'MN'),
('MNP', 'Northern Mariana Islands', 'หมู่เกาะนอร์เทิร์นมาเรียนา', 'MP'),
('MOZ', 'Mozambique', 'โมซัมบิก', 'MZ'),
('MRT', 'Mauritania', 'มอริเตเนีย', 'MR'),
('MSR', 'Montserrat', 'มอนต์เซอร์รัต', 'MS'),
('MTQ', 'Martinique', 'มาร์ตินีก', 'MQ'),
('MUS', 'Mauritius', 'มอริเชียส', 'MU'),
('MWI', 'Malawi', 'มาลาวี', 'MW'),
('MYS', 'Malaysia', 'มาเลเซีย', 'MY'),
('MYT', 'Mayotte', 'มายอต', 'YT'),
('NAM', 'Namibia', 'นามิเบีย', 'NA'),
('NCL', 'New Caledonia', 'นิวแคลิโดเนีย', 'NC'),
('NER', 'Niger', 'ไนเธอร์', 'NE'),
('NFK', 'Norfolk Island', 'เกาะนอร์ฟอล์ก', 'NF'),
('NGA', 'Nigeria', 'ไนจีเรีย', 'NG'),
('NIC', 'Nicaragua', 'นิการากัว', 'NI'),
('NIU', 'Niue', 'นีอูเอ', 'NU'),
('NLD', 'Netherlands', 'เนเธอร์แลนด์', 'NL'),
('NOR', 'Norway', 'นอร์เวย์', 'NO'),
('NPL', 'Nepal', 'เนปาล', 'NP'),
('NRU', 'Nauru', 'นาอูรู', 'NR'),
('NZL', 'New Zealand', 'นิวซีแลนด์', 'NZ'),
('OMN', 'Oman', 'โอมาน', 'OM'),
('PAK', 'Pakistan', 'ปากีสถาน', 'PK'),
('PAN', 'Panama', 'ปานามา', 'PA'),
('PCN', 'Pitcairn Islands', 'หมู่เกาะพิตแคร์น', 'PN'),
('PER', 'Peru', 'เปรู', 'PE'),
('PHL', 'Philippines', 'ฟิลิปปินส์', 'PH'),
('PLW', 'Palau', 'ปาเลา', 'PW'),
('PNG', 'Papua New Guinea', 'ปาปัวนิวกินี', 'PG'),
('POL', 'Poland', 'โปแลนด์', 'PL'),
('PRI', 'Puerto Rico', 'เปอร์โตริโก', 'PR'),
('PRK', 'North Korea', 'เกาหลีเหนือ', 'KP'),
('PRT', 'Portugal', 'โปรตุเกส', 'PT'),
('PRY', 'Paraguay', 'ปารากวัย', 'PY'),
('PSE', 'Palestine', 'ปาเลสไตน์', 'PS'),
('PYF', 'French Polynesia', 'เฟรนช์โปลินีเซีย', 'PF'),
('QAT', 'Qatar', 'กาตาร์', 'QA'),
('REU', 'Réunion', 'เรอูนียง', 'RE'),
('ROU', 'Romania', 'โรมาเนีย', 'RO'),
('RUS', 'Russia', 'รัสเซีย', 'RU'),
('RWA', 'Rwanda', 'รวันดา', 'RW'),
('SAU', 'Saudi Arabia', 'ซาอุดิอาราเบีย', 'SA'),
('SDN', 'Sudan', 'ซูดาน', 'SD'),
('SEN', 'Senegal', 'เซเนกัล', 'SN'),
('SGP', 'Singapore', 'สิงคโปร์', 'SG'),
('SGS', 'South Georgia and the South Sandwich Islands', 'หมู่เกาะเซาท์จอร์เจียและหมู่เกาะเซาท์แซนด์วิช', 'GS'),
('SHN', 'Saint Helena', 'เซนต์เฮเลนา', 'SH'),
('SJM', 'Svalbard and Jan Mayen', 'สฟาลบาร์และยานไมเอน', 'SJ'),
('SLB', 'Solomon Islands', 'หมู่เกาะโซโลมอน', 'SB'),
('SLE', 'Sierra Leone', 'เซียร์ราลีโอน', 'SL'),
('SLV', 'El Salvador', 'เอลซัลวาดอร์', 'SV'),
('SMR', 'San Marino', 'ซานมาริโน', 'SM'),
('SOM', 'Somalia', 'โซมาเลีย', 'SO'),
('SPM', 'Saint Pierre and Miquelon', 'เซนต์ปิแอร์และมีเกอลง', 'PM'),
('SRB', 'Serbia', 'เซอร์เบีย', 'RS'),
('SSD', 'South Sudan', 'ซูดานใต้', 'SS'),
('STP', 'São Tomé and Príncipe', 'เซาตูเมและปรินซิปี', 'ST'),
('SUR', 'Suriname', 'ซูรินาเม', 'SR'),
('SVK', 'Slovakia', 'สโลวะเกีย', 'SK'),
('SVN', 'Slovenia', 'สโลวีเนีย', 'SI'),
('SWE', 'Sweden', 'สวีเดน', 'SE'),
('SWZ', 'Swaziland', 'สวาซิแลนด์', 'SZ'),
('SXM', 'Sint Maarten', 'เกาะเซนต์มาร์ติน', 'SX'),
('SYC', 'Seychelles', 'เซเชลส์', 'SC'),
('SYR', 'Syria', 'ซีเรีย', 'SY'),
('TCA', 'Turks and Caicos Islands', 'หมู่เกาะเติกส์และหมู่เกาะเคคอส', 'TC'),
('TCD', 'Chad', 'ชาด', 'TD'),
('TGO', 'Togo', 'โตโก', 'TG'),
('THA', 'Thailand', 'ไทย', 'TH'),
('TJK', 'Tajikistan', 'ทาจิกิสถาน', 'TJ'),
('TKL', 'Tokelau', 'โตเกเลา', 'TK'),
('TKM', 'Turkmenistan', 'เติร์กเมนิสถาน', 'TM'),
('TLS', 'East Timor', 'ติมอร์ตะวันออก', 'TL'),
('TON', 'Tonga', 'ตองกา', 'TO'),
('TTO', 'Trinidad and Tobago', 'ตรินิแดดและโตเบโก', 'TT'),
('TUN', 'Tunisia', 'ตูนิเซีย', 'TN'),
('TUR', 'Turkey', 'ตุรกี', 'TR'),
('TUV', 'Tuvalu', 'ตูวาลู', 'TV'),
('TWN', 'Taiwan', 'ไต้หวัน', 'TW'),
('TZA', 'Tanzania', 'แทนซาเนีย', 'TZ'),
('UGA', 'Uganda', 'ยูกันดา', 'UG'),
('UKR', 'Ukraine', 'ยูเครน', 'UA'),
('UMI', 'U.S. Minor Outlying Islands', 'เกาะนอกรีตของสหรัฐฯ', 'UM'),
('URY', 'Uruguay', 'อุรุกวัย', 'UY'),
('USA', 'United States', 'สหรัฐอเมริกา', 'US'),
('UZB', 'Uzbekistan', 'อุซเบกิสถาน', 'UZ'),
('VAT', 'Vatican City', 'เมืองวาติกัน', 'VA'),
('VCT', 'Saint Vincent and the Grenadines', 'เซนต์วินเซนต์และเกรนาดีนส์', 'VC'),
('VEN', 'Venezuela', 'เวเนซุเอลา', 'VE'),
('VGB', 'British Virgin Islands', 'หมู่เกาะบริติชเวอร์จิน', 'VG'),
('VIR', 'U.S. Virgin Islands', 'หมู่เกาะเวอร์จินของสหรัฐอเมริกา', 'VI'),
('VNM', 'Vietnam', 'เวียดนาม', 'VN'),
('VUT', 'Vanuatu', 'วานูอาตู', 'VU'),
('WLF', 'Wallis and Futuna', 'วาลลิสและฟุตูนา', 'WF'),
('WSM', 'Samoa', 'ซามัว', 'WS'),
('XKX', 'Kosovo', 'โคโซโว', 'XK'),
('YEM', 'Yemen', 'เยเมน', 'YE'),
('ZAF', 'South Africa', 'แอฟริกาใต้', 'ZA'),
('ZMB', 'Zambia', 'แซมเบีย', 'ZM'),
('ZWE', 'Zimbabwe', 'ประเทศซิมบับเว', 'ZW');

-- --------------------------------------------------------

--
-- Table structure for table `tb_furniture`
--

CREATE TABLE `tb_furniture` (
  `furniture_id` int(11) NOT NULL,
  `furniture_name_th` varchar(100) NOT NULL,
  `furniture_name_en` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_furniture`
--

INSERT INTO `tb_furniture` (`furniture_id`, `furniture_name_th`, `furniture_name_en`) VALUES
(1, 'แม่ร้องไห้แทบขาดใจ ลูกชาย ม.1 คิดสั้นสิ้นใจก่อนไปสอบวันสุดท้าย', 'Mother cried almost unheard of. Son 1, short of death, before going to the final exam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_location`
--

CREATE TABLE `tb_location` (
  `location_id` int(11) NOT NULL,
  `location_name_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location_name_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_location`
--

INSERT INTO `tb_location` (`location_id`, `location_name_th`, `location_name_en`) VALUES
(1, 'กทม', 'Bangkok'),
(2, 'นครราชสีมา', 'Nakhon Ratchasima'),
(3, 'ขอนแก่น', 'Khon Kaen'),
(4, 'เชียงใหม่', 'Chiang Mai'),
(5, 'กาญจนบุรี', 'Kanchanaburi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `news_id` int(11) NOT NULL,
  `news_name_th` varchar(200) NOT NULL,
  `news_name_en` varchar(200) NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `news_img` text NOT NULL,
  `news_detail_th` text NOT NULL,
  `news_detail_en` text NOT NULL,
  `news_read` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`news_id`, `news_name_th`, `news_name_en`, `news_date`, `news_img`, `news_detail_th`, `news_detail_en`, `news_read`) VALUES
(1, 'นครราชสีมา', 'DDproperty Property Index Saw Prices For Residential Property In Bangkok', '2019-03-04 03:06:27', '04032019100750-3305164-image2.png', 'เป็นจังหวัดที่มีพื้นที่มากที่สุดในประเทศไทยและมีประชากรมากเป็นอันดับ 2 ของประเทศ อยู่ในภาคตะวันออกเฉียงเหนือ ชื่อเมืองนครราชสีมาปรากฏครั้งแรกเป็นเมืองพระยามหานครในการปฏิรูปการปกครองในรัชสมัยสมเด็จพระบรมไตรโลกนาถ(ตั้งอยู่ในพื้นที่อำเภอสูงเนิน จังหวัดนครราชสีมา) ในรัชสมัยสมเด็จพระนารายณ์มหาราชทรงมีรับสั่งให้ย้ายเมืองนครราชสีมามาตั้งบริเวณพื้นที่ปัจจุบัน เมื่อ พ.ศ. 2217', '\n                DDproperty revealed that demand for accommodation from millennials will continue\n                    to grow significantly. In Bangkok, Chatuchak, Suanluang and Phyathai are identified\n                    as high growth areas. DDproperty revealed that demand for accommodation from\n                    millennials will continue to grow significantly. In Bangkok, Chatuchak,\n                    Suanluang and Phyathai are identified as high growth areas.', 4),
(2, 'จังหวัดเชียงใหม่ ', 'Chiang Mai', '2019-03-04 03:09:44', '04032019100944-3305164-image2.png', ' จังหวัดเชียงใหม่มีเขตเมืองที่จัดเป็นเมืองใหญ่อันดับที่สองของประเทศไทยรองจากกรุงเทพมหานคร มีประชากรในเขตเมืองและชานเมือง 960,906 คน (พ.ศ. 2553) จังหวัดเชียงใหม่แบ่งการปกครองออกเป็น 25 อำเภอ โดยมีอำเภอเมืองเชียงใหม่เป็นศูนย์กลางของจังหวัด เมื่อ พ.ศ. 2552 มีการจัดตั้งอำเภอกัลยาณิวัฒนาเป็นอำเภอลำดับที่ 25 ของจังหวัด และลำดับที่ 878 ของประเทศ ซึ่งเป็นอำเภอล่าสุดของไทย', ' Chiang Mai has the second largest city in Thailand after Bangkok. There are 960,906 people in the urban and suburban areas (2010). Chiang Mai province is divided into 25 districts with the city of Chiang Mai as the center of the province. In 2009, the district was established. No. 25 of the province and No. 878 of the country which is the latest district in Thailand\r\n', 11),
(3, 'นครราชสีมา หรือรู้จักในชื่อ โคราช', 'Nakhon Ratchasima or known as Korat', '2019-03-04 03:06:27', '04032019100750-3305164-image2.png', 'เป็นจังหวัดที่มีพื้นที่มากที่สุดในประเทศไทยและมีประชากรมากเป็นอันดับ 2 ของประเทศ อยู่ในภาคตะวันออกเฉียงเหนือ ชื่อเมืองนครราชสีมาปรากฏครั้งแรกเป็นเมืองพระยามหานครในการปฏิรูปการปกครองในรัชสมัยสมเด็จพระบรมไตรโลกนาถ(ตั้งอยู่ในพื้นที่อำเภอสูงเนิน จังหวัดนครราชสีมา) ในรัชสมัยสมเด็จพระนารายณ์มหาราชทรงมีรับสั่งให้ย้ายเมืองนครราชสีมามาตั้งบริเวณพื้นที่ปัจจุบัน เมื่อ พ.ศ. 2217', 'Is the province that has the most area in Thailand and has the second largest population of the country in the northeastern region The name of the city of Nakhon Ratchasima first appears as the city of Phraya Mahan in the administrative reform in the reign of King Borom Trai Lokanat (located in Sung Noen District). In the reign of King Narai the Great, ordered to move the city of Nakhon Ratchasima to the current area in 2217\r\n', 0),
(4, 'จังหวัดเชียงใหม่ ', 'Chiang Mai', '2019-03-04 03:09:44', '04032019100944-3305164-image2.png', ' จังหวัดเชียงใหม่มีเขตเมืองที่จัดเป็นเมืองใหญ่อันดับที่สองของประเทศไทยรองจากกรุงเทพมหานคร มีประชากรในเขตเมืองและชานเมือง 960,906 คน (พ.ศ. 2553) จังหวัดเชียงใหม่แบ่งการปกครองออกเป็น 25 อำเภอ โดยมีอำเภอเมืองเชียงใหม่เป็นศูนย์กลางของจังหวัด เมื่อ พ.ศ. 2552 มีการจัดตั้งอำเภอกัลยาณิวัฒนาเป็นอำเภอลำดับที่ 25 ของจังหวัด และลำดับที่ 878 ของประเทศ ซึ่งเป็นอำเภอล่าสุดของไทย', ' Chiang Mai has the second largest city in Thailand after Bangkok. There are 960,906 people in the urban and suburban areas (2010). Chiang Mai province is divided into 25 districts with the city of Chiang Mai as the center of the province. In 2009, the district was established. No. 25 of the province and No. 878 of the country which is the latest district in Thailand\r\n', 0),
(5, 'นครราชสีมา หรือรู้จักในชื่อ โคราช', 'Nakhon Ratchasima or known as Korat', '2019-03-04 03:06:27', '04032019100750-3305164-image2.png', 'เป็นจังหวัดที่มีพื้นที่มากที่สุดในประเทศไทยและมีประชากรมากเป็นอันดับ 2 ของประเทศ อยู่ในภาคตะวันออกเฉียงเหนือ ชื่อเมืองนครราชสีมาปรากฏครั้งแรกเป็นเมืองพระยามหานครในการปฏิรูปการปกครองในรัชสมัยสมเด็จพระบรมไตรโลกนาถ(ตั้งอยู่ในพื้นที่อำเภอสูงเนิน จังหวัดนครราชสีมา) ในรัชสมัยสมเด็จพระนารายณ์มหาราชทรงมีรับสั่งให้ย้ายเมืองนครราชสีมามาตั้งบริเวณพื้นที่ปัจจุบัน เมื่อ พ.ศ. 2217', 'Is the province that has the most area in Thailand and has the second largest population of the country in the northeastern region The name of the city of Nakhon Ratchasima first appears as the city of Phraya Mahan in the administrative reform in the reign of King Borom Trai Lokanat (located in Sung Noen District). In the reign of King Narai the Great, ordered to move the city of Nakhon Ratchasima to the current area in 2217\r\n', 0),
(6, 'จังหวัดเชียงใหม่ ', 'Chiang Mai', '2019-03-04 03:09:44', '04032019100944-3305164-image2.png', ' จังหวัดเชียงใหม่มีเขตเมืองที่จัดเป็นเมืองใหญ่อันดับที่สองของประเทศไทยรองจากกรุงเทพมหานคร มีประชากรในเขตเมืองและชานเมือง 960,906 คน (พ.ศ. 2553) จังหวัดเชียงใหม่แบ่งการปกครองออกเป็น 25 อำเภอ โดยมีอำเภอเมืองเชียงใหม่เป็นศูนย์กลางของจังหวัด เมื่อ พ.ศ. 2552 มีการจัดตั้งอำเภอกัลยาณิวัฒนาเป็นอำเภอลำดับที่ 25 ของจังหวัด และลำดับที่ 878 ของประเทศ ซึ่งเป็นอำเภอล่าสุดของไทย', ' Chiang Mai has the second largest city in Thailand after Bangkok. There are 960,906 people in the urban and suburban areas (2010). Chiang Mai province is divided into 25 districts with the city of Chiang Mai as the center of the province. In 2009, the district was established. No. 25 of the province and No. 878 of the country which is the latest district in Thailand\r\n', 0),
(7, 'นครราชสีมา หรือรู้จักในชื่อ โคราช', 'Nakhon Ratchasima or known as Korat', '2019-03-04 03:06:27', '04032019100750-3305164-image2.png', 'เป็นจังหวัดที่มีพื้นที่มากที่สุดในประเทศไทยและมีประชากรมากเป็นอันดับ 2 ของประเทศ อยู่ในภาคตะวันออกเฉียงเหนือ ชื่อเมืองนครราชสีมาปรากฏครั้งแรกเป็นเมืองพระยามหานครในการปฏิรูปการปกครองในรัชสมัยสมเด็จพระบรมไตรโลกนาถ(ตั้งอยู่ในพื้นที่อำเภอสูงเนิน จังหวัดนครราชสีมา) ในรัชสมัยสมเด็จพระนารายณ์มหาราชทรงมีรับสั่งให้ย้ายเมืองนครราชสีมามาตั้งบริเวณพื้นที่ปัจจุบัน เมื่อ พ.ศ. 2217', 'Is the province that has the most area in Thailand and has the second largest population of the country in the northeastern region The name of the city of Nakhon Ratchasima first appears as the city of Phraya Mahan in the administrative reform in the reign of King Borom Trai Lokanat (located in Sung Noen District). In the reign of King Narai the Great, ordered to move the city of Nakhon Ratchasima to the current area in 2217\r\n', 0),
(8, 'จังหวัดเชียงใหม่ ', 'Chiang Mai', '2019-03-04 03:09:44', '04032019100944-3305164-image2.png', ' จังหวัดเชียงใหม่มีเขตเมืองที่จัดเป็นเมืองใหญ่อันดับที่สองของประเทศไทยรองจากกรุงเทพมหานคร มีประชากรในเขตเมืองและชานเมือง 960,906 คน (พ.ศ. 2553) จังหวัดเชียงใหม่แบ่งการปกครองออกเป็น 25 อำเภอ โดยมีอำเภอเมืองเชียงใหม่เป็นศูนย์กลางของจังหวัด เมื่อ พ.ศ. 2552 มีการจัดตั้งอำเภอกัลยาณิวัฒนาเป็นอำเภอลำดับที่ 25 ของจังหวัด และลำดับที่ 878 ของประเทศ ซึ่งเป็นอำเภอล่าสุดของไทย', ' Chiang Mai has the second largest city in Thailand after Bangkok. There are 960,906 people in the urban and suburban areas (2010). Chiang Mai province is divided into 25 districts with the city of Chiang Mai as the center of the province. In 2009, the district was established. No. 25 of the province and No. 878 of the country which is the latest district in Thailand\r\n', 0),
(9, 'นครราชสีมา หรือรู้จักในชื่อ โคราช', 'Nakhon Ratchasima or known as Korat', '2019-03-04 03:06:27', '04032019100750-3305164-image2.png', 'เป็นจังหวัดที่มีพื้นที่มากที่สุดในประเทศไทยและมีประชากรมากเป็นอันดับ 2 ของประเทศ อยู่ในภาคตะวันออกเฉียงเหนือ ชื่อเมืองนครราชสีมาปรากฏครั้งแรกเป็นเมืองพระยามหานครในการปฏิรูปการปกครองในรัชสมัยสมเด็จพระบรมไตรโลกนาถ(ตั้งอยู่ในพื้นที่อำเภอสูงเนิน จังหวัดนครราชสีมา) ในรัชสมัยสมเด็จพระนารายณ์มหาราชทรงมีรับสั่งให้ย้ายเมืองนครราชสีมามาตั้งบริเวณพื้นที่ปัจจุบัน เมื่อ พ.ศ. 2217', 'Is the province that has the most area in Thailand and has the second largest population of the country in the northeastern region The name of the city of Nakhon Ratchasima first appears as the city of Phraya Mahan in the administrative reform in the reign of King Borom Trai Lokanat (located in Sung Noen District). In the reign of King Narai the Great, ordered to move the city of Nakhon Ratchasima to the current area in 2217\r\n', 0),
(10, 'จังหวัดเชียงใหม่ ', 'Chiang Mai', '2019-03-04 03:09:44', '04032019100944-3305164-image2.png', ' จังหวัดเชียงใหม่มีเขตเมืองที่จัดเป็นเมืองใหญ่อันดับที่สองของประเทศไทยรองจากกรุงเทพมหานคร มีประชากรในเขตเมืองและชานเมือง 960,906 คน (พ.ศ. 2553) จังหวัดเชียงใหม่แบ่งการปกครองออกเป็น 25 อำเภอ โดยมีอำเภอเมืองเชียงใหม่เป็นศูนย์กลางของจังหวัด เมื่อ พ.ศ. 2552 มีการจัดตั้งอำเภอกัลยาณิวัฒนาเป็นอำเภอลำดับที่ 25 ของจังหวัด และลำดับที่ 878 ของประเทศ ซึ่งเป็นอำเภอล่าสุดของไทย', ' Chiang Mai has the second largest city in Thailand after Bangkok. There are 960,906 people in the urban and suburban areas (2010). Chiang Mai province is divided into 25 districts with the city of Chiang Mai as the center of the province. In 2009, the district was established. No. 25 of the province and No. 878 of the country which is the latest district in Thailand\r\n', 0),
(11, 'นครราชสีมา หรือรู้จักในชื่อ โคราช', 'Nakhon Ratchasima or known as Korat', '2019-03-04 03:06:27', '04032019100750-3305164-image2.png', 'เป็นจังหวัดที่มีพื้นที่มากที่สุดในประเทศไทยและมีประชากรมากเป็นอันดับ 2 ของประเทศ อยู่ในภาคตะวันออกเฉียงเหนือ ชื่อเมืองนครราชสีมาปรากฏครั้งแรกเป็นเมืองพระยามหานครในการปฏิรูปการปกครองในรัชสมัยสมเด็จพระบรมไตรโลกนาถ(ตั้งอยู่ในพื้นที่อำเภอสูงเนิน จังหวัดนครราชสีมา) ในรัชสมัยสมเด็จพระนารายณ์มหาราชทรงมีรับสั่งให้ย้ายเมืองนครราชสีมามาตั้งบริเวณพื้นที่ปัจจุบัน เมื่อ พ.ศ. 2217', 'Is the province that has the most area in Thailand and has the second largest population of the country in the northeastern region The name of the city of Nakhon Ratchasima first appears as the city of Phraya Mahan in the administrative reform in the reign of King Borom Trai Lokanat (located in Sung Noen District). In the reign of King Narai the Great, ordered to move the city of Nakhon Ratchasima to the current area in 2217\r\n', 0),
(12, 'จังหวัดเชียงใหม่ ', 'Chiang Mai', '2019-03-04 03:09:44', '04032019100944-3305164-image2.png', ' จังหวัดเชียงใหม่มีเขตเมืองที่จัดเป็นเมืองใหญ่อันดับที่สองของประเทศไทยรองจากกรุงเทพมหานคร มีประชากรในเขตเมืองและชานเมือง 960,906 คน (พ.ศ. 2553) จังหวัดเชียงใหม่แบ่งการปกครองออกเป็น 25 อำเภอ โดยมีอำเภอเมืองเชียงใหม่เป็นศูนย์กลางของจังหวัด เมื่อ พ.ศ. 2552 มีการจัดตั้งอำเภอกัลยาณิวัฒนาเป็นอำเภอลำดับที่ 25 ของจังหวัด และลำดับที่ 878 ของประเทศ ซึ่งเป็นอำเภอล่าสุดของไทย', ' Chiang Mai has the second largest city in Thailand after Bangkok. There are 960,906 people in the urban and suburban areas (2010). Chiang Mai province is divided into 25 districts with the city of Chiang Mai as the center of the province. In 2009, the district was established. No. 25 of the province and No. 878 of the country which is the latest district in Thailand\r\n', 0),
(13, 'นครราชสีมา หรือรู้จักในชื่อ โคราช', 'Nakhon Ratchasima or known as Korat', '2019-03-04 03:06:27', '04032019100750-3305164-image2.png', 'เป็นจังหวัดที่มีพื้นที่มากที่สุดในประเทศไทยและมีประชากรมากเป็นอันดับ 2 ของประเทศ อยู่ในภาคตะวันออกเฉียงเหนือ ชื่อเมืองนครราชสีมาปรากฏครั้งแรกเป็นเมืองพระยามหานครในการปฏิรูปการปกครองในรัชสมัยสมเด็จพระบรมไตรโลกนาถ(ตั้งอยู่ในพื้นที่อำเภอสูงเนิน จังหวัดนครราชสีมา) ในรัชสมัยสมเด็จพระนารายณ์มหาราชทรงมีรับสั่งให้ย้ายเมืองนครราชสีมามาตั้งบริเวณพื้นที่ปัจจุบัน เมื่อ พ.ศ. 2217', 'Is the province that has the most area in Thailand and has the second largest population of the country in the northeastern region The name of the city of Nakhon Ratchasima first appears as the city of Phraya Mahan in the administrative reform in the reign of King Borom Trai Lokanat (located in Sung Noen District). In the reign of King Narai the Great, ordered to move the city of Nakhon Ratchasima to the current area in 2217\r\n', 0),
(14, 'จังหวัดเชียงใหม่ ', 'Chiang Mai', '2019-03-04 03:09:44', '04032019100944-3305164-image2.png', ' จังหวัดเชียงใหม่มีเขตเมืองที่จัดเป็นเมืองใหญ่อันดับที่สองของประเทศไทยรองจากกรุงเทพมหานคร มีประชากรในเขตเมืองและชานเมือง 960,906 คน (พ.ศ. 2553) จังหวัดเชียงใหม่แบ่งการปกครองออกเป็น 25 อำเภอ โดยมีอำเภอเมืองเชียงใหม่เป็นศูนย์กลางของจังหวัด เมื่อ พ.ศ. 2552 มีการจัดตั้งอำเภอกัลยาณิวัฒนาเป็นอำเภอลำดับที่ 25 ของจังหวัด และลำดับที่ 878 ของประเทศ ซึ่งเป็นอำเภอล่าสุดของไทย', ' Chiang Mai has the second largest city in Thailand after Bangkok. There are 960,906 people in the urban and suburban areas (2010). Chiang Mai province is divided into 25 districts with the city of Chiang Mai as the center of the province. In 2009, the district was established. No. 25 of the province and No. 878 of the country which is the latest district in Thailand\r\n', 0),
(15, 'นครราชสีมา ', 'Nakhon Ratchasima ', '2019-03-04 03:06:27', '04032019100750-3305164-image2.png', 'เป็นจังหวัดที่มีพื้นที่มากที่สุดในประเทศไทยและมีประชากรมากเป็นอันดับ 2 ของประเทศ อยู่ในภาคตะวันออกเฉียงเหนือ ชื่อเมืองนครราชสีมาปรากฏครั้งแรกเป็นเมืองพระยามหานครในการปฏิรูปการปกครองในรัชสมัยสมเด็จพระบรมไตรโลกนาถ(ตั้งอยู่ในพื้นที่อำเภอสูงเนิน จังหวัดนครราชสีมา) ในรัชสมัยสมเด็จพระนารายณ์มหาราชทรงมีรับสั่งให้ย้ายเมืองนครราชสีมามาตั้งบริเวณพื้นที่ปัจจุบัน เมื่อ พ.ศ. 2217', 'Is the province that has the most area in Thailand and has the second largest population of the country in the northeastern region The name of the city of Nakhon Ratchasima first appears as the city of Phraya Mahan in the administrative reform in the reign of King Borom Trai Lokanat (located in Sung Noen District). In the reign of King Narai the Great, ordered to move the city of Nakhon Ratchasima to the current area in 2217\r\n', 0),
(16, 'จังหวัดเชียงใหม่ ', 'Chiang Mai', '2019-03-04 03:09:44', '04032019100944-3305164-image2.png', ' จังหวัดเชียงใหม่มีเขตเมืองที่จัดเป็นเมืองใหญ่อันดับที่สองของประเทศไทยรองจากกรุงเทพมหานคร มีประชากรในเขตเมืองและชานเมือง 960,906 คน (พ.ศ. 2553) จังหวัดเชียงใหม่แบ่งการปกครองออกเป็น 25 อำเภอ โดยมีอำเภอเมืองเชียงใหม่เป็นศูนย์กลางของจังหวัด เมื่อ พ.ศ. 2552 มีการจัดตั้งอำเภอกัลยาณิวัฒนาเป็นอำเภอลำดับที่ 25 ของจังหวัด และลำดับที่ 878 ของประเทศ ซึ่งเป็นอำเภอล่าสุดของไทย', ' Chiang Mai has the second largest city in Thailand after Bangkok. There are 960,906 people in the urban and suburban areas (2010). Chiang Mai province is divided into 25 districts with the city of Chiang Mai as the center of the province. In 2009, the district was established. No. 25 of the province and No. 878 of the country which is the latest district in Thailand\r\n', 0),
(17, 'กหดหกดหกด', 'หกดหกดหกดหกดกห', '2019-03-11 09:13:04', '11032019161304-default.png', 'ดหกดหกดฟหกฟหกฟหกฟหก', 'หกดหกดหกดฟหกฟหกฟหก', 0),
(18, '00000000000000000000', '0000000000000000000000000', '2019-03-11 09:13:40', '11032019161340-default.png', '000000000000000000000000000000000', '000000000000000000000000000000000000000000000000000', 0),
(19, 'sddasdasdas', 'dasdasdasdasd', '2019-03-11 09:15:44', '11032019161544-05032019145951-default.png', 'asdasdasdasdas', 'dasdasdasdasdasdasdasda', 0),
(20, 'asdasdasd', 'asdasdasd', '2019-03-11 09:16:53', '11032019161653-05032019145951-default.png', 'asdasdasd', 'dasdasd', 0),
(21, 'asdasd', 'asdasdasd', '2019-03-11 09:17:42', '11032019161742-default.png', 'asdasdasdas', 'dasdasdasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_page`
--

CREATE TABLE `tb_page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `page_title_th` varchar(100) DEFAULT NULL,
  `page_title_en` varchar(100) DEFAULT NULL,
  `page_tag_th` text,
  `page_tag_en` text,
  `page_description_th` text,
  `page_description_en` text,
  `page_image` varchar(200) NOT NULL,
  `updateby` int(11) DEFAULT NULL,
  `lastupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_page`
--

INSERT INTO `tb_page` (`page_id`, `page_name`, `page_title_th`, `page_title_en`, `page_tag_th`, `page_tag_en`, `page_description_th`, `page_description_en`, `page_image`, `updateby`, `lastupdate`) VALUES
(1, 'index', 'REALESTATE-หน้าหลัก', 'REALESTATE-HOME PAGE ', 'หน้าหลัก', 'HOME PAGE', 'หน้าหลัก', 'HOME PAGE', '', 1, '2019-03-01 16:15:51'),
(2, 'about', 'REALESTATE-เกี่ยวกับเรา', 'REALESTATE-ABOUT', 'REALESTATE-เกี่ยวกับเรา', 'REALESTATE-ABOUT', 'REALESTATE-เกี่ยวกับเรา', 'REALESTATE-ABOUT', '', 1, '2019-03-01 16:15:51'),
(3, 'service', 'REALESTATE-บริการ', 'REALESTATE-SERVICE', 'REALESTATE-บริการ', 'REALESTATE-SERVICE', 'REALESTATE-บริการ', 'REALESTATE-SERVICE', '', 1, '2019-03-01 16:15:51'),
(4, 'property', 'REALESTATE-คุณสมบัติ', 'REALESTATE-PROPERTY', 'REALESTATE-คุณสมบัติ', 'REALESTATE-PROPERTY', 'REALESTATE-คุณสมบัติ', 'REALESTATE-PROPERTY', '', 1, '2019-03-01 16:15:51'),
(5, 'news&event', 'REALESTATE-ข่าวและเหตุการณ์', 'REALESTATE-NEWS&EVENT', 'REALESTATE-ข่าวและเหตุการณ์', 'REALESTATE-NEWS&EVENT', 'REALESTATE-ข่าวและเหตุการณ์', 'REALESTATE-NEWS&EVENT', '', 1, '2019-03-01 16:15:51'),
(6, 'contact', 'REALESTATE-ติดต่อเรา', 'REALESTATE-CONTACT', 'REALESTATE-ติดต่อเรา', 'REALESTATE-CONTACT', 'REALESTATE-ติดต่อเรา', 'REALESTATE-CONTACT', '', 1, '2019-03-01 16:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `product_types_id` int(11) NOT NULL,
  `furniture_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `product_name_th` varchar(200) NOT NULL,
  `product_name_en` varchar(200) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_detail_th` text NOT NULL,
  `product_detail_en` text NOT NULL,
  `product_bedroom` varchar(10) NOT NULL,
  `product_bathroom` varchar(10) NOT NULL,
  `product_latitude` varchar(100) NOT NULL,
  `product_longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_types_id`, `furniture_id`, `location_id`, `product_name_th`, `product_name_en`, `product_price`, `product_detail_th`, `product_detail_en`, `product_bedroom`, `product_bathroom`, `product_latitude`, `product_longitude`) VALUES
(13, 4, 1, 5, 'ฟหกฟหกฟหก', 'dasdasdassa', 2147483647, 'aaa', 'bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(14, 4, 1, 5, 'ฟหกฟหกฟหก', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(15, 8, 1, 5, 'ฟหกฟหกฟห', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(16, 4, 1, 5, 'ฟหกฟหกฟหก', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(17, 9, 1, 5, 'ฟหกฟหกฟห', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(18, 4, 1, 5, 'ฟหกฟหกฟหก', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(19, 9, 1, 5, 'ฟหกฟหกฟห', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(20, 4, 1, 5, 'ฟหกฟหกฟหกฟห', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(21, 9, 1, 5, 'ฟหกฟหกฟห', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(22, 5, 1, 5, 'ฟหกฟหกฟหกฟหกฟห', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(23, 7, 1, 5, 'ฟหกฟหกฟห', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(24, 5, 1, 5, 'ฟหกฟหกฟหก', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(25, 7, 1, 5, 'ฟหกฟหกฟห', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(26, 5, 1, 5, 'ฟหกฟหกฟหก', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '18.3170581', '99.3986862'),
(27, 7, 1, 5, 'ฟหกฟหก', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(28, 6, 1, 5, 'ฟหกฟหกฟหก', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(29, 7, 1, 5, 'ฟหกฟหก', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(30, 6, 1, 5, 'ฟหกฟหกฟหกฟหกฟหฟหกฟหก', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(31, 7, 1, 5, 'asdasdasd', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(32, 6, 1, 5, 'ฟหกฟหกฟหก', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(33, 7, 1, 5, 'asdasdasd', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(34, 7, 1, 5, 'ฟหกฟหกฟหก', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(35, 7, 1, 5, 'asdasdasd', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(36, 7, 1, 5, 'ฟหกฟหกฟหกฟห', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(37, 7, 1, 5, 'asdasdasd', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(38, 7, 1, 5, 'ฟหกฟหกฟหกฟหก', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(39, 7, 1, 5, 'asdasdasd', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(40, 7, 1, 5, 'ฟหกฟหกฟหก', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(41, 7, 1, 5, 'asdasdasd', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(42, 8, 1, 5, 'ฟหกฟหกฟหกฟหกฟห', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625'),
(43, 7, 1, 5, 'asdasdasd', 'dasdasdassa', 2147483647, ' aaa', ' bbb', '3', '3', '-0.25488177067127094', '3.9111328125'),
(44, 8, 1, 5, 'ฟหกฟหกฟหก', 'dasdasd', 0, ' asdasdas', ' dasdasd', 'asda', 'dasd', '-0.002832412718561038', '0.037937164306640625');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_header`
--

CREATE TABLE `tb_product_header` (
  `product_header_id` int(5) NOT NULL,
  `product_header_th` varchar(200) NOT NULL,
  `product_header_en` varchar(200) NOT NULL,
  `product_header_detail_th` text NOT NULL,
  `product_header_detail_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product_header`
--

INSERT INTO `tb_product_header` (`product_header_id`, `product_header_th`, `product_header_en`, `product_header_detail_th`, `product_header_detail_en`) VALUES
(1, 'บีบีซี เวิลด์ นิวส์ ', ' Donald J. Trump', 'ช่องรายการถูกส่งสัญญาณโดย Red Bee Media จากสถานีหลัก ณ The Broadcast Centre ซึ่งเป็นส่วนหนึ่งของ BBC Media&nbsp;&nbsp;', 'The channel is broadcast by Red Bee Media from the main station at The Broadcast Center, which is&nbsp; nd Sundays. At 01.00 hrs.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_highlight`
--

CREATE TABLE `tb_product_highlight` (
  `product_highlight_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_highlight_name_th` varchar(100) NOT NULL,
  `product_highlight_name_en` varchar(100) NOT NULL,
  `product_highlight_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product_highlight`
--

INSERT INTO `tb_product_highlight` (`product_highlight_id`, `product_id`, `product_highlight_name_th`, `product_highlight_name_en`, `product_highlight_img`) VALUES
(26, 8, 'xxzz', 'xxxxzzzz', '11032019140235-default.png'),
(27, 8, 'x', 'zc', '11032019140235-default.png'),
(28, 9, 'xx', 'vv', '11032019140235-default.png'),
(29, 9, 'aaa', 'ddd', '11032019140235-default.png'),
(30, 10, 'cccc', 'ddddddd', '11032019140235-default.png'),
(31, 11, 'dddddd', 'vvvvvvvvv', '11032019140235-default.png'),
(32, 11, 'xxzz', 'xxxxzzzz', '11032019140235-default.png'),
(33, 12, 'x', 'zc', '11032019140235-default.png'),
(34, 12, 'xx', 'vv', '11032019140235-default.png'),
(37, 14, 'dddddd', 'vvvvvvvvv', '11032019140235-default.png'),
(38, 14, 'xxzz', 'xxxxzzzz', '11032019140235-default.png'),
(39, 15, 'x', 'zc', '11032019140235-default.png'),
(40, 15, 'xx', 'vv', '11032019140235-default.png'),
(41, 16, 'aaa', 'ddd', '11032019140235-default.png'),
(42, 16, 'cccc', 'ddddddd', '11032019140235-default.png'),
(43, 17, 'dddddd', 'vvvvvvvvv', '11032019140235-default.png'),
(44, 17, 'xxzz', 'xxxxzzzz', '11032019140235-default.png'),
(45, 18, 'x', 'zc', '11032019140235-default.png'),
(46, 18, 'xx', 'vv', '11032019140235-default.png'),
(47, 19, 'aaa', 'ddd', '11032019140235-default.png'),
(48, 19, 'cccc', 'ddddddd', '11032019140235-default.png'),
(49, 20, 'dddddd', 'vvvvvvvvv', '11032019140235-default.png'),
(50, 21, 'xxzz', 'xxxxzzzz', '11032019140235-default.png'),
(51, 22, 'x', 'zc', '11032019140235-default.png'),
(52, 23, 'xx', 'vv', '11032019140235-default.png'),
(53, 23, 'aaa', 'ddd', '11032019140235-default.png'),
(54, 24, 'cccc', 'ddddddd', '11032019140235-default.png'),
(55, 24, 'dddddd', 'vvvvvvvvv', '11032019140235-default.png'),
(56, 25, 'xxzz', 'xxxxzzzz', '11032019140235-default.png'),
(57, 25, 'x', 'zc', '11032019140235-default.png'),
(58, 26, 'xx', 'vv', '11032019140235-default.png'),
(59, 26, 'aaa', 'ddd', '11032019140235-default.png'),
(60, 27, 'cccc', 'ddddddd', '11032019140235-default.png'),
(61, 27, 'dddddd', 'vvvvvvvvv', '11032019140235-default.png'),
(62, 28, 'xxzz', 'xxxxzzzz', '11032019140235-default.png'),
(63, 28, 'x', 'zc', '11032019140235-default.png'),
(64, 29, 'xx', 'vv', '11032019140235-default.png'),
(65, 29, 'aaa', 'ddd', '11032019140235-default.png'),
(66, 30, 'cccc', 'ddddddd', '11032019140235-default.png'),
(67, 30, 'dddddd', 'vvvvvvvvv', '11032019140235-default.png'),
(68, 31, 'xxzz', 'xxxxzzzz', '11032019140235-default.png'),
(69, 31, 'x', 'zc', '11032019140235-default.png'),
(70, 32, 'xx', 'vv', '11032019140235-default.png'),
(71, 32, 'aaa', 'ddd', '11032019140235-default.png'),
(72, 33, 'cccc', 'ddddddd', '11032019140235-default.png'),
(73, 33, 'dddddd', 'vvvvvvvvv', '11032019140235-default.png'),
(74, 13, 'ว่ายน้ำ', 'swimmer', '11032019140235-default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_image`
--

CREATE TABLE `tb_product_image` (
  `product_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image_img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_product_image`
--

INSERT INTO `tb_product_image` (`product_image_id`, `product_id`, `product_image_img`) VALUES
(2, 8, '07032019110946-05032019145951-default.png'),
(3, 25, '07032019110946-05032019145951-default.png'),
(4, 26, '07032019110946-05032019145951-default.png'),
(5, 27, '07032019110946-05032019145951-default.png'),
(6, 9, '07032019110946-05032019145951-default.png'),
(7, 28, '07032019110946-05032019145951-default.png'),
(8, 29, '07032019110946-05032019145951-default.png'),
(9, 30, '07032019110946-05032019145951-default.png'),
(10, 31, '07032019110946-05032019145951-default.png'),
(11, 32, '07032019110946-05032019145951-default.png'),
(12, 33, '07032019110946-05032019145951-default.png'),
(13, 10, '07032019110946-05032019145951-default.png'),
(15, 14, '07032019110946-05032019145951-default.png'),
(16, 13, '07032019110946-05032019145951-default.png'),
(19, 16, '07032019110946-05032019145951-default.png'),
(20, 17, '07032019110946-05032019145951-default.png'),
(21, 18, '07032019110946-05032019145951-default.png'),
(22, 19, '07032019110946-05032019145951-default.png'),
(23, 20, '07032019110946-05032019145951-default.png'),
(24, 21, '07032019110946-05032019145951-default.png'),
(25, 22, '07032019110946-05032019145951-default.png'),
(26, 23, '07032019110946-05032019145951-default.png'),
(27, 24, '07032019110946-05032019145951-default.png'),
(28, 25, '07032019110946-05032019145951-default.png'),
(29, 26, '07032019110946-05032019145951-default.png'),
(30, 27, '07032019160551-05032019145951-default.png'),
(31, 15, '11032019120403-default.png'),
(32, 8, '07032019110946-05032019145951-default.png'),
(33, 25, '07032019110946-05032019145951-default.png'),
(34, 26, '07032019110946-05032019145951-default.png'),
(35, 27, '07032019110946-05032019145951-default.png'),
(36, 9, '07032019110946-05032019145951-default.png'),
(37, 28, '07032019110946-05032019145951-default.png'),
(38, 29, '07032019110946-05032019145951-default.png'),
(39, 30, '07032019110946-05032019145951-default.png'),
(40, 31, '07032019110946-05032019145951-default.png'),
(41, 32, '07032019110946-05032019145951-default.png'),
(42, 33, '07032019110946-05032019145951-default.png'),
(43, 10, '07032019110946-05032019145951-default.png'),
(44, 14, '07032019110946-05032019145951-default.png'),
(45, 13, '07032019110946-05032019145951-default.png'),
(46, 16, '07032019110946-05032019145951-default.png'),
(47, 17, '07032019110946-05032019145951-default.png'),
(48, 18, '07032019110946-05032019145951-default.png'),
(49, 19, '07032019110946-05032019145951-default.png'),
(50, 20, '07032019110946-05032019145951-default.png'),
(51, 21, '07032019110946-05032019145951-default.png'),
(52, 22, '07032019110946-05032019145951-default.png'),
(53, 23, '07032019110946-05032019145951-default.png'),
(54, 24, '07032019110946-05032019145951-default.png'),
(55, 25, '07032019110946-05032019145951-default.png'),
(56, 26, '07032019110946-05032019145951-default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_types`
--

CREATE TABLE `tb_product_types` (
  `product_types_id` int(11) NOT NULL,
  `product_types_name_th` varchar(200) NOT NULL,
  `product_types_name_en` varchar(200) NOT NULL,
  `product_types_img` text NOT NULL,
  `product_types_popular` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product_types`
--

INSERT INTO `tb_product_types` (`product_types_id`, `product_types_name_th`, `product_types_name_en`, `product_types_img`, `product_types_popular`) VALUES
(4, 'ำกดหกดหกด', 'BBBB', '07032019162624-05032019145951-default.png', 1),
(5, 'หกดหกด', 'CCCC', '07032019162629-05032019145951-default.png', 1),
(6, 'หกดหกดหก', 'DDDD', '07032019110434-05032019145951-default.png', 1),
(7, 'กกกกกก', 'cc', '07032019162619-05032019145951-default.png', 1),
(8, 'หกดหกดหกด', '    nmbnmbbnm', '07032019110444-05032019145951-default.png', 1),
(9, 'หกดหก', 'ขข', '07032019110449-default.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_services`
--

CREATE TABLE `tb_services` (
  `services_id` int(11) NOT NULL,
  `services_name_th` varchar(200) NOT NULL,
  `services_name_en` varchar(200) NOT NULL,
  `services_img` text NOT NULL,
  `services_detail_th` text NOT NULL,
  `services_detail_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_services`
--

INSERT INTO `tb_services` (`services_id`, `services_name_th`, `services_name_en`, `services_img`, `services_detail_th`, `services_detail_en`) VALUES
(12, 'ผู้ขาย / อาจารย์', 'SELLER / LESSOR', '28022019155707-3305164-image2.png', 'Penthouse apartment for sale located on Iancu Nicolae Road. Wit New Darwin suburb Muirhead &ndash; which came in at number two with 49.7% price growth &ndash; and rapidly growing new Melbourne area, Clyde North, are examples of suburbs with high development, expansion potential and subsequent shifts in supply and demand Penthouse apartment for sale located on Iancu Nicolae Road. Wit New Darwin suburb Muirhead &ndash; which came in at number two with 49.7% price growth &ndash; and rapidlyrapidly growing new Melbourne area, Clyde North, are examples of suburbs with high development, expansion potential and subsequent shifts in supply and demand', 'Counter Service Pay ครบทุกการจ่ายบิลออนไลน์ ค่าน้ำ ค่าไฟ ค่าโทรศัพท์ และอื่นๆด้วยบัตรเครดิต ได้ทุกที่ ทุกเวลา &middot; All Bill บริการสะดวกจ่ายในทุกเรื่อง รับชำระบิลค่าสินค้า ...'),
(13, 'ผู้ขาย / อาจารย์', 'SELLER / LESSOR', '28022019155714-3305164-image2.png', 'Counter Service Pay ครบทุกการจ่ายบิลออนไลน์ ค่าน้ำ ค่าไฟ ค่าโทรศัพท์ และอื่นๆด้วยบัตรเครดิต ได้ทุกที่ ทุกเวลา &middot; All Bill บริการสะดวกจ่ายในทุกเรื่อง รับชำระบิลค่าสินค้า ...', 'Counter Service Pay ครบทุกการจ่ายบิลออนไลน์ ค่าน้ำ ค่าไฟ ค่าโทรศัพท์ และอื่นๆด้วยบัตรเครดิต ได้ทุกที่ ทุกเวลา &middot; All Bill บริการสะดวกจ่ายในทุกเรื่อง รับชำระบิลค่าสินค้า ...');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service_head`
--

CREATE TABLE `tb_service_head` (
  `service_head_id` int(5) NOT NULL,
  `service_head_title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `service_head_sub_title_en` text COLLATE utf8_unicode_ci NOT NULL,
  `service_head_title_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `service_head_sub_title_th` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_service_head`
--

INSERT INTO `tb_service_head` (`service_head_id`, `service_head_title_en`, `service_head_sub_title_en`, `service_head_title_th`, `service_head_sub_title_th`) VALUES
(1, 'SERVICE', 'Definition of service - the action of helping or doing work for someone, a system supplying a public need such as transport, communications, or utilities.', 'บริการ', 'ให้การสนับสนุนและดูลูกค้าในการซ่อมผลิตภัณฑ์และให้คำแนะนำรวมถึงความเชื่อเหลือในด้านต่างๆ โดยช่างที่ผ่านการฝึกอบรมและได้รับประกาศนียบัตรเป็นช่างผู้ชำนาญงานของศูนย์บริการซัมซุง \n\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slide`
--

CREATE TABLE `tb_slide` (
  `slide_id` int(11) NOT NULL,
  `slide_name` varchar(100) NOT NULL,
  `slide_title_th` varchar(100) DEFAULT NULL,
  `slide_title_en` varchar(100) DEFAULT NULL,
  `slide_description_th` text,
  `slide_description_en` text,
  `slide_image` varchar(200) NOT NULL,
  `updateby` int(11) DEFAULT NULL,
  `lastupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_slide`
--

INSERT INTO `tb_slide` (`slide_id`, `slide_name`, `slide_title_th`, `slide_title_en`, `slide_description_th`, `slide_description_en`, `slide_image`, `updateby`, `lastupdate`) VALUES
(1, 'about', 'REALESTATE-เกี่ยวกับเรา', 'REALESTATE-ABOUT', 'REALESTATE-เกี่ยวกับเรา', 'REALESTATE-ABOUT', '', 1, '2019-03-01 16:15:51'),
(2, 'service', 'REALESTATE-บริการ', 'REALESTATE-SERVICE', 'REALESTATE-บริการ', 'REALESTATE-SERVICE', '', 1, '2019-03-01 16:15:51'),
(3, 'property', 'REALESTATE-คุณสมบัติ', 'REALESTATE-PROPERTY', 'REALESTATE-คุณสมบัติ', 'REALESTATE-PROPERTY', '', 1, '2019-03-01 16:15:51'),
(4, 'news&event', 'REALESTATE-ข่าวและเหตุการณ์', 'REALESTATE-NEWS&EVENT', 'REALESTATE-ข่าวและเหตุการณ์', 'REALESTATE-NEWS&EVENT', '', 1, '2019-03-01 16:15:51'),
(5, 'contact', 'REALESTATE-ติดต่อเรา', 'REALESTATE-CONTACT', 'REALESTATE-ติดต่อเรา', 'REALESTATE-CONTACT', '', 1, '2019-03-01 16:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `user_firstname` varchar(45) DEFAULT NULL,
  `user_lastname` varchar(45) DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_facebook` varchar(200) NOT NULL,
  `user_line` varchar(100) NOT NULL,
  `user_username` varchar(45) DEFAULT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `user_address` varchar(200) DEFAULT NULL,
  `user_district` varchar(100) DEFAULT NULL,
  `user_amphur` varchar(100) DEFAULT NULL,
  `user_province` varchar(100) DEFAULT NULL,
  `user_zipcode` varchar(20) DEFAULT NULL,
  `user_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_type_id`, `user_firstname`, `user_lastname`, `user_phone`, `user_email`, `user_facebook`, `user_line`, `user_username`, `user_password`, `user_address`, `user_district`, `user_amphur`, `user_province`, `user_zipcode`, `user_image`) VALUES
(4, 2, 'ทดลอง', 'ทดลอง', '0859589654', 'test@gmail.com', 'www.facebook.com/test', '085-958-9654', 'admin', '123456', '698', 'ในเมือง', 'เมืองนครราชสีมา', 'นครราชสีมา', '30000', '05032019145951-default.png'),
(5, 1, 'asd', 'asdasd', 'asdasd', 'asdas', 'das', 'das', 'root', 'root123456', 'dasdasd', 'dasdasd', 'das', 'dasdas', 'asdasdasd', '27022019104335-48052436_1896837297097519_7126811084484247552_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_type`
--

CREATE TABLE `tb_user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user_type`
--

INSERT INTO `tb_user_type` (`user_type_id`, `user_type_name`) VALUES
(1, 'ผู้ดูเเล'),
(2, 'ผู้ใช้งาน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about_us`
--
ALTER TABLE `tb_about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `tb_agent`
--
ALTER TABLE `tb_agent`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `tb_agent_head`
--
ALTER TABLE `tb_agent_head`
  ADD PRIMARY KEY (`agent_head_id`);

--
-- Indexes for table `tb_company_profile`
--
ALTER TABLE `tb_company_profile`
  ADD PRIMARY KEY (`company_profile_id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tb_contact_head`
--
ALTER TABLE `tb_contact_head`
  ADD PRIMARY KEY (`contact_head_id`);

--
-- Indexes for table `tb_contact_title`
--
ALTER TABLE `tb_contact_title`
  ADD PRIMARY KEY (`contact_title_id`);

--
-- Indexes for table `tb_contact_type`
--
ALTER TABLE `tb_contact_type`
  ADD PRIMARY KEY (`contact_type_id`);

--
-- Indexes for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `tb_country`
--
ALTER TABLE `tb_country`
  ADD PRIMARY KEY (`ct_code`);

--
-- Indexes for table `tb_furniture`
--
ALTER TABLE `tb_furniture`
  ADD PRIMARY KEY (`furniture_id`);

--
-- Indexes for table `tb_location`
--
ALTER TABLE `tb_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tb_page`
--
ALTER TABLE `tb_page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tb_product_header`
--
ALTER TABLE `tb_product_header`
  ADD PRIMARY KEY (`product_header_id`);

--
-- Indexes for table `tb_product_highlight`
--
ALTER TABLE `tb_product_highlight`
  ADD PRIMARY KEY (`product_highlight_id`);

--
-- Indexes for table `tb_product_image`
--
ALTER TABLE `tb_product_image`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexes for table `tb_product_types`
--
ALTER TABLE `tb_product_types`
  ADD PRIMARY KEY (`product_types_id`);

--
-- Indexes for table `tb_services`
--
ALTER TABLE `tb_services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `tb_service_head`
--
ALTER TABLE `tb_service_head`
  ADD PRIMARY KEY (`service_head_id`);

--
-- Indexes for table `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_user_type`
--
ALTER TABLE `tb_user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about_us`
--
ALTER TABLE `tb_about_us`
  MODIFY `about_us_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_agent`
--
ALTER TABLE `tb_agent`
  MODIFY `agent_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_agent_head`
--
ALTER TABLE `tb_agent_head`
  MODIFY `agent_head_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `contact_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_contact_head`
--
ALTER TABLE `tb_contact_head`
  MODIFY `contact_head_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_contact_title`
--
ALTER TABLE `tb_contact_title`
  MODIFY `contact_title_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_contact_type`
--
ALTER TABLE `tb_contact_type`
  MODIFY `contact_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  MODIFY `contact_us_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_furniture`
--
ALTER TABLE `tb_furniture`
  MODIFY `furniture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_location`
--
ALTER TABLE `tb_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_page`
--
ALTER TABLE `tb_page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tb_product_highlight`
--
ALTER TABLE `tb_product_highlight`
  MODIFY `product_highlight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `tb_product_image`
--
ALTER TABLE `tb_product_image`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `tb_product_types`
--
ALTER TABLE `tb_product_types`
  MODIFY `product_types_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_services`
--
ALTER TABLE `tb_services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_service_head`
--
ALTER TABLE `tb_service_head`
  MODIFY `service_head_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_user_type`
--
ALTER TABLE `tb_user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
