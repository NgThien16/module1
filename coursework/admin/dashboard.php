<?php
include '../includes/DatabaseConnection.php';


try {
    $sql = 'SELECT posts.id, title, created_at FROM posts';
    $stmt = $pdo->query($sql);
    $questions = $stmt->fetchAll();


    $title = 'Interesting posts for you';

    ob_start(); // lấy nội dung hiển thị từ template
    $basePath = '/'; 
    include '../admin/templates/list_question.html.php';
  
    $output = ob_get_clean();
} catch (PDOException $e) { 
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}

include '../admin/templates/admin.html.php';