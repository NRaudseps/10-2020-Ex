<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Like or Dislike</title>
</head>
<body>
<?php for ($i = 0; $i < count($images); $i++) : ?>
    <div>
        <img src="<?= $images[$i] ?>">
        <form action="" method="post">
            <input type="submit" name="<?= $imageNames[$i] ?>" value="Like">
            <input type="submit" name="<?= $imageNames[$i] ?>" value="Dislike">
        </form>
    </div>
    <div style="height: 30px"></div>
<?php endfor; ?>
</body>
</html>