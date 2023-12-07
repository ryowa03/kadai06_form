
<h3>その他</h3>



<?php
// ファイルを開く


$data2 = file_get_contents('data/data4.txt');


    $output2 .= "<div class='d' style='text-align: left;'>" . nl2br($data4) . "</div>";

 
// 最終的な表示

echo $output4;


$filename = 'data/data4.txt'; // セミコロンが抜けていました
$lines = count(file($filename));



echo "<br><br><br><br> <span style = 'color:blue; font-size:22px; '>今月の問い合わせ数: $lines";
?>


