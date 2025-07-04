<?php
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'test');
    define('DB_USER', 'root');
    define('DB_PASS', 'MyPass123!');

    function getDBConnection() {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            return new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }