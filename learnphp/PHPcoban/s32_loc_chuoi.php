<?php

   // lọc chuỗi là kiểm tra dữ liệu như email, số, chữ,...

   $name="Thien";

   $locChuoi = filter_var($name, FILTER_SANITIZE_STRING);


   echo $locChuoi; 

   // lọc số nguyên
   $soNguyen = 35;
   
   if(!filter_var($soNguyen, FILTER_VALIDATE_INT==false)){
     echo"đây là số nguyên";

   }else{echo"wrong";}

   // lọc ip 
   $ip="127.0.0.1";
   if(!filter_var($ip, FILTER_VALIDATE_IP)==false){
    echo"ip hợp lệ";
   }else{
    echo"không hợp lệ";
   }

 // lọc email
   $gmail ="thien@gmail.com";
   $gmail= filter_var($gmail, FILTER_SANITIZE_EMAIL);

   if(!filter_var($gmail, FILTER_VALIDATE_EMAIL)==false){
     echo"Email hợp lệ";
   }else{
    "wrong";
   }

   //lọc URL
   $url ="https://www.w3schools.com";
   $url= filter_var($url, FILTER_SANITIZE_URL);

   if(!filter_var($url, FILTER_VALIDATE_URL)==false){
     echo"URL hợp lệ";
   }else{
    "wrong";
   }
?>