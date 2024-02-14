<?php
$serverName = "localhost:3306";
$userName = "root";
$password = "";
$dbname = "user";

$con = new mysqli($servenName, $userName, $password, $dbname);

if(mysqli_connect_errno()){
           echo "Connection Error";
           exit();
}else{
echo "Connection Success!!";
}


?>