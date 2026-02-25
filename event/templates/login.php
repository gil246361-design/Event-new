<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เข้าสู่ระบบ</title>
</head>
<body>
    <main>
        <h1>เข้าสู่ระบบ</h1>
        <nav>
            <a href="/">หน้าหลัก</a>
            <a href="/register">สมัครสมาชิก</a>
        </nav>

        <form action="/login" method="post">
            <label for="email">อีเมลผู้ใช้</label><br>
            <input type="email" name="email" id="email" required><br>

            <label for="password">รหัสผ่าน</label><br>
            <input type="password" name="password" id="password" required><br><br>

            <button type="submit">เข้าสู่ระบบ</button>
        </form>
    </main>
</body>
</html>