<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>日付選択</title>
    </head>
    
    <body>

        <?php $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
        <?php # require '/var/www/.dbinfo.php'; ?>
        <?php $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>

        <h1>■ 日付選択（option）</h1>

        <form action='race_test.php' method='get'>
            <select name='date'>

                <?php foreach ($pdo -> query('SELECT ymd FROM info GROUP BY ymd') as $row):?>
                <option value='<?php echo $row['ymd']?>'><?php echo $row['ymd']?></option>
                <?php endforeach ?>
            </select>
         
            <p><input type='submit' value='確定'></p>
        </from>

    </body>
</html>
