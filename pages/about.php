<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="icon" href="/images/briefer-icon.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Briefer: About</title>
</head>

<body>

    <div class="container-grid-brief">

        <?php
        include '../blocks/navigation.php';
        ?>

        <div class="brief">

            <article>
                <h1>ABOUT <br> BRIEFER</h1>
                <hr class="brief--hr">
  <section id="about">
        <h2>How It Works</h2>

        <h3>Explore Expert Content</h3>
        <p>Browse through our extensive database of professional project briefs, technical requirements, and best practices across programming, design, video, writing, marketing, and audio. Each article is created by industry experts and is continuously refined to provide the most relevant and high-quality information.</p>

        <h3>Contribute Your Expertise</h3>
        <p>Share your professional insights or suggestions directly on our articles. Your contributions can enhance the quality and accuracy of our content. By participating, you earn recognition, points, and the opportunity to be featured as a top contributor. Professional writers can also publish their articles on our platform for $50 per 1000 words. Send us examples of your work to get started.</p>

        <h3>AI-Powered Updates</h3>
        <p>Our intelligent AI agent analyzes user feedback and continuously updates articles in real-time, ensuring that our content remains current and high-quality. When your suggestions are integrated, you’ll be notified of the impact of your contributions, and your insights will be highlighted in the updated content.</p>

        <h3>Gain Recognition</h3>
        <p>Build your professional profile by contributing valuable insights. Earn badges, appear on our leaderboard, and gain recognition as a thought leader in your field. Showcase your expertise and contributions in a personal portfolio, which can be shared with potential employers or clients.</p>

        <h3>Stay Engaged</h3>
        <p>Join discussions with other professionals, upvote insightful comments, and participate in Q&A sessions with industry experts. Your active engagement helps shape the best practices and drive success in your field.</p>

        <h3>Promote Your Product</h3>
        <p>If you have a product or microservice you wish to advertise, consider featuring it as a native advertisement within our content. Contact us to explore this opportunity.</p>

        <img class="--image" src="../images/pictures/about_v01.png" alt="About Us">

        <h3>Terms and Conditions</h3>
        <p>By using this website, you agree to our <a href="terms.php">Terms and Conditions</a>. Please read them carefully. Continued use of our site implies acceptance of these terms. If you do not agree, please refrain from using our website.</p>

        <h3>Privacy Policy</h3>
        <p>Your privacy is important to us. By using this website, you consent to our <a href="privacy-policy.php">Privacy Policy</a>. Please review our Privacy Policy thoroughly. If you do not agree with our privacy practices, please do not use our site.</p>
    </section>


            </article>

            <h2>Contact With Us</h2>

            <p>If you want to cooperate with us, write us a letter and tell us about yourself and your ideas.</p>


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

</html>