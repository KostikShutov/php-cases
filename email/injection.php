<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $message = $_POST['message'];

    $result = mail(
        to: 'recipient@example.com',
        subject: 'Message from ' . $email,
        message: $message,
        additional_headers: 'From: ' . $email,
    );

    $result = $result ? 'SUCCESSFUL' : 'ERROR';

    echo "Result: $result<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";
}
?>

<form method="post" action="">
    Your email: <textarea name="email"></textarea><br>
    Message: <textarea name="message"></textarea><br>
    <input type="submit">
</form>
