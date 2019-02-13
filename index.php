<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php foreach ($todos as $todo) : ?>
            <li>$todo</li>
        <?php endforeach; ?>
    </ul>
    <br>
    <ul>
        <?php foreach ($todos as $todo) {
            echo "<li>$todo</li>";
        }?>
    </ul>
</body>
</html>
