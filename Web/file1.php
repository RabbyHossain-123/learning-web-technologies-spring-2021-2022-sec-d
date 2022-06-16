<?php
session_start();
$_SESSION["username"]="sadia";
$_SESSION["id"]="1234";
setcookie("user","sadia",time()+86400);
if(!isset($_COOKIE["user"]))
echo "cookie is set";
else
echo "cookie is not set";
?>