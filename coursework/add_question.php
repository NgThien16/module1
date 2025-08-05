<?php
$title = '';
$output = '';
include 'includes/DatabaseConnection.php';
    // get users list
    $user_stmt = $pdo->query("SELECT id, name FROM users");
    $users = $user_stmt->fetchAll(PDO::FETCH_ASSOC);

    //get subjects list
    $subject_stmt = $pdo->query("SELECT id, name FROM subjects");
    $subjects = $subject_stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['title'])) {
    try {

        $sql = 'INSERT INTO posts (title, content, image, user_id, subject_id, created_at)
                VALUES (:title, :content, :image, :user_id, :subject_id, NOW())';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':title', $_POST['title']);
        $stmt->bindValue(':content', $_POST['content']);
        //upload images
        $imageName = null;

        // Nếu người dùng upload ảnh
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $originalName = basename($_FILES['image']['name']);
        $imageName = time() . '_' . $originalName;
        $targetPath = $uploadDir . $imageName;

        move_uploaded_file($_FILES['image']['tmp_name'], $targetPath);
}

        $stmt->bindValue(':image', $imageName);
        $stmt->bindValue(':user_id', $_POST['user_id']);
        $stmt->bindValue(':subject_id', $_POST['subject_id']);
        $stmt->execute();

        header('Location: display.php');
        exit();
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    $title = 'Ask a Public Question';
    ob_start();
    include 'template/add_question.html.php';
    $output = ob_get_clean();
}

include 'template/home.html.php';   