<form action="/coursework/admin/edit_users.php" method="post" class="mb-4" >
 
  <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">

  
  <div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" id="name" name="name" class="form-control"
           value="<?= htmlspecialchars($user['name']) ?>" required>
  </div>

  
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" id="email" name="email" class="form-control"
           value="<?= htmlspecialchars($user['email']) ?>" required>
  </div>


  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" id="password" name="password" class="form-control"
           placeholder="Enter new password (leave blank to keep current)">
  </div>

  
  <div class="mb-3">
    <label for="role" class="form-label">Role:</label>
    <select id="role" name="role" class="form-select" required>
      <option value="user" <?= $user['role'] === 'user' ? 'selected' : '' ?>>User</option>
      <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
    </select>
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
</form>
