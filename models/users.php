<?php
class users extends DB
{
	var $table = "users";

	function validate_signup()
	  {
		  $errors = array();
		  
		  if(empty($_POST['name']))
			  $errors['name'] = "You must enter Name.";
		  elseif(!preg_match("#^[-A-Za-z' ]*$#",$_POST['name']))
				$errors['name'] = "Please enter valid name.";

		  if(empty($_POST['email']))
			  $errors['email'] = "You must enter Email.";
		  elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
				$errors['email'] = "Please enter valid Email Address.";

		  if(empty($_POST['password']))
			  $errors['password'] = "You must enter Password.";
		   

		  return $errors;
	  }

	  function validate_login()
	  {
		  $errors = array();
		  
		  if(empty($_POST['email']))
			  $errors['email'] = "Enter your Register Email Address.";
		  elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
				$errors['email'] = "Please enter valid Email Address.";
				
		  if(empty($_POST['password']))
			  $errors['password'] = "Enter your Password.";
		
		  return $errors;
	  }



	  function validate_password()
		{
			$errors=array();
			
			if(empty($_POST['oldpassword']))
				{
				$errors['oldpassword']= "Please enter password";
				}
			if(empty($_POST['newpassword']))
				{
				$errors['newpassword']= "Please enter new password";
				}
			if(empty($_POST['confirmpassword']))
				{
				$errors['confirmpassword']= "Please confirm password";
				}
			return $errors;
		}


		function validate_forgot()
	  {
		  $errors = array();
		  
		  if(empty($_POST['email']))
			  $errors['email'] = "Enter your Register Email Address.";
		  elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
				$errors['email'] = "Please enter valid Email Address.";

		  return $errors;
	  }
}
?>