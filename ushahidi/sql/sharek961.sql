--
-- Table structure for table `email_reg`
--

CREATE TABLE IF NOT EXISTS `user_signup` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `email` varchar(64) UNIQUE,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;