<?php
session_start();

//Use the below $con command if you are deploying website using AWS RDS, EC2
$con=mysqli_connect("database-1.cpstxntzmor2.us-east-2.rds.amazonaws.com","ecom123","ecom$1234","ecom");

//Use the below command if you want to run the website on Localhost i.e., XAMPP
// $con=mysqli_connect("localhost","root","","ecom");

define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/Electronix-Website/ecom/');

//Edit the IP address (127.0.0.1) with the Public IP address of your EC2 instance
define('SITE_PATH','http://3.136.233.142/Electronix-Website/ecom/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>
