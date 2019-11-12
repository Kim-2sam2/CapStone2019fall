<?php
$connect = mysqli_connect('1.245.186.98', 'cre8', 'hnu20162885', 'cre8library', '3306');
//인코딩 설정용
mysqli_query($connect,"set session character_set_connection=utf8;");
mysqli_query($connect,"set session character_set_results=utf8;");
mysqli_query($connect,"set session character_set_client=utf8;");
?>