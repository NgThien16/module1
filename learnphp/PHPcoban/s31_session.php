<?php

// dùng để lưu trữ thông tin người dùng hoặc lưu trữ tùy chon cấu hình hệ thống người dùng
//duy trì đăng nhập như facebook hay youtube

  session_start();// gọi hàm trước

  // tạo session

  $_SESSION['name'] = "Thien";

  //hiển thị session
  echo $_SESSION["name"];
  
  // sửa session thay đổi trên phần tạo và hiển thị

  // xóa session
   unset($_SESSION['name']); // xóa 1 session


   session_destroy();// tất cả các session sẽ bị xóa


?>