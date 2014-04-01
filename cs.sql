

CREATE DATABASE IF NOT EXISTS `cs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cs`;



CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` char(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` char(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `password` char(40) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `stu_id` (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
