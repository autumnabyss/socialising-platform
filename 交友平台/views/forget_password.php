<?php
require_once dirname(__FILE__) . "/head.php";
require_once dirname(__FILE__). "/login_nav.php";
?>

<body class="img-fluid body_type" alt="Responsive image">
  <div class="container animate__animated animate__fadeIn">
    <br><br>
    <form 
      id="form" 
      onsubmit="return submitTest();" 
      action="alter_password.php" method="post"
  
      <div class="row">
        <div class="col-sm-1"> </div>
        <div class="col-sm-4">
          <div class="wrapper border border-dark pt-3 pb-3 px-3" action="login_process.php">	
            <h3 class="form-signin-heading text-center">忘記密碼</h3>
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
              type="newpassword" 
              class="form-control my-4" 
              placeholder="確認新密碼" 
              autocomplete="Off"
              required=""
            >
            <div class="text-center">
              <button 
                class="btn btn-outline-secondary" type="submit"name="submit"
                ><b>送出</b></button>
            </div>
          </div>
        </div>
      <div class="col-sm-1"> </div>
      <div class="col-sm-6"> 
          <br><br><br><br><br><br>
          <div class="row justify-content-center">
            <h1 class="text-light">Oops...</h1>
            <h1 class="text-light text-right"><br><br>下次要記得喔( ；∀；)<br></h1>
          </div>
        </div>
    </form>
  </div>
</body>