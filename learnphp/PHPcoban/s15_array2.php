<?php

$name =array("Thiện", "Hương", "Phúc");

echo $name[0];// hiển thị giá trị

print_r($name);// hiển thị toàn bộ array

echo count($name);// lấy độ dài của array

$nam[] = "đức";// không truyền vị trí vào thì sẽ được thêm vào cuối mảng
 // nếu có vị trí sẽ thay thế vị trí trong mảng mặc định

print_r($name); // thay thế array


unset($name[1]);// xóa phần tự đúng với vị trong mảng
print_r($name);



?>