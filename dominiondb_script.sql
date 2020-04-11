-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema dominiondb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dominiondb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dominiondb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `dominiondb` ;

-- -----------------------------------------------------
-- Table `dominiondb`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dominiondb`.`roles` (
  `ROLE_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `ROLE_NAME` VARCHAR(45) NULL,
  PRIMARY KEY (`ROLE_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dominiondb`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dominiondb`.`users` (
  `USER_ID` INT NOT NULL AUTO_INCREMENT,
  `USER_FIRSTNAME` VARCHAR(45) NOT NULL,
  `USER_LASTNAME` VARCHAR(45) NOT NULL,
  `GENDER` CHAR(10) NULL,
  `USER_ROLE` INT(11) NOT NULL,
  `USER_EMAIL` VARCHAR(45) NOT NULL,
  `USER_PASSWORD` VARCHAR(45) NULL,
  `USER_ADDRESS` BLOB NULL,
  PRIMARY KEY (`USER_ID`),
  UNIQUE INDEX `USER_EMAIL_UNIQUE` (`USER_EMAIL` ASC),
  INDEX `Users_RoleID_idx` (`USER_ROLE` ASC),
  CONSTRAINT `Users_RoleID`
    FOREIGN KEY (`USER_ROLE`)
    REFERENCES `dominiondb`.`roles` (`ROLE_ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dominiondb`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dominiondb`.`categories` (
  `CATEGORY_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `CATEGORY_NAME` VARCHAR(45) NULL,
  PRIMARY KEY (`CATEGORY_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dominiondb`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dominiondb`.`products` (
  `PRODUCT_ID` INT(11) NOT NULL,
  `PRODUCT_CATEGORY` INT(11) NULL,
  `PRODUCT_NAME` VARCHAR(45) NULL,
  `PRODUCT_DESCRIPTION` BLOB(255) NULL,
  `PRODUCT_QUANTITY` INT(11) NULL,
  `PRODUCT_PRICE` FLOAT NULL,
  `PRODUCT_STATUS` VARCHAR(45) NULL,
  PRIMARY KEY (`PRODUCT_ID`),
  INDEX `Product_CategoryID_idx` (`PRODUCT_CATEGORY` ASC),
  CONSTRAINT `Product_CategoryID`
    FOREIGN KEY (`PRODUCT_CATEGORY`)
    REFERENCES `dominiondb`.`categories` (`CATEGORY_ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dominiondb`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dominiondb`.`orders` (
  `ORDER_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `ORDER_DATE` TIMESTAMP(6) NULL,
  `PRODUCT_ID` INT(11) NULL,
  `ORDER_QUANTITY` INT(11) NULL,
  `ORDER_PRICE` FLOAT NULL,
  `ORDER_BY` INT(11) NULL,
  `ORDER_STATUS` VARCHAR(45) NULL,
  PRIMARY KEY (`ORDER_ID`),
  INDEX `Order_ProductID_idx` (`PRODUCT_ID` ASC),
  INDEX `Order_UserID_idx` (`ORDER_BY` ASC),
  CONSTRAINT `Order_ProductID`
    FOREIGN KEY (`PRODUCT_ID`)
    REFERENCES `dominiondb`.`products` (`PRODUCT_ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `Order_UserID`
    FOREIGN KEY (`ORDER_BY`)
    REFERENCES `dominiondb`.`users` (`USER_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
