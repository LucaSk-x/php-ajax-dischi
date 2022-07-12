<?php 
    require '../db/api.php';

    header("Content-Type: application/json");

    echo json_encode(["dates" => $dati]);
?>