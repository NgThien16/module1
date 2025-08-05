<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Question Forum Admin</title>
  <link href="../bootstrap.min.css" rel="stylesheet">
  <!-- <link href="../application.css" rel="stylesheet"> -->
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-md bg-primary navbar-dark mb-4">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="../display.php">
        <img src="uploads/logo.png" alt="Logo" width="40" height="40" class="me-2">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/coursework/admin/add_question.php">Ask Question</a>
          </li>
          <li>
            <a class="nav-link" href="subjects.php">Subject</a>
          </li>
          <li>
            <a class ="nav-link" href = "users.php">User</a>
          </li>
        </ul>
        <button class="btn btn-danger" type="submit"><a class="nav-link" href="../logout.php">Log out</a></button>
       
      </div>
    </div>
  </nav>

  <!-- Nội dung chính -->
  <div class="container mt-4">
    <h2><?= $title ?></h2>
    <?= $output ?>
  </div>

</body>
</html>
