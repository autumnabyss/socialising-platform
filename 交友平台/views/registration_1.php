<?php
require_once dirname(__FILE__) . "/head.php";
require_once dirname(__FILE__). "/login_nav.php";
?>
<!--
<?php
  //include('errors.php');
?>
-->
<body class="img-fluid body_type" alt="Responsive image">
  <div class="container animate__animated animate__fadeIn">
    <br><br>
    <div class="row justify-content-center">
      <div class="col-sm-5">
        <form 
          id="form" 
          onsubmit="return submitTest();" 
          action="signup_process.php" method="post"

        >
        
          <div class="row">
            <div class="col">
              
              <div class="wrapper border border-dark pt-3 pb-3 px-3">	
                <h3 class="form-signin-heading text-center">註冊</h3>
                <?php include('errors.php');?>
               <input
                  id="email"

                  name="email"

                  type="email" 
                  class="form-control my-4" 
                  placeholder="Email" 
                  required
                >
                <input
                  id="username"

                  name="username"

                  type="text" 
                  class="form-control my-4" 
                  placeholder="使用者名稱" 
                  required
                >
                <input
                  id="passwordInput"

                  name="password"

                  type="password" 
                  class="form-control my-4" 
                  placeholder="密碼" 
                  required
                >
                <input
                  id="passwordConfirm"
                  name="passwordconfirm"
                  type="password" 
                  class="form-control my-4" 
                  placeholder="確認密碼" 
                  autocomplete="Off"
                  required
                >
                <div class="text-center">
                  <button 
                    class="btn btn-outline-secondary"type="submit"name="submit"
                    ><b>下一步(1/4)</b></button> 
 <!--onclick="location.href='registration_2.php'"-->
                </div>
              
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-7">
        <br><br><br><br><br><br>
        <h2 class="text-light text-right">歡迎你加入RCard <:333333 </h2>
        <br>
        <h5 class="text-light text-right">祝你有美好的一天</h5>
        <br><br><br>
        <h1 class="text-light text-center">Wish You a Wonderful Day</h1>
      </div>
    </div>
  </div>
</body>
