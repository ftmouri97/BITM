<?php
include_once($_SERVER["DOCUMENT_ROOT"]."../phpcrud/bootstrap.php");


$target_file = $_FILES['picture']['tmp_name'];
$filename = time()."_".str_replace(' ','-',$_FILES['picture']['name']);
$dest_file = $_SERVER['DOCUMENT_ROOT'].'/phpcrud/uploads/'.$filename;
$is_uploaded = move_uploaded_file($target_file, $dest_file);

if($is_uploaded){
    $dest_filename = $filename;
}else{
    $dest_filename = "";
}

//collect the data

$brand = $_POST['brand'];
$category = $_POST['category'];
$title = $_POST['title'];
$mrp = $_POST['mrp'];

$is_active = 0;
if(array_key_exists('is_active',$_POST)){
    $is_active = $_POST['is_active'];
}

//prepare the insert query
//selection query
$query = "INSERT INTO `products` ( 
`brand`, 
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
  :brand, 
  :category, 
  :title, 
  :picture, 
  NULL, 
  NULL, NULL, :mrp, NULL, NULL, NULL, :is_active, NULL, NULL, :created_at, :modified_at);";

$sth = $conn->prepare($query);
$sth->bindParam(':brand',$brand);
$sth->bindParam(':category',$category);
$sth->bindParam(':title',$title);
$sth->bindParam(':mrp',$mrp);
$sth->bindParam(':picture',$filename);
$sth->bindParam(':is_active',$is_active);
$sth->bindParam(':created_at',date('Y-m-d h:i:s',time()));
$sth->bindParam(':modified_at',date('Y-m-d h:i:s',time()));
$result = $sth->execute();


//redirect to index page
header("location:index.php");
