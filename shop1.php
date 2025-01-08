<?php
session_start();
if(!isset($_SESSION['cart']))
{
    header("Location:login.html");
    exit();
}
else{
    header("Location:index3.php");
}

?>