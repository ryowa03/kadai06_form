

<?php

$uname = $_POST['uname'];
$name = $_POST['name'] . "　　";
$time = date('Y-m-d H:i:s') . "\n";

// コンマの位置が誤っていました
$dataall = $uname . $name . $time;

if (strpos($dataall, '業務内容') !== false) {
    file_put_contents('data/data.txt', $dataall, FILE_APPEND);
} elseif (strpos($dataall, '雰囲気') !== false) {
    file_put_contents('data/data2.txt', $dataall, FILE_APPEND);
} elseif (strpos($dataall, '制度') !== false) {
    file_put_contents('data/data3.txt', $dataall, FILE_APPEND);
} elseif (strpos($dataall, 'その他') !== false) {
    file_put_contents('data/data4.txt', $dataall, FILE_APPEND);
} else {
    file_put_contents('data/data5.txt', $dataall, FILE_APPEND);
}


?>



<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
