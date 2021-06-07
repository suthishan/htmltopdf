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
(1, 'Ashok kumar Balagangadharan', 'ABJAY ASSOCIATES', 'satvatholistics.jpg', 'Business Training/Coach', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+918122000160', 'ashok@abjayassociates.com', 'http://www.abjayassociates.com/', 'https://facebook.com/AshokKumarB.Mentoring', 'https://instagram.com/profit360ashok', 'Business Consultants' ),
(2, 'CHANDRASEKAR T.S.', 'G R C & ASSOCIATES , CA`S', 'satvatholistics.jpg', 'Accounting Services', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '42129937', 'ca.grc.chennai@gmail.com', 'http://grcandassociates.com/', 'null', '', 'Business Consultants' ),
(3, 'LVK Sarma', 'Ascend Management Consultants & Advisors Pvt. Ltd', 'satvatholistics.jpg', 'Business Consultant', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919380284913', 'shyam.ascend@gmail.com', 'http://www.connectascend.com/', 'null', '', 'Business Consultants' ),
(4, 'Ravigandh Vignesh', 'Sanvi Business Solutions', 'satvatholistics.jpg', 'Recruiter', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919176033506', 'ravigandh.vignesh@sanvibs.com', 'https://sanvibs.com/', 'https://www.facebook.com/Sanvibs', '', 'Business Consultants' ),
(5, 'Saravanan Ravichandran', 'The Cognitive Idea Lab', 'satvatholistics.jpg', 'Branding', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919176697565', 'creatives@cognitiveidealab.com', 'https://cognitiveidealab.com/', 'https://www.facebook.com/cognitiveidealab', '', 'Business Consultants' ),
(6, 'Senthilnathan P', 'Jaiwin Associates', 'satvatholistics.jpg', 'Residential Mortgages', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919500037093', 'jaiwinassociates@gmail.com', 'null', 'null', '', 'Business Consultants' ),
(7, 'Ajay Kumar', 'Orient Habitat Optimism', 'satvatholistics.jpg', 'Architectural Services', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+04448577575', 'ajay@ohoteam.in', 'https://www.ohoteam.in/', 'https://www.facebook.com/ohoteam', '', 'Construction- Civil' ),
(8, 'Ashoklal Vamanlal', 'Laal Chemicals', 'satvatholistics.jpg', 'Construction Products Retail', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919952960458', 'Ashok.lal@gmail.com', 'https://www.laalchemicals.com/', 'null', '', 'Construction- Civil' ),
(9, 'Jaya Krithika', 'Advocate', 'satvatholistics.jpg', 'Lawyer', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+917538878386', 'vjkrvr.adv@gmail.com', 'null', 'null', '', 'Construction- Civil' ),
(10, 'Muthu Krishnan', 'Trinity Realty', 'satvatholistics.jpg', 'Real Estate Planning Consultant', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919940486127', 'trinittyrealty@gmail.com', 'null', 'null', '', 'Construction- Civil' ),
(11, 'Peram M Srihari', 'Winbros Commidities Company', 'satvatholistics.jpg', 'Cold Pressed Oils', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919087607500', 'srihari.winbros@gmail.com', 'www.marasekku.com', 'null', '', 'Construction- Civil' ),
(12, 'Rajamannar ..', 'Sree Balaji Enterprises', 'satvatholistics.jpg', 'Building Materials', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919841295956', 'sbtrajamannar@gmail.com', 'http://www.constramart.com/', 'https://www.facebook.com/Constramart2', '', 'Construction- Civil' ),
(13, 'Thayanithi thaya', 'Thyanithi Construction', 'satvatholistics.jpg', 'Builder/General Contractor', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919941027430', 'tthayanithi@yahoo.com', 'null', 'null', '', 'Construction- Civil' ),
(14, 'Jothirmaya Sanjith', 'S2 Enterprises', 'satvatholistics.jpg', 'Food-Beverage Products', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919940044027', 'ajothir@gmail.com', 'null', 'null', '', 'Events' ),
(15, 'Keerthi Vignesh', 'Wolf Elite', 'satvatholistics.jpg', 'Apparel', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919941881306', 'wolfelite19@gmail.com', 'null', 'https://www.facebook.com/wolfelite19', '', 'Events' ),
(16, 'Mihir Shah', 'Diamond Kraft', 'satvatholistics.jpg', 'Diamonds', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919884062163', 'diamondcraft@gmail.com', 'null', 'https://www.facebook.com/diamondkraftalwarpet', '', 'Events' ),
(17, 'Mohan Kumar C', 'Meal Matrix Developments', 'satvatholistics.jpg', 'Convenience Foods', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919865944999', 'mmdmohan@outlook.com', 'http://www.mealmatrix.com', 'null', '', 'Events' ),
(18, 'Sudha Murali', 'Mudhra Trends', 'satvatholistics.jpg', 'Apparel', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919791044514', 'sudhamurali.1980@gmail.com', 'https://mudhratrends.in/', 'https://www.facebook.com/mudhra.trends.3', '', 'Events' ),
(19, 'Sudha sundarararaman', 'PRERANA EVENTS', 'satvatholistics.jpg', 'Event Planner', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919444139096', 'preeanaevents.chennai@gmail.com', 'https://preeanaevents.com/', 'https://www.facebook.com/ChennaieventPrerana', '', 'Events' ),
(20, 'Sumanth Kumar AR', 'Dynapix Media', 'satvatholistics.jpg', 'Photographer', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919940082828', 'dynapixmedia.com@gmail.com', 'https://sumanthkumar.com/', 'https://www.facebook.com/Dynamic-Media-101427962079659', '', 'Events' ),
(21, 'Yeshwanth Ramesh', 'Swarnamukhi', 'satvatholistics.jpg', 'Caterer', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919566111647', 'swarnamukhichennai@gmail.com', 'null', 'https://www.facebook.com/swarnamukhii', '', 'Events' ),
(22, 'Asma Jalal', 'Busybees healthcare pvt.ltd', 'satvatholistics.jpg', 'Cosmetics/Skin Care', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919384752912', 'admin@busybeeshealthcare.in', 'null', 'null', '', 'Health and Wellness' ),
(23, 'Dr Srikrishna D', 'Shree Ayurvedic Multi-speciality Hospital', 'satvatholistics.jpg', 'Medical Services', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919962055381', 'vaidyasrikrishna.d@gmail.com', 'https://shreehospitalgroup.com/', 'https://www.facebook.com/shree.hchv', '', 'Health and Wellness' ),
(24, 'Giridharan Krishnamurthy', 'Crown foot reflexology', 'satvatholistics.jpg', 'Foot Reflexology', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919940302421', 'giridharan.krishnamurthy@gmail.com', 'https://crownfoot.com/', 'https://www.facebook.com/Crownfoot', '', 'Health and Wellness' ),
(25, 'P Rama Prasad', 'RP Centre for Excellence', 'satvatholistics.jpg', 'Life Coach', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919500015734', 'prasad2540@kaiznintl.in', 'https://www.rpcfore.com', 'https://www.facebook.com/rpcentrepranichealing/', '', 'Health and Wellness' ),
(26, 'Prabha R', 'null', 'satvatholistics.jpg', 'Appliances', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919841013260', 'prabharainbow7@gmail.com', 'null', 'https://www.facebook.com/rprabha.prabha.1', '', 'Health and Wellness' ),
(27, 'Prem Lawrence', 'GOLD DENTAL CARE', 'satvatholistics.jpg', 'Dentist', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+918939887201', 'directors@golddentalcare.com', 'http://www.golddentalcare.com/', 'https://www.facebook.com/golddentalcare', '', 'Health and Wellness' ),
(28, 'Sunithi S Ramesh', 'Satvat Holistics Pvt Ltd', 'satvatholistics.jpg', 'Hearing/Audiology', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+918056011114', 'sunithi@satvatholistics.com', 'https://satvatholistics.com/', 'https://www.facebook.com/SatvatHolisticsSoundTherapy', '', 'Health and Wellness' ),
(29, 'Karthikeyan R', 'Citi Services', 'satvatholistics.jpg', 'Appliances', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919884040884', 'karthik@citiservices.net', 'https://www.citiservices.in/', 'https://www.facebook.com/CitiServices', '', 'HR/Admin/Finance' ),
(30, 'Mohammad Azhar', 'Knowledge Academy School', 'satvatholistics.jpg', 'Education Services/Tutor', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919884578427', 'principal@kectschool.com', 'https://kectschool.com/', 'https://www.facebook.com/kectschool', '', 'HR/Admin/Finance' ),
(31, 'Rajesh Joseph', 'iGiftKart', 'satvatholistics.jpg', 'Gifts', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919840600313', 'i.giftart@gmail.com', 'https://www.facebook.com/IGiftkart-106162291166335', 'null', '', 'HR/Admin/Finance' ),
(32, 'S. Seetharaman', 'SKS Investment Solutions', 'satvatholistics.jpg', 'Life and Disability Insurance', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+917401122942', 'seetharaman.srinivasan@hotmail.com', 'null', 'null', '', 'HR/Admin/Finance' ),
(33, 'Sachin P M', 'Rishta Capital Pvt Ltd', 'satvatholistics.jpg', 'Financial Advisor', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919786020987', 'sachin.pm@rishacapital.com', 'https://www.rishacapital.com/', 'https://www.facebook.com/rishta.capital', '', 'HR/Admin/Finance' ),
(34, 'WARRIER S. P', 'Elite Print System pvt ltd', 'satvatholistics.jpg', 'Printer', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919840017328', 'admin@eliteprintsystrms.com', 'https://www.eliteprintsystrms.com/', 'https://www.facebook.com/Elite-Print-Systems-103571991524867', '', 'HR/Admin/Finance' ),
(35, 'Mukilan Krishnamoorthy', 'Delta Green Science', 'satvatholistics.jpg', 'Cleaning Products', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919789062130', 'info@dyagreen.com', 'www.dyagreen.com', 'null', '', 'Industrial' ),
(36, 'Natarajan Sivanesan', 'SREE LAXMI ENTERPRISES', 'satvatholistics.jpg', 'Heavy Industrial Related', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+918754553025', 'natarajan150454@gmail.com', 'http://sreelaxmienterprises.com/', 'null', '', 'Industrial' ),
(37, 'Prabhu Sethuraman', 'SAVEAIR TECHNOLOGIES PRIVATE LIMITED', 'satvatholistics.jpg', 'Industrial Automation', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919840261043', 'saveairtech@yahoo.com', 'http://www.saveairtechnologies.com/', 'https://www.facebook.com/prominoussolarenergy', '', 'Industrial' ),
(38, 'Subramanian Hariharan', 'Prominous Innovations Private Limited', 'satvatholistics.jpg', 'Solar', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+918939186040', 'subramanin@prominous.co.in', 'https://prominous.in/?v=f7c7a92a9cb9', 'null', '', 'Industrial' ),
(39, 'VARADARAAN GOVINDARAALU', 'APEX ELECTRICALS & NETWORKS', 'satvatholistics.jpg', 'Electrical Contractor', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+04426258553', 'apexelectricals72@gmail.com', 'http://www.apex-electricals.in/', 'null', '', 'Industrial' ),
(40, 'Vinay Jain', 'Vardhan Electricals', 'satvatholistics.jpg', 'Electronics Retailer', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919962932623', 'siemens3@dkgroups.com', 'www.vardhanelectricals.com', 'https://www.facebook.com/singaporehardwares.trichychennai', '', 'Industrial' ),
(41, 'Anees R', 'Singapore Hardwares', 'satvatholistics.jpg', 'Architectural Designer Hardware', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919613801234', 'null', 'http://singaporehardwares.co.in', 'https://www.facebook.com/kalpanatimber', '', 'Interior' ),
(42, 'Keval Shah', 'Kalpana timber & plywood corpn', 'satvatholistics.jpg', 'Wood Merchants', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+04428151707', 'kevalshah1997@gmail.com', 'https://www.kdecors.in/', 'null', '', 'Interior' ),
(43, 'Madhuri S', 'BMB Security Systems', 'satvatholistics.jpg', 'Security Systems', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+917200357477', 'bmbsales111@gmail.com', 'www.bmbsecuritysystems', 'https://www.facebook.com/garniture.woodworks.3', '', 'Interior' ),
(44, 'Madhusudan Sutrave', 'Garniture Wood Works LLP', 'satvatholistics.jpg', 'Furniture manufacture', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919677030372', 'maddy@garniturewood.com', 'http://www.garniturewood.com/', 'null', '', 'Interior' ),
(45, 'Rahila Riaz', 'Rahila Designs', 'satvatholistics.jpg', 'Residential Interior', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+917899174343', 'rrahila1970@gmail.com', 'null', 'https://www.facebook.com/airfriendlyenterprises', '', 'Interior' ),
(46, 'Sushmitha V', 'Air friendly', 'satvatholistics.jpg', 'HVAC - Heating & Air', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+916369685690', 'airfriendlyenterprises@gmail.com', 'https://www.airfriendlyenterprises.com/', 'null', '', 'Interior' ),
(47, 'Venkataramana B', 'CENTUM Lighting Solutions Pvt Ltd', 'satvatholistics.jpg', 'Lighting Retailers', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919566280891', 'venkat@centumlighting.com', 'http://www.centumlighting.com/', 'https://www.facebook.com/jothi.traders', '', 'Interior' ),
(48, 'Anbukumar R', 'Jothi traders', 'satvatholistics.jpg', 'UPS/Inverter', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919486360696', 'anbukumarr2@gmail.com', 'https://batteriesandro.com/', 'null', '', 'IT and IT related Services' ),
(49, 'Ashok Kumar', 'Green Computers', 'satvatholistics.jpg', 'Computer Accessories', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919941338877', 'f1greencomputers@gmail.com', 'null', 'https://www.facebook.com/innoblitz', '', 'IT and IT related Services' ),
(50, 'Balaji Kuppuswamy', 'Innoblitz Technologies and Systems PVT LTD', 'satvatholistics.jpg', 'Web Development', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919500359896', 'bala@innoblitz.global', 'https://innoblitz.global/', 'https://www.facebook.com/harikumar.fb', '', 'IT and IT related Services' ),
(51, 'Hari Kumar', 'Amage Solutions', 'satvatholistics.jpg', 'Digital Marketing', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+04426503912', 'g_harikumar@hotmail.com', 'https://www.amagesolutions.com/', 'null', '', 'IT and IT related Services' ),
(52, 'Shweta Gulecha', 'Content Writer', 'satvatholistics.jpg', 'Copywriter/Writer', 'Adyar, Chennai', 'Chennai', '600020', 'India', 'sunithi.jpg', '+919840865060', 'shwetagulecha@gmail.com', 'null', 'null', '', 'IT and IT related Services' ),

























































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
