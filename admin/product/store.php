<?php
//collect the data
$title = $_POST['title'];

//connect to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "phpcrud";

//connecting to database
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//prepare the insert query
//selection query
$query = "INSERT INTO `products` ( 
`brands`, 
`category`,
 `title`, 
 `picture`, 
 `short_description`, 
 `description`, 
 `cost`, 
 `mrp`, 
 `special_price`, 
 `is_new`, 
 `is_draft`, 
 `is_active`, 
 `total_sales`,
  `is_deleted`, 
  `created_at`, 
  `modified_at`) 
  VALUES (
  NULL, 
  NULL, 
  :title, 
  NULL, 
  NULL, 
  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";

$sth = $conn->prepare($query);
$sth->bindParam(':title',$title);
$result = $sth->execute();


//redirect to index page
header("location:index.php");
