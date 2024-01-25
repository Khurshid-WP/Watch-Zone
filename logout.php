<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['role']);
unset($_SESSION['userimg']);
header('Location:Home');
?>