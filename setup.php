<?php

include("DBConn.php");

/* USERS */

$sql="CREATE TABLE IF NOT EXISTS tblUser(

userID INT AUTO_INCREMENT PRIMARY KEY,

name VARCHAR(50),

surname VARCHAR(50),

email VARCHAR(100),

password VARCHAR(255),

role VARCHAR(20),

status VARCHAR(20)

)";

mysqli_query($conn,$sql);


/* ADMIN */

$sql="CREATE TABLE IF NOT EXISTS tblAdmin(

adminID INT AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(50),

password VARCHAR(255)

)";

mysqli_query($conn,$sql);


/* CLOTHES */

$sql="CREATE TABLE IF NOT EXISTS tblClothes(

clothesID INT AUTO_INCREMENT PRIMARY KEY,

sellerID INT,

brand VARCHAR(100),

clothesName VARCHAR(100),

description TEXT,

price DECIMAL(10,2),

image VARCHAR(255),

category VARCHAR(100),

conditionType VARCHAR(100),

status VARCHAR(20)

)";

mysqli_query($conn,$sql);


/* SELL REQUEST */

$sql="CREATE TABLE IF NOT EXISTS tblSellRequest(

requestID INT AUTO_INCREMENT PRIMARY KEY,

sellerID INT,

requestDate DATE,

status VARCHAR(20)

)";

mysqli_query($conn,$sql);


/* CART */

$sql="CREATE TABLE IF NOT EXISTS tblCart(

cartID INT AUTO_INCREMENT PRIMARY KEY,

userID INT

)";

mysqli_query($conn,$sql);


/* CART ITEMS */

$sql="CREATE TABLE IF NOT EXISTS tblCartItem(

itemID INT AUTO_INCREMENT PRIMARY KEY,

cartID INT,

clothesID INT,

quantity INT

)";

mysqli_query($conn,$sql);


/* ORDERS */

$sql="CREATE TABLE IF NOT EXISTS tblOrder(

orderID INT AUTO_INCREMENT PRIMARY KEY,

userID INT,

orderDate DATE,

total DECIMAL(10,2)

)";

mysqli_query($conn,$sql);


/* ORDER ITEMS */

$sql="CREATE TABLE IF NOT EXISTS tblOrderItem(

orderItemID INT AUTO_INCREMENT PRIMARY KEY,

orderID INT,

clothesID INT,

quantity INT

)";

mysqli_query($conn,$sql);


/* MESSAGES */

$sql="CREATE TABLE IF NOT EXISTS tblMessage(

messageID INT AUTO_INCREMENT PRIMARY KEY,

sender VARCHAR(100),

receiver VARCHAR(100),

subject VARCHAR(100),

message TEXT,

messageDate DATE

)";

mysqli_query($conn,$sql);


/* DEFAULT ADMIN */

$pass=password_hash("admin123",PASSWORD_DEFAULT);

$check=mysqli_query($conn,"SELECT * FROM tblAdmin");

if(mysqli_num_rows($check)==0)
{
mysqli_query($conn,"INSERT INTO tblAdmin(username,password)

VALUES('admin','$pass')");
}

echo "<h2>Fashion Reborn Database Created Successfully</h2>";

?>