<?php

include ("../include/connection.php");

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$role=$_POST['role'];

 

 $sql="INSERT INTO `user`(name,email,contact,password,role) VALUES ('$name','$email','$contact','$password','$role')";
 $result=mysqli_query($conn,$sql);

    // if($result){
    //     echo "data submitted";
    // }
    // else{
    //     echo "notsubmitted";
    // }
}
header("Location:index.php");



?>