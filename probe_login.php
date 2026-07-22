<?php
require 'connect.php';
if ($conn->connect_errno) {
    echo 'DB_CONNECT_ERROR: ' . $conn->connect_error . PHP_EOL;
} else {
    $res = $conn->query("SELECT * FROM users WHERE `EMAIL`='probe@example.com' AND `PASSWORD`='123456'");
    if ($res) {
        echo 'LOGIN_MATCH=' . $res->num_rows . PHP_EOL;
    } else {
        echo 'LOGIN_ERR: ' . $conn->error . PHP_EOL;
    }
}
