

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/mail.css">
    <link rel="icon" href="/images/briefer-icon.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Briefer v01</title>
</head>

<body>

    <div class="container-grid-brief">

        <?php
        include '../blocks/navigation.php';
        ?>

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

        <div class="brief --align-center">

            <?php
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            require 'vendor/autoload.php'; // подключение автозагрузчика Composer

            $email = $_POST['email'];
            $message = $_POST['message'];

            $error = '
            <div class="card ">
                <h2><span class="material-icons">mail</span>&nbsp Thank you!</h2>
                <p>The letter was sent. We will respond ASAP!</p>
                <a href="email.php" class="--read">Back to form</a>
            </div>
            ';

            // Проверка полей
            if (trim($email) == '')
                $error = '
                <div class="card">
                    <h2><span class="material-icons">warning</span>&nbsp Please, write your email</h2>
                    <p>Email and message are required fields. Message should be more than 10 characters</p>
                    <a href="email.php" class="--read">Back to form</a>
                </div>';
            else if (trim($message) == '')
                $error = '
                <div class="card">
                    <h2><span class="material-icons">warning</span>&nbsp Please, write message</h2>
                    <p>Email and message are required fields. Message should be more than 10 characters</p>
                    <a href="email.php" class="--read">Back to form</a>
                </div>';
            else if (strlen($message) < 10)
                $error = '
                <div class="card">
                    <h2><span class="material-icons">warning</span>&nbsp Please, write more than 10 characters</h2>
                    <p>Email and message are required fields. Message should be more than 10 characters</p>
                    <a href="email.php" class="--read">Back to form</a>
                </div>';

            if ($error != '') {
                echo $error;
                exit;
            }

            // Настройка PHPMailer
            $mail = new PHPMailer(true);

            try {
                // Настройка SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com'; // Замените на ваш SMTP-сервер
                $mail->SMTPAuth = true;
                $mail->Username = 'hello@briefer.pro'; // Ваш email
                $mail->Password = 'Ithinkthereforeiam!1'; // Ваш пароль
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // От кого письмо
                $mail->setFrom($email, 'Your Name');
                $mail->addAddress('hello@briefer.pro'); // Кому отправляется письмо

                // Настройки письма
                $mail->isHTML(true);
                $mail->Subject = 'Test Message';
                $mail->Body    = $message;
                $mail->AltBody = strip_tags($message);

                $mail->send();
                echo $error; // Вывод сообщения об успешной отправке
            } catch (Exception $e) {
                echo '
                <div class="card">
                    <h2><span class="material-icons">error</span>&nbsp Message could not be sent.</h2>
                    <p>Mailer Error: ' . $mail->ErrorInfo . '</p>
                    <a href="email.php" class="--read">Back to form</a>
                </div>';
            }
            ?>
        </div>

    </div>
</body>

</html>















<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/mail.css">
    <link rel="icon" href="/images/briefer-icon.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Briefer v01</title>
</head>

<body>

    <div class="container-grid-brief">

        <?php
        include '../blocks/navigation.php';
        ?>



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


        <div class="brief --align-center">









            
            <?php



            // print_r($_POST)
            $email = $_POST['email'];
            $message = $_POST['message'];



            // $error = '';

            $error = '
            
            

        <div class="card ">

        <h2><span class="material-icons">mail</span>&nbsp Thank you! </h2>
        <p>The letter was sent. We will respond ASAP!</p>
        
        
        <a href="email.php" class="--read"> Back to form</a>
        </div>
            
            ';















            if (trim($email) == '')
                $error = '
    
    
                    <div  class="card ">

                    <h2><span class="material-icons">warning</span>&nbsp   Please, write your email </h2>
                    <p>Email and message are requared fields. Message should be more than 10 characters</p>

                
                    <a href="email.php" class="--read"> Back to form</a>
                    </div>
    
    
                    ';

            else if (trim($message) == '')
                $error = '
                
                
                <div  class="card ">

                <h2><span class="material-icons">warning</span>&nbsp   Please, write message </h2>
                <p>Email and message are requared fields. Message should be more than 10 characters</p>

            
                <a href="email.php" class="--read"> Back to form</a>
                </div>

                
                
                ';



            else if (strlen($message) < 10)
                $error = ' 
                
                <div  class="card ">

                <h2><span class="material-icons">warning</span>&nbsp  Please, write more than 10 characters </h2>
                <p>Email and message are requared fields. Message should be more than 10 characters</p>

            
                <a href="email.php" class="--read"> Back to form</a>
                </div>
                
                
                ';






            if ($error != '') {

                echo $error;
                exit;

               
            }

            






            $subject = "=?utf-8?B?" . base64_encode("Test Message") . "?=";

            $headers = "From: $email\r\nReplay-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

            mail('hello', $subject, $message, $headers);


            ?>

        </div>




    </div>
</body>

</html> -->