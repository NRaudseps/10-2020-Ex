<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safe Pin</title>
</head>
<body>
<div><?= $display; ?></div>
<div style="height: 20px"><?= str_repeat('*', strlen($_SESSION['input'])); ?></div>
<form method="post">
    <div>
        <input type="submit" name="num" value="1">
        <input type="submit" name="num" value="2">
        <input type="submit" name="num" value="3">
    </div>
    <div>
        <input type="submit" name="num" value="4">
        <input type="submit" name="num" value="5">
        <input type="submit" name="num" value="6">
    </div>
    <div>
        <input type="submit" name="num" value="7">
        <input type="submit" name="num" value="8">
        <input type="submit" name="num" value="9">
    </div>
    <div style="display: flex; position: relative; left: 28px;"><input type="submit" name="num" value="0"></div>
    <div style="height: 15px;"></div>
    <div style="display: flex; position: relative; left: 13px;"><input type="submit" name="submit"></div>
</form>
</body>
</html>