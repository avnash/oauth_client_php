<?php
@session_start();
require 'OAuth_config.php';
require 'OAuth.php';

$oauth = new OAuth();
print_r($_SESSION);
$oauth->init();
if($oauth->user['loggedIn']){
  print_r($oauth->user);
  echo "<a href='$oauth->signoutURL'>Sign Out</a> " ;
}
else {
  echo "<a href='$oauth->signinURL'>Sign In</a> "  ;
}
