-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 04:25 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `password`) VALUES
(1, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `graveyard`
--

CREATE TABLE `graveyard` (
  `id` int(11) NOT NULL,
  `Type_of_Record` varchar(1) NOT NULL,
  `Graveyard` varchar(35) NOT NULL,
  `Firstname` varchar(35) NOT NULL,
  `Lastname` varchar(35) NOT NULL,
  `Maiden_Name` varchar(35) NOT NULL,
  `Date_d` int(2) NOT NULL,
  `Date_m` varchar(3) NOT NULL,
  `Date_Year` int(4) NOT NULL,
  `Age` int(3) UNSIGNED NOT NULL,
  `Inscription` varchar(750) NOT NULL,
  `Headstone_Number` int(3) UNSIGNED NOT NULL,
  `Other` varchar(150) NOT NULL,
  `Image_Url` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graveyard`
--

INSERT INTO `graveyard` (`id`, `Type_of_Record`, `Graveyard`, `Firstname`, `Lastname`, `Maiden_Name`, `Date_d`, `Date_m`, `Date_Year`, `Age`, `Inscription`, `Headstone_Number`, `Other`, `Image_Url`) VALUES
(1, 'G', 'St Carthach\'s', 'Margret', 'Barry', 'Cantwell', 20, 'Dec', 1858, 73, 'xxxxxxxxxxxxxxxxxxx', 110, 'N/A', '<img src='),
(2, 'G', 'St. Carthach\'s', 'Eleanor', 'Bracken', 'Peel', 1, 'Feb', 1761, 21, 'Erected by Denis Bracken to his mother Eleanor Bracken. Died August 6th 1791. Aged 70 years.  Also his father James Bracken, died November 9th 1794. Aged 74 years.', 30, 'N/A', ''),
(3, 'G', 'St. Carthach\'s', 'Michael', 'Bracken', '', 12, 'Nov', 1845, 0, '', 101, 'N/A', ''),
(4, 'G', 'St Carthach\'s', 'Michael', 'Brien', '', 27, 'Jun', 1834, 18, '', 89, 'xx', 'N/A'),
(5, 'G', 'St. Carthach\'s', 'Edward', 'Cantwell', '', 26, 'May', 1831, 81, 'Edward Cantwell who departed this life May 26th 1831. Aged 81 years. Also Catherine his beloved wife who departed this life June 16th 1842. Aged 82 years. This tribute of filial duty and affectionate love was erected by Most Revd John Cantwell D.D. Bishop of Meath. Blessed are the dead who die in the Lord Revelation book…. ', 109, 'N/A', ''),
(6, 'G', 'St. Carthach\'s', 'Catherine', 'Cantwell', '', 16, 'Jun', 1842, 82, 'Edward Cantwell who departed this life May 26th 1831. Aged 81 years. Also Catherine his beloved wife who departed this life June 16th 1842. Aged 82 years. This tribute of filial duty and affectionate love was erected by Most Revd John Cantwell D.D. Bishop of Meath. Blessed are the dead who die in the Lord Revelation book…. ', 109, 'N/A', ''),
(7, 'G', 'St. Carthach\'s', 'John', 'Cantwell', '', 17, 'Dec', 1816, 26, 'John Cantwell December 17th 1816. Aged 26 years. Erected by his father Patrick Cantwell', 104, 'n/a', ''),
(8, 'G', 'St. Carthach\'s', 'Mary', 'Cantwell', '', 1, 'Nov', 1804, 19, 'Mary Cantwell who departed this life November 1st, 1804. Aged 19 years. Erected by her father Edward Cantwell.', 108, 'Parents possibly Edward and Mary Cantwell, Grave Ref 109????', ''),
(9, 'G', 'St. Carthach\'s', 'Catherine', 'Cantwell', '', 6, 'Nov', 1851, 40, 'Erected by Peter Cantwell in memory of his wife Catherine Cantwell alias Hughes who died 6th November 1851. Aged 40 years.', 107, 'N/A', ''),
(10, 'G', 'St Carthach\'s', 'Thomas', 'Cantwell', '', 9, 'Nov', 1817, 60, 'Timothy Cantwell died 16th October 1885. Aged 70 years. Also his sister Mrs. Judith Finerty who died 16th February 1862. Aged 67 years. Erected by his son Thomas F. Cantwell Dublin.', 70, 'another', ''),
(11, 'G', 'St. Carthach\'s', 'Judith', 'Finerty', '', 16, 'Feb', 1862, 67, 'Timothy Cantwell died 16th October 1885. Aged 70 years. Also his sister Mrs. Judith Finerty who died 16th February 1862. Aged 67 years. Erected by his son Thomas F. Cantwell Dublin.', 73, 'N/A', ''),
(12, 'G', 'St Carthach\'s', 'Maria', 'Cantwell', '', 24, 'Jul', 1859, 99, 'xxxxxxxxxxxxxxxx', 200, 'xx', 'N/A'),
(13, 'G', 'St Carthach\'s', 'Sam', 'Brack', '', 18, 'Aug', 1826, 25, 'xxxxxxxxxx', 201, 'xx', ''),
(14, 'G', 'St Carthach\'s', 'Peter', 'Codron', '', 8, 'Feb', 1894, 70, 'Erected by his Neice Alice Quinn', 31, 'N/A', ''),
(15, 'G', 'St Carthach\'s', 'Peter', '', 'N/A', 0, '0', 0, 84, 'Erected by John Connily his son. ', 15, 'This slab is decorated with the tools of a blacksmith as follows: the anvil, sledge,tongs and ', ''),
(16, 'G', 'St Carthach\'s', 'Anne', 'Connolly', 'N/A', 0, '', 1859, 0, 'Anne Connolly and her beloved son James Connolly,erected by Andrew her only surviving son and brother. Dated 1859', 17, 'N/A', ''),
(17, 'G', 'St Carthach\'s', 'Bryen', 'Connolly', 'N/A', 0, '', 1751, 68, 'Pray for ye soul of Bryan Connolly who departed ys life January 1st 1751 aged 68. Also his wife Gyles Molloy who departed this life September 25th 1741 aged 60. Erected by their son Thadee Connolly .', 6, 'Headstone 6A', ''),
(18, 'G', 'St Carthach\'s', 'Gyles', 'Molloy', '', 25, 'Sep', 1741, 60, 'Pray for ye soul of Bryan Connolly who departed ys life January 1st 1751 aged 68. Also his wife Gyles Molloy who departed this life September 25th 1741 aged 60. Erected by their son Thadee Connolly (6A).', 6, '6A', ''),
(19, 'G', 'St Carthach\'s', 'Thadee', 'Connolly', 'N/A', 0, '', 0, 0, 'Pray for ye soul of Bryan Connolly who departed ys life January 1st 1751 aged 68. Also his wife Gyles Molloy who departed this life September 25th 1741 aged 60. Erected by their son Thadee Connolly (6A).', 6, '6A', ''),
(20, 'G', 'St Carthach\'s', 'John J.', 'Connoly', 'N/A', 25, 'Apr', 1834, 57, 'John Connoly, April 26th 1834. Aged 57. Erected by his wife Catherine Connoly ', 13, 'N/A', '');

-- --------------------------------------------------------

--
-- Table structure for table `parish`
--

CREATE TABLE `parish` (
  `id` int(11) NOT NULL,
  `Type_of_Record` varchar(20) NOT NULL,
  `Event_D` int(2) NOT NULL,
  `Event_M` varchar(3) NOT NULL,
  `Event_Year` int(4) NOT NULL,
  `Firstname` varchar(35) NOT NULL,
  `Groom_Firstname` varchar(35) NOT NULL,
  `Family_Name` varchar(35) NOT NULL,
  `Bride_Firstname` varchar(35) NOT NULL,
  `Maiden_Name` varchar(35) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Fathers_First_Name` varchar(35) NOT NULL,
  `Fathers_Surname` varchar(35) NOT NULL,
  `Mothers_First_Name` varchar(35) NOT NULL,
  `Mothers_Maiden_Name` varchar(35) NOT NULL,
  `Witness1_Firstname` varchar(35) NOT NULL,
  `Witness1_Surname` varchar(35) NOT NULL,
  `Witness2_Firstname` varchar(35) NOT NULL,
  `Witness2_Surname` varchar(35) NOT NULL,
  `Reference` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parish`
--

INSERT INTO `parish` (`id`, `Type_of_Record`, `Event_D`, `Event_M`, `Event_Year`, `Firstname`, `Groom_Firstname`, `Family_Name`, `Bride_Firstname`, `Maiden_Name`, `Sex`, `Fathers_First_Name`, `Fathers_Surname`, `Mothers_First_Name`, `Mothers_Maiden_Name`, `Witness1_Firstname`, `Witness1_Surname`, `Witness2_Firstname`, `Witness2_Surname`, `Reference`) VALUES
(1, 'Baptismal', 1, 'Feb', 1925, 'Peter', '', 'Bracken', '', '', 'Male', 'Peter', 'Bracken', 'Ellen', 'McCabe', 'John', 'McCabe', 'Mrgaret', 'McCabe', ''),
(2, 'Baptismal', 25, 'Mar', 1925, 'Peter', '', 'Dicks', '', '', 'Male', 'Patrick', 'Dicks', 'Honor', 'Connelly', '-', '-', '-', '-', ''),
(3, 'Baptismal', 1, 'Apr', 1925, 'Ellen', '', 'Cody', '', '', 'Female', 'John', 'Cody', 'Judith', 'Carroll', 'Michael', 'Stones', 'Margeret', 'McNamara', ''),
(4, 'Baptismal', 22, 'Apr', 1925, 'Ellen', '', 'Swords', '', '', 'Female', 'Patrick', 'Swords', 'Bridget', 'Harrington', 'James', 'Molloy', 'Bridget', 'Egan', ''),
(5, 'Baptismal', 30, 'Jun', 1925, 'Bridget', '', 'Guinan', '', '', 'Female', 'Hugh', 'Guinan', 'Bridget', 'McAuley', 'John', 'McAuley', 'Margeret', 'McAuley', ''),
(6, 'Marriage', 17, 'May', 1849, '', 'Daniel', 'Molloy', 'Bridget', 'Connolly', '', '', '', '', '', '-', 'Barr', 'Rose', 'Connolly', ''),
(7, 'Marriage', 12, 'Sep', 1849, '', 'John', 'Daly', 'Margaret', 'Connor', '', '', '', '', '', 'Anthony', 'Bryan', 'Judith', 'Murphey', ''),
(8, 'Marriage', 12, 'Sep', 1849, '', 'Henry', 'Doolan', 'Anne', 'Flynn', '', '', '', '', '', 'John', 'Mooney', 'Hannah', 'Molloy', ''),
(9, 'Marriage', 4, 'Feb', 1851, '', 'Patrick', 'Kenny', 'Anne', 'Flannagan', '', '', '', '', '', 'Edward', 'Dunne', 'Maria', 'G*****am', ''),
(10, 'Marriage', 19, 'Nov', 1851, '', 'James', 'Heffernan', 'Maria', 'Kelly', '', '', '', '', '', 'John', 'Heffernan', 'Ellen', '-', ''),
(11, 'Marriage', 8, 'Jun', 1848, '', 'William', 'Grey', 'Anne', 'Carroll', '', '', '', '', '', 'Christopher', 'Carroll', 'Eliza', 'Carroll', ''),
(12, 'Marriage', 5, 'Oct', 1848, '', 'John', 'Canturk', 'Maria', 'Flynn', '', '', '', '', '', 'Malachy', 'Ryan', 'Maria', 'Flynn', ''),
(13, 'Baptismal', 14, 'Apr', 1845, 'John', '', 'Lyons', '', '', 'Male', 'Edward', 'Lyons', 'Mary', 'Gormocan', 'Joseph', 'Gormocan', 'Lucy', 'Condron', ''),
(14, 'Baptismal', 15, 'Apr', 1845, 'Mary', '', 'Molloy', '', '', 'Female', 'Thomas', 'Molloy', 'Catherine', 'Byrne', 'Patrick', 'Cody', 'Mary', 'Byrne', ''),
(15, 'Baptismal', 15, 'Apr', 1845, 'Mary', '', 'Craven', '', '', 'Female', 'William', 'Craven', 'Margeret', 'Rigney', 'Martin', 'Craven', 'Mary', 'Rigney', ''),
(16, 'Baptismal', 18, 'Apr', 1845, 'Thomas', '', 'Finlan', '', '', 'Male', 'John', 'Finlan', 'Catherine', 'Murphey', 'Thomas', 'Carroll', 'Ann', 'Hewson', ''),
(17, 'Baptismal', 26, 'Apr', 1845, 'Bernard', '', 'Colgan', '', '', 'Male', 'Brian', 'Colgan', 'Sally', 'Rogers', 'Charles', 'Burke', 'Ellen', 'Gavin', ''),
(18, 'Baptismal', 27, 'Apr', 1845, 'James', '', 'Carroll', '', '', 'Male', 'James', 'Carroll', 'Honor', 'Gorman', 'Bernard', 'Doyle', 'Marcella', 'Rosney', ''),
(19, 'Baptismal', 30, 'Apr', 1845, 'Mary', '', 'Conway', '', '', 'Female', 'John', 'Conway', 'Mary', 'Daly', 'James', 'Conway', 'Bridget', 'Daly', ''),
(20, 'Baptismal', 4, 'May', 1845, 'Emillia', '', 'Duffy', '', '', 'Female', 'William', 'Duffy', 'Isabell', 'Sheppard', 'William', 'Wheelehan', 'Ann', 'Duffy', '');

-- --------------------------------------------------------

--
-- Table structure for table `parish_baptism`
--

CREATE TABLE `parish_baptism` (
  `id` int(11) NOT NULL,
  `Type_of_Record` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Firstname` varchar(35) NOT NULL,
  `Family_Name` varchar(35) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Fathers_First_Name` varchar(35) NOT NULL,
  `Fathers_Surname` varchar(35) NOT NULL,
  `Mothers_First_Name` varchar(35) NOT NULL,
  `Mothers_Maiden_Name` varchar(35) NOT NULL,
  `Witness1_Firstname` varchar(35) NOT NULL,
  `Witness1_Surname` varchar(35) NOT NULL,
  `Witness2_Firstname` varchar(35) NOT NULL,
  `Witness2_Surname` varchar(35) NOT NULL,
  `Reference` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parish_baptism`
--

INSERT INTO `parish_baptism` (`id`, `Type_of_Record`, `Date`, `Firstname`, `Family_Name`, `Sex`, `Fathers_First_Name`, `Fathers_Surname`, `Mothers_First_Name`, `Mothers_Maiden_Name`, `Witness1_Firstname`, `Witness1_Surname`, `Witness2_Firstname`, `Witness2_Surname`, `Reference`) VALUES
(1, 'Baptismal', '1845-04-05', 'Peter', 'Bracken', 'Male', 'Peter', 'Bracken', 'Ellen', 'McCabe', 'John', 'McCabe', 'Mrgaret', 'McCabe', '');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Date_of_Entry` date DEFAULT NULL,
  `Registration_Number` int(4) NOT NULL,
  `Lastname` varchar(35) NOT NULL,
  `Firstname` varchar(35) NOT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Religion` varchar(35) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Fathers_Occupation` varchar(35) DEFAULT NULL,
  `Previous_School` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `School`, `Date_of_Entry`, `Registration_Number`, `Lastname`, `Firstname`, `Date_of_Birth`, `Religion`, `Address`, `Fathers_Occupation`, `Previous_School`) VALUES
(3, 'The Island Parish Boys National School', '1924-05-19', 101, 'Daly', 'William', '1919-12-24', 'R.C', 'Clonshanny', 'Labourer', 'N/A'),
(4, 'The Island Parish Boys National School', '1924-05-26', 102, 'Kinahan', 'Joseph', '1921-08-06', 'R.C', 'Deerpark', 'Farmer', 'N/A'),
(5, 'The Island Parish Boys National School', '1924-05-22', 103, 'Vaugh', 'James', '1920-07-18', 'C.E Eng', 'Ballybrumcullin', 'Farmer', 'N/A'),
(6, 'The Island Parish Boys National School', '1924-06-01', 104, 'Minnock', 'David', '1918-06-24', 'R.C.', 'Clonshanny', 'Farmer', 'N/A'),
(7, 'The Island Parish Boys National School', '0000-00-00', 105, 'Cahill', 'John', '0000-00-00', 'E.C (English Church?)', 'Ballybrumcullin', 'Farmer', ''),
(8, 'The Island Parish Boys National School', '1924-10-01', 106, 'Shanley', 'Thomas', '1919-03-14', 'R.C', 'Clonshanny', 'Labourer', 'N/A'),
(9, 'The Island Parish Boys National School', '1925-03-01', 107, 'Phelen', 'John J.', '1920-07-19', 'R.C', 'Deerpark', 'Farmer', 'N/A'),
(10, 'The Island Parish Boys National School', '1925-09-01', 108, 'Grennan', 'Patrick', '1919-08-28', 'R.C.', 'Clonshanny', 'labourer', 'N/A'),
(11, 'The Island Parish Boys National School', '1925-09-01', 109, 'Minnock', 'James', '1920-09-11', 'R.C.', 'Clonshanny', 'Labourer', 'N/A'),
(12, 'The Island Parish Boys National School', '1926-04-01', 110, 'Conroy', 'William', '1920-03-14', 'R.C.', 'Deerpark', 'Farmer', 'N/A'),
(13, 'The Island Parish Boys National School', '1926-05-01', 113, 'Phelan', 'Patrick', '1921-02-19', 'R.C.', 'Deerpark', 'Farmer', 'N/A'),
(14, 'The Island Parish Boys National School', '1926-06-01', 114, 'Boland', 'John', '1921-04-21', 'R.C.', 'The Rushes', 'Farmer', 'N /A'),
(15, 'The Island Parish Boys National School', '0000-00-00', 115, 'Guinan', 'James', '1922-02-20', 'R.C.', 'Ballycumber', 'Tailor', 'N/A'),
(16, 'The Island Parish Boys National School', '1927-05-01', 116, 'Conroy', 'Michael', '1921-04-01', 'R.C.', 'Deerpark', 'Farmer', 'N/A'),
(17, 'The Island Parish Boys National School', '1927-07-11', 117, 'Browne', 'Thomas', '1921-08-03', 'R.C.', 'Derries', 'Labourer', 'N/A'),
(18, 'The Island Parish Boys National School', '1928-02-27', 118, 'Rielly', 'John', '1921-06-05', 'R.C.', 'Deerpark', 'Labourer', 'N/A'),
(19, 'The Island Parish Boys National School', '1928-02-27', 119, 'Boland', 'Daniel', '1922-01-18', 'R.C.', 'Bawn', 'Farmer', 'N/A'),
(20, 'The Island Parish Boys National School', '1926-04-01', 111, 'Guinan', 'Thomas', '1921-06-21', 'R.C.', 'Deerpark', 'Labourer', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `users_lat_lon`
--

CREATE TABLE `users_lat_lon` (
  `id` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lon` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_lat_lon`
--

INSERT INTO `users_lat_lon` (`id`, `lat`, `lon`) VALUES
(1, 53.279800, -7.615900),
(2, 40.741356, -73.998024),
(3, -33.865143, 151.209900),
(4, -33.865143, 151.209900),
(5, 53.269970, -6.224923),
(6, 53.269970, -6.224923),
(7, 53.269970, -6.224923),
(8, 53.269970, -6.224923),
(9, 53.269970, -6.224923),
(10, 53.262142, -6.213511),
(11, -33.865143, 151.209900),
(12, -33.865143, 151.209900),
(13, -34.865143, 151.209900),
(14, -34.865143, 151.209900),
(15, -34.865143, 151.209900),
(16, -34.865143, 151.209900),
(17, -34.865143, 151.209900),
(18, -34.865143, 151.209900),
(19, -34.865143, 151.209900),
(20, -34.865143, 151.209900),
(21, -34.865143, 151.209900),
(22, -34.865143, 151.209900),
(23, -34.865143, 151.209900),
(24, -34.865143, 151.209900),
(25, -34.865143, 151.209900),
(26, -34.865143, 151.209900),
(27, -34.865143, 151.209900),
(28, -34.865143, 151.209900),
(29, -34.865143, 151.209900),
(30, -34.865143, 151.209900),
(31, -34.865143, 151.209900),
(32, -34.865143, 151.209900),
(33, -34.865143, 151.209900),
(34, -34.865143, 151.209900),
(35, 53.269970, -6.224923),
(36, 33.075340, -97.110741),
(37, 56.462017, -2.970721),
(38, 53.262203, -6.213355),
(39, 53.262180, -6.213348),
(40, 53.269970, -6.224923),
(41, 53.262203, -6.213328),
(42, 53.262177, -6.213357),
(43, 53.262196, -6.213327),
(44, 53.262196, -6.213344),
(45, 53.269970, -6.224923),
(46, 53.269970, -6.224923),
(47, 53.269970, -6.224923),
(48, 53.262157, -6.213334),
(49, 53.262154, -6.213333),
(50, 53.269970, -6.224923),
(51, 53.262161, -6.213468),
(52, 53.269970, -6.224923),
(53, 53.269970, -6.224923),
(54, 53.269970, -6.224923),
(55, 53.269970, -6.224923),
(56, 53.269970, -6.224923),
(57, 53.262157, -6.213381),
(58, 53.262135, -6.213368),
(59, 53.269970, -6.224923),
(60, 53.269970, -6.224923),
(61, 53.269970, -6.224923),
(62, 53.269970, -6.224923),
(63, 51.501366, -0.141890),
(64, 53.269970, -6.224923),
(65, 53.745670, -0.336741),
(66, 37.807999, -122.417740),
(67, 53.269970, -6.224923),
(68, 53.269970, -6.224923),
(69, 58.936600, -2.743876),
(70, 19.143183, 72.825935),
(71, 53.269970, -6.224923),
(72, 53.269970, -6.224923),
(73, 36.731606, -4.381576),
(74, 28.331430, -81.594215),
(75, 53.269970, -6.224923),
(76, 53.269970, -6.224923),
(77, 53.269970, -6.224923),
(78, 53.262165, -6.213294),
(79, 53.262169, -6.213343);

-- --------------------------------------------------------

--
-- Table structure for table `user_stories`
--

CREATE TABLE `user_stories` (
  `id` int(11) NOT NULL,
  `summary` text NOT NULL,
  `story` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_stories`
--

INSERT INTO `user_stories` (`id`, `summary`, `story`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'This is a test summary', 'This is a test story. This is a test story. v This is a test story. This is a test story. This is a test story. This is a test story. This is a test story. This is a test story. This is a test story.'),
(3, 'Test summary three', 'Another test story to test DB connectivity.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `graveyard`
--
ALTER TABLE `graveyard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parish`
--
ALTER TABLE `parish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parish_baptism`
--
ALTER TABLE `parish_baptism`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_lat_lon`
--
ALTER TABLE `users_lat_lon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_stories`
--
ALTER TABLE `user_stories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `graveyard`
--
ALTER TABLE `graveyard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `parish`
--
ALTER TABLE `parish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `parish_baptism`
--
ALTER TABLE `parish_baptism`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users_lat_lon`
--
ALTER TABLE `users_lat_lon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `user_stories`
--
ALTER TABLE `user_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
