<?php
  // cách 1 đọc file
   readfile('s29_file.txt');//đọc file

   // cách 2 đọc file, mode r chỉ có quyền đọc file
 
   $myFile = fopen("s29_file.txt","r") or die("lỗi"); // mở file

   echo fread($myFile, filesize("s29_file.txt"));// đọc file
   
   fclose($myFile);// đóng file,giúp hạn chế lỗi
   
   // sử dụng vòng lặp để đọc file
   $myFile = fopen("s29_file.txt","r") or die("lỗi"); // mở file

    while(!feof($myFile)){
       echo fgets($myFile)."(br)";
    }
   
   fclose($myFile);// đóng file,giúp hạn chế lỗi

?>