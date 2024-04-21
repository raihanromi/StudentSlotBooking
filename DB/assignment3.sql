

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `bookslot` (
  `time` varchar(100) NOT NULL,
  `seats_remaining` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookslot`
--

INSERT INTO `bookslot` (`time`, `seats_remaining`) VALUES
('Tuesday 14:00-16:00', 7),
('Thurday 11:00-13:00', 8),
('Friday 10:00-12:00', 8),
('Monday 15:00-17:00', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `slot` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sid`, `name`, `firstname`, `pass`, `email`, `user_type`, `slot`) VALUES
('19301055', 'raihan', 'raihan', '1234', 'raihan@gmail.com', 'student', 'Tuesday 14:00-16:00')
COMMIT;

