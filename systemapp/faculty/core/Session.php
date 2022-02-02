<?php
/**
*Session Class
**/
class Session{
 public static function init(){
  if (version_compare(phpversion(), '5.4.0', '<')) {
        if (session_id() == '') {
            session_start();
        }
    } else {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
 }

 public static function setUser($key, $val){
  $_SESSION[$key] = $val;
 }

 public static function getUser($key){
  if (isset($_SESSION[$key])) {
   return $_SESSION[$key];
  } else {
   return false;
  }
 }

 public static function checkUserSession(){
  self::init();
  if (self::getUser("Userlogin")== false) {
   self::destroyUser();
   header("Location: index.php");
  }
 }

 public static function checkLogin(){
  self::init();
  if (self::getUser("Userlogin")== true) {
   header("Location:../../home.php");
  }
 }
 public static function destroyUser(){
  session_destroy();
  header("Location:index.php");
 }
}
?>