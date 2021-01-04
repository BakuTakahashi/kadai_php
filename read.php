<?php

define ( 'FILES', './data.txt');
$file = fopen (FILES,'r');
while ($getData = fgets($file)){
    $newData = explode(',', $getData);
}

foreach ($newData as $key) {
    echo '<td>' . $key. '</td>';
}

fclose($file);







?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果</title>
</head>

<body>
<br>
<a href="index.php">書き込みはこちら</a>
</body>

</html>

