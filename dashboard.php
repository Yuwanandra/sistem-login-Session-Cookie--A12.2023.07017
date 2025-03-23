<?php
session_start();
if (!isset($_SESSION["user_id"]) && isset($_COOKIE["user_id"])) {
    $_SESSION["user_id"] = $_COOKIE["user_id"];
    $_SESSION["role"] = $_COOKIE["role"];
}

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION["role"] == "admin") {
    echo "<h2>Selamat datang Admin!</h2>";
    echo "<a href='manage_users.php'>Kelola Pengguna</a>";
} else {
    echo "<h2>Selamat datang Pengguna!</h2>";
}

echo "<a href='logout.php'>Logout</a>";
?>
