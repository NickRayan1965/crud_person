<?php
    $connection = mysqli_connect(
        'localhost',
        'root',
        '1234',
        'persondb'
    );
    if (!isset($connection)) {
        echo "Db no conectada\n";
    }
    session_start();
?>