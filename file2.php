<?php
$username=$_POST["username"];
$password=$_POST["password"];
$host="localhost";
$database_user="root";
$database_password="";
$database="credentials";
$table="credentials1";
$conn=mysqli_connect($host,$database_user,$database_password,$database);
$query='insert into credentials1 (ID,Username,Password) values (1,"username","password");';
mysqli_query($conn,$query);
mysqli_close($conn);
?>