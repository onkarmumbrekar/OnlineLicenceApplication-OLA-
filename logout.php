<?php

session_start();
unset($_SESSION['user']);
session_destroy();;
header("location: http://onlinelicencedemo.url.ph/index.php");
?>