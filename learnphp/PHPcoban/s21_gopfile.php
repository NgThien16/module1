<?php

     require "s1_variable.php";// nếu lỗi thì sẽ báo lỗi toàn bộ

     require_once "s1_variable.php";// nếu trùng file sẽ chỉ xuất hiện 1 lần

     include "s1_variable.php"; // tương tự require,nhưng nếu bị lỗi code file chính vẫn chạy chỉ hiện lỗi của file gộp.

     include_once "s1_variable.php";// tương tự require_once

?>