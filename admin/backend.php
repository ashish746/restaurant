<?php

include "../include/connection.php";
session_start();
if(!isset($_SESSION['id'])){
     header ("Location:../form/login.php");
}
if(isset($_POST['submit'])){
    $e_password=$_POST['e_password'];
    $n_password=$_POST['n_password'];
    $c_password=$_POST['password'];

$sql = "SELECT `password` FROM `user` WHERE `id` = '$_SESSION[id]'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$password=$row['password'];
if($e_password==$password){
    if($n_password==$c_password){
        $sql="UPDATE `user` SET `password`='$c_password' WHERE `id` = '$_SESSION[id]'";
        $result=mysqli_query($conn,$sql);
    }
    else{
        echo "your current password did not match with confirm password";
    }
}
   else{
    echo "your password did not match with database";
} 
if(($e_password==$password) && ($n_password==$c_password)){
         header("Location:../form/logout.php");
}
}

echo "<html>
        <head>
        <title>form</title>
        </head>
        <body>
        <form method='POST'>
            
    CURRENT PASSWORD : <input type='password' id='password' name='e_password'><br> 
    NEW PASSWORD : <input type='password' id='password' name='n_password'><br>
    CONFIRM PASSWORD : <input type='password' id='password' name='password'><br>
                      <input type='submit' name='submit'></button>
           </form>
   </html>";

?>