<?php
include '../includes/DatabaseConnection.php';

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Cập nhật user
        $sql = 'UPDATE subjects SET name = :name'
             . ' WHERE id = :id';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $_POST['name']);
        $stmt->bindValue(':id', $_POST['id']);

        $stmt->execute();
        header('Location: subjects.php');
        exit();

    } else {
        // Hiển thị form
        $sql = 'SELECT * FROM subjects WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $subject = $stmt->fetch();

        if (!$subject) {
            throw new Exception("User not found.");
        }

        $title = 'Edit Subject';

        ob_start();
        include '../admin/templates/edit_subjects.html.php';
        $output = ob_get_clean();
    }
} catch (Exception | PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Error: ' . $e->getMessage();
}

include '../admin/templates/admin.html.php';
    
