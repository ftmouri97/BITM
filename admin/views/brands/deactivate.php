<?php
include_once($_SERVER["DOCUMENT_ROOT"]."../phpcrud/bootstrap.php");
$id = $_GET['id'];
$query = "UPDATE brands SET is_active = 0 WHERE id = :id";

$sth = $conn->prepare($query);
$sth->bindParam(':id',$id);
$result = $sth->execute();

//redirect to index page
header("location:active.php");
