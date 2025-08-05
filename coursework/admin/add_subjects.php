<?php
$title = '';
$output = '';
if (isset($_POST['name'])) {
    try {
        include '../includes/DatabaseConnection.php';

        $sql = 'INSERT INTO subjects ( name)
                VALUES ( :name)';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $_POST['name']);
        $stmt->execute();

        header('Location: subjects.php');
        exit();
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    $title = 'Add New Subject';
    ob_start();
    include '../admin/templates/add_subjects.html.php';
    $output = ob_get_clean();
}

include '../admin/templates/admin.html.php';
