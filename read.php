

<h3>業務内容について</h3>


<?php
// ファイルを開く


$data = file_get_contents('data/data.txt');


    $output .= "<div class='c' style='text-align: left;'>" . nl2br($data) . "</div>";

 
// 最終的な表示



echo $output;


$filename = 'data/data.txt'; 
$lines = count(file($filename));


echo "<br><br><br><br><span style = 'color:blue; font-size:22px; ' >今月の問い合わせ数: $lines";
?>










