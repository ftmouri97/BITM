<?php
//collect the data
$id = $_GET['id'];

//connect to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "phpcrud";

//connecting to database
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "DELETE FROM `wearelazies` WHERE `wearelazies`.`id` = :id;";

$sth = $conn->prepare($query);
$sth->bindParam(':id',$id);
$result = $sth->execute();

//redirect to index page
header("location:index.php");
