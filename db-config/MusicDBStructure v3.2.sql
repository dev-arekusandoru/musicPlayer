-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema MusicDB
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `MusicDB` ;

-- -----------------------------------------------------
-- Schema MusicDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `MusicDB` DEFAULT CHARACTER SET latin1 ;
USE `MusicDB` ;

-- -----------------------------------------------------
-- Table `MusicDB`.`Genre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`Genre` (
  `Genre_ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Genre_Name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Genre_ID`),
  UNIQUE INDEX `Genre_Name_UNIQUE` (`Genre_Name` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `MusicDB`.`Album`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`Album` (
  `Album_ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Album_Name` VARCHAR(200) NOT NULL,
  `Image_URL` VARCHAR(200) NULL,
  `Genre_FK` BIGINT(20) UNSIGNED NULL,
  PRIMARY KEY (`Album_ID`),
  UNIQUE INDEX `Album_Name_UNIQUE` (`Album_Name` ASC) ,
  INDEX `Genre_Album_FK` (`Genre_FK` ASC) ,
  CONSTRAINT `Genre_Album_FK`
    FOREIGN KEY (`Genre_FK`)
    REFERENCES `MusicDB`.`Genre` (`Genre_ID`)
    ON DELETE SET NULL
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `MusicDB`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`User` (
  `User_ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Password` CHAR(255) NOT NULL,
  `Salt` VARCHAR(255) NULL,
  `First_Name` VARCHAR(50) NOT NULL,
  `Last_Name` VARCHAR(50) NOT NULL,
  `Email` VARCHAR(100) NOT NULL,
  `Is_Admin` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`User_ID`),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `MusicDB`.`Review`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`Review` (
  `Review_ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Comment` VARCHAR(200) NOT NULL,
  `Stars` TINYINT(3) UNSIGNED NOT NULL,
  `Timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `User_FK` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`Review_ID`),
  INDEX `User_Review_FK` (`User_FK` ASC) ,
  CONSTRAINT `User_Review_FK`
    FOREIGN KEY (`User_FK`)
    REFERENCES `MusicDB`.`User` (`User_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `MusicDB`.`Album_Review`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`Album_Review` (
  `Album_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Review_FK` BIGINT(20) UNSIGNED NOT NULL,
  INDEX `Review_AlbumReviewFK` (`Review_FK` ASC) ,
  INDEX `Album_AlbumReview_FK` (`Album_FK` ASC) ,
  PRIMARY KEY (`Album_FK`, `Review_FK`),
  CONSTRAINT `Album_AlbumReview_FK`
    FOREIGN KEY (`Album_FK`)
    REFERENCES `MusicDB`.`Album` (`Album_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `Review_AlbumReviewFK`
    FOREIGN KEY (`Review_FK`)
    REFERENCES `MusicDB`.`Review` (`Review_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `MusicDB`.`Artist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`Artist` (
  `Artist_ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Artist_Name` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`Artist_ID`),
  UNIQUE INDEX `Artist_Name_UNIQUE` (`Artist_Name` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `MusicDB`.`Artist_Review`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`Artist_Review` (
  `Artist_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Review_FK` BIGINT(20) UNSIGNED NOT NULL,
  INDEX `Artist_ArtistReview_FK` (`Artist_FK` ASC) ,
  INDEX `Review_ArtistReview_FK` (`Review_FK` ASC) ,
  PRIMARY KEY (`Artist_FK`, `Review_FK`),
  CONSTRAINT `Artist_ArtistReview_FK`
    FOREIGN KEY (`Artist_FK`)
    REFERENCES `MusicDB`.`Artist` (`Artist_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `Review_ArtistReview_FK`
    FOREIGN KEY (`Review_FK`)
    REFERENCES `MusicDB`.`Review` (`Review_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `MusicDB`.`Media_Type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`Media_Type` (
  `Media_Type_ID` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Media_Type` VARCHAR(45) NOT NULL,
  `Constraint_Type` TINYINT UNSIGNED NOT NULL COMMENT '1 = time-based, 2=filesize-based',
  `Media_Limit` INT NULL,
  PRIMARY KEY (`Media_Type_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MusicDB`.`Playlist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`Playlist` (
  `Playlist_ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Playlist_Name` VARCHAR(100) NOT NULL,
  `Media_Type_FK` BIGINT UNSIGNED NULL COMMENT 'Music CD (the limit would be time), Music DVD (the limit would be time), or thumbdrive (the limit would be size)',
  PRIMARY KEY (`Playlist_ID`),
  INDEX `Media_Type_Playlist_FOREIGN_idx` (`Media_Type_FK` ASC) ,
  CONSTRAINT `Media_Type_Playlist_FOREIGN`
    FOREIGN KEY (`Media_Type_FK`)
    REFERENCES `MusicDB`.`Media_Type` (`Media_Type_ID`)
    ON DELETE SET NULL
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `MusicDB`.`Song`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`Song` (
  `Song_ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(200) NOT NULL COMMENT 'The name of the song in characters',
  `Length` SMALLINT(5) UNSIGNED NULL DEFAULT NULL COMMENT 'Time length in seconds',
  `Filesize` INT NULL COMMENT 'The number of Bytes',
  `Artist_FK` BIGINT(20) UNSIGNED NULL DEFAULT NULL,
  `Song_URL` VARCHAR(100) NULL,
  `Album_FK` BIGINT(20) UNSIGNED NULL,
  PRIMARY KEY (`Song_ID`),
  INDEX `Artist_Song_FK` (`Artist_FK` ASC) ,
  INDEX `Album_Song_FK` (`Album_FK` ASC) ,
  CONSTRAINT `Album_Song_FK`
    FOREIGN KEY (`Album_FK`)
    REFERENCES `MusicDB`.`Album` (`Album_ID`)
    ON DELETE SET NULL
    ON UPDATE CASCADE,
  CONSTRAINT `Artist_Song_FK`
    FOREIGN KEY (`Artist_FK`)
    REFERENCES `MusicDB`.`Artist` (`Artist_ID`)
    ON DELETE SET NULL
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `MusicDB`.`Song_In_Playlist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`Song_In_Playlist` (
  `Song_In_Playlist_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Playlist_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Song_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Order_Number` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`Song_In_Playlist_ID`),
  INDEX `Song_SongInPlaylist_FK` (`Song_FK` ASC) ,
  INDEX `Playlist_SongInPlaylist_FK` (`Playlist_FK` ASC) ,
  CONSTRAINT `Playlist_SongInPlaylist_FK`
    FOREIGN KEY (`Playlist_FK`)
    REFERENCES `MusicDB`.`Playlist` (`Playlist_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `Song_SongInPlaylist_FK`
    FOREIGN KEY (`Song_FK`)
    REFERENCES `MusicDB`.`Song` (`Song_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `MusicDB`.`Song_Review`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`Song_Review` (
  `Song_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Review_FK` BIGINT(20) UNSIGNED NOT NULL,
  INDEX `Song_SongReview_FK` (`Song_FK` ASC) ,
  INDEX `Review_SongReview_FK` (`Review_FK` ASC) ,
  PRIMARY KEY (`Song_FK`, `Review_FK`),
  CONSTRAINT `Review_SongReview_FK`
    FOREIGN KEY (`Review_FK`)
    REFERENCES `MusicDB`.`Review` (`Review_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `Song_SongReview_FK`
    FOREIGN KEY (`Song_FK`)
    REFERENCES `MusicDB`.`Song` (`Song_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `MusicDB`.`User_Playlist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`User_Playlist` (
  `User_FK` BIGINT(20) UNSIGNED NOT NULL,
  `Playlist_FK` BIGINT(20) UNSIGNED NOT NULL,
  INDEX `User_UserPlaylist_FK` (`User_FK` ASC) ,
  INDEX `Playlist_UserPlaylist_FK` (`Playlist_FK` ASC) ,
  PRIMARY KEY (`User_FK`, `Playlist_FK`),
  CONSTRAINT `Playlist_UserPlaylist_FK`
    FOREIGN KEY (`Playlist_FK`)
    REFERENCES `MusicDB`.`Playlist` (`Playlist_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `User_UserPlaylist_FK`
    FOREIGN KEY (`User_FK`)
    REFERENCES `MusicDB`.`User` (`User_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `MusicDB`.`User_Song`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`User_Song` (
  `User_FK` BIGINT UNSIGNED NOT NULL,
  `Song_FK` BIGINT UNSIGNED NOT NULL,
  `Date_Added` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`User_FK`, `Song_FK`),
  INDEX `Song_User_Song_FOREIGN_idx` (`Song_FK` ASC) ,
  CONSTRAINT `User_User_Song_FOREIGN`
    FOREIGN KEY (`User_FK`)
    REFERENCES `MusicDB`.`User` (`User_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `Song_User_Song_FOREIGN`
    FOREIGN KEY (`Song_FK`)
    REFERENCES `MusicDB`.`Song` (`Song_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MusicDB`.`User_Album`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`User_Album` (
  `User_FK` BIGINT UNSIGNED NOT NULL,
  `Album_FK` BIGINT UNSIGNED NOT NULL,
  `Date_Added` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`User_FK`, `Album_FK`),
  INDEX `Album_User_Album_FOREIGN_idx` (`Album_FK` ASC) ,
  CONSTRAINT `User_User_Album_FOREIGN`
    FOREIGN KEY (`User_FK`)
    REFERENCES `MusicDB`.`User` (`User_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `Album_User_Album_FOREIGN`
    FOREIGN KEY (`Album_FK`)
    REFERENCES `MusicDB`.`Album` (`Album_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MusicDB`.`User_Artist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MusicDB`.`User_Artist` (
  `User_FK` BIGINT UNSIGNED NOT NULL,
  `Artist_FK` BIGINT UNSIGNED NOT NULL,
  `Date_Added` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`User_FK`, `Artist_FK`),
  INDEX `Artist_User_Artist_FOREIGN_idx` (`Artist_FK` ASC) ,
  CONSTRAINT `User_User_Artist_FOREIGN`
    FOREIGN KEY (`User_FK`)
    REFERENCES `MusicDB`.`User` (`User_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `Artist_User_Artist_FOREIGN`
    FOREIGN KEY (`Artist_FK`)
    REFERENCES `MusicDB`.`Artist` (`Artist_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
