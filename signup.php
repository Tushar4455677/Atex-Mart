<?php
require_once("includes/config.php");
$errors=array();
$users = new users;
if (isset($_POST['name'])) 
{
	$errors = $users->validate_signup();
	if(!count($errors))
	{
		$condition = "email='".$_POST['email']."'";

		$check = $users->select($users->table,'',$condition);

		if(!empty($check)) 
		{
			echo "true";exit;
		}
		else
		{
			$_POST['password']=md5($_POST['password']);
			$sql = $users->save($users->table,$_POST);
			echo "true";exit;
		}
	}
	else
	{
		echo "false";exit;
	}
}
?>