<?php
// Разрешить доступ с вашего домена
header('Access-Control-Allow-Origin: https://briefer.pro');

// Разрешить методы POST
header('Access-Control-Allow-Methods: POST');

// Разрешить заголовки Content-Type
header('Access-Control-Allow-Headers: Content-Type');





header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Origin: *");
header('content-type: application/json; charset=utf-8');


// Проверка метода запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получение тела POST запроса
    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);
    $userMessage = $data['message'];

    // API ключ OpenAI
    $apiKey = getenv('OPENAI_API_KEY') ?: 'YOUR_API_KEY_HERE'; // Use environment variable or placeholder

    // Настройка запроса к OpenAI API
    $url = 'https://api.openai.com/v1/chat/completions';
    $headers = [
        'Content-Type: application/json',
        'Authorization: ' . 'Bearer ' . $apiKey,
    ];
    $body = json_encode([
        'model' => 'gpt-3.5',
        'messages' => [['role' => 'user', 'content' => $userMessage]],
    ]);

    // Инициализация cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

    // Выполнение запроса и получение ответа
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpCode === 200) {
        // Успешный запрос
        header('Content-Type: application/json');
        echo $response;
    } else {
        // Ошибка запроса
        http_response_code($httpCode);
        echo json_encode(['error' => 'Request failed with status ' . $httpCode, 'response' => $response]);
    }

    curl_close($ch);
}
?>
