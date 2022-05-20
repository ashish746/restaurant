<?php

include ("../include/connection.php");
// echo "sdvdv";
session_start();
// session_unset();
session_destroy();
header("Location:login.php");


?>