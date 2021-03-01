<?php session_start(); ?>
<?php 
   header("Content-Type: text/html; charset=utf8");
   if(!isset($_POST['submit'])){
    //target="pictures/".basename($_FILES['photo']['name']);
    exit("錯誤執行");
   }//判斷是否有submit操作

   $target=basename($_FILES['photo']['name']);
   include('connect.php');//連結資料庫
   $image=$_FILES['photo']['name'];
   $keyusername=$_SESSION['username'];
   $sql="INSERT INTO pictures (link,keyusername) VALUES ('$image','$keyusername')";
   $result=mysqli_query($con,$sql);//執行sql
   if(move_uploaded_file($_FILES['photo']['tmp_name'],"D:/xampp/htdocs/final0604/final0604/views/images/".$target)){
    $msg="upload successfully";
   }
   else{
    $msg="there's problems";
   }
?>

<!DOCTYPE html>

<html>
 <head>
  <tytle></tytle>
 </head>
 <body>
  


  <?php
   /*
   //開啟圖片檔
      $file = fopen($_FILES["photo"]["tmp_name"], "rb");
      // 讀入圖片檔資料
      $fileContents = fread($file, filesize($_FILES["photo"]["tmp_name"])); 
      //關閉圖片檔
      fclose($file);
      //讀取出來的圖片資料必須使用base64_encode()函數加以編碼：圖片檔案資料編碼
      $fileContents = base64_encode($fileContents);
      $keyusername=$_SESSION['username'];
      include('connect.php');//連結資料庫
      $imgType=$_FILES["photo"]["type"];
      $sql="INSERT INTO pictures (link,linktype,keyusername_p) VALUES ('$fileContents','$imgType','$keyusername')";
      $result=mysqli_query($con,$sql);//執行sql
   */


   //$photo=$_POST['photo'];//post獲取表單裡的name
   //$keyusername_p=$_SESSION['username'];
   
   //include('connect.php');//連結資料庫
   //$q="INSERT  INTO pictures(link,keyusername_p) values ('$photo','$keyusername_p')";//向資料庫插入表單傳來的值的sql
   //$reslut=mysqli_query($con,$q);//執行sql
   
   if (!$result){
   die('Error: ' . mysqli_error($con));//如果sql執行失敗輸出錯誤
   }else{
   include('registration_4.php');
   //echo "註冊進度3/4";//成功輸出註冊成功
   }
   mysqli_close($con);//關閉資料庫
   
   ?>
   }
 </body>

</html>