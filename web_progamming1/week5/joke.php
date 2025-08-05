<?php
include 'includes/DatabaseConnection.php';

try {
  $sql = 'SELECT 
            j.id AS joke_id, 
            j.joketext, 
            a.name AS author_name,
            a.email AS author_ename,
            c.name AS category_name
          FROM joke AS j
          INNER JOIN author AS a ON j.authorid = a.id
          INNER JOIN category AS c ON j.categoryid=c.id' ;

  $jokes = $pdo->query($sql);
  $title = 'List of Jokes';

  ob_start();
  include 'templates/jokes.html.php';
  $output = ob_get_clean();
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage();
}

include 'templates/layout.html.php';
