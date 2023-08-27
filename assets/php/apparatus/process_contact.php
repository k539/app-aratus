<?php
$name = $_POST['name'];
$company = $_POST['company'];
$address = $_POST['address'];
$country = $_POST['country'];
$web = $_POST['web'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$cellular_phone = $_POST['cellular_phone'];
$budget = $_POST['budget'];
$start = $_POST['start'];
$verification = $_POST['verification'];
$body = $_POST['body'];
$from_browser = $_POST['from_browser'];
$from_ip = $_POST['from_ip'];

$mail_header  = "From: $email \r\n";

if ($verification == "run" || $verification == "RUN" || $verification == "run." || $verification == "RUN." ) {

    $the_message = "\r\n\r\n\r\nName:           $name                   \r\nCompany:        $company                \r\nAddress:        $address           \r\nCountry:        $country                \r\nWeb:            $web                    \r\nEmail:          $email                  \r\nPhone:          $phone                  \r\nCellular:       $cellular_phone         \r\nBudget:         $budget         \r\nStart:          $start    \r\nVerification:   $verification           \r\nBody:           $body                   \r\nFrom Browser    $from_browser           \r\nFrom IP:        $from_ip                \r\n";

    mail("ms@app-aratus.com", "Component contact", $the_message, $mail_header) or die("Error!");

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Thank you.";
    echo "<br>";
    echo "<br>";
    echo "<br>";
	echo "<a class=s href='http://www.app-aratus.com'>Return To The App-aratus Website</a>";
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






/*
echo "name  $name";
echo "<br>";
echo "company  $company";
echo "<br>";
echo "address  $address";
echo "<br>";
echo "city  $city";
echo "<br>";
echo "state  $state";
echo "<br>";
echo "country  $country";
echo "<br>";
echo "web  $web";
echo "<br>";
echo "email  $email";
echo "<br>";
echo "phone  $phone";
echo "<br>";
echo "cellular_phone  $cellular_phone";
echo "<br>";
echo "fax  $fax";
echo "<br>";
echo "verification  $verification";
echo "<br>";
echo "body  $body";
echo "<br>";
echo "from_browser  $from_browser";
echo "<br>";
echo "from_ip  $from_ip";
echo "<br>";
*/

?>
