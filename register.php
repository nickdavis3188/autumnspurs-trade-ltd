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
        <div id="particles-js"></div>

        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-7 col-sm-12 col-12 fxt-bg-color">
              <div class="fxt-content">
                <div class="fxt-header">
                  <div class="mb-5">
                    <a href="index.html" class="fxt-logo" style="background: #000"><img src="public/img/fuck.jpg" width="150" alt="Logo" /></a>
                  </div>
                  <p>Create new account.</p>
                </div>
                <?php
                if (isset($_REQUEST['message'])) {
                ?>
                  <h4 class="text-success"><?php echo $_REQUEST['message'] ?></h4>
                <?php
                }
                ?>

                <?php
                if (isset($_REQUEST['fail'])) {
                ?>
                  <h4 class="text-danger"><?php echo $_REQUEST['message'] ?></h4>
                <?php
                }
                ?>
                <div class="fxt-form">
                  <form method="POST" action="./controller/signupController.php">
                    <!-- <input type="hidden" name="_token" value="NHASKhujD35OENCfPqQh8sual5iBgB3jz3AYSQJy" /> -->
                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <input type="text" id="firstname" class="form-control" name="firstName" placeholder="First Name" value="" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <input type="text" id="middlename" class="form-control" name="middleName" placeholder="Middle Name" value="" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <input type="lastname" id="lastname" class="form-control" name="lastName" placeholder="Last Name" value="" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <input type="email" id="email" class="form-control" name="email" placeholder="Email" value="" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <input type="number" id="phone" class="form-control" name="phone" placeholder="Phone" value="" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <input type="email" id="referrer" class="form-control" name="referrer" placeholder="Referrer" value="34567" readonly />
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <select id="country" class="form-control" name="country" value="Nigeria" required>
                          <option value="">Select Country</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <select id="state" class="form-control" name="state" value="Rivers" required>
                          <option value="">Select State</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-2">
                        <input id="password" type="password" class="form-control" name="pwd" placeholder="Password" required autocomplete="off" />
                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-2">
                        <input id="confPassword" type="password" class="form-control" name="pwdCon" placeholder="Confirm Password" required autocomplete="off" />
                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                      </div>
                    </div>
                    <div>
                      <div class="g-recaptcha" data-sitekey="6Lfy1qUmAAAAAKXNse_sAAbB6Ho-mtlo42bG7c4F" data-callback="enableBtn"></div>
                    </div>
                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                      <p class="inline-text text-danger"> </p>
                      <p class="inline-text text-success"> </p>
                    </div>
                    <!-- </div> -->

                    <div class="fxt-footer">
                      <div class="fxt-transformY-50 fxt-transition-delay-9">
                        <p>
                          Already have an account?<a href="login.php" class="switcher-text2 inline-text">Login</a>
                        </p>
                      </div>
                    </div>
                    <div class="fxt-footer">
                      <div class="fxt-transformY-50 fxt-transition-delay-9">
                        <p>
                          Didn't get a mail?<a href="resend-email.html" class="switcher-text2 inline-text">Resend email</a>
                        </p>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="fxt-transformY-50 fxt-transition-delay-4">
                        <button type="submit" name="submit" class="fxt-btn-fill" id="registerBtn">
                          Register
                        </button>
                      </div>
                    </div>
                  </form>
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
<script>
  // const registerBtn = document.getElementById("registerBtn");
  // registerBtn.disabled = true;

  // function enableBtn() {
  //   registerBtn.disabled = false;
  // }
</script>
<script type="text/javascript" src="public/js/particle.min.js"></script>
<script type="text/javascript" src="public/js/particle.js"></script>
<script type="text/javascript" src="public/js/main.js"></script>
<script type="text/javascript" src="public/js/added/fetchCountries.js"></script>


</html>