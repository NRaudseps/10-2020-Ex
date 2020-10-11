<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person Register</title>
</head>
<body>
<h1><?= 'Enter Your Personal Information'; ?></h1>
<form method="post">
    <div>
        <label for="name">Enter Your Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="surname">Enter Your Surname:</label>
        <input type="text" name="surname">
    </div>
    <div>
        <label for="code">Enter Your Personal Code:</label>
        <input type="text" name="code">
    </div>
    <div>
        <label for="address">Enter Your Address:</label>
        <input type="text" name="address">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
<h1>Person Search</h1>
<form method="post">
    <div>
        <label for="code">Enter The Person Code</label>
        <input type="text" name="code">
        <input type="submit">
    </div>
</form>
<div>
    <?php
    if ($address !== '' && $personQuery !== []) {
        echo 'Name: ' . $personQuery[0] . '<br/>';
        echo 'Surname: ' . $personQuery[1] . '<br/>';
        echo 'Personal Code: ' . $personQuery[2] . '<br/>';
        echo 'Address: ' . $personQuery[3] . '<br/>';
    } else {
        echo '';
    }
    ?>
</div>
</body>
</html>