<?php
$server="172.20.10.7";//主機
$db_username="root";//你的資料庫使用者名稱
$db_password="";//你的資料庫密碼

$con = mysqli_connect($server,$db_username,$db_password);//連結資料庫
if(!$con){
die("can't connect".mysqli_error());//如果連結失敗輸出錯誤
}
mysqli_select_db($con,'chatroom');//選擇資料庫（我的是test）
?>