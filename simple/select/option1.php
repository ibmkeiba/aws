<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>レース選択</title>
    </head>

    <body>

        <?php # $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
        <?php require '/var/www/.dbinfo.php'; ?>
        <?php $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>

        <h1>■ レース出馬表確認</h1>

                <?php $race_id = $_GET['race_id'] ?>

                <table border="1">

                        <?php # 表タイトル <tr> <th></th> </tr> ?>
                        <tr>
                                <?php foreach ($pdo -> query('show columns from result') as $col): ?>
                                <th><?php echo $col['Field'] ?></th>
                                <?php endforeach ?>
                        </tr>

                        <?php  # 各セル <tr> <td></td> </tr> ?>
                        <?php foreach ($pdo -> query("select * from result WHERE race_id = $race_id") as $row): ?>
                        <tr>
                                <?php foreach ($row as $col): ?>
                                <td><?php echo $col ?></td>
                                <?php endforeach ?>
                        </tr>
                        <?php endforeach ?>
                        </tr>

                </table>

        <h1>■ ユーザー入力</h1>

        </body>
</html>
