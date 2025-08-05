<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>

   <?php

     $nameError="";

      if($_SERVER["REQUEST_METHOD"]=="POST"){// câu lệnh dùng để bắt sự kiện khi nhấn nút submit
        if(empty($_POST['name'])){// kiểm tra input có tồn tại hay không
            
            $nameError = "Không được để trống";

        }else{
            echo $_POST['name']; // lấy dữ liệu từ input để in ra
        }
   
    }

   ?>

    <form action="s24_đieu_kien_form.php" method="post">
       Tên : <input type="text" name="name">
       <span class="error"><?php  echo $nameError ?></span><br>
       <input type="submit" name="submit" value="GỬi">
       
    </form>
</body>
</html>