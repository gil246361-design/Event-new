<?php
// แก้ไขไฟล์ routes/register.php
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        renderView('register', ['title' => 'สมัครสมาชิก']);
        break;
    case 'POST':
        handleRegister();
        break;
}

function handleRegister(): void {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($password !== $confirm_password) {
        echo "รหัสผ่านไม่ตรงกัน!";
        return;
    }

    $conn = getConnection();
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $hashed_password);

    if ($stmt->execute()) {
        // เมื่อสมัครเสร็จ ให้ส่งไปหน้า login
        header("Location: /login");
        exit;
    } else {
        echo "เกิดข้อผิดพลาด: " . $conn->error;
    }
}