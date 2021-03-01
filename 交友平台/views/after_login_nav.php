<?php
 session_start();
$username=$_SESSION['username'];
include('date.php');
?>
<head>
<script>

</script>
<style>
*{
  font-family:微軟正黑體;
  letter-spacing:1px;
  transition-duration:1s;
}
</style>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top  animate__animated animate__fadeInDown">
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item navbar-brand">
                <a class="font-weight-light">嗨 <?php echo $username;?></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">新朋友</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<?php
					for ( $i=0 ; $i<$rownum ; $i++ ) {?>
　						<a class="dropdown-item" href="#"> 
						<?php $row =$result->fetch_array(MYSQLI_BOTH);
                         echo "<img src='/final0604/final0604/views/images/".$row['link']."' class='figure-img img-fluid rounded' style='width:20%;'>";
						
						echo "&nbsp;&nbsp;".$row[0];?>
                        <div class="btn-group mx-4 px-4 mt-2 mb-2" role="group" aria-label="Basic example">
						<form name="new user" method="post" action="accept1.php">
						  <button type="submit" class="btn btn-outline-info"  name="accept" value=<?php echo $row[0];?> >接受</button>
						  <button type="submit" class="btn btn-outline-info" name="delete"  value=<?php echo $row[0];?>>刪除</button>
						  </form>
                        </div>
						</a><?php
					}
				?>
                </div>
            </li>
            <li class="nav-item">
                <a class="btn" onclick="window.location = 'profile.php'">我的主頁</a>
            </li>
            <li class="nav-item">
                <a class="btn" onclick="window.location = 'chatroom.php'">我的聊天室</a>
            </li>
            <li class="nav-item">
                <a class="btn" onclick="window.location = 'change_password.php'">修改密碼</a>
            </li>
            <li class="nav-item">
                <a class="btn" onclick="window.location ='login.php'">登出</a>
            </li>          
        </ul>
    </div>
</nav>

