

<?php
// The message
$message = "This is your confirmation email. Your process will be replied within 5 business days. ";



// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");


// Send
mail($_POST["email"], 'My Subject', $message);
echo 'Message successfully sent';
?>
