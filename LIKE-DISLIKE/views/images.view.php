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
    <?php foreach ($images as $image) : ?>
        <div>
            <img src="./img/<?=$image?>">
            <form action="" method="post">
                <input type="submit" name="<?=$image?>" value="Like">
                <input type="submit" name="<?=$image?>" value="Dislike">
            </form>
        </div>
        <div style="height: 30px"></div>
    <?php endforeach; ?>
</body>
</html>