
<h3>部署の雰囲気について</h3>



<?php
// ファイルを開く


$data2 = file_get_contents('data/data2.txt');


    $output2 .= "<div class='c' style='text-align: left;'>" . nl2br($data2) . "</div>";

 
// 最終的な表示

echo $output2;


$filename = 'data/data2.txt'; // セミコロンが抜けていました
$lines = count(file($filename));



echo "<br><br><br><br> <span style = 'color:blue; font-size:22px; '>今月の問い合わせ数: $lines";
?>







