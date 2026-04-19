  GNU nano 7.2                            directory_traversal_part2.php
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Default path
$path = isset($_GET['q']) ? $_GET['q'] : '.';

// Prevent directory traversal
$path = basename($path);

// Ensure directory exists
$fullPath = __DIR__ . "/" . $path;

print "<pre>";

if (file_exists($fullPath) && is_dir($fullPath)) {

    // BONUS: Prevent filenames
    if (strpos($path, '.') !== false && $path !== '.') {
        echo "Access denied: filenames are not allowed.";
    } else {
        print_r(scandir($fullPath));
    }

} else {
    echo "Invalid directory.";
}

print "</pre>";
?>
