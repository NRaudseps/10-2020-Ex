<?php

require_once 'app/Todo.php';
require_once 'app/TodoProcessing.php';

use TODO\app\Todo;
use TODO\app\TodoProcessing;

$filename = './data/task.csv';
$file = fopen($filename, 'rw+');
$id = TodoProcessing::getId(file($filename)) + 1;

if (isset($_POST['taskQuery'])) {
    $newTask = new Todo($_POST['taskQuery'], $id);

    TodoProcessing::saveTask($newTask, $file);
}
fclose($file);

$file = fopen($filename, 'rw+');
$tasks = $_POST['task'];
if (isset($_POST['task'])) {
    TodoProcessing::updateTasks($file, $tasks);
}
fclose($file);

$file = fopen($filename, 'rw+');
$tasks = TodoProcessing::getTasks($file);

require './views/tasks.views.php';