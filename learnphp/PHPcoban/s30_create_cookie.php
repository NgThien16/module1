<?php
 // tạo cookie
  $cookieName ="user";
  $cookieValue ="thien";

  setcookie($cookieName,$cookieValue , time()+(86400),"/");// nếu muốn xóa thì thay cộng sau time() thành -
   
  //time() + (86400) =30 ngày
  if(isset($_COOKIE[$cookieName])){
     echo "cookie".$cookieName. "đã tồn tại";
  }else{
    echo"eror";
  }


?>