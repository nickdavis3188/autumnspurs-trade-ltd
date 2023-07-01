<?php
include("./controller/logoutController.php");
if (isset($_SESSION['validUser'])) {
  logout();
}
//  include("../partials/_header.php");
//  $title = "Home";
//  $nav = "";
//  include("../../Utils/sidebarUtils.php");

//  require("../../Controller/generalController.php");
//  include("../../Env/env.php");
//  require("../../Connection/dbConnection.php");

//  $conn = conString1();

//  $dashData = new GeneralController();
//  $data = $dashData->getAllInventory($conn);
//  $data1 = $dashData->getAllInventory1($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="AutumnSpurs, bitcoin, bitcoin mining,mining,miner,bitcoin, buy bitcoin, buy bitcoins, bitcoin mining, cloud mining, bitcoin miners, cloud miners, cloud hashing, cloudhashing, virtual currency, crypto currency, digital currency" />
  <meta name="description" content="AutumnSpurs is a community of people who are interested in making money with Bitcoin and other crypto-currency opportunities. Learn how to profit from digital currencies." />
  <link rel="icon" href="public/img/favicon.png" type="image/x-icon" />

  <link href="public/img/favicon.png" rel="shortcut icon" type="image/x-icon" />
  <link href="public/img/favicon.png" rel="apple-touch-icon" />

  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>AutumnSpurs</title>

  <!-- Icon css link -->

  <link rel="stylesheet" href="public/css/bootstrap.min.css" />
  <link href="public/css/custom.css" rel="stylesheet" />
  <link href="public/css/style.css" rel="stylesheet" />
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
  <div class="main">
    <main>
      <section class="fxt-template-animation fxt-template-layout21" style="opacity: 1">
        <!-- Animation Start Here -->
        <div id="particles-js">
          <canvas class="particles-js-canvas-el" width="841" height="694" style="width: 100%; height: 100%"></canvas>
        </div>

        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-7 col-sm-12 col-12 fxt-bg-color">
              <div class="fxt-content">
                <div class="fxt-header">
                  <div class="mb-5">
                    <a href="index.html" class="fxt-logo" style="background: #000"><img src="public/img/fuck.jpg" width="150" alt="Logo" /></a>
                  </div>
                  <p>Login into your dashboard.</p>
                </div>
                <?php
                if (isset($_REQUEST['message'])) {
                  if ($_REQUEST['message'] == "Incorrect credentials") {
                ?>
                    <h4 class="text-danger"><?php echo $_REQUEST['message'] ?></h4>
                  <?php
                  } else if ($_REQUEST['message'] == "Please confirm your inputs") {
                  ?>
                    <h4 class="text-info"><?php echo $_REQUEST['message'] ?></h4>
                  <?php
                  } else {
                  ?>
                    <h4 class="text-success"><?php echo $_REQUEST['message'] ?></h4>
                <?php
                  }
                }
                ?>
                <div class="fxt-form">
                  <form method="POST" action="./controller/loginController.php">
                    <input type="hidden" name="_token" value="NHASKhujD35OENCfPqQh8sual5iBgB3jz3AYSQJy" />
                    <div class="form-group">
                      <div class="fxt-transition-delay-1">
                        <input type="email" id="email" class="form-control" name="email" placeholder="Email" value="" autocomplete="off" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-2">
                        <input id="password" type="password" class="form-control" name="pwd" placeholder="Password" required />
                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                      </div>
                    </div>
                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                      <p class="inline-text text-danger"></p>
                      <p class="inline-text text-success"></p>
                      <p class="inline-text text-success"></p>
                    </div>
                    <div>
                      <div class="g-recaptcha" data-sitekey="6Lfy1qUmAAAAAKXNse_sAAbB6Ho-mtlo42bG7c4F" data-callback="enableBtn"></div>
                    </div>
                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-3">
                        <div class="fxt-checkbox-area">
                          <div class="checkbox">
                            <input id="checkbox1" type="checkbox" />
                            <label for="checkbox1">Keep me logged in</label>
                          </div>
                          <a href="password/reset.html" class="switcher-text">Forgot Password</a>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-4">
                        <button type="submit" class="fxt-btn-fill" id="loginBtn">
                          Log in
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="fxt-footer">
                  <div class="fxt-transformY-50 fxt-transition-delay-9">
                    <p>
                      Don't have an account?<a href="register.php" class="switcher-text2 inline-text">Register</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
  <!--================End Footer Area =================-->
</body>
<script src="public/js/jquery-3.5.1.min.dc5e7f18c8bf79.js" type="text/javascript"></script>
<!-- <script>
  // const loginBtn = document.getElementById("loginBtn");
  // loginBtn.disabled = true;

  // function enableBtn() {
  //   loginBtn.disabled = false;
  // }
</script> -->
<script type="text/javascript" src="public/js/particle.min.js"></script>
<script type="text/javascript" src="public/js/particle.js"></script>
<script type="text/javascript" src="public/js/main.js"></script>


</html>