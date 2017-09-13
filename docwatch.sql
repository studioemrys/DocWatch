-- Sep 13, 2017 at 21:59
-- Studio.Emrys

CREATE DATABASE IF NOT EXISTS `docwatch`;

USE `docwatch`;

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
	`uuid` varchar(255) NOT NULL,
	`role` char(2) DEFAULT NULL,
	`avatar` varchar(255) DEFAULT NULL,
	`initials` varchar(255) DEFAULT NULL,
	`name` varchar(255) DEFAULT NULL,
	`dob` date,
	`sex` char(1) DEFAULT NULL,
	`email` varchar(255) DEFAULT NULL,
	`phone` char(10) DEFAULT NULL,
	`city` varchar(255) DEFAULT NULL,
	`phys` varchar(2047) DEFAULT NULL, 
	`username` varchar(255) DEFAULT NULL,
	`password` varchar(255) DEFAULT NULL,
	`confirmed` tinyint(1) NOT NULL DEFAULT '0',
	`wrong_logins` tinyint(1) NOT NULL DEFAULT '0',
	UNIQUE (`uuid`),
	UNIQUE (`avatar`),
	UNIQUE (`username`),
	PRIMARY KEY (`uuid`)
);