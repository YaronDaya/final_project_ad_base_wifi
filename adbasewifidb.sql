Drop schema if exists  `adbasewifi`;
CREATE schema `adbasewifi`;
USE `adbasewifi`;
SET AUTOCOMMIT=0;



DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users`(
`Users_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
`firstName` VARCHAR(30),
`lastName` VARCHAR(30),
`email` VARCHAR(30),
`birthday` DATE,
`password` VARCHAR(30),
PRIMARY KEY(`Users_id`)
)ENGINE=InnoDB AUTO_INCREMENT=20;

DROP TABLE IF EXISTS `business_users`;
CREATE TABLE `business_users`(
`business_id` int(6) UNSIGNED NOT NULL,
`Users_id` int(6) UNSIGNED NOT NULL,
`owner` VARCHAR(30),
`company` VARCHAR(30),
`address` VARCHAR(30),
`password` VARCHAR(30),
`email` VARCHAR(30)
)ENGINE=InnoDB AUTO_INCREMENT=20;


DROP TABLE IF EXISTS `Advertiser_Users`;
CREATE TABLE `Advertiser_Users`(
  `advertise_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstName` VARCHAR(30),
  `lastName` VARCHAR(30),
  `password` VARCHAR(30),
  `nickname` VARCHAR(30),
  `email` VARCHAR(30),
  `Users_id` int(6) UNSIGNED NOT NULL,
  PRIMARY KEY(`advertise_id`)
)ENGINE=InnoDB AUTO_INCREMENT=20;

/*
DROP TABLE IF EXISTS `Acces_Point`;
CREATE TABLE `Acces_Point`()ENGINE=innodb;
*/
