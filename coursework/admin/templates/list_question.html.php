<?php foreach ($questions as $question): ?>
<div class="container mb-3">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo htmlspecialchars($question['title']); ?></h5>
      <h6 class="card-subtitle mb-2 text-muted">Posted at: <?php echo $question['created_at']; ?></h6>
      <a href="view_detail_admin.php?id=<?php echo $question['id']; ?>" class="btn btn-outline-primary mt-2">View Details</a>
    </div>
  </div>
</div>


<?php endforeach; ?>
  