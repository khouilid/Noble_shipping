<?php
	
	/*
		The Send Mail php Script for Contact Form
    */
	$email = $_POST['mail'];
	$number = $_POST['number'];
	$subject = $_POST['subject'];
	$message = $_POST['description'];


	if(empty($email)){
		header('location: ../Contact.php?er=mail');
	}elseif(empty($subject)){
		header('location: ../Contact.php?er=sub');

	}elseif(empty($message)){
		header('location: ../Contact.php?er=mes');

	}else {
		$to_email = 'abdelkbirkhouilid32@gmail.com';
        $headers = "From: ". $email ."";
		
		if (mail($to_email, $subject, $message, $headers)) {
			header('location: ../Contact.php?er=done');

			
		}
	}
	
	
	
?>