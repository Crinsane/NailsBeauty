<?php

function customValidation($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function IsNullOrEmptyString($str) {
    return (!isset($str) || trim($str)==='');
}

$to = 'sumerianlab@email.com';	// Recipient's email address
$subject = 'Subscribe'; 	// Email subject

$name = customValidation($_REQUEST['newsletter_name']);				// Sender's name
$email = customValidation($_REQUEST['newsletter_email']);			// Sender's email address

// Newsletter message
$message  = "Name: ".$name ." \n";
$message .= "Email: ".$email." \n";


if (IsNullOrEmptyString($name)) {
	echo "Please enter your name."; // invalid email address
	return false;
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "Invalid Email Address"; // invalid email address
	return false;
}
else {
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "Reply-to: ".$email."\r\n";
	$headers .= "From: ". $name ." <" . $email . ">\r\n"; // Sender's email address

	mail($to, $subject, $message, $headers);
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
?>
