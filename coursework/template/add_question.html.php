
  <div class="container mt-5">
    <form action="add_question.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label" for="title">Title</label>
        <input class="form-control" type="text" id="title" name="title" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label" for="content">Body</label>
        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label" for="image">Image (filename)</label>
        <input class="form-control" type="file" id="image" name="image">
      </div>

      <div class="mb-3">
        <label class="form-label" for="user_id">User ID</label>
        <select class="form-control" id="user_id" name="user_id" required>
        <?php foreach ($users as $user): ?>
           <option value="<?= htmlspecialchars($user['id']) ?>">
        <?= htmlspecialchars($user['name']) ?>
        </option>
        <?php endforeach; ?>
        </select>

      </div>

      <div class="mb-3">
        <label class="form-label" for="subject">Subject</label>
        <select class="form-control" id="subject_id" name="subject_id" required>
        <?php foreach ($subjects as $subject): ?>
           <option value="<?= htmlspecialchars($subject['id']) ?>">
        <?= htmlspecialchars($subject ['name']) ?>
        </option>
        <?php endforeach; ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Review Question</button>
    </form>
  </div>

