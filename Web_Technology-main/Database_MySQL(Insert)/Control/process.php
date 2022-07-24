<?php
include ("../Model/db.php");

if(isset($_POST["submission"])){
    $uanme=$_POST["uname"];
    $pass=$_POST["pass"];
    $name=$_POST["fname"];

    $mydb=new db();
    $myconn=$mydb->opencon();

    $mydb->insertuser($name,$uanme,$pass,"user",$myconn);


}

?>