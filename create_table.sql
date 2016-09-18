CREATE TABLE distributors
(
ID int NOT NULL AUTO_INCREMENT,
Distributor varchar(30) NOT NULL default '',
Address varchar(30) NOT NULL default '',
City varchar(30) NOT NULL default '',
State varchar(2) NOT NULL default '',
Zip number(5) NOT NULL default '',
Phone_No varchar(12) NOT NULL default '',
SKU varchar(25) NOT NULL default '',
Part varchar(30) NOT NULL default '',
New_Used varchar(4) NOT NULL default '',
Price decimal(20,2) NOT NULL,
Year number(4) NOT NULL default '',
Make_model varchar(122) NOT NULL default '',
PRIMARY KEY (ID)
);