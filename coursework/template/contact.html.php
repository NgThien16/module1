
  <div class="container mt-5">
    <?php if ($success): ?>
  <div class="alert alert-success"><?= $success ?></div>
<?php elseif ($error): ?>
  <div class="alert alert-danger"><?= $error ?></div>
<?php endif; ?>
    <form action="send_email.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label" for="title">Name:</label>
        <input class="form-control" type="text" id="name" name="name" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label" for="content">Email</label>
        <input class="form-control" type="email" name="email" required>
      </div>

      <div class="mb-3">
        <label class="form-label" for="message">Message</label>
        <textarea class="form-control" id="message" name="message" ></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Review Question</button>
    </form>
  </div>

