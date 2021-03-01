<?php
require_once dirname(__FILE__)."./head.php";
require_once dirname(__FILE__). "/login_nav.php";

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>登入</title>
</head>

<!--看一下body的img-fluid那些要不要刪掉 或是換成什麼)-->
<body class="img-fluid body_type" alt="Responsive image">
	<div class="container animate__animated animate__fadeIn">
		<br><br><br><br>
		<div class="row ">
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<div class="wrapper border border-dark pt-3 pb-3 px-3 ">	
					<div class="text-right">
						<h3 class="form-signin-heading">登入</h3>
						<input
							id="username"
							name="username" 
							type="text" 
							class="form-control my-4" 
							placeholder="使用者名稱" 
							required=""
						>
						<input
							id="password"
							name="password"  
							type="password" 
							class="form-control my-4" 
							placeholder="密碼" 
							required=""
						>
						<div class="text-center">
							<button 
							class="btn btn-outline-secondary"  
							name="submit" 
							value="Login" 
							type="submit"><b>登入</b>
							</button>
						</div>
						<a href="./forget_password.php" class="psd">忘記密碼</a>
					</div>
				</div>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-6">
				<br><br><br><br><br>
				<div class="row justify-content-left">
					<h1 class="text-light">老朋友、歡迎回來</h1>
				</div>
				<br><br><br><br>
				<div class="row justify-content-right">
					<h1 class="text-light ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp We Miss You So Much.</h1>
				</div>
			</div>
		</div>
	</div>
</body>

