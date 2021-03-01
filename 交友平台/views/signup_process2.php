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
			$birthday=$_POST['birthday'];//post獲取表單裡的name
			$sex=$_POST['sex'];
			$height=$_POST['height'];
			$age=$_POST['age'];//post獲取表單裡的password
			$star=$_POST['star'];
			$interest=$_POST['interest'];
			$region=$_POST['region'];
			$state=$_POST['state'];
			$intro=$_POST['intro'];
			$keyusername=$_SESSION['username'];
			
			include('connect.php');//連結資料庫
			$q="INSERT  INTO other_info(birthday,sex,height,age,star,interest,region,state,intro,keyusername) values ('$birthday','$sex','$height','$age','$star','$interest','$region','$state','$intro','$keyusername')";//向資料庫插入表單傳來的值的sql
			$reslut=mysqli_query($con,$q);//執行sql
			if (!$reslut){
			die('Error: ' . mysqli_error($con));//如果sql執行失敗輸出錯誤
			}else{
				//$_SESSION['username']=$keyusername;
			include('registration_3.php');
			//echo "註冊進度2/4";//成功輸出註冊成功
			}
			mysqli_close($con);//關閉資料庫
			?>
	</body>

</html>