<?php
session_start();
session_destroy();
header("Location: 01_ejercicio.php");
exit();