<?php

function h($i){
    return htmlspecialchars($i, ENT_QUOTES);
}

$name = h($_POST['name']);
$age = h($_POST['age']);
$text = h($_POST['text']);

date_default_timezone_set('Asia/Tokyo');
$NowTime = date('Y/m/d H:i:s');

$str = $text.', '.$name.', '.$age.', '.$NowTime;


// File書き込み //
define ( 'FILES', './data.txt');

$file = fopen( FILES, "a");
fwrite($file,$str. "\n");
fclose($file);

?>

<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset='utf-8'>
    <title>書き込み</title>
</head>

<body>
    <p>書き込みしました。</p>
    <p>時間: <?= $NowTime ?> </p>
    <p>名前: <?= $name ?> </p>
    <p>年齢: <?= $age ?> </p>
    <p>コメント内容: <?= $text ?> </p>
    <a href='read.php'>結果</a>
    <br>
    <a href='index.php'>戻る</a>
</body>

</html>