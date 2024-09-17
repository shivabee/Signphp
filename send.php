<?php

    $servername = "https://aquamarine-bertie-81.tiiny.io/";

    $con=mysqli_connect("servername", "root",'',"data");

$to = 'shivamkumarprajesh7217.com';
$subject = 'Test Email';
$message = 'Hello, this is a test email.';
$headers = 'From: shivamkumarprajesh159@gmail.com';

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully.';
} else {
    echo 'Failed to send email.';
}
?>
<?php

phpinfo();

?>
