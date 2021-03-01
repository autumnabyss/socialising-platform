<?php 
			$email=$_POST['email'];//post獲取表單裡的name
			$username=$_POST['username'];
			$password=$_POST['password'];//post獲取表單裡的password
			include('connect.php');//連結資料庫
			$q="INSERT  INTO login_info(email,username,password) values ('$email','$username','$password')";//向資料庫插入表單傳來的值的sql
			$reslut=mysqli_query($con,$q);//執行sql
			if (!$reslut){
			die('Error: ' . mysqli_error($con));//如果sql執行失敗輸出錯誤
			}else{
			echo "註冊成功";//成功輸出註冊成功
			}
			mysqli_close($con);//關閉資料庫
			include('home.php');
?>