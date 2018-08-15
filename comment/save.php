<?php
$nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$comment  = isset($_POST['comment'])  ? $_POST['comment']  : '';


// $filename = 'save/data.txt';
$filename = 'save/data_' . date('Ymd', time()) . '.txt';  // 每日存成不同的檔案


// 設定存檔的內容
/*
$data = '姓名：' . $nickname;
$data .= '意見：' . $comment;
*/

$today = date('Y-m-d H:i:s', time());


$data = <<< HEREDOC
時間：{$today}
姓名：{$nickname}
意見：{$comment}
-------------------------------------------------

HEREDOC;



// 存檔 (方法一)
// file_put_contents($filename, $data, FILE_APPEND);


// 存檔 (方法二)
$old = file_get_contents($filename);
$new = $data . $old;
file_put_contents($filename, $new);




$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Comment</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<p>謝謝，已經收到您的意見!!!</p>
<hr />
<p>{$data}</p>

</body>
</html>
HEREDOC;

echo $html;
?>