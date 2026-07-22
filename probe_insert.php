<?php
require 'connect.php';
if ($conn->connect_errno) {
    echo 'DB_CONNECT_ERROR: ' . $conn->connect_error . PHP_EOL;
} else {
    $res = $conn->query("INSERT INTO users(`FIRST NAME`,`LAST NAME`,`EMAIL`,`PASSWORD`) VALUES ('Probe','User','probe@example.com','123456')");
    if ($res) {
        echo 'INSERT_OK' . PHP_EOL;
    } else {
        echo 'INSERT_ERR: ' . $conn->error . PHP_EOL;
    }
}
