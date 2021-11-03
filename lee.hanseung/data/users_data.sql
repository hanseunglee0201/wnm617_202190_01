CREATE TABLE IF NOT EXISTS `track_users` (
`id` INT NULL,
`name` VARCHAR(MAX) NULL,
`username` VARCHAR(MAX) NULL,
`email` VARCHAR(MAX) NULL,
`password` VARCHAR(MAX) NULL,
`img` VARCHAR(MAX) NULL,
`date_create` VARCHAR(MAX) NULL
);

INSERT INTO track_users VALUES
(1,'Turner Rasmussen','user1','user1@gmail.com',md5("pass"),'http://via.placeholder.com/400/798/fff/?text=user1','2020-02-05 12:30:09'),
(2,'Bette Brady','user2','user2@gmail.com',md5("pass"),'http://via.placeholder.com/400/813/fff/?text=user2','2020-04-30 06:43:10'),
(3,'Sharp Schmidt','user3','user3@gmail.com',md5("pass"),'http://via.placeholder.com/400/879/fff/?text=user3','2021-03-15 06:30:15'),
(4,'Daniels Carey','user4','user4@gmail.com',md5("pass"),'http://via.placeholder.com/400/857/fff/?text=user4','2021-04-17 03:18:12'),
(5,'Hill Barlow','user5','user5@gmail.com',md5("pass"),'http://via.placeholder.com/400/807/fff/?text=user5','2020-10-04 05:07:45'),
(6,'Mcintyre Wiggins','user6','user6@gmail.com',md5("pass"),'http://via.placeholder.com/400/814/fff/?text=user6','2020-09-27 07:45:13'),
(7,'Esther Mathis','user7','user7@gmail.com',md5("pass"),'http://via.placeholder.com/400/819/fff/?text=user7','2020-04-28 12:13:01'),
(8,'Tricia Pennington','user8','user8@gmail.com',md5("pass"),'http://via.placeholder.com/400/870/fff/?text=user8','2020-02-29 07:35:36'),
(9,'Velazquez Glass','user9','user9@gmail.com',md5("pass"),'http://via.placeholder.com/400/813/fff/?text=user9','2020-03-11 11:54:31'),
(10,'Franklin Calhoun','user10','user10@gmail.com',md5("pass"),'http://via.placeholder.com/400/940/fff/?text=user10','2021-10-16 03:33:57');