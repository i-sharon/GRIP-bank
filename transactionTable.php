<?php
$db=mysqli_connect("localhost","root","","bank");

$tab="CREATE TABLE transaction(Transaction_id VARCHAR(255) NOT NULL PRIMARY KEY,Sacc_id VARCHAR(255),
Sname VARCHAR(255),Racc_id VARCHAR(255),Rname VARCHAR(255),Amount VARCHAR(255),Date TIMESTAMP)";
mysqli_query($db,$tab);


?>
