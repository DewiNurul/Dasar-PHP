<?php
session_start();
include("function.php");
echo check_login();
 ?>

 <!DOCTYPE html>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <title>Praktik Login Session</title>
   </head>
   <body>
     <h1>Selamat Datang</h1>
     <h3><a href="profil.php">Edit Profil</h3>
     <h3><a href="logout.php">Logout!</h3>
   </body>
 </html>
