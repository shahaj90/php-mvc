<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="css/fontastic.css">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <!-- jQuery Circle-->
  <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
  <!-- Custom Scrollbar-->
  <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      </head>
      <body>

        <div class="page login-page">
          <div class="container">
            <div class="form-outer text-center d-flex align-items-center">
              <div class="form-inner" style="padding:40px 100px;">
                <div class="logo text-uppercase">
                  <strong class="text-primary">Login</strong>
                </div>
                <p>XpeedStudio Buyer Management Web APP</p>
                <form class="text-left form-validate">
                  <div class="form-group-material">
                    <input id="login-username" type="email" name="email" required data-msg="Please enter your email" class="input-material">
                    <label for="login-username" class="label-material">Email</label>
                  </div>
                  <div class="form-group-material">
                    <input id="login-password" type="password" name="loginPassword" required data-msg="Please enter your password" class="input-material">
                    <label for="login-password" class="label-material">Password</label>
                  </div>
                  <div class="form-group text-center"><a id="login" href="index.html" class="btn btn-primary">Login</a>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                    </div>
                  </form>
                </div>
                <div class="copyrights text-center">
                  <p>Developed by 
                    <a href="https://github.com/shahaj90" class="external">Md Shahaj</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- JavaScript files-->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/popper.js/umd/popper.min.js"> </script>
          <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
          <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
          <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
          <script src="vendor/chart.js/Chart.min.js"></script>
          <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
          <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
          <!-- Main File-->
          <script src="js/front.js"></script>
        </body>
        </html>