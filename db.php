<?php
    $host = 'localhost';
    $user = '';
    $pass = '';
    $db   = 'student_management_system';

    $connection = mysqli_connect($host, $user, $pass, $db);

    if (!$connection) {
    echo "Connection couldn't be established !";
    }
?>