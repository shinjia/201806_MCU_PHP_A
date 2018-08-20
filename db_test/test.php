<?php

$link = mysqli_connect('localhost', 'root', '', 'class');

$sqlstr = "INSERT INTO person(usercode, username, address, birthday, height, weight, remark) VALUES ('P019', 'Helen', 'Taipei', '1987-3-4', 170, 75, 'hello') ";

mysqli_query($link , $sqlstr);

mysqli_close($link);

echo 'ok';

?>