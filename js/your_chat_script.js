// document.addEventListener("DOMContentLoaded", function () {
//     const chatForm = document.getElementById("chat-form");
//     const userInputElement = document.getElementById("user-input");
//     const chatHistoryElement = document.getElementById("chat-history");

//     chatForm.addEventListener("submit", function (event) {
//         event.preventDefault();

//         const userInput = userInputElement.value;
//         appendMessage("You", userInput);

//         // Отправка запроса к API
//         sendChatMessage(userInput)
//             .then(response => {
//                 const botResponse = response.data;
//                 appendMessage("Bot", botResponse);
//             })
//             .catch(error => {
//                 console.error("Error:", error);
//             });

//         // Очистка поля ввода
//         userInputElement.value = "";
//     });

//     function appendMessage(sender, message) {
//         const messageElement = document.createElement("div");
//         messageElement.textContent = `${sender}: ${message}`;
//         chatHistoryElement.appendChild(messageElement);
//     }

//     async function sendChatMessage(userInput) {
//         const apiEndpoint = "https://zerogpt.p.rapidapi.com/api/v1/detectText";
//         const apiKey = "1a3eba55cemsh157190945257ed4p13a6fbjsnfa0d76c7c698"; // Замените на ваш ключ RapidAPI

//         const options = {
//             method: "POST",
//             url: apiEndpoint,
//             headers: {
//                 "content-type": "application/json",
//                 "X-RapidAPI-Key": apiKey,
//                 "X-RapidAPI-Host": "zerogpt.p.rapidapi.com"
//             },
//             data: {
//                 input_text: userInput
//             }
//         };

//         return axios.request(options);
//     }
// });






document.addEventListener("DOMContentLoaded", function () {
    const chatForm = document.getElementById("chat-form");
    const userInputElement = document.getElementById("user-input");
    const chatHistoryElement = document.getElementById("chat-history");

    // Замените URL на фактический URL вашей статьи
    const articleUrl = "https://briefer.pro/index.php";
    let articleContent = "";

    // Получение текста статьи
    axios.get(articleUrl)
        .then(response => {
            articleContent = response.data; // Предполагается, что контент статьи приходит в ответе
        })
        .catch(error => {
            console.error("Error fetching article:", error);
        });

    chatForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const userInput = userInputElement.value;
        appendMessage("You", userInput);

        // Отправка запроса к API с текстом статьи в качестве контекста
        sendChatMessage(userInput, articleContent)
        .then(response => {
            const botResponse = response.data.bot_response; // замените "bot_response" на фактическое свойство с текстом ответа
            appendMessage("Bot", botResponse);
        })
        
            .catch(error => {
                console.error("Error:", error);
            });

        // Очистка поля ввода
        userInputElement.value = "";
    });

    function appendMessage(sender, message) {
        const messageElement = document.createElement("div");
        messageElement.textContent = `${sender}: ${message}`;
        chatHistoryElement.appendChild(messageElement);
    }

    async function sendChatMessage(userInput, context) {
        const apiEndpoint = "https://zerogpt.p.rapidapi.com/api/v1/detectText";
        const apiKey = "YOUR_RAPIDAPI_KEY";
        
        const options = {
            method: "POST",
            url: apiEndpoint,
            headers: {
                "content-type": "application/json",
                "X-RapidAPI-Key": apiKey,
                "X-RapidAPI-Host": "zerogpt.p.rapidapi.com"
            },
            data: {
                input_text: userInput,
                context: context // Передача текста статьи в качестве контекста
            }
        };

        return axios.request(options);
    }
});