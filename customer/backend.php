<?php

include "../include/connection.php";

$id=$_GET['b_id'];
$sql = "SELECT `password` FROM `user` WHERE `id` = '$id'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);
 $password=$row['password'];

if(isset($_POST['submit'])){
   $e_password=$_POST['e_password'];
   $n_password=$_POST['n_password'];
   $c_password=$_POST['password'];
  
   if($password==$e_password && $n_password==$c_password){
       $sql="UPDATE `user` SET `password`='$c_password' WHERE `id` = '$id'";
       $result=mysqli_query($conn,$sql);
   }
   else{
       echo "credentials don't match";
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
                      <input type='submit' name='submit'>submit</button>
           </form>
   </html>";

?>