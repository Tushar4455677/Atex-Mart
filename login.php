<?php
require_once('includes/config.php');
$errors = array();
$users = new users;
if(isset($_POST['email']))
{
	$errors = $users->validate_login();
	 if(!count($errors))
	 {
	 	$condition = "email='".$_POST['email']."' and password='".md5($_POST['password'])."'";
	 	$check = $users->select($users->table,'',$condition);

	 	if(!empty($check))
	 	{
	 		$_SESSION['Auth'] = $check[0];
			unset($check[0]['password']);
			echo "true";exit;	
	 	}
	 	else
   	  	{
			echo "false";exit;
   	  	}
	 }
}
?>