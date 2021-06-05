-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 03:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `CompanyLogo` varchar(100) NOT NULL,
  `spec` varchar(150) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `images` varchar(300) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `fb` varchar(150) NOT NULL,
  `insta` varchar(150) NOT NULL,
  `powerteam` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `CompanyName`, `CompanyLogo`, `spec`, `Address`, `City`, `PostalCode`, `Country`, `images`, `mobile`, `email`, `website`, `fb`, `insta`, `powerteam`) VALUES
(1, 'SUNITHI S RAMESH', 'Satvat Holistics Pvt., Ltd.,', 'satvatholistics.jpg', 'Sound Therapist', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+918056011114', 'sunithis@gmail.com', 'www.satvatholistics.com', '', '0', '0'),
(2, 'RAMESH JANARTHANAN', 'Satvat Infosol Pvt., Ltd.,', 'satvatinfosol.jpg', 'Managing Director', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'ramesh.png', '+918056011113', 'ramesh@satvatinfosol.com', 'www.satvatinfosol.com', '', '0', '0'),
(3, 'ASHOK KUMAR B', 'Business Coach Profit 360*', 'profit360.jpg', 'Business Coach', 'No.5, Old No. 15, C-Block 10th Street Annanagar East Chennai - 600 102', 'chennai', '600017', 'India', 'ashok.jpg', '+918122000160', 'ashok@abjayassociates.com', 'www.abjayassociates.com', '', '0', '0'),
(4, 'Rajamannar', 'Sree Balaji Enterprises', '', 'Building Materials', '', '', '', '', '', '+919841295956', 'sbtrajamannar@gmail.com', 'http://www.constramart.com/', '', '0', 'Construction- Civil'),
(5, 'Mohammad Azhar', 'Knowledge Academy School', '', 'Education Services/Tutor', '', '', '', '', '', '+919884578427', 'principal@kectschool.com', 'https://kectschool.com/', '', '', 'HR/Admin/Finance'),
(6, 'Ravigandh Vignesh', 'Sanvi Business Solutions', '', 'Recruiter', '', '', '', '', '', '9176033506', 'ravigandh.vignesh@sanvibs.com', 'https://sanvibs.com/', '', '', 'Business Consultants'),
(7, 'Venkataramana B', 'CENTUM Lighting Solutions Pvt Ltd', '', 'Lighting Retailers', '', '', '', '', '', '+919566280891', 'venkat@centumlighting.com', 'http://www.centumlighting.com/', '', '', 'Interior'),
(8, 'Ashok kumar Balagangadharan', 'ABJAY ASSOCIATES', '', 'Business Training/Coach', '', '', '', '', '', '+918122000160', 'ashok@abjayassociates.com', 'http://www.abjayassociates.com/', '', '', 'Business Consultants'),
(9, 'Keerthi Vignesh', 'Wolf Elite', '', 'Apparel', '', '', '', '', '', '9941881306', 'wolfelite19@gmail.com', '', '', '', 'Events'),
(10, 'Mohan Kumar C', 'Meal Matrix Developments', '', 'Convenience Foods', '', '', '', '', '', '+919865944999', '', '', '', '', ''),
(11, 'Dr Srikrishna D', 'Shree Ayurvedic Multi-speciality Hospital', '', 'Medical Services', '', '', '', '', '', '+919962055381', 'vaidyasrikrishna.d@gmail.com', 'https://shreehospitalgroup.com/', '', '', 'Health and Wellness'),
(12, 'Ashoklal Vamanlal', 'Laal Chemicals', '', 'Construction Products Retail', '', '', '', '', '', '9952960458', 'Ashok.lal@gmail.com', 'https://www.laalchemicals.com/', '', '', 'Construction- Civil'),
(13, 'VARADARAAN GOVINDARAALU', 'APEX ELECTRICALS & NETWORKS', '', 'Electrical Contractor', '', '', '', '', '', '+914426258553', 'apexelectricals72@gmail.com', 'http://www.apex-electricals.in/', '', '', 'Industrial'),
(14, 'Shweta Gulecha', 'Content Writer', '', 'Copywriter/Writer', '', '', '', '', '', '+919840865060', 'shwetagulecha@gmail.com', '', '', '', 'IT and IT related Services'),
(15, 'Subramanian Hariharan', 'Prominous Innovations Private Limited', '', 'Solar', '', '', '', '', '', '+918939186040', 'subramanin@prominous.co.in', 'https://prominous.in/?v=f7c7a92a9cb9', '', '', 'Industrial'),
(16, 'Sushmitha V', 'Air friendly', '', 'HVAC - Heating & Air', '', '', '', '', '', '6369685690', 'airfriendlyenterprises@gmail.com', 'https://www.airfriendlyenterprises.com/', '', '', 'Interior'),
(17, 'Vinay Jain', 'Deekay Electricals', '', 'Electronics Retailer', '', '', '', '', '', '+919962932623', 'siemens3@dkgroups.com', 'https://dkgroups.com/', '', '', 'Industrial'),
(18, 'Thayanithi thaya', 'Thyanithi Construction', '', 'Builder/General Contractor', '', '', '', '', '', '9941027430', 'tthayanithi@yahoo.com', '', '', '', 'Construction- Civil'),
(19, 'Asma Jalal', 'Busybees healthcare pvt.ltd', '', 'Cosmetics/Skin Care', '', '', '', '', '', '+919384752912', 'admin@busybeeshealthcare.in', '', '', '', 'Health and Wellness'),
(20, 'Rajesh Joseph', 'iGiftKart', '', 'Gifts', '', '', '', '', '', '+919840600313', 'i.giftart@gmail.com', '', '', '', 'HR/Admin/Finance'),
(21, 'CHANDRASEKAR T.S.', 'G R C & ASSOCIATES , CA\'S', '', 'Accounting Services', '', '', '', '', '', '42129937', 'ca.grc.chennai@gmail.com', 'http://grcandassociates.com/', '', '', 'Business Consultants'),
(22, 'Mukilan Krishnamoorthy', 'Delta Green Science', '', 'Cleaning Products', '', '', '', '', '', '+919789062130', '', '', '', '', 'Industrial'),
(23, 'Giridharan Krishnamurthy', 'Crown foot reflexology', '', 'Foot Reflexology', '', '', '', '', '', '+919940302421', 'giridharan.krishnamurthy@gmail.com', 'https://crownfoot.com/', '', '', 'Health and Wellness'),
(24, 'Muthu Krishnan', 'Trinity Realty', '', 'Real Estate Planning Consultant', '', '', '', '', '', '+919940486127', 'trinittyrealty@gmail.com', '', '', '', 'Construction- Civil'),
(25, 'Madhusudan Sutrave', 'Garniture Wood Works LLP', '', 'Furniture manufacture', '', '', '', '', '', '9677030372', 'maddy@garniturewood.com', 'http://www.garniturewood.com/', '', '', 'Interior'),
(26, 'Jaya Krithika', 'Advocate', '', 'Lawyer', '', '', '', '', '', '+917538878386', 'vjkrvr.adv@gmail.com', '', '', '', 'Construction- Civil'),
(27, 'Ashok Kumar', 'Green Computers', '', 'Computer Accessories', '', '', '', '', '', '+919941338877', 'f1greencomputers@gmail.com', '', '', '', 'IT and IT related Services'),
(28, 'Sudha sundarararaman', 'PRERANA EVENTS', '', 'Event Planner', '', '', '', '', '', '9444139096', 'preeanaevents.chennai@gmail.com', 'https://preeanaevents.com/', '', '', 'Events'),
(29, 'Hari Kumar', 'Amage Solutions', '', 'Digital Marketing', '', '', '', '', '', '+04426503912', 'g_harikumar@hotmail.com', 'https://www.amagesolutions.com/', '', '', 'IT and IT related Services'),
(30, 'Ajay Kumar', 'Orient Habitat Optimism', '', 'Architectural Services', '', '', '', '', '', '+04448577575', 'ajay@ohoteam.in', 'https://www.ohoteam.in/', '', '', 'Construction- Civil'),
(31, 'Natarajan Sivanesan', 'SREE LAXMI ENTERPRISES', '', 'Heavy Industrial Related', '', '', '', '', '', '8754553025', 'natarajan150454@gmail.com', 'http://sreelaxmienterprises.com/', '', '', 'Industrial'),
(32, 'Sumanth Kumar AR', 'Dynapix Media', '', 'Photographer', '', '', '', '', '', '+919940082828', 'dynapixmedia.com@gmail.com', 'https://sumanthkumar.com/', '', '', 'Events'),
(33, 'Balaji Kuppuswamy', 'Innoblitz Technologies and Systems PVT LTD', '', 'Web Development', '', '', '', '', '', '+919500359896', 'bala@innoblitz.global', 'https://innoblitz.global/', '', '', 'IT and IT related Services'),
(34, 'Mihir Shah', 'Diamond Kraft', '', 'Diamonds', '', '', '', '', '', '9884062163', 'diamondcraft@gmail.com', '', '', '', 'Events'),
(35, 'Prem Lawrence', 'GOLD DENTAL CARE', '', 'Dentist', '', '', '', '', '', '+918939887201', 'directors@golddentalcare.com', 'http://www.golddentalcare.com/', '', '', 'Health and Wellness'),
(36, 'Peram M Srihari', 'Winbros Commidities Company', '', 'Cold Pressed Oils', '', '', '', '', '', '+919087607500', 'srihari.winbros@gmail.com', '', '', '', 'Construction- Civil'),
(37, 'Keval Shah', 'Kalpana timber & plywood corpn', '', 'Wood Merchants', '', '', '', '', '', '04428151707', 'kevalshah1997@gmail.com', 'https://www.kdecors.in/', '', '', 'Interior'),
(38, 'Sudha Murali', 'Mudhra Trends', '', 'Apparel', '', '', '', '', '', '+919791044514', 'sudhamurali.1980@gmail.com', 'https://mudhratrends.in/', '', '', 'Events'),
(39, 'Mohan Kumar C', 'The HPPL', '', 'Packaging', '', '', '', '', '', '9600071472', 'nishantp@thehppl.in', '', '', '', ''),
(40, 'Subramanian N', 'Goldenpalm Exin', '', 'Interior Design - Commercial', '', '', '', '', '', '+919003283045', 'msundaram@ramcons.in', 'https://ramcons.in/', '', '', ''),
(41, 'Senthilnathan P', 'Jaiwin Associates', '', 'Residential Mortgages', '', '', '', '', '', '+919500037093', 'jaiwinassociates@gmail.com', '', '', '', 'Business Consultants'),
(42, 'Prabhu Sethuraman', 'SAVEAIR TECHNOLOGIES PRIVATE LIMITED', '', 'Industrial Automation', '', '', '', '', '', '+919840261043', 'saveairtech@yahoo.com', 'http://www.saveairtechnologies.com/', '', '', 'Industrial'),
(43, 'Sachin P M', 'Rishta Capital Pvt Ltd', '', 'Financial Advisor', '', '', '', '', '', '+919786020987', 'sachin.pm@rishacapital.com', 'https://www.rishacapital.com/', '', '', 'HR/Admin/Finance'),
(44, 'S. Seetharaman', 'SKS Investment Solutions', '', 'Life and Disability Insurance', '', '', '', '', '', '7401122942', '', '', '', '', 'HR/Admin/Finance'),
(45, 'Nethaji Ponnambalam', 'Pro Cleaners', '', 'Auto/Car Detailing', '', '', '', '', '', '+919884356179', 'nethaji@procleaners.co.in', 'https://procleaners.co.in/', '', '', ''),
(46, 'P Rama Prasad', 'RP Centre for Excellence', '', 'Life Coach', '', '', '', '', '', '+919500015734', 'prasad2540@kaiznintl.in', 'https://www.kaiznintl.in/', '', '', 'Business Consultants'),
(47, 'LVK Sarma', 'Ascend Management Consultants & Advisors Pvt. Ltd	Ascend Management Consultants & Advisors Pvt. Ltd', '', 'Business Consultant', '', '', '', '', '', '9380284913', 'shyam.ascend@gmail.com', 'http://www.connectascend.com/', '', '', ''),
(48, 'Prabha R', '', '', 'Appliances', '', '', '', '', '', '+919841013260', 'prabharainbow7@gmail.com', '', '', '', 'Health and Wellness'),
(49, 'Anees R', 'Singapore Hardwares', '', 'Architectural Designer Hardware', '', '', '', '', '', '+919613801234', '', '', '', '', 'Interior'),
(50, 'Jothirmaya Sanjith', 'S2 Enterprises', '', 'Food-Beverage Products	Food-Beverage Products', '', '', '', '', '', '9940044027', '', '', '', '', ''),
(51, 'Karthikeyan R', 'Citi Services', '', 'Appliances', '', '', '', '', '', '+919884040884', 'karthik@citiservices.net', 'https://www.citiservices.in/', '', '', 'HR/Admin/Finance'),
(52, 'Anbukumar R', 'Jothi traders', '', 'UPS/Inverter', '', '', '', '', '', '+919486360696', 'anbukumarr2@gmail.com', 'https://batteriesandro.com/', '', '', 'IT and IT related Services'),
(53, 'Sunithi S Ramesh', 'Satvat Holistics Pvt Ltd', '', 'Hearing/Audiology', '', '', '', '', '', '+918056011114', 'sunithi@satvatholistics.com', 'https://satvatholistics.com/', '', '', 'Health and Wellness'),
(54, 'WARRIER S. P', 'Elite Print System pvt ltd', '', 'Printer', '', '', '', '', '', '9840017328', 'admin@eliteprintsystrms.com', 'https://www.eliteprintsystrms.com/', '', '', 'HR/Admin/Finance'),
(55, 'Yeshwanth Ramesh', 'Swarnamukhi', '', 'Caterer', '', '', '', '', '', '+919566111647', 'swarnamukhichennai@gmail.com', '', '', '', ''),
(56, 'Saravanan Ravichandran', 'The Cognitive Idea Lab', '', 'Branding', '', '', '', '', '', '+919176697565', 'creatives@cognitiveidealab.com', 'https://cognitiveidealab.com/', '', '', 'Business Consultants'),
(57, 'Madhuri S', 'BMB Security Systems', '', 'Security Systems', '', '', '', '', '', '7200357477', 'bmbsales111@gmail.com', '', '', '', 'Interior');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
