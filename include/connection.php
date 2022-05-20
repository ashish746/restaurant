<?php

// this is step 1 - connection to database

$servername = "ashish.sharma";
$username = "root";
$password = "phpmyadmin";
$database = "asharma_restraunt";

$conn = mysqli_connect($servername, $username, $password, $database);

// if(!$conn){
//     echo ("not connected" . mysqli_connect_error());
// }else{
//     echo "connected";
// }

?>