<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=db_alatacampingku", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
