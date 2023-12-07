
<h3>待遇や制度について</h3>



<?php
// ファイルを開く


$data2 = file_get_contents('data/data3.txt');


    $output3 .= "<div class='c' style='text-align: left;'>" . nl2br($data3) . "</div>";

 
// 最終的な表示

echo $output3;


$filename = 'data/data3.txt'; 
$lines = count(file($filename));



echo "<br><br><br><br> <span style = 'color:blue; font-size:22px; '>今月の問い合わせ数: $lines";
?>


