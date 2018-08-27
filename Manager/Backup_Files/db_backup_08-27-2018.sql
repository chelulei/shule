DROP TABLE IF EXISTS activity_log;

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO activity_log VALUES("1","noel.titus","2016-10-24 09:12:05","Add Class Form 6");
INSERT INTO activity_log VALUES("2","noel.titus","2016-10-24 09:12:58","Edit Class Form 6");
INSERT INTO activity_log VALUES("3","noel.titus","2016-10-24 09:15:07","Add Student aaa bbb");
INSERT INTO activity_log VALUES("4","noel.titus","2016-10-24 09:15:36","Updated Student aaa bbb");
INSERT INTO activity_log VALUES("5","noel.titus","2016-10-24 09:17:50","Add Student buel bol");
INSERT INTO activity_log VALUES("6","noel.titus","2016-10-24 09:23:17","Add User abdul.hemedy");


DROP TABLE IF EXISTS aprjun;

CREATE TABLE `aprjun` (
  `aprjun_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO aprjun VALUES("1","1","Form 6","250000","half","125000","0");
INSERT INTO aprjun VALUES("2","2","Form 6","250000","paying","250000","250000");


DROP TABLE IF EXISTS attendance;

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `day` varchar(255) NOT NULL,
  `student` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

INSERT INTO attendance VALUES("89","2018-08-08","Morning","14","34","Present","");
INSERT INTO attendance VALUES("90","2018-08-08","Morning","15","34","Present","");
INSERT INTO attendance VALUES("91","2018-08-02","Morning","14","34","Present","");
INSERT INTO attendance VALUES("92","2018-08-02","Morning","15","34","Present","");
INSERT INTO attendance VALUES("93","2018-08-09"," Afternoon","17","38","Present","");


DROP TABLE IF EXISTS categories;

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO categories VALUES("9","ball pell");
INSERT INTO categories VALUES("11","books");


DROP TABLE IF EXISTS class;

CREATE TABLE `class` (
  `classId` int(50) NOT NULL AUTO_INCREMENT,
  `Class` varchar(50) NOT NULL,
  `Classteacher` int(11) NOT NULL,
  `Nostudents` int(50) NOT NULL,
  `students` int(11) NOT NULL,
  PRIMARY KEY (`classId`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO class VALUES("38","english 11","3","40","1");


DROP TABLE IF EXISTS event;

CREATE TABLE `event` (
  `Event_id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Start` date NOT NULL,
  `End` date NOT NULL,
  `Description` text NOT NULL,
  `Audience` varchar(255) NOT NULL,
  `Venue` varchar(255) NOT NULL,
  PRIMARY KEY (`Event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO event VALUES("2","josken","2018-08-06","2018-08-06","","All","jjj");


DROP TABLE IF EXISTS events;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS exams;

CREATE TABLE `exams` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO exams VALUES("15","exam 7","Term 2","38","0","2018-08-21");
INSERT INTO exams VALUES("16","exam 10","Term 1","38","5","2018-08-26");


DROP TABLE IF EXISTS giveitems;

CREATE TABLE `giveitems` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `item` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `givento` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO giveitems VALUES("7","2018-08-07","sample","5","Teacher","yes");


DROP TABLE IF EXISTS grade;

CREATE TABLE `grade` (
  `gradeid` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `subject` int(11) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `test` int(11) NOT NULL,
  PRIMARY KEY (`gradeid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO grade VALUES("4","3","12","2018","Term2","50","90","70");
INSERT INTO grade VALUES("5","3","17","2018","Term 3","50","90","70");
INSERT INTO grade VALUES("7","3","11","2017","Term 1","5","90","80");
INSERT INTO grade VALUES("8","3","11","2018","Term 1","10","50","40");
INSERT INTO grade VALUES("10","3","11","2018","Term 1","5","40","10");
INSERT INTO grade VALUES("11","3","18","2007","Term 3","12","40","80");


DROP TABLE IF EXISTS gradingsystem;

CREATE TABLE `gradingsystem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `low_mark` varchar(50) NOT NULL,
  `high_mark` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `aggregate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO gradingsystem VALUES("1","17","5"," 80","60","2018-08-19 07:31:27","1");
INSERT INTO gradingsystem VALUES("2","3","5","30","90","2018-08-26 11:31:24","1");


DROP TABLE IF EXISTS inventory;

CREATE TABLE `inventory` (
  `InventIdNo` int(50) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Itemname` varchar(50) NOT NULL,
  `Totalcost` int(50) NOT NULL,
  `ItemGivenOut` int(50) NOT NULL,
  `Uncounted` int(50) NOT NULL,
  `Remainingstock` int(50) NOT NULL,
  `Reorderstatus` varchar(50) NOT NULL,
  PRIMARY KEY (`InventIdNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS items;

CREATE TABLE `items` (
  `itemsIdno` int(50) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Productname` varchar(50) NOT NULL,
  `Category` int(11) NOT NULL,
  `Quantity` int(50) NOT NULL,
  `Unitprice` int(50) NOT NULL,
  `Total` int(50) NOT NULL,
  `Person` varchar(50) NOT NULL,
  `Receipt` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`itemsIdno`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO items VALUES("2","2018-08-26","Red Book","10","6","200","1200","Deputy Principal","444","yyy");
INSERT INTO items VALUES("3","2018-08-26","bluebook","4","2","200","400","Teacher","4444444","");
INSERT INTO items VALUES("5","2018-08-26","bluebook","11","6","60","360","Teacher","444","lorew");
INSERT INTO items VALUES("6","2018-08-26","bluebook","11","6","50","300","Teacher","555","jjj");


DROP TABLE IF EXISTS leaving;

CREATE TABLE `leaving` (
  `leavingid` int(50) NOT NULL AUTO_INCREMENT,
  `Student` int(11) NOT NULL,
  `activities` text NOT NULL,
  `remarks` text NOT NULL,
  `lev_date` date NOT NULL,
  PRIMARY KEY (`leavingid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO leaving VALUES("1","12","running","<p>lorem</p>","2018-08-02");


DROP TABLE IF EXISTS medical;

CREATE TABLE `medical` (
  `medic_id` int(11) NOT NULL AUTO_INCREMENT,
  `Student` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Report` varchar(255) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `User` int(11) NOT NULL,
  PRIMARY KEY (`medic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO medical VALUES("9","11","2018-08-08","injection","inject"," vv","2");
INSERT INTO medical VALUES("10","11","2018-08-14","jori","inject"," kebinoi","8");


DROP TABLE IF EXISTS payments;

CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Student` int(11) NOT NULL,
  `Class` int(11) NOT NULL,
  `Term` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Tuition` float NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `Balance` float NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO payments VALUES("17","11","38","Term 1","2018","20000","10000","10000","2018-08-26");


DROP TABLE IF EXISTS placements;

CREATE TABLE `placements` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `Student` int(11) NOT NULL,
  `Start_date` date NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Class` int(11) NOT NULL,
  `Date_upto` date NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO placements VALUES("1","11","2018-08-02","Dorm Captain","34","2018-08-21","                                             lorem                                                                                                                                                               ");


DROP TABLE IF EXISTS stock;

CREATE TABLE `stock` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) NOT NULL,
  `closing` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `takenby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO stock VALUES("14","hh","2","<p>hhhh</p>","2018-08-07","jjj");


DROP TABLE IF EXISTS students;

CREATE TABLE `students` (
  `adm_No` int(11) NOT NULL AUTO_INCREMENT,
  `Surname` varchar(11) NOT NULL,
  `Firstname` varchar(11) NOT NULL,
  `Middlename` varchar(11) NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Gender` varchar(40) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Homeaddress` varchar(50) NOT NULL,
  `Parentname` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Image` text NOT NULL,
  `Formerschool` varchar(50) NOT NULL,
  `Entrymarks` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Activities` varchar(50) NOT NULL,
  `Remarks` varchar(50) NOT NULL,
  `Suspension` varchar(255) NOT NULL DEFAULT 'suspend',
  PRIMARY KEY (`adm_No`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("11","mike","jos","josken","2018-08-08","Male","41","550","josken","49994944","jos@yahoo.com","default.png","kipkoror","500","2018-08-25 12:56:16","","","suspended");
INSERT INTO students VALUES("12","bomori","bomori","josken","2018-08-22","Male","41","400","josken","6666","jos@yahoo.com","default.png","kipkoror","6000","2018-08-25 12:56:34","","","suspended");
INSERT INTO students VALUES("13","chebochok","joskeni","daniel","2018-08-14","Male","32","200b","josken","67899","jos@yahoo.com","1535334742_cosmas.jpg","kipkoror","600","2018-08-27 09:52:22","","","");
INSERT INTO students VALUES("14","josken","bomori","josken","2018-08-09","Male","34","ggg","bbbb","888888888","jos@gmail.com","default.png","ccccc","77","2018-08-25 12:57:08","","","");
INSERT INTO students VALUES("15","bomori","sikilai","dan","2018-08-14","Male","34","300b","mike","29999","jos@gmail.com","default.png","kk","600","2018-08-25 12:56:54","","","");
INSERT INTO students VALUES("16","new student","new","new","2018-08-08","Female","36","200b","new parent","00000","new@gmail.com","default.png","nairo","490","2018-08-25 12:56:49","","","");
INSERT INTO students VALUES("17","mike","mike","mike","2018-08-01","Female","38","mike","mike","7777","jos@yahoo.com","1535334908_20171102_134048.jpg","gggg","800","2018-08-27 09:55:08","","","suspended");
INSERT INTO students VALUES("18","jos","prono","prono","2018-08-07","Female","38","200","mike","2222","jos@gmail.com","default.png","hh","800","2018-08-26 11:22:36","","","suspended");


DROP TABLE IF EXISTS subject;

CREATE TABLE `subject` (
  `SubIdNo` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Code` varchar(2555) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Term` varchar(50) NOT NULL,
  PRIMARY KEY (`SubIdNo`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO subject VALUES("5","prono","666","Term 2","                 lorem                            ","34","Term 1");
INSERT INTO subject VALUES("8","bb","99","Elective Subject","bbbb","35","Term 2");
INSERT INTO subject VALUES("12","mike","888","General Subject","8888","41","Term 3");


DROP TABLE IF EXISTS teacher;

CREATE TABLE `teacher` (
  `Idno` int(50) NOT NULL AUTO_INCREMENT,
  `TSC_No` int(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Middlename` varchar(50) NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Homeaddress` varchar(50) NOT NULL,
  `Phone` int(50) NOT NULL,
  `Classes` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `DateEmp` date NOT NULL,
  `YearsExp` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Image` text NOT NULL,
  `Resume` int(20) NOT NULL,
  `Salary` int(50) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`Idno`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO teacher VALUES("1","2147483647","mike","mike","mike","2002-12-31","Male","dhsfh","2147483647","45","Deputy Principal","2018-07-02","20","hdfs@gmail.com","1535334722_cosmas.JPG","0","50000","2018-08-27 09:52:02","");
INSERT INTO teacher VALUES("2","17371718","home","hdhsfdf","dfdsfajshfd","1992-12-02","Female","hjdgash","90934289","555","Deputy Principal","2018-07-18","555","dshj@gmail.com","default.png","0","34000","2018-08-25 11:26:56","");
INSERT INTO teacher VALUES("3","123123","jshjkjkfdskk","djksndfkj","mkdsjk","2012-12-12","Female","jkdjsjk","939009484","","Teacher","0000-00-00","","jdskj@gmail.com","default.png","0","0","2018-08-25 12:57:26","");
INSERT INTO teacher VALUES("4","191393923","rono","kim","kem","1992-12-12","Male","kimoi","90382094","4","Principal","0000-00-00","","kimoi@gmail.com","1535232662_particles.PNG","0","34000","2018-08-26 05:31:02","");
INSERT INTO teacher VALUES("5","12334455","yhghhihyg","hgguhuytwewwe","hbgjhjkh","0993-12-21","Male","dffghhhh","2147483647","34","Principal","0000-00-00","","ghhjkkj@gmail.com","default.png","0","34000","2018-08-25 12:57:35","");
INSERT INTO teacher VALUES("6","0","hello","hello","hello","1998-12-12","Female","hello","2147483647","2","Deputy Principal","0000-00-00","","hello@gmail.com","1535177230_25592970_1572965619406447_2026175433_o.jpg","0","23400","2018-08-25 14:07:10","Active");
INSERT INTO teacher VALUES("7","555","ptum","ptum","potum","2018-07-12","Female","RHFD","2147483647","8","Principal","2018-07-11","99","NDSD@GMAIl.com","1535189661_rigid body.PNG","0","8000","2018-08-25 17:34:21","Active");


DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Middlename` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("3","teach","mike","mike","mike","556788888","jos@yahoo.com","default.png","1234","Teacher","","2018-08-25 06:17:00");
INSERT INTO user VALUES("13","sec","Grace","Towett","koikeldo","073465729","koikeldo@gmail.com","default.png","1234","Secretary","active","2018-08-25 06:17:11");
INSERT INTO user VALUES("8","man","sarah","chepwogen","Towett","099271398","hdsdgfh@gmail.com","default.png","1234","Manager","","2018-08-27 11:08:57");
INSERT INTO user VALUES("10","","Joan Cherono","menona","munene","0930210104","menene@gmail.com","default.png","","Teacher","active","2018-08-25 06:17:18");
INSERT INTO user VALUES("14","acc","Amos","kiprono","Chirchir","97324768721","kiprono@gmail.com","default.png","1234","Accountant","active","2018-08-25 06:17:25");
INSERT INTO user VALUES("20","jpmike","josken","prono","mike","072485854728","jos@yahoo.com","default.png","30269022e9d8f51beaabb52e5d0de2b7","Parent","active","2018-08-25 06:17:28");


DROP TABLE IF EXISTS usergroup;

CREATE TABLE `usergroup` (
  `groupid` int(50) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`groupid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO usergroup VALUES("1","Teacher","Teacher");
INSERT INTO usergroup VALUES("2","Seceretary","Secretary");
INSERT INTO usergroup VALUES("3","Teacher","Teacher");
INSERT INTO usergroup VALUES("8","Parent","Parent");


