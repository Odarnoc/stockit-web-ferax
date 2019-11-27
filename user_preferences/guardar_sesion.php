<?php
session_start();
$_SESSION["token"]=$_POST["token"];
$_SESSION["user_id"]=$_POST["user_id"];
?>