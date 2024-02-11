<?php
// process.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $service = $_POST['service'];

    // Отправка номера телефона на почту
    $to = "renajie@gmail.com"; // Замените на ваш реальный адрес электронной почты
    $subject = "Заявка с сайта";
    $message = "Номер телефона: " . $phone . "\nУслуга: " . $service;
    $headers = "From: renajie@gmail.com"; // Укажите здесь действительный email, с которого будет отправлено письмо

    // Попытка отправить письмо
    if (mail($to, $subject, $message, $headers)) {
        // Успешно отправлено, перенаправляем на страницу "Спасибо"
        header('Location: thank_you.php?service=' . urlencode($service) . '&phone=' . urlencode($phone));
    } else {
        // Ошибка при отправке, выводим сообщение
        echo "Ошибка при отправке. Пожалуйста, попробуйте ещё раз.";
    }
    exit;
}
?>
