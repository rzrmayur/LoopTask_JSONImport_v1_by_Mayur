CREATE TABLE `mytable` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `about` varchar(562) NOT NULL,
  `organizer` varchar(18) NOT NULL,
  `timestamp` varchar(19) NOT NULL,
  `email` varchar(29) NOT NULL,
  `address` varchar(71) NOT NULL,
  `latitude` decimal(10,6) NOT NULL,
  `longitude` decimal(11,6) NOT NULL,
  `tags0` varchar(12) NOT NULL,
  `tags1` varchar(13) NOT NULL,
  `tags2` varchar(13) NOT NULL,
  `tags3` varchar(13) NOT NULL,
  `tags4` varchar(13) NOT NULL,
  `tags5` varchar(13) NOT NULL,
  `tags6` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `mytable`
  ADD PRIMARY KEY (`id`);