<?php
    $stringRawData = file_get_contents('./database/data.json');

    $todoList = json_decode($stringRawData);
    $todoList[] = 'Carne da colture in laboratorio';

    header('Content-Type: application/json');
    echo json_encode($todoList);

    // var_dump($stringRawData, $todoList);
?>