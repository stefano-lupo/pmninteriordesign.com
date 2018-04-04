<?php 
$postArray = $_POST['posted'];
$fn= $postArray[0];
$ln = $postArray[1];
$phone = $postArray[2];
$email = $postArray[3];
$message = $postArray[4];


$to      = 'dovethesoap@hotmail.com';
$subject = 'PMNInteriorDesign Mail';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

$email= '
<html>
<head>
  <title>Website Mail</title>
</head>

<body>
<h1>Email from '.$fn.$ln.'</h1>
<h2>'.$phone.'</h2>
<h2>'.$email.'</h2>

<p>'.$message.'</p>
</body>
</html>

';

mail($to, $subject, $email, $headers);
mail("dovethesoap@hotmail.com",$email);
mail("dovethesoap@hotmail.com","hi");
?>