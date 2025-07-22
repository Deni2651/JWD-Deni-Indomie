<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$users_file = 'users.json';

if (!file_exists($users_file)) {
    echo "<script>alert('Data pengguna tidak ditemukan.'); window.location.href='login.html';</script>";
    exit;
}

$users = json_decode(file_get_contents($users_file), true);
$login_success = false;

foreach ($users as $user) {
    if ($user['email'] === $email && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['email'];
        $_SESSION['nama'] = $user['nama'];
        $login_success = true;
        break;
    }
}

if ($login_success) {
    header("Location: ../index.php");
    exit;
} else {
    echo "<script>alert('Login gagal: Email atau password salah!'); window.location.href='login.html';</script>";
}
