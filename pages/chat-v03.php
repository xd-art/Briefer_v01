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
    <title>Chat AI</title>




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
            background-color: white;
        }

        #chat-container {
            width: 100%;
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
            background-color: #e1e1e1;
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





<!-- <script src="/js/chat_v02.js"></script> -->

<!-- 
<script>
        // Функция для отправки сообщения
        async function sendMessage() {
            const userInput = document.getElementById("user-input").value;
            if (!userInput.trim()) return;

            // Добавление сообщения пользователя в чат
            appendMessage(userInput, 'user');

            try {
                const response = await fetch('https://api.openai.com/v1/chat/completions', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer YOUR_OPENAI_API_KEY`
                    },
                    body: JSON.stringify({
                        model: "gpt-4",
                        messages: [{ role: "user", content: userInput }]
                    })
                });

                if (!response.ok) {
                    throw new Error(`Error: ${response.status} ${response.statusText}`);
                }

                const data = await response.json();
                const botMessage = data.choices[0].message.content;
                appendMessage(botMessage, 'bot');

            } catch (error) {
                console.error('Error:', error);
                appendMessage("Sorry, something went wrong. Please try again.", 'bot');
            }

            // Очистка поля ввода
            document.getElementById("user-input").value = '';
        }

        // Функция для добавления сообщения в чат
        function appendMessage(message, sender) {
            const chatBox = document.getElementById("chat-box");
            const messageElement = document.createElement("div");
            messageElement.classList.add("message", `${sender}-message`);
            messageElement.textContent = message;
            chatBox.appendChild(messageElement);
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    </script>
 -->



</head>

<body>

    <div class="container-grid-brief">

        <?php
        include '../blocks/navigation.php';
        ?>

        <div class="brief">

            <article>


                <h4>Chat AI</h4>
                <hr class="brief--hr">
               <p class="--gray"> Chat generator AI, version 3.0</p>
            </article>






<!-- 

            <div class="container-mail">




<br>
                <div id="chat-container">


                    <div id="chat-box">

                    <img style="max-width: 30px;" itemprop="image" class="card__img" src="/images/briefer-icon.svg" alt="graphic design category">




                    </div>
                    <div id="input-container">
                        <input type="text" id="user-input" placeholder="Type a message..." />
                        <button onclick="sendMessage()">                    <span style="max-width: 20px;" class="material-icons">send</span> 
</button>
                    </div>
                </div>
            </div> -->









            <div class="container-mail">
        <div id="chat-container">
            <div id="chat-box"></div>
            <div id="input-container">
                <input type="text" id="user-input" placeholder="Type a message..." />
                <button onclick="sendMessage()">Send</button>
            </div>
        </div>
    </div>


    <script>
        // Функция для отправки сообщения
        async function sendMessage() {
            const userInput = document.getElementById("user-input").value;
            if (!userInput.trim()) return;

            // Добавление сообщения пользователя в чат
            appendMessage(userInput, 'user');

            try {
                const response = await fetch('https://api.openai.com/v1/chat/completions', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer YOUR_API_KEY` // Замените на ваш API ключ
                    },
                    body: JSON.stringify({
                        model: "gpt-4",
                        messages: [{ role: "user", content: userInput }]
                    })
                });

                if (!response.ok) {
                    throw new Error(`Error: ${response.status} ${response.statusText}`);
                }

                const data = await response.json();
                const botMessage = data.choices[0].message.content;
                appendMessage(botMessage, 'bot');

            } catch (error) {
                console.error('Error:', error);
                appendMessage("Sorry, something went wrong. Please try again.", 'bot');
            }

            // Очистка поля ввода
            document.getElementById("user-input").value = '';
        }

        // Функция для добавления сообщения в чат
        function appendMessage(message, sender) {
            const chatBox = document.getElementById("chat-box");
            const messageElement = document.createElement("div");
            messageElement.classList.add("message", `${sender}-message`);
            messageElement.textContent = message;
            chatBox.appendChild(messageElement);
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    </script>








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