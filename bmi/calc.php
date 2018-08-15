<?php
$height = isset($_POST['height']) ? $_POST['height'] : '';
$weight = isset($_POST['weight']) ? $_POST['weight'] : '';

if($height==0)
{
	/*
	$url = 'input.php?h=' . $height . '&w=' . $weight;
	$msg = '身高不得為零，請<a href="' . $url . '">重新輸入</a>';
	echo $msg;
	exit;
	*/
	$url = 'input.php?h=' . $height . '&w=' . $weight . '&status=X';
	header('Location:' . $url);
}

// 計算 BMI 值
$bmi = ($weight) / ( ($height/100) * ($height/100) );


// 取兩位小數
$bmi = round($bmi, 2);


// 判斷狀況
if( $bmi>=24 )
{
	$msg = '月巴月半';
	$pic = 'images/s1.jpg';
	$url = 'page1.html';
}
elseif( $bmi<24 && $bmi>=22 )
{
	$msg = '過重';
	$pic = 'images/s2.jpg';
	$url = 'page2.html';
}
elseif( $bmi<22 && $bmi>=17.5 )
{
	$msg = '正常';
	$pic = 'images/s3.jpg';
	$url = 'page3.html';
}
elseif( $bmi<17.5 )
{
	$msg = '太輕';
	$pic = 'images/s4.jpg';
	$url = 'page4.html';
}
else
{
	$msg = '程式有錯';
}



$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<h1>BMI</h1>
<p>你的BMI是 {$bmi}</p>
<p>{$msg}</p>
<p><img src="{$pic}"></p>
<p>建議 <a href="{$url}">點此處</a></p>
<iframe src="{$url}" width="600" height="300"></iframe>
<p><a href="input.php?h={$height}&w={$weight}">重新輸入</a></p>

<hr />
<p>height: {$height}</p>
<p>weight: {$weight}</p>
</body>
</html>
HEREDOC;

echo $html;
?>