<?php

  function myName($ten){
    echo"xin chào $ten";

  }

 myName("thiện");

  function information($name,$age){
    echo"Tôi tên là $name tôi $age tuổi";
  }
information("Thiện","21"); 

  function phepCong(int $a, int $b){// gán int cho máy tính biết đây là dạng số
      $tong = $a+$b;
      return $tong;// trả về giá trị
  }
  echo phepCong(1,2);
?>
