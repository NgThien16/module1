<?php

  session_start();
  if(isset($_SESSION['email'])){
   header('location:admin.php');
  }

 if(isset($_POST['login'])){
   $email = $_POST['email'];  // post dùng để lấy dữ liệu phía dưới
   $password = $_POST['password'];
   
   if($email=='admin@gmail.com'&&$password=="123456"){
      $_SESSION['email']=$email;
      header('location:admin.php');// header dùng để chuyển trang
   }else{
      echo"tài khoản hoặc mật khẩu sai";
   }
 }

?>


<form action ="login.php" method="POST">
    
   <label>Email</label>
   <input type="text" name="email"><br>
   <label>Password</label>
   <input type="text" name="password"><br>
   <button name="login">Đăng Nhập</button>

</form>