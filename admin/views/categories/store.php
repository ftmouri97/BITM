<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "../phpcrud/bootstrap.php");

//collect the data
$name = $_POST['name'];
$link = $_POST['link'];



//prepare the insert query
//selection query
$query = "INSERT INTO `categories` 
(
`name`, 
`link`,
`soft_delete`,
`is_draft`,
`created_at`,
`modified_at`)
VALUES (
    :name,
    :link, 
    NULL,
    NULL, 
    :created_at,
    :modified_at);";




$sth = $conn->prepare($query);
$sth->bindParam(':name',$name);
$sth->bindParam(':link',$link);
$sth->bindParam(':created_at',date('Y-m-d h:i:s',time()));
$sth->bindParam(':modified_at',date('Y-m-d h:i:s',time()));
$result = $sth->execute();


//redirect to index page
header("location:index.php");
