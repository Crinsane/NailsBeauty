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

$title = isset($_REQUEST['title']) ? $_REQUEST['title'] : '';  // Sender's name
$request_date = customValidation($_REQUEST['date']);           // Sender's request date
$request_time = customValidation($_REQUEST['time']);           // Sender's request time
$name = customValidation($_REQUEST['name']);				           // Sender's name
$email = customValidation($_REQUEST['email']);			           // Sender's email address
$phone = customValidation($_REQUEST['phone']);			           // Sender's phone address
$service = customValidation($_REQUEST['service']);	           // Sender's phone address
$inquery = customValidation($_REQUEST['inquery']);	           // Sender's message

$subject = $name." appointment information"; 	// Email subject
$message = $title."<br/>".$name."<br/>".$phone."<br/>".$email."<br/>".$request_date." - ".$request_time."<br/>".$service."<br/>".$inquery;

if (IsNullOrEmptyString($name)) {
	echo "Please enter your name."; // invalid email address
	return false;
} else if (IsNullOrEmptyString($message)) {
	echo "Please enter your message."; // invalid email address
	return false;
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "Invalid Email Address"; // invalid email address
	return false;
} else {
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "Reply-to: ".$email."\r\n";
	$headers .= "From: ". $name ." <" . $email . ">\r\n"; // Sender's email address

	mail($to, $subject, $message, $headers);
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
?>
