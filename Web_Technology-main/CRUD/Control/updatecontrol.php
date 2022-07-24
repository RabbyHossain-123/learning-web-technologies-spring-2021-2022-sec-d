<?php
session_start();
include("../Model/db.php");
$uname=$_SESSION["uname"];
$mydb= new db();
$connobj=$mydb->opencon();

$results=$mydb->Searchuserbyuname($connobj,"user",$uname);

if($results->num_rows>0){
    while($myrow=$results->fetch_assoc())
    {
        $id=$myrow["id"];
        $name=$myrow["name"];
        $username=$myrow["uname"];
        $pass=$myrow["password"];
    }
}
if(isset($_POST["update"])){
$mydb= new db();
$connobj=$mydb->opencon();
$results=$mydb->Updateprofile($connobj,"user",$_POST["id"],$_POST["name"],$_POST["uname"],$_POST["pass"]);

if($results===TRUE){
    echo "Updated";
}
else{
    echo "can't update".$connobj->error;
}
}

?>