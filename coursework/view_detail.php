<?php
include 'includes/DatabaseConnection.php'; // Kết nối database

$title = 'Question Detail';
$output = '';
session_start();

ob_start(); // Bắt đầu lưu nội dung để nhúng vào layout

if (!isset($_GET['id']) || !filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    echo 'Invalid or missing question ID';
} else {
    $id = $_GET['id'];

    // Truy vấn lấy dữ liệu câu hỏi
    $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
    $stmt->execute([$id]);
    $question = $stmt->fetch();

    if ($question) {
        // Kiểm tra quyền sở hữu sau khi có $question/ user_id = id
        $isOwner = isset($_SESSION['id']) && $_SESSION['id'] == $question['user_id'];

        $stmtSubject = $pdo->prepare("SELECT name FROM subjects WHERE id = ?");
        $stmtSubject->execute([$question['subject_id']]);
        $subject = $stmtSubject->fetch();

        $stmtUser = $pdo->prepare("SELECT name FROM users WHERE id = ?");
        $stmtUser->execute([$question['user_id']]);
        $user = $stmtUser->fetch();

        include 'template/view_detail.html.php';
    } else {
        echo 'Question not found';
    }
}

$output = ob_get_clean();
include 'template/home.html.php';
