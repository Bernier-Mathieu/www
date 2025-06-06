<?php

session_start();



$_SESSION['username'] = NULL;
$_SESSION['id'] = NULL;
$_SESSION['erreur'] = NULL;
header("Location: ../index.php");
exit();

