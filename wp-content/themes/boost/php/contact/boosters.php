<?php
$name = $_POST['name'];
$pc = $_POST['pc'];
$xbox = $_POST['xbox'];
$ps4 = $_POST['ps4'];
$email = $_POST['email'];
$pc_gamertag = $_POST['pc_gamertag'];
$skype = $_POST['skype'];
$xbox_gamertag = $_POST['xbox_gamertag'];
$location = $_POST['location'];
$ps4_gamertag = $_POST['ps4_gamertag'];
$message = $_POST['message'];

$formcontent="
Boosters Contact Form \n
\n
Name: $name \n
\n
$pc \n
$xbox \n
$ps4 \n
\n
PC Gametag (If Provived): $pc_gamertag \n
Xbox Gametag (If Provived): $xbox_gamertag \n
PS4 Gametag (If Provived): $ps4_gamertag \n
\n
Email: $email \n
Skype: $skype \n
Location: $location \n
\n
Message: $message
";
$recipient = "support@overwatchboostpro.edu";
$subject = "OverwatchBoostPro - Boosters Contact Form";
$mailheader = "From: $email \r\n";
$result = mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
if ($result){
    echo(json_encode('SENT'));
} else {
    echo(json_encode("NOT_SENT"));
}
?>
