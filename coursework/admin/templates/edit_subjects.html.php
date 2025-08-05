<form action="/coursework/admin/edit_subjects.php" method="post" class="mb-4" >
 
  <input type="hidden" name="id" value="<?= htmlspecialchars($subject['id']) ?>">

  
  <div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" id="name" name="name" class="form-control"
           value="<?= htmlspecialchars($subject['name']) ?>" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
</form>
