<!--<?php
/*
 **************************************
 *									  *
 * Config here                        *
 *									  *
 **************************************
 */

$to = 'chinmay4451@gmail.com';
$siteName = "istevesit.org";

/*
 *************************************************************
 *									                         *
 *      Don't Change below code, if you don't know php.      *
 *									                         *
 *************************************************************
 */

$name=$_POST["user_name"];
$mail = $_POST["user_email"];
$subject = "Membership";
$phn=$_POST["user_mobile"];
$class=$_POST["user_class"];
$years=$_POST["user_years"];


if (isset($name) && isset($mail) && isset($phn) && isset($class) && isset($years)) {


	//$mailSub = '[Membership] [' . $siteName . '] '.$subject;

	$body = 'Name: ' . $name . "\n\n";
	$body .= 'Mail: ' . $mail . "\n\n";
	$body .= 'Mobile: ' . $phn . "\n\n";
	$body .= 'Class: ' . $class . "\n\n";
	$body .= 'No. of Years: ' . $years . "\n\n";

	$header = 'From: ' . $mail; . "\r\n";
	$header .= 'Reply-To:  ' . $mail . "\r\n";
	$header .= 'X-Mailer: PHP/' . phpversion();

	echo mail($to, $subject, $body, $header);
	echo "hello";
}else{
	echo '0';
}
?>-->

<?php

ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

$to = "chinmay4451@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n";

mail($to,$subject,$txt,$headers);
?> 

?>
