<?php
include '../includes/DatabaseConnection.php';

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Cập nhật user
        $sql = 'UPDATE users SET name = :name, email = :email, role = :role'
             . (!empty($_POST['password']) ? ', password = :password' : '')
             . ' WHERE id = :id';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $_POST['name']);
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->bindValue(':role', $_POST['role']);
        $stmt->bindValue(':id', $_POST['id']);

        if (!empty($_POST['password'])) {
            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bindValue(':password', $hashedPassword);
        }

        $stmt->execute();
        header('Location: users.php');
        exit();

    } else {
        // Hiển thị form
        $sql = 'SELECT * FROM users WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $user = $stmt->fetch();

        if (!$user) {
            throw new Exception("User not found.");
        }

        $title = 'Edit User';

        ob_start();
        include '../admin/templates/edit_users.html.php';
        $output = ob_get_clean();
    }
} catch (Exception | PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Error: ' . $e->getMessage();
}

include '../admin/templates/admin.html.php';
    
