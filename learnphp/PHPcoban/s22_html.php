<!-- Biểu mẫu gửi dữ liệu đến index.php bằng phương thức GET -->
<form action="index.php" method="get" name="form">

  <!-- Trường nhập tên người dùng -->
  <label>Username</label>
  <input type="text" name="username">
  <br>

  <!-- Trường nhập mật khẩu -->
  <label>Password</label>
  <input type="password" name="password">
  <br>

  <!-- Trường chọn năm sinh -->
  <label>Năm sinh</label>
  <input type="date" name="date">
  <br>

  <!-- Trường chọn giới tính bằng radio button -->
  <label>Giới tính</label>
  <label>
    <input type="radio" value="nam" name="gioitinh"> Nam
  </label>
  <label>
    <input type="radio" value="nu" name="gioitinh"> Nữ
  </label>
  <br>
   <!-- Trường chọn quốc tịch bằng select option -->
  <label>Quốc tịch</label>
  <select name="quoctich">
    <option value="">-- Chọn quốc tịch --</option>
    <option value="vn">Việt Nam</option>
    <option value="us">Hoa Kỳ</option>
    <option value="jp">Nhật Bản</option>
    <option value="kr">Hàn Quốc</option>
    <option value="other">Khác</option>
  </select>
  <br>

  <!-- Trường nhập bình luận -->
  <label>Bình luận</label>
  <br>
  <textarea name="binhluan" rows="4" cols="50" placeholder="Nhập bình luận tại đây..."></textarea>
  <br>

  <!-- Nút gửi biểu mẫu -->
  <input type="submit" value="Gửi">
</form>
