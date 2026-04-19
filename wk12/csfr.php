<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "host" && $password === "pass") {
        $message = "Login Successful!";
    } else {
        $message = "Login Failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login Page</h2>

<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit">
</form>

<div>
    <?php echo $message; ?>
</div>

</body>
</html>
