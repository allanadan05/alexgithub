-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: db5000247935.hosting-data.io
-- Generation Time: Dec 14, 2019 at 11:00 AM
-- Server version: 5.7.28-log
-- PHP Version: 7.0.33-0+deb9u6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs242190`
--

-- --------------------------------------------------------

--
-- Table structure for table `carttbl`
--

CREATE TABLE `carttbl` (
  `ID` int(11) NOT NULL,
  `myaccountID` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `sellingprice` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carttbl`
--

INSERT INTO `carttbl` (`ID`, `myaccountID`, `pid`, `sellingprice`, `quantity`, `total`) VALUES
(23, 'user1576059810', 13, 1800, 1, 1800),
(24, 'user1576059810', 11, 899, 1, 899),
(25, 'user1576059810', 10, 700, 1, 700),
(26, 'user1576059810', 1, 700, 1, 700),
(27, 'user1576059810', 3, 900, 1, 900),
(28, 'user1576059810', 5, 1000, 1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `commenttbl`
--

CREATE TABLE `commenttbl` (
  `commentid` int(11) NOT NULL,
  `accountid` int(20) NOT NULL,
  `pid` int(20) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commenttbl`
--

INSERT INTO `commenttbl` (`commentid`, `accountid`, `pid`, `comment`) VALUES
(1, 2, 5, '. The rating scale for Performance Planning and Review is made up of five factors: Poor, Needs Improvement, Meets Requirements, '),
(2, 1, 3, ' Exceeds Requirements, and Outstanding. Any factor rated poor or needs improvement MUST have performance comments. For any factor, performance comments should support the rating given. '),
(3, 5, 1, 'If there have been counseling sessions, letters of commendation or reprimand, or unofficial performance reviews within the rating period'),
(4, 3, 2, ' the supervisor should keep documentation on file and site these occurrences in the performance comments on the official rating. '),
(5, 4, 4, 'Below are examples of comments that would support individual ratings. These are generic in nature and examples only. Performance comments should be tailored to the individual ');

-- --------------------------------------------------------

--
-- Table structure for table `deliverytbl`
--

CREATE TABLE `deliverytbl` (
  `deliveryid` int(11) NOT NULL,
  `deliverydate` date NOT NULL,
  `deliverytime` time NOT NULL,
  `salesID` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `houseno` int(10) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `municipal` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `accountid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliverytbl`
--

INSERT INTO `deliverytbl` (`deliveryid`, `deliverydate`, `deliverytime`, `salesID`, `status`, `houseno`, `barangay`, `municipal`, `province`, `zipcode`, `accountid`) VALUES
(1, '2019-02-02', '07:00:00', 1, 'OTW', 0, '', '', '', 0, 0),
(2, '2019-01-01', '07:00:00', 2, 'Delivered', 0, '', '', '', 0, 0),
(3, '2019-01-03', '07:00:00', 4, 'Pending', 0, '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktbl`
--

CREATE TABLE `feedbacktbl` (
  `feedbackid` int(11) NOT NULL,
  `pid` int(10) NOT NULL,
  `stars` int(10) NOT NULL,
  `reviewmessage` varchar(255) NOT NULL,
  `accountid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktbl`
--

INSERT INTO `feedbacktbl` (`feedbackid`, `pid`, `stars`, `reviewmessage`, `accountid`) VALUES
(1, 1, 1, 'JR FAMOUS', 1),
(2, 2, 2, 'JR HANDSOME', 2),
(3, 3, 3, 'JR CUTE', 3),
(4, 4, 4, 'JR JOKE LANG', 4),
(5, 3, 3, 'I am really happy after I opened the box!', 2),
(6, 5, 5, 'hahaaha', 3);

-- --------------------------------------------------------

--
-- Table structure for table `invoicetbl`
--

CREATE TABLE `invoicetbl` (
  `invoiceno` int(11) NOT NULL,
  `accesscode` varchar(100) NOT NULL,
  `myaccountID` varchar(100) NOT NULL,
  `tin` varchar(20) NOT NULL,
  `company` varchar(100) NOT NULL,
  `invoicedate` date NOT NULL,
  `shippingfee` double NOT NULL,
  `cartinfo` text NOT NULL,
  `amountdue` double NOT NULL,
  `vat` double NOT NULL,
  `totalamountdue` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `liketbl`
--

CREATE TABLE `liketbl` (
  `likeid` int(11) NOT NULL,
  `accountid` int(10) NOT NULL,
  `productid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liketbl`
--

INSERT INTO `liketbl` (`likeid`, `accountid`, `productid`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `messagingtbl`
--

CREATE TABLE `messagingtbl` (
  `msgid` int(11) NOT NULL,
  `messagedate` date DEFAULT NULL,
  `msgfromaccountid` int(11) NOT NULL,
  `msgtoaccountid` int(11) NOT NULL,
  `messagetext` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagingtbl`
--

INSERT INTO `messagingtbl` (`msgid`, `messagedate`, `msgfromaccountid`, `msgtoaccountid`, `messagetext`) VALUES
(28, '2019-12-10', 2, 8, 'sysdate()'),
(29, '2019-12-11', 2, 3, 'Hello! Welcome!'),
(30, '2019-12-11', 3, 2, 'Thanks!'),
(31, '2019-12-11', 2, 3, 'Ok, Welcome!'),
(32, '2019-12-12', 2, 3, 'Hi Marlon!');

-- --------------------------------------------------------

--
-- Table structure for table `myaccountbalances`
--

CREATE TABLE `myaccountbalances` (
  `balanceid` int(11) NOT NULL,
  `myaccountID` varchar(100) NOT NULL,
  `totalamount` double NOT NULL,
  `datebalance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `myaccountpurchases`
--

CREATE TABLE `myaccountpurchases` (
  `purchaseid` int(11) NOT NULL,
  `myaccountID` varchar(100) NOT NULL,
  `invoiceno` varchar(100) NOT NULL,
  `accesscode` varchar(100) NOT NULL,
  `totalamount` double NOT NULL,
  `datepurchased` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `myaccounttbl`
--

CREATE TABLE `myaccounttbl` (
  `accountid` int(10) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `myaccountID` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `tin` varchar(100) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `image` varchar(150) NOT NULL,
  `houseno` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipal` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myaccounttbl`
--

INSERT INTO `myaccounttbl` (`accountid`, `usertype`, `myaccountID`, `firstname`, `lastname`, `company`, `tin`, `gender`, `image`, `houseno`, `barangay`, `municipal`, `province`, `zipcode`, `mobileno`, `email`, `username`, `password`) VALUES
(1, 'admin', 'spencer1575879028', 'spencer', 'giray', '', '', '', '', '', '', '', '', '', '', 'girayespencer@yahoo.com', 'spencer', 'spencer'),
(2, 'admin', 'danastillero143', 'Dan', 'Astillero', '', '', '', '', '', '', '', '', '', '', '', 'admindan', 'admindan'),
(3, 'user', 'user1576059810', 'Alsjas', 'skdjkj', '', '', 'Male', '', '123', '345', 'sadsad', 'asdasd', '', '0987654321', 'asdasdk@asdjisad.com', 'user', 'user'),
(4, 'user', 'user11576231127', 'Allan', 'Adan', '', '', 'Male', '', '123', 'adasdas', 'adad', 'adasd', '', '987654444444', 'danastillero@gmail.com', 'user1', 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `notificationstbl`
--

CREATE TABLE `notificationstbl` (
  `notificationsid` int(11) NOT NULL,
  `notformmyaccountid` int(11) NOT NULL,
  `nottomyaccountid` int(11) NOT NULL,
  `notdate` date NOT NULL,
  `nottime` time NOT NULL,
  `notmessagetext` longtext NOT NULL,
  `notlink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notificationstbl`
--

INSERT INTO `notificationstbl` (`notificationsid`, `notformmyaccountid`, `nottomyaccountid`, `notdate`, `nottime`, `notmessagetext`, `notlink`) VALUES
(1, 1, 1, '2019-12-03', '03:04:17', 'Admins are some of the hardest-working members of the workforce—from arranging travel plans to running an office to dealing with service providers, your plate is more than full. So don\'t get discouraged if the thought of embarking on a job search makes you want to take an extended coffee break.', 'product.php?id=3'),
(2, 2, 2, '2019-12-04', '04:04:17', 'Admins are some of the hardest-working members of the workforce—from arranging travel plans to running an office to dealing with service providers, your plate is more than full. So don\'t get discouraged if the thought of embarking on a job search makes you want to take an extended coffee break.', 'product.php?id=4'),
(3, 3, 3, '2019-12-05', '05:04:17', 'Admins are some of the hardest-working members of the workforce—from arranging travel plans to running an office to dealing with service providers, your plate is more than full. So don\'t get discouraged if the thought of embarking on a job search makes you want to take an extended coffee break.', 'product.php?id=5'),
(4, 4, 4, '2019-12-06', '06:04:17', 'Admins are some of the hardest-working members of the workforce—from arranging travel plans to running an office to dealing with service providers, your plate is more than full. So don\'t get discouraged if the thought of embarking on a job search makes you want to take an extended coffee break', 'pruduct.php?=7'),
(5, 5, 5, '2019-12-19', '14:40:32', 'Admins are some of the hardest-working members of the workforce—from arranging travel plans to running an office to dealing with service providers, your plate is more than full. So don\'t get discouraged if the thought of embarking on a job search makes you want to take an extended coffee break', 'pruduct.php?=8');

-- --------------------------------------------------------

--
-- Table structure for table `productstbl`
--

CREATE TABLE `productstbl` (
  `pid` int(11) NOT NULL,
  `productID` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `principalprice` double NOT NULL,
  `sellingprice` double NOT NULL,
  `instock` double NOT NULL,
  `description` text NOT NULL,
  `details` text NOT NULL,
  `additionalinfo` text NOT NULL,
  `availablein` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productstbl`
--

INSERT INTO `productstbl` (`pid`, `productID`, `productname`, `category`, `image`, `principalprice`, `sellingprice`, `instock`, `description`, `details`, `additionalinfo`, `availablein`) VALUES
(1, 'Pipes1575879779', 'Pipes SCH 40 Pipe-1 1/4', 'B.I. & G.I. Pipes', 'uploads/product_1575879779_5_1.jpg', 600, 700, 1100, 'made of steel that has not been galvanized. Its name comes from the scaly, dark-colored iron oxide coating on its surface that prevents rust. Black steel pipes are cut and threaded to fit.', 'Used for pipes in oil and petroleum industries\r\nFor water, gas and sewerage purposes\r\nLow-pressure hot water heating pipes\r\nWater wells and pipes for various automotive and industrial applications', 'For water, gas and sewerage purposes', 'Philipines'),
(2, 'BI Pipes1575880009', 'BI Pipes', 'B.I. & G.I. Pipes', 'uploads/product_1575880009185313_239046469_8a601de0_1.jpg', 500, 600, 1090, 'made of steel that has not been galvanized. Its name comes from the scaly, dark-colored iron oxide coating on its surface that prevents rust. Black steel pipes are cut and threaded to fit.', 'Used for pipes in oil and petroleum industries\r\nFor water, gas and sewerage purposes\r\nLow-pressure hot water heating pipes\r\nWater wells and pipes for various automotive and industrial applications', 'Low-pressure hot water heating pipes', 'Philipines'),
(3, 'BI Pipes1575880116', 'BI Pipes SCH 40 Pipe-1/2', 'B.I. & G.I. Pipes', 'uploads/product_1575880116BIPipes-1067x711_1.jpg', 800, 900, 1000, 'made of steel that has not been galvanized. Its name comes from the scaly, dark-colored iron oxide coating on its surface that prevents rust. Black steel pipes are cut and threaded to fit.', 'Used for pipes in oil and petroleum industries\r\nFor water, gas and sewerage purposes\r\nLow-pressure hot water heating pipes\r\nWater wells and pipes for various automotive and industrial applications', 'Water wells and pipes for various automotive and industrial applications', 'Philipines'),
(4, 'BI Pipes1575880205', 'BI Pipes SCH 40 Pipe-3/4', 'B.I. & G.I. Pipes', 'uploads/product_1575880205Galvanized-pipe-1_1.png', 1100, 1300, 500, 'made of steel that has not been galvanized. Its name comes from the scaly, dark-colored iron oxide coating on its surface that prevents rust. Black steel pipes are cut and threaded to fit.', 'Used for pipes in oil and petroleum industries\r\nFor water, gas and sewerage purposes\r\nLow-pressure hot water heating pipes\r\nWater wells and pipes for various automotive and industrial applications\r\n ', 'not for water lines because it rusts easily, while galvanized pipe is the safer pipe to use in water lines, but it cannot be used to convey gas. Read more: Difference Between Black and Galvanized Pipe | Difference Between http://www.differencebetween.net/miscellaneous/difference-between-black-and-galvanized-pipe', 'Philipines'),
(5, 'BI Pipes1575880331', 'BI Pipes SCH 40 Pipe-1', 'B.I. & G.I. Pipes', 'uploads/product_1575880331Steel-pipes-2_1.jpg', 900, 1000, 700, 'made of steel that has not been galvanized. Its name comes from the scaly, dark-colored iron oxide coating on its surface that prevents rust. Black steel pipes are cut and threaded to fit.', 'Used for pipes in oil and petroleum industries\r\nFor water, gas and sewerage purposes\r\nLow-pressure hot water heating pipes\r\nWater wells and pipes for various automotive and industrial applications', 'cheaper than galvanized pipe because of the zinc that is added to galvanized pipe. Read more: Difference Between Black and Galvanized Pipe | Difference Between http://www.differencebetween.net/miscellaneous/difference-between-black-and-galvanized-pipe', 'Philipines'),
(6, 'Plain Bars1575881719', 'Plain Bars ', 'B.I. & G.I. Pipes', 'uploads/product_1575881719plain-round-bar-1.jpg', 500, 600, 2000, 'Plain round rebar (reinforcing bar) supplied by InfraBuild Construction Solutions (formerly LIBERTY OneSteel Reinforcing) is commonly used to separate mesh in concrete slabs and is used in a range of commercial and infrastructure applications', 'Reinforced concrete piers', 'Plain Round Bars are frequently utilised for separation of mesh within concrete slabs. Applications include industrial, infrastructure and commercial uses', 'Philipines'),
(7, 'Plain Bars1575881823', 'Plain Bars R6', 'Plain & Deformed Bar', 'uploads/product_1575881823plain-round-bar-1.jpg', 500, 600, 2000, 'Plain round rebar (reinforcing bar) supplied by InfraBuild Construction Solutions (formerly LIBERTY OneSteel Reinforcing) is commonly used to separate mesh in concrete slabs and is used in a range of commercial and infrastructure applications. Plain round rebar has a range of applications from reinforced concrete piers', 'bored piles and footings to walls, beams, columns, slabs and precast products. Round rebar from InfraBuild Construction Solutions is a Class N (normal ductility) bar and is available in 250 MPa for diameters 10â€“36mm', 'Plain Round Bars are basically threadless circular rods in fixed lengths.', 'Philipines'),
(8, 'Plain Bars1575881958', 'Plain Bars R10', 'Plain & Deformed Bar', 'uploads/product_1575881958Normal-Ductility-Class-Plain-Round-Bars.jpg', 600, 700, 2000, 'Plain round rebar (reinforcing bar) supplied by InfraBuild Construction Solutions (formerly LIBERTY OneSteel Reinforcing) is commonly used to separate mesh in concrete slabs and is used in a range of commercial and infrastructure applications', ' Plain round rebar has a range of applications from reinforced concrete piers, bored piles and footings to walls, beams, columns, slabs and precast products. Round rebar from InfraBuild Construction Solutions is a Class N (normal ductility) bar and is available in 250 MPa for diameters 10â€“36mm.', 'Common uses include footings, beams, walls, partition panels, ties and lifting, slabs, columns, precast products and concrete piers.', 'Philipines'),
(9, 'Deformed Bars1575882123', 'Deformed Bars 10mm', 'Plain & Deformed Bar', 'uploads/product_1575882123high-tensile-deformed-steel-bar-500x500.jpg', 500, 600, 2000, 'A common steel bar, and is commonly used as a tensioning device in reinforced concrete and reinforced masonry structures holding the concrete in compression. A deformed bar is usually formed from carbon steel and is given ridges for better mechanical anchoring reinforced concrete. Steel construction has so many advantages: the strength to weight ratio is excellent, metals join easily, efficient shapes are available, etc. With those advantages, though, come some challenges that are best solved by a good understanding of how the metals actually perform in a structure. For larger buildings, metals are a key element of the structural system. Steel beams and columns, steel joists, steel studs, aluminum framing are a few examples of metal construction.', 'A deformed bar is a type of concrete rebar with a rough surface for better cement or mortar bonding. It is a steel bar with surface projections to improve the bond strength when used in reinforced concrete.', 'Stainless steel can be used as an alternative reinforcing steel bar with carbon steel reinforcement.', 'Philipines'),
(10, 'Deformed Bars1575882322', 'Deformed Bars 12mm', 'Plain & Deformed Bar', 'uploads/product_1575882322mild-steel-tmt-bars-1558587035-1214323.png', 600, 700, 1000, 'A common steel bar, and is commonly used as a tensioning device in reinforced concrete and reinforced masonry structures holding the concrete in compression. A deformed bar is usually formed from carbon steel and is given ridges for better mechanical anchoring reinforced concrete. Steel construction has so many advantages: the strength to weight ratio is excellent, metals join easily, efficient shapes are available, etc. With those advantages, though, come some challenges that are best solved by a good understanding of how the metals actually perform in a structure. For larger buildings, metals are a key element of the structural system. Steel beams and columns, steel joists, steel studs, aluminum framing are a few examples of metal construction.', 'A deformed bar is a type of concrete rebar with a rough surface for better cement or mortar bonding. It is a steel bar with surface projections to improve the bond strength when used in reinforced concrete.', 'Expanded metal or wire mesh reinforcement is another good product for concrete', 'Philipines'),
(11, 'Deformed Bars1575882423', 'Deformed Bars 14mm', 'Plain & Deformed Bar', 'uploads/product_1575882423rebarstock.jpg', 750, 899, 500, 'A common steel bar, and is commonly used as a tensioning device in reinforced concrete and reinforced masonry structures holding the concrete in compression. A deformed bar is usually formed from carbon steel and is given ridges for better mechanical anchoring reinforced concrete. Steel construction has so many advantages: the strength to weight ratio is excellent, metals join easily, efficient shapes are available, etc. With those advantages, though, come some challenges that are best solved by a good understanding of how the metals actually perform in a structure. For larger buildings, metals are a key element of the structural system. Steel beams and columns, steel joists, steel studs, aluminum framing are a few examples of metal construction.', 'A deformed bar is a type of concrete rebar with a rough surface for better cement or mortar bonding. It is a steel bar with surface projections to improve the bond strength when used in reinforced concrete.', 'Using stainless steel reinforcing bars will not create galvanic corrosion, and it can be a cost-effective solution in areas subject to corrosion problems', 'Philipines'),
(13, 'Plain GI sheets1575887823', 'Plain GI sheets 4 x 8', 'Plain G.I. Sheets', 'uploads/product_1575887823aluminum-sheet-250x250.jpg', 1500, 1800, 1000, 'Plain metal sheet', 'Sheet metal is metal formed by an industrial process into thin, flat pieces. It is one of the fundamental forms used in metalworking and it can be cut and bent into a variety of shapes.', 'Sheet metal is a strong material, where the plasticity makes it easily workable. Steel is most often used to fabricate complementary parts for steel roof structures; however, sheet metal has many more applications.', 'Philipines'),
(15, 'Handles & Hinges1575888401', 'Handles & Hinges 2\" x 1 1/8\" ', 'Handles & Hinges', 'uploads/product_157588840151PvvCHue3L._SL1000_.jpg', 400, 700, 100, 'Handles & Hinges', 'Handles and Hinges is a leading supplier of Iron Mongary furniture fittings and hardware for furniture manufactures as well as kitchen fittings and accessories', 'Wooden Doors, Metal Doors', 'Philipines'),
(16, 'Handles & Hinges1575888519', 'Handles & Hinges 2.5\" x 1 3/8\" ', 'Handles & Hinges', 'uploads/product_157588851961pnz6BJvfL._SX466_.jpg', 500, 750, 300, 'Entrance door pull handles', 'Handles and Hinges is a leading supplier of Iron Mongary furniture fittings and hardware for furniture manufactures as well as kitchen fittings and accessories', 'Industrial aluminum profile connector 4040 black folding locking metal door hinge with adjustable handle ', 'Philipines'),
(17, 'Handles & Hinges1575888630', 'Handles & Hinges 3\" x 2\" ', 'Handles & Hinges', 'uploads/product_1575888630dale-internal-door-handle-pack-handles-hinges-latch-pbx2020-p192-182_image.jpg', 600, 750, 200, 'Entrance door pull handles', 'Specialists in all types of door handles, locks, security locks, butt hinges, protection hinges, pivot hinges', 'Reliable quality aluminium window casement handle pivot hinge ', 'Philipines'),
(18, 'Handles & Hinges1575888789', 'Handles & Hinges 3\" x 2.5\" ', 'Handles & Hinges', 'uploads/product_1575888789door_handle_set_for_bathroom_doors_with_lock_and_polished_stainless_steel_door_handles.jpg', 750, 800, 200, 'Entrance door pull handles,  black pivots', 'Alex steel suply is a leading supplier of Iron Mongary furniture fittings and hardware for furniture manufactures as well as kitchen fittings and accessories.', 'Hinged Recessed Handle Zinc die casting PL002-2', 'Philipines'),
(19, 'Handles & Hinges1575888888', 'Handles & Hinges 4\" x 3\" ', 'Handles & Hinges', 'uploads/product_1575888888s-l300.jpg', 600, 700, 100, 'Entrance door pull handles', 'Specialists in all types of door handles, locks, security locks, butt hinges, protection hinges, pivot hinges and a wide range of cabinet handles & knobs', 'Superior quality bullet metal hook door hinge handle ', 'Philipines'),
(20, 'Square & Section Bars1575889263', 'Square & Section Bars 1-1/2\"', 'Square & Section Bars', 'uploads/product_1575889263Galvanised-Steel-Bars-and-Tubes-Q345.jpg', 800, 900, 2000, '8mm Mild Steel Square Bar (0.51 Kg/m)', 'Mild Steel Square Bars are popular in the building and fencing industry and can be used for a wide range of applications. With its high strength and versatility it can be drilled, welded and cut to suit your requirements.', 'Square bars, also known as square steel, squares and square metal bar are a multipurpose steel section mainly used for manufacturing and repairs.', 'Philipines'),
(21, 'Square & Section Bars1575889386', 'Square & Section Bars 1-14/\"', 'Square & Section Bars', 'uploads/product_1575889386mild-steel-square-bar-500x500.jpg', 600, 700, 2000, '10mm Mild Steel Square Bar (0.79 Kg/m)', 'Mild Steel Square Bars are popular in the building and fencing industry and can be used for a wide range of applications. With its high strength and versatility it can be drilled, welded and cut to suit your requirements', '. With a higher content of alloy than many of our other steel grades', 'Philipines'),
(22, 'Square & Section Bars1575889507', 'Square & Section Bars 1\", 1/2\"', 'Square & Section Bars', 'uploads/product_1575889507MS-Hollow-Section-Square-Pipe-Black-Galvanized.jpg', 650, 750, 2000, '12mm Mild Steel Square Bar (1.13 Kg/m)', 'Mild Steel Square Bars are popular in the building and fencing industry and can be used for a wide range of applications. With its high strength and versatility it can be drilled, welded and cut to suit your requirements.', 'processor and supplier of speciality grade stainless steel that is also available in corrosion resistant grades', 'Philipines'),
(23, 'Square & Section Bars1575889646', 'Square & Section Bars 3/4', 'Square & Section Bars', 'uploads/product_1575889646ms-rectangular-tube-250x250.jpg', 600, 700, 2000, '16mm Mild Steel Square Bar (2.01 Kg/m)', 'Mild Steel Square Bars are popular in the building and fencing industry and can be used for a wide range of applications. With its high strength and versatility it can be drilled, welded and cut to suit your requirements', 'stainless products, mild steel and bright steel for other project requirements.', 'Philipines'),
(24, 'Square & Section Bars1575889732', 'Square & Section Bars 5/8\"', 'Square & Section Bars', 'uploads/product_1575889732s-l300.jpg', 580, 700, 2000, '22mm Mild Steel Square Bar (3.80 Kg/m)', 'Mild Steel Square Bars are popular in the building and fencing industry and can be used for a wide range of applications. With its high strength and versatility it can be drilled, welded and cut to suit your requirements', 'stainless products, mild steel and bright steel for other project requirements.', 'Philipines'),
(27, 'Roofing1575892098', 'Roofing 0.12-2mm', 'Roofing', 'uploads/product_157589209871ZLbcyMwRL._SL1500_.jpg', 400, 500, 2000, 'Steel Room', '\r\nCover roofs of structures with shingles, slate, asphalt, aluminum, wood, or related materials. May spray roofs, sidings, and walls with material to bind, seal, insulate, or soundproof sections of structures. ', 'sustainable metal roof and wall panels are durable and provide a long life expectancy with both energy efficiency and economical benefits.', 'Philipines'),
(28, 'Roofing1575892565', 'Roofing 0.12-0.65mm', 'Roofing', 'uploads/product_1575892565corrugated-steel-roof-sheet-10ft.jpg', 450, 550, 2000, 'The large area of a roof repels a lot of water, which must be directed in some suitable way, so that it does not cause damage or inconvenience. ', 'Large metal roof', ' roofing and wall panels is that they positively impact building performance by providing longevity, durability and sustainability.', 'Philippines'),
(29, 'Roof1575892651', 'Roof 0.16MM-1.2MM ', 'Roofing', 'uploads/product_1575892651Jianglin-Steel-Corporation15-e1543300551870.jpg', 600, 700, 2000, 'The large area of a roof repels a lot of water, which must be directed in some suitable way, so that it does not cause damage or inconvenience. ', 'Metal roof', ' roofing panels provide energy efficiency throughout and beyond its composition.', 'Philipines'),
(30, 'Roof1575892897', 'Roof', 'Roofing', 'uploads/product_1575892897s-l400.jpg', 700, 800, 2000, 'Classic rib steel roof panel', 'Built for beauty, durability and value, Metal Sales Classic Rib is a hard-working roof and wall panel that performs in all seasons', '', 'Philipines'),
(31, 'Flat & angle Bars1575893231', 'Flat & angle Bars', 'Flat & Angle Bars', 'uploads/product_1575893231213dIUrTpZL_4.jpg', 800, 900, 2000, 'adad', 'sdsad', '', 'asdasd'),
(32, 'Roof1575894302', 'Roof', 'Roofing', 'uploads/product_1575894302thermal-conductivity-of-galvanized-steel-sheet-aluzinc.jpg_350x350.jpg', 900, 1000, 1000, 'Roof tile for prefab house', 'Thermal Conductivity Of Galvanized Steel Sheet / Aluzinc Roofing Sheet / Roof Tile For The Prefab House /workshop /storage ', '', 'Phillipines'),
(33, 'Tubulars1575894842', 'Tubulars', 'B.I. & G.I. Tubulars', 'uploads/product_1575894842302-stainless-steel-rectangular-tube-500x500_2.jpg', 800, 900, 2000, 'Stainless steel rectangular tubes', 'Shyam Metals & Alloys - offering 6 M 302 Stainless Steel Rectangular Tube, Size: 3/4 Inch at Rs 200/kilogram', '', 'Phlipines'),
(34, 'Welding Rod1575953727', 'Welding Rod', 'Welding Rod', 'uploads/product_1575953727ms-welding-rod-500x500.png', 300, 400, 2000, 'EC1  is a kind of cast iron electrode with low-carbon steel core wire and strong graphitization type coating.The weld can become gray cast iron when cooled slowly.The crack-resistance i...', 'For some key casting structures receiving stress,impact,etc.,this kind of electrodes are not suitable.', '', 'Philipines'),
(35, 'Chanels1575957198', 'Chanels', 'Channels', 'uploads/product_1575957198e.jpg', 300, 400, 1000, 'mild steel chanels,stainless steel chanel', '20 x 10mm (0.86 Kg/m) Stainless Steel Channel (Web: 3.0mm / Flange 3.5mm)\r\n', '', 'phillipines'),
(38, 'Chanels1575960783', 'Chanels', 'Channels', 'uploads/product_1575960783q.jpg', 300, 400, 1000, 'Stainless C Type steel purlin', '30 x 15mm (1.37 Kg/m) Stainless Steel Channel (Web 3.0mm / Flange 3.5mm)', '', 'philpines'),
(39, 'Chanels1575960965', 'Chanels', 'Channels', 'uploads/product_1575960965r.jpg', 200, 300, 2320, 'peforated steel chanel', 'A peforated steel chanel is usually formed from a metal sheet, folded over into an open channel shape with inwards-curving lips to provide additional stiffness and as a location to mount interconnecting components', '', 'Philipines'),
(40, 'Chanels1575961108', 'Chanels', 'Channels', 'uploads/product_1575961108t.jpg', 400, 500, 2090, 'Rolled Channel Steel Bar', ' Rolled Channel Steel Bar\r\n U channel steel bar can be supplied in different grades.Dimension: 51*25*3mm-305*80*13mmBar Thickness: 3mm-13mmSteel Bar Length: 6m,9m, 12m', '', 'Philipines'),
(41, 'Chanels1575961225', 'Chanels', 'Channels', 'uploads/product_1575961225w.jpg', 450, 550, 1000, 'Stainless C Type steel purlin', '30 x 15mm (1.37 Kg/m) Stainless Steel Channel (Web 3.0mm / Flange 3.5mm)\r\ne = definition: C chanel Tempered Flange', '', 'Philipines'),
(42, 'Welding Rod1575962980', 'Welding Rod', 'Welding Rod', 'uploads/product_1575962980s-l400.jpg', 300, 400, 1000, 'The 7018 welding rod', 'By looking at the classification, we already know that the 7018 welding rod is an all-position rod which produces weld beads which can withstand 70,000 pounds of stress per square inch', '', 'Philipines'),
(43, 'Welding Rod1575963081', 'Welding Rod', 'Welding Rod', 'uploads/product_15759630812-250x250.jpg', 350, 450, 2000, 'The 6013 welding rod', 'Once again, the 6013 is an all-position welding rod, but this time you can see that the welds will be able to withstand 60,000 pounds of stress per square inch', '', 'Phiipines'),
(44, 'Welding Rod1575963164', 'Welding Rod', 'Welding Rod', 'uploads/product_1575963164welding-rods.jpg', 400, 500, 2000, 'The 6011 welding rod', 'The 6011 and 6010 welding rods are very similar, so many people wonder what the advantages are of using one over the other', '', 'Philipines'),
(45, 'Welding Rod1575963317', 'Welding Rod', 'Welding Rod', 'uploads/product_1575963317213.jpg', 300, 400, 1000, 'The 6010 welding rod', 'As weâ€™ve already established, itâ€™s easy to make comparisons on how similar the 6010 electrode is to the 6011. The 6010 is just as strong, and it can also be used in all positions.', '', 'Philipines'),
(47, 'Plain GI sheets1575964803', 'Plain GI sheets', 'Plain G.I. Sheets', 'uploads/product_1575964803gi-plain-sheet-500x500.jpg', 1000, 1200, 1000, 'Plain Sheets', 'Material Dimensions Inches: 48â€³ x 96â€³ or 48â€³ x 120â€³', '', 'Philipines'),
(48, 'Plain GI sheets1575964947', 'Plain GI sheets', 'Plain G.I. Sheets', 'uploads/product_1575964947image.png', 1200, 1500, 1000, 'Dimensions: Custom GageMetal', 'Material Dimensions mm: Any size up to 1220 x 3048', '', 'Philipines'),
(49, 'Plain GI sheets1575965033', 'Plain GI sheets', 'Plain G.I. Sheets', 'uploads/product_1575965033plain-aluminium-sheet-500x500.jpg', 1700, 2000, 1000, 'plain aluminum GI sheets', 'Material Dimensions Inches: Any size up to 48â€³ x 120â€³', '', 'Philipines'),
(50, 'Plain GI sheets1575965190', 'Plain GI sheets', 'Plain G.I. Sheets', 'uploads/product_1575965190plain-aluminum-sheet-metal.png', 1600, 1700, 1000, 'Plain aluminum-metal Sheets', 'Material Dimensions mm: Any size up to 1220 x 3048', '', 'Philipines'),
(51, 'Flat & Angle Bars1575966285', 'Flat & Angle Bars', 'Flat & Angle Bars', 'uploads/product_1575966285213dIUrTpZL_4.jpg', 600, 700, 1000, 'wqeqw', 'qweqwe', '', 'qweqwe'),
(52, 'FlAT & ANGLE BARS1575967025', 'FlAT & ANGLE BARS', 'Flat & Angle Bars', 'uploads/product_1575967025engineering-flat_2.jpg', 123, 123, 123, 'QWEQWEQWE', 'QWEWQEQWE', '', 'ASDASDAD'),
(53, 'ASDASD1575967152', 'ASDASD', 'Flat & Angle Bars', 'uploads/product_1575967152flat-bars_5.jpg', 123213, 123123, 12323, 'ASASD', 'ASAD', '', 'ADASASD'),
(54, 'SAD1575967557', 'SAD', 'Flat & Angle Bars', 'uploads/product_1575967557flat-bars_5.jpg', 800, 700, 123, 'QWEQWE', 'QWEQWE', '', 'QWEQWE'),
(55, 'FlAT & ANGLE BARS1575968229', 'FlAT & ANGLE BARS', 'Flat & Angle Bars', 'uploads/product_1575968229flat-bars_5.jpg', 123, 123, 123, 'asds', 'wwqeqwe', '', 'asdadsasd'),
(56, 'Mild Steel Plates1575970043', 'Mild Steel Plates', 'Mild Steel Plates', 'uploads/product_1575970043B0863762299.jpg.png', 2000, 2500, 1000, 'Mild Steel plates', 'Standard: ASTM', '', 'Philipines'),
(57, 'Mild Steel Plates1575970670', 'Mild Steel Plates', 'Mild Steel Plates', 'uploads/product_1575970670HTB17eBAhrwrBKNjSZPcq6xpapXaZ.jpg', 1700, 1800, 1000, 'Mild Steel Plates', 'Standard: ASTM, GB, JIS, ABS, NV\r\nGrade: SS400, Q235, Q345, A36, AB/A-D, NVA-B\r\nThickness: 6~40mm\r\nWidth: 1500~2500mm\r\nLength: 6250~14000mm\r\nMOQ: 60 tons', '', 'Philipines'),
(58, 'Mild Steel Plates1575970838', 'Mild Steel Plates', 'Mild Steel Plates', 'uploads/product_1575970838Mild-Steel-Chequered-Plate-MS-Checker-Plate-1106.jpg', 2000, 2500, 1000, 'Diamond Steel Plates', 'Computer Generated Steel Plates. Suitable for Seamless Background', '', 'Philipines'),
(59, 'Mild Steel Plates1575981136', 'Mild Steel Plates', 'B.I. & G.I. Tubulars', 'uploads/product_1575981136gi-pipe-size-galvanized-hollow-section-square_3.jpg', 2, 1, 1, 'hgfjg', 'hgfhgf', '', 'gf'),
(60, 'Test Product1575981786', 'Test Product', 'B.I. & G.I. Tubulars', 'uploads/product_1575981786bigitubular.png', 2300, 2500, 500, 'asdadsd', 'asdasd', 'asdasd', 'asdasd'),
(61, 'Flat and Anglasdkjas1575982899', 'Flat and Anglasdkjas', 'Flat & Angle Bars', 'uploads/product_1575982899flatbar.jpg', 2333, 2222, 222, 'sdbh', 'sjhdjhd', '', 'hjhjh');

-- --------------------------------------------------------

--
-- Table structure for table `salestbl`
--

CREATE TABLE `salestbl` (
  `salesid` int(11) NOT NULL,
  `accesscode` varchar(100) NOT NULL,
  `cartid` int(11) NOT NULL,
  `accountid` int(11) NOT NULL,
  `salesdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salestbl`
--

INSERT INTO `salestbl` (`salesid`, `accesscode`, `cartid`, `accountid`, `salesdate`) VALUES
(2, '1432019-12-182', 26, 2, '2019-12-18'),
(3, '1432019-12-182', 27, 3, '2019-12-18'),
(4, '123', 28, 2, '2019-12-18'),
(5, '123', 143, 2, '2019-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `wishlisttbl`
--

CREATE TABLE `wishlisttbl` (
  `ID` int(11) NOT NULL,
  `myaccountID` varchar(100) NOT NULL,
  `productID` varchar(100) NOT NULL,
  `sellingprice` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carttbl`
--
ALTER TABLE `carttbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `commenttbl`
--
ALTER TABLE `commenttbl`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `deliverytbl`
--
ALTER TABLE `deliverytbl`
  ADD PRIMARY KEY (`deliveryid`);

--
-- Indexes for table `feedbacktbl`
--
ALTER TABLE `feedbacktbl`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `invoicetbl`
--
ALTER TABLE `invoicetbl`
  ADD PRIMARY KEY (`invoiceno`);

--
-- Indexes for table `liketbl`
--
ALTER TABLE `liketbl`
  ADD PRIMARY KEY (`likeid`);

--
-- Indexes for table `messagingtbl`
--
ALTER TABLE `messagingtbl`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `myaccountbalances`
--
ALTER TABLE `myaccountbalances`
  ADD PRIMARY KEY (`balanceid`);

--
-- Indexes for table `myaccountpurchases`
--
ALTER TABLE `myaccountpurchases`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `myaccounttbl`
--
ALTER TABLE `myaccounttbl`
  ADD PRIMARY KEY (`accountid`);

--
-- Indexes for table `notificationstbl`
--
ALTER TABLE `notificationstbl`
  ADD PRIMARY KEY (`notificationsid`);

--
-- Indexes for table `productstbl`
--
ALTER TABLE `productstbl`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `salestbl`
--
ALTER TABLE `salestbl`
  ADD PRIMARY KEY (`salesid`);

--
-- Indexes for table `wishlisttbl`
--
ALTER TABLE `wishlisttbl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carttbl`
--
ALTER TABLE `carttbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `commenttbl`
--
ALTER TABLE `commenttbl`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `deliverytbl`
--
ALTER TABLE `deliverytbl`
  MODIFY `deliveryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedbacktbl`
--
ALTER TABLE `feedbacktbl`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `invoicetbl`
--
ALTER TABLE `invoicetbl`
  MODIFY `invoiceno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `liketbl`
--
ALTER TABLE `liketbl`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `messagingtbl`
--
ALTER TABLE `messagingtbl`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `myaccountbalances`
--
ALTER TABLE `myaccountbalances`
  MODIFY `balanceid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `myaccountpurchases`
--
ALTER TABLE `myaccountpurchases`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `myaccounttbl`
--
ALTER TABLE `myaccounttbl`
  MODIFY `accountid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notificationstbl`
--
ALTER TABLE `notificationstbl`
  MODIFY `notificationsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `productstbl`
--
ALTER TABLE `productstbl`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `salestbl`
--
ALTER TABLE `salestbl`
  MODIFY `salesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `wishlisttbl`
--
ALTER TABLE `wishlisttbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
