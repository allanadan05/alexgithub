
<?php

WARNING: ALL VARIABLE FOR CODES ARE WRITTEN IN CAPITAL LETTER EXCEPT FROM ID WHICH IS SMALL LETTER. VICE VERSA TO THE VARIABLES IN DATABASE.

$db='alexsteeldb';
 

-------------------------------------- 
create DATABASE alexsteeldb;
--------------------------------------



Table: myaccounttbl
-------------------------------------- 

--------------------------------------

$id=$_POST['ID'];
$USERTYPE=$_POST['usertype'];
$MYACCOUNTID=$_POST['myaccountID'];
$FIRSTNAME=$_POST['firstname'];
$LASTNAME=$_POST['lastname'];
$COMPANY=$_POST['company'];
$TIN=$_POST['tin'];
$BIRTHMONTH=$_POST['birthmonth'];
$BIRTHDAY=$_POST['birthday'];
$BIRTHYEAR=$_POST['birthyear'];
$GENDER=$_POST['gender'];
$IMAGE=$_POST['image'];
$HOUSENO=$_POST['houseno'];
$BARANGAY=$_POST['barangay'];
$MUNICIPAL=$_POST['municipal'];
$PROVINCE=$_POST['province'];
$ZIPCODE=$_POST['zipcode'];
$MOBILENO=$_POST['mobileno'];
$EMAIL=$_POST['email'];
$USERNAME=$_POST['username'];
$PASSWORD=$_POST['password'];


<form>

<label> FIRSTNAME: </label>
<input type="text" name="firstname"><br />

<label> LASTNAME: </label>
<input type="text" name="lastname"><br /> 

<label> COMPANY: </label>
<input type="text" name="company"><br />

<label> TIN: </label>
<input type="text" name="tin"><br />

<label> BIRTHMONTH: </label>
<input type="text" name="birthmonth"><br />

<label> BIRTHDAY: </label>
<input type="number" name="birthday" min="1" max="31" ><br />

<label> BIRTHYEAR: </label>
<input type="text" name="birthyear"><br />

<label> GENDER: </label>
<input type="text" name="gender"><br />

<label> IMAGE: </label>
<input type="text" name="image"><br />

<label> HOUSENO: </label>
<input type="text" name="houseno"><br />

<label> BARANGAY: </label>
<input type="text" name="barangay"><br />

<label> MUNICIPAL: </label>
<input type="text" name="municipal"><br />

<label> PROVINCE: </label>
<input type="text" name="province"><br />

<label> ZIPCODE: </label>
<input type="text" name="zipcode"><br />

<label> MOBILENO: </label>
<input type="text" name="mobileno"><br />

<label> EMAIL: </label>
<input type="text" name="email"><br />

<label> USERNAME: </label>
<input type="text" name="username"><br />

<label> PASSWORD: </label>
<input type="text" name="password"><br />
</form>

SELECT * FROM `myaccounttbl`

INSERT INTO `myaccounttbl`(`ID`, `usertype`, `myaccountID`, `firstname`, `lastname`, `company`, `tin`, `birthmonth`, `birthday`, `birthyear`, `image`, `houseno`, `barangay`, `municipal`, `province`, `zipcode`, `mobileno`, `email`, `username`, `password`) 
    VALUES ( , , , , , , , , , , , , , , , , , , ,  );

UPDATE `myaccounttbl` SET `ID`=[value-1],`usertype`=[value-2],`myaccountID`=[value-3],`firstname`=[value-4],`lastname`=[value-5],`company`=[value-6],`tin`=[value-7],`birthmonth`=[value-8],`birthday`=[value-9],`birthyear`=[value-10],`image`=[value-11],`houseno`=[value-12],`barangay`=[value-13],`municipal`=[value-14],`province`=[value-15],`zipcode`=[value-16],`mobileno`=[value-17],`email`=[value-18],`username`=[value-19],`password`=[value-20] WHERE 1

DELETE FROM `myaccounttbl` WHERE 1

_____________________________________________________________________





Table: myaccountpurchases
-------------------------------------- 
CREATE TABLE `alexsteeldb`.`myaccountpurchases` ( `ID` INT NOT NULL AUTO_INCREMENT , `myaccountID` VARCHAR(100) NOT NULL , `invoiceno` VARCHAR(100) NOT NULL , `accesscode` VARCHAR(100) NOT NULL , `totalamount` DOUBLE NOT NULL , `datepurchased` DATE NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
--------------------------------------

$id=$_POST['ID'];
$MYACCOUNTID=$_POST['myaccountID'];
$INVOICENO=$_POST['invoiceno'];
$ACCESSCODE=$_POST['accesscode'];
$TOTALAMOUNT=$_POST['totalamount'];
$DATEPURCHASED=$_POST['datepurchased'];


SELECT * FROM `myaccountpurchases`

INSERT INTO `myaccountpurchases`(`ID`, `myaccountID`, `invoiceno`, `accesscode`, `totalamount`, `datepurchased`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])

UPDATE `myaccountpurchases` SET `ID`=[value-1],`myaccountID`=[value-2],`invoiceno`=[value-3],`accesscode`=[value-4],`totalamount`=[value-5],`datepurchased`=[value-6] WHERE 1

DELETE FROM `myaccountpurchases` WHERE 1
____________________________________________________________________________________




Table: myaccountnotifications
-------------------------------------- 
CREATE TABLE `alexsteeldb`.`myaccountnotifications` ( `ID` INT NOT NULL AUTO_INCREMENT , `myaccountID` VARCHAR(100) NOT NULL , `datenotification` DATE NOT NULL , `messagenotification` TEXT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
--------------------------------------

$id=$_POST['ID'];
$MYACCOUNTID=$_POST['myaccountID'];
$DATENOTIFICATION=$_POST['datenotification'];
$MESSAGENOTIFICATION=$_POST['messagenotification'];

SELECT * FROM `myaccountnotifications`

INSERT INTO `myaccountnotifications`(`ID`, `myaccountID`, `datenotification`, `messagenotification`) VALUES ([value-1],[value-2],[value-3],[value-4])

UPDATE `myaccountnotifications` SET `ID`=[value-1],`myaccountID`=[value-2],`datenotification`=[value-3],`messagenotification`=[value-4] WHERE 1

DELETE FROM `myaccountnotifications` WHERE 1
____________________________________________________________________________________




Table: myaccountbalances
-------------------------------------- 
CREATE TABLE `alexsteeldb`.`myaccountbalances` ( `ID` INT NOT NULL AUTO_INCREMENT , `myaccountID` VARCHAR(100) NOT NULL , `totalamount` DOUBLE NOT NULL , `datebalance` DATE NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
--------------------------------------

$id=$_POST['ID'];
$MYACCOUNTID=$_POST['myaccountID'];
$TOTALAMOUNT=$_POST['totalamount'];
$DATEBALANCE=$_POST['datebalance'];

SELECT * FROM `myaccountbalances`

INSERT INTO `myaccountbalances`(`ID`, `myaccountID`, `totalamount`, `datebalance`) VALUES ([value-1],[value-2],[value-3],[value-4])

UPDATE `myaccountbalances` SET `ID`=[value-1],`myaccountID`=[value-2],`totalamount`=[value-3],`datebalance`=[value-4] WHERE 1

DELETE FROM `myaccountbalances` WHERE 1

____________________________________________________________________________________




Table: productstbl
-------------------------------------- 
CREATE TABLE `alexsteeldb`.`productstbl` ( `ID` INT NOT NULL AUTO_INCREMENT , `productID` VARCHAR(100) NOT NULL , `productname` VARCHAR(100) NOT NULL , `category` VARCHAR(100) NOT NULL , `image` VARCHAR(150) NOT NULL , `principalprice` DOUBLE NOT NULL , `sellingprice` DOUBLE NOT NULL , `instock` INT NOT NULL , `description` TEXT NOT NULL , `details` TEXT NOT NULL , `additionalinfo` TEXT NOT NULL , `availablein` TEXT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
--------------------------------------

$id=$_POST['ID'];
$PRODUCTID=$_POST['productID'];
$PRODUCTNAME=$_POST['productname'];
$CATEGORY=$_POST['category'];
$IMAGE=$_POST['image'];
$PRINCIPALPRICE=$_POST['principalprice'];
$SELLINGPRICE=$_POST['sellingprice'];
$INSTOCK=$_POST['instock'];
$DESCRIPTION=$_POST['description'];
$DETAILS=$_POST['details'];
$ADDITIONALINFO=$_POST['additionalinfo'];
$AVAILABLEIN=$_POST['availablein'];

SELECT * FROM `productstbl`

INSERT INTO `productstbl`(`ID`, `productID`, `productname`, `category`, `image`, `principalprice`, `sellingprice`, `instock`, `description`, `details`, `additionalinfo`, `availablein`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])

UPDATE `productstbl` SET `ID`=[value-1],`productID`=[value-2],`productname`=[value-3],`category`=[value-4],`image`=[value-5],`principalprice`=[value-6],`sellingprice`=[value-7],`instock`=[value-8],`description`=[value-9],`details`=[value-10],`additionalinfo`=[value-11],`availablein`=[value-12] WHERE 1

DELETE FROM `productstbl` WHERE 1

____________________________________________________________________________________




Table: salestbl
-------------------------------------- 
CREATE TABLE `alexsteeldb`.`salestbl` ( `ID` INT NOT NULL AUTO_INCREMENT , `salesID` VARCHAR(100) NOT NULL , `invoiceno` VARCHAR(100) NOT NULL , `productID` VARCHAR(100) NOT NULL , `piecesold` INT NOT NULL , `date` DATE NOT NULL , `myaccountID` VARCHAR(100) NOT NULL , `address` TEXT NOT NULL , `amount` DOUBLE NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
--------------------------------------

$id=$_POST['ID'];
$SALESID=$_POST['salesID'];
$INVOICENO=$_POST['invoiceno'];
$PRODUCTID=$_POST['productID'];
$PIECESOLD=$_POST['piecesold'];
$DATE=$_POST['date'];
$MYACCOUNTID=$_POST['myaccountID'];
$ADDRESS=$_POST['address'];
$AMOUNT=$_POST['amount'];

SELECT * FROM `salestbl`

INSERT INTO `salestbl`(`ID`, `salesID`, `invoiceno`, `productID`, `piecesold`, `date`, `myaccountID`, `address`, `amount`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])

UPDATE `salestbl` SET `ID`=[value-1],`salesID`=[value-2],`invoiceno`=[value-3],`productID`=[value-4],`piecesold`=[value-5],`date`=[value-6],`myaccountID`=[value-7],`address`=[value-8],`amount`=[value-9] WHERE 1

DELETE FROM `salestbl` WHERE 1

____________________________________________________________________________________




Table: carttbl
-------------------------------------- 
CREATE TABLE `alexsteeldb`.`carttbl` ( `ID` INT NOT NULL AUTO_INCREMENT , `myaccountID` VARCHAR(100) NOT NULL , `productID` VARCHAR(100) NOT NULL , `sellingprice` DOUBLE NOT NULL , `quantity` INT NOT NULL , `total` DOUBLE NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
--------------------------------------


$id=$_POST['ID'];
$MYACCOUNTID=$_POST['myaccountID'];
$PRODUCTID=$_POST['productID'];
$SELLINGPRICE=$_POST['sellingprice'];
$QUANTITY=$_POST['quantity'];
$TOTAL=$_POST['total'];

SELECT * FROM `carttbl` WHERE 1

INSERT INTO `carttbl`(`ID`, `myaccountID`, `productID`, `sellingprice`, `quantity`, `total`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])

UPDATE `carttbl` SET `ID`=[value-1],`myaccountID`=[value-2],`productID`=[value-3],`sellingprice`=[value-4],`quantity`=[value-5],`total`=[value-6] WHERE 1

DELETE FROM `carttbl` WHERE 1

____________________________________________________________________________________




Table: wishlisttbl
-------------------------------------- 
CREATE TABLE `alexsteeldb`.`wishlisttbl` ( `ID` INT NOT NULL AUTO_INCREMENT , `myaccountID` VARCHAR(100) NOT NULL , `productID` VARCHAR(100) NOT NULL , `sellingprice` DOUBLE NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
--------------------------------------

$id=$_POST['ID'];
$MYACCOUNTID=$_POST['myaccountID'];
$PRODUCTID=$_POST['productID'];
$SELLINGPRICE=$_POST['sellingprice'];

SELECT * FROM `wishlisttbl`

INSERT INTO `wishlisttbl`(`ID`, `myaccountID`, `productID`, `sellingprice`) VALUES ([value-1],[value-2],[value-3],[value-4])

UPDATE `wishlisttbl` SET `ID`=[value-1],`myaccountID`=[value-2],`productID`=[value-3],`sellingprice`=[value-4] WHERE 1

DELETE FROM `wishlisttbl` WHERE 1

____________________________________________________________________________________




Table: invoicetbl
-------------------------------------- 
CREATE TABLE `alexsteeldb`.`invoicetbl` ( `ID` INT NOT NULL AUTO_INCREMENT , `invoiceno` VARCHAR(100) NOT NULL , `accesscode` VARCHAR(100) NOT NULL , `myaccountID` VARCHAR(100) NOT NULL , `tin` VARCHAR(20) NOT NULL , `company` VARCHAR(100) NOT NULL , `invoicedate` DATE NOT NULL , `shippingfee` DOUBLE NOT NULL , `cartinfo` TEXT NOT NULL , `amountdue` DOUBLE NOT NULL , `vat` DOUBLE NOT NULL , `totalamountdue` DOUBLE NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
--------------------------------------

$id=$_POST['ID'];
$INVOICENO=$_POST['invoiceno'];
$ACCESSCODE=$_POST['accesscode'];
$MYACCOUNTID=$_POST['myaccountID'];
$TIN=$_POST['tin'];
$COMPANY=$_POST['company'];
$INVOICEDATE=$_POST['invoicedate'];
$SHIPPINGFEE=$_POST['shippingfee'];
$CARTINFO=$_POST['cartinfo'];
$AMOUNTDUE=$_POST['amountdue'];
$VAT=$_POST['vat'];
$TOTALAMOUNTDUE=$_POST['totalamountdue'];

SELECT * FROM `invoicetbl`

INSERT INTO `invoicetbl`(`ID`, `invoiceno`, `accesscode`, `myaccountID`, `tin`, `company`, `invoicedate`, `shippingfee`, `cartinfo`, `amountdue`, `vat`, `totalamountdue`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])

UPDATE `invoicetbl` SET `ID`=[value-1],`invoiceno`=[value-2],`accesscode`=[value-3],`myaccountID`=[value-4],`tin`=[value-5],`company`=[value-6],`invoicedate`=[value-7],`shippingfee`=[value-8],`cartinfo`=[value-9],`amountdue`=[value-10],`vat`=[value-11],`totalamountdue`=[value-12] WHERE 1

DELETE FROM `invoicetbl` WHERE 1

____________________________________________________________________________________



____________________________________________________________________________________
Notes:
____________________________________________________________________________________


Syntax:		SELECT DISTINCT column_name,column_name
			FROM table_name;
Example: 	SELECT DISTINCT City FROM Customers;


Syntax:		SELECT * FROM Customers
			WHERE Country='Germany'
			AND City='Berlin';

Syntax: 	SELECT * FROM Customers
			WHERE City='Berlin'
			OR City='München';

Syntax: 	SELECT * FROM Customers
			WHERE Country='Germany'
			AND (City='Berlin' OR City='München');



Syntax:		SELECT column_name, column_name
			FROM table_name
			ORDER BY column_name ASC|DESC, column_name ASC|DESC;
Example:	SELECT * FROM Customers
			ORDER BY Country;
Example:	SELECT * FROM Customers
			ORDER BY Country DESC;

Syntax:		SELECT column_name(s)
			FROM table_name
			LIMIT number;
Example:	SELECT *
			FROM Persons
			LIMIT 5;

Syntax:		SELECT column_name(s)
			FROM table_name
			WHERE column_name LIKE pattern;	
Example:	SELECT * FROM Customers
			WHERE City LIKE 's%';
Note:		-selects all customers with a City starting with the letter "s";
			-The "%" sign is used to define wildcards (missing letters) both before and after the pattern.
Example:	SELECT * FROM Customers
			WHERE Country LIKE '%land%';
Note:		-selects all customers with a Country containing the pattern "land"
Example:	SELECT * FROM Customers
			WHERE Country NOT LIKE '%land%';
Note:		-selects all customers with Country NOT containing the pattern "land"


Syntax:		SELECT column_name(s)
			FROM table_name
			WHERE column_name BETWEEN value1 AND value2;
Example:	SELECT * FROM Products
			WHERE Price BETWEEN 10 AND 20;		


Note: Below is statement counts the number of orders from "CustomerID"=7 from the "Orders" table
			SELECT COUNT(CustomerID) AS OrdersFromCustomerID7 FROM Orders
			WHERE CustomerID=7;	

Note: Below is statement counts the total number of orders in the "Orders" table
			SELECT COUNT(*) AS NumberOfOrders FROM Orders;			

Note: Below is statement counts the total number of orders in the "Orders" table
			SELECT COUNT(DISTINCT CustomerID) AS NumberOfCustomers FROM Orders;

Note: Below is statement returns the last value of the selected column
			SELECT column_name FROM table_name
			ORDER BY column_name DESC
			LIMIT 1;

Note: Below is The GROUP BY statement is used in conjunction with the aggregate functions to group the result-set by one or more columns.
			Syntax: 
			SELECT column_name, aggregate_function(column_name)
			FROM table_name
			WHERE column_name operator value
			GROUP BY column_name;

			Example:
			SELECT Shippers.ShipperName,COUNT(Orders.OrderID) AS NumberOfOrders FROM Orders
			LEFT JOIN Shippers
			ON Orders.ShipperID=Shippers.ShipperID
			GROUP BY ShipperName;
			-statement counts as orders grouped by shippers

?>