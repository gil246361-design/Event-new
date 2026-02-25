<html>
<head>
    <title>สมัครสมาชิก</title>
</head>
<body>
    <main>
        <h1>สมัครสมาชิก</h1>
        <section>
            <form action="/register" method="post">
                <label for="name">ชื่อ:</label><br>
                <input type="text" name="name" id="name" required><br>

                <label for="email">อีเมล:</label><br>
                <input type="email" name="email" id="email" required><br>

                <label for="password">รหัสผ่าน:</label><br>
                <input type="password" name="password" id="password" required><br>

                <label for="confirm_password">ยืนยันรหัสผ่าน:</label><br>
                <input type="password" name="confirm_password" id="confirm_password" required><br><br>

                <button type="submit">Submit</button>
            </form>
            <p>มีบัญชีอยู่แล้ว? <a href="/login">เข้าสู่ระบบ</a></p>
        </section>
    </main>
</body>
</html>