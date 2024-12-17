CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) DEFAULT NULL,
  `user_lastname` varchar(45) DEFAULT NULL,
  `user_birthday_timestamp` int(11) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8


INSERT INTO `` (`id_user`,`user_name`,`user_lastname`,`user_birthday_timestamp`,`login`,`password_hash`) VALUES (0,'admin','admin',794102400,'admin','$2y$10$HEqfaNEwXFqgK2/Wo.4/XusxNX334vVurve/2qE7p4e.hFUS/z7pC', 'admin');
INSERT INTO `` (`id_user`,`user_name`,`user_lastname`,`user_birthday_timestamp`,`login`,`password_hash`) VALUES (1,'Петр','Петров',794102400,NULL,NULL,NULL);
INSERT INTO `` (`id_user`,`user_name`,`user_lastname`,`user_birthday_timestamp`,`login`,`password_hash`) VALUES (2,'Роман','Романов',828316800,NULL,NULL,NULL);
INSERT INTO `` (`id_user`,`user_name`,`user_lastname`,`user_birthday_timestamp`,`login`,`password_hash`) VALUES (3,'Антон','Антонов',628316800,NULL,NULL,NULL);
INSERT INTO `` (`id_user`,`user_name`,`user_lastname`,`user_birthday_timestamp`,`login`,`password_hash`) VALUES (4,'Test','Test',594102400,NULL,NULL,NULL);
INSERT INTO `` (`id_user`,`user_name`,`user_lastname`,`user_birthday_timestamp`,`login`,`password_hash`) VALUES (9,'Aaaaa','Aaaaa',1728604800,NULL,NULL,NULL);