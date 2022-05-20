<?php

session_start();
include "../include/connection.php";
// include "update.php";

$action = $_POST['action'];

if($action=="cat"){
    
 $category=$_POST['item']; 
   
$sql="SELECT category,id FROM `a_items` WHERE item = '$category'";
$result=mysqli_query($conn,$sql);
// echo $cat=$result['category'];


$option='';
foreach($result as $row){
$option .= "<option value=".$row['category'].">".$row['category']."</option>";
}

echo "<label for='item' id='category' name='cat'>CATEGORY</label>
<select name='select' id='select'>". $option. "</select>";
}

if($action=="item"){
    echo "hi";
    $category=$_POST['y'];
    // if(isset($_POST['submit'])){

        $id=$_SESSION['id'];
        $item=$_POST['item'];
        $category=$_POST['y'];
        // echo $category; die;
        $desc=$_POST['desc'];
        $quantity=$_POST['quantity'];
      
	
      $sql="INSERT INTO `view_orders`(userid,item,category,description,quantity)VALUES('$id','$item','$category','$desc',$quantity)";
      $result=mysqli_query($conn,$sql);
     
  }
// }


?>
