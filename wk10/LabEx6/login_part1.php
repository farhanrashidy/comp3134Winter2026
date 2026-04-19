<?php
$weak_passwords = [
    "123456",
    "123456789",
    "12345678",
    "12345",
    "111111",
    "1234567",
    "sunshine",
    "qwerty",
    "iloveyou",
    "princess"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    if (in_array($password, $weak_passwords)) {
        echo "<h1>Successfully authenticated</h1>";
    } else {
        echo "<h1>Weak Password</h1>";
        echo "<p>Incorrect password</p>";
        showForm();
    }
} else {
    showForm();
}

function showForm() {
    echo '
    <form method="post">
        <label>Password</label>
        <input type="password" name="password">
        <br/>
        <input type="submit">
    </form>
    ';
}
?>
