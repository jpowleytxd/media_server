<?php

if(isset($_SESSION['username'])){
  unset($_SESSION['username']);
}

$page = $_SERVER['REQUEST_URI'];
var_dump($page);
$page = preg_replace('/.*\/(.*)\.php/', '$1', $page);
if($page === '/'){
  $page = 'login';
}
$page = $page . '-page';

?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0 user-scalable=no">
  <meta charset="UTF-8">

  <title>Media Server</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
  <script src="js/login.js"></script>
</head>
<body id="<?php print_r($page);?>">

<section class="login-fullpage">
  <div class="login-outer">
    <div class="login-logo">
      <span class="logo">Media Server</span>
    </div>
    <div class="login-inner">
      <form class="login-form" name="login-form" id="login-form">
        <div class="login-field">
          <label>Username or email address:</label>
          <input type="text" id="username" data-validate="username" required>
        </div>
        <div class="login-field">
          <label>Password:</label>
          <input type="password" id="password" data-validate="password" required>
        </div>
        <button type="submit" class="login-button">Login</button>
      </form>
    </div>
  </div>
</section>

<section id="feedback-bar">
  <div class="feedback-text">

  </div>
</section>

</body>
