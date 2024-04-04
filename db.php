<?php
    $host = 'localhost';
    $user = 'phpmyadmin';
    $pass = 'Q1w2e3r4t5!';
    $db   = 'student_management_system';

    $connection = mysqli_connect($host, $user, $pass, $db);

    if (!$connection) {
    echo "Connection couldn't be established !";
    }
?>