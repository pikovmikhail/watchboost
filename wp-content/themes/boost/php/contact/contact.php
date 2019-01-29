<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="
Homepage Contact Form \n
Name: $name \n
Email: $email \n
Message: $message
";
$recipient = "support@overwatchboostpro.edu";
$subject = "OverwatchBoostPro - Home Contact Form";
$mailheader = "From: $email \r\n";
$result = wp_mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
if ($result){
    echo(json_encode('SENT'));
} else {
    echo(json_encode("NOT_SENT"));
}
?>
