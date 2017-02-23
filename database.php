<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=pst28';
    $username = 'pst28';
    $password = '1PRhYCUnM';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
