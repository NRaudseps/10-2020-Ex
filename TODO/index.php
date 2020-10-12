<?php

require_once 'app/Todo.php';

use TODO\app\Todo;

$tasks = [
    new Todo('change clothes', 0),
    new Todo('clean dishes', 1),
    new Todo('go shopping', 2)
];

$file = fopen('./data/task.csv', 'rw+');
fputcsv($file, [$tasks[0]->getId(), $tasks[0]->getTask()]);

var_dump($_POST['task']);

require './views/tasks.views.php';