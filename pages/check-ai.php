<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/mail.css">
    <link rel="icon" href="/images/briefer-icon.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Briefer AI agent check</title>


<!-- 

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* Высота экрана */
            text-align: center;
        }
    </style>
 -->






</head>






<body>






    <div style="" class="container">





        <?php



        // print_r($_POST)
        $email = $_POST['email'];
        $message = $_POST['message'];



        // $error = '';

        $error = '
            
            

        <div class="card ">

        <h2><span class="material-icons">mail</span>&nbsp Thank you! </h2>
        <p>The prompt was sent. AI agent will respond ASAP!</p>
        
      
        </div>
            
            ';















        if (trim($email) == '')
            $error = '
    
    
                    <div  class="card ">

                    <h2><span class="material-icons">warning</span>&nbsp   Please, write your email </h2>
                    <p>Email and message are requared fields. Message should be more than 10 characters</p>

                
                    <a href="ai-popup.php" class="--read"> Back to form</a>
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

        mail('hello@briefer.pro', $subject, $message, $headers);


        ?>




    </div>





</body>

</html>