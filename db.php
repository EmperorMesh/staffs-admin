<?php
ob_start();
$db_host = "localhost";
$db_name = "zojatech";
$db_password = "";
$db_username = "root";

$pdo = new pdo("mysql:host=$db_host; dbname={$db_name}", $db_username, $db_password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($pdo) {
    echo "";
} else {
    echo "failed";
}
