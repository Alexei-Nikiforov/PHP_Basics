CREATE TABLE `user_roles` (
  `id_user_role` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_user_role`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1

INSERT INTO `` (`id_user_role`,`id_user`,`role`) VALUES (1,1,'admin');