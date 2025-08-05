<?php
$title = '';
$output = '';
if (isset($_POST['name'])) {
    try {
        include '../includes/DatabaseConnection.php';

        $sql = 'INSERT INTO users ( name, email, password, role)
                VALUES ( :name, :email, :password, :role)';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $_POST['name']);
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->bindValue(':password', $_POST['password']);
        $stmt->bindValue(':role', $_POST['role']);
        $stmt->execute();

        header('Location: users.php');
        exit();
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    $title = 'Add New User';
    ob_start();
    include '../admin/templates/add_users.html.php';
    $output = ob_get_clean();
}

include '../admin/templates/admin.html.php';
