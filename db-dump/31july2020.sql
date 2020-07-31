/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.3.22-MariaDB-1:10.3.22+maria~bionic : Database - php-mvc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `article` */

insert  into `article`(`id`,`title`,`content`,`url`,`description`,`keywords`) values (1,'Home','<p>Welcome to our website!</p>\r\n\r\n<p>This website is powered by a <strong>simple MVC framework in PHP</strong>. This is the home article loaded from the database.</p>','home','The MVC website&#8217;s home article','home, mvc, website'),(2,'Sample Content One','<p>This is sample content one!</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urgent tamen et nihil remittunt. Sed nimis multa. </p>\r\n\r\n<p>Certe, nisi voluptatem tanti aestimaretis. Unum est sine dolore esse, alterum cum voluptate. De hominibus dici non necesse est. Optime, inquam. Si quae forte-possumus. Suo enim quisque studio maxime ducitur. </p>\r\n\r\n<p>Qui est in parvis malis. Quam ob rem tandem, inquit, non satisfacit? Duo Reges: constructio interrete. Paria sunt igitur. </p>\r\n\r\n<p>Utram tandem linguam nescio? Et quidem, inquit, vehementer errat; Itaque ab his ordiamur. Tamen a proposito, inquam, aberramus. Et quod est munus, quod opus sapientiae? Ut pulsi recurrant? Cur deinde Metrodori liberos commendas? Gerendus est mos, modo recte sentiat. </p>\r\n\r\n<p>Quibus ego vehementer assentior. Fortemne possumus dicere eundem illum Torquatum? Eaedem res maneant alio modo. </p>','sample-content','The MVC website&#8217;s home article','home, mvc, website');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = normal user, 1 = admin',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`is_admin`) values (1,'deepak','123456',1),(2,'kanchan','123456',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
