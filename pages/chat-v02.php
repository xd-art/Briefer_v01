<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="icon" href="/images/briefer-icon.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Briefer: Send mail</title>



    <style>
        ::selection {
            color: white;
            background: #2962ff;
        }

        * {
            font-family: 'Roboto', sans-serif;
        }

        .container-mail {
            display: flex;
            flex-direction: column;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
        }

        #chat-container {
            width: 400px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        #chat-box {
            flex-grow: 1;
            padding: 10px;
            overflow-y: auto;
            border-bottom: 1px solid #ccc;
        }

        .message {
            margin: 5px 0;
            padding: 8px;
            border-radius: 4px;
        }

        .user-message {
            background-color: #d1e7dd;
            text-align: right;
        }

        .bot-message {
            background-color: #f8d7da;
        }

        #input-container {
            display: flex;
            border-top: 1px solid #ccc;
        }

        #user-input {
            flex-grow: 1;
            padding: 10px;
            border: none;
            border-right: 1px solid #ccc;
            font-size: 16px;
        }

        textarea:focus,
        input:focus {
            outline: 1px solid #2962ff;
        }

        button {
            padding: 10px;
            background-color: #2962ff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
        }
    </style>



<script src="/js/chat_v02.js"></script>

</head>

<body>

    <div class="container-grid-brief">

        <?php
        include '../blocks/navigation.php';
        ?>





        <div class="container-mail">

           <img style=""  class="logo" src="/images/briefer-logo.svg" alt=""></img>
            <div id="chat-container">

         
                <div id="chat-box">





                </div>
                <div id="input-container">
                    <input type="text" id="user-input" placeholder="Type a message..." />
                    <button onclick="sendMessage()">Send</button>
                </div>
            </div>
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




</html>