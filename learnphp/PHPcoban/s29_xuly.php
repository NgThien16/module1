<?php
//   // hiển thị nội dung của hình ảnh
//   $a =$_FILES["img"];

//   print_r($a);
  
  $thuMuc = "img/";
  $bien = $thuMuc.basename($_FILE['img']['name']);

  if(isset($_POST["submit"])){
    if(isset($_FILES['img'])){
        if($_FILES['img']['size']== 0){
            echo"error";

        }else if(file_exists($bien)){
            echo "Hình ảnh đã tồn tại";

        }else if($_FILES['img']['size']>20000000){
           
            echo "file quá dung lượng";

        }
        else{
           move_uploaded_file($_FILES['img']['tmp_name'], './' . $_FILES['img']['name']);

            echo"Thành công";
        }
    }
  }

?>