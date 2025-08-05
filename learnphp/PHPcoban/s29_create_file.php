<?php
  // tạo file
   $myFile = fopen("newfile.txt","w");
  // a là có quyền viết thêm vào file
  // w là có quyền viết đè lên file
   $myFile = fopen("s29_file.txt","a") or die("lỗi");
   
   fwrite($myFile,"xin chào");// viết vào file
   fclose($myFile);


?>