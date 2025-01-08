<?php
session_name('user');
session_start();
if(!isset($_SESSION['cart']))
{
    header("Location:login.html");
    exit();
}
else{
    header("Location:index2.php");
}

?>