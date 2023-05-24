

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--

CREATE TABLE IF NOT EXISTS `candidate` (
  `CandidateID` int(11) NOT NULL AUTO_INCREMENT,
  `election_id` int(11) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  `Position` varchar(200) NOT NULL,
  PRIMARY KEY (`CandidateID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=190 ;

--
INSERT INTO `candidate`(election_id,FirstName,LastName,Photo,Position) VALUES
(1, 'soufi', 'amrani', 'upload/soufi.jpeg','Governor') ,
(1, 'sami', 'agouram', 'upload/sami.jpeg','Governor') ,
(2, 'omar', 'farouq', 'upload/omar.jpeg','Vice-Governor') ,
(2, 'basma', 'arnaoui', 'upload/basma.jpeg','Vice-Governor') ;
--




--

CREATE TABLE IF NOT EXISTS `programs` (
  `program_id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `program_title` varchar(50) NOT NULL,
  `program_description` varchar(20) NOT NULL,
  `program_video` varchar(20) NOT NULL,
  `program_affiche` varchar(20) NOT NULL,
  PRIMARY KEY (`program_id`)
)  ;





CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_admin` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
)ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;  ;


INSERT INTO `users`(username,email,password,is_admin) VALUES
('soufi', 'soufi@gmail.com', '123', 'admin') ;
--



CREATE TABLE IF NOT EXISTS `votes` (
  `vote_id` int(11) NOT NULL AUTO_INCREMENT,
  `election_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  PRIMARY KEY (`vote_id`)
) ;





CREATE TABLE IF NOT EXISTS `election` (
  `election_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `start_date` varchar(200) NOT NULL,
  `end_date` varchar(200) NOT NULL,
  PRIMARY KEY (`election_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

