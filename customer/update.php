<?php

include "../include/connection.php";
// include "backend1.php";

session_start();
// echo $_SESSION['id'];
$sql="SELECT DISTINCT item FROM `a_items` WHERE availability = 1";
$result=mysqli_query($conn,$sql);
$option = "<option value=''>items</option>";
foreach($result as $r){
	$option .= "<option value=".$r['item'].">".$r['item']."</option>";
  // $option1 .= "<option value=".$r['category'].">".$r['category']."</option>";
}
// if(isset($_POST['submit'])){

//       $id=$_SESSION['id'];
//       $item=$_POST['item'];
//       $category=['select'];
//       // echo $category; die;
//       $desc=$_POST['description'];
//       $quantity=$_POST['quantity'];
    

//     echo $sql="INSERT INTO `view_orders`(userid,item,category,description,quantity)VALUES('$id','$item','$category','$desc',$quantity)";
//     $result=mysqli_query($conn,$sql);
// }
echo "<html>
            <head>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
            <script src='ajax.js'></script>

            
            <title>form</title>
            </head>
            <body>
            <form method='POST' action=''>
        
            <label for='item'>ITEM</label>
             <select id='item' name='item'><br>
             <option value=".$option."</option></select><br><br>
              
              <div id='as'>
              CATEGORY<select name='category'><br>
              <option value=''</option></select><br><br>

              </div>

              

               </select><br><br><br>
               <label for='desc'>DESCRIPTION</label>
               <textarea name='description' id='desc' rows='4' cols='20'></textarea><br>
             QUANTITY<input type='number' name='quantity' id='quantity'><br>  
             BUY ITEMS<input type='submit' id='getitems' name='submit' value='buy items'> <br>
             </form>
             <button><a href='order.php'>view order</a></button>
            </body>
                  </html>";
             ?>
                 <!-- <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
                     
                      
                        $(document).ready(function () {
                          $("#item").on ("click",function () {
                            var category = $("#category").val(); 

                              $.ajax({
                                url:"backend1.php",
                                type:"POST",
                                data:{
                                  category : category
                                      },
                                success:function(result){
                                   response= JSON.parse(result);alert(response.category);
                                                        
                                  $('#category').append(`<option value="5">
                                  response.category
                                  </option>`);
                                
                                      }
                                      });        
                                    });           
                                  });
