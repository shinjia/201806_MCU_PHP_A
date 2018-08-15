<?php


$name = '阮今天';
$age  = 20;
$lineid = 'xxxx';
$pic = 'images/head2.jpg';



/*
$name = '陳信嘉';
$age = 30;
$lineid = 'shinjia168';
$pic = 'images/head1.jpg';
*/


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<h1>自我介紹</h1>
<p>today: 2016-06-04</p>
<p>姓名：{$name}</p>
<p>年齡：{$age}</p>
<p>LineID：{$lineid}</p>
<p><img src="{$pic}"></p>
</body>
</html>
HEREDOC;

echo $html;
?>