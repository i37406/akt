<?php
include "session.php";
unset($_SESSION['login']);
unset($_SESSION['start_time']);
unset($_SESSION['expire_time']);
unset($_SESSION['now']);
session_destroy();

    header("Location: index.php");

    //header("Location: login.php");



?>