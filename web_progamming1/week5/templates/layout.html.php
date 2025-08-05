<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="joke.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="joke.php">Jokes</a></li>
      <li><a href="addjoke.php">Add Joke</a></li>
    </ul>
  </nav>
  <?php echo $output; ?>
</body>
</html>
