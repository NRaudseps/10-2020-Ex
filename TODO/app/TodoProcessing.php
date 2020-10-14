<?php


namespace TODO\app;


class TodoProcessing
{
    public static function getId($file): int
    {
        $file = (array)$file;

        return count($file);
    }

    public static function saveTask(Todo $task, $file): void
    {
        if ($task->getTask() !== '') {
            while (!feof($file)) {
                $taskInfo = fgetcsv($file);
            }
            fputcsv($file, [$task->getId(), $task->getTask()]);
        }
    }

    public static function getTasks($file): array
    {
        $info = [];
        while (($line = fgetcsv($file)) !== FALSE) {
            $info[] = $line;
        }

        return $info;
    }

    public static function updateTasks($file, $taskIDs): void
    {
        $source = TodoProcessing::getTasks($file);
        $info = [];

        $i = 0;
        foreach ($source as $item) {
            if (!in_array($source[$i][0], $taskIDs)) {
                $info[] = $item;
            }
            $i++;
        }

        unlink('./data/task.csv');
        $fp = fopen('./data/task.csv', 'w+');

        $i = 1;
        foreach ($info as $item) {
            $item[0] = $i;
            fputcsv($fp, $item);
            $i++;
        }
        fclose($file);
    }
}