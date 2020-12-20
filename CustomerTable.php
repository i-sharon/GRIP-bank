<?php
$db=mysqli_connect("localhost","root","","bank");

$tab="CREATE TABLE customer(Account_id VARCHAR(255) NOT NULL PRIMARY KEY,
Name VARCHAR(255),Email VARCHAR(255),Balance VARCHAR(255),Password VARCHAR(255))";
mysqli_query($db,$tab);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('1', 'John Doe', 'john@example.com','2000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('2', 'Keerthi Kumar', 'keerthi@example.com','5000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('3', 'Nitin Kumar', 'nitin@example.com','4000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('4', 'Rani Rose', 'rani@example.com','3000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('5', 'Kiruba Raju', 'kiruba@example.com','7000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('6', 'Gopal Singh', 'gopal@example.com','6000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('7', 'Sundar Raj', 'sundar@example.com','8000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('8', 'Suresh Rajan', 'suresh@example.com','8000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('9', 'Sumit Narayan', 'sumit@example.com','8000','pass')";
mysqli_query($db,$sql);

$sql = "INSERT INTO customer (Account_id, Name,Email,Balance,Password)
VALUES ('10', 'Ashish Kumar', 'sumit@example.com','8000','pass')";
mysqli_query($db,$sql);
?>
