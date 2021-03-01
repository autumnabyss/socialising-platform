<!DOCTYPE html>

<html>
	<head>
		<tytle></tytle>
	</head>
	<body>
		<?PHP session_start() ?>
		<?php 

		$email="";
		$username="";
		$password_1="";
		$password_2="";
		$errors = array();

			header("Content-Type: text/html; charset=utf8");
			if(!isset($_POST['submit'])){
			exit("錯誤執行");
			}//判斷是否有submit操作
			$email=$_POST['email'];//post獲取表單裡的name
			$username=$_POST['username'];
			$_SESSION['username']=$username;
			$password_1=$_POST['password'];//post獲取表單裡的password
			$password_2=$_POST['passwordconfirm'];
			include('connect.php');//連結資料庫
			
			//$sql = "SELECT email FROM login_info";
			
			if(empty($email))
			{
				array_push($errors,"email is required");
			}
			if(empty($username))
			{
				array_push($errors,"username is required");
				//header("refresh:0;url=registration_1.php");
				//exit("此email已用過 嗚嗚");
				//echo "<script >alert('此email已用過 嗚嗚');location.href='registration_1.php'</script>";

			}
			if(empty($password_1))
			{
				array_push($errors,"password is required");
			}

			if($password_1!=$password_2)
			{
				array_push($errors,"the two password do not match");
			}


			if ($email && $password_1){//如果使用者名稱和密碼都不為空
			$sql = "SELECT * FROM login_info WHERE email = '$email' OR username='$username'";//檢測資料庫是否有對應的username和password的sql
			$result = mysqli_query($con,$sql);//執行sql
			$rows = mysqli_num_rows($result);//返回一個數值
			}
			if($rows){//0 false 1 true
				array_push($errors,"email or username has been used");
				echo "使用者名稱或信箱已存在，請在試一次";
				//include('registration_1.php');
				echo "<script>setTimeout(function(){window.location.href='registration_1.php';},1500);</script>";
				//exit;
			}
			elseif(count($errors) == 0){
				$password=md5($password_1);
				$q="INSERT  INTO login_info(email,username,password) values ('$email','$username','$password_1')";//向資料庫插入表單傳來的值的sql
				$reslut=mysqli_query($con,$q);//執行sql
				include('registration_2.php');
			}
			
			//header("refresh:0;url=home.php");//如果成功跳轉至welcome.html頁面
			//exit;
			/*
			}else{
			echo "使用者名稱或密碼已存在";
			echo "<script>
			setTimeout(function(){window.location.href='registration_1.php';},1000);
			</script>
			";//如果錯誤使用js 1秒後跳轉到登入頁面重試;
			}
			}else{//如果使用者名稱或密碼有空
			echo "表單填寫不完整";
			echo "
			<script>
			setTimeout(function(){window.location.href='registration_1.php';},1000);
			</script>";
			//如果錯誤使用js 1秒後跳轉到登入頁面重試;
			}*/
			/*
			if(count($errors) == 0)
			{
				$password=md5($password_1);
				$q="INSERT  INTO login_info(email,username,password) values ('$email','$username','$password_1')";//向資料庫插入表單傳來的值的sql
				$reslut=mysqli_query($con,$q);//執行sql
				include('registration_2.php');
			}
			*/
			//$password=md5($password_1);
				//$q="INSERT  INTO login_info(email,username,password) values ('$email','$username','$password_1')";//向資料庫插入表單傳來的值的sql
				//$reslut=mysqli_query($con,$q);//執行sql
			//$reslut=mysqli_query($con,$q);//執行sql
			/*
			if (!$reslut){
			die('Error: ' . mysqli_error($con));//如果sql執行失敗輸出錯誤
			}else{
			include('registration_2.php');
			//echo "註冊進度1/4";//成功輸出註冊成功
			}
			*/
			mysqli_close($con);//關閉資料庫
			
		?>
	</body>

</html>