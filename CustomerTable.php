<?php
$db=mysqli_connect("localhost","root","","bank");

$tab="CREATE TABLE customer(Account_id VARCHAR(255) NOT NULL PRIMARY KEY,
Name VARCHAR(255),Email VARCHAR(255),Balance VARCHAR(255),Password VARCHAR(255))";
mysqli_query($db,$tab);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('1', 'John Doe', 'john@example.com','2000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('2', 'John Doe', 'john@example.com','2000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('3', 'John Doe', 'john@example.com','2000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('4', 'John Doe', 'john@example.com','2000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('5', 'John Doe', 'john@example.com','2000','pass')";
mysqli_query($db,$sql);

?>
