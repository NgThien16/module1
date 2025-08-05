<?php

   if(isset($_POST["submit"])){  // isset kiểm tra có tồn tại hay không
        echo"hello";
   }
        
  // phương thức bắt sự kiên này được sử dụng nhiều hơn
?>


<form action="s27_bat_su_kien.php" method="post">
    Tên:<input 
    type="text" name="name">
    <input type="submit" name="submit" value="Gửi">

</form>