-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 06, 2018 at 03:16 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maabprc`
--

-- --------------------------------------------------------

--
-- Table structure for table `maablist`
--

DROP TABLE IF EXISTS `maablist`;
CREATE TABLE IF NOT EXISTS `maablist` (
  `orNumber` varchar(25) DEFAULT NULL,
  `IDNumber` varchar(255) DEFAULT NULL,
  `memType` enum('Classic','Premier Bronze','Premier Silver','Premier Gold','Premier Platinum','Senior','Senior Plus') DEFAULT NULL,
  `chapter` varchar(25) DEFAULT 'BAGUIO CITY',
  `lastName` varchar(50) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `middleName` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contactNumber` varchar(25) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` enum('M','F') DEFAULT NULL,
  `status` enum('Single','Married','Widowed','Separated','Divorced') DEFAULT NULL,
  `validDate` date DEFAULT NULL,
  `expiryDate` date DEFAULT NULL,
  `remarks` enum('active','inactive') DEFAULT 'active',
  UNIQUE KEY `IDNumber_2` (`IDNumber`),
  KEY `IDNumber` (`IDNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maablist`
--

INSERT INTO `maablist` (`orNumber`, `IDNumber`, `memType`, `chapter`, `lastName`, `firstName`, `middleName`, `address`, `contactNumber`, `birthday`, `age`, `gender`, `status`, `validDate`, `expiryDate`, `remarks`) VALUES
('4241004', 'PB0758108', 'Premier Bronze', 'BAGUIO CITY', 'LIAGAO', 'ZALDY', 'D', 'NEW TANGLAG TABUK', '446-1832', '1985-03-28', 32, 'M', 'Single', '2017-07-03', '2018-07-03', 'active'),
('4241001', 'PB0758097', 'Premier Bronze', 'BAGUIO CITY', 'DOMINGO', 'GRACE ANGELICA', 'O', '', '9176640264', '1990-06-05', 27, 'F', 'Married', '2017-07-03', '2018-07-03', 'active'),
('4241001', 'PB0758098', 'Premier Bronze', 'BAGUIO CITY', 'DOMINGO', 'JOCELYN', 'O', '', '9176640264', '1964-06-24', 53, 'F', 'Married', '2017-07-03', '2018-07-03', 'active'),
('4241007', 'PB0758109', 'Premier Bronze', 'BAGUIO CITY', 'GARAS', 'RODOLFO', 'C', '', '9091645505', '1957-04-10', 60, 'M', 'Single', '2017-07-04', '2018-07-04', 'active'),
('4241024', 'PB0758110', 'Premier Bronze', 'BAGUIO CITY', 'LICTAG', 'CHARLOTTE', 'P', '', '9296916480', '1994-01-28', 23, 'F', 'Single', '2017-07-04', '2018-07-04', 'active'),
('4241024', 'PB0758111', 'Premier Bronze', 'BAGUIO CITY', 'BENIGNO', 'ZEPPARAH', 'L', '', '9260461101', '1990-02-19', 27, 'F', 'Single', '2017-07-04', '2018-07-04', 'active'),
('4241025', 'PB0758112', 'Premier Bronze', 'BAGUIO CITY', 'MAYO', 'CRISMAR', 'B', '', '9101959424', '1995-06-14', 22, 'M', 'Single', '2017-07-04', '2018-07-04', 'active'),
('4241032', '2239612', 'Classic', 'BAGUIO CITY', 'DELA CRUZ', 'DANIEL', 'G', 'SAN LUIS VILLAGE MAGNOLIA ST.', '9395450441', '1999-09-14', 17, 'M', 'Single', '2017-07-04', '2018-07-04', 'active'),
('4241032', '2239613', 'Classic', 'BAGUIO CITY', 'ADUCA', 'WILLIAM JR.', 'O', '292 PUROK 6 UPPER PINGET BC', '9101967374', '1999-10-03', 17, 'M', 'Single', '2017-07-04', '2018-07-04', 'active'),
('4241032', '2239614', 'Classic', 'BAGUIO CITY', 'DELA CRUZ', 'MARION', 'G', '72 LOWER BROOKSIDE', '9103867631', '1998-03-08', 19, 'M', 'Single', '2017-07-04', '2018-07-04', 'active'),
('4241032', '2239615', 'Classic', 'BAGUIO CITY', 'DEMOT', 'CLIFFORD', 'B', '63 LOWER BALACBAC STO. TOMAS BC.', '9101136520', '2000-05-16', 17, 'M', 'Single', '2017-07-04', '2018-07-04', 'active'),
('4241032', '2239616', 'Classic', 'BAGUIO CITY', 'DOLLAGO', 'MHELBERT', 'G', '37 EAST QURINO HILL BC.', '', '1999-11-08', 17, 'M', 'Single', '2017-07-04', '2018-07-04', 'active'),
('4241032', '2239617', 'Classic', 'BAGUIO CITY', 'BAGAWI', 'HOMER', 'B', '127 PUROK 14 LOWER  CYPRESS IRISAN', '9073214307', '1997-08-09', 19, 'M', 'Single', '2017-07-04', '2018-07-04', 'active'),
('4241032', '2239618', 'Classic', 'BAGUIO CITY', 'AQUINO', 'MELCHIZEDEK', 'B', '60 BENGAO CENTRAL BAKAKENG BC.', '9069093891', '1999-04-27', 18, 'M', 'Single', '2017-07-04', '2018-07-04', 'active'),
('2390676', '5152869', 'Classic', 'BAGUIO CITY', 'GALVEZ', 'GENEBEL', 'GALVEZ', '#111 PINEWOOD ST. BAKAKENG CENTRAL CRYSTAL CAVE', '9159011106', '1999-09-25', 18, 'F', 'Single', '2018-07-02', '2019-07-02', 'active'),
('2390676', '5152870', 'Classic', 'BAGUIO CITY', 'CADITLE', 'JOYCELYN', 'HEJES', 'P-5 #139 GABRIELA SILANG BAGUIO CITY', '9168981241', '1999-10-10', 18, 'F', 'Single', '2018-07-02', '2019-07-02', 'active'),
('2390676', '5152871', 'Classic', 'BAGUIO CITY', 'PERALTA', 'CLAUDINE KATE', 'BAGGAS', '10 FAIMA ST. BAYAN PARK AURORA HILL', '9268939570', '2000-02-29', 18, 'F', 'Single', '2018-07-02', '2019-07-02', 'active'),
('2390676', '5152872', 'Classic', 'BAGUIO CITY', 'TECHNEY', 'PRESENTACION JOY ', 'RAMOS', '70 PALISPIS M. HIGHWAY BAGUIO CITY', '9177167179', '1999-11-07', 18, 'F', 'Single', '2018-07-02', '2019-07-02', 'active'),
('2390676', '5152873', 'Classic', 'BAGUIO CITY', 'OREDINA', 'ERROL', 'OCAMPO', '436 CAMP ALLEN BAGUIO CITY', '9174188694', '1999-08-16', 18, 'M', 'Single', '2018-07-02', '2019-07-02', 'active'),
('2390676', '5152874', 'Classic', 'BAGUIO CITY', 'GATUDAN', 'MARILLYN', 'MAGULAO', '148 SAN VICENTE BAGUIO CITY', '9104264542', '1999-10-14', 18, 'F', 'Single', '2018-07-02', '2019-07-02', 'active'),
('2390676', '5152875', 'Classic', 'BAGUIO CITY', 'DOMIGAYAV', 'EVA JOY', 'SAWAD', '#41 PUROK 2 PINSAI PICOT BAGUIO CITY', '9770222753', '2000-05-04', 18, 'F', 'Single', '2018-07-02', '2019-07-02', 'active'),
('2390663', 'PB2193725', 'Premier Bronze', 'BAGUIO CITY', 'TORRES', 'LILY FRY', 'BAUDING', '#59 KM 3 ASIN RD. B.C ', '9989763238', '1980-03-02', 38, 'F', 'Married', '2018-07-02', '2019-07-02', 'active'),
('2390663', 'PB2193726', 'Premier Bronze', 'BAGUIO CITY', 'BASUNGIT', 'MARLENE', 'TAWAO', 'PUROK 14 U.P. CYPRESS IRISAN', '9209650801', '1971-08-04', 46, 'F', 'Married', '2018-07-02', '2019-07-02', 'active'),
('2390663', 'PB2193727', 'Premier Bronze', 'BAGUIO CITY', 'BASUNGIT', 'DANOY', 'CASUCAS', 'PUROK 14 U.P. CYPRESS IRISAN', '9184000540', '1975-07-01', 43, 'M', 'Married', '2018-07-02', '2019-07-02', 'active'),
('2390675', 'PS0398144', 'Premier Silver', 'BAGUIO CITY', 'GALLERO', 'ROGIE', 'LUMANOG', 'OAIG PAYA CANDON CITY T.S.', '9073900010', '1989-11-22', 28, 'M', 'Married', '2018-07-02', '2019-07-02', 'active'),
('2390663', '5152876', 'Classic', 'BAGUIO CITY', 'KILLIP', 'TRISHA', 'CORTOP', '# 43 PRK 5 HOBARO ST. EXT. B.C.', '998747482', '2008-12-26', 9, 'F', 'Single', '2018-07-03', '2019-07-03', 'active'),
('2390663', '5152877', 'Classic', 'BAGUIO CITY', 'ABELLERA', 'NATHANIEL RIEGN', 'SALAZAR', '# 63 PRK 9 BATENBEN', '9073188826', '2004-05-12', 14, 'M', 'Single', '2018-07-04', '2019-07-04', 'active'),
('2390663', '5152878', 'Classic', 'BAGUIO CITY', 'LOZENRO', 'CLARK JUSTINE', 'AGWAYAWAY', '# 001 QUIRINO HILL', '9300589736', '2006-06-20', 12, 'F', 'Single', '2018-07-05', '2019-07-05', 'active'),
('2390663', '5152879', 'Classic', 'BAGUIO CITY', 'SARMIENTO', 'ERIC JONAS', 'DELA CRUZ', 'BATO NAGUILIAN, LA UNION', '9277840455', '2004-07-12', 13, 'M', 'Single', '2018-07-06', '2019-07-06', 'active'),
('2390663', '5152880', 'Classic', 'BAGUIO CITY', 'GADIAN', 'RODLY KENT', 'FERNANDEZ', '#5 IRISAN BAGUIO CITY', '9974535120', '2001-12-13', 16, 'M', 'Single', '2018-07-07', '2019-07-07', 'active'),
('2390663', '5152881', 'Classic', 'BAGUIO CITY', 'GADIAN', 'jERICO', 'FERNANDEZ', '#5 IRISAN BAGUIO CITY', '9974535120', '2001-12-13', 17, 'M', 'Single', '2018-07-08', '2019-07-08', 'active'),
('2390663', '5152882', 'Classic', 'BAGUIO CITY', 'BABAEL', 'LENIEL JAKE', 'RACHO', 'LAMTANG LA TRINIDAD', '9774885521', '2004-10-29', 13, 'M', 'Single', '2018-07-09', '2019-07-09', 'active'),
('2390663', '5152883', 'Classic', 'BAGUIO CITY', 'LORENZO', 'AARON JOHN', 'AGWAYAWAY', '#001 NAGUILIAN RD. BAGUIO CITY', '9475260700', '2002-06-04', 16, 'M', 'Single', '2018-07-10', '2019-07-10', 'active'),
('2390663', '5152884', 'Classic', 'BAGUIO CITY', 'PAYUMO', 'GLEN IVAN', 'DINO', 'PUROK 1 IRISAN BAGUIO CITY', '9123844572', '2007-08-27', 10, 'M', 'Single', '2018-07-11', '2019-07-11', 'active'),
('4241986', 'PS0346900', 'Premier Silver', 'BAGUIO CITY', 'SACULLES', 'RAMIL', 'L', 'BAGUIO CITY POLICE OFFICE', '9177909092', '1969-03-10', 48, 'M', 'Married', '2017-08-10', '2018-08-10', 'active'),
('4241996', 'PS0346901', 'Premier Silver', 'BAGUIO CITY', 'SACULLES', 'KIRSTINE LAURA', 'A', 'BAGUIO CITY POLICE OFFICE', '9369254743', '1988-12-19', 18, 'F', 'Single', '2017-08-10', '2018-08-10', 'active'),
('4241995', 'PS0346902', 'Premier Silver', 'BAGUIO CITY', 'SACULLES', 'KORINIA LOUSIE', 'A', 'BAGUIO CITY POLICE OFFICE', '9279634535', '1996-06-19', 21, 'F', 'Single', '2017-08-10', '2018-08-10', 'active'),
('4241994', 'PS0346903', 'Premier Silver', 'BAGUIO CITY', 'SACULLES', 'JANET', 'A', 'BAGUIO CITY POLICE OFFICE', '9568868302', '1968-11-08', 79, 'F', 'Married', '2017-08-10', '2018-08-10', 'active'),
('4241993', 'PS0346904', 'Premier Silver', 'BAGUIO CITY', 'JUNIO', 'MISCHELLE', 'R', 'BAGUIO CITY POLICE OFFICE', '9496779748', '1977-02-07', 40, 'F', 'Married', '2017-08-10', '2018-08-10', 'active'),
('4241992', 'PS0346905', 'Premier Silver', 'BAGUIO CITY', 'BENTER', 'MICHELLE', 'D', 'BAGUIO CITY POLICE OFFICE', '9293245915', '1980-02-20', 37, 'F', 'Single', '2017-08-10', '2018-08-10', 'active'),
('4241991', 'PS0346906', 'Premier Silver', 'BAGUIO CITY', 'ISICAN', 'PAUL ALLAIN', 'R', 'BAGUIO CITY POLICE OFFICE', '9985330724', '1989-10-27', 27, 'M', 'Married', '2017-08-10', '2018-08-10', 'active'),
('2384093', 'PS0346907', 'Premier Silver', 'BAGUIO CITY', 'DATUL', 'RAQUEL', 'O', '190 LOWER ENGINEER\'S HILL, BAGUIO CITY', '9069161721', '1995-04-21', 22, 'F', 'Single', '2017-08-15', '2018-08-15', 'active'),
('2384093', 'PS0346908', 'Premier Silver', 'BAGUIO CITY', 'PAGDILAO', 'MELODY', 'L', '64 VICTORIA VILLAGE, QUEZON HILL, BAGUIO CITY', '9268852611', '1994-02-08', 23, 'F', 'Single', '2017-08-15', '2018-08-15', 'active'),
('2384014', 'PS03416912', 'Premier Silver', 'BAGUIO CITY', 'PERMALINO', 'LAARNI MARIE', 'L', '39 PUROK 5 GIBRALTAR BGUIO CITY', '9052085138', '1972-05-01', 45, 'F', 'Married', '2017-08-11', '2018-08-11', 'active'),
('2384013', 'PS03416913', 'Premier Silver', 'BAGUIO CITY', 'RUNAS', 'JERMAINE JACKSON', 'H', '118 HOUSING PODLACION, KM 6 LA TRINIDAD ', '9958419553', '1982-03-22', 35, 'M', 'Married', '2017-08-11', '2018-08-11', 'active'),
('2384015', 'PS03416914', 'Premier Silver', 'BAGUIO CITY', 'BANQUITE', 'DENVER', 'A', '', '9959679800', '1985-12-25', 31, 'M', 'Single', '2017-08-11', '2018-08-11', 'active'),
('', 'PB0758002', 'Premier Bronze', 'BAGUIO CITY', 'BACBAC', 'GERRY', 'B', '', '9127500814', '1963-11-01', 53, 'M', 'Married', '2017-06-16', '2018-06-16', 'inactive'),
('', 'PS0346874', 'Premier Bronze', 'BAGUIO CITY', 'VICTORIA', 'ZENAIDA', 'L', '', '9569102586', '1955-05-16', 62, 'F', 'Married', '2017-06-16', '2018-06-16', 'inactive'),
('', '2239408', 'Classic', 'BAGUIO CITY', 'PACITENG', 'JEFF IVAN', 'C', '', '9219804483', '2006-10-21', 10, 'M', 'Single', '2017-06-16', '2018-06-16', 'inactive'),
('4240580', 'PB0758016', 'Premier Bronze', 'BAGUIO CITY', 'GONZALES', 'ROLIN', 'J', '', '9129458024', '1998-06-07', 19, 'M', 'Single', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196488', 'Premier Gold', 'BAGUIO CITY', 'BASIL', 'ISAAC ANTHONY', 'BALEGAN', 'OWWA - CAR, BAGUIO CITY', '9493019072', '1968-02-25', 49, 'M', 'Married', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196487', 'Premier Gold', 'BAGUIO CITY', 'PONCIANO', 'DINA', 'CATCATAN', 'OWWA - CAR, BAGUIO CITY', '09952836507 / 09289166601', '1963-04-08', 53, 'F', 'Single', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196486', 'Premier Gold', 'BAGUIO CITY', 'MARQUEZ', 'WINDELIN', 'DELA CRUZ', 'OWWA - CAR, BAGUIO CITY', '9497844444', '1969-03-26', 48, 'F', 'Married', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196483', 'Premier Gold', 'BAGUIO CITY', 'ESTOCAPIO', 'LOURDES', 'IJAN', 'OWWA - CAR, BAGUIO CITY', '9167100991', '1970-08-07', 46, 'F', 'Married', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196481', 'Premier Gold', 'BAGUIO CITY', 'UNGSON', 'MARGIE', 'FERRER', 'OWWA - CAR, BAGUIO CITY', '9208512165', '1984-10-22', 32, 'F', 'Married', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196480', 'Premier Gold', 'BAGUIO CITY', 'FELIX', 'LIEZL', 'TOLEDO', 'OWWA - CAR, BAGUIO CITY', '9184578544', '1975-07-08', 41, 'F', 'Married', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196478', 'Premier Gold', 'BAGUIO CITY', 'PASIGON', 'DENVER', 'SOLANO', 'OWWA - CAR, BAGUIO CITY', '9196257103', '1983-12-27', 33, 'M', 'Single', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196467', 'Premier Gold', 'BAGUIO CITY', 'CACERES', 'REMEDIOS', 'CANNU', 'OWWA - CAR, BAGUIO CITY', '9296114232', '1987-09-23', 29, 'F', 'Single', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196464', 'Premier Gold', 'BAGUIO CITY', 'DUMANGENG', 'FLORDELIZA', 'CALACAL', 'OWWA - CAR, BAGUIO CITY', '9276438290', '1982-10-05', 34, 'F', 'Married', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196459', 'Premier Gold', 'BAGUIO CITY', 'SALES', 'FLORIBEL', 'CAJA', 'OWWA - CAR, BAGUIO CITY', '9396418112', '1980-05-26', 36, 'F', 'Married', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196460', 'Premier Gold', 'BAGUIO CITY', 'WACDAGAN', 'JONA', 'MALONGGA', 'OWWA - CAR, BAGUIO CITY', '9261165703', '1992-10-30', 24, 'F', 'Single', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196465', 'Premier Gold', 'BAGUIO CITY', 'BANGAAN', 'EDNA', 'DIOSAN', 'OWWA - CAR, BAGUIO CITY', '9051509583', '1981-08-18', 35, 'F', 'Married', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196466', 'Premier Gold', 'BAGUIO CITY', 'SAURO', 'ARIES', 'ALFANTA', 'OWWA - CAR, BAGUIO CITY', '9071151808', '1991-02-22', 26, 'M', 'Single', '2017-06-16', '2018-06-16', 'inactive'),
('4240584', 'PG0196475', 'Premier Gold', 'BAGUIO CITY', 'TIMATIM', 'RIZA JADE', 'COLLANTES', 'OWWA - CAR, BAGUIO CITY', '9502265829', '1994-02-13', 23, 'F', 'Single', '2017-06-16', '2018-06-16', 'inactive');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;