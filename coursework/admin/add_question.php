<?php
$title = '';
$output = '';
if (isset($_POST['title'])) {
    try {
        include 'includes/DatabaseConnection.php';
        
        $user_stmt = $pdo->query("SELECT id, name FROM users");
        $users = $user_stmt->fetchAll(PDO::FETCH_ASSOC);

        // Lấy danh sách môn học
        $subject_stmt = $pdo->query("SELECT id, name FROM subjects");
        $subjects = $subject_stmt->fetchAll(PDO::FETCH_ASSOC);

        $sql = 'INSERT INTO posts (title, content, image, user_id, subject_id, created_at)
                VALUES (:title, :content, :image, :user_id, :subject_id, NOW())';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':title', $_POST['title']);
        $stmt->bindValue(':content', $_POST['content']);
        $stmt->bindValue(':image', $_POST['image']);
        $stmt->bindValue(':user_id', $_POST['user_id']);
        $stmt->bindValue(':subject_id', $_POST['subject_id']);
        $stmt->execute();

        header('Location: dashboard.php');
        exit();
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    $title = 'Ask a Public Question';
    ob_start();
    include '../template/add_question.html.php';
    $output = ob_get_clean();
}

include '../admin/templates/admin.html.php';   