<?php
session_start();

session_unset();

session_destroy();

/* header("location:act_02.php"); */
header("location:login.php");
?>