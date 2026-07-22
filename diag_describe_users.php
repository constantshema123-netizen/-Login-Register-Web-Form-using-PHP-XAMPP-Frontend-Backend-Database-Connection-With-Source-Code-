<?php
require 'connect.php';
if ($conn->connect_errno) {
    echo 'DB_CONNECT_ERROR: ' . $conn->connect_error . PHP_EOL;
} else {
    $res = $conn->query('DESCRIBE users');
    if ($res) {
        while ($row = $res->fetch_assoc()) {
            echo $row['Field'] . ' ' . $row['Type'] . PHP_EOL;
        }
    } else {
        echo 'DESCRIBE_ERR: ' . $conn->error . PHP_EOL;
    }
}
