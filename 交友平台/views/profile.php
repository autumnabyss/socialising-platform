<?php
require_once dirname(__FILE__) . "/head.php";
require_once dirname(__FILE__). "/after_login_nav.php";
?>
<?php session_start(); ?>
<body class="img-fluid body_type" alt="Responsive image">
    <div class="container animate__animated animate__fadeIn">
        <div class="row justify-content-center" style="margin-top:7%;">
            <h1 class="text-light text-center mt-1 mb-4">Who Am I ?</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-3">
                <!--下列為個人資訊-->

                <ul class="list-unstyled mt-4 text-left">

                    <?php
                    include('connect.php');//連結資料庫
                    $username=$_SESSION['username'];
                    $sql="SELECT * FROM other_info WHERE keyusername = '$username'";
                    $result = mysqli_query($con,$sql);
                    //$total_fields = mysqli_num_fields($result);
                    //$total_records = mysqli_num_rows($result);
                    /*
                    $a=0;
                    $b=0;
                    $c=0;
                    $d=0;
                    $e=0;
                    $f=0;
                    */
                    while ($row = mysqli_fetch_row($result))
                    {
                        
                        $birthday=$row[0];
                        $intro=$row[1];

                        $star=$row[2];
                        $a="";
                        if ($row[2]=="0")
                            $a="魔羯座";
                        if ($row[2]=="1")
                            $a="金牛座";
                        if ($row[2]=="2")
                            $a="處女座";
                        if ($row[2]=="3")
                            $a="牡羊座";
                        if ($row[2]=="4")
                            $a="獅子座";
                        if ($row[2]=="5")
                            $a="射手座";
                        if ($row[2]=="6")
                            $a="天秤座";
                        if ($row[2]=="7")
                            $a="水瓶座";
                        if ($row[2]=="8")
                            $a="雙子座";
                        if ($row[2]=="9")
                            $a="巨蟹座";
                        if($row[2]=="10")   
                            $a="天蠍座";
                        if ($row[2]=="11")                     
                            $a="雙魚座";

                        $height=$row[3];//?
                        $b="";  
                        if($row[3]=="0")
                            $b="150公分以下";
                        if($row[3]=="1")
                            $b="151-160公分";
                        if($row[3]=="2")
                            $b="161-170公分";
                        if($row[3]=="3")
                            $b="171-180公分";
                        if($row[3]=="4")
                            $b="180公分以上";
                        
                        
                        $interest=$row[4];

                        $sex=$row[5];
                        $c="";
                        if($row[5]=="0")
                            $c="男";
                        if($row[5]=="1")
                            $c="女";
                        if($row[5]=="3")
                            $c="其他";
                                
                        $age=$row[6];//?
                        $d="";
                        if($row[6]=="0")
                            $d="20歲以下";
                        if($row[6]=="1")
                            $d="21-25歲";
                        if($row[6]=="2")
                            $d="26-30歲";
                        if($row[6]=="3")
                            $d="31-35歲";
                        if($row[6]=="4")
                            $d="36-40歲";
                        if($row[6]=="5")
                            $d="40歲以上";

                        $state=$row[7];
                        $e="";
                        if($row[7]=="0")
                            $e="單身";
                        if($row[7]=="1")
                            $e="穩定交往中";
                        if($row[7]=="2")
                            $e="已婚";
                        if($row[7]=="3")
                            $e="一言難盡";
                        
                        $region=$row[8];
                        $f="";
                        if($row[8]=="0")
                            $f="北部";
                        if($row[8]=="1")
                            $f="中部";
                        if($row[8]=="2")
                            $f="南部";
                        if($row[8]=="3")
                            $f="東部";
                        if($row[8]=="4")
                            $f="外島";
                        
                    }
                        //while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        //print_r( $row);
                    //}
                    
                    ?>
                    <?php
                    /*include('connect.php');//連結資料庫
                    $username=$_SESSION['username'];
                    $sql="SELECT * FROM pictures WHERE keyusername_p = '$username'";
                    $result = mysqli_query($con,$sql);

                    while($row=mysqli_fetch_array($result)){
                        echo"<div id='img_div'>";
                            echo"<img src='/Final_project/images/".$row['image']."'>";
                        echo"</div>";
                    }*/

                    //if(!$result) die("error: mysql query");
                    //$num=mysqli_num_rows($result);
                    //if($num<1) die("error: no this recorder");
                    //$data = mysqli_result($result,0,"picture");
                    //header("Content-type: image/jpg",true);
                    //echo $data;
                    ?>


                    <li><h4 class="text-light"><b>姓名: </b><strong><?php echo $_SESSION['username']; ?></strong></h4></li>
                    <li><h4 class="text-light"><b>性別: </b><strong><?php echo $c; ?></strong></h4></li>
                    <li><h4 class="text-light"><b>生日: </b><strong><?php echo $birthday; ?></strong></h4></li>
                    <li><h4 class="text-light"><b>星座: </b><strong><?php echo $a; ?></strong></h4></li>
                    <li><h4 class="text-light"><b>興趣: </b><strong><?php echo $interest; ?></strong></h4></li>
                    <li><h4 class="text-light"><b>地區: </b><strong><?php echo $f; ?></strong></h4></li>
                    <li><h4 class="text-light"><b>感情狀況: </b><strong><?php echo $e; ?></strong></h4> </li>
                </ul>
            </div>
            <div class="col-sm-6 animate__animated  animate__pulse">
                <!--個人照-->
                <!--<img src="/Final_project/src/img/me.jpg" alt="範例照片" class="figure-img img-fluid rounded">-->
                <!--<img src="/Final_project/src/img/php?fn=<?php echo $fn;?>" alt="範例照片" class="figure-img img-fluid rounded">-->
                <?php
                    include('connect.php');//連結資料庫
                    $username=$_SESSION['username'];
                    $sql="SELECT * FROM pictures WHERE keyusername = '$username'";
                    $result = mysqli_query($con,$sql);

                    while($row=mysqli_fetch_array($result)){
                            echo"<img src='/final0604/final0604/views/images/".$row['link']."' class='figure-img img-fluid rounded'>";
                    }
                    ?>
            </div>
            <div class="col-sm-3">
                <!--下列為個人資訊(自介only)-->
                <ul class="list-unstyled mt-4 text-right">
                    <li><h4 class="text-light"><b>一句話自我介紹:</b><br><strong><?php echo $intro; ?></strong></h4></li>
                </ul>
            </div>
        </div>
    </div>
</body>