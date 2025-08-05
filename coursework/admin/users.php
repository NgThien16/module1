<?php
include '../includes/DatabaseConnection.php';


try {
    $sql = 'SELECT users.id, name, email, password, role FROM users';
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll();


    $title = 'Users Management';

    ob_start(); // lấy nội dung hiển thị từ template
   
    include '../admin/templates/users_manage.html.php';
  
    $output = ob_get_clean();
} catch (PDOException $e) { 
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}

include '../admin/templates/admin.html.php';