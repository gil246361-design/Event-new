<?php
// ในไฟล์ routes/login.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = getConnection();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // ตรวจสอบรหัสผ่านที่แฮชไว้
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        header("Location: /dashboard"); // ล็อกไปหน้าdashboard
        exit;
    } else {
        echo "อีเมลหรือรหัสผ่านไม่ถูกต้อง";
    }
} else {
    renderView('login');
}