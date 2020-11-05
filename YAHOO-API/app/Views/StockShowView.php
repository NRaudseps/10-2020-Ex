
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Stock</title>
</head>
<body>
    <h3>
        Company Name: <?php echo $stock->name();?> (<?php echo $stock->symbol();?>)
    </h3>
    <h2>
        Open <?php echo $stock->close();?>
    </h2>
    <h3>
        Close <?php echo $stock->open();?>
    </h3>
    <p>
        Volume <?php echo number_format($stock->volume());?>
    </p>
</body>
</html>