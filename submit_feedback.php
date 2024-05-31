<?php
require 'script.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    try {
        $pdo = connect_db();
        $stmt = $pdo->prepare("INSERT INTO feedback (email, message) VALUES (:email, :message)");
        $stmt->execute(['email' => $email, 'message' => $comment]);

        // Перенаправление на главную страницу после успешного добавления 
        header("Location: index.php?success=1");
        exit();
    } catch (PDOException $e) {
        echo "Ошибка: " . $e->getMessage();
    }
}