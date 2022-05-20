<?php
include ("../include/connection.php");

session_start();
// echo $_SESSION['name'];
// if($_SESSION['role']!="2"){
//     header("Location:../form/login.php");
// }
     
$sql = "SELECT * FROM `user` WHERE `role`!='1' AND `id`= '$_SESSION[id]'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
// echo "<pre>";
// print_r($row);


echo "<html>
            <head>
            <title>form</title>
            </head>
            <body>
            <center>
            <h1>WELCOME "; echo $_SESSION['name']; echo " as customer !</h1>
                <table border='2'>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>CONTACT</th>
                        <th>PASSWORD</th>
                        <th>ROLE</th>
                        <th>order items</th>
                    </tr>
                     <tr> ";
                          
                         echo "<td>";echo $row['id'];echo"</td>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['contact']."</td>
                        <td>".$row['password']."</td>
                        <td>";if($row['role']==1){
                                echo "admin";"</td>";
                                   }
                               elseif($row['role']==2){
                                echo "customer";"</td>";
                                   }
                                echo "</td>
                                <td> <button><a href='update.php'>order items</a></button></td>
                                 </tr>";
                                 
                 echo "</table>
                 <button><a href='../form/logout.php'>logout</a></button>
                 <button><a href='backend.php?b_id="; echo $row['id']; echo "'>change password</a></button>
                 </center>
             </body>
        </html>";
?> 