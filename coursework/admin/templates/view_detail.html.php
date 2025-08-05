  <div class="card shadow-lg border-0">
  <div class="card-header">
    <h4 class="mb-0"><?= htmlspecialchars($question['title']) ?></h4>
  </div>
  <div class="card-body">
    <p class="text-muted">Posted at: <?= htmlspecialchars($question['created_at']) ?></p>

    <p class="card-text"><?= nl2br(htmlspecialchars($question['content'])) ?></p>
    
    <?php if (!empty($question['image'])): ?>
      <img style="width:500px; height:auto;"  src="/coursework/uploads/<?= htmlspecialchars($question['image']) ?>" 
           alt="Attached Image" class="img-fluid rounded mb-3 border">
    <?php endif; ?>

    <hr>

    <div class="row">
      <div class="col-md-6">
        <p class="mb-1"><strong>Subject:</strong> <?= htmlspecialchars($subject['name']) ?></p>
      </div>
      <div class="col-md-6">
        <p class="mb-1"><strong>Posted by:</strong> <?= htmlspecialchars($user['name']) ?></p>
      </div>
    </div>
    <a href="/coursework/edit_question.php?id=<?= urlencode($question['id']) ?>" class="btn btn-outline-primary">Edit</a>
      <form action="/coursework/delete_question.php" method="post" class="d-inline">
        <input type="hidden" name="id" value="<?= htmlspecialchars($question['id'], ENT_QUOTES, 'UTF-8') ?>">
        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this question?')">Delete</button>
      </form>

  </div>
</div>
