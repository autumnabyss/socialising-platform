<?php
session_start();
include('connect.php');
if(!isset($_POST["accept"])&&!isset($_POST["delete"])){
exit("錯誤執行");
}
if (isset($_POST['accept'])) {
   $aname=$_SESSION['username'];
	$bname= $_POST['accept'];
	$state='1';
}
if (isset($_POST['delete'])) {
	$aname=$_SESSION['username'];
	$bname= $_POST['delete'];
	$state='2';
  /*  $ID = $_POST['id'];
	$_SESSION['state']='2';
	$_SESSION['bname']=$ID;
	$_SESSION['aname']=$_SESSION['username'];
    header("refresh:0;url=accept1.php");*/
}
/*
$aname=$_SESSION['aname'];
$bname=$_SESSION['bname'];
$state=$_SESSION['state'];*/
//echo $aname;
//echo $bname;
if ($aname && $bname){//如果使用者名稱和密碼都不為空
/*
$sql = "select id from user where username = '$aname'";//檢測資料庫是否有對應的username和password的sql
$result = mysqli_query($con,$sql);//執行sql
$rowa=$result->fetch_array(MYSQLI_BOTH);//返回一個數值
$sql = "select id from user where username = '$bname'";//檢測資料庫是否有對應的username和password的sql
$result = mysqli_query($con,$sql);//執行sql
$rowb=$result->fetch_array(MYSQLI_BOTH);//返回一個數值
*/
//echo $rowa[0];
//echo $rowb[0];
	//0 false 1 true成功進去找資料
	if($state=='1')
	{
		$sql="UPDATE `chat_room` SET `accept`=1 WHERE `Aid`='$aname' AND `Bid`='$bname'";
		$result= mysqli_query($con,$sql);//
		if (mysqli_query($con, $sql)) {
     // echo "資料新增成功";
	  $_SESSION['username']=$aname;
	 header("refresh:0;url=profile.php");
		}
	}
	if($state=='2')
	{
		$sql="UPDATE `chat_room` SET `accept`=2 WHERE `Aid`='$aname' AND `Bid`='$bname'";
		$result= mysqli_query($con,$sql);//
		if (mysqli_query($con, $sql)) {
     // echo "資料新增成功";
	  	  $_SESSION['username']=$aname;
	 header("refresh:0;url=profile.php");
		}
	}
	
}

?>