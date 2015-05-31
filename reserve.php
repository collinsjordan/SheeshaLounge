<?php 
ob_start();
if (isset($_POST['submit']))
{
$ToEmail = 'greaterevl@gmail.com'; 
$EmailSubject = 'Seating Reservation'; 
$mailheader = "From: jordan@jordancollins.co"."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["name"].'<br />';
$MESSAGE_BODY .= "Phone: ".$_POST["tel"].'<br />'; 
$MESSAGE_BODY .= "Email: ".$_POST["email"].'<br />';
$MESSAGE_BODY .= "Group Size: ".$_POST["size"].'<br />';
$MESSAGE_BODY .= "Date and Time: ".$_POST["datetime"].'<br />';
$MESSAGE_BODY .= "Special Instructions: ".nl2br($_POST["special"]); 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
header("Location: thankyou.html");
}
?>
