<?php
$to = "bethsblog@fakeemail.com";
$from = "bethany632@example.com.au";

$headers = "From: " . $from . "rn";

$subject = "New subscription";
$body = "New user subscription: " . $_POST['email'];
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
{
if (mail($to, $subject, $body, $headers, "-f " . $from))
{
echo 'Your e-mail (' . $_POST['email'] . ') has been added to our mailing list!';
}
else
{
echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';
}
}
?>


<?php /*?>

This code was sourced from:
https://www.allwebtuts.com/simple-php-email-subscribe-form/

*/?>