<?php
include 'includes/DatabaseConnection.php';

try {
  $sql = 'DELETE FROM joke WHERE id = :id';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $_POST['id']);
  $stmt->execute();
  header('location: joke.php');
  exit();
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage();
  include  'templates/layout.html.php';
}
?>
