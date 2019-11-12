<?php
$connect = mysqli_connect('127.0.0.1', 'root', '', 'cre8library', '3306');
//인코딩 설정용
mysqli_query($connect,"set session character_set_connection=utf8;");
mysqli_query($connect,"set session character_set_results=utf8;");
mysqli_query($connect,"set session character_set_client=utf8;");