<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // جمع البيانات من النموذج
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $message = $_POST['message'];

    // عنوان البريد الذي سيتم إرسال الرسالة إليه
    $to = "mohamed.adel3940@gmail.com"; // غيّر الإيميل إلى الإيميل الذي تريده
    $subject = "New message from portfolio contact form";

    // تنسيق محتوى الرسالة
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    // إعدادات الـ headers
    $headers = "From: $email";

    // محاولة إرسال البريد الإلكتروني
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
