<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/css/main.css"> -->
    <link rel="stylesheet" href="/css/main.css">

    <link rel="icon" href="/images/briefer-icon.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Briefer: donate</title>
</head>

<body>

    <div class="container-grid-brief">

        <?php
        include '../blocks/navigation.php';
        ?>

        <div class="brief">

            <article>


                <h1>Donate to Briefer</h1>
                <hr class="brief--hr">

                <br>
                <h2>Let's Make Work Better</h2>


                <p>

                    Hi, my name is <b> Danylo Khorzhevskyi.</b>
                    <br>
                    I am the webmaster of Briefer website and welcome donations and suggestions to enhance my site. If you appreciate my resource and would like to see more content or improve it, please consider supporting the website development and the digital job market with any amount you can spare.


                </p>



                <button onclick="window.location.href='https://www.paypal.com/donate/?hosted_button_id=8JUA7CMNWEYDN'" class="blue-button">

                    <span class="material-icons">local_cafe</span>
                    PayPal donate

                </button>

                <img class="--image" src="../images/pictures/donate_v01.png" alt="">











                <h2>Partnership</h2>
                <hr class="brief--hr">


                <p>If you want to cooperate with Briefer, write a letter and tell about yourself and your ideas.</p>
              


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

            </article>
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