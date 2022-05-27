<?php
include 'settings.php';
include 'utils/security.php';
Authentication :: logout();
echo " از انتخاب شما متشکریم ";
include("view/login.php");
?>