<?php
require_once dirname(__FILE__) . "/head.php";
require_once dirname(__FILE__). "/after_login_nav.php";
?>

<body class="img-fluid body_type" alt="Responsive image">
  <div class="container animate__animated animate__fadeIn">
    <br><br><br>
    <form 
      id="form" 
      onsubmit="return submitTest();" 
      action="alter_password2.php" method="post"
    >
      <div class="row style="margin-top:10%;">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <div class="wrapper border border-dark nt-4 pt-3 pb-3 px-3">	
            <h3 class="form-signin-heading text-center">修改密碼</h3>
            <input
              id="oldpasswordInput"
              name="oldpassword"
              type="password" 
              class="form-control my-4" 
              placeholder="舊密碼" 
              required=""
            >
            <input
              id="passwordInput"
              name="newpassword_1"
              type="password" 
              class="form-control my-4" 
              placeholder="新密碼" 
              required=""
            >
            <input
              id="passwordConfirm"
              name="newpassword_2"
              type="password" 
              class="form-control my-4" 
              placeholder="確認新密碼" 
              autocomplete="Off"
              required=""
            >
            <div class="text-center">
              <button 
                class="btn btn-outline-secondary" type="submit"name="submit"
                ><b>確認修改</b></button>
            </div>
          </div>
        </div>
        <div class="col-sm-7"> 
          <br><br><br>
          <div class="row justify-content-center mt-4 mb-4">
            <h1 class="text-light text-center">居然是改密碼嗎!</h1>
          </div>
          <div class="row justify-content-center mb-4">
            <h1 class="text-light text-center">是改密碼嗎!</h1>
          </div>
          <div class="row justify-content-center mb-4">
            <h1 class="text-light text-center">改密碼!</h1>
          </div>
          <div class="row justify-content-center">
            <h1 class="text-light text-center">(~‾▿‾)~ (~‾▿‾)~ (~‾▿‾)~</h1>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
