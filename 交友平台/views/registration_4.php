<?php
require_once dirname(__FILE__) . "/head.php";
require_once dirname(__FILE__). "/login_nav.php";
?>

<body class="img-fluid body_type" alt="Responsive image">
    <div class="container animate__animated animate__fadeIn">
        <br><br>
        <div class="row justify-content-center">
            <h1 class="text-center text-light mt-4 mb-4">最後、你想遇見怎麼樣的朋友呢?</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <img src="/Final_project/src/img/play.jpg" alt="可愛的友誼" class="mt-4 rounded mx-auto d-block" style="width:80%;">
                <h6 class="text-center text-light mb-4">祝順利找到溫暖可愛的友誼</h6>
            </div>
            <div class="col-sm-6">
                <br><br>
                <div class="wrapper border border-dark pt-4 px-4 mt-4">
                    <form
                        id="form" 
                        onsubmit="return submitTest();" 
          action="signup_process4.php" method="post"
                    >
                        <div class="row justify-content-center">
                            <div class="col-sm-6 form-group">
                                <label for="want_sex">性別</label>
                                <select class="form-control" id="want_sex" name="want_sex">
                                    <option>男</option>
                                    <option>女</option>
                                    <option>其他</option>
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="want_state">感情狀況</label>
                                <select class="form-control" id="want_state"name="want_state">
                                    <option value="0">單身</option>
                                    <option value="1">穩定交往中</option>
                                    <option value="2">已婚</option>
                                    <option value="3">一言難盡</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 form-group">
                                <label for="want_age">年紀</label>
                                 <select class="form-control" id="want_age" name="want_age">
                                    <option value="0">20歲以下</option>
                                    <option value="1">21-25歲</option>
                                    <option value="2">26-30歲</option>
                                    <option value="3">31-35歲</option>
                                    <option value="4">36-40歲</option>
                                    <option value="5">40以上歲</option>
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="want_region">地區</label>
                                <select class="form-control" id="want_region"name="want_region">
                                    <option value="0">北部</option>
                                    <option value="1">中部</option>
                                    <option value="2">南部</option>
                                    <option value="3">東部</option>
                                    <option value="4">外島</option>
                                </select>
                            </div>    
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 form-group">
                                <label for="want_height">身高</label>
                                <select class="form-control" id="want_height" name="want_height">
                                    <option value="0">150公分以下</option>
                                    <option value="1">151-160公分</option>
                                    <option value="2">161-170公分</option>
                                    <option value="3">171-180公分</option>
                                    <option value="4">180公分以上</option>
                                </select>
                                <small id="heightHelpBlock" class="form-text text-muted">請輸入希望找到身高多高的朋友</small>
                            </div>
                            <div class="col-sm-6 form-group">
                                <br><br>
                                <div class="text-center">
                                    <button class="btn btn-outline-secondary align-bottom"type="submit"name="submit" onclick="location.href='home.php'"><b>註冊(4/4)</b></button>
                                </div>
                            </div>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>