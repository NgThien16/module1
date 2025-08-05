<form action="" method="post">
  <textarea name="joketext" rows="5" cols="40"></textarea>

  <select name="author">
  <option value="">Select an author</option>
  <?php foreach ($authors as $author): ?>
    <option value="<?= htmlspecialchars($author['id'], ENT_QUOTES, 'UTF-8'); ?>">
      <?= htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8'); ?>
    </option>
  <?php endforeach; ?>
</select>

  <select name=" categories">
    <option value="">Select an author</option>
  </select></br>
  <input type="submit" value="Add Joke">
</form>
