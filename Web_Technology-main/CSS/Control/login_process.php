<?php
include("../Model/db.php");
session_start();
setcookie("usercheck","visited",time()+86400);
if(isset($_COOKIE["usercheck"])){
    echo "you have visited us<br>";
}
else{
    echo "Welcome to our site<br>";
}


if(isset($_POST["submit"])){
    if(empty($_POST["uname"]) || empty($_POST["pass"])){
        echo "User name and Pass cannot be empty<br>";
    }
    else{
        $mydb=new db();
        $conobj=$mydb->opencon();
        $results=$mydb->checklogin($conobj,"user",$_POST["uname"],$_POST["pass"]);
        if($results->num_rows>0){
            $_SESSION["uname"]=$_POST["uname"];
            $_SESSION["pass"]=$_POST["pass"];
        }
        else{
            echo "user not found";
        }

    }
    if(!empty($_SESSION["uname"]) && !empty($_SESSION["pass"])){
        header("Location: ../View/profile.php");
    }
}

?>