<?php

$bd = $_POST["bd"];
$pass = $_POST["pass"];
$host = $_POST["host"];
$user = $_POST["user"];

$admin = $_POST["adminPass"];


$info = array($host, $user, $pass, $bd );
$str = json_encode($info);
file_put_contents("Controllers/mobileController/config.txt", $str);
file_put_contents("Controllers/articleController/config.txt", $str);
file_put_contents("Controllers/autoController/config.txt", $str);
file_put_contents("Controllers/userController/config.txt", $str);


//$res = file_get_contents("config.txt");

$connect = new mysqli($host, $user, $pass, $bd);

mysqli_query($connect, 'CREATE TABLE `Articles`(`Title` Text, `MainText` Text, `PreviewText` Text, `Image` Text, `Date` Timestamp DEFAULT current_timestamp)');

mysqli_query($connect, 'CREATE TABLE `Admin`(`Login` Text, `Password` Text)');

mysqli_query($connect, "INSERT INTO `Admin` VALUES('root', '$admin')");


mysqli_close($connect);


unlink("install.html");
unlink("install.php");

?>
