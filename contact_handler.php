<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php

// Include PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Function to send email using PHPMailer
function smtp_mailer($to, $subject, $msg) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'snupur604@gmail.com';
        $mail->Password = 'tqayxbwymtdsasgc'; // Make sure to use app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('snupur604@gmail.com', 'dcc');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $msg;
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        return false;
    }
}

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $firstName = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $company = htmlspecialchars(trim($_POST['company']));
    $messageContent = htmlspecialchars(trim($_POST['message']));

    // Validate the form data
    if (!empty($firstName) && !empty($phone) && !empty($email) && !empty($company) && !empty($messageContent) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare email details
        $to = "snupur604@gmail.com";
        $subject = "New Contact Form Submission from $firstName $phone";
        $emailBody = "
        <h2>Contact Form Submission</h2>
        <p><strong>First Name:</strong> $firstName</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Email:</strong> $email</p>
         <p><strong>Company:</strong> $company</p>
        <p><strong>Message:</strong><br>$messageContent</p>";

        // Send email
        if (smtp_mailer($to, $subject, $emailBody)) {
            $message = "Message submitted and sent successfully!";
        } else {
            $message = "Failed to send the message.";
        }
    } else {
        $message = "Please fill in all fields and provide a valid email address.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Submission</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        let countdown = 5;
        setInterval(function() {
            if (countdown > 0) {
                document.getElementById('counter').innerText = countdown;
                countdown--;
            } else {
                window.location.href = 'index.php'; // Redirect to the homepage after 5 seconds
            }
        }, 1000);
    </script>
</head>
<body>
<div class="container mt-5">
    <div class="alert alert-info text-center" role="alert">
        <?php echo $message; ?><br>
        Redirecting to the home page in <span id="counter">5</span> seconds.
    </div>
</div>
</body>
</html>
