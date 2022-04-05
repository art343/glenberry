<?php
	$name = htmlspecialchars($_POST['name']);
	$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
	$your_message = htmlspecialchars($_POST['your_message']);	
	if ($email)
		{	
			$to="cherieevans@hotmail.com";
			$subject = "Subject: Contact Form Submission from Glenn Berry Art";
			$message = "FROM: $name
Email: $email
Message: $your_message";
	
			$mailsend = mail($to, $subject, $message, $headers);
			if ($mailsend)
	  			{
		 			header("Location: http://www.art343.com/thankyou.html");
	  			}
    	}
	else
	  	{
		  	header("Location: http://www.art343.com/contact-error.html");
	  	}
	exit();
?>