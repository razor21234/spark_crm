<?php
try {
    $pdo = new PDO('sqlite:C:/laragon/www/laravel/database/database.sqlite');
    echo 'Connection successful!';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
