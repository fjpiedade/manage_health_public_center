<?php

session_start();
$_SESSION['user'] = null;
$_SESSION['LOGIN']= null;
unset($_SESSION);
if (session_id()) {
    session_destroy();
}
header("location:login.php");
exit();
?>
