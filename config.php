<?php
    define('DB_HOST', 'mysql-antaresdeveloper.alwaysdata.net');
    define('DB_USER', '373032');
    define('DB_PASS', 'Onlyyou000099');
    define('DB_NAME', 'antaresdeveloper_vehicle_management');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>