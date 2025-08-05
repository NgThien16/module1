<ul>
    <l1><a href="index.php?page_layout=trangchu">Trang chủ</a></l1><br>
    <l1><a href="index.php?page_layout=lienhe">Liên hệ</a></l1><br>
    <l1><a href="index.php?page_layout=sanpham">Sản phẩm</a></l1><br>
    <l1><a href="index.php?page_layout=giohang">Giỏ hàng</a></l1><br>
</ul>

<?php

  if(isset($_GET['page_layout'])){
    switch($_GET['page_layout']){
      case'trangchu';
      include "trangchu.php";
      break;

    } switch($_GET['page_layout']){
      case'lienhe';
      include "lienhe.php";
      break;

    } switch($_GET['page_layout']){
      case'sanpham';
      include "sanpham.php";
      break;

    } switch($_GET['page_layout']){
      case'giohang';
      include "giohang.php";
      break;
    }
  }

?>