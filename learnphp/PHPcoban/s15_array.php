<?php
//array chứa chỉ số
$name =array("Thiện", "Hương", "Phúc");

echo $name[0] .  $name[1];

//array json
// cách 1
$thongTin =array("Thiện"=>"2004", "Hương"=>"2004", "Phúc"=>"2003");// hiển thị giá trị phía sau

echo $thongTin['Thiện'];

//cách 2
$thongTin['Thien'] =2004;
$thongTin['Huong'] =2004;
$thongTin['Phuc'] =2003;


//mảng đa chiều

$myArray= array(
    array("Thien","2004","VN"),
    array("Mesi","2004","Au"),
    array("Jame","2004","US"),

);
 echo $myArray[0][0];
 echo $myArray[0][1];
?>