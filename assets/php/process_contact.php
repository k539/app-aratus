<?php
$your_name = $_POST['your_name'];
$company = $_POST['company'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$message_body = $_POST['message_body'];
$validation_checked = $_POST['validation_checked'];

$mail_header  = "From: $email \r\n";

/*
if ($verification == "run" || $verification == "RUN" || $verification == "run." || $verification == "RUN." ) {
*/

if ( true ) {

    $the_message = "\r\n\r\n\r\nName:           $your_name                   \r\nCompany:        $company                \r\nAddress:        $address           \r\nEmail:          $email                  \r\nPhone:          $phone                  \r\nValidation Checked:   $validation_checked           \r\nMessageBody:           $message_body                       \r\n";

    mail("u571bb@gmail.com", "Registry contact", $the_message, $mail_header) or die("Error!");

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Thank you.";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<a class=s href='http://www.flub.com'>Return To The Website</a>";
    echo "<br>";

	               
} else {
    echo "<br>";
    echo "<br>";
    echo "Sorry, you entered the wrong word in the 'Verification' field.  You should have entered the word:  ";
    echo "<br>";
    echo "run";
    echo "<br>";
    echo "<br>";
    echo "Click the 'Back' button on your browser and type in the word 'run' in the field named 'Verification', then click the 'Submit' again.";
}
?>
