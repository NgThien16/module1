<h1 style="color:red">WELCOME</h1>
<a href="logout.php">
<button name="logout">Log out</button>
</a>
<?php
  

  session_start();

   

  if(!isset($_SESSION['email'])){ // ! là ngược lại với điều kiện
    header("location:login.php");
  }

?>