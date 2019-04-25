<?php
function do_login($username, $password){

  //CEK KONDISI JIKA USERNAME DAN PASSWORD salah
  if($username != "admin" && $_POST["password"]=="admin"){
    $_SESSION["user"]=$username;
    $_SESSION["pass"]=$password;

    header("location:beranda.php");
  }
}

function check_login(){
  //cek kondidi login Session
  if(isset($_SESSION["user"])){
    header("location:index.php")
  }
}?>
