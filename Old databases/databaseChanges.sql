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

ALTER TABLE `myaccounttbl` CHANGE `usertype` `usertype` VARCHAR(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `myaccountID` `myaccountID` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `firstname` `firstname` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `lastname` `lastname` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `company` `company` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `tin` `tin` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `gender` `gender` VARCHAR(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `image` `image` VARCHAR(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `houseno` `houseno` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `barangay` `barangay` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `municipal` `municipal` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `province` `province` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `zipcode` `zipcode` VARCHAR(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `mobileno` `mobileno` VARCHAR(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `email` `email` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `username` `username` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `password` `password` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
