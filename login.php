<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "admin" && $pass == "admin123") {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid credentials.";
    }
}
?>

<form method="POST">
  <input name="user" placeholder="Username"><br>
  <input type="password" name="pass" placeholder="Password"><br>
  <button>Login</button>
</form>