<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<tytle></tytle>
	</head>
	<body>
		<?php 
			header("Content-Type: text/html; charset=utf8");
			if(!isset($_POST['submit'])){
			exit("錯誤執行");
			}//判斷是否有submit操作
			$want_sex=$_POST['want_sex'];//post獲取表單裡的name
			$want_state=$_POST['want_state'];
			$want_age=$_POST['want_age'];//post獲取表單裡的password
			$want_region=$_POST['want_region'];//post獲取表單裡的password
			$want_height=$_POST['want_height'];//post獲取表單裡的password
			$keyusername_w=$_SESSION['username'];
			
			include('connect.php');//連結資料庫
			$q="INSERT  INTO want(want_sex,want_state,want_age,want_region,want_height,keyusername) values ('$want_sex','$want_state','$want_age','$want_region','$want_height','$keyusername_w')";//向資料庫插入表單傳來的值的sql
			$reslut=mysqli_query($con,$q);//執行sql
			if (!$reslut){
			die('Error: ' . mysqli_error($con));//如果sql執行失敗輸出錯誤
			}else{
			//echo "註冊成功";//成功輸出註冊成功
			}
			mysqli_close($con);//關閉資料庫
			include('home.php');
			?>
	</body>

</html>