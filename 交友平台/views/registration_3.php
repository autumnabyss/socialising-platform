<?php
require_once dirname(__FILE__) . "/head.php";
require_once dirname(__FILE__). "/login_nav.php";
?>

<body class="img-fluid body_type" alt="Responsive image">
    <div class="container animate__animated animate__fadeIn">
        <br><br><br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col text-light mt-4"><h1>好看的你、</h1></div>
                </div>
                <div class="row">
                    <div class="col"><h1 class="text-right text-light mb-3">長什麼樣子呢?</h1></div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 wrapper pt-4 px-4 mt-4">
                <div class="row justify-content-center">
                    <div class="col-sm-3"></div>
                        <img src="/Final_project/src/img/me.jpg" alt="範例照片" class="figure-img img-fluid rounded">
                        <h5 class="text-center text-light">-範例-</h5>
                    <div class="col-sm-3"></div>
                </div>
                <div class="row justify-content-center">
                    <form
                        id="content" 
                        onsubmit="return submitTest();" 
                        action="signup_process3.php" method="post"
                        enctype="multipart/form-data"
                    >
                        <div class="form-group">
                            <label for="photo "><h4 >上傳一張你好看的照片吧</h4></label>
                            <input type="file" class="form-control-file " id="photo" name="photo">
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-outline-secondary align-bottom"type="submit"name="submit" onclick="location.href='registration_4.php'"><b>下一步(3/4)</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>