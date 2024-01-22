<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['role']);
header('Location:Home')
?>