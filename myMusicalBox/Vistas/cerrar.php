<?php
session_start();
unset($_SESSION['acceso']);
header("Location: catalogo.php");

