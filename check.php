<?php
  $login = $_POST['login'];
  $pass = $_POST['pass'];

  if($login != "admin" || $pass != "admin"){
    header("Location: http://localhost/FatimaProject/index.php?c=true");
  }else if($login == "admin" && $pass == "admin"){
    session_start();
    $_SESSION['id']=1;
    header("Location: http://localhost/FatimaProject/environState.php");
  }
?>