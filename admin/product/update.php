<?php
//collect the data
$id = $_POST['id'];
$title = $_POST['title'];
//connect to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "phpcrud";

//connecting to database
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `products` SET 
`title` = :title 

WHERE `products`.`id` = :id";

$sth = $conn->prepare($query);
$sth->bindParam(':id',$id);
$sth->bindParam(':title',$title);
$result = $sth->execute();

//redirect to index page
header("location:index.php");
