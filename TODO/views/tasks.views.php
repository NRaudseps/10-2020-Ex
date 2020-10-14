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
    <?php for ($i = 0; $i < $id; $i++):
        if ($tasks[$i][0] !== null) { ?>
            <div>
                <label for="task"><?= $tasks[$i][1] ?></label>
                <input type="checkbox" name="task[]" value="<?= $tasks[$i][0] ?>">
            </div>
        <?php }
    endfor; ?>

    <div style="height: 30px"></div>
    <input type="text" name="taskQuery">
    <input type="submit">
</form>
</body>
</html>