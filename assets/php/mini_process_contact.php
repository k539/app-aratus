<?php

$headers = array("From: from@example.com",
    "Reply-To: replyto@example.com",
    "X-Mailer: PHP/" . PHP_VERSION
);
$headers = implode("\r\n", $headers);

    mail("u571bb@gmail.com", "Registry contact", "aaa", $headers) or die("Error!");

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Thank you.";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<a class=s href='http://www.flub.com'>Return To The Website</a>";
    echo "<br>";

?>
