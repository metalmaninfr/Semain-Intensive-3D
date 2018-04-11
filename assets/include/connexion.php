<?php
try {
    $conn = new PDO('mysql:dbname=modulor;host=localhost', 'root', 'wFo(pZt<');
    $conn->exec("DET NAMES UTF8");
} catch (PDOException $exception) {
    die ($exception->getMessage());
}

