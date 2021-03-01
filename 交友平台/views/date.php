<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php 
$username=$_SESSION['username'];
header("Content-Type: text/html; charset=utf8");
//session_start();
//echo $username;
include('connect.php');//連結資料庫
if ($username){//如果使用者名稱和密碼都不為空
$sql = "select * from `login_info` where username = '$username'";//檢測資料庫是否有對應的username和password的sql
$result = mysqli_query($con,$sql);//執行sql
$rowa=$result->fetch_array(MYSQLI_BOTH);//返回一個數值
if($rowa){//0 false 1 true成功進去找資料
	$row = $result->fetch_array(MYSQLI_BOTH);
	//echo $row[0];
	//echo $row[1];
	echo "\n";
	$sql="SELECT A.`keyusername`, B.`keyusername` FROM `want` A ,`other_info` B,`chat_room` WHERE A.`keyusername`='$username' AND B.`keyusername`!='$username' AND A.`want_sex`=B.`sex` AND A.`want_state`=B.`state` AND A.`want_region`=B.`region` AND NOT EXISTS(SELECT * FROM `chat_room` WHERE `Aid`='$username' AND `Bid`=B.`keyusername` )";
	$result= mysqli_query($con,$sql);//
	$rows=mysqli_num_rows($result);//返回一個數值
	echo $rows;
	if($rows)
	{
		//都先加
		/* while ($row =$result->fetch_array(MYSQLI_BOTH)) {

			$sql="INSERT INTO date(`a.id`,`b.id`,`accept`) VALUES('$row[0]','$row[1]',0)";
			if (mysqli_query($con, $sql)) {
						//echo $row[0];
						//echo $row[1];
						//echo "資料新增成功";
			}
			else {

					echo "Error: " . $sql . "<br>" . $con->error;
			}
			$sql="INSERT INTO date(`a.id`,`b.id`,`accept`) VALUES('$row[1]','$row[0]',0)";
			if (mysqli_query($con, $sql)) {
						//echo $row[0];
						//echo $row[1];
						//echo "資料新增成功";
			}
			else {

					//echo "Error: " . $sql . "<br>" . $con->error;
			}
			
		 }*/
		 //一次加一個
		 $row =$result->fetch_array(MYSQLI_BOTH);
		 $sql="INSERT INTO chat_room(`Aid`,`Bid`,`accept`) VALUES('$row[0]','$row[1]',0)";
			if (mysqli_query($con, $sql)) {
						//echo $row[0];
						//echo $row[1];
						//echo "資料新增成功";
			}
			else {

					//echo "Error: " . $sql . "<br>" . $con->error;
			}
			$sql="INSERT INTO chat_room(`Aid`,`Bid`,`accept`) VALUES('$row[1]','$row[0]',0)";
			if (mysqli_query($con, $sql)) {
						//echo $row[0];
						//echo $row[1];
						//echo "資料新增成功";
			}
			else {

					//echo "Error: " . $sql . "<br>" . $con->error;
			}
	}
	else
	{
		//echo 'no soul mate';
	}
	$sql="SELECT `Bid` ,`link` FROM `chat_room`,`pictures`  WHERE `Aid`='$username' AND `accept`='0' AND `keyusername`=`Bid` ";
	$result= mysqli_query($con,$sql);//
	$rownum=mysqli_num_rows($result);//返回一個數值
	
}
else
{
	//echo 'error'; 
}
}
mysqli_close($con);//關閉資料庫

?>