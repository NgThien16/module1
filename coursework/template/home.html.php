<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Question Forum</title>
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="application.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
   <?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
  <nav class="navbar navbar-expand-md bg-success navbar-dark mb-4">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="display.php">
        <img src="uploads/logo.png" alt="Logo" width="40" height="40" class="me-2">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="display.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_question.php">Ask Question</a>
          </li>
         
        </ul>
        <!-- change status-->
          <ul class="navbar-nav ms-auto">
            <?php if (isset($_SESSION['user'])): ?>
             <li class="nav-item d-flex align-items-center text-white me-2">
               <?= htmlspecialchars($_SESSION['user']) ?>
             </li>
             <li class="nav-item">
               <a class="btn btn-danger ms-2" href="logout.php">Logout</a>
             </li>
            <?php else: ?>
             <li class="nav-item">
              <a class="btn btn-primary" href="login.php">Login</a>
             </li>
            <?php endif; ?>
            </ul>

        
      </div>
    </div>
  </nav>

  <!-- Nội dung chính -->
  <div class="container mt-4">
    <h2><?= $title ?></h2>
    <?= $output ?>
  </div>
  <footer class="bg-dark text-white text-center py-4 mt-5">
  <div class="container">
    <p class="mb-1">&copy; 2025 Question Forum</p>
    <p class="mb-0">
      <a href="send_email.php" class="text-white text-decoration-none">Contact Us</a>
    </p>
  </div>
</footer>

</body>
</html>
