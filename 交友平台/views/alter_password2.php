<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>正在修改密碼</title> 
</head> 
<body> 
<?php 
session_start (); 
//$username = $_REQUEST ["username"]; 
$username = $_SESSION['username'];
$oldpassword = $_POST ["oldpassword"]; 
$newpassword_1 = $_POST ["newpassword_1"]; 
$newpassword_2 = $_POST ["newpassword_2"]; 
//$con = mysqli_connect ( "localhost", "scj0503", "maythird2000" ); 
include('connect.php');//連結資料庫
if (! $con) { 
die ( '資料庫連線失敗' . $mysqli_error () ); 
} 
mysqli_select_db ( $con,"login_info" ); 
$dbusername = null; 
$dbpassword = null; 
$result = mysqli_query($con , "SELECT * FROM login_info where username ='$username' ;" ); 
while ( $row = mysqli_fetch_array ( $result ) ) { 
//$dbusername = $row ["username"]; 
//$dbpassword = $row ["password"]; 
//$dbemail = $row ["email"]; 
} 
/*
if (is_null ( $dbusername )) { 
 
echo("使用者名稱不存在");
echo "<script> function(){window.location.href='login.php';},1500);</script>"; 
}
if (is_null ( $dbemail )) { 

echo("email不存在");
echo "<script> function(){window.location.href='login.php';},1500);</script>";

}
*/
if ($newpassword_1 != $newpassword_2) { 

echo("兩次密碼輸入不一致><");
echo "<script> function(){window.location.href='login.php';},1500);</script>";

}

/*
<?php 
//} 
//if ($oldpassword != $dbpassword) { 
?> 
<script type="text/javascript"> 
alert("密碼錯誤"); 
window.location.href="alter_password.html"
</script> 
*/
 
else{
mysqli_query ($con , "UPDATE login_info set password='$newpassword_1' where username='$username' " ) or die ( "存入資料庫失敗" . mysqli_error ($con) );//如果上述使用者名稱密碼判定不錯，則update進資料庫中 
mysqli_close ( $con ); 

//<script type="text/javascript">
echo("密碼修改成功，請重新登入~"); 
//echo "<script> function(){window.location.href='login.php';},1500);</script>";
//include('login.php');
header("refresh:0.5;url=login.php");//如果成功跳轉至welcome.html頁面
			exit;
}
?>

</body> 
</html> 