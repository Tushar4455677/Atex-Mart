$('document').ready(function(){
	$('.flash').hide();
	$('#submit').click(function(){
		var name = $('#name').val();
		var email = $('#email').val();
		var password = $('#password').val();
		var pattern_name_1=/^[A-Za-z' ]{1,80}$/i;
		var pattern_email=/^[a-z0-9]+@[a-z.]+.[a-z]{2,5}$/i;

		if(name=='')
		{
			var ename= "Please enter name";
			$('#errorname').text(ename).show();

			setTimeout(function(){
			$('#errorname').hide();
			},3000);
			
			$('#name').focus();
			return false;
		}
		else if(!pattern_name_1.test(name))
		{
			var vname="please enter valid name";
			$('#errorname').text(vname).show();
			setTimeout(function(){
			$('#errorname').hide();
			},3000);
		}
		else if(email=='')
		{
			var eemail= "Please enter email";
			$('#erroremail').text(eemail).show();
			setTimeout(function(){
			$('#erroremail').hide();
			},3000);
			$('#email').focus();
			return false;
		}
		else if(!pattern_email.test(email))
		{
			var vemail="please enter valid email";
			$('#erroremail').text(vemail).show();
			setTimeout(function(){
			$('#erroremail').hide();
			},3000);
		}
		else if(password=='')
		{
			var epass= "Please enter password";
			$('#errorpass').text(epass).show();
			setTimeout(function(){
			$('#errorpass').hide();
			},3000);
			$('#password').focus();
			return false;
		}

		else
		{
		$.ajax
		({
		   	type: 'POST',
			url: 'signup.php',
			data: 'name='+name+'&email='+email+'&password='+password,
			cache: false,
			success: function(returndata){
				if(returndata=='true')
				{
					window.location="login.html";
				}
				else
				{
					var m = "Email already registered";
					$('#msg').text(m).show();
					$ ('.flash').show();						
				}
			}
			
		  });	
	}
	});
});