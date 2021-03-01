<?php
session_start();
$aname=$_SESSION['username'];
$bname=$_SESSION['bb'];
require_once dirname(__FILE__) . "/head.php";
require_once dirname(__FILE__). "/after_login_nav.php";
include('connect.php');//連結資料庫

$sql ="select * from chat_content where Aid='$aname' or Bid='$aname'";
$result=mysqli_query($con,$sql);
$friendsql ="select Bid from chat_room where Aid='$aname' and accept='1'";
$friendresult=mysqli_query($con,$friendsql);
function relaod(){
    echo "hi";
}
?>



<body>
    <div class="container animate__animated animate__fadeIn">
        <div class="row" style="margin-top:5%;">
            <div class="col-sm-9 border-dark mt-3 mb-3"style="height:100%;">
                <div class="card border-muted mb-3" >
                    
                    <?php
                        if (isset($_POST['chat'])) {

                         
                            $bname= $_POST['chat'];
                            $_SESSION['bb']=$bname;
                            
                            
                            
                        
                        }
                        $rows = mysqli_num_rows($result);
                        mysqli_data_seek($result, $rows);
                        
                        
                        //  if ($rows<15)
                        //     $l = $rows;
                        // else  
                        //     $l = 15;
                        for ($i = 1; $i <=$rows; $i++) {
                             
                                list($id, $aidd, $bidd,$words, $time ) = mysqli_fetch_row($result);
                                if(($rows-$i)<10){//$Name=='test'
                                
                                if($aidd==$aname&&$bidd==$bname)
                                {
                                
                                    echo "<div class= \"me\" style=\"text-align:right ;margin-right:5%\"><div class=\"time1\" style=\"margin-right:-3%\"><small>".$time."</div></small>".$words."</div>";
                                    
                                
                                }
                                if($bidd==$aname&&$aidd==$bname)
                                {
                                    echo "<small>".$time."      ".$bname."</small>";
                                    echo "<div class=\"time\" style=\"margin-left:5%\">        ".$words."</div>";
                                }
                            }   
                            
                        }
                    
                   
                        
                    ?>
                </div>
                <?php
  //  session_start();
   if ($_POST['words']) {
   $content=$_POST['words'];
   $time= date("H:i:s" , mktime(date('H')+6, date('i'), date('s'))) ;
   $aids=$aname;
   $bids=$bname;
if($content!=''){
   $str = "insert into chat_content(Aid, Bid, content, time) values('$aids','$bids','$content','$time' );"; 
   mysqli_query($con,$str);}
   
}
?>
                  
                    <!-- <meta http-equiv="refresh" content="10;url=chatroom.php"> -->
                    <div class="card-footer bg-transparent border-muted" style="height:100%">
                        
                        <form action="chatroom.php" method="post" target="_self" >
                            <div class="row justify-content-center">
                                <div class="col-sm-10" >
                                    <div class="form-group mt-3" >
                                        <input 
                                        
                                            type="text" 
                                            class="form-control" 
                                            name="words" 
                                            placeholder="請輸入訊息"
                                        >
                                        
                                    </div>
                                </div>
                                
                                <div class="col-sm-2">
                                    <div class="text-center mt-3" >
                                        <button type="submit"  class="btn btn-outline-secondary mb-1">傳送</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div>
            </div>
            <div class="col-sm-3 mt-3 mb-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action"> 
                        <div class="d-flex w-100 justify-content-between">
                            <form>
                                <div class="form-group mt-3">
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="search" 
                                        placeholder="搜尋">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-secondary mb-1">搜尋</button>
                                </div>
                            </form>
                        </div>
                    </a>
                    <?php
                      
                      $rows = mysqli_num_rows($friendresult);
                      mysqli_data_seek($friendresult, $rows);
                     
                      
                      
                          
                      for ($i = 1; $i <=$rows; $i++) {
                          list($bnames) = mysqli_fetch_row($friendresult);
                          $csql="select link from pictures where keyusername='$bnames'";
                          $cresult=mysqli_query($con,$csql);
                          $iendsql ="select accept from chat_room  where Aid='$bnames' and Bid='$aname'";
                          $iendresult=mysqli_query($con,$iendsql);
                          $rrrow=mysqli_fetch_array($iendresult);
                          if($rrrow['0']==1){
                            while($rrow=mysqli_fetch_array($cresult)){
                                echo " <a href=\"#\" class=\"list-group-item list-group-item-action\"><div class=\"d-flex w-100 justify-content-between\">
                                    <img src='/final0604/final0604/views/images/".$rrow['0']."' alt=\"頭貼\" class=\"figure-img img-fluid rounded\" style=\"width:25%;\">
                                    <h6 class=\"mx-1\"></h6>
                                    
                                    <small class=\"nav-item\">
                                    <form action=\"chatroom.php\" method=\"post\">
						            <button type=\"submit\" class=\"btn btn-outline-info\"  name=\"chat\" value=\"$bnames\" >chat</button>
						  
						            </form>
                                    </small>
                                    
                                       
                                    <small></small></div>
                        
                            <small>".$bnames."</small></a>";}}}
                        
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</body>
