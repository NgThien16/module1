
<?php

  $nameError="";
  $name ="";
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['name'])){
        $nameError="Không được để trống";
    }else{
        $name= $_POST['name'];
        if(!preg_match("/^[a-zA-Z]*$/",$name)){//hàm để kiểm tra $name có ký tự đặc biệt hay khôn
            $nameError= "không được nhập giá trị đặc biệt";

        }else{
            echo $name;
        }
    }
  }

?>


<form action="s25_dieu_kien_form_nang_cao.php" method="post">
    name:<input type ="text" name="name">
    <span style="color:red"><?php echo $nameError; ?></span><br>
    <input type="submit" name="submit" value="Gửi">

</form>

