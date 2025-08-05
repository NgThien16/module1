<?php
include '../includes/DatabaseConnection.php'; // Kết nối database

$title = 'Question Detail';
$output = '';

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
        $stmtSubject = $pdo->prepare("SELECT name FROM subjects WHERE id = ?");
        $stmtSubject->execute([$question['subject_id']]);
        $subject = $stmtSubject->fetch();

        $stmtUser = $pdo->prepare("SELECT name FROM users WHERE id = ?");
        $stmtUser->execute([$question['user_id']]);
        $user = $stmtUser->fetch();

        include '../admin/templates/view_detail.html.php';
    } else {
        echo 'Question not found';
    }
}

$output = ob_get_clean();
include '../admin/templates/admin.html.php'; 