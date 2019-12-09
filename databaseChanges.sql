CREATE TABLE `alexsteeldb`.`messagingtbl` () ENGINE = InnoDB;


CREATE TABLE `messagingtbl` (
  `msgid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `msgfrommyacccountID` varchar(50) NOT NULL,
  `msgtomyaccountID` varchar(50) NOT NULL,
  `messagetext` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;


CREATE TABLE `notificationstbl` (
  `notificationsid` int(11) NOT NULL,
  `notformmyaccountid` int(11) NOT NULL,
  `nottomyaccountid` int(11) NOT NULL,
  `notdate` date NOT NULL,
  `nottime` time NOT NULL,
  `notmessagetext` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;