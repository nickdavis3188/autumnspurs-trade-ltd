
USE u652899044_autumnspurs;

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `invoiceId` int NOT NULL AUTO_INCREMENT,
  `investmentPlan` varchar(100) DEFAULT NULL,
  `currency` varchar(70) DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `userId` int DEFAULT NULL,
  `dateTime` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`invoiceId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceId`, `investmentPlan`, `currency`, `amount`, `userId`, `dateTime`, `status`) VALUES
(1, 'standard', ' USDT', 500, 1, '2023-06-30', 0),
(2, 'advanced', ' USDC', 200, 1, '1987', 0),
(3, 'standard', ' USDC', 200, 1, '2023-06-30', 1),
(4, 'nfp', ' USDC', 200, 1, '2023-06-30', 0),
(5, 'standard', ' ETH', 3000, 1, '2023-06-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `method`
--

DROP TABLE IF EXISTS `method`;
CREATE TABLE IF NOT EXISTS `method` (
  `methodId` int NOT NULL AUTO_INCREMENT,
  `qrUrl` varchar(200) DEFAULT NULL,
  `coin` varchar(100) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`methodId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `method`
--

INSERT INTO `method` (`methodId`, `qrUrl`, `coin`, `address`) VALUES
(1, 'btc-qr.jpeg', 'BTC', 'bc1q0yvqda4fzfhvupyv5y63sahq0cq0ylvk92p7sp'),
(2, 'eth-qr.jpeg', 'ETH', '0xc64C992ccCF49295B769a2B21F7b27433D0AC043'),
(3, 'usdt(erc20).jpeg', 'USDT', '0xc64C992ccCF49295B769a2B21F7b27433D0AC043'),
(4, 'usd(erc20).jpg', 'USDC', '0xc64C992ccCF49295B769a2B21F7b27433D0AC043');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) DEFAULT NULL,
  `middleName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `balance` int DEFAULT '0',
  `lastDeposit` int DEFAULT '0',
  `totalDeposited` int DEFAULT '0',
  `lastWithdrawal` int DEFAULT '0',
  `pendingWithdrawals` int DEFAULT '0',
  `totalWithdrawn` int DEFAULT '0',
  `dateSigned` varchar(100) DEFAULT NULL,
  `eth` varchar(200) DEFAULT NULL,
  `btc` varchar(200) DEFAULT NULL,
  `bnb` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `middleName`, `lastName`, `email`, `phone`, `country`, `state`, `pwd`, `balance`, `lastDeposit`, `totalDeposited`, `lastWithdrawal`, `pendingWithdrawals`, `totalWithdrawn`, `dateSigned`, `eth`, `btc`, `bnb`) VALUES
(1, 'Merry', ' Edet', 'Davis', 'merry@mail.com', '1234567', 'Nigeria', 'Rivers', 'hello22', 0, 0, 0, 0, 0, 0, '2023-06-30', '', 'fiohihergihknjkg8998446', '');
COMMIT;

