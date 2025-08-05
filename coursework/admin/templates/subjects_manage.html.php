<table class="table table-bordered">
  <thead class="table-light">
    <tr>
      <th>ID</th>
      <th>Subject</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($subjects as $subject): ?>
      <tr>
        <td><?= htmlspecialchars($subject['id']) ?></td>
        <td><?= htmlspecialchars($subject['name']) ?></td>
        
        <td>
          <form method="POST" action="delete_subject.php" onsubmit="return confirm('Do you want to delete');">
            <input type="hidden" name="id" value="<?= $subject['id'] ?>">
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
          </form>
          <td>
          <a href="edit_subjects.php?id=<?= urlencode($subject['id']); ?> " class="btn btn-sm btn-light">Edit</a>
        </td>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<button><a href="../admin/add_subjects.php" class="btn btn-sm btn-primary">Add Subject </a></button>