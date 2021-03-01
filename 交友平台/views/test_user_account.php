<!DOCTYPE html>

<html>
	<head>
		<tytle>test user_account</tytle>
	</head>
	<body>
		<?php
			include("connect.php");
			$sql = "SELECT * FROM login_info";
			if($stmt=$con->query($sql))
			{
				while($result=mysqli_fetch_object($stmt))
					echo'<p>name: '.$result->username.'</p>';
			}
		?>
	</body>

</html>