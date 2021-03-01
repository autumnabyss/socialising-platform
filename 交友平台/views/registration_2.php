<?php
require_once dirname(__FILE__) . "/head.php";
require_once dirname(__FILE__). "/login_nav.php";
?>
<meta charset="utf-8">
<body class="img-fluid body_type" alt="Responsive image">
    <div class="container animate__animated animate__fadeIn">
        <br><br><br><br>
        <div class="row justify-content-center mb-4">
            <h1 class="text-light"><b>給我一些你的資訊吧(*´∀｀)</b></h1>
        </div>
        <div class="row justify-content-center">
            <div class="wrapper border border-dark mt-4 pt-4 px-4">
                <form 
                    id="form" 
                    onsubmit="return submitTest();" 
                    action="signup_process2.php" method="post"
                >
                    <div class="row">
                        <div class="col-sm-3 form-group">
                            <label for="birthday">生日</label>
                            <input
                                name="birthday"
                                type="date" 
                                class="form-control" 
                                id="birthday" 
                            >    
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="sex">性別</label>
                            <select class="form-control" id="sex" name="sex">
                                <option value="0">男</option>
                                <option value="1">女</option>
                                <option value="3">其他</option>
                            </select>
                            
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="state">年紀</label>
                            <select class="form-control" id="age" name="age">
                                <option value="0">20歲以下</option>
                                <option value="1">21-25歲</option>
                                <option value="2">26-30歲</option>
                                <option value="3">31-35歲</option>
                                <option value="4">36-40歲</option>
                                <option value="5">40歲以上</option>
                            </select>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="state">身高</label>
                            <select class="form-control" id="height"  name="height">
                                <option value="0">150公分以下</option>
                                <option value="1">151-160公分</option>
                                <option value="2">161-170公分</option>
                                <option value="3">171-180公分</option>
                                <option value="4">180公分以上</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 form-group">
                            <label for="star">星座</label>
                            <select class="form-control" id="star" name="star">
                                <option value="0">魔羯座</option>
                                <option value="1">金牛座</option>
                                <option value="2">處女座</option>
                                <option value="3">牡羊座</option>                 
                                <option value="4">獅子座</option>
                                <option value="5">射手座</option>
                                <option value="6">天秤座</option>
                                <option value="7">水瓶座</option>
                                <option value="8">雙子座</option>
                                <option value="9">巨蟹座</option>
                                <option value="10">天蠍座</option>
                                <option value="11">雙魚座</option>                           
                            </select>
                            
                        </div>
                        <div class="col-sm-3">
                            <label for="interest">興趣</label>
                            <input
                                name="interest"
                                id="interest"
                                type="text" 
                                class="form-control" 
                                placeholder="Ex.打籃球" 
                            >
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="region">地區</label>
                            <select class="form-control" id="region" name="region">
                                <option value="0">北部</option>
                                <option value="1">中部</option>
                                <option value="2">南部</option>
                                <option value="3">東部</option>
                                <option value="4">外島</option>
                            </select>
                           
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="state">感情狀況</label>
                            <select class="form-control" id="state"name="state">
                                <option value="0">單身</option>
                                <option value="1">穩定交往中</option>
                                <option value="2">已婚</option>
                                <option value="3">一言難盡</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 form-group">
                            <label for="intro">用一句話自我介紹吧</label>
                            <input
                                name="intro"
                                id="intro"
                                type="text" 
                                class="form-control" 
                                placeholder="我是一個愛笑的女孩" 
                            >   
                        </div>
                        <div class="col-sm-3 form-group">
                            <br><br>
                            <div class="text-center">
                            <button class="btn btn-outline-secondary align-bottom"type="submit"name="submit" onclick="location.href='registration_3.php'"><b>下一步(2/4)</b></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>