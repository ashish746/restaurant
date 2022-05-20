<?php
include "../include/connection.php";
session_start();
$id=$_SESSION['id'];

$sql="SELECT * FROM `view_orders` WHERE `userid` = $id";
$result=mysqli_query($conn,$sql);
// $row=mysqli_fetch_assoc($result);
// print_r($row);
// print_r ($r['description']);
echo"<html>
        <head>
            <title>
                </title>

        <body>
            <table border='1px solid black' cellspacing='0px'>
                <tr>
                    <th>ID</th>
                    <th>USERID</th>
                    <th>ITEM</th>
                    <th>CATEGORY</th>
                    <th>DESCRIPTION</th>
                    <th>QUANTITY</th>
                </tr>";
                foreach($result as $r){
               echo "<tr>";
                       

                    echo "<td>"; echo $r['id']; echo"</td>
                          <td>"; echo $r['userid'];echo "</td>
                          <td>"; echo $r['item'];echo "</td>
                          <td>"; echo $r['category'];echo "</td>
                          <td>"; echo $r['description'];echo "</td>
                          <td>"; echo $r['quantity'];echo "</td>
                </tr>";
                        }
           echo "</table>
        </body>
    </html>";
                  












?>