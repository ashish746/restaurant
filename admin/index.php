<?php
include ("../include/connection.php");

session_start();

if(isset($_POST['submit'])){ 

     $item=$_POST['item'];
      $category=$_POST['category'];
      $price=$_POST['price'];
      $availability=$_POST['availability']; 

 $sql="INSERT INTO `a_items` (item,category,price,availability) VALUES ('$item','$category','$price','$availability')";
 $result=mysqli_query($conn,$sql);

}
echo "<html>
            <head>
            <title>form</title>
            </head>
            <body>
            
            <h1>WELCOME "; echo $_SESSION['name']; echo " as admin !</h1>

            <form method='POST' action=''>

            <label for='name'>ITEM</label>
            <input type='text' name='item' id='item'><br><br>
            
              
             <label for='category'>CATEGORY</label>
             <select id='category' name='category'>
             <option value='onion pizza'>onion pizza</option>
             <option value='capsicum'>capsicum pizza</option>
             <option value='spicy'>spicy</option>
             <option value='cheese pizza'>cheese pizza</option>
             <option value='crunchy'>crunchy</option>
             <option value='rava dosa'>rava dosa</option>
             <option value='plain dosa'>plain dosa</option>
             <option value='masala dosa'>masala dosa</option>
             <option value='cappuccino'>cappuccino</option>
             <option value='latte'>latte</option>


             </select><br><br>
             <label for='price'>PRICE</label>
             <input type='number' name='price'><br>
             <label for='avail'>availability</label>
             <input type='checkbox' id='avail' name='availability' value='1'><br>
             <label for='avail'>not available</label>
             <input type='checkbox' id='avail' name='availability' value='2'><br>
                
                 
                  <input type='submit' name='submit'>
             </body>
        </html>";



?> 