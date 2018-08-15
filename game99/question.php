<?php
define('MIN_A', 1);
define('MAX_A', 9);

define('MIN_B', 1);
define('MAX_B', 9);


$a = mt_rand(MIN_A, MAX_A);
$b = mt_rand(MIN_B, MAX_B);

$pic_a = 'images/' . $a . '.jpg';
$pic_b = 'images/' . $b . '.jpg';



$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Game99</title>
</head>

<body>
<h1>CAI</h1>
<p><img src="{$pic_a}"><img src="images/mul.jpg"><img src="{$pic_b}"></p>
<p>
<a href="question.php">換一題</a> | 
<a href="answer.php?a={$a}&b={$b}">看答案</a>
</p>
</body>
</html>
HEREDOC;

echo $html;
?>