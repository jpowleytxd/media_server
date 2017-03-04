<?php

session_start();
include('global.php');

function hash_password($email,$password){
  return md5('POTLOCKS'.$email.$password);
}

$username = $_POST['username'];

//If username contains @ symbol
if(preg_match('/@/', $username)){
  $password = hash_password($username, $_POST['password']);
  
  $query = "SELECT * FROM users WHERE user_email = '{$username}' AND user_password = '{$password}';";
  $rows = databaseQuery($query);

  if(sizeof($rows) === 0){
    //No users found
    echo 'fail';
  } else{
    //User found
    echo 'success';
  }
} else{

  $query = "SELECT user_email FROM users WHERE user_login = '{$username}';";
  $rows = databaseQuery($query);

  if(sizeof($rows) === 0){
    //No users found
    echo 'fail';
  } else{
    //User found
    $email = $rows[0][0];
    $password = hash_password($email, $_POST['password']);

    $query = "SELECT * FROM users WHERE user_email = '{$email}' AND user_password = '{$password}';";
    $rows = databaseQuery($query);

    if(sizeof($rows) === 0){  
      //No users found
      echo 'fail';
    } else{
      //User found
      echo 'success';
    }
  }
}
?>
