CREATE TABLE `kurs` (
  `namn` varchar(255) NOT NULL,
  `antal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kurs` (`namn`, `antal`) VALUES
('sam', 0),
('musik', 0),
('el', 0),
('teknik', 0);