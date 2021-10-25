<!doctype html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>日付選択</title>
    </head>

    <body>

        <?php # $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
        <?php require '/var/www/.dbinfo.php'; ?>
        <?php $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>

        <h1>■ レース選択（option）</h1>

        <?php $ymd = $_GET['date'] ?>

        <form action='../select/option1.php' method='get'>
            <select name='race_id'>

                <?php foreach ($pdo -> query("SELECT * FROM info WHERE ymd = $ymd") as $row):?>
                <option value='<?php echo $row['race_id']?>'><?php echo $row['title']?></option>
                <?php endforeach ?>
            </select>

            <p><input type='submit' value='確定'></p>
        </from>

    </body>
</html>
