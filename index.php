<?php include('php.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Post Graduation</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <!--[if It IE 9]>
      <script
      src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
    <div id="main-header">
        <div class="container">
            <div class="row">
                <div class="main-content col-md-5">
                    <div class="frame">
                        <div class="nav">
                            <ul class="links">
                                <li class="signin-active nav-item"><a class="btn">Sign in</a></li>
                                <li class="signup-inactive nav-item"><a class="btn">Sign up </a></li>
                            </ul>
                        </div>
                        <div ng-app ng-init="checked = false" style="height: 400px;">
                            <form class="form-signin" action="homePage.php" method="post" name="form">
                                <label for="username">Username</label>
                                <input class="form-styling" type="text" name="userName" placeholder="" required />
                                <label for="password">Password</label>
                                <input class="form-styling" type="password" name="password" placeholder="" required />
                                <input type="checkbox" id="checkbox" />
                                <button type="submit" class="btnSign" name="login_user">
                                    Sign in
                                </button>
                            </form>

                            <form class="form-signup" action="homePage.php" method="post" name="form">
                                <label for="fullname">User Name</label>
                                <input class="form-styling" type="text" name="username" placeholder="" required />
                                <label for="email">Email</label>
                                <input class="form-styling" type="email" name="email" placeholder="" required />
                                <label for="password">Password</label>
                                <input class="form-styling" type="password" name="password" placeholder="" required/>
                                <label for="confirmpassword">Confirm password</label>
                                <input class="form-styling" type="password" name="confirmpassword" placeholder=""
                                    required />

                                <button type="submit" class="btnSign" name="reg_user">
                                    Sign up
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--		loading-->

    <section class="loading-overlay">
        <div class="container">
            <div class="lds-circle">
                <div></div>
            </div>
        </div>
    </section>

    <!--		scroll up-->

    <div id="scroll-up">
        <i class="fa fa-arrow-up"></i>
    </div>

    <!-- js  -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/js.js"></script>

</html>
