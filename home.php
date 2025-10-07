<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$user = "user"; 

if ($user === "admin") {
    include "admin.php";
} elseif ($user === "user") {
    include "user.php";
} else {
    echo "<h2>Role tidak dikenali. Akses ditolak!</h2>";
}
?>
