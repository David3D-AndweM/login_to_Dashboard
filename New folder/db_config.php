<?php
$host = "db-mysql-nyc3-46237-do-user-14100452-0.b.db.ondigitalocean.com";
$port = "25060";
$dbname = "defaultdb";
$username = "doadmin";
$password = "AVNS_lVNp5mBoALOd93t2MvK";

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;sslmode=require", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
