<?php
    include __DIR__.'\database\dati.php';

    header('Content-Type: application/json');
    echo json_encode($database);
?>
