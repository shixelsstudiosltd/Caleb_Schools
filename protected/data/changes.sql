--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `activkey`, `create_at`, `lastvisit_at`, `superuser`, `status`, `password_strategy`, `salt`, `requires_new_password`, `login_attempts`, `login_time`, `login_ip`, `activation_key`, `validation_key`, `create_time`, `update_time`, `reset_token`) VALUES
(1, 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229', 'webmaster@example.com', '', '2014-06-01 04:18:23', '2014-08-21 04:58:23', 1, 1, 'ahash', '1d905200f3b07f5f632cd315acfc68fd5a9bab7e', NULL, NULL, 29, '::1', NULL, 'ce197d8fb2234d2818104e460f68c0e3', NULL, NULL, '40e9aaad8997df9ca519dfd4286595a03cdc128e'),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', '2014-06-01 04:18:23', '2014-08-19 05:32:40', 0, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'student', 'cd73502828457d15655bbd7a63fb0bc8', 'student@ncat.edu', '8db7b804f13985b069d523c408bbdb17', '2014-08-21 07:43:20', '2014-08-21 04:56:46', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'teacher', '8d788385431273d11e8b43bb78f3aa41', 'teacher@cba.sch.ng', 'c129ba1d307d58e2505cacb7d7008489', '2014-08-21 07:48:21', '0000-00-00 00:00:00', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'guardian', 'd85362faae75ddbec33d4870191c72e9', 'guardian@gmail.com', 'f95351c1a40822ea65c6ccc4d5eb513e', '2014-08-21 07:52:15', '0000-00-00 00:00:00', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
