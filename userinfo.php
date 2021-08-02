<?php
$con = mysqli_connect('localhost:3306','root','');

if($con){
	echo "Connection Successful";
}else{
	echo "there was a technical error please try again";
}

mysqli_select_db($con, 'CPL');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$comment = $_POST['comment'];

$query = " insert into userinfodata (user,email,mobile,city,comment)
values ('$user','$email','$mobile','$city','$comment') ";

echo "$query";

mysqli_query($con, $query);
header('location:index.php');



?>