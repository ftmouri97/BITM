<?php
include_once($_SERVER["DOCUMENT_ROOT"]."../phpcrud/bootstrap.php");
//collect the data
$id = $_POST['id'];
$name = $_POST['name'];
$link = $_POST['link'];



$query = "UPDATE `categories` SET 
`name` = :name,
`link` = :link,
`modified_at` = :modified_at 
WHERE `categories`.`id` = :id;";

//echo $query;die();

$sth = $conn->prepare($query);
$sth->bindParam(':id',$id);
$sth->bindParam(':name',$name);
$sth->bindParam(':link',$link);
$sth->bindParam(':modified_at',date('Y-m-d h:i:s',time()));
$result = $sth->execute();

//redirect to index page
header("location:index.php");
