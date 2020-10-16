<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone Number</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="phone">
    <input type="submit">
</form>
<div style="height: 30px;"></div>
<?php if (!empty($search)) {
    echo 'First Name: ' . $search[0] . ' Last Name: ' . $search[1];
} else {
    echo 'Phone number was not found';
} ?>
</body>
</html>