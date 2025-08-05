
<form method="post" action="add_users.php" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>

  <div class="mb-3">
    <label for="role" class="form-label">Role</label>
    <select class="form-select" id="role" name="role" required>
      <option value="">-- Select Role --</option>
      <option value="user">User</option>
      <option value="admin">Admin</option>
    </select>
  </div>

  <button type="submit" class="btn btn-success">Add User</button>
</form>
