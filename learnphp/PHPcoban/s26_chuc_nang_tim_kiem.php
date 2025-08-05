<?php

   if($_SERVER["REQUEST_METHOD"]=="POST"){
           
      $name= $_POST['name'];
      if($name=="Thiện"){
        echo"Thiện sinh năm 2004 ";
      }else if($name=="hùng"){
        echo"Tên hùng sinh năm 2003";
      }else{
        echo"vui lòng nhập tên có trong hệ thống";
      }

   }

?>


<form action="s26_chuc_nang_tim_kiem.php" method="post">
    Tên:<input 
    type="text" name="name">
    <input type="submit" name="submit" value="Gửi">

</form>