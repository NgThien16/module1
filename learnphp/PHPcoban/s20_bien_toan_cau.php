<form action="s20_bien_toan_cau" method="post">
    <input type="text" name="dulieu">
    <input type="submit">

</form>


<?php

//$GLOBALS biến siêu toàn cầu truy cập tất cả vị trí

  $a=5;
  $b10;
  
      //không gọi được biến từ ngoài vào nên phải dùng biến toàn cầu để thực hiện

  function phepcong(){
    $GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];

  }
  phepcong();

//$POST thu nhập dữ diệu từ html, bảo mật vì không hiển thị trên url, nên sử dụng
 
echo $_POST['dulieu'];



//$GET thu nhập dữ diệu từ html, hiển thị trên url, sử dụng rong 1 vài trường hợp đặc biệt

echo $_GET['dulieu'];

//$_REQUEST giống $GLOBAL, nhưng có thể sử dụng cho $post và get


?>