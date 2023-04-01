<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// Set up your email address
$to = "michaelOgunmain2005@gmail.com.com";

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set up email headers
$headers = "From: " . $name . " <" . $email . ">\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/html\r\n";

// Compose email body
$subject = "New message from website contact form";
$body = "<html><body>";
$body .= "<h2>" . $subject . "</h2>";
$body .= "<p><strong>Name: </strong>" . $name . "</p>";
$body .= "<p><strong>Email: </strong>" . $email . "</p>";
$body .= "<p><strong>Message: </strong>" . $message . "</p>";
$body .= "</body></html>";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for contacting us!";
} else {
    echo "Error sending message. Please try again later.";
}
}

?>