<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chatroom</title>
</head>
<body>

<!--This Script Shows the Name of the Person-->
<?php
require_once '../vendor/autoload.php';

use App\Person;

$name = Person::getName($_GET['id']);
if (!empty($name)) {
    echo 'Hello ' . $name . '!';
}
?>

<div style="height: 30px;"></div>
<form action="" method="post">
    <input type="text" name="message">
    <div>
        <input type="submit" name="message-submit">
    </div>
</form>
<div style="height: 50px;"></div>
<form method="get" action="/">
    <input type="submit" value="Go To Main Page">
</form>

<!--This Script saves the message the user has submitted-->
<?php
require_once '../vendor/autoload.php';

use App\Chatroom;

Chatroom::saveMessage($_GET['id'], $_POST['message']);
?>

</body>
</html>