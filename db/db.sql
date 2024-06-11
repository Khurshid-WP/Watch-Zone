-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for nwatch
CREATE DATABASE IF NOT EXISTS `nwatch` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `nwatch`;

-- Dumping structure for table nwatch.country
CREATE TABLE IF NOT EXISTS `country` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL DEFAULT '0',
  `city` varchar(50) NOT NULL DEFAULT '0',
  `language` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table nwatch.country: ~9 rows (approximately)
REPLACE INTO `country` (`id`, `country`, `city`, `language`) VALUES
	(1, 'Pakistan', 'Karachi', 'Urdu'),
	(2, 'Pakistan', 'Islamabd', 'Urdu'),
	(3, 'Pakistan', 'Lahore', 'Urdu'),
	(4, 'America', 'NewYork', 'English'),
	(5, 'America', 'Austin', 'English'),
	(6, 'America', 'Chicago', 'English'),
	(7, 'India', 'Delhi', 'Hindi'),
	(8, 'India', 'Mumbai', 'Hindi'),
	(9, 'India', 'Hyderabad', 'Hindi');

-- Dumping structure for table nwatch.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int NOT NULL AUTO_INCREMENT,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `adress` varchar(50) DEFAULT NULL,
  `userid` int DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `pid` int DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'pending',
  `orderdate` datetime DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`orderid`),
  KEY `FK_orders_users` (`userid`),
  CONSTRAINT `FK_orders_users` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table nwatch.orders: ~6 rows (approximately)
REPLACE INTO `orders` (`orderid`, `country`, `city`, `adress`, `userid`, `zip`, `mobile`, `pid`, `status`, `orderdate`, `quantity`) VALUES
	(3, 'Pakistan', 'Karachi', 'khursheed@gmail.com', 1, '6400', '3152254414', 1, 'Pending', NULL, '1'),
	(4, 'Pakistan', 'Karachi', 'khursheed@gmail.com', 2, '6400', '3152254414', 3, 'pending', NULL, '1'),
	(5, 'America', 'NewYork', 'khursheed@gmail.com', 1, '6400', '3152254414', 1, 'pending', NULL, '1'),
	(6, 'India', 'Delhi', 'khursheed@gmail.com', 1, '6400', '3152254414', 1, 'Delivered', NULL, '1'),
	(7, 'Pakistan', 'Karachi', 'khursheed@gmail.com', 1, '6400', '3152254414', 1, 'pending', NULL, '1'),
	(8, 'Pakistan', 'Karachi', 'khursheed@gmail.com', 1, '6400', '3152254414', 2, 'pending', NULL, '1');

-- Dumping structure for table nwatch.products
CREATE TABLE IF NOT EXISTS `products` (
  `Productid` int NOT NULL AUTO_INCREMENT,
  `Productname` varchar(50) DEFAULT NULL,
  `Productmodel` varchar(50) DEFAULT NULL,
  `img` longblob,
  `price` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`Productid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table nwatch.products: ~6 rows (approximately)
REPLACE INTO `products` (`Productid`, `Productname`, `Productmodel`, `img`, `price`, `type`, `description`) VALUES
	(1, 'Rado', '189', _binary 0x75706c6f6164732f70726f64756374312e6a7067, '12000', 'mens', NULL),
	(2, 'Rado', '123', _binary 0x75706c6f6164732f776f6d656e312e6a7067, '12000', 'womens', NULL),
	(3, 'Rado', '161', _binary 0x75706c6f6164732f70726f64756374322e6a7067, '12000', 'mens', NULL),
	(4, 'Rado', '111', _binary 0x75706c6f6164732f70726f64756374342e6a7067, '12000', 'mens', NULL),
	(5, 'Rado', '555', _binary 0x75706c6f6164732f776f6d656e332e6a7067, '12000', 'womens', NULL),
	(6, 'Rado', '5552', _binary 0x75706c6f6164732f776f6d656e322e6a7067, '12000', 'womens', NULL);

-- Dumping structure for table nwatch.product_reviews
CREATE TABLE IF NOT EXISTS `product_reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rating` int DEFAULT NULL,
  `comment` longtext,
  `userid` int DEFAULT NULL,
  `productid` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_product_reviews_users` (`userid`),
  CONSTRAINT `FK_product_reviews_users` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table nwatch.product_reviews: ~2 rows (approximately)
REPLACE INTO `product_reviews` (`id`, `rating`, `comment`, `userid`, `productid`) VALUES
	(4, 4, 'Good', 1, 3),
	(5, 5, 'Good Product', 1, 5);

-- Dumping structure for table nwatch.users
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'user',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table nwatch.users: ~4 rows (approximately)
REPLACE INTO `users` (`userid`, `name`, `email`, `password`, `image`, `role`) VALUES
	(1, 'Khursheed', 'khurshid@webpenter.com', 'khokhar786', 'uploads/icon-5359553_640.png', 'admin'),
	(2, 'Khursheed', 'khurshidwp@gmail.com', 'khokhar786', 'uploads/user.png', 'user'),
	(3, 'Khursheed', 'khurshid@webpenter.com', 'khokhar786W', 'uploads/Add a heading.png', 'user'),
	(4, 'Khursheed11', 'khurshidwp@gmail.com', 'khokhar786@', 'uploads/Add a heading.png', 'user');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
