<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with ChatGPT</title>
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
</head>
<body>
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
        async function sendMessage() {
            const userInput = document.getElementById('user-input');
            const message = userInput.value;
            if (message.trim() === '') {
                return;
            }

            displayMessage(message, 'user-message');
            userInput.value = '';

            try {
                const response = await fetch('https://api.openai.com/v1/completions', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer YOUR_API_KEY'
                    },
                    body: JSON.stringify({
                        model: 'text-davinci-003',
                        prompt: message,
                        max_tokens: 150
                    })
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();

                if (!data.choices || data.choices.length === 0) {
                    throw new Error('Invalid response from API');
                }

                const botMessage = data.choices[0].text.trim();
                displayMessage(botMessage, 'bot-message');
            } catch (error) {
                console.error('Error:', error);
                displayMessage('Sorry, something went wrong. Please try again later.', 'bot-message');
            }
        }

        function displayMessage(message, className) {
            const chatBox = document.getElementById('chat-box');
            const messageElement = document.createElement('div');
            messageElement.className = `message ${className}`;
            messageElement.textContent = message;
            chatBox.appendChild(messageElement);
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    </script>
</body>
</html>
