<?php
include 'includes/DatabaseConnection.php';

try {
  $sql = 'DELETE FROM posts WHERE id = :id';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $_POST['id']);
  $stmt->execute();
  header('location: display.php');
  exit();
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage();
  include  'template/home.html.php';
}
?>
