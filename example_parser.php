<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) ){
	$n = $_POST['n']; // HINT: use preg_replace() to filter the data
	$e = $_POST['e'];
	$s = $_POST['s'];
	$m = nl2br($_POST['m']);
	$to = "inquiries@itamionline.com";	
	$from = $e;
	$subject = 's';
	$message = '<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <p>'.$m.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>

<?
$now = date("D M j G:i:s T Y");
$toAddress = $_GET['to'];
$from = $_GET['to'];
$fromAddress = "From: $from\r\n" .
   "Reply-To: webmaster@" . $_SERVER['SERVER_NAME'] . "\r\n" .
   "X-Mailer: PHP/" . phpversion();


if ($toAddress <> ""){

	for ($i = 1; $i <= $emailCount; $i++) {
		$body = "Message from $now";
		mail($toAddress, "Test email number $i", $body, $fromAddress);
		echo "email sent!<br>";
		}
}
?>