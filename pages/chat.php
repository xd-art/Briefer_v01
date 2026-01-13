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





        <div id="chat-container">
            <div id="chat-history"></div>
            <form id="chat-form">
                <input type="text" id="user-input" placeholder="Type your message...">
                <button type="submit">Send</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="/js/your_chat_script.js"></script>













        <!-- 
        <div class="brief">




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


        </div> -->



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