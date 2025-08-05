<?php
include '../includes/DatabaseConnection.php';

try {
  $sql = 'DELETE FROM subjects WHERE id = :id';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $_POST['id']);
  $stmt->execute();
  header('location: subjects.php');
  exit();
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage();
  include  '../admin/templates/subjects_manage.html.php';
}
?>