create database db_cyberstore;
use db_cyberstore;
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- basket
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `basket`;

CREATE TABLE `basket`
(
	`id` INTEGER NOT NULL,
	`session_id` INTEGER NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- catalog_div
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `catalog_div`;

CREATE TABLE `catalog_div`
(
	`id` INTEGER NOT NULL,
	`name` TEXT NOT NULL,
	`parent_catalog_div_id` INTEGER,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- feedback
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback`
(
	`id` INTEGER NOT NULL,
	`text` TEXT NOT NULL,
	`date` DATE NOT NULL,
	`mark` INTEGER,
	`good_id` INTEGER NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- good_in_basket
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `good_in_basket`;

CREATE TABLE `good_in_basket`
(
	`id` INTEGER NOT NULL,
	`count` INTEGER NOT NULL,
	`good_id` INTEGER NOT NULL,
	`basket_id` INTEGER NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- goods
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `goods`;

CREATE TABLE `goods`
(
	`id` INTEGER NOT NULL,
	`name` TEXT NOT NULL,
	`description` TEXT NOT NULL,
	`price_current` FLOAT NOT NULL,
	`count` INTEGER NOT NULL,
	`picture_id` INTEGER,
	`catalog_id` INTEGER NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- goods_in_sale
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `goods_in_sale`;

CREATE TABLE `goods_in_sale`
(
	`id` INTEGER NOT NULL,
	`price` FLOAT NOT NULL,
	`count` INTEGER NOT NULL,
	`sale_id` INTEGER NOT NULL,
	`good_id` INTEGER NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- sales
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales`
(
	`id` INTEGER NOT NULL,
	`date` DATE NOT NULL,
	`user_id` INTEGER,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- session
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `session`;

CREATE TABLE `session`
(
	`id` INTEGER NOT NULL,
	`basket_id` INTEGER NOT NULL,
	`user_id` INTEGER,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
	`id` INTEGER NOT NULL,
	`login` TEXT NOT NULL,
	`password` TEXT NOT NULL,
	`session_id` INTEGER NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
