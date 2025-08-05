

<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Role</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- Ví dụ dữ liệu -->
    <?php foreach ($users as $user): ?>
      <tr>
        <td><?= htmlspecialchars($user['id']) ?></td>
        <td><?= htmlspecialchars($user['name']) ?></td>
        <td><?= htmlspecialchars($user['email']) ?></td>
        <td><?= htmlspecialchars($user['password']) ?></td>
        <td><?= htmlspecialchars($user['role']) ?></td>
        
        <td>
          <form method="POST" action="delete_users.php" onsubmit="return confirm('Do you want to delete?');">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
          </form>
        </td>
        
        <td>
          <a href="edit_users.php?id=<?= urlencode($user['id']); ?> " class="btn btn-sm btn-light">Edit</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<button><a href="../admin/add_users.php" class="btn btn-sm btn-primary">Add User</a></button>
</div>

