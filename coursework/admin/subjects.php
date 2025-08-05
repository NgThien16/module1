<?php
include '../includes/DatabaseConnection.php';


try {
    $sql = 'SELECT subjects.id, name FROM subjects';
    $stmt = $pdo->query($sql);
    $subjects = $stmt->fetchAll();


    $title = 'Subjects Management';

    ob_start(); // lấy nội dung hiển thị từ template
   
    include '../admin/templates/subjects_manage.html.php';
  
    $output = ob_get_clean();
} catch (PDOException $e) { 
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}

include '../admin/templates/admin.html.php';