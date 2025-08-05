<?php
include 'includes/DatabaseConnection.php';

try {
    if (isset($_POST['content'])&&isset( $_POST['title'])) {
        $sql = 'UPDATE posts SET content = :content, title =:title WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':content', $_POST['content']);
        $stmt->bindValue(':title', $_POST['title']);
        $stmt->bindValue(':id', $_POST['id']);
        $stmt->execute();
        header('location: admin/dashboard.php');
        exit();
    } else {
        $sql = 'SELECT * FROM posts WHERE id = :id';  
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $question = $stmt->fetch(); // 
        $title = 'Edit question';

        ob_start();
        include 'template/edit_question.html.php';
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = 'Error has occurred';
    $output = 'Error editing post: ' . $e->getMessage();
}

include 'template/home.html.php';
