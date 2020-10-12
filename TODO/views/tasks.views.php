<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
</head>
<body>
<form method="post">
    <?php foreach ($tasks as $task): ?>
        <div>
            <label for="task"><?=$task->getTask()?></label>
            <input type="checkbox" name="task[]" value="<?=$task->getTask()?>">
        </div>
    <?php endforeach; ?>

    <div style="height: 30px"></div>
    <input type="submit">
</form>
</body>
</html>