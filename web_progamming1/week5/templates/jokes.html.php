<?php foreach ($jokes as $joke): ?>
  <blockquote>
    <p><?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8'); ?></p>

    <p>
      (by 
      <a href="mailto:<?= htmlspecialchars($joke['author_email'], ENT_QUOTES, 'UTF-8'); ?>">
        <?= htmlspecialchars($joke['author_name'], ENT_QUOTES, 'UTF-8'); ?>
      </a>)
    </p>

    <p>
      <a href="editjoke.php?id=<?= urlencode($joke['joke_id']); ?>">Edit</a>
    </p>

    <form action="deletejoke.php" method="post">
      <input type="hidden" name="id" value="<?= htmlspecialchars($joke['joke_id'], ENT_QUOTES, 'UTF-8'); ?>">
      <input type="submit" value="Delete">
    </form>
  </blockquote>
<?php endforeach; ?>
