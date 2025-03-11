
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'vendor/autoload.php'; // If installed via Composer
// require 'PHPMailer/src/PHPMailer.php'; // If manually installed
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Create instance of PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP server (e.g., Gmail, Outlook, Yahoo)
        $mail->SMTPAuth = true;
        $mail->Username = 'mstrupthi@gmail.com'; // Your email
        $mail->Password = 'zdvy lkog rhpw tjiv'; // Your email password or app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // 465 for SSL, 587 for TLS

        // Sender and Recipient
        $mail->setFrom($email, $name);
        $mail->addAddress('mstrupthi@gmail.com', 'Trupthi'); 

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission: $service";
        $mail->Body = "
            <h3>Contact Details</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Service Interested In:</strong> $service</p>
            <p><strong>Message:</strong> $message</p>
        ";

        // Send Email
        if ($mail->send()) {
            echo 'Message sent successfully!';
        } else {
            echo 'Error sending message.';
        }
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid Request!";
}
?>