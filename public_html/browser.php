<?php

$page = $_SERVER['REQUEST_URI'];
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

  <title>Browser</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
</head>
<body id="<?php print_r($page);?>">


<section id="feedback-bar">
  <div class="feedback-text">

  </div>
</section>

</body>
