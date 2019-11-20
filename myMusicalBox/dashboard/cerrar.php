<?php
session_start();
unset($_SESSION['accesoAdmin']);
header("Location: login.php");

