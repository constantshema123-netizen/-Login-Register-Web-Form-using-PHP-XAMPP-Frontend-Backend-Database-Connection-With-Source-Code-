<?php
require 'connect.php';
if ($conn->connect_errno) {
    echo 'DB_CONNECT_ERROR: ' . $conn->connect_error . PHP_EOL;
} else {
    $res = $conn->query("SELECT COUNT(*) AS c FROM information_schema.tables WHERE table_schema = 'login' AND table_name = 'users'");
    if ($res) {
        $row = $res->fetch_assoc();
        echo 'TABLE_EXISTS=' . $row['c'] . PHP_EOL;
    } else {
        echo 'CHECK_TABLE_ERROR: ' . $conn->error . PHP_EOL;
    }

    $res2 = $conn->query('SELECT * FROM users LIMIT 1');
    if ($res2) {
        echo 'QUERY_OK=' . $res2->num_rows . PHP_EOL;
    } else {
        echo 'QUERY_ERR=' . $conn->error . PHP_EOL;
    }
}
