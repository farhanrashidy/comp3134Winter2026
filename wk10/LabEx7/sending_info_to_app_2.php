<!DOCTYPE html>
<html>
<head>
    <title>Sending Info (Mitigation)</title>
</head>
<body>

<form method="get">
    <input name="q" placeholder="Enter Text">
    <br/>
    <input type="submit" value="Go">
</form>

<?php
if (isset($_GET['q'])) {
    echo "<h2>You entered:</h2>";

    //strip_tags
    echo strip_tags($_GET['q']);
}
?>

</body>
</html>

