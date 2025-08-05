<?php
// Load thư viện PHPMailer (không dùng Composer)
require 'vendor/PHPMailer.php';
require 'vendor/SMTP.php';
require 'vendor/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'includes/DatabaseConnection.php';

$title = 'Contact';
$output = '';
$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // $mail->SMTPDebug = 2; // Bật nếu cần kiểm tra lỗi
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->CharSet = 'UTF-8';
        $mail->Username = 'nhuthienn132@gmail.com';
        $mail->Password = 'wsovuirhzmhybjez';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Người gửi
        $mail->setFrom('nhuthienn132@gmail.com', 'Sinh viên Greenwich');
        $mail->addReplyTo($email, $name); // người nhập từ form

        // Người nhận
        $mail->addAddress('thiennngcd220423@fpt.edu.vn', 'Thien');

        // Nội dung email
        $mail->isHTML(false);
        $mail->Subject = 'Liên hệ từ sinh viên';
        $mail->Body    = "Tên: $name\nEmail: $email\n\nNội dung:\n$message";

        $mail->send();
        $success = "✅ Successful";
    } catch (Exception $e) {
        $error = "❌ Error 
        : {$mail->ErrorInfo}";
    }
}

// Load form liên hệ như cũ
ob_start();
include 'template/contact.html.php';
$output = ob_get_clean();

include 'template/home.html.php';
?>
