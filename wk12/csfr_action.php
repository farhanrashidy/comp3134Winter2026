<?php
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sessionToken = $_SESSION["confirmation"];
    $postToken = $_POST["confirmation"];

    if ($sessionToken === $postToken) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "host" && $password === "pass") {
            $message = "Secure Login Successful!";
        } else {
            $message = "Login Failed!";
        }

    } else {
        $message = "CSRF Attack Detected!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Secure Login</h2>

<div><?php echo $message; ?></div>

</body>
</html>
