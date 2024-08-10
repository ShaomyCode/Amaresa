<?php
// Include PHPMailer autoload file
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
require 'path/to/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@gmail.com'; // Your Gmail address
    $mail->Password = 'your_password'; // Your Gmail password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; // TCP port to connect to

    // Sender and recipient settings
    $mail->setFrom('your_email@gmail.com', 'Your Name'); // Your Gmail address and your name
    $mail->addAddress('client_email@example.com', 'Client Name'); // Client's email address and name

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Subject of the Email';
    $mail->Body = 'Hi,<br><br>I accept your offering. Please go ahead to our office.<br><br>Best regards,';

    // Send email
    $mail->send();
    echo 'Email has been sent successfully!';
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
?>
