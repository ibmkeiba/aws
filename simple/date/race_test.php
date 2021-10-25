<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>レース選択</title>
</head>

<body>
    <?php # $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
    <?php require '/var/www/.dbinfo.php'; ?>
    <?php $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>

    <h1>■ レース選択（option）</h1>

    <form action='race_test2.php' method='get'>
        <select name='title'>
            <?php $ymd1 = $_POST["date"]; ?>
            <?php foreach ($pdo->query('SELECT title FROM info WHERE ymd = :ymd1') as $row) : ?>
            <?php endforeach ?>
        </select>

        <p><input type='submit' value='確定'></p>
        </from>


</body>

</html>
