<?PHP
$email = $_POST["emailaddress"];
$to = "e_neymour@outlook.com";
$subject = "You have a contact request!";
$headers = "From: $email\n";
$message = "A visitor to your site has sent the following email address and message.\n

Email Address: $email";
$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: e_neymour@outlook.com\n";
$usermessage = "Thank you for submitting your information.";
mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
?>