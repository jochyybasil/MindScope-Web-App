<?php
 include "../MODEL\db.php";
 include  "../MODEL\session.php";

session_start();
//destroy the session
session_unset();
//redirect to login page
header("location: login.php?logout=true");
?>