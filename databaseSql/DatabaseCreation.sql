-- READ FIRST!
-- This file contains the commands I used to create the database on my system. 
-- Try importing the saj database before maually recreating the database

CREATE DATABASE saj;

CREATE TABLE customers (
    customerID INT(11) NOT NULL AUTO_INCREMENT,
    customerUserName VARCHAR(255) NOT NULL UNIQUE,
    customeremail VARCHAR(255) NOT NULL,
    customerPassword VARCHAR(255) NOT NULL,
    customerCreationDate DATE NOT NULL,
    PRIMARY KEY (customerID)
);
-- How to get todats date:   SELECT CAST( GETDATE() AS Date );

CREATE TABLE categories (
    categoryID INT(11) NOT NULL AUTO_INCREMENT,
    categoryName VARCHAR(255) NOT NULL,
    PRIMARY KEY (categoryID)
);

CREATE TABLE products (
    productID INT(11) NOT NULL AUTO_INCREMENT,
    categoryID INT(11) NOT NULL,
    productCode VARCHAR(10) NOT NULL UNIQUE,
    productName VARCHAR(255) NOT NULL,
    listPrice DECIMAL(10, 2) NOT NULL,
    productImageURL varChar(255) NOT NULL,
    PRIMARY KEY (productID)
);

CREATE TABLE carts (
    cartID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cartCustomerID INT(11) NOT NULL,
    cartProductID INT(11) NOT NULL,
    cartProductQuantity INT(11) NOT NULL,
    FOREIGN KEY (cartCustomerID) REFERENCES customers (customerID)
);

CREATE TABLE orders (
    orderID INT(11) NOT NULL AUTO_INCREMENT,
    customerID INT NOT NULL,
    orderProductID INT(11) NOT NULL,
    orderDate DATE NOT NULL,
    PRIMARY KEY (orderID)
);