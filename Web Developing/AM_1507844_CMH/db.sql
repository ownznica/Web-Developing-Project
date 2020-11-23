
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(4) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `imgpath` varchar(255) DEFAULT NULL,
  `synopsis` varchar(255) DEFAULT NULL,
  `tname` char(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `year`, `genre`, `imgpath`, `synopsis`, `tname`) VALUES
(1, 'Annihilation', '2018', 'M', 'image/anni.jpg', 'A biologist signs up for a dangerous, secret expedition into a mysterious zone where the laws of nature don\'t apply.', 'A' ),
(2, 'All the Money in the World', '2017', 'M', 'image/money.jpg', 'The story of the kidnapping of 16-year-old John Paul Getty III and the desperate attempt by his devoted mother to convince his billionaire grandfather Jean Paul Getty to pay the ransom.', 'A' ),
(3, 'Justice League', '2017', 'F', 'image/justice.jpg', 'Fueled by his restored faith in humanity and inspired by Superman\'s selfless act, Bruce Wayne enlists the help of his newfound ally, Diana Prince, to face an even greater enemy.', 'J' ),
(4, 'Suicide Squad', '2016', 'F', 'image/suicide.jpg', 'A secret government agency recruits some of the most dangerous incarcerated super-villains to form a defensive task force. Their first mission: save the world from the apocalypse.', 'S' ),
(5, 'Isle of Dogs', '2018', 'A', 'image/dog.jpg', 'Set in Japan, Isle of Dogs follows a boy\'s odyssey in search of his lost dog.', 'I' ),
(6, 'Zootopia', '2016', 'A', 'image/zoo.jpg', 'In a city of anthropomorphic animals, a rookie bunny cop and a cynical con artist fox must work together to uncover a conspiracy.', 'Z' ),
(7, 'A Quiet Place', '2018', 'H', 'image/quiet.jpg', 'A family is forced to live in silence while hiding from creatures that hunt by sound.', 'A' ),
(8, 'The Shape of Water', '2017', 'H', 'image/water.jpg', 'At a top secret research facility in the 1960s, a lonely janitor forms a unique relationship with an amphibious creature that is being held in captivity.', 'T' );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
