    <?php
    session_start(); // Đặt ở đầu file để có thể dùng session

    $title = '';
    $output = '';

    try {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["name"], $_POST["password"])) {

            include 'includes/DatabaseConnection.php';
            $username = $_POST["name"];
            $password = $_POST["password"];

            $stmt = $pdo->prepare("SELECT * FROM users WHERE name = :name OR email =:name");
            $stmt->execute([':name' => $username]);
            $user = $stmt->fetch();

            
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user['name'];
                $_SESSION['id'] = $user['id'];
                $_SESSION['role'] = $user['role']; // Lưu quyền vào session

                // Phân quyền chuyển trang
                if ($user['role'] === 'admin') {
                    header('Location: admin/dashboard.php');
                    exit;
                } else {
                    header('Location: display.php');
                    exit;
                }
            } else {
                echo "<script>alert('Invalid username or password.')</script>";
            }

        } else {
            // Hiển thị form đăng nhập
            $title = "Login";
            ob_start();
            include "template/login.html.php";
            $output = ob_get_clean();
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Hiển thị nội dung lên trang
    include "template/home.html.php";
