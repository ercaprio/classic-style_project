<?php
$_POST = json_decode(file_get_contents("php://input"), true);

// Создаем массив данных
$data = array(
    "user_name" => $_POST['user_name'],
    "user_phone" => $_POST['user_phone']
);

// Устанавливаем заголовок для указания, что ответ будет в формате JSON
header('Content-Type: application/json');

// Выводим данные в формате JSON
echo json_encode($data);