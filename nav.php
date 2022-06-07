<?php

include "Connection.php";
session_start();
if(isset($_SESSION['user'])){
    $log="Logout";
}else{
    $log="Login";
}




?>

<nav class="navContainer">
    <div class="container navContainer">
       <div class="brand">
       <i class="fa-solid fa-graduation-cap"></i>
       <a href="index.html">SCHOLIO</a>
   </div> 
   <ul class="navMenu">
       <li><a href="index.php">Home</a></li>
       <li><a href="aboutus.html">About</a></li>
       <li><a href="directoryProcess.php">Scholarships Directory</a></li>
       <li><a href="contact.html">Contact Us</a></li>
       <li><a href="profile.php">Profile</a></li>
       <li><a href="login.php"><?php echo $log ; ?></a></li>
   </ul>
    </div>
</nav>
