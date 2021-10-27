<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>レース選択</title>
    </head>

    <body>

        <?php $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
        <?php # require '/var/www/.dbinfo.php'; ?>
        <?php $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>

        <h1>■ レース出馬表確認</h1>

        <?php $race_id = $_GET['race_id'] ?>

        <table border="1">

            <?php $select = 'waku, umaban, bamei, sexage, handicap, jockey, popular, odds, stable, weight, ranking_pre, racetime_pre' ?>
            <?php $select_ja = array('枠', '馬番', '馬名', '性齢', '斤量', '騎手', '人気', '単勝オッズ', '厩舎', '馬体重', '予想着順', '予想タイム') ?>

            <?php # 表タイトル <tr> <th></th> </tr> ?>
            <tr>
                <?php foreach ($select_ja as $col): ?>
                <th><?php echo $col ?></th>
                <?php endforeach ?>
            </tr>

            <?php  # 各セル <tr> <td></td> </tr> ?>
            <?php foreach ($pdo -> query("select $select from result WHERE race_id = $race_id") as $row): ?>
            <tr>
                <?php foreach ($row as $col): ?>
                <td><?php echo $col ?></td>
                <?php endforeach ?>
            </tr>
            <?php endforeach ?>
        
        </table>

        <h1>■ ユーザー入力</h1>

        <form action='../result/index1.php' method='get'>

            <input type='hidden' name='race_id' value='<?php echo $race_id ?>'>

            <h2>・予算を入力してください</h2>
            ¥ <input type='text' name='budget'>

            <h2>・リスク志向を選択してください</h2>
            <input type='radio' name='risk' value='1'>ハイリスクハイリターン<br>
            <input type='radio' name='risk' value='2'>ローリスクローリターン<br>

            <input type='submit' value='決定'>

        </form>
        

    </body>
</html>
