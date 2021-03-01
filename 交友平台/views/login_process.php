<!DOCTYPE html>

<html>
	<head>
		<tytle>test login</tytle>
	</head>
	<body>

		<?PHP session_start() ?>
		<?PHP
			header("Content-Type: text/html; charset=utf8");
			if(!isset($_POST["submit"])){
			exit("錯誤執行");
			}//檢測是否有submit操作 
			include('connect.php');//連結資料庫
			$username=$_POST['username'];
			$_SESSION['username']=$username;
			$password=$_POST['password'];//post獲取表單裡的password
			if ($username && $password){//如果使用者名稱和密碼都不為空
			$sql = "SELECT * FROM login_info WHERE username = '$username' AND password='$password'";//檢測資料庫是否有對應的username和password的sql
			$result = mysqli_query($con,$sql);//執行sql
			$rows=mysqli_num_rows($result);//返回一個數值
			if($rows){//0 false 1 true
				 $_SESSION['username'] = $username;//
			header("refresh:0.5;url=profile.php");//如果成功跳轉至welcome.html頁面
			exit;
			}else{
			echo "使用者名稱或密碼錯誤";
			echo "<script>setTimeout(function(){window.location.href='login.php';},1500);</script>";//如果錯誤使用js 1秒後跳轉到登入頁面重試;
			}
			}else{//如果使用者名稱或密碼有空
			echo "表單填寫不完整";
			echo "<script>setTimeout(function(){window.location.href='login.php';},1500);</script>";
			//如果錯誤使用js 1秒後跳轉到登入頁面重試;
			}
			mysqli_close($con);//關閉資料庫
		?>
	</body>

</html>
