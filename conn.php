<?php
define('_HOST_NAME_', 'localhost');
define('_USER_NAME_', 'root');
define('_PASSWORD_', '');
define('_DATABASE_NAME_', 'entertainment');

try {
    
    $signin = new PDO('mysql:host=' . _HOST_NAME_ . '; dbname=' . _DATABASE_NAME_, _USER_NAME_, _PASSWORD_);
    $signin->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log($e->getMessage());
    exit('Connection Failed');
    
}
