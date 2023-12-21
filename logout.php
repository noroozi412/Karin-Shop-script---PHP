<?php
session_start();
unset($_SESSION['login']);
// پایان سشن
header("Location: login.php");
?>