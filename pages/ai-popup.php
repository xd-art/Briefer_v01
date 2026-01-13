<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/mail.css">
    <link rel="icon" href="/images/briefer-icon.svg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Briefer: AI agent </title>
</head>

<body>




 <h3 style="font-family: 'PT Sans', sans-serif;letter-spacing: 5px;" >AI AGENT <b style="letter-spacing: 1px;" class="--gray">v0.04 </b> </h3>
    
 <p>To update articles on the website, please provide valid information, and the changes will be made.</p>
 
 <p class="--gray">Email and message are required fields. Message should be more than 10 characters.</p>

<?php
// PHPMailer section starts here
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Adjust if needed for Composer

$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Basic validation
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($message) > 10) {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);
        
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.titan.email';         // Specify SMTP server (replace with actual)
            $mail->SMTPAuth   = true;
            $mail->Username   = 'hello@briefer.pro';    // Your SMTP username (replace with actual)
            $mail->Password   = 'YOUR_SMTP_PASSWORD';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;


         

            // Recipients
            $mail->setFrom('hello@briefer.pro', 'Your Website');  // Set sender email
            $mail->addAddress('hello@briefer.pro', 'Recipient Name'); // Add recipient's email

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New message from website contact form';
            $mail->Body    = "You have received a new message from: <b>$email</b><br><br>Message:<br>$message";
            $mail->AltBody = "You have received a new message from: $email\n\nMessage:\n$message";

            // Send the email
            $mail->send();
            $successMessage = 'Prompt has been sent successfully!';
        } catch (Exception $e) {
            $errorMessage = "Prompt could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $errorMessage = 'Invalid email or message. Please ensure the email is valid and the message is longer than 10 characters.';
    }
}
?>

<!-- Display success or error message -->
<?php if ($successMessage): ?>
    <p   style="color: #2962ff;"><?php echo $successMessage; ?></p>
<?php elseif ($errorMessage): ?>
    <p  style="color: red;"><?php echo $errorMessage; ?></p>
<?php endif; ?>

<form method="post" class="container-mail">
    <div>
        <input type="email" name="email" placeholder="Enter your e-mail" required>
    </div>

    <br>

    <textarea style=" resize: vertical;  height: 150px;" name="message" cols="30" rows="10" placeholder="Write message" required minlength="10"></textarea>

    <div>
        <br>
        <button type="submit" class="blue-button">
            <span class="material-icons">send</span> Send prompt
        </button>
    </div>
</form>





</body>

</html>