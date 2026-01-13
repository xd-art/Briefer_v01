<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/mail.css">
    <link rel="icon" href="/images/briefer-icon.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Briefer: Send mail</title>
</head>

<body>

    <div class="container-grid-brief">

        <?php
        include '../blocks/navigation.php';
        ?>

        <div class="brief">

            <article>
                <h1>Hello <br> Professional</h1>

                <hr class="brief--hr">

                <p>
                    <b>Are you an expert in your field?</b> Share your knowledge and experience on our site, and be recognized as a professional in your industry. Simply tell us about yourself and leave a link to your resources to attract new clients. Your copyright will always be respected on our website upon request.
                    <br><br>
                    <b>Professional writer?</b> You can sell your articles for $50 per 1000 words in appropriate categories such as video, graphic, programming, marketing, or audio. Send us a letter with some samples of your best work, and we'll get in touch with you. Don't miss the opportunity to contribute to our site and expand your reach. Thank you!
                    <br><br>Thank you!
                </p>
            </article>

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
                        $successMessage = 'Message has been sent successfully!';
                    } catch (Exception $e) {
                        $errorMessage = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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

                <textarea name="message" cols="30" rows="10" placeholder="Write message" required minlength="10"></textarea>

                <div>
                    <br>
                    <button type="submit" class="blue-button">
                        <span class="material-icons">mail</span> Send mail
                    </button>
                </div>
            </form>

        </div>

        <div class="side">
            <div class="side__content">
                <?php include '../blocks/side.php'; ?>
            </div>
        </div>

        <?php include '../blocks/footer.php'; ?>
    </div>

</body>

</html>











<!-- 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/mail.css">
    <link rel="icon" href="/images/briefer-icon.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Briefer: Send mail</title>
</head>

<body>

    <div class="container-grid-brief">

        <?php
        include '../blocks/navigation.php';
        ?>

        <div class="brief">

            <article>
                <h1>Hello dear <br> professional</h1>

                <hr class="brief--hr">

                <p>

                    <b> Are you an expert in your field? </b> Share your knowledge and experience on our site, and be recognized as a professional in your industry. Simply tell us about yourself and leave a link to your resources to attract new clients. Your copyright will always be respected on our website upon request.

<br><br>

                    <b> Professional writer?</b> You can sell your articles for $50 per 1000 words in appropriate categories such as video, graphic, programming, marketing, or audio. Send us a letter with some samples of your best work, and we'll get in touch with you. Don't miss the opportunity to contribute to our site and expand your reach. Thank you!
                    
                    
                    <br> <br> Thank you!

                </p>

            </article>


            
            <p class="--gray">Email and message are requared fields. Message should be more than 10 characters </p>



            <form action="check.php" method="post" class="container-mail">


                <div>
                    <input type="email" name="email" placeholder="Enter your e-mail">
                </div>

                <br>

                <textarea name="message" id="" cols="30" rows="10" placeholder="Write message"></textarea>
                <div>
                    <br>
                    <button onclick="location.href='#'" type="submit" name="send" class="blue-button">

                        <span class="material-icons">mail</span>
                        Send mail
                    </button>
                </div>


            </form>


        </div>



        <div class="side">



            <div class="side__content">

                <?php
                include '../blocks/side.php';
                ?>

            </div>
        </div>

        <?php
        include '../blocks/footer.php';
        ?>

    </div>



</body>

</html> -->