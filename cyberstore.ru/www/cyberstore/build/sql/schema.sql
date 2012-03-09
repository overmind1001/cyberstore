
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- basket
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `basket`;

CREATE TABLE `basket`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`session_id` VARCHAR(32) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `user_id_constraint` (`user_id`),
	CONSTRAINT `user_id_constraint`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- catalog_div
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `catalog_div`;

CREATE TABLE `catalog_div`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(32) NOT NULL,
	`parent_catalog_div_id` INTEGER,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `name` (`name`),
	INDEX `parent_catalog_constraint` (`parent_catalog_div_id`),
	CONSTRAINT `parent_catalog_constraint`
		FOREIGN KEY (`parent_catalog_div_id`)
		REFERENCES `catalog_div` (`id`)
		ON UPDATE SET NULL
		ON DELETE SET NULL
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- feedback
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`text` TEXT NOT NULL,
	`date` DATE NOT NULL,
	`mark` INTEGER,
	`good_id` INTEGER NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `good_id_constraint` (`good_id`),
	CONSTRAINT `good_id_constraint`
		FOREIGN KEY (`good_id`)
		REFERENCES `goods` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- good_in_basket
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `good_in_basket`;

CREATE TABLE `good_in_basket`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`count` INTEGER NOT NULL,
	`good_id` INTEGER NOT NULL,
	`basket_id` INTEGER NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `good_constraint` (`good_id`),
	INDEX `basket_constraint` (`basket_id`),
	CONSTRAINT `basket_constraint`
		FOREIGN KEY (`basket_id`)
		REFERENCES `basket` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	CONSTRAINT `good_constraint`
		FOREIGN KEY (`good_id`)
		REFERENCES `goods` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- goods
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `goods`;

CREATE TABLE `goods`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
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
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`price` FLOAT NOT NULL,
	`count` INTEGER NOT NULL,
	`sale_id` INTEGER NOT NULL,
	`good_id` INTEGER NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `sale_constraint` (`sale_id`),
	INDEX `good1_constraint` (`good_id`),
	CONSTRAINT `good1_constraint`
		FOREIGN KEY (`good_id`)
		REFERENCES `goods` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	CONSTRAINT `sale_constraint`
		FOREIGN KEY (`sale_id`)
		REFERENCES `sales` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- sales
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`date` DATE NOT NULL,
	`user_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `user_id1_constraint` (`user_id`),
	CONSTRAINT `user_id1_constraint`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`login` VARCHAR(32) NOT NULL,
	`password` VARCHAR(32) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `login` (`login`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
