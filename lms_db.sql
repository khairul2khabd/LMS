/*
SQLyog Ultimate v8.8 
MySQL - 5.6.51-log : Database - lms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lms` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `lms`;

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admins` */

insert  into `admins`(`id`,`name`,`email`,`email_verified_at`,`password`,`phone`,`remember_token`,`created_at`,`updated_at`) values (1,'Md Khairul Islam','khairul@gmail.com','2021-02-24 17:29:25','$2y$10$Mpo1lKdn1wFtAnoSY.Sk9OWfbQWqmxhD6MlF6xzRpHQxOony4Q.ua','01766940078',NULL,NULL,NULL);

/*Table structure for table `course_categories` */

DROP TABLE IF EXISTS `course_categories`;

CREATE TABLE `course_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `categories_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `course_categories` */

/*Table structure for table `course_topics` */

DROP TABLE IF EXISTS `course_topics`;

CREATE TABLE `course_topics` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `topic_heading_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description_one` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_heading_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description_two` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_heading_three` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description_three` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_heading_four` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description_four` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_heading_five` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description_five` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_heading_six` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description_six` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `course_topics` */

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_course` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_duration_hour` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_duration_minute` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_duration_second` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefits_of_the_course` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirements` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_audience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materials_included` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `what_will_learn` text COLLATE utf8mb4_unicode_ci,
  `topics_of_course` longtext COLLATE utf8mb4_unicode_ci,
  `categories` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coursef_start_date` date DEFAULT NULL,
  `coursef_end_date` date DEFAULT NULL,
  `maximum_students` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `courses` */

insert  into `courses`(`id`,`image`,`course_title`,`about_course`,`course_description`,`course_duration_hour`,`course_duration_minute`,`course_duration_second`,`benefits_of_the_course`,`requirements`,`target_audience`,`materials_included`,`what_will_learn`,`topics_of_course`,`categories`,`coursef_start_date`,`coursef_end_date`,`maximum_students`,`uuid`,`status`,`created_at`,`updated_at`) values (1,'public/frontend/images/course/6044692b6e16a.png','Graphics Design Intermadiate','This specialization covers the basics of Innovation and Entrepreneurship courses in the EIT Digital Master Program. The program aims to educate students and deliver entrepreneurs with the right business skills and sense. UC Berkeley Haas School of Business and KTH Royal Institute of Technology are the academic partners in this Innovation and Entrepreneurship specialization.','This specialization covers the basics of Innovation and Entrepreneurship courses in the EIT Digital Master Program. The program aims to educate students and deliver entrepreneurs with the right business skills and sense. UC Berkeley Haas School of Business and KTH Royal Institute of Technology are the academic partners in this Innovation and Entrepreneurship specialization.','45','22','33','sdfsdf','Any student can apply for this course.\r\nAfter registering with this course our judge\'s panel will select 40 qualified students who will complete this course.','Young entrepreneurs who have new ideas and already started their startup.','Notebook\r\nPen & Pencil\r\nCertificate','This Course Plus the Full Specialization\r\nShareable Certificates\r\nSelf-Paced Learning Option\r\nCourse Videos & Readings\r\nPractice Quizzes\r\nGraded Assignments with Peer Feedback\r\nGraded Quizzes with Feedback\r\nGraded Programming Assignments','How can you learn entrepreneurship??\r\nHow is your idea valuable??\r\nHow will you reach more customers??\r\nHow profitable is your idea??\r\nIs investment capital right for you??\r\nHow will you pitch your idea??','SSSSS','2021-03-08','2021-03-14','11','2fa5e1e3-a81a-4157-9a90-c5c575e1922b','1','2021-03-07 05:48:27',NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `home_texts` */

DROP TABLE IF EXISTS `home_texts`;

CREATE TABLE `home_texts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_course` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `home_texts` */

/*Table structure for table `learnings` */

DROP TABLE IF EXISTS `learnings`;

CREATE TABLE `learnings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_8` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `learnings` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (0,'2021_02_26_061332_create_courses_table',6),(0,'2014_10_12_000000_create_users_table',7),(0,'2014_10_12_100000_create_password_resets_table',7),(0,'2019_08_19_000000_create_failed_jobs_table',7),(0,'2021_02_24_105115_create_admins_table',7),(0,'2021_02_24_222315_create_home_texts_table',8),(0,'2021_02_25_130235_create_learnings_table',8),(0,'2021_02_25_155500_create_course_topics_table',8),(0,'2021_02_27_093818_create_student_table',8),(0,'2021_02_27_185122_create_courses_table',8),(0,'2021_02_28_123656_create_course_categories_table',8);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upazila` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `students` */

insert  into `students`(`id`,`course_name`,`student_name`,`gender`,`date_of_birth`,`mobile`,`religion`,`blood_group`,`email`,`address`,`district`,`upazila`,`nid`,`photo`,`father_name`,`father_phone`,`mother_name`,`mother_phone`,`uuid`,`status`,`created_at`,`updated_at`) values (1,'Graphics Design Intermadiate','Md Khairul Islam','Male','1986-03-01','234324324','Islam','A+ (ve)','khairul@gmail.com',NULL,'Narayangonj','Sonargoan','234234','public/backend/student/604469750c65d.jpg','asdf','asdf','Mrs. AA','2342342','269df8b7-ec5e-4d78-8773-82961ab74bc0','1','2021-03-07 05:49:41',NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
