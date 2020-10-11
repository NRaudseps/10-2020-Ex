<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interest Calculator</title>
</head>
<body>

<form method="post">
    <div>
        <label for="principal">Principal Amount (in euros)</label>
        <input type="number" name="principal">
    </div>
    <div>
        <label for="interestRate">Interest Rate (in percentages)</label>
        <input type="number" name="interestRate">
    </div>
    <div>
        <label for="time">Time (in years)</label>
        <input type="number" name="time">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
<p>Result: <?= $result; ?></p>
</body>
</html>