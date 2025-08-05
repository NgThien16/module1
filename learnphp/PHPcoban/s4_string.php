<?php

//strlen() lấy độ dài của chuỗi
echo strlen(string: "Nguyen Nhu Thien");
echo "<br>"; // Add a line break for better readability in browser output

//str_word_count() lấy lượng từ ngữ cách nhau bởi dấu cách
echo str_word_count(string: "Nguyen Nhu Thien");
echo "<br>";

//strrev() đảo ngược chuỗi
echo strrev(string: "Nguyen Nhu Thien");
echo "<br>";

//strpos("đoạn văn bản ", "chữ") tìm kiếm trong văn bản
echo strpos(haystack: "Nguyen Nhu Thien", needle: "Thien");
echo "<br>";

//str_replace("chữ cần thay","chữ được thay","Đoạn văn bản"): dùng để thay văn bản
echo str_replace(search: "Nguyen", replace: "Pham", subject: "Nguyen Nhu Thien");

?>