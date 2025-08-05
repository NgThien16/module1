<?php
$title = '';
$output = '';
if (isset($_POST['name'])) {
    try {
        include 'includes/DatabaseConnection.php';
        // Check email
        $check = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
        $check->execute([':email' => $_POST['email']]);
        $count = $check->fetchColumn();

        if ($count > 0) {
            echo "<script>alert('Email already exists. Please use a different email.'); window.location='sign_up.php';</script>";
            exit;
        }

        // check cofirm password
        if ($_POST['password'] !== $_POST['confirm_password']) {
            echo "<script>alert('Passwords do not match. Please try again.'); window.location='sign_up.php';</script>";
            exit;
        }

        // Hash password 
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = 'INSERT INTO users ( name, email, password, role)
                VALUES ( :name, :email, :password, :role)';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $_POST['name']);
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->bindValue(':password', $hashedPassword);
        $stmt->bindValue(':role', 'user');
        $stmt->execute();

        header('Location: login.php');
        exit();
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    $title = 'Register Here';
    ob_start();
    include 'template/sign_up.html.php';
    $output = ob_get_clean();
}

include 'template/home.html.php';
