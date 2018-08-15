<?php
$h = isset($_GET['h']) ? $_GET['h'] : '';
$w = isset($_GET['w']) ? $_GET['w'] : '';
$status = isset($_GET['status']) ? $_GET['status'] : '';

$msg = '請輸入身高體重';
if($status=='X')
{
	$msg = '<p style="color:#FF0000;">身高不得為零，請重新輸入...</p>';
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
{$msg}
<form method="post" action="calc.php">
	<p>身高：<input type="text" name="height" value="{$h}"></p>
	<p>體重：<input type="text" name="weight" value="{$w}"></p>
	<p><input type="submit" value="計算bmi"></p>
</form>

</body>
</html>
HEREDOC;

echo $html;
?>