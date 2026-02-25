<?php
// ตรวจสอบว่ามีการล็อกอินหรือยัง
if (!isset($_SESSION['user_id'])) {
    header("Location: /login"); // ถ้ายังไม่ล็อกอิน ให้ดีดกลับไปหน้า login
    exit;
}

// ถ้าล็อกอินแล้ว ให้แสดงหน้า home พร้อมส่งชื่อผู้ใช้ไปแสดงผล
renderView('home', [
    'title' => 'หน้าหลัก',
    'userName' => $_SESSION['user_name']
]);