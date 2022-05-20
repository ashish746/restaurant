<?php

include "../include/connection.php";

echo "<!DOCTYPE html>
<html>
<body>

<form action='backend.php' method='POST'>
  <label for='name'>NAME:</label>
  <input type='text' id='name' name='name' required><br>


  <label for='as'>enter your email</label>
  <input type='email' id='as' name='email' required><br>
  <LABEL FOR='contact_number'>enter your contact number</LABEL>
  <INPUT type='password' id='contact_number' name='contact' required><br>
  <LABEL FOR='password'>enter your password</LABEL>
  <INPUT type='password' id='password' name='password' required><br>

<label for='role'>ROLE</label>
<select id='role' name='role'>
<option value='1' required>admin</option>
<option value='2' required>customer</option>
</select><br><br>

<input type='submit' name='submit' value='submit'>
<button type='button'><a href='login.php'>login</a></button>
 
</form>
    </body>
</html>";
?>