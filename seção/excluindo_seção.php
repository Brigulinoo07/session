<?php
session_start();

$_SESSION["newsession"]=$_value;
unset( $_SESSION["newsession"]);

?>