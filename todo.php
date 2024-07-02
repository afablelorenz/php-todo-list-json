<?php

$tasksFile = './json/toDoList.json';

header("Content-Type: application/json");

if (isset($_GET['task'])) {
    $task = $_GET['task'];
    if (file_exists($tasksFile)) {
        $data = file_get_contents($tasksFile);
        $tasks = json_decode($data, true);
    } else {
        $tasks = [];
    }
    $tasks[] = $task;
    file_put_contents($tasksFile, json_encode($tasks));
    header('Location: ./index.php');
} else {
    if (file_exists($tasksFile)) {
        $data = file_get_contents($tasksFile);
        echo $data;
    } else {
        echo json_encode([]);
    }
}
?>