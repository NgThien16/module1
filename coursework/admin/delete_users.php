<?php
include '../includes/DatabaseConnection.php';

try {
  $sql = 'DELETE FROM users WHERE id = :id';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $_POST['id']);
  $stmt->execute();
  header('location: users.php');
  exit();
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage();
  include  '../admin/templates/users_manage.html.php';
}
?>