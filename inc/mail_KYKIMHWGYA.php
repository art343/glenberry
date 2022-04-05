<?php
	$name = htmlspecialchars($_POST['name']);
	$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
	$your_message = htmlspecialchars($_POST['your_message']);	
	if ($email)
		{	
			$to="glennberryartist@gmail.com";
			$subject = "Subject: Contact Form Submission from rickfebre.com";
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
<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>