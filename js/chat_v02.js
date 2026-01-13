// async function sendMessage() {
//     const userInput = document.getElementById("user-input").value;
//     if (!userInput.trim()) return;

//     appendMessage(userInput, 'user');

//     const response = await fetch('https://api.openai.com/v1/chat/completions', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'Authorization': `Bearer YOUR_OPENAI_API_KEY`
//         },
//         body: JSON.stringify({
//             model: "gpt-4",
//             messages: [{ role: "user", content: userInput }]
//         })
//     });

//     const data = await response.json();
//     const botMessage = data.choices[0].message.content;
//     appendMessage(botMessage, 'bot');

//     document.getElementById("user-input").value = '';
// }

// function appendMessage(message, sender) {
//     const chatBox = document.getElementById("chat-box");
//     const messageElement = document.createElement("div");
//     messageElement.classList.add("message", `${sender}-message`);
//     messageElement.textContent = message;
//     chatBox.appendChild(messageElement);
//     chatBox.scrollTop = chatBox.scrollHeight;
// }







// Функция для отправки сообщения
async function sendMessage() {
    const userInput = document.getElementById("user-input").value;
    if (!userInput.trim()) return;

    // Добавление сообщения пользователя в чат
    appendMessage(userInput, 'user');

    // Отправка сообщения пользователя в API OpenAI напрямую (это небезопасно, если не защитить API ключ)
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

    const data = await response.json();
    const botMessage = data.choices[0].message.content;
    appendMessage(botMessage, 'bot');

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




