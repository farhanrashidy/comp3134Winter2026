<!DOCTYPE html>
<html>
<head>
    <title>Sending Info (No Mitigation)</title>
</head>
<body>

<form method="get">
    <input name="q" placeholder="Enter Text">
    <br/>
    <input type="submit" value="Go">
</form>

<?php
// Output WITHOUT filtering
if (isset($_GET['q'])) {
    echo "<h2>You entered:</h2>";
    echo $_GET['q']; // XSS vulnerability
}
?>

</body>
</html>

