<?php
	
	/*
		The Send Mail php Script for Contact Form
    */
	$email = $_POST['mail'];
	$number = $_POST['number'];
	$subject = $_POST['subject'];
	$message = $_POST['description'];

    // check if any input empty , if it is we show the user the right msg else we send the mail
	if(empty($email)){
		header('location: ../Contact.php?er=mail');
	}elseif(empty($subject)){
		header('location: ../Contact.php?er=sub');

	}elseif(empty($message)){
		header('location: ../Contact.php?er=mes');

	}else {
		$to_email = 'abdelkbirkhouilid32@gmail.com';
		$headers = "From: ". $email ."";
		// becouse number is optionel we check if the user print it 
		// if he print it we send it inside the email
		if(isset($number)){
			$message = $message .'<br> this is my number :'. $number: 
		}
		
		if (mail($to_email, $subject, $message, $headers)) {
			header('location: ../Contact.php?er=done');

			
		}
	}
	
	
	
?>