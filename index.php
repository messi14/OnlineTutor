<?php

/*** begin our session ***/
session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );

/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Tutor Login</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style2.css">

    
    
    
  </head>

  <body>

    
<div class="container">
  <div class="info">
    <h1>Tutor Login</h1>
  </div>
</div>

<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <!--<form class="register-form" action="adduser_submit.php" method="post">
    <input type="text" placeholder="name" name="username" maxlength="20"/>
    <input type="password" placeholder="password" name="password" maxlength="20"/>
    <input type="text" placeholder="email address" name="email" maxlength="50"/>
    <button type="submit">create</button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>-->
  <form class="login-form" action="login_submit.php" method="POST">
    <input type="text" placeholder="username" name="phpro_username" maxlength="20"/>
    <input type="password" placeholder="password" name="phpro_password" maxlength="20"/>
    <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
    <button type="submit">login</button>
    <!--<p class="message">Not registered? <a href="#">Create an account</a></p>-->
  </form>
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <!--<script src="js/index.js"></script>-->

    
    
    
  </body>
</html>
