<?php

include ("../include/connection.php");

session_start();
if(isset($_SESSION['name'])  && $_SESSION['role']=='1'){
    header("Location:../admin/index.php");
}

elseif(isset($_SESSION['name']) && $_SESSION['role']=='2'){
    header("Location:../customer/index.php");
}

else{
if(isset($_POST['submit'])){
     $loginemail=$_POST['email'];
    $loginpassword=$_POST['password'];


$sql = "SELECT * FROM `user` WHERE `email` = '$loginemail' AND `password` = '$loginpassword'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);
// echo $name=$row['name'];
    if($row){
        $_SESSION['name']=$row['name'];
            $_SESSION['id']=$row['id'];
            $_SESSION['role']=$row['role'];
        if($row['role']=="1"){
            
            header('Location:../admin/index.php');
        }
        if($row['role']=="2"){
            
            header('Location:../customer/index.php'); 
        }
        
    }
    else{
        echo "something went wrong";
        // header("Location:login.php");
    }
    }
    
}

echo "<html>
    <head>
        <title>
            login form
        </title>
    </head>
    <body>
          <form method='post'>
          <label for='as'>enter your email</label>
          <input type='email' id='as' name='email'><br>
          <LABEL FOR='contact_number'>ENTER YOUR PASSWORD</LABEL>
          <INPUT type='password' id='contact_number' name='password'><br>
          LOGIN 
          <input type='submit' name='submit' value='login'><br>
          <button type='button' value='BACK'><a href='index.php'</a>BACK</button>
    </body>
</html>";
?>


