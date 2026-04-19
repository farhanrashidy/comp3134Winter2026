<?php
// Hardcoded password
$correct_password = "admin123";

// Hidden username
$username = "BengalTiger1971";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_password = $_POST["password"];
    $hidden_user = $_POST["username"];

    if ($entered_password === $correct_password) {
        echo "<h2>Welcome $hidden_user to Your Portal</h2>";
    } else {
        echo "<h3>Incorrect password. Try again.</h3>";
        showForm($hidden_user);
    }
} else {
    showForm($username);
}

function showForm($username) {
    echo '
    <form method="POST">
        <label>Password:</label>
        <input type="password" name="password" required>

        <input type="hidden" name="username" value="'.$username.'">

        <br><br>
        <input type="submit" value="Login">
    </form>
    ';
}
?>
