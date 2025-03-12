<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'vendor/autoload.php';

header('Content-Type: application/json'); // Set response type

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs and sanitize
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'mstrupthi@gmail.com'; // Use environment variables
        $mail->Password = 'zdvy lkog rhpw tjiv'; // NEVER hardcode passwords
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

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
            echo json_encode(["success" => true, "message" => "Message sent successfully!"]);
        } else {
            echo json_encode(["success" => false, "message" => "Error sending message."]);
        }
    } catch (Exception $e) {
        echo json_encode(["success" => false, "message" => "Mailer Error: " . $mail->ErrorInfo]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request."]);
}
?>


